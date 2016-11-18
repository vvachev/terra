   //variables
   var curr_product=0;


   $(document).ready(function() {
   		$('.adv .advlist li').bind('mouseenter',function(){
   			$(this).children('span').fadeIn('slow');
   		}).bind('mouseleave',function(){
   			$(this).children('span').fadeOut('slow');
   		});
   		$('.productslist li').bind('mouseenter',function(){
   			$(this).children('.overproduct').fadeIn(444);
   		}).bind('mouseleave',function(){
   			$(this).children('.overproduct').fadeOut(444);
   		});

      $('#home li a').bind('mouseenter',function(){
        $(this).children('.first').hide();
        $(this).children('.overeffect').show();
        $(this).next().css('padding-top','43px');
      }).bind('mouseleave',function(){
        $(this).children('.overeffect').hide();
        $(this).children('.first').show();
        $(this).next().css('padding-top','55px');
      });



   		//products pop up window
		$('.close').click(function(){
			$(".popup").fadeOut(1000);
			//$(".popup").animate({height:"0px"}, 555);
		});
    $('.overproduct').click(function(){
      p_id=parseInt($(this).attr('data-productid'));
    	myAjax(p_id);

        for (index = 0; index < product_ids.length; ++index) {
            if(parseInt(product_ids[index])==p_id) {
              curr_product=index;
              if(console) {console.log('curr_product is set to '+index);}
            }
        }

    	$(".popup").fadeIn(1000);
    });
    $('.leftbtn').click(function(){
      if(curr_product>0){
        curr_product--;
        myAjax(product_ids[curr_product]);
      } else if(curr_product==0) { 
        curr_product=(product_ids.length-1);
        myAjax(product_ids[curr_product]);
      }
    });
    $('.rightbtn').click(function(){
      if(curr_product<(product_ids.length-1)){
        curr_product++;
        myAjax(product_ids[curr_product]);
      } else if (curr_product==(product_ids.length-1)) {
        curr_product=0;
        myAjax(product_ids[curr_product]);
      }
    });

   });

function myAjax(product_id) {
	//console.log('ajax with id '+product_id);
	
	$.ajax({
      type: "POST",
      url: "ajax.php",
      data: { product_id: product_id },
      success: function(response){
                $('.ajx').html(response);
               }
     }); 
   
}
