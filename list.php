<? $menu=$_GET['category']; include('header.php'); ?>


		<script>
                    var dont = false;
			$(document).ready(function() {
			
				
				$('.blocks').bind('click',function(){
                                    if(dont===false){
					var $elem = $(this);
                                        $elem.animate({height: '500px'});
                                        $elem.find('.arrow').show();
                                    }
						
				});
                                $('.arrow').bind('click',function(){
                                        dont=true;
					var $elem = $(this).parent('.blocks');
                                        $elem.animate({height: '150px'});
                                        $(this).hide();
                                        //dont=false;
                                        setTimeout(function(){ dont=false; }, 1000);
				});
				
			});
		</script>
                
<div id="middle"  >

<div class="grid list">
    
    <?php
		$sql77 = "SELECT * FROM gallery WHERE category=".(int)$menu;
				$result77 = mysql_query($sql77) or die('error in the select with same slug query');
				if (!mysql_query($sql77))
				{echo "sql problem. vij home.php. ili si zabravil da includne6 db.php";}
				while($row77 = mysql_fetch_array($result77))
					{ 
                                    echo '<div class="blocks"><img class="arrow" src="img/arrow.png" />'.strip_tags($row77['description']).'</div>'; 
                                    
                                }	

?>
    

  
 
<span class="bottomtxt"><?php echo strip_tags($pagetexts['bottom_'.$menu]);  ?></span>

</div><!--grid-->  
</div><!--middle-->  
</div><!--content-->


<? include('footer.php'); ?>
