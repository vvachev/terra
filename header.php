<? if(!isset($_GET['debug']) ) { if($_SERVER['REMOTE_ADDR']!=='77.70.38.136') { 
//exit('Not authorized');
} } ?>﻿

<?php
error_reporting(E_ERROR | E_PARSE);
include('admin/db.php');

//	  	if($menu=='products'){
//			$allproducts='';
//			$sql7 = "SELECT id FROM news WHERE category=".$prod_cat;
//				$result7 = mysql_query($sql7) or die('error in the select with same slug query');
//				if (!mysql_query($sql7))
//				{echo "sql problem. vij home.php. ili si zabravil da includne6 db.php";}
//				$nqkva=0;
//				while($row7 = mysql_fetch_array($result7))
//					{
//					$allproducts.=$row7['id'].', ';
//					}
//
//		$allproducts=rtrim($allproducts,',');
//
//		}
		$sql7 = "SELECT * FROM page_texts WHERE id=1";
				$result7 = mysql_query($sql7) or die('error in the select with same slug query');
				if (!mysql_query($sql7))
				{echo "sql problem. vij home.php. ili si zabravil da includne6 db.php";}
				while($row7 = mysql_fetch_array($result7))
					{ 
                                    $pagetexts= $row7; 
                                    
                                }	

?>

<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html;charset=utf-8">
	<meta name="application-name" content="Литов и синове" />
	<meta name="language" content="bulgarian" />
	<meta name="keywords" content="Террасърв, геодезия, кадастър, регулация" />
	<meta name="description" content="Террасърв, геодезия, кадастър, регулация" />
	<meta name="Robots" content="index,follow" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <title>Террасърв - геодезия, кадастър, регулация</title>
  
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="main.js"></script>
<link rel="stylesheet" href="main.css?v=4" type="text/css" media="screen">
<link rel="stylesheet" href="responsive.css?v=2" type="text/css" media="screen">


<script src="resp_menu/jquery.mmenu.min.all.js" type="text/javascript"></script>
   <link href="resp_menu/jquery.mmenu.all.css" type="text/css" rel="stylesheet" />
   <script type="text/javascript">
   $(document).ready(function() {
      $("#my-menu").mmenu();
	  
      $(".mm-fixed-top").click(function() {
         $("#my-menu").trigger("open.mm");
      });

      $("#close-button").click(function() {
         $("#my-menu").trigger("close.mm");
      });

	$(".mainmenu > li").hover(
		  function () {
			$(this).addClass('hover');
		  }, 
		  function () {
			$(this).removeClass('hover');
		  }
	 );

   });
</script>

<link rel="stylesheet" href="slider/demos/css/idangerous.swiper.css">
</head>
<body>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  //ga('create', 'UA-56019344-1', 'auto');//TODO
  //ga('send', 'pageview');

</script>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/bg_BG/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>




	<nav id="my-menu">
		<ul class="List">
				<li <?=($menu=='1') ? ' class="active arrow_box"' : '';?>>
					<a href="/list.php?category=1" >КАДАСТЪР</a>
							<!--<ul class="submenu">
								<li><a href="/logodesign.php">Цени</a></li>
								<li><a href="/logodesign.php#portfolio">Портфолио</a></li>						
							</ul>-->
				</li>
				<li<?=($menu=='2') ? ' class="active arrow_box"' : '';?>>
					<a href="/list.php?category=2" >ГЕОДЕЗИЯ</a>
					
				</li>
				<li<?=($menu=='3') ? ' class="active arrow_box"' : '';?>>
					<a href="/list.php?category=3" >РЕГУЛАЦИЯ</a>

				</li>
				<li<?=($menu=='contacts') ? ' class="active arrow_box"' : '';?>> 
					<a href="/contacts.php" >КОНТАКТИ</a>
				</li>


<li>
<a href="/contacts.php">Контакти</a>
</li>
<li>
<a href="tel:+<?php echo $pagetexts['phone'];  ?>"><?php echo $pagetexts['phone'];  ?></a>
</li>
			
		</ul>
	</nav>
	<div class="header mm-fixed-top">
				<a href="#menu"></a>
				
	</div>
	
<? if($menu=='products'){ ?>
	

	<div class="popup">
			<div class="close"></div>
			<div class="leftbtn"></div>
			<div class="rightbtn"></div>

			<div class="ajx">


			</div>

	</div>
<? } ?>

<div id="header">

	<div class="grid">
		<a href="index.php" id="logo"><img src="img/logo.png" /></a>
                <div class="email">&nbsp;&nbsp;&nbsp;&nbsp<span class="phn"><?php echo strip_tags($pagetexts['phone']);  ?></span><br> <?php echo strip_tags($pagetexts['email']);  ?></div>
                
	</div>
	
	<center id="mainmenuHolder" class="grid">
			<ul class="mainmenu sf-menu">
				<li <?=($menu=='1') ? ' class="active arrow_box"' : '';?>>
					<a href="/list.php?category=1" >КАДАСТЪР</a>
							<!--<ul class="submenu">
								<li><a href="/logodesign.php">Цени</a></li>
								<li><a href="/logodesign.php#portfolio">Портфолио</a></li>						
							</ul>-->
				</li>
				<li<?=($menu=='2') ? ' class="active arrow_box"' : '';?>>
					<a href="/list.php?category=2" >ГЕОДЕЗИЯ</a>
					
				</li>
				<li<?=($menu=='3') ? ' class="active arrow_box"' : '';?>>
					<a href="/list.php?category=3" >РЕГУЛАЦИЯ</a>

				</li>
				<li<?=($menu=='contacts') ? ' class="active arrow_box"' : '';?>> 
					<a href="/contacts.php" >КОНТАКТИ</a>
				</li>
			</ul>
	</center>
	</div>

	<div id="content" class="  <?=(isset($menu)) ? $menu : '';?>">


<!--header end-->






	<script>
	var product_ids = [<?=$allproducts?>];
	</script>
