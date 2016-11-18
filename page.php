<? $menu=$_GET['name']; include('header.php'); ?>
  
  
<?php

		$sql7 = "SELECT * FROM page_texts WHERE id=1";
				$result7 = mysql_query($sql7) or die('error in the select with same slug query');
				if (!mysql_query($sql7))
				{echo "sql problem. vij home.php. ili si zabravil da includne6 db.php";}
				while($row7 = mysql_fetch_array($result7))
					{ echo $row7[$_GET['name']]; }
					
?>

</div>

<? include('footer.php'); ?>
