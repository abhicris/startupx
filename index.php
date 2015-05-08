<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->





<?php 
//  session_destroy();
include("db1.php");
include("functionfinal.php");




?>
<!Doctype html>
<html>
<head>
	<title>Startup X :The mystery </title>
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!--fonts-->
		<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
	<!--//fonts-->
		<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<!-- for-mobile-apps -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Dreativity Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
		Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- //for-mobile-apps -->
	<!-- js -->
		<script type="text/javascript" src="js/jquery.min.js"></script>
	<!-- js -->
	<!-- start-smoth-scrolling -->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
	<!-- start-smoth-scrolling -->



<style type="text/css">

@media screen and (min-width:0px){



.col-md-6.about-right {
  float: left;
  min-width: 322px;
  margin-left: 6%;
  position: relative;
}
.col-md-6.about-left {
  min-width: 343px;
  width: 94%;
}


.about-right p {
  width: 85%;
  overflow: hidden;
  height: 312px;



  display: none;
}
div#mobileheader{



	 background: rgb(108, 94, 94);
  color: white;height:33px;width:100%
}


div#pcheader{

	display: none;
}

}


@media screen and (min-width:500px){
.col-md-6.about-right {
 
  min-width: 474px;

}


}
@media screen and (min-width:600px){

.col-md-6.about-right {
  float: left;
  width: 88%;

}




.about-right p {



  display: block;
}


}


@media screen and (min-width:1000px){

div#mobileheader{


display: none;
}


div#pcheader{

	display: block;
}


}
@media screen and (min-width:1300px){




.col-md-6.about-right {
  /* float: right; */
  margin-top: -777px;
  /* width: 88%; */
  margin-left: 56%;
  width: 42%;
}





.col-md-6.about-left {
  /* min-width: 343px; */
  width: 50%;
}

}


</style>






</head>
<body>
<!-- banner -->
<div id="home" class="banner">
	<div class="container">
		<div class="banner-info">
			<h1>Welcome to </span>Startup X</h1>
		<p>Get your startup/idea accelarated !</p>
			<div class="view"><a target='blank' href="applynow2.php" style=" text-transform: uppercase;
  font-size: 39px;
">Apply Now   </a></div>
		</div>
		<div class="banner-grids">
			<div class="col-md-4 banner-grid text-center">
				<div class="banner-left">
					<ul>
						<li><label> </label></li>
						<li>Get in touch<span>+91-9582393917</span> </li>
					</ul>
				</div>
			</div>
			<div class="col-md-4 banner-grid text-center">
				<div class="banner-middle">
					<ul>
						<li><label> </label></li>
						<li>We are open :<span>24 x 7</span> </li>
					</ul>
				</div>
			</div>
			<div class="col-md-4 banner-grid text-center">
				<div class="banner-right">
					<ul>
						<li><label> </label></li>
						<li>Need support? Drop us an email<span><a href="mail-to:sample@example.com">Support@startupx.in</a></span></li>
					</ul>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- //banner -->
<!-- navigation -->



<!------------------ mobile header div ------------------------------------------------------------------------------------- -->

<div id='mobileheader' style="height:99px">

<a href='#mobileheader' onclick="
if(document.getElementById('mobileheader').style.height=='192px')
{

document.getElementById('mobileheader').style.height='99px'
;document.getElementById('mobilemenu').style.display='none';
}
else{
document.getElementById('mobileheader').style.height='192px';document.getElementById('mobilemenu').style.display='block'

}

"><img src='images/mobilenav.png' style='  width: 62px;
  height: 54px;
  background: rgb(153, 204, 51);'></a>


		<ul  id='mobilemenu' style="line-height: 13px;;display:none">
							<li><a class="scroll" href="#home"  style="  color: rgb(153, 204, 51);">Home</a></li><br>
							<li><a class="scroll" href="#about-us" style="  color: rgb(153, 204, 51);">About us</a></li><br>
							<li><a class="scroll" href="#our-services" style="  color: rgb(153, 204, 51);">What We Provide ?</a></li><br>
							<li><a class="scroll" href="#testinomials" style="  color: rgb(153, 204, 51);">Testimonials</a></li><br>
							<li><a class="scroll" href="#get-in-touch" style="  color: rgb(153, 204, 51);">Contact</a></li><br>
										<li><a class="scroll" href="applynow2.php" style="  color: rgb(153, 204, 51);">	Apply Now</a></li><br>

						</ul>
</div>


<!--------------------------------------------------------------------------------------------------------------------------------------- -->




<div id='pcheader' class="navigation" style="  background: rgb(108, 94, 94);
  color: white;">
	<div class="container">
		<div class="fixed-header">
			<div class="nav-left" style='background:none;'>
				<a href="#"><img src="images/x.png" alt="" / style='  max-width: 169px;
  position: absolute;
  margin-top: -10px;'></a>
			</div>
			<div class="nav-right">
				<span class="menu"><img src="images/menu.png" alt="" /></span>
					<nav class="cl-effect-1">
						<ul class="nav1" style="  margin-left: -45%;
  min-width: 810px;">
							<li><a class="scroll" href="#home"  style="  color: rgb(153, 204, 51);">Home</a></li>
							<li><a class="scroll" href="#about-us" style="  color: rgb(153, 204, 51);">About us</a></li>
							<li><a class="scroll" href="#our-services" style="  color: rgb(153, 204, 51);">What We Provide ?</a></li>
							<li><a class="scroll" href="#testinomials" style="  color: rgb(153, 204, 51);">Testimonials</a></li>
							<li><a class="scroll" href="#get-in-touch" style="  color: rgb(153, 204, 51);">Contact</a></li>
										<li><a class="scroll" href="applynow2.php" style="  color: rgb(153, 204, 51);">	Apply Now</a></li>

						</ul>
					</nav>
					
					<!-- script for menu -->
					<script> 
						$( "span.menu" ).click(function() {
						$( "ul.nav1" ).slideToggle( 300, function() {
						 // Animation complete.
						});
						});
					</script>
					<!-- //script for menu -->
					<!-- script-for sticky-nav -->
						<script>
						$(document).ready(function() {
							 var navoffeset=$(".navigation").offset().top;
							 $(window).scroll(function(){
								var scrollpos=$(window).scrollTop(); 
								if(scrollpos >=navoffeset){
									$(".navigation").addClass("fixed");
								}else{
									$(".navigation").removeClass("fixed");
								}
							 });
							 
						});
						</script>
					<!-- /script-for sticky-nav -->

			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- //navigation -->
