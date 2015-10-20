$(function(){
	backImgHeight($('.backImg'));

	fontMarginLeft();
	text();
	downRun();
	//greenFontShow(1,$('.backImg .center .Ctitle a').eq(0));
	greenFontShowMain();
	//skillRun();
	
	//ballRun();
	MainObjBall.goMainObjBall();
	playVadio.init();
	submit.init();
	showCon();
	fixedNav.go();
	scrollMove();
});

function text(){
	var width = $(window).width();
	var bi = 493*width/10000/62;

	if(width < 1024)
		width = 1024;

	$('.backImg header').css({'height':69*bi+'px','margin-bottom':45*bi+'px'});
	$('.backImg header div').css({'line-height':75*bi+'px'});
	$('.backImg .logo').css('font-size',30*bi+'px');
	$('.backImg .logo img').css({'width':62*bi+'px','margin-left':59*bi+'px','margin-right':15*bi+'px','margin-top':7*bi+'px'});
	$('.backImg .title ul').css('margin-right',80*bi+'px');
	$('.backImg .title a').css('font-size',18*bi+'px');
	$('.backImg .center .Ctitle').css('width',420*bi+'px');
	$('.backImg .center .Ctitle a').css({
		'width':392*bi+'px',
		'height':95*bi+'px',
		'margin-bottom':15*bi+'px',
		'font-size':51*bi+'px',
		'line-height':95*bi+'px',
		'margin-left':-420*bi+'px',
		'padding-right':28*bi+'px'

	});
	$('.backImg .center .font').css('width',560*bi+'px');
	$('.backImg .center .font>div').css({
		'margin-top':220*bi+'px',
		'font-size':60*bi+'px'
	});
	$('.backImg .center img').css({
		'margin-top':20*bi+'px',
		'width':62*bi+'px'
	});
	$('.backImg .center .font>div .en').css({
		'margin-left':75*bi+'px',
		'font-size':14*bi+'px',
		'top':-22*bi+'px'
	});
	$('.sm').css('font-size',50*bi+'px');
	$('.backImg .center .two').css('margin-left',10*bi+'px');
	$('.backImg .center .three').css('margin-left',20*bi+'px');
	$('.backImg .center .four').css('margin-right',75*bi+'px');
	$('.backImg footer img').css('width',15*bi+'px');
}

//自适应高度，满屏。
function backImgHeight(item)
{
	var height = $(window).height();
	if(height<630)
		height=630;
	item.css('height',height);
}
//确定大标题居中
function fontMarginLeft()
{
	
	var width = (($(window).width())/2 - (510*(493*$(window).width()/10000/62)));	
	width=width>=0?width:0;
	$('.backImg .font').css('margin-left',width+'px');
}
//下拉箭头抖动
function downRun()
{
	var i = 0;
	var item = $('.backImg footer');
	setInterval(function(){
		item.css('margin-bottom',i+'px');
		i+=5;
		if(i >= 10)
			i = 0;
	},200);
}
//载入大绿字主函数
function greenFontShowMain(){
	var a = $('.backImg .center .Ctitle a');
	var i=0;
	for(var j=0;j<a.length;j++)
	{
		setTimeout(
			(function(item){
			return function(){
				greenFontShow(item);
			}
			})(a.eq(j))
			,i);
		i+=100;
	}
}
//载入大绿字动画函数
function greenFontShow(item){
	item.animate({'margin-left':'0px'},500);
}
//设置技能栏的旋转动画 css3动画实现，但兼容性有问题。只在谷歌内核中可用
// function skillRun(){
// 	var li = $('.aboutMe .skill li');
// 	setInterval(function(){
// 		var rand = parseInt(Math.random() * 4);
// 		 li.eq(rand).css({
// 		 	'animationPlayState':'running',
// 		 	'-webkit-animationPlayState':'running',
// 		 	'-o-animationPlayState':'running',
// 		 	'-ms-animationPlayState':'running'
// 		 });
// 		 setTimeout(function(){
// 		 	 li.eq(rand).css({
// 		 	'animationPlayState':'paused',
// 		 	'-webkit-animationPlayState':'paused',
// 		 	'-o-animationPlayState':'paused',
// 		 	'-ms-animationPlayState':'paused'
// 		 });
// 		 },500);
// 	},3000);

// }

