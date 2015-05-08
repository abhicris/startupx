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






if(isset($_POST['applysubmit']))
{



$fullname=$_POST['fullname'];
$address=$_POST['street'].','.$_POST['city'].','.$_POST['state'];
$sector=$_POST['sector'];
$stage=$_POST['stage'];
$email=$_POST['email'];
$companyname=$_POST['companyname'];
$phonenumber=$_POST['phonenumber'];










/*----------------------------------------- file uploading ---------------------------------------------------------------------------------------------------- */
$target_dir = "uploads/";
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



$cmd="INSERT INTO `applyseekers`(`fullname`, `address`, `phone`, `company`, `stage`, `sector`, `email`,`fileuploaded`) VALUES ('$fullname','$address','$phonenumber','$companyname','$stage','$sector','$email','$filename')";


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




	font-weight: normal;
  border: black;
  outline: black 1px groove;
  color: black;
  /* background: rgb(153, 113, 113); */
  width: 223px;
  height: 48px;
  text-transform: uppercase;
  background: white;
  margin-top: 65px;
}


.applysubmit:hover{
background:black;
color: white;




}

@media screen and (min-width:0px){




div#mobileheader{



	 background: rgb(108, 94, 94);
  color: white;height:33px;width:100%
}


div#pcheader{

	display: none;
}








}




@media screen and (min-width:0px){




div#mobileheader{



	 background: rgb(108, 94, 94);
  color: white;height:33px;width:100%
}


div#pcheader{

	display: none;
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
	</style>

</head>
<body>
<!-- banner -->

<!-- //banner -->
<!-- navigation -->


<!------------------ mobile header div ------------------------------------------------------------------------------------- -->

<div id='mobileheader'  style="height:81px">

<a href='#mobileheader' onclick="
if(document.getElementById('mobileheader').style.height=='192px')
{

document.getElementById('mobileheader').style.height='81px'
;document.getElementById('mobilemenu').style.display='none';
}
else{
document.getElementById('mobileheader').style.height='192px';document.getElementById('mobilemenu').style.display='block'

}

"><img src='images/mobilenav.png' width='32' height='43'></a>


		<ul  id='mobilemenu' style="line-height: 13px;;display:none">
							<li><a class="scroll" href="#home"  style="  color: rgb(153, 204, 51);">Home</a></li><br>
							<li><a class="scroll" href="#about-us" style="  color: rgb(153, 204, 51);">About us</a></li><br>
							<li><a class="scroll" href="#our-services" style="  color: rgb(153, 204, 51);">What We Provide ?</a></li><br>
							<li><a class="scroll" href="#testinomials" style="  color: rgb(153, 204, 51);">Testimonials</a></li><br>
							<li><a class="scroll" href="#get-in-touch" style="  color: rgb(153, 204, 51);">Contact</a></li><br>
										<li><a class="scroll" href="applynow.php" style="  color: rgb(153, 204, 51);">	Apply Now</a></li><br>

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
						<ul class="nav1" style="margin-left: -38%;">
							<li><a class="scroll" href="#home"  style="  color: rgb(153, 204, 51);">Home</a></li>
							<li><a class="scroll" href="#about-us" style="  color: rgb(153, 204, 51);">About us</a></li>
							<li><a class="scroll" href="#our-services" style="  color: rgb(153, 204, 51);">What We Provide ?</a></li>
							<li><a class="scroll" href="#testinomials" style="  color: rgb(153, 204, 51);">Testimonials</a></li>
							<li><a class="scroll" href="#get-in-touch" style="  color: rgb(153, 204, 51);">Contact</a></li>
										<li><a class="scroll" href="applynow.php" style="  color: rgb(153, 204, 51);">	Apply Now</a></li>

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
  height: 484px;">Thankyou ! <?php echo ' '.$fullname; ?> for applying yourself at Startup X. We will forward your details to our team management, and get yourself connected  our officials. </div>
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
  padding-bottom: 51px;min-width:320px;
  font-family: helvetica;">

<strong style="  font-size: 18px;
  color: black;
  font-family: helvetica;
  text-transform: uppercase;
  margin-top: 23px;">
Apply yourself at startup X.
</strong><br>



<label class="" style='   font-size: 22px;
  /* font-weight: normal; */
  text-transform: capitalize;
  color: rgb(153, 200, 55);'>Full name :</label><br>

<input type="text" required placeholder="enter your fullname" name="fullname" style="  font-weight: normal;
  width: 300px;
  font-size: 19px;
  height: 51px  font-weight: normal;
  width: 300px;
  font-size: 19px;
  height: 51px;
  text-align: center;
  text-transform: capitalize;;"><br>

<label class="" style='   font-size: 22px;
  /* font-weight: normal; */
  text-transform: capitalize;
  color: rgb(153, 200, 55);'>Company name :</label><br>

