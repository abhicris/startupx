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





if(isset($_GET['deletedata']))
{
$delete=$_GET['deletedata'];

$cmd="DELETE FROM `thexdb`.`testinomials` WHERE `testinomials`.`sl` = '$delete'";
$result=mysql_query($cmd);


?>

<script>

alert("selected tetsinomial deleted from database and webiste");

</script>


<?php


}







if(isset($_POST['applysubmit']))
{




$content=$_POST['content'];
$companyname=$_POST['companyname'];
$name=$_POST['name'];











/*----------------------------------------- file uploading ---------------------------------------------------------------------------------------------------- */
$target_dir = "imgprofiles/";
$time=date('y/m/d h:s');
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image

// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
   // echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
       // echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        //echo "Sorry, there was an error uploading your file.";
    }
}

$filename=basename($_FILES["fileToUpload"]["name"]);



$cmd="INSERT INTO `thexdb`.`testinomials` (`sl`, `name`, `company`, `pic`, `content`) VALUES (NULL, '$name', '$companyname', '$filename', '$content');";


$result=mysql_query($cmd);



if($result)
{

$showsuccess=1;
$hideform=1;
}

}










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


.applysubmit{



  background: black;
  color: white;
  border: none;
  width: 310px;
}


.applysubmit:hover{
background:black;
color: white;




}


	</style>

</head>
<body>
<!-- banner -->

<!-- //banner -->
<!-- navigation -->
<div class="navigation" style="  background: rgb(108, 94, 94);
  color: white;">
	<div class="container">
		<div class="fixed-header">
			<div class="nav-left" style='background:none;'>
				<a href="index.php"><img src="images/x.png" alt="" / style='  max-width: 169px;
  position: absolute;
  margin-top: -10px;'></a>
			</div>
			<div class="nav-right">
				<span class="menu"><img src="images/menu.png" alt="" /></span>
					<nav class="cl-effect-1">
						<ul class="nav1">
							<li><a class="scroll" href="index.php"  style="  color: rgb(153, 204, 51);">Home</a></li>
							<li><a class="scroll" href="index.php#about-us" style="  color: rgb(153, 204, 51);">About us</a></li>
							
							<li><a class="scroll" href="#get-in-touch" style="  color: rgb(153, 204, 51);">Contact</a></li>
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
<!--------------------------------------------- apply now form comes here ---------------------------------------------------------------------------------------------- -->







<div style="background:white;width:100%;margin-top:123px;">
<center>

<div style="font-size:21px;display:<?php if(isset($showsuccess))
echo 'block';
else
echo 'none';

?>;  width: 70%;
  height: 484px;">Thankyou ! Your testinomials is now live at the website.Keep posting ! 
<br>
<br>

click <a href="testinomialsentry.php" style="color:green">here !</a>click here Upload more testinomials or go back <br>



</div>
<div style="  line-height: 55px;display:<?php if(isset($hideform))
echo 'none';
else
echo 'block';

?>;
  font-size: 23px;background:white;
    width: 72%;
  padding-bottom: 124px;
  margin-top: 111px;

  /* float: left; */
  /* background: red; */
  /* position: relative; */
  padding-top: 51px;
  padding-bottom: 51px;
  font-family: helvetica;">

<strong style="  font-size: 18px;
  color: black;
  font-family: helvetica;
  text-transform: uppercase;
  margin-top: 23px;">
Earlier uploaded testinomials :
</strong><br>


<?php 
$arr=array();
$arr=gettestinomialscontent();



?>
<table>

	<?php

				for($r=0;$r<sizeof($arr);$r++)
				{

	 ?>
<tr>
	<td style="
		<?php 
						if($r%2==0)
							echo "  background: grey;
  padding-left: 17px;
  padding-top: 28px;
  padding-bottom: 37px;
  color: white;
  font-size: 21px;";

else
	echo   "background:white;
  padding-left: 17px;
  padding-top: 28px;
  padding-bottom: 37px;
  color:black;
  font-size: 21px;";

		?>;



	">




	 <a href="testinomialsentry.php?deletedata=<?php echo $arr[$r]['sl']; ?>" style="color:green">delete it  !</a> <br>
<?php  echo $arr[$r]['content']."--"."By".$arr[$r]['name']."(".$arr[$r]['company'].")";
?><br>



<img src="imgprofiles/<?php echo $arr[$r]['pic']; ?>" width='100' height='100'>
</td>

</tr>
<?php } ?>

</table>

</div>
<form action="" method="post" enctype="multipart/form-data" style="  line-height: 55px;display:<?php if(isset($hideform))
echo 'none';
else
echo 'block';

?>;
  font-size: 23px;background:white;
  width: 29%;
  padding-bottom: 124px;
  margin-top: 111px;

  /* float: left; */
  /* background: red; */
  /* position: relative; */
  padding-top: 51px;
  padding-bottom: 51px;
  font-family: helvetica;">

	


<input type="text" placeholder="enter yourcompanyname" name="companyname" style="  font-weight: normal;
  width: 359px;
  font-size: 19px;
  height: 51px;  font-weight: normal;
  width: 359px;
  font-size: 19px;
  height: 51px;
  text-align: center;
  text-transform: capitalize;"><br>



<input type="text" placeholder="enter your content" name="content" style="  font-weight: normal;
  width: 359px;
  font-size: 19px;
  height: 51px;  font-weight: normal;
  width: 359px;
  font-size: 19px;
  height: 51px;
  text-align: center;
  text-transform: capitalize;"><br>


  <input type="text" placeholder="enter your name" name="name" style="  font-weight: normal;
  width: 359px;
  font-size: 19px;
  height: 51px;  font-weight: normal;
  width: 359px;
  font-size: 19px;
  height: 51px;
  text-align: center;
  text-transform: capitalize;"><br>




  <input type="file"  name="fileToUpload" id="fileToUpload" placeholder="upload your product model or any other docs" style="  font-weight: normal;
  width: 359px;
  font-size: 19px;
  height: 51px;
  text-align: center;
  text-transform: capitalize;"><br>

<input type="submit" placeholder="enter your phonenumber" name='applysubmit' class="applysubmit"  value='post your testinomial !' style=""><br>



</form>






</center>




</div>































<!---------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->


































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





<div class="footer">
	<div class="container">
		<div class="footer-left">
			
		</div>
		<div class="footer-right">
			<ul>
				<li><a class="facebook" href="#"></a></li>
				<li><a class="twitter" href="#"></a></li>
				<li><a class="linkedin" href="#"></a></li>
			<!--	<li><a class="pininterest" href="#"></a></li>-->
				<li><a class="google" href="#"></a></li>
			<!--	<li><a class="dribble" href="#"></a></li>-->
			<!--	<li><a class="linkedin" href="#"></a></li>-->
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
