<?php
include('admin/db.php');

		$sql7 = "SELECT * FROM news WHERE id=".(int)$_POST['product_id']." LIMIT 1";
				$result7 = mysql_query($sql7) or die('error in the select with same slug query');
				if (!mysql_query($sql7))
				{echo "sql problem. vij home.php. ili si zabravil da includne6 db.php";}
				while($row7 = mysql_fetch_array($result7))
					{
 ?>
					<img src="img/photo/<?=$row7['pic']?>"/>
					<div class="txt"><?=$row7['description']?>
						<p class="price"><?=$row7['price']?> лв</p>
					</div>
<? } ?>


