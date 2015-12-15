<?php
use frontend\assets\MyAsset;
/**
 * Created by PhpStorm.
 * User: slava
 * Date: 14.11.15
 * Time: 16:43
 */
/* @var $content string */
/* @var $this \yii\web\View */
MyAsset::register($this);
$this->beginPage();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>MyFreeCssTemplates.com free CSS template</title>
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <link href="styles.css" rel="stylesheet" type="text/css" media="screen" />
<link rel="stylesheet" href="nivo-slider.css" type="text/css" media="screen" />
    </head>
    <body>
		<div id="header">
			<div id="logo">
				<h1><a href="#">freecss_greentextile</a></h1>
	            <a href="#"><small>Small Company Slogan Goes Here</small></a>
			</div>
			<div id="menu">
				<ul>
					<li><a href="#" class="select">Home</a></li>
					<li><a href="#">Blog</a></li>
					<li><a href="#">Gallery</a></li>
					<li><a href="#">About Us</a></li>
					<li><a href="#">Contact Us</a></li>
				</ul>
			</div>
		</div>
		<div id="content_top"></div>
		<div id="content">
			<div id="prew_box">
				<div id="prew_top"></div>
				<div id="prew_bg">
					
			               <div id="wrapper">
								<div id="slider-wrapper">        
									<div id="slider" class="nivoSlider">
										<img src="images/prew_img1.jpg" alt="" />
										<img src="images/prew_img2.jpg" alt=""/>
										<img src="images/prew_img3.jpg" alt="" />
										<img src="images/prew_img4.jpg" alt="" />
										<img src="images/prew_img5.jpg" alt="" />
										<img src="images/prew_img6.jpg" alt="" />
									</div>        
								</div>
						</div>
			
			<script type="text/javascript" src="lib/jquery-1.4.3.min.js"></script>
				<script type="text/javascript" src="lib/jquery.nivo.slider.pack.js"></script>
				<script type="text/javascript">
				$(window).load(function() {
					$('#slider').nivoSlider();
				});
				</script>
						
						<div class="clear"></div>
				</div>
				<div id="prew_bot"></div>
			</div>
			<div class="white_box">
				<div class="white_box_top"></div>
				<div class="white_box_bg">
					
					
					<div class="3column bor_bot">
						<div class="col1">
							<h3 class="list">Vivamus tempor mauris</h3>
							<p><a href="#">Vestibulum tempor ligula est.</a><br />
							Integer lectus sapien, pulvinar non ornare quis, vulputate vel eros. Cras aliquam quam eget odio accumsan eu lobortis. <a href="#">&raquo;</a></p>
						</div>
						<div class="col2">
							<h3 class="clip">Ut tellus erat</h3>
							<p><a href="#">Quisque malesuada pretium magna.</a><br />
							Sed posuere tellus vulputate eu. In ut varius leo. Ut ante nisl, faucibus ut mollis at, suscipit et augue. <a href="#">&raquo;</a></p>
						</div>
						<div class="col3">
							<h3 class="user">Sed suscipit lobortis</h3>
							<p><a href="#">Donec ornare, dui nec faucibus mattis.</a><br />
							Velit felis eleifend nisi, eu luctus purus enim eget leo. Ut luctus volutpat libero in auctor. Praesent tincidunt placerat.<a href="#">&raquo;</a></p>
						</div>
						<div class="clear"></div>
					</div>
					
					<h2>Sed laoreet enim ut sem bibendum at lobortis erat tempus.</h2>
					<div class="3column">
						<div class="col1">
							<div class="img_box">
								<img src="images/img1.jpg" alt="" title="" />
							</div>
							<h3>Nunc eget mi id risus.</h3>
							<p>Integer lectus sapien, pulvinar non ornare quis, vulputate vel eros. Cras aliquam quam eget odio accumsan eu lobortis. <a href="#">&raquo;</a></p>
						</div>
						<div class="col2">
							<div class="img_box">
								<img src="images/img2.jpg" alt="" title="" />
							</div>
							<h3>Aliquam congue nisi quis.</h3>
							<p>Nam eget metus dui, eu consectetur urna. Donec sed mauris quis nisl iaculis ullamcorper. Phasellus hendrerit.<a href="#">&raquo;</a></p>
						</div>
						<div class="col3">
							<div class="img_box">
								<img src="images/img3.jpg" alt="" title="" />
							</div>
							<h3>Ut tellus erat.</h3>
							<p>Sed suscipit lobortis massa, imperdiet feugiat ante bibendum et. Phasellus viverra, lectus a tristique rutrum.<a href="#">&raquo;</a></p>
						</div>
						<div class="clear"></div>
					</div>
				</div>
				<div class="white_box_bot"></div>
			</div>
		</div>
		<div id="content_bot"></div>
		
			<div id="foot_column4">
            	<div class="foot_col1">
            		<h4>Follow Us</h4>
					<div class="link1"><a href="#">Subscribe to Blog</a></div>
	                <div class="link2"><a href="#">Be a fan on Facebook</a></div>
	                <div class="link3"><a href="#">RSS Feed</a></div>
	                <div class="link4"><a href="#">Follow us on Twitter</a></div>
				</div>
                <div class="foot_col2">
	                <h4>Services</h4>
					<ul class="ls">
		                <li><a href="#">Service Number 1</a></li>
		                <li><a href="#">Service Number 2</a></li>
		                <li><a href="#">Service Number 3</a></li>
		                <li><a href="#">Service Number 4</a></li>
		                <li><a href="#">Service Number 5</a></li>
		                <li><a href="#">Service Number 6</a></li>
	                </ul>
                </div>
                <div class="foot_col3">
		            <h4>About Us</h4>
			        <img src="images/img4.jpg" alt="" title="" style="float: left; padding: 3px 10px 0px 0px;" />
					<p><a href="#">&quot;Integer malesuada porttitor elit, at cursus massa malesuada a.&quot;</a></p>
			        <br />
					<img src="images/img5.jpg" alt="" title="" style="float: left; padding: 3px 10px 0px 0px;" />
					<p><a href="#">&quot;Donec vel nulla a enim iaculis tempus.&quot;</a></p>
				</div>
                <div class="foot_col4">
		            <h4>Contact Information</h4>
			        <p>1234 SomeStreet</p>
					<p>Brooklyn, NY 11201</p>
					<p>Phone:  1(234) 567 8910</p>
					<p>Fax: 1(234) 567 8910</p>
					<p>E-mail:companyname@yahoo.com</p>
                </div>
                <div style="clear: both"></div>
            </div>	
		<div id="footer">
			<p>Copyright  2011. <!-- Do not remove -->Designed by <a href="http://www.metamorphozis.com/free_templates/free_templates.php" title="Free Web Templates">Free Web Templates</a>, coded by <a href="http://www.myfreecsstemplates.com/" title="Free CSS Templates">Free CSS Templates</a><!-- end --><!-- VLinks --></p>
		        <p><a href="#">Privacy Policy</a> | <a href="#">Terms of Use</a> | <a href="http://validator.w3.org/check/referer" title="This page validates as XHTML 1.0 Transitional"><abbr title="eXtensible HyperText Markup Language">XHTML</abbr></a> | <a href="http://jigsaw.w3.org/css-validator/check/referer" title="This page validates as CSS"><abbr title="Cascading Style Sheets">CSS</abbr></a></p>
		</div>
		
    </body>
</html>

<?php $this->endPage(); ?>