var MainObjBall = {
	skillRunJs_i : 0.0,
	skillRunJs_time : null,
	skillRunJs_item : null,
	ballRun_ball : null,
	ballRun_balls : null,
	ballRun_i : 0,
	car_i : -119,
	car_item : null,
	cRunB : null,
	cRunS : null,
	carRunFun : function(){
		MainObjBall.car_item.css('margin-left',MainObjBall.car_i+'px');
		MainObjBall.car_i += 2 ;
		if(MainObjBall.car_i >= 920)
			MainObjBall.car_i = -119;
	},
	goMainObjBall : function(){
		MainObjBall.ballRun_ball = $('.aboutMe .ball .wholeB');
		MainObjBall.ballRun_balls = $('.aboutMe .ball .wholeB div');
		MainObjBall.car_item = $('.business .car img');
		MainObjBall.cRunB = $('.money .cRun .run');
		MainObjBall.cRunS = $('.money .cRun .run .font');
		MainObjBall.ballRun();
	},
	skillRunJsFun : function(){

			MainObjBall.skillRunJs_item.css({
				'transform':'rotateY('+ MainObjBall.skillRunJs_i +'deg)',
				'-ms-transform':'rotateY('+ MainObjBall.skillRunJs_i +'deg)', 	
				'-moz-transform':'rotateY('+ MainObjBall.skillRunJs_i +'deg)', 	
				'-webkit-transform':'rotateY('+ MainObjBall.skillRunJs_i +'deg)', 
				'-o-transform':'rotateY('+ MainObjBall.skillRunJs_i +'deg)'
			});
			if(MainObjBall.skillRunJs_i >= 360)
			{
				MainObjBall.skillRunJs_i = 0.0;
				clearInterval(MainObjBall.skillRunJs_time);
				
			}
			else
				MainObjBall.skillRunJs_i += 3.6;
		},
	skillRunJs : function()
		{
			MainObjBall.skillRunJs_time = setInterval(MainObjBall.skillRunJsFun,10);
		},
	cRun : function(){
			MainObjBall.cRunB.css({
				'transform':'rotate('+ MainObjBall.ballRun_i/10 +'deg)',
				'-ms-transform':'rotate('+ MainObjBall.ballRun_i/10 +'deg)', 	
				'-moz-transform':'rotate('+ MainObjBall.ballRun_i/10 +'deg)', 	
				'-webkit-transform':'rotate('+ MainObjBall.ballRun_i/10 +'deg)', 
				'-o-transform':'rotate('+ MainObjBall.ballRun_i/10 +'deg)'
			});
			MainObjBall.cRunS.css({
				'transform':'rotate(-'+ MainObjBall.ballRun_i/10 +'deg)',
				'-ms-transform':'rotate(-'+ MainObjBall.ballRun_i/10 +'deg)', 	
				'-moz-transform':'rotate(-'+ MainObjBall.ballRun_i/10 +'deg)', 	
				'-webkit-transform':'rotate(-'+ MainObjBall.ballRun_i/10 +'deg)', 
				'-o-transform':'rotate(-'+ MainObjBall.ballRun_i/10 +'deg)'
			});
	},	
	ballRunFun : function(){
			MainObjBall.ballRun_ball.css({
				'transform':'rotate('+ MainObjBall.ballRun_i/15 +'deg)',
				'-ms-transform':'rotate('+ MainObjBall.ballRun_i/15 +'deg)', 	
				'-moz-transform':'rotate('+ MainObjBall.ballRun_i/15 +'deg)', 	
				'-webkit-transform':'rotate('+ MainObjBall.ballRun_i/15 +'deg)', 
				'-o-transform':'rotate('+ MainObjBall.ballRun_i/15 +'deg)'
			});
			MainObjBall.ballRun_balls.css({
				'transform':'rotate(-'+ MainObjBall.ballRun_i/15 +'deg)',
				'-ms-transform':'rotate(-'+ MainObjBall.ballRun_i/15 +'deg)', 	
				'-moz-transform':'rotate(-'+ MainObjBall.ballRun_i/15 +'deg)', 	
				'-webkit-transform':'rotate(-'+ MainObjBall.ballRun_i/15 +'deg)', 
				'-o-transform':'rotate(-'+ MainObjBall.ballRun_i/15 +'deg)'
			});
			MainObjBall.ballRun_i ++;

			//同一个定时器同时加载技能动画，效率
			if(MainObjBall.ballRun_i%300 == 0)
			{
				var rand = parseInt(Math.random() * 4);
				MainObjBall.skillRunJs_item = $('.aboutMe .skill li').eq(rand);
				MainObjBall.skillRunJs();
			}
			if(MainObjBall.ballRun_i === 5400)
				MainObjBall.ballRun_i = 0 ;
			MainObjBall.carRunFun();
			MainObjBall.cRun();


		},
	ballRun : function(){
			setInterval(MainObjBall.ballRunFun,10);
		}
}

