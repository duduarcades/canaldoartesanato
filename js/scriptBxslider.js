 $(document).ready(function(){

	 $('.mainBannerPrinc ul').bxSlider({
	  	pager: false
	 });

	 $('.carouselUser ul').bxSlider({	
	 	slideWidth: 220, //240
	 	maxSlides: 4,
    	pager: false,
     	slideMargin: 20,
     	controls: true 	

	 });	


	 
	 $('.contentImgPrinc ul').bxSlider({
	 	pager: false
	 });

	 $('.listPref').bxSlider({
		
	 	maxSlides: 3,
	 	minSlides: 3,
	 	slideWidth: 140,
	 	pager: false,
	 	slideMargin: 10
	 });

});