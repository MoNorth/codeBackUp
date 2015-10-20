$(function(){
	$(document).on('click', '.person>li .jian .center,.news .open,.know .open', function() {
	  if(!this.clicked)
		{
			$(this).siblings('.more').css('display','block');		
			$(this).html('收起 <img src="img/adminU.png">');
			this.clicked = true;
		}
		else
		{
			$(this).siblings('.more').css('display','none');
			$(this).html('展开 <img src="img/adminD.png">');
			this.clicked = false;
		}
	});
	$(document).on('click','.connectMe .person .del',function(){
		var con = confirm('是否删除');
		if(con)
		{
			var id = $(this).attr('tag') - 0;
			var that =$(this);
			$.ajax({
				url : 'delPerson.php?id=' + id,
				type : 'get',
				success : function(data){
					if(data)
					{
						that.parent('.jian').parent('li').remove();
					}
					else
						alert("Error!");

				}

			});
		}
	});
	$(document).on('click','.k ul li .del',function(){
		var con = confirm('是否删除');
		if(con)
		{
			var id = $(this).attr('tag') - 0;
			var type = "";
			var that = $(this);
			if($(this).parent('li').parent('ul').parent('div').hasClass('news'))
				type = 'news';
			else if($(this).parent('li').parent('ul').parent('div').hasClass('know'))
				type = 'know';
			else
			{
				alert("Error");
				return;
			}
			$.ajax({
				url : 'delNews.php?id=' + id + '&type=' + type,
				type : 'get',
				success : function(data){
					if(data-0)
					{
						alert('Its Ok!');
						that.parent('li').remove();
					}
					else
						alert("Error!");
				},
				error : function()
				{
					alert("Server Error!");
				}
			});
		}




	});
	$('.connectMe h2').click(function(){
		var tag = $(this).attr('tag') - 0;
		getPerson(tag);
	});
	$('.forms button').click(function(){
		var data = {};
		var url = '';
		if($(this).parent('.forms').parent('div').hasClass('news'))
			url = 'addNews.php?type=news';
		else if($(this).parent('.forms').parent('div').hasClass('know'))
			url = 'addNews.php?type=know';
		else
		{
			alert("Error");
			return;
		}
		data.title = $(this).siblings('input').val();
		if(!data.title)
		{
			alert("No Title!");
			return;
		}
		data.contant = $(this).siblings('textarea').val();
		if(!data.contant)
		{
			alert("No Contant!");
			return;
		}
		$.ajax({
			url : url,
			type : 'post',
			data : data,
			success : function(data){
				if(data-0)
				{
					alert('Its Ok!');
					window.location.reload();
				}
				else
					alert("Error!");
			},
			error : function()
			{
				alert("Server Error!");
			}
		});

	});

	$(document).on('click','.but',function(){
		var id = $(this).attr('tag') - 0;
		var data = $(this).siblings('textarea').val();
		$.ajax({
			url : 'updataPerson.php?id=' + id + '&data=' + data,
			type : 'get',
			success :function(datas){
				if(datas - 0)
					alert("It's OK!");
				else
					alert("Error!");
			},
			error : function(){
				alert("Server Error!");
			}
		});
	});
	// $('.person>li .jian .center,.news .open,.know .open').click(function(){
	// 	if(!this.clicked)
	// 	{
	// 		$(this).siblings('.more').css('display','block');		
	// 		$(this).html('收起 <img src="img/adminU.png">');
	// 		this.clicked = true;
	// 	}
	// 	else
	// 	{
	// 		$(this).siblings('.more').css('display','none');
	// 		$(this).html('展开 <img src="img/adminD.png">');
	// 		this.clicked = false;
	// 	}
	// });
	getPerson(0);
});

function getPerson(num)
{

	var datas = {};
	var node = $('.connectMe .person');
	var html = '';
	var h2 = $('.connectMe h2');
	$.ajax({
		url : 'getPerson.php?num=' + num,
		type : 'get',
		success : function(data){
			if(data)
			{
				datas = JSON.parse(data);
				h2.attr('tag',datas['num']);

				for(var i in datas['data'])
				{
					var skill = '';
					var skillArray = datas['data'][i]['skill'].split(';');
					for(var j = 0 ; j< skillArray.length - 1 ;  j++)
					{
						skill += '<li>' +skillArray[j] + '</li>';
					}

					html += '<li><div class="jian"><div class="left">联系人'+(num++-0+1)+'</div>'+
					'<div class="more"><div class="top"><div class="right"><ul>'+
					skill+
					'</ul></div><div class="inputCon"><div><ul>'+
					'<li>姓名： <span>' + datas['data'][i]['name'] +'</span></li>'+
					'<li>电话：<span>' +datas['data'][i]['tel'] + '</span></li>'+
					'<li>qq：<span>' + datas['data'][i]['qq'] + '</span></li>'+
					'<li id="w">邮箱：<span>'+datas['data'][i]['mail']+'</span></li>'+
					'</ul></div><div class="liuyan">'+
					'留言： <span>'+datas['data'][i]['mes']+'</span>'+
					'</div></div><div class="bottom">'+
					'我的备注：<button class="but" tag=' +  datas['data'][i]['id'] + '>保存</button> <textarea>'+datas['data'][i]['myMes']+'</textarea>'+
					'</div></div></div>'+
					'<div class="right del" tag="'+datas['data'][i]['id']+'">删除 <img src="img/del.png"></div>'+
					'<div class="center">展开 <img src="img/adminD.png"></div></div></li>';
							
				}
				node.append(html);	
			}
			else
				alert("No More!");
		}
	});
}