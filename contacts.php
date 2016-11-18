<? $menu='contacts'; include('header.php'); ?>
  
<?php

		$sql7 = "SELECT * FROM page_texts WHERE id=1";
				$result7 = mysql_query($sql7) or die('error in the select with same slug query');
				if (!mysql_query($sql7))
				{echo "sql problem. vij home.php. ili si zabravil da includne6 db.php";}
				while($row7 = mysql_fetch_array($result7))
					{ //echo '<center>'.$row7['contacts'].'</center>';
                                    }
                                
					
?>
<div id="middle"  >
    <div class="grid ">
        <div class="cinfo shadow">
            <span class="heading">Contact us</span>
            <div class="left">
<?php echo $pagetexts['contacts'];  ?>
<!--                <span class="phone">тел. 0878 971 118</span><br>  email: terrasurv@icloud.com<br><br>

                София, Надежда 2,<br> 
                ул. Митрополит Авксентий<br> 
                Велешки 43, офис4<br> -->
          </div>
          <div class="right">
              <form action="<?php echo $pagetexts['email'];  ?>" method="post" enctype="text/plain">
                Name *:<br>
                <input type="text" name="firstname" value="">
                <br>
                Email Address *:<br>
                <input type="text" name="email" value="">
                Subject *:<br>
                <input type="text" name="subject" value="" size="60">
                <br>
                Message *:<br>
                <textarea name="message" class="txtarea" rows="4" ></textarea>
                <br><br>
                <input type="submit" class="submit" value="Send">
              </form>
          </div>
         </div>
     </div>
    <center class="map shadow"> 
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2930.8199907450653!2d23.30069771577303!3d42.72870061973315!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40aa901965f0dec3%3A0xbc43bdb1d3202d97!2sul.+%22Mitropolit+Avksentiy+Veleshki%22+43%2C+1220+Sofia!5e0!3m2!1sen!2sbg!4v1479289815400"
            width="1040" height="552" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div><center>
 </div>
  
  
</div>


<? include('footer.php'); ?>