<!-- about-us -->
<div id="about-us" class="about-us">
	<div class="container">
		<div class="about-info text-center">
			<h2><span class="highlight">ABOUT</span> US</h2>
			<h3><i>What We Do</i></h3>
		
		</div>
	</div>
	<div class="about-grids">
		<div class="col-md-6 about-left">
			<div class="about-image">
				<img src="images/3.png" alt=" "/>
			</div>
		</div>
		<div class="col-md-6 about-right">
		
			<div class="about-right-list">
						<div class="tab1 wow bounceIn" data-wow-delay="0.4s" style="display:block">
							<ul>
								<li><span> </span></li>
								<li class="text">Our Philosphy</li>
							</ul>
							<p>


											India's entrepreneurial landscape is strewn with dead start-ups. Nearly 95% of new businesses fail—mainly because of blurred strategies, lack of proper mentoring and a paucity of funding. How to commercialize an idea or a product remains the biggest challenge for todays Start-Ups. Few entrepreneurs realize that they can design business models to generate winner-take-all effects. Appraising models in a stand-alone fashion, leads to faulty assessments of their strengths and weaknesses resulting wrong decision-making. This is the reason why despite having a magnificent idea, due lack of proper compliance, support and governance many new business models run into losses.

							</p>
						</div>
						<div class="tab2 wow bounceIn" data-wow-delay="0.4s" style="display:block">
							<ul>
								<li><span class="circle"> </span></li>
								<li class="text">Our Process</li>
							
							</ul>
							<p>WE have our own defined process from developing a prototype for your idea/ product development to make it viral in the marketing strategy, in a limited time span. </p>
						</div>
						<div class="tab3 wow bounceIn" data-wow-delay="0.4s" style="display:block">
							<ul>
								<li><span class="tv"> </span></li>
								<li class="text">association terms</li>
								
							</ul>
							<p>A short terms and condition necessary to associate with us and collaborate your ideas/innovation with the startupx and shape them to achieve your dreams.</p>
						</div>
						<div class="tab4 wow bounceIn" data-wow-delay="0.4s" style="display:block">
							<ul>
								<li><span class="bulb"> </span></li>
								<li class="text">our work force</li>
							</ul>
							<p>We at startupX have a robust team of highly qualified and best legal, compliance and management experts who are at a shout away from you to help you out in any of your compliance related requirements. It could be the tiresome company incorporation, the mind numbing IP agreements, the strategic stock agreements, mind boggling project reports or the monotonous moniuthly compliances. When you are at startupX, all you are required to do is grab your cup of coffee and hit the floor. To make sure that high potential ideas move ahead the conceptual stage,at “startup X” we are provideing a unique solution to aspiring Entrepreneurs with end-to-end business development and management assistance</p>
						</div>
			</div>
					<!-- script for tabs -->
						<script>
							$(document).ready(function(){
								$(".tab1 p").hide();
								$(".tab2 p").hide();
								$(".tab3 p").hide();
								$(".tab4 p").hide();
								$(".tab1 ul").click(function(){
									$(".tab1 p").slideToggle(300);
									$(".tab2 p").hide();
									$(".tab3 p").hide();
									$(".tab4 p").hide();
								})
								$(".tab2 ul").click(function(){
									$(".tab2 p").slideToggle(300);
									$(".tab1 p").hide();
									$(".tab3 p").hide();
									$(".tab4 p").hide();
								})
								$(".tab3 ul").click(function(){
									$(".tab3 p").slideToggle(300);
									$(".tab4 p").hide();
									$(".tab2 p").hide();
									$(".tab1 p").hide();
								})
								$(".tab4 ul").click(function(){
									$(".tab4 p").slideToggle(300);
									$(".tab3 p").hide();
									$(".tab2 p").hide();
									$(".tab1 p").hide();	
								})								
							});
						</script>
					<!-- script for tabs -->
		</div>
		<div class="clearfix"></div>
	</div>
<!--	<div class="our-skills">
		<div class="container">
			<div class="skill-info">
				<h2>OUR SKILL</h2>
			</div>
			<div class="skill-grids">
					<div class="col-md-3 skills-grid text-center">
						<div class="circle" id="circles-1"></div>
						<p>Web Design</p>
					</div>
					<div class="col-md-3 skills-grid text-center">
						<div class="circle" id="circles-2"></div>
						<p>HTML/CSS</p>
					</div>
					<div class="col-md-3 skills-grid text-center">
						<div class="circle" id="circles-3"></div>
						<p>Graphic Design</p>
					</div>
					<div class="col-md-3 skills-grid text-center">
						<div class="circle" id="circles-4"></div>
						<p>UI/UX</p>
					</div>
					<div class="clearfix"> </div>
				 <script type="text/javascript" src="js/circles.js"></script>
					         <script>
								var colors = [
										['#000000', '#99cc33'], ['#000000', '#99cc33'], ['#000000', '#99cc33'], ['#000000', '#99cc33']
									];
								for (var i = 1; i <= 5; i++) {
									var child = document.getElementById('circles-' + i),
										percentage = 40 + (i * 10);
										
									Circles.create({
										id:         child.id,
										percentage: percentage,
										radius:     80,
										width:      10,
										number:   	percentage / 10,
										text:       '%',
										colors:     colors[i - 1]
									});
								}
						
				</script>
			</div>
		</div>	
	</div> -->
</div>
<!-- //about-us -->





















