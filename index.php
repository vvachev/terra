<? include('header.php'); ?>

<div id="middle" >

<div class="grid">
  <div class="device">
        <div class="geo">
            <div class="geoin">
<?php echo $pagetexts['home'];  ?>

            
            </div>
        </div>
        <img src="img/home_slider.jpg">
	  		<?php
			$sql7 = "SELECT * FROM gallery WHERE category=10 ORDER BY id DESC";
				$result7 = mysql_query($sql7) or die('error in the select with same slug query');
				if (!mysql_query($sql7))
				{echo "sql problem. vij home.php. ili si zabravil da includne6 db.php";}
				$nqkva=0;
				while($row7 = mysql_fetch_array($result7))
					{
					//SHTE E HOME PIC echo '<div class="swiper-slide"> <center><img src="img/photo/'.$row7['pic'].'"></center>  </div>';
					}
		
			?>

  </div>
  

  

  

</div><!--grid-->  
</div><!--middle-->  
</div><!--content-->


<? include('footer.php'); ?>