<input type="text"  reqired placeholder="enter yourcompanyname" name="companyname" style="  font-weight: normal;
  width: 300px;
  font-size: 19px;
  height: 51px;  font-weight: normal;
  width: 300px;
  font-size: 19px;
  height: 51px;
  text-align: center;
  text-transform: capitalize;"><br>













<label class="" style='   font-size: 22px;
  /* font-weight: normal; */
  text-transform: capitalize;
  color: rgb(153, 200, 55);'> email:</label><br>

<input type="text"  required placeholder="enter your email" name="email" style="  font-weight: normal;                             
  width: 300px;
  font-size: 19px;
  height: 51px;  font-weight: normal;
  width: 300px;
  font-size: 19px;
  height: 51px;
  text-align: center;
  text-transform: capitalize;"><br>









<select name="stage" style='
color: rgb(169, 169, 169);
  text-align: center;
  margin-top: 12px;
 width: 300px;
  margin-bottom: 24px;
  padding-left: 78px;
  font-size: 21px;
  padding-top: 9px;
  padding-bottom: 9px;
}'>

<option>Your current stage</option>


<option>idea</option>


<option>concept</option>

<option>proof of concept</option>

<option>pilot</option>

<option>operational (less than 1 year) </option>

<option>operational (more than 1 year) </option>

</select>






<select name="sector" style='
color: rgb(169, 169, 169);
  text-align: center;
  margin-top: 12px;
  width: 300px;
  margin-bottom: 24px;
  padding-left: 78px;
  font-size: 21px;
  padding-top: 9px;
  padding-bottom: 9px;
}'>

<option>Your startup sector</option>


<option>Ecommerce</option>


<option>Education</option>

<option>Financial services</option>

<option>Gaming</option>

<option>Health Care</option>

<option>Hospitality</option>

</select>

<br>



<label class="" style='   font-size: 22px;
  /* font-weight: normal; */
  text-transform: capitalize;
  color: rgb(153, 200, 55);'>Location:</label><br>


 <input type="text" required placeholder="enter street name" name="street" style="  font-weight: normal;                             
  width: 300px;
  font-size: 19px;
  height: 51px;  font-weight: normal;
  width: 300px;
  font-size: 19px;
  height: 51px;
  text-align: center;
  text-transform: capitalize;"><br>



<select name="city" style='
color: rgb(169, 169, 169);
  text-align: center;
  margin-top: 12px;
  width: 300px;
  margin-bottom: 24px;
  padding-left: 78px;
  font-size: 21px;
  padding-top: 9px;
  padding-bottom: 9px;
}'>

	<?php $cmd="select * from indiancities";

				$arrcity=array();

 $result=mysql_query($cmd);
   $rc=mysql_num_rows($result);
             while($row=mysql_fetch_array($result))
                                               {
                                                                    array_push($arrcity,$row);
                                                              
                                         

                                               }
                                        
                                               					
for($k=0;$k<sizeof($arrcity);$k++){
	;?>
<option><?php  echo $arrcity[$k]['COL 1']; ?></option>


<?php } ?>



</select><br>



<select name="state" style='
color: rgb(169, 169, 169);
  text-align: center;
  margin-top: 12px;
  margin-bottom: 24px;
  padding-left: 78px;
  font-size: 21px;
  padding-top: 9px;
  padding-bottom: 9px;
  width:300px;
}'>

	<?php $cmd="select * from indiancities";

				$arrstate=array();

 $result=mysql_query($cmd);
   $rc=mysql_num_rows($result);
             while($row=mysql_fetch_array($result))
                                               {
                                                                    array_push($arrstate,$row);
                                                              
                                         

                                               }
                                               //$arrstate=array_unique($arrstate);
                                   
                                               					
for($k=0;$k<sizeof($arrstate);$k++){
	?>
<option><?php  echo $arrstate[$k]['COL 2']; ?></option>


<?php } ?>



</select><br>




<label class="" style='  font-size: 22px;
  /* font-weight: normal; */
  text-transform: capitalize;
  color: rgb(153, 200, 55);;'>Phone number :</label><br>

<input type="text" required placeholder="enter your phonenumber" name="phonenumber" style="  font-weight: normal;
  width: 300px;
  font-size: 19px;
  height: 51px;  font-weight: normal;
  width: 300px;
  font-size: 19px;
  height: 51px;
  text-align: center;
  text-transform: capitalize;"><br>

<label class="" style='   font-size: 22px;
  /* font-weight: normal; */
  text-transform: capitalize;
  color: rgb(153, 200, 55);'>upload your brief details/ideas or any other docs :</label><br>

<input type="file"  required name="fileToUpload" id="fileToUpload" placeholder="upload your product model or any other docs" style="  font-weight: normal;
  width: 300px;
  font-size: 19px;
  height: 51px;
  text-align: center;
  text-transform: capitalize;"><br>

<input type="submit" placeholder="enter your phonenumber" name='applysubmit' class="applysubmit"  value='apply now !' name="phonenumber" style=""><br>





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