<!-- our services -->
<div class="our-services" id="our-services">
	<div class="container">
		<div class="our-info text-center">
			<h2><span class="highlight">WE</span> PROVIDE</h2>
		
		
		</div>

		<!--------------------------- first streip comes here ---------------------------------------------------------------------------------------------------------------->


		<div class="our-grids">
			<div class="col-md-6 our-grid">
				<div class="col-md-3 our-grid-left">
					<div class="brand-image"></div>
				</div>
				<div class="col-md-9 our-grid-right">



								<a href='#'  onmouseover="document.getElementById('mentorid').style.display = 'block';document.getElementById('mentoridshort').style.display = 'none';" 
		onmouseout="document.getElementById('mentorid').style.display = 'none';document.getElementById('mentoridshort').style.display = 'block';" style='color:black'>
	Mentoring
	</a>
				
					<p style='' id='mentoridshort'>
						Experts for mentoring</p>
						<p style='display:none;' id='mentorid'>
Real time mentoring sessions - so the next time you find yourself stuck with multiple suggestions and no direction, shout to our mentors round the corner and clear your mind bug.</p>


						
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="col-md-6 our-grid">
				<div class="col-md-3 our-grid-left">
					<div class="bulb-image"></div>
				</div>
				<div class="col-md-9 our-grid-right">




<a href='#'  onmouseover="document.getElementById('officeid').style.display = 'block';document.getElementById('officeidshort').style.display = 'none';" 
		onmouseout="document.getElementById('officeid').style.display = 'none';document.getElementById('officeidshort').style.display = 'block';" style='color:black'>
	Office Space
	</a>
				
					<p style='' id='officeidshort'>
						Conduct your free workplaces and office space.</p>
						<p style='display:none;' id='officeid'>
How about an office which is at your disposal 24*7. So all what is needed is to plug your system and let the game begin ! </p>



					
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="col-md-6 our-grid">
				<div class="col-md-3 our-grid-left">
					<div class="graphic-image"></div>
				</div>
				<div class="col-md-9 our-grid-right">

								<a href='#'  onmouseover="document.getElementById('designid').style.display = 'block';document.getElementById('designidshort').style.display = 'none';" 
		onmouseout="document.getElementById('designid').style.display = 'none';document.getElementById('designidshort').style.display = 'block';" style='color:black'>
		Design and Development Assistance
	</a>
				
					<p style='' id='designidshort'>
						All short of designing and development assistance</p>
						<p style='display:none;' id='designid'>
Still scratching your head between whether the logo should be red or blue? or waiting for an outsourced
 work for weeks just when your race is against time? With our dedicated design n development support you need not waste your time on your non core activities anymore.</p>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="col-md-6 our-grid">
				<div class="col-md-3 our-grid-left">
					<div class="mobile-image"></div>
				</div>
				<div class="col-md-9 our-grid-right">


									<a href='#'  onmouseover="document.getElementById('fundid').style.display = 'block';document.getElementById('fundidshort').style.display = 'none';" 
		onmouseout="document.getElementById('fundid').style.display = 'none';document.getElementById('fundidshort').style.display = 'block';" style='color:black'>
		Financial Modelling and Fund Raising Assistance
	</a>
								<p style='' id='fundidshort'>
						Algoritms modelling and fund calculations by analysts</p>
						<p style='display:none;' id='fundid'>
Missing the last time you burnt your fingers while writing some breathtaking algorithm, just because you stuck in excel sheets? Let us take care of all your investor interactions so that you can again hit the keyboard to do what you love to do.</p>





				
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="col-md-6 our-grid">
				<div class="col-md-3 our-grid-left">
					<div class="illustration-image"></div>
				</div>
				<div class="col-md-9 our-grid-right">

<a href='#'  onmouseover="document.getElementById('marketid').style.display = 'block';document.getElementById('marketidshort').style.display = 'none';" 
		onmouseout="document.getElementById('marketid').style.display = 'none';document.getElementById('marketidshort').style.display = 'block';" style='color:black'>
Go to Market Strategy
	</a>
				
					<p style='' id='marketidshort'>
						Market and selleing is not a big deal with us</p>
						<p style='display:none;' id='marketid'>
A good product is just 10% of the real challenge, rest 90% is how you sell the product. Still feel yourself a coder by heart and with tight hands when it comes to selling? At startupX you find the whole community brainstorming the different options n work with you to take your product to d market.</p>





				</div>
				<div class="clearfix"></div>
			</div>
			<div class="col-md-6 our-grid">
				<div class="col-md-3 our-grid-left">
					<div class="video-image"></div>
				</div>
				<div class="col-md-9 our-grid-right">




							<a href='#'  onmouseover="document.getElementById('internetid').style.display = 'block';document.getElementById('internetidshort').style.display = 'none';" 
		onmouseout="document.getElementById('internetid').style.display = 'none';document.getElementById('internetidshort').style.display = 'block';" style='color:black'>
High Speed Internet
	</a>
				
					<p style='' id='internetidshort'>Full wi-fi enabled office campus 
						</p>
						<p style='display:none;' id='internetid'>
5Mbps of free dedicated leased line internet for your disposal. So that the next time you end up refreshing your consumers and not your webpage.</p>







					<h3></h3>
					<p> </p>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
		</div>











		<!----------------------------------------------------------first strip ends here --------------------------------------------------------------------------------------- -->









		<!--------------------------- second     strip comes here ---------------------------------------------------------------------------------------------------------------->


		<div class="our-grids" >
			<div class="col-md-6 our-grid">
				<div class="col-md-3 our-grid-left">
					<div class="brand-image" style="background-image:url('images/strip2.png')"></div>
				</div>
				<div class="col-md-9 our-grid-right">


							<a href='#'  onmouseover="document.getElementById('growthid').style.display = 'block';document.getElementById('growthidshort').style.display = 'none';" 
		onmouseout="document.getElementById('growthid').style.display = 'none';document.getElementById('growthidshort').style.display = 'block';" style='color:black'>
Growth Strategy
	</a>
				
					<p style='' id='growthidshort'>We deal in exponential growth of ideas and innovation
						</p>
						<p style='display:none;' id='growthid'>
Find more than a dozen brains working towards building your startup every second you are here.
					 Growth is a part of culture for us and not an exercise to make an effort for.</p>



				</div>
				<div class="clearfix"></div>
			</div>
			<div class="col-md-6 our-grid">
				<div class="col-md-3 our-grid-left">
					<div class="bulb-image" style="background-image:url('images/strip2.png')"></div>
				</div>
				<div class="col-md-9 our-grid-right">





							<a href='#'  onmouseover="document.getElementById('legalid').style.display = 'block';document.getElementById('legalidshort').style.display = 'none';" 
		onmouseout="document.getElementById('legalid').style.display = 'none';document.getElementById('legalidshort').style.display = 'block';" style='color:black'>
