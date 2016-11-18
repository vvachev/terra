<? $menu='products'; $prod_cat=(int)$_GET['c']; include('header.php'); ?>

  


  

  
<ul class="sidemenu">
	<li><a href="/advertising.php" >Рекламни материали</a></li>
	<li><a href="/products.php?c=0" <?= ($prod_cat==0) ? ' class="active" ' : '';?>>Календари</a></li>
	<li><a href="/products.php?c=1" <?=($prod_cat==1) ? ' class="active" ' : '';?>>Бележници</a></li>
	<li><a href="/products.php?c=2" <?=($prod_cat==2) ? ' class="active" ' : '';?>>Химикалки</a></li>
	<li><a href="/products.php?c=3" <?=($prod_cat==3) ? ' class="active" ' : '';?>>Запалки</a></li>
	<li><a href="/products.php?c=4" <?=($prod_cat==4) ? ' class="active" ' : '';?>>Ключодържатели</a></li>
	<li><a href="/products.php?c=5" <?=($prod_cat==5) ? ' class="active" ' : '';?>>Бизнес подаръци</a></li>
	<li><a href="/products.php?c=6" <?=($prod_cat==6) ? ' class="active" ' : '';?>>Сувенири</a></li>
	<li><a href="/products.php?c=7" <?=($prod_cat==7) ? ' class="active" ' : '';?>>Цени за печат</a></li>
</ul>



<ul class="advlist productslist">

<?php

		$sql7 = "SELECT * FROM news WHERE category=".(int)$_GET['c']." ORDER BY id DESC";
				$result7 = mysql_query($sql7) or die('error in the select with same slug query');
				if (!mysql_query($sql7))
				{echo "sql problem. vij home.php. ili si zabravil da includne6 db.php";}
				while($row7 = mysql_fetch_array($result7))
					{
 ?>
	<li><img src="img/photo/<?=$row7['pic']?>" />
		<span class="zaglavqnka"><a href="javascript:;"><?=$row7['title']?> <cite><?=$row7['price']?></cite></a></span>
		<div class="overproduct" data-productid="<?=$row7['id']?>">
			<div><?=$row7['description']?>
				<a class="price_additional" href="/products.php?c=7">Цени за печат</a>
			</div>
		</div>
	</li>
<? } ?>



</ul>

  

  
  
  
</div>


<? include('footer.php'); ?>
