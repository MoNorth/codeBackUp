<?php
	require 'newsDataBase.php';
	require 'ma.php';
	$news = new newsMode();
	$dataNews = $news ->get(0,5,'news');
	$dataKnow = $news ->get(0,5,'know');
	$news ->close();
	
	
?>

<!DOCTYPE html>
<html>
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
<meta charset="UTF-8" />
<head>
	<title>Accunting</title>
	<link rel="icon" href="favicon.ico" type="image/x-icon"/>
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<script type="text/javascript" src="js/ma.js"></script>
	<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" src="js/index.js"></script>
</head>
<body>
	<!--首页-->
	<div class="backImg" id="backImg">
		<header>
			<div class="logo left">
				<img src="img/logo1.png">
				Accunting
			</div>
			<div class="title right">
				<ul>
					<li><a class="scrollme" href="#inputTitle">联系我</a></li>
					<li><a class="scrollknow" href="#know">税务知识</a></li>
					<li><a class="scrollmoney" href="#money">资费情况</a></li>
					<li><a class="scrollbusiness" href="#business">业务指南</a></li>
					<li><a class="scrollAboutMe" href="#aboutMe">关于我</a></li>
					<li><a class="scrollbackImg" href="#backImg">首页</a></li>
				</ul>
			</div>
		</header>
		<div class="center">
			<div class="left Ctitle">
					<a href="#inputTitle">快速注册公司</a>
					<a href="#inputTitle">专业代理记账</a>
					<a href="#inputTitle">实时财务咨询</a>
					<a href="#inputTitle">专业会计服务</a>

			</div>
			<div class="left font">
				<div>
					<span>王玥蓓</span>
					<img src="img/logo2.png">
					<span class="sm">会计工作室</span>
					<div class="clear"></div>
					<div class="en">
						<span class="one">Wang</span>
						<span class="two">Yuebei</span>
						<span class="three">Accunting</span>
						<span class="four">Studio</span>
					</div>
				</div>
			</div>
		</div>
		<footer>
			<a class="scrollAboutMe" href="#aboutMe">
				<img src="img/down.png">
			</a>
		</footer>
	</div>
	<nav id="nav">
		<div class="logo left">
			<img src="img/logo3.png">
		</div>
		<div class="tel right">MY TEl:18091730818</div>
		<div class="title right">
			<li><a class="scrollme" href="#inputTitle">联系我</a></li>
			<li><a class="scrollknow" href="#know">税务知识</a></li>
			<li><a class="scrollmoney" href="#money">资费情况</a></li>
			<li><a class="scrollbusiness" href="#business">业务指南</a></li>
			<li><a class="scrollAboutMe" href="#aboutMe">关于我</a></li>
			<li><a class="scrollbackImg" href="#backImg">首页</a></li>
		</div>
	</nav>
	<div id="navDown"></div>
	<div class="aboutMe" id="aboutMe">
		<div class="font">
			<h1>About Me</h1>
			<p>
				 本人为人诚实、守信，有较强的沟通协调能力。具有良好的职业道德，规范的操作体系。熟练操做各种财务软件、OFFICE等办公软件。熟悉一般纳税人和小规模及各行业会计工作流程，税务工商法规政策。会计工作经验丰富，已成功为多家公司办理了工商注册、变更、年检等相关业务，具有良好的口碑和信誉！本着诚信做人、专业做事、质优价廉的服务态度为贵公司提供快捷、专业的服务。
			</p>
			<p>
				主要代办业务有：工商注册代理（代办工商营业执照注册），企业工商年检、公示。代办企业变更、注销登记；分公司工商注册代理（代办分公司工商营业执照）；代码证、税务登记代理。提供：省工商局、市工商局；区工商局的事务咨询。
			</p>
			<p>
				  从贵公司成立开始，将为贵公司扬起远行的航帆，为公司层层把关、排障解忧，让贵公司在以后的发展道路中一路畅通，一路驰骋！
			</p>
		</div>
		<img src="img/person.png">
		<div class="skill">
			<li>
				<img src="img/soft.png">
				<h2>自带财务软件</h2>
				<h3>office及会计软件</h3>
			</li>
			<li>
				<img src="img/people.png">
				<h2>主要服务对象</h2>
				<h3>中小型企业</h3>
			</li>
			<li>
				<img src="img/skill.png">
				<h2>掌握专业技能</h2>
				<h3>会计工作流程/ 税务工商法规政策</h3>
			</li>
			<li>
				<img src="img/clock.png">
				<h2>工作经验</h2>
				<h3>五年以上</h3>
			</li>
		</div>
		<div class="ball">
			<div class="title">
				<img src="img/zuobiao.png" class="left">
				<span class="left">主要服务范围</span>
				<p>主要服务业务区域为陕西安区的三桥、西咸新区、丰东新城、莲湖区、渭城区等</p>
			</div>
			<div class="wholeB">
				<div class="ball7">碑林区</div>
				<div class="ball8">长安区</div>
				<div class="red">西安</div>
				<div class="green">三桥</div>
				<div class="blue">莲湖区</div>
				<div class="yellow">西咸新区</div>
				<div class="grew"> &nbsp;&nbsp;雁塔区</div>
				<div class="blueB">沣东新城</div>
				<div class="white">渭城区</div>
			</div>
		</div>
	</div>
	<div class="business" id="business">
		<div class="car">
			<img src="img/car.png">
		</div>
		<h1>业务范围</h1>
		<ul>
			<li>
				<div class="li">
					<img class="left" src="img/business1.png"></img>
					<div class="title left">
						<h1>建账记账</h1>
						<span>
							
						</span>
					</div>
					<div class="font">1.上门取票&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2.审核整理原始凭证、制作会计凭证&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.登记账册（总账.明细账.现金日记账.银行账等）&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.编制财务报表（资产负债表、损益表等）&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5.打印装订会计凭证、会计账簿 等 </div>
				</div>
				<img src="img/line.png">
			</li>
			<li>
				<div class="li">
					<img class="left" src="img/business2.png"></img>
					<div class="title left">
						<h1>
							申报纳税 
						</h1>
						<span>
							(所得税汇算清缴等)
						</span>
					</div>
					<div class="font">1.与企业沟通当月税赋情况。&nbsp;&nbsp;&nbsp;2.填写纳税申报表 。&nbsp;&nbsp;&nbsp;3.纳税申报 。&nbsp;&nbsp;&nbsp;4.及时通知企业当月报税情况 。&nbsp;&nbsp;&nbsp;5.向客户传递财税新政策。&nbsp;&nbsp;&nbsp;6.日常电话解答客户疑问 。&nbsp;&nbsp;&nbsp;7.所得税汇算清缴等。</div>
				</div>
				<img src="img/line.png">
			</li>
			<li>
				<div class="li">
					<img class="left" src="img/business3.png"></img>
					<div class="title left">
						<h1>
							工商注册 
						</h1>
						<span>
							 {省照、市照、分公司 <br/>（内资）&nbsp;（含 个体）}
						</span>
					</div>
					<div class="font">基本流程：&nbsp;&nbsp;&nbsp;&nbsp;客户提供基本资料、核准名称、验资（特殊行业）、整理材料办理营业执照、组织机构代码证、税务登记证、【银行开户许可证、银行机构信用代码证（后期代 账可免费）】等。