Legal Assistance
	</a>
				
					<p style='' id='legalidshort'>Engage yourself in your idea and forget the legal issues for us
						</p>
						<p style='display:none;' id='legalid'>
You were born to create awesome products and not spend half of your time in facing a trial. Our legal team makes sure that you are at it!</p>






				</div>
				<div class="clearfix"></div>
			</div>
			<div class="col-md-6 our-grid">
				<div class="col-md-3 our-grid-left">
					<div class="graphic-image" style="background-image:url('images/strip2.png')"></div>
				</div>
				<div class="col-md-9 our-grid-right">





							<a href='#'  onmouseover="document.getElementById('introductionid').style.display = 'block';document.getElementById('introductionidshort').style.display = 'none';" 
		onmouseout="document.getElementById('introductionid').style.display = 'none';document.getElementById('introductionidshort').style.display = 'block';" style='color:black'>
Introductions
	</a>
				
					<p style='' id='introductionidshort'>Introduce yourself with the industry influencers and  connect with the outside market.
						</p>
						<p style='display:none;' id='introductionid'>
Welcome to the world of network learning! Get introduced to industry influencers, present your idea,
					 network with them and who knows one of them would be right there with you, working on your product the next moment.</p>



					<h3></h3>
					<p></p>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="col-md-6 our-grid">
				<div class="col-md-3 our-grid-left">
					<div class="mobile-image" style="background-image:url('images/strip2.png')"></div>
				</div>
			
					<a href='#'  onmouseover="document.getElementById('roomsid').style.display = 'block';document.getElementById('roomsidshort').style.display = 'none';" 
		onmouseout="document.getElementById('roomsid').style.display = 'none';document.getElementById('roomsidshort').style.display = 'block';" style='color:black'>
		Conference/Meeting Rooms
	</a>

	<p id='roomsidshort' style='  color: rgb(153, 153, 178);'>Meeting and conference rooms to conduct discussions.</p>
					<p id='roomsid' style='display:none;  color: rgb(153, 153, 178);'>Need a place to lock yourself in when you are desperately
					 in search of a solution? Use your meeting rooms whenever you are stuck with any of such situation.</p>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="col-md-6 our-grid">
				<div class="col-md-3 our-grid-left">
					<div class="illustration-image" style="background-image:url('images/strip2.png')"></div>
				</div>
				<div class="col-md-9 our-grid-right">




		<a href='#'  onmouseover="document.getElementById('likesid').style.display = 'block';document.getElementById(likesidshort').style.display = 'none';" 
		onmouseout="document.getElementById('likesid').style.display = 'none';document.getElementById('likesidshort').style.display = 'block';" style='color:black'>
		Collaborative Community of Like Minded People
	</a>

	<p id='likesidshort' style=''>Meeting and conference rooms to conduct discussions.</p>
					<p id='likesid' style='display:none'>A wide range of ideas and serving people ready and happy to help you in all departments.</p>





				</div>
				<div class="clearfix"></div>
			</div>
			<div class="col-md-6 our-grid">
				<div class="col-md-3 our-grid-left">
					<div class="video-image" style="background-image:url('images/strip2.png')"></div>
				</div>
				<div class="col-md-9 our-grid-right">



	<a href='#'  onmouseover="document.getElementById('iprid').style.display = 'block';document.getElementById('ipridshort').style.display = 'none';" 
		onmouseout="document.getElementById('iprid').style.display = 'none';document.getElementById('ipridshort').style.display = 'block';" style='color:black'>
IPR Asistance
	</a>
				
					<p style='' id='ipridshort'>We also provide IPR asistance
						</p>
						<p style='display:none;' id='iprid'>
All you need is not smart people but right people. Imagine yourself working with a set of people who are as awesome as you, all working towards one goal, towards building products that make world a better place! Isn't it real fun.</p>



				</div>
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
		</div>











		<!--------------------------------------------------------second strip ends here --------------------------------------------------------------------------------------- -->







		<!--------------------------- second     strip comes here ---------------------------------------------------------------------------------------------------------------->


		<!--<div class="our-grids" >
			<div class="col-md-6 our-grid">
				<div class="col-md-3 our-grid-left">
					<div class="brand-image" style="background-image:url('images/strip3.png')"></div>
				</div>
				<div class="col-md-9 our-grid-right">

		<a href='#'  onmouseover="document.getElementById('weekid').style.display = 'block';document.getElementById('weekidshort').style.display = 'none';" 
		onmouseout="document.getElementById('weekid').style.display = 'none';document.getElementById('weekidshort').style.display = 'block';" style='color:black'>Weekly Events + Event Space</a>
					
								<p id='weekidshort' style=''>
	 New knowledge sources and inspirational events every week.
	 </p>
					<p id='weekid' style='display:none'>
	Obsessed with startup videos, lessons etc. Looking for new knowledge sources and inspirational events every week.
	 The wait is over ! Get access to all of the different weekly events being organized by industry leaders.</p>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="col-md-6 our-grid">
				<div class="col-md-3 our-grid-left">
					<div class="bulb-image" style="background-image:url('images/strip3.png')"></div>
				</div>
				<div class="col-md-9 our-grid-right">
					<h3>Team building Assistance</h3>
					<p>All you need, to hit the epitome of success is not money, not technology but a team. A team which can convert your vision into reality. Get a chance to meet amazing people and participate in wonderful team building activities.</p>
				</div>
				<div class="clearfix"></div>
			</div>
				<div class="col-md-6 our-grid">
				<div class="col-md-3 our-grid-left">
					<div class="brand-image" style="background-image:url('images/strip3.png')"></div>
				</div>
			
				<div class="clearfix"></div>
			</div>
		
		











		<!--------------------------------------------------------second strip ends here --------------------------------------------------------------------------------------- -->





















	</div>         -->