var playVadio = {
    isPlay : false,
	init : function(){
		var item = $('.know .news .vadio .w div');
		var myAudio = document.getElementById('myAudio');
		item.click(function(){
			if(!playVadio.isPlay)
			{
				$('.know .news .vadio .w').css('background-color','rgba(225,225,225,0)');
				playVadio.isPlay = true;
				$('.know .news .vadio .w .s').css('display','block');
				$('.know .news .vadio .w .c').css('display','none');
				myAudio.play();
			}
			else
			{
				$('.know .news .vadio .w').css('background-color','rgba(225,225,225,0.57)');
				playVadio.isPlay = false;
				$('.know .news .vadio .w .s').css('display','none');
				$('.know .news .vadio .w .c').css('display','block');
				myAudio.pause();
			}
		});
	}


}
var submit = {
	contant : {
		name : "",
		mail : "",
		tel : "",
		qq : "",
		skill : "",
		mes : ""	
	},
	clickType : function(){
		var item = $('.input .top .right>div ul li');
		item.click(function(){
			var index = submit.contant.skill.indexOf($(this).children('span').html());
			if(index === -1)
			{
				$(this).children('div').css('background-color','#6CFF00');
				submit.contant.skill += $(this).children('span').html() + ';';
			}
			else
			{
				$(this).children('div').css('background-color','white');
				submit.contant.skill = submit.contant.skill.replace($(this).children('span').html() + ';',"");
			}
		});
	},
	submitClick : function(){
		var item = $('#submit');
		item.click(function(){
			if(!$('[name = "names"]').val())
			{
				alert('name is null!');
				return;
			}
			if(!$('[name = "tel"]').val())
			{
				alert('tel is null!');
				return;
			}
			submit.contant.name = $('[name = "names"]').val();
			submit.contant.mail = $('[name = "mail"]').val();
			submit.contant.qq = $('[name = "qq"]').val();
			submit.contant.tel = $('[name = "tel"]').val();
			submit.contant.mes = $('.input textarea').val();
			$.ajax({
				url : 'insertPersonC.php',
				type : 'post',
				data : submit.contant,
				success : function(data){
					if(data-0)
					{
						alert('Its Ok!');
						$('html,body').animate({
							scrollTop:$('#lastTu').offset().top
						},400);
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
	},
	init : function(){
		submit.clickType();
		submit.submitClick();
	}
}
var showCon = function(){
	var logo = $('.know .news ul li>img');
	$(document).on('click','.know .news ul li>img',function(){
		var con = $(this).siblings('.con');
		if(!this.dis)
		{
			con.css('display','block');
			$(this).attr('src','img/upG.png');
			this.dis = true;
		}
		else
		{
			con.css('display','none');
			$(this).attr('src','img/downG.png');
			this.dis = false;
		}
	});
	// logo.click(function(){
	// 	var con = $(this).siblings('.con');
	// 	if(!this.dis)
	// 	{
	// 		con.css('display','block');
	// 		$(this).attr('src','img/upG.png');
	// 		this.dis = true;
	// 	}
	// 	else
	// 	{
	// 		con.css('display','none');
	// 		$(this).attr('src','img/downG.png');
	// 		this.dis = false;
	// 	}
	// });
	var more = $('.know .news ul li>span>img');
	more.click(function(){

		var type = 'news';
		var html = '';
		var that = $(this);
		var datas = {};
		if($(this).parent('span').parent('li').parent('ul').parent('div').hasClass('N'))
			type = 'news';
		else if($(this).parent('span').parent('li').parent('ul').parent('div').hasClass('K'))
			type = 'know';
		else
		{
			alert("Error!");
			return;
		}
		$.ajax({
			url : 'getNews.php?type=' + type,
			type : 'get',
			success : function(data){
				datas = JSON.parse(data);
				for(var i in datas['data'])
				{
					html += '<li>'+
					ma[i-0+5]+
					 datas['data'][i]['title']+
					'<img class="right" src="img/downG.png"></img><div class="con">'+
					datas['data'][i]['contant']+				
					'</div></li>';
				}
				that.parent('span').parent('li').before(html);
				that.parent('span').parent('li').css('display','none');

			},
			error : function()
			{
				alert("Server Error!");
			}

		});
	});
}

var fixedNav = {
	before : 0,
	fix : true,
	hua : true,
	fixedY : true,
	navDownMouseOver : function(){
		$('#navDown').mouseover(function(){
			fixedNav.hua = false;
			$('#nav').animate({'top':'0px'},500,function(){
				fixedNav.hua = true;
			});
		});
	},
	go : function(){
		$(window).scroll(function(){
			if(fixedNav.fix && $(document).scrollTop() >= 672)
			{

				$('#nav').css({'position':'fixed','top':'0px','width':'100%'});
				$('#navDown').css({'width':'100%','height':'61px','z-index':'900','position':'fixed','top':'0px'});
				fixedNav.fix = false;
			}
			else if($(document).scrollTop() < 672)
			{
				$('#nav').css({'position':'','top':'0px'});
				$('#navDown').css("height",'0px');
				fixedNav.fix = true;
			}
			if(fixedNav.fixedY && $(document).scrollTop() >= 130)
			{
				$('#fixedY').animate({'bottom':'30px'},300);
				fixedNav.fixedY = false;
			}
			else if($(document).scrollTop() < 130)
			{
				$('#fixedY').animate({'bottom':'-100px'},300);
				fixedNav.fixedY = true;
			}
			if(fixedNav.hua)
			{
				if($(document).scrollTop() > fixedNav.before)
				{
					fixedNav.hua = false;
					$('#nav').animate({'top':'-61px'},500,function(){
						fixedNav.hua = true;
					});
					
				}
				else 
				{
					fixedNav.hua = false;
					$('#nav').animate({'top':'0px'},500,function(){
						fixedNav.hua = true;
					});
					
					
				}
			}
			if($(document).scrollTop() >= 4051)
			{
				fixedNav.money = false;
				moneyShow();
			}
			fixedNav.before = $(document).scrollTop();
	});
			fixedNav.navDownMouseOver();

}
}
function moneyShow(){
	$('.money .tu .w').animate({'margin-left':'0px'},1500);
}
function scrollMove()
{
	$('.scrollAboutMe').click(function(){
		$('html,body').animate({
			scrollTop:$('#aboutMe').offset().top - 150
		},400);
		return false;
	});
	$('.scrollbusiness').click(function(){
		$('html,body').animate({
			scrollTop:$('#business').offset().top + 100
		},400);
		return false;
	});
	$('.scrollmoney').click(function(){
		$('html,body').animate({
			scrollTop:$('#money').offset().top - 150
		},400);
		return false;
	});
	$('.scrollknow').click(function(){
		$('html,body').animate({
			scrollTop:$('#know').offset().top - 150
		},400);
		return false;
	});
	$('.scrollme').click(function(){
		$('html,body').animate({
			scrollTop:$('#inputTitle').offset().top
		},400);
		return false;
	});
	$('.scrollbackImg').click(function(){
		$('html,body').animate({
			scrollTop:'0px'
		},400);
		return false;
	});
}










// //设置技能栏的旋转动画，js实现
// function skillRunJs(item){
// 	var i = 0.0;
// 	var time = setInterval(skillRunJsFun,10);
// }
// //前者函数循环体  听说提出来更省内存
// var skillRunJsFun=function(){
// 		item.css({
// 			'transform':'rotateY('+ i +'deg)',
// 			'-ms-transform':'rotateY('+ i +'deg)', 	
// 			'-moz-transform':'rotateY('+ i +'deg)', 	
// 			'-webkit-transform':'rotateY('+ i +'deg)', 
// 			'-o-transform':'rotateY('+ i +'deg)'
// 		});
// 		if(i >= 360)
// 			clearInterval(time);
// 		i+=3.6;
// 	};



// //星球转动
// function ballRun(){
// 	var ball = $('.aboutMe .ball .wholeB');
// 	var balls = $('.aboutMe .ball .wholeB div');
// 	var i=0;
// 	// transform:rotate(7deg);
// 	// -ms-transform:rotate(7deg); 	
// 	// -moz-transform:rotate(7deg); 	
// 	// -webkit-transform:rotate(7deg); 
// 	// -o-transform:rotate(7deg); 
// 	setInterval(ballRunFun,10);
// }
// //前者函数循环体  听说提出来更省内存
// var ballRunFun=function(){
// 		ball.css({
// 			'transform':'rotate('+ i/10 +'deg)',
// 			'-ms-transform':'rotate('+ i/10 +'deg)', 	
// 			'-moz-transform':'rotate('+ i/10 +'deg)', 	
// 			'-webkit-transform':'rotate('+ i/10 +'deg)', 
// 			'-o-transform':'rotate('+ i/10 +'deg)'
// 		});
// 		balls.css({
// 			'transform':'rotate(-'+ i/10 +'deg)',
// 			'-ms-transform':'rotate(-'+ i/10 +'deg)', 	
// 			'-moz-transform':'rotate(-'+ i/10 +'deg)', 	
// 			'-webkit-transform':'rotate(-'+ i/10 +'deg)', 
// 			'-o-transform':'rotate(-'+ i/10 +'deg)'
// 		});
// 		i++;

// 		//同一个定时器同时加载技能动画，效率
// 		if(i%300==0)
// 		{
// 			var rand = parseInt(Math.random() * 4);
// 			skillRunJs($('.aboutMe .skill li').eq(rand));
// 		}
// 		if(i === 3600)
// 			i = 0 ;


// 	};
