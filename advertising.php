<? $menu='adv'; include('header.php'); ?>

  
  
<ul class="sidemenu">
	<li><a href="/advertising.php">Рекламни материали</a></li>
	<li><a href="/products.php?c=0">Календари</a></li>
	<li><a href="/products.php?c=1">Бележници</a></li>
	<li><a href="/products.php?c=2">Химикалки</a></li>
	<li><a href="/products.php?c=3">Запалки</a></li>
	<li><a href="/products.php?c=4">Ключодържатели</a></li>
	<li><a href="/products.php?c=5">Визитници</a></li>
	<li><a href="/products.php?c=6">Сувенири</a></li>
</ul>

	  		<?php
			$pics=array();
			$sql7 = "SELECT * FROM gallery WHERE category=11 ORDER BY id DESC";
				$result7 = mysql_query($sql7) or die('error in the select with same slug query');
				if (!mysql_query($sql7))
				{echo "sql problem. vij home.php. ili si zabravil da includne6 db.php";}
				$nqkva=0;
				while($row7 = mysql_fetch_array($result7))
					{
					$pics[]='img/photo/'.$row7['pic'];
					}
		
			?>



<ul class="advlist frst">
	<li><a href="/products.php?c=0"><img src="<?=$pics[0]?>" /></a><span class="zaglavqnka"><a href="/products.php?c=0">Календари</span></a></li>
	<li><a href="/products.php?c=1"><img src="<?=$pics[1]?>" /></a><span class="zaglavqnka"><a href="/products.php?c=1">Бележници</a></span></li>
	<li><a href="/products.php?c=2"><img src="<?=$pics[2]?>" /></a><span class="zaglavqnka"><a href="/products.php?c=2">химикалки</a></span></li>
	<li><a href="/products.php?c=3"><img src="<?=$pics[3]?>" /></a><span class="zaglavqnka"><a href="/products.php?c=3">ЗАПАЛКИ</a></span></li>

</ul>
<ul class="advlist second">
	<li><a href="/products.php?c=6"><img src="<?=$pics[6]?>" /></a><span class="zaglavqnka"><a href="/products.php?c=6">Сувенири</a></span></li>
	<li><a href="/products.php?c=4"><img src="<?=$pics[5]?>" /></a><span class="zaglavqnka"><a href="/products.php?c=4">Ключодържатели</a></span></li>
	<li><a href="/products.php?c=5"><img src="<?=$pics[4]?>" /></a><span class="zaglavqnka"><a href="/products.php?c=5">Визитници</a></span></li>
</ul>
  

  
  
  
</div>


<?  include('footer.php'); ?>