</div>
<!-- //our services -->

<!-- about-bottom -
<div class="about-bottom">
	<div class="container">
		<div class="bottom-grids">
			<div class="col-md-3 bottom-grid text-center">
				<div class="like"></div>
				<h2>2006</h2>
				<p>Satisfied Client</p>
			</div>
			<div class="col-md-3 bottom-grid text-center">
				<div class="chat"></div>
				<h2>240</h2>
				<p>Clients Served</p>
			</div>
			<div class="col-md-3 bottom-grid text-center">
				<div class="smiley"></div>
				<h2>120</h2>
				<p>Projects Delivered</p>
			</div>
			<div class="col-md-3 bottom-grid text-center">
				<div class="flag"></div>
				<h2>10</h2>
				<p>Awards Won</p>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- //about-bottom -->
<!-- our-works 
<div id="our-works" class="our-works" style="">
	<div class="container">
		<div class="our-work-info text-center wow bounceIn" data-wow-delay="0.4s">
			<h2><span class="highlight">OUR</span> WORKS</h2>
			<h3><i>What We Have Done</i></h3>
			<div class="underline">
				<img src="images/underline.png" alt=" "/>
			</div>
			<p>Lorem ipsum dolor amet, libero turpis non cras ligula, id commodo, aenean est in volutpat amet sodales, porttitor bibendum facilisi suspendisse</p>
		</div>	
		<div class="portfolio-grid">
					<ul id="filters">
						<li class="active"><span class="filter " data-filter="app card icon set web">All</span> </li>
						<li><span class="filter" data-filter="app"> Website</span></li>
						<li><span class="filter" data-filter="card"> Graphic</span></li>
						<li><span class="filter" data-filter="icon">Identity</span></li>
						<li><span class="filter" data-filter="set">Mobile Apps</span></li>

					</ul>
			<div id="portfoliolist">
						<div class="port-grid">
							<div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
								<div class="portfolio-wrapper ">		
										<a href="#small-dialog" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
											<img class="img-responsive" src="images/a.jpg" alt=""  />
											<div class="simple-in">
											
													<ul class="social img-one">
														<li><span> </span></li>
														<li><span class="text"> </span></li>
														<div class="clearfix"> </div>
													</ul>
											</div>
										</a>
										<div class="simple-out">
											<h4>FLAT MOCKUP</h4>
											<p>Identity</p>
										</div>							
								</div>
							</div>				
							<div class="portfolio app mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
									<div class="portfolio-wrapper">		
										<a href="#small-dialog1" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
											<img class="img-responsive" src="images/g.jpg" alt=""/>
											<div class="simple-in one">
												
													<ul class="social img-two">
														<li><span> </span></li>
														<li><span class="text"> </span></li>
														<div class="clearfix"> </div>
													</ul>
											</div>
										</a>
											<div class="simple-out">
													<h4>FLAT ICON</h4>
													<p>Graphic</p>
											</div>							
									</div>
							</div>		
							<div class="portfolio icon mix_all" data-cat="icon" style="display: inline-block; opacity: 1;">
								<div class="portfolio-wrapper">		
									<a href="#small-dialog2" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
										<img class="img-responsive" src="images/d.jpg"  alt="" />
										<div class="simple-in two">
												
												<ul class="social img-three">
													<li><span> </span></li>
													<li><span class="text"> </span></li>
													
													<div class="clearfix"> </div>
												</ul>
										</div>	
									</a>
									<div class="simple-out">
										<h4>FREE ICON</h4>
										<p>Mobile Apps</p>
									
									</div>							
								</div>
							</div>
						</div>	
						<div class="port-grid">
							<div class="portfolio set mix_all" data-cat="set" style="display: inline-block; opacity: 1;">
								<div class="portfolio-wrapper ">		
									<a href="#small-dialog3" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
									<img class="img-responsive" src="images/m.jpg" alt=""  />
									<div class="simple-in three">
												<ul class="social img-two">
													<li><span> </span></li>
													<li><span class="text"> </span></li>
													
													<div class="clearfix"> </div>
												</ul>
									</div>	
									</a>
									<div class="simple-out">
										<h4>ATOM WEBSITE</h4>
										<p>Website</p>
										
									</div>							
								</div>
							</div>	
							<div class="portfolio app mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
								<div class="portfolio-wrapper ">		
									<a href="#small-dialog4" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
										<img class="img-responsive" src="images/f.jpg" alt=""  />
										<div class="simple-in four">
												
												<ul class="social img-two">
													<li><span> </span></li>
													<li><span class="text"> </span></li>
												
													<div class="clearfix"> </div>
												</ul>
										</div>	
									</a>
										<div class="simple-out">
											<h4>30 ICON MODERN</h4>
											<p>Graphic</p>
										</div>							
								</div>
							</div>			
							<div class="portfolio icon mix_all" data-cat="icon" style="display: inline-block; opacity: 1;">
								<div class="portfolio-wrapper">		
									<a href="#small-dialog5" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
										<img class="img-responsive" src="images/c.jpg" alt=""  />
											<div class="simple-in five">
											
													<ul class="social img-three">
														<li><span> </span></li>
														<li><span class="text"> </span></li>
													
														<div class="clearfix"> </div>
													</ul>
											</div>
									</a>
									<div class="simple-out">
										<h4>FREE LOGOTYPE</h4>
										<p>Identity</p>
									</div>
								</div>
							</div>
						</div>
						<div class="port-grid">
							<div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
								<div class="portfolio-wrapper">		
									<a href="#small-dialog6" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">

										<img class="img-responsive" src="images/l.jpg" alt=""  />
										<div class="simple-in six">
											
												<ul class="social img-one">
													<li><span> </span></li>
													<li><span class="text"> </span></li>
												
													<div class="clearfix"> </div>
												</ul>
										</div>	
									</a>
									<div class="simple-out">
										<h4>BRONZE APPS</h4>
										<p>Mobile Apps</p>
									</div>							
								</div>
							</div>
							<div class="portfolio set mix_all" data-cat="set" style="display: inline-block; opacity: 1;">
								<div class="portfolio-wrapper">		
									<a href="#small-dialog7" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">

										<img class="img-responsive" src="images/e.jpg" alt=""  />						    
											<div class="simple-in seven">
												
													<ul class="social img-one">
														<li><span> </span></li>
														<li><span class="text"> </span></li>
													
														<div class="clearfix"> </div>
													</ul>
											</div>
									</a>
									<div class="simple-out">
										<h4>DIGITAL BRANDING WEBSITE</h4>
										<p>Website</p>
								
									</div>							
								</div>
							</div>
							<div class="portfolio app mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
								<div class="portfolio-wrapper ">		
									<a href="#small-dialog8" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">

										<img class="img-responsive" src="images/b.jpg" alt=""  />
										<div class="simple-in eight">
												<ul class="social img-two">
													<li><span> </span></li>
													<li><span class="text"> </span></li>
													<div class="clearfix"> </div>
												</ul>
										</div>	
									</a>
									<div class="simple-out">
										<h4>WEDDING INVITATION</h4>
										<p>Identity</p>
									</div>							
								</div>
							</div>	
						</div>	
			</div>	
			

					
					<script type="text/javascript" src="js/modernizr.custom.min.js"></script>    
					<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
					<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
					<!-- //script for pop-up-box -
					<div id="small-dialog" class="mfp-hide">
						<div class="image-top">
							<img src="images/a.jpg" alt="" />
								<h4>FLAT MOCKUP</h4>
								<p>Identity</p>
						</div>
					</div>
					<div id="small-dialog1" class="mfp-hide">
						<div class="image-top">
							<img src="images/g.jpg" alt="" />
							<h4>FLAT ICON</h4>
							<p>Graphic</p>
						</div>
					</div>
					<div id="small-dialog2" class="mfp-hide">
						<div class="image-top">
							<img src="images/d.jpg" alt="" />
							<h4>FREE ICON</h4>
							<p>Mobile Apps</p>
						</div>
					</div>
					<div id="small-dialog3" class="mfp-hide">
						<div class="image-top">
							<img src="images/m.jpg" alt="" />
							<h4>ATOM WEBSITE</h4>
							<p>Website</p>
						</div>
					</div>
					<div id="small-dialog4" class="mfp-hide">
						<div class="image-top">
							<img src="images/f.jpg" alt="" />
							<h4>30 ICON MODERN</h4>
							<p>Graphic</p>
						</div>
					</div>
					<div id="small-dialog5" class="mfp-hide">
						<div class="image-top">
							<img src="images/c.jpg" alt="" />
							<h4>FREE LOGOTYPE</h4>
							<p>Identity</p>
						</div>
					</div>
					<div id="small-dialog6" class="mfp-hide">
						<div class="image-top">
							<img src="images/l.jpg" alt="" />
							<h4>BRONZE APPS</h4>
							<p>Mobile Apps</p>
						</div>
					</div>
					<div id="small-dialog7" class="mfp-hide">
						<div class="image-top">
							<img src="images/e.jpg" alt="" />
							<h4>DIGITAL BRANDING WEBSITE</h4>
							<p>Website</p>
						</div>
					</div>
					<div id="small-dialog8" class="mfp-hide">
						<div class="image-top">
							<img src="images/b.jpg" alt="" />
							<h4>WEDDING INVITATION</h4>
							<p>Identity</p>
						</div>
					</div>
			<script>
						$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
						});
																						
						});
			</script>
		<!-- //pop-up-box -	
			<!-- Script for gallery Here -
				<script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
					<script type="text/javascript">
							$(function () {
								var filterList = {
									init: function () {
										// MixItUp plugin
										// http://mixitup.io
										$('#portfoliolist').mixitup({
											targetSelector: '.portfolio',
											filterSelector: '.filter',
											effects: ['fade'],
											easing: 'snap',
											// call the hover effect
											onMixEnd: filterList.hoverEffect()
										});				
									},
									hoverEffect: function () {
									
										// Simple parallax effect
										$('#portfoliolist .portfolio').hover(
											function () {
												$(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
												$(this).find('img').stop().animate({top: -30}, 500, 'easeOutQuad');				
											},
											function () {
												$(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
												$(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');								
											}		
										);				
									}
								};
								// Run the show!
								filterList.init();
							});	
					</script>
				<!-- Gallery Script Ends -
				<div class="clearfix"> </div>
		</div>
	</div>
</div>
 -->
<!-- slider -->
	<div class="slider" id="testinomials">
		<div class="container">
				<!-- responsiveslides -->
					<script src="js/responsiveslides.min.js"></script>
						<script>
							// You can also use "$(window).load(function() {"
							$(function () {
							 // Slideshow 4
							$("#slider3").responsiveSlides({
								auto: true,
								pager: true,
								nav: false,
								speed: 500,
								namespace: "callbacks",
								before: function () {
							$('.events').append("<li>before event fired.</li>");
							},
							after: function () {
								$('.events').append("<li>after event fired.</li>");
								}
								});
								});
					</script>
				<!-- responsiveslides -->
				

<?php 
$arrtestinomial=array();
$arrtestinomial=gettestinomialscontent();



?>














				<div  id="top" class="callbacks_container">
					<ul class="rslides" id="slider3">




						<?php 
											for($t=0;$t<sizeof($arrtestinomial);$t++)
												{ ?>





						?>
						<li>
							<div class="slider-info">
								<div class="col-md-3 slider-left text-center">
									<img src="imgprofiles/<?php 
										echo $arrtestinomial[$t]['pic'];



									?>" alt=" " />
								</div>
								<div class="col-md-9 slider-right">
									<p><?php 


										echo $arrtestinomial[$t]['content'];


									?> </p>	
									<p><i><span class="highlight"><?php echo $arrtestinomial[$t]['name']; ?></span><span class="yellow"> - <?php echo $arrtestinomial[$t]['company']; ?></span></i></p>
								</div>
								<div class="clearfix"></div>
							</div>
						</li>
						<?php } ?>
					</ul>
				</div>
		</div>
	</div>
<!-- //slider -->
<!-- pricing-table -->

<!-- //pricing-table -->
<!-- our-team 
<div id="our-team" class="our-team">
	<div class="container">
		<div class="team-info text-center">
			<h2><span>OUR</span> TEAM</h2>
			<h3><i>talented Folks</i></h3>
			<div class="underline">
				<img src="images/k.png" alt=" "/>
			</div>
			<p>Lorem ipsum dolor amet, libero turpis non cras ligula, id commodo, aenean est in volutpat amet sodales, porttitor bibendum facilisi suspendisse</p>
		</div>
		<div class="team-grids">
			<div class="col-md-3 team-grid">
				<div class="team-grid-image">
					<img src="images/8.jpg" alt=" "/>
					<ul>
						<li><a class="fb" href="#"></a></li>
						<li><a class="twit" href="#"></a></li>
						<li><a class="linkin" href="#"></a></li>
						<li><a class="be" href="#"></a></li>
					</ul>
				</div>
				<div class="team-grid-info">
					<h3>PATRICIA MEDINA</h3>
					<p><span class="highlight">Senior Designer</span></p>
					<p>Imperdiet nulla sem fringilla, purus enim amet, nascetur faucibus, adipiscing neque ut bibendum, 
					at felis nec in.</p>
				</div>
			</div>
			<div class="col-md-3 team-grid">
				<div class="team-grid-image">
					<img src="images/8.jpg" alt=" "/>
					<ul>
						<li><a class="fb" href="#"></a></li>
						<li><a class="twit" href="#"></a></li>
						<li><a class="linkin" href="#"></a></li>
						<li><a class="be" href="#"></a></li>
					</ul>
				</div>
				<div class="team-grid-info">
					<h3>PATRICIA MEDINA</h3>
					<p><span class="highlight">Senior Designer</span></p>
					<p>Imperdiet nulla sem fringilla, purus enim amet, nascetur faucibus, adipiscing neque ut bibendum, 
					at felis nec in.</p>
				</div>
			</div>
			<div class="col-md-3 team-grid">
				<div class="team-grid-image">
					<img src="images/8.jpg" alt=" "/>
					<ul>
						<li><a class="fb" href="#"></a></li>
						<li><a class="twit" href="#"></a></li>
						<li><a class="linkin" href="#"></a></li>
						<li><a class="be" href="#"></a></li>
					</ul>
				</div>
				<div class="team-grid-info">
					<h3>PATRICIA MEDINA</h3>
					<p><span class="highlight">Senior Designer</span></p>
					<p>Imperdiet nulla sem fringilla, purus enim amet, nascetur faucibus, adipiscing neque ut bibendum, 
					at felis nec in.</p>
				</div>
			</div>
			<div class="col-md-3 team-grid">
				<div class="team-grid-image">
					<img src="images/8.jpg" alt=" "/>
					<ul>
						<li><a class="fb" href="#"></a></li>
						<li><a class="twit" href="#"></a></li>
						<li><a class="linkin" href="#"></a></li>
						<li><a class="be" href="#"></a></li>
					</ul>
				</div>
				<div class="team-grid-info">
					<h3>PATRICIA MEDINA</h3>
					<p><span class="highlight">Senior Designer</span></p>
					<p>Imperdiet nulla sem fringilla, purus enim amet, nascetur faucibus, adipiscing neque ut bibendum, 
					at felis nec in.</p>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div> -->
<!-- //our-team -->
<!-- our-blog 
<div class="our-blog">
	<div class="container">
		<div class="our-blog-info text-center">
			<h2><span class="highlight">OUR</span> BLOG</h2>
			<h3><i>Latest From The Blog</i></h3>
			<div class="underline">
				<img src="images/underline.png" alt=" "/>
			</div>
			<p>Lorem ipsum dolor amet, libero turpis non cras ligula, id commodo, aenean est in volutpat amet 
			sodales, porttitor bibendum facilisi suspendisse</p>
			<div class="august">August 2014</div>
		</div>
		<div class="blog-grids">
			<div class="blog-left">
				<div class="blog-img">
					<img src="images/16.jpg" alt=" "/>
					<div class="desc">
						<div class="desc-left">
							<h4>Image Post</h4>
							<p>August 24, 2014</p>
						</div>
						<div class="desc-right">
							<label>40</label>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="blog-txt">
					<h4>Tempor vestibulum turpis</h4>
					<p>Ultrices lacus proin conubia dictum tempus, tempor pede vitae faucibus, sem auctor, molestie diam 
					dictum aliquam. Dolor leo, ridiculus est ut cubilia nec, fermentum archu praesent, pede etiam. Tempor
					vestibulum turpis id ligula mi mattis. Eget arcu vitae mauris amet odio.</p>
					<div class="caption-text">
						<div class="caption-left">
							<p>August 24, 2014</p>
						</div>
						<div class="caption-right">
							<label>40</label>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			<div class="blog-right">
				<div class="blog-txt">
					<h4>Tempor vestibulum turpis</h4>
					<p>Ultrices lacus proin conubia dictum tempus, tempor pede vitae faucibus, sem auctor, molestie diam 
					dictum aliquam. Dolor leo, ridiculus est ut cubilia nec, fermentum archu praesent, pede etiam. Tempor
					vestibulum turpis id ligula mi mattis. Eget arcu vitae mauris amet odio.</p>
					<div class="caption-text">
						<div class="caption-left">
							<p>August 24, 2014</p>
						</div>
						<div class="caption-right">
							<label>40</label>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="blog-img">
					<img src="images/17.jpg" alt=" "/>
					<div class="desc">
						<div class="desc-left">
							<h4>Image Post</h4>
							<p>August 24, 2014</p>
						</div>
						<div class="desc-right">
							<label>40</label>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
			<div class="dot-top"><p></p></div>
			<div class="dot-mid"><p></p></div>
			<div class="dot-bottom"><p></p></div>
			<div class="dot-gray"><p></p></div>
			<div class="top"><img src="images/left.png" alt=" "/></div>
			<div class="bottom"><img src="images/right.png" alt=" "/></div>
			<div class="mid"><img src="images/left.png" alt=" "/></div>
			<div class="arr-left"><img src="images/left.png" alt=" "/></div>
			<div class="arr-right"><img src="images/right.png" alt=" "/></div>
			<div class="arr-mid"><img src="images/right.png" alt=" "/></div>
		</div>
		<div class="august">September 2014</div>
		<div class="blog-grids">
			<div class="blog-left">
				<div class="blog-img">
					<img src="images/18.jpg" alt=" "/>
					<div class="desc">
						<div class="desc-left">
							<h4>Image Post</h4>
							<p>August 24, 2014</p>
						</div>
						<div class="desc-right">
							<label>40</label>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			<div class="blog-right">
				<div class="blog-txt">
					<h4>Tempor vestibulum turpis</h4>
					<p>Ultrices lacus proin conubia dictum tempus, tempor pede vitae faucibus, sem auctor, molestie diam 
					dictum aliquam. Dolor leo, ridiculus est ut cubilia nec, fermentum archu praesent, pede etiam. Tempor
					vestibulum turpis id ligula mi mattis. Eget arcu vitae mauris amet odio.</p>
					<div class="caption-text">
						<div class="caption-left">
							<p>August 24, 2014</p>
						</div>
						<div class="caption-right">
							<label>40</label>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="button"><a href="#">Load More</a></div>
	</div>
</div>
<!-- //our-blog -->
<!-- twitt-slider -->




<!--
<div class="twitt-slider">
	<div class="container">
		<!-- responsiveslides 
					<script src="js/responsiveslides.min.js"></script>
						<script>
							// You can also use "$(window).load(function() {"
							$(function () {
							 // Slideshow 4
							$("#slider4").responsiveSlides({
								auto: true,
								pager: true,
								nav: false,
								speed: 500,
								namespace: "callbacks",
								before: function () {
							$('.events').append("<li>before event fired.</li>");
							},
							after: function () {
								$('.events').append("<li>after event fired.</li>");
								}
								});
								});
					</script>
		<!-- responsiveslides -
			<div  id="top" class="callbacks_container">
					<ul class="rslides" id="slider4">
						<li>
							<div class="twitt-info">
								<img src="images/14.png" alt=" "/>
								<p>Premium Template- orci in adipiscing felis velit nibh. Consectetuer porttitor feugiat 
								vestibulum sit feugiat, voluptates dui eros libero...</p>
								<h3>Follow us on Twitter : <span class="highlight">@rudhisasmito</span></h3>
							</div>
						</li>
						<li>
							<div class="twitt-info">
								<img src="images/dribble.png" alt=" "/>
								<p>Porttitor bibendum facilisi suspendisse Lorem ipsum dolor amet, libero turpis non 
								cras ligula, id commodo, aenean est in volutpat amet sodales </p>	
								<h3>Follow us on Dribble : <span class="highlight">@rudhisasmito</span></h3>
							</div>
						</li>
						<li>
							<div class="twitt-info">
								<img src="images/google.png" alt=" "/>
								<p>Libero turpis non cras ligula,Lorem ipsum dolor amet,  id commodo, aenean est in 
									volutpat amet sodales, porttitor bibendum facilisi suspendisse </p>	
								<h3>Follow us on Google : <span class="highlight">@rudhisasmito</span></h3>
							</div>
						</li>
						<li>
							<div class="twitt-info">
								<img src="images/facebook.png" alt=" "/>
								<p>Aenean est in volutpat amet sodalesLibero turpis non cras ligula,Lorem ipsum dolor 
								amet,  id commodo, porttitor bibendum facilisi suspendisse </p>	
								<h3>Follow us on Facebook : <span class="highlight">@rudhisasmito</span></h3>
							</div>
						</li>
					</ul>
			</div>
		
				
	
	</div>
</div>
<!-- //twitt-slider -->
<!-- get-in -->
<div id="get-in-touch" class="get-in-touch">
	<div class="container">
		<div class="get-info text-center">
			<h2><span class="highlight">GET IN</span> TOUCH</h2>
			<h3><i>Feel Free To Contact Us</i></h3>
			
		</div>
	</div>

</div>
<!-- //get-in -->
<!-- contact-us -->
<div class="contact-us">
	<div class="container">
		<div class="contact-grids">
			<div class="col-md-4 contact-grid text-center">
				<div class="point-icon"></div>
				<p>B-66 Sector 60, Noida, U.P. (India) </p>
			</div>
			<div class="col-md-4 contact-grid text-center">
				<div class="mail-icon"></div>
				<p><a href="mail-to:mail@startupx.in">mail@startupx.in</a></p>
			</div>
			<div class="col-md-4 contact-grid text-center">
				<div class="phone-icon"></div>
				<p>+91-9582393917</p>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="contact-info">
			<form>
				<input type="text" placeholder="Your Name" required>
				<input type="text" placeholder="Your E-Mail" required>
				<input type="text" placeholder="Mobile Number" required>
				<textarea placeholder="Your Message" required></textarea>
				<input type="submit" value="SEND MESSAGE">
			</form>
		</div>
	</div>
 

   -->








<!-------------------------------------------------------------------------------------------------------------------------------------------------------------- -->










</div>
<!-- //contact-us -->
<!-- footer -->






	<div class="map">
		<div class="nav-icon">
			<img src="images/9.png" alt=" "/>
		</div>
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7005.773624381492!2d77.36457944126388!3d28.60317222571712!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce57aaa12c1b1%3A0xa663e8cb7b49df28!2sSector+60%2C+Block+A%2C+Sector+60%2C+Noida%2C+Uttar+Pradesh+201307!5e0!3m2!1sen!2sin!4v1428254575459"  frameborder="0" style="border:0"></iframe>
	</div>
<div class="footer">
	<div class="container">
		
		<div class="footer-right">
			<ul>
				<li><a class="facebook" href="https://www.facebook.com/StartupXin?fref=ts"></a></li>
				<li><a class="twitter" href="#"></a></li>
				<li><a class="linkedin" href="#"></a></li>
				<!--<li><a class="pininterest" href="#"></a></li>-->
				<li><a class="google" href="#"></a></li>
				<!--<li><a class="dribble" href="#"></a></li>-->
				<!--<li><a class="linkedin" href="#"></a></li>-->
			</ul>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- //footer -->
<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
		*/								
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->
</body>
</html>
