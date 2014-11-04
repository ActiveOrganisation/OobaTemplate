(function($) {

$(function()
	{
	$("#offCanvasNavButton").click(function()
		{
		$("#outerWrapper,#navigation").toggleClass("offCanvas");
		$("#offCanvasNavButtonWrapper").toggleClass("closeReposition");
		$("html, body").animate({scrollTop: 0}, 500);//goes back to top to view nav
          
		if ( $("#offCanvasNavButtonWrapper").hasClass("closeReposition") )
			{
			$("#offCanvasNavButton").html("<i class=\"fa fa-times\"></i> Close Navigation");
			}
		else
			{
			$("#offCanvasNavButton").html("<i class=\"fa fa-list-ul\"></i> Navigation");
			}
		});

		

		/* If there is a .parent with a ul - add the extra div */
		$(".parent").has("ul").append('<div class=\"expandTier\"><i class=\"fa expand-icon-closed\"></i></div>');

		/* When the expandTier div is clicked within .parent run the below */
		$(".parent .expandTier").click(function()
		{
		$(this).toggleClass("open");
		$(this).siblings('ul').toggleClass('show');
		//$(this).siblings('ul').slideToggle('slow');
		
		
		/* If epandTier does / does not have a class of open .... then change the innerHTML */
		if ( $(this).hasClass("open"))
			{
			$(this).html("<i class=\"fa expand-icon-open\"></i>");
			}
		else
			{
			$(this).html("<i class=\"fa expand-icon-closed\"></i>");
			}

		
		
		});
		
	}); // End of OFF CANVAS NAVIGATION   
      

  
  /************ Slide In's - bottom :: .slidein.bottom**************/   
$(function()
{
      $(".slidein.bottom").click(function()
          {
      $(this).toggleClass("offCanvas");
       });        
  
});//end of slide in function 
/********************************************/      
      
      
      
/************ Slide In's - right/left **************/
$(function()
{  
      $(".slidein.right .moduletable h3").click(function()
          {
      $(".slidein.right").toggleClass("offCanvas");
       }); 
        
      $(".slidein.left .moduletable h3").click(function()
          {
          $(".slidein.left").toggleClass("offCanvas");
       });
});//end of slide in function   
/********************************************/      
      
		

		
})(jQuery);