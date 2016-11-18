<?php 
$menu="gallery";
include('header.php'); ?>


<div id="content">


  
	<div id="gallery">

				
	<?php
			$sql1 = "SELECT * FROM gallery WHERE placement='gallery' AND id=".(int)$_GET['pid']." ORDER BY `date` DESC";
					$result1 = mysql_query($sql1) or die('error in the select with same slug query');
					if (!mysql_query($sql1))
					{echo "sql problem. vij home.php. ili si zabravil da includne6 db.php";}
		while($row1 = mysql_fetch_array($result1))
		{
			if ($row1['pic'] !== 'transparent.png') 
			{
			echo '<center><img src="img/photo/'.$row1['pic'].'"><br><p>'.$row1['description'].'</p></center>';
			echo '<meta property="og:title" content="'.$row1['description'].'" />';
			} else { echo '<li class="oneperline1"></li>'; }
		}
	?>

		
		

	</div>
  
  
</div>


<?php include('footer.php'); ?>