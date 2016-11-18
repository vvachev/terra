<? include('header1.php'); ?> 
		
  <div class="device">
    <div class="swiper-container">
      <div class="swiper-wrapper">
	  		<?php
			$sql7 = "SELECT * FROM gallery WHERE category=10 ORDER BY id DESC";
				$result7 = mysql_query($sql7) or die('error in the select with same slug query');
				if (!mysql_query($sql7))
				{echo "sql problem. vij home.php. ili si zabravil da includne6 db.php";}
				$nqkva=0;
				while($row7 = mysql_fetch_array($result7))
					{
					echo '<div class="swiper-slide"> <center><img src="img/photo/'.$row7['pic'].'"></center>  </div>';
					}
		
			?>

      </div>
    </div>
  </div>

  
  
  <div class="separator white"></div>
<?php

		$sql7 = "SELECT * FROM page_texts WHERE id=1";
				$result7 = mysql_query($sql7) or die('error in the select with same slug query');
				if (!mysql_query($sql7))
				{echo "sql problem. vij home.php. ili si zabravil da includne6 db.php";}
				while($row7 = mysql_fetch_array($result7))
					{ 
						//echo '<center><h3 class="slogan">'.$row7['home'].'</h3></center>';
						echo '<center><h3 class="slogan">select with same slug queryselect with same slug queryselect with same slug queryselect with same slug queryselect with same slug queryselect with same slug queryselect with same slug queryselect with same slug queryselect with same slug query</h3></center>';
					}
					
?>
  
  

  
	  <div id="rightbanner">
	  </div>
	  <div id="bottombanner">

	  </div>
  
</div>


<? include('footer.php'); ?>
