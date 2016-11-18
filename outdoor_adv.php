<? $menu='outdoor_adv'; include('header.php'); ?>
  
  
  
<?php

		$sql7 = "SELECT * FROM page_texts WHERE id=1";
				$result7 = mysql_query($sql7) or die('error in the select with same slug query');
				if (!mysql_query($sql7))
				{echo "sql problem. vij home.php. ili si zabravil da includne6 db.php";}
				while($row7 = mysql_fetch_array($result7))
					{ echo $row7['outdooradv']; }
					
?>


<div class="portfolio"  id="portfolio" >Портфолио</div><div class="arrow-down"></div>


		<script type="text/javascript" src="fancy/source/jquery.fancybox.js?v=2.1.5"></script>
		<link rel="stylesheet" type="text/css" href="fancy/source/jquery.fancybox.css?v=2.1.6" media="screen" />
		<script>
			$(document).ready(function() {
				$('.fancybox').fancybox();
				
				
				$('.fancybox img').bind('mouseenter',function(){
					var $elem = $(this);
					$elem.animate({

	
							'opacity': 1
						 },100,'linear');
						
				}).bind('mouseleave',function(){
					var $elem = $(this);

						$elem.animate({
							'opacity': 0.8
						 },100,'linear');
				});
				
			});
		</script>
<ul class="pflist">
	  		<?php
			$sql7 = "SELECT * FROM gallery WHERE category=3 ORDER BY id DESC";
				$result7 = mysql_query($sql7) or die('error in the select with same slug query');
				if (!mysql_query($sql7))
				{echo "sql problem. vij home.php. ili si zabravil da includne6 db.php";}
				$nqkva=0;
				while($row7 = mysql_fetch_array($result7))
					{
					echo '<li><a class="fancybox" rel="group" href="img/photo/'.$row7['pic'].'" data-fancybox-group="gallery" title="'.$row7['description'].'" ><img src="img/photo/'.$row7['pic'].'" /></a></li>';
					}
		
			?>
</ul>
  
  
  
  
</div>



<? include('footer.php'); ?>