客户需要提供以下资料：1.全体股东身份证复印件   2.股东之间的投资比例、注册资金    3.拟好的企业名称   4.拟好的公司经营范围     5.企业住所证明（房产证或购房合同复印件）等</div>
				</div>
				<img src="img/line.png">
			</li>
			<li>
				<div class="li">
					<img class="left" src="img/business4.png"></img>
					<div class="title left">
						<h1>
							工商税务登记 
						</h1>
						<span>
							(年检、变更、注销)
						</span>
					</div>
					<div class="font">1工商税务的登记&nbsp;&nbsp;&nbsp;&nbsp;2.执照年检&nbsp;&nbsp;3.代码证年检&nbsp;&nbsp;&nbsp;4.企业法人、地址、经营范围变更等</div>
				</div>
				<img src="img/line.png">
			</li>
			<li>
				<div class="li">
					<img class="left" src="img/business5.png"></img>
					<div class="title left">
						<h1>
							申请领购发票 
						</h1>
						<span>
							(认证发票等事宜 )
						</span>
					</div>
					<div class="font">协助企业首次申请、递交材料、领购发票！协助企业在日常工作中认证发票等事宜</div>
				</div>
				<img src="img/line.png">
			</li>
			<li>
				<div class="li">
					<img class="left" src="img/business6.png"></img>
					<div class="title left">
						<h1>
							其它有关税务 
						</h1>
						<span>
							(以及其他财务事项)
						</span>
					</div>
					<div class="font"> 企业在合作中有任何有关税务工商方面的疑问、可随时致电咨询（18091730818）。 &nbsp;为您提供全天式一站式服务。</div>
				</div>
				<img src="img/line.png">
			</li>
		</ul>
	</div>
	<div class="money" id="money">
		<h1>资费情况</h1>
		<p>兼职会计服务费：小规模300起  一般纳税人600起<br/>
			工商注册服务费：800元拿齐五证（  营业执照、组织机构代码证、税务登记证、银行开户许可证、银行信用机构代码证）
		</p>
		<h2>兼职会计服务</h2>
		<div class="table">
			<div class="tu right">
				<div class="w"><div class="font1">300元起</div></div>
				<div class="s"></div>
				<div class="w"><div class="font2">600元起</div></div>
				<div class="z">
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
				</div>
			</div>
			<div class="right font">
				<h2>小规模</h2>
				<div class="s"></div>
				<h2>一般纳税人</h2>
			</div>
			<div class="clear"></div>
			<div class="bottomLi">
				<li>100</li>
				<li>200</li>
				<li>300</li>
				<li>400</li>
				<li>500</li>
				<li>600</li>
				<li>700<span>（元）</span></li>
			</div>
		</div>
		<h2>工商注册服务费</h2>
		<div class="cRun">
			<div class="run">
				<div class="font">
					五证齐全只要<br/>
  					<span>&nbsp;800元！</span>
				</div>
			</div>
			<p>（服务费不包括工商服务收费及刻章费用）</p>
		</div>
	</div>
	<div class="know" id="know">
		<h1>税务知识</h1>
		<div class="wawa">
			<img class="left" src="img/wawa.png"></img>
			<div class="left">
				<p>
					亲，这里有税务最新政策提醒，税务尝试普及~<br/>
					如果您有其他的问题可以到留言板留言哦~
				</p>
			</div>
		</div>
		<div class="news N">
			<h2 class="left">最新税务知识</h2>
			<ul class="left">
			<?php
				if($dataNews)
				for($i = 0; $i<count($dataNews); $i ++)
				{
					echo '<li>';
					echo $ma[$i];
					echo $dataNews[$i]['title'];
					// 一、国家税务总局61号公告：进一步扩大小型微利企业减半征收企业所得税范围问题再明确 
					echo '<img class="right" src="img/downG.png"></img><div class="con">';
					echo $dataNews[$i]['contant'];
									
					echo '</div></li>';
				}
			?>
				<!-- <li>一、国家税务总局61号公告：进一步扩大小型微利企业减半征收企业所得税范围问题再明确 
					<img class="right" src="img/downG.png"></img>
					<div class="con">
						<p>为支持小型微利企业发展，贯彻落实国务院第102次常务会议决定，根据《中华人民共和国企业所得税法》（以下简称企业所得税法）及其实施条例、《财政部、国家税务总局关于进一步扩大小型微利企业所得税优惠政策范围的通知》（财税〔2015〕99号）等规定，现就进一步扩大小型微利企业减半征收企业所得税优惠政策范围有关实施问题公告如下：</p>
						<p>一、自2015年10月1日至2017年12月31日，符合规定条件的小型微利企业，无论采取查账征收还是核定征收方式，均可以享受财税〔2015〕99号文件规定的小型微利企业所得税优惠政策（以下简称减半征税政策）。</p>
						<p>二、符合规定条件的小型微利企业自行申报享受减半征税政策。汇算清缴时，小型微利企业通过填报企业所得税年度纳税申报表中“资产总额、从业人数、所属行业、国家限制和禁止行业”等栏次履行备案手续。</p>
						<p>三、企业预缴时享受小型微利企业所得税优惠政策，按照以下规定执行：</p>
						<p>（一）查账征收企业。上一纳税年度符合小型微利企业条件的，分别按照以下情况处理</p>
						<p>1.按照实际利润预缴企业所得税的，预缴时累计实际利润不超过30万元（含，下同）的，可以享受减半征税政策； </p>
						<p>2.按照上一纳税年度应纳税所得额平均额预缴企业所得税的，预缴时可以享受减半征税政策。</p>
						<p>（二）定率征收企业。上一纳税年度符合小型微利企业条件，预缴时累计应纳税所得额不超过30万元的，可以享受减半征税政策。</p>
						<p>（三）定额征收企业。根据优惠政策规定需要调减定额的，由主管税务机关按照程序调整，依照原办法征收。</p>
						<p>（四）上一纳税年度不符合小型微利企业条件的企业。预缴时预计当年符合小型微利企业条件的，可以享受减半征税政策。</p>
						<p>（五）本年度新成立小型微利企业，预缴时累计实际利润或应纳税所得额不超过30万元的，可以享受减半征税政策。</p>
						<p>四、企业预缴时享受了减半征税政策，但汇算清缴时不符合规定条件的，应当按照规定补缴税款。</p>
						<p>五、小型微利企业2015年第4季度预缴和2015年度汇算清缴的新老政策衔接问题，按以下规定处理：</p>
						<p>（一）下列两种情形，全额适用减半征税政策： </p>
						<p>1.全年累计利润或应纳税所得额不超过20万元（含）的小型微利企业； </p>
						<p>2.2015年10月1日（含，下同）之后成立，全年累计利润或应纳税所得额不超过30万元的小型微利企业。</p>
						<p>（二）2015年10月1日之前成立，全年累计利润或应纳税所得额大于20万元但不超过30万元的小型微利企业，分段计算2015年10月1日之前和10月1日之后的利润或应纳税所得额，并按照以下规定处理： </p>
						<p>1.10月1日之前的利润或应纳税所得额适用企业所得税法第二十八条规定的减按20%的税率征收企业所得税的优惠政策（简称减低税率政策）；10月1日之后的利润或应纳税所得额适用减半征税政策。</p>
						<p>2.根据财税〔2015〕99号文件规定，小型微利企业2015年10月1日至2015年12月31日期间的利润或应纳税所得额，按照2015年10月1日之后的经营月份数占其2015年度经营月份数的比例计算确定。计算公式如下： </p>
						<p>10月1日至12月31日利润额或应纳税所得额=全年累计实际利润或应纳税所得额×（2015年10月1日之后经营月份数÷2015年度经营月份数）</p>
						<p>3.2015年度新成立企业的起始经营月份，按照税务登记日期所在月份计算。</p>
						<p>六、本公告自2015年10月1日起施行。</p>
						<br/>
						<p>特此公告。</p>
						<br/>
						<p>国家税务总局</p>
						<p>2015年9月10日</p>
						
					</div>
				</li>
				<li>二、【时政要闻】国务院：部署建设大众创业万众创新支撑平台。
				<img class="right" src="img/downG.png"></img>
				</li>
				<li>三、国家税务总局61号公告：进一步扩大小型微利企业减半征收企业所得税范围问题再明确
				<img class="right" src="img/downG.png"></img>
				</li>
				<li>四、国家税务总局61号公告：进一步扩大小型微利企业减半征收企业所得税范围问题再明确
				<img class="right" src="img/downG.png"></img>
				</li> -->
				<li class="more">
					更多
					<span><img class="right" src="img/dDown.png"></img></span>
				</li>
			</ul>
			<div class="clear"></div>
		</div>
		<div class="clear s"></div>
		<div class="news K">
			<h2 class="left">税务知识普及</h2>
			<ul class="left">
			<?php
			if($dataKnow)
			for($i = 0; $i<count($dataKnow); $i ++)
			{
				echo '<li>';
				echo $ma[$i];
				echo $dataKnow[$i]['title'];
				// 一、国家税务总局61号公告：进一步扩大小型微利企业减半征收企业所得税范围问题再明确 
				echo '<img class="right" src="img/downG.png"></img>';
				if($i == 0)
					echo '<div class="vadio"><div class="w"><div class="c"> <img src="img/play.png"></div><div class="s"> <img src="img/stop.png"></div></div></div>';
				echo '<div class="con">';
				echo $dataKnow[$i]['contant'];
								
				echo '</div></li>';
			}
			?>
				<!-- <li>一、增值税专用发票丢失需要如何处理？欢迎收听~
				<img class="right" src="img/downG.png"></img>
				<div class="vadio">
					<div class="w">
						<div class="c"> <img src="img/play.png"></div>
						<div class="s"> <img src="img/stop.png"></div>
					</div>
				</div>

				</li>
				<li>二、纳税人在税务机关代开普通发票后，发生退货后，税款如何处理？
				<img class="right" src="img/downG.png"></img>
				</li>
				<li>三、国家税务总局61号公告：进一步扩大小型微利企业减半征收企业所得税范围问题再明确
				<img class="right" src="img/downG.png"></img>
				</li>
				<li>四、国家税务总局61号公告：进一步扩大小型微利企业减半征收企业所得税范围问题再明确
				<img class="right" src="img/downG.png"></img>
				</li>
				<li class="more">
					更多
					<img class="right" src="img/dDown.png"></img>
				</li> -->
				<li class="more">
					更多
					<span><img class="right" src="img/dDown.png"></img></span>
				</li>
			</ul>
			<div class="clear"></div>
		</div>
	</div>
	<div class="inputTitle" id="inputTitle">
		<div class="font">
			<h1 class="left">
				联系我!
			</h1>
			<h2 class="right">
				留下你的联系方式和想法吧~
			</h2>
		</div>
	</div>
	<div class="input">
		<div class="top">
			<div class="left">
				<li class="left">
					您的姓名
					<input name="names" type="text" />
				</li>
				<li class="left">
					您的邮箱
					<input name="mail" type="text" />
				</li>
				<li class="left">
					您的电话
					<input name="tel" type="text" />
				</li>
				<li class="left">
					您的 QQ
					<input name="qq" type="text" />
				</li>
			</div>
			<div class="right">
				选择基本类型
				<div>
					<ul>
						<li><div></div><span>建账记账</span></li>
						<li><div></div><span>申报纳税</span></li>
						<li><div></div><span>工商注册</span></li>
						<li><div></div><span>工商税务登记</span></li>
						<li><div></div><span>申请领购发票</span></li>
						<li><div></div><span>咨询业务</span></li>
						<li><div></div><span>其它有关税务业务</span></li>

					</ul>
				</div>
			</div>
		</div>
		<div class="clear"></div>
		<div class="middle">
			留下你想说的话
			<textarea></textarea>
		</div>
		<div id="submit">
			点击提交
		</div>
	</div>
	<div class="lastTu" id="lastTu">
		谢谢您的耐心浏览，期待与您的合作~
	</div>
	<div class="last">
		<li class="left b" style="margin-top:3px;margin-bottom:3px;">
			<img src="img/phone.png">
			<p>18091730818</p>
		</li>
		<li class="left b">
			<img src="img/qq.png">
			<p>1051061333</p>
		</li>
		<li class="left b" style="margin-top:5px;margin-bottom:5px;">
			<img src="img/mail.png">
			<p>18091730818@163.com</p>
		</li>
		<li class="left">
			<img src="img/erweima.png">
		</li>
	</div>
	<audio id="myAudio">
		<source src="audio/mu.ogg" type="audio/ogg">
		<source src="audio/mu.mp3" type="audio/mpeg"> 
	</audio>
	<div id="fixedY" class="scrollme">
		预约
	</div>
	<div id="space"></div>
</body>
</html>
