<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html;charset=utf-8">
	<meta name="application-name" content="Дизайнерско студио" />
	<meta name="language" content="bulgarian" />
	<meta name="keywords" content="уеб дизайн, лого дизайн, външна реклама, рекламни материали, дизайнерско студио" />
	<meta name="description" content="Изработка на уебсайтове, уеб дизайн, лого дизайн. Външна реклама и рекламни материали." />
	<meta name="Robots" content="index,follow" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <title>Refsystems</title>
  
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="main.js"></script>
<link rel="stylesheet" href="main_refsystems.css?v=2" type="text/css" media="screen">
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

  ga('create', 'UA-56019344-1', 'auto');
  ga('send', 'pageview');

</script>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/bg_BG/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

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

<div id="content" <?=(isset($menu)) ? ' class="'.$menu.'"' : '';?>>


<div id="header">
<a href="index.php" id="logo"><img src="img/logo_sml.png" /></a>


	<div id="phones"><strong>
		<a href="/">НАЧАЛО</a>
		<a href="/about.php">ЗА НАС</a>
		<a href="/contacts.php">КОНТАКТИ</a>
		<a href="https://www.facebook.com/pages/Orbita-design-studio/182741371876515" class="fb" target="_blank"><img src='img/fb.png' alt="facebook" /></a>
	</strong>	
	</div>
</div>


<!--header end-->






		<ul class="mainmenu sf-menu">
			<li <?=($menu=='projects') ? ' class="active"' : '';?>>
				<a href="/projects.php" >Проекти</a>
						<ul class="submenu">
							<li><a href="/logodesign.php">Цени</a></li>
							<li><a href="/logodesign.php#portfolio">Портфолио</a></li>						
						</ul>
			</li>
			<li<?=($menu=='service') ? ' class="active"' : '';?>>
				<a href="/service.php" >Сервиз</a>
						<ul class="submenu">
							<li><a href="/webdesign.php">Цени</a></li>
							<li><a href="/webdesign.php#portfolio">Портфолио</a></li>						
						</ul>
			</li>
			<li <?=($menu=='parts_adv') ? ' class="active smallerPadding"' : 'class="smallerPadding"';?> >
				<a href="/parts.php" >Резервни части<br> и обурудване</a>
						<ul class="submenu">
							<li><a href="/print_adv.php">Цени</a></li>
							<li><a href="/print_adv.php#portfolio">Портфолио</a></li>						
						</ul>
			</li>
			<li<?=($menu=='gallery') ? ' class="active"' : '';?>>
				<a href="/gallery.php" >Галерия</a>
						<ul class="submenu">
							<li><a href="/outdoor_adv.php">Цени</a></li>
							<li><a href="/outdoor_adv.php#portfolio">Портфолио</a></li>						
						</ul>
			</li>

		</ul>

<?php
error_reporting(E_ERROR | E_PARSE);
include('admin/db.php');

	  	if($menu=='products'){
			$allproducts='';
			$sql7 = "SELECT id FROM news WHERE category=".$prod_cat;
				$result7 = mysql_query($sql7) or die('error in the select with same slug query');
				if (!mysql_query($sql7))
				{echo "sql problem. vij home.php. ili si zabravil da includne6 db.php";}
				$nqkva=0;
				while($row7 = mysql_fetch_array($result7))
					{
					$allproducts.=$row7['id'].', ';
					}

		$allproducts=rtrim($allproducts,',');

		}
			

?>
	<script>
	var product_ids = [<?=$allproducts?>];
	</script>
