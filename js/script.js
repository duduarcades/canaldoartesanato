

var startedTecnica = false;
var startedProfessor = false;


$(function(){

	// INICIO CONTROLE DO MENU MOBILE
	$('.mobile_action').on('click', function(){

		 if(!$(this).hasClass('active')) {
		 	$(this).addClass('active');

		 	$('.active span').css({'display' : 'none'}); // REMOVENDO O A HAMBURGUER FORMATADO COM SPAN

		 	$('.main_header_nav').animate({'right': '0px'}, 300);
		 	$('.mask_header_nav').animate({'right': '0px'}, 300);
		 } else {
		 	$(this).removeClass('active');
		 	$('.mobile_action span').css({'display' : 'block'}); // // ADICIONANDO DE VOLTA O HAMBURGUER FORMATADO COM SPAN

		 	$('.main_header_nav').animate({'right': '-100%'}, 300);
		 	$('.mask_header_nav').animate({'right': '-100%'}, 300);
		 }
	});
	// FIM CONTROLE DO MENU MOBILE

	$('.menuOpcoes a').on('click', function(){

		var prevExists = $(this).hasClass("iSelected");

		$('.menuOpcoes a').removeClass('iSelected');

		if(!prevExists)
			$(this).addClass("iSelected");

		var id = '#' + $(this).text().replace('é', 'e').replace('link', '').toLowerCase();

		$('.boxItensCarrousel:not(' + id +')').hide();
		$(id).toggle(200);
		start = false;
		if(id == "#tecnicas" && !startedTecnica)
		{
			start = true;
			startedTecnica = true;
		}
		else if (id == "#professores" && !startedProfessor)
		{
			start = true;
			startedProfessor = true;
		}

		if(start == true)
			setTimeout(function(){
				$(id + " .itensCarrousel").bxSlider({
	 				slideWidth: 115,
					maxSlides: 7,
    				pager: false,
    				slideMargin: 22
				});
			},100);
	});

	$(window).scroll(function(){

		if ($(this).scrollTop() > 1 ) {

			$('.main_header ').addClass('sticky');
			$('.main_header ').addClass('boxshadowLow');

			$('.logoCanal').css({ 'max-width' : '166px', 'transition' : 'all 0.45s ease', 'margin' : '0 auto !important' });
			$('.menuOpcoes').addClass('ds-none');
			
			$('.boxItensCarrousel').addClass('ds-none');

		} else {

			$('.main_header ').removeClass('sticky');
			$('.logoCanal').css({ 'max-width' : '186px', 'transition' : 'all 0.45s ease' });
			$('.menuOpcoes').removeClass('ds-none');
			$('.main_header ').removeClass('boxshadowLow');

			$('.boxItensCarrousel').removeClass('ds-none');
		}

	});

	$('.sltCheckbox').on('click', function(){
		if ($(this).is(':checked')) {
			$(this).parent().addClass('boxselected');
		} else {
			$(this).parent().removeClass('boxselected');
		}
	});


	$('.listPref a').on('click', function(){

		
		var contemClasse = $(this).find('.descPref').hasClass('itemSelected');

		if (contemClasse) {
			$(this).find('.descPref').removeClass('itemSelected');	
		} else {
			$(this).find('.descPref').addClass('itemSelected');	
		}		

	});

	// INICIO BLOQUEANDO O LINK 
	$(function(){
		$('.listPref a').attr('href', 'javascript:void(0)');
	});
	// FIM BLOQUEANDO O LINK 

	$('.listMySugestion li').on('click', function(){

		var hide = $(this).find('.detailsSuggestion').css("display") == "none";

		$('.detailsSuggestion').hide();

		if(hide)	
			//$(this).find('.detailsSuggestion').toggle(200);
			$(this).find('.detailsSuggestion').show();


			//$(this).find('.iconList').addClass('iconListSelected');

	});



	$('.toggle_menu').on('click', function(){

		$(this).next('.box_toggle').toggle(250);
		

		var menu_disabled = $(this).hasClass('toggle_menu_disabled');

		if(menu_disabled)
			$(this).removeClass('toggle_menu_disabled');
		else
			$(this).addClass('toggle_menu_disabled');

	});

	
	$(".ratingSearchBox span").click(function () {

		if ($(this).prev("input[checked]").length)
			$("input[checked]").prop("checked", false);
		else
			$(this).prev("input").prop("checked", true);


		var indexSpan = $(this).index();

		if (indexSpan == 1) {
			$(".ratingSearchBox span").removeClass("rateSelect");
			$(".ratingSearchBox span:eq(0)").addClass("rateSelect");
		} else if (indexSpan == 3) {
			$(".ratingSearchBox span").removeClass("rateSelect");
			$(".ratingSearchBox span:eq(0), .ratingSearchBox span:eq(1)").addClass("rateSelect");
		} else if (indexSpan == 5) {
			$(".ratingSearchBox span").removeClass("rateSelect");
			$(".ratingSearchBox span:eq(0), .ratingSearchBox span:eq(1), .ratingSearchBox span:eq(2)").addClass("rateSelect");
		} else if (indexSpan == 7) {
			$(".ratingSearchBox span").removeClass("rateSelect");
			$(".ratingSearchBox span:eq(0), .ratingSearchBox span:eq(1), .ratingSearchBox span:eq(2), .ratingSearchBox span:eq(3)").addClass("rateSelect");
		} else if (indexSpan == 9)
			$(".ratingSearchBox span").addClass("rateSelect");

	});

	$(".ratingSearchBox span").hover(function () {
			$(this).prevAll("span").addClass("rateHover");
		}, function () {
			$(this).prevAll("span").removeClass("rateHover");
	});



	$(".levelProgressBox span").click(function () {

		if ($(this).prev("input[checked]").length)
			$("input[checked]").prop("checked", false);
		else
			$(this).prev("input").prop("checked", true);

		var indexSpan = $(this).index();

		if (indexSpan == 1) {
			$(".levelProgressBox span").removeClass("levelSelect");
			$(".levelProgressBox span:eq(0)").addClass("levelSelect");
		} else if (indexSpan == 3) {
			$(".levelProgressBox span").removeClass("levelSelect");
			$(".levelProgressBox span:eq(1)").addClass("levelSelect");
		} else if (indexSpan == 5) {
			$(".levelProgressBox span").removeClass("levelSelect");
			$(".levelProgressBox span:eq(2)").addClass("levelSelect");
		}
	});

	$(".levelProgressBox span").hover(function () {
		$(this).prev("span").addClass("levelHover");
		}, function () {
		$(this).prev("span").removeClass("levelHover");
	});

	$(".PLHthumb").click(function (e) {
		if (!$(this).hasClass("PLHthumbView")) {
			$(".PLHthumbView").removeClass("PLHthumbView");	
			$(this).addClass("PLHthumbView");
		}
		e.preventDefault();
	});


	$("#CategoryId, #TeacherId").change(function (e) {
		$("#" + $(this).attr("id").replace("Id", "Image")).attr("src", $(this.options[e.target.selectedIndex]).data("href"));
	});	

	
	$('.chkTermos').on('click', function() {

		if( $('.btnCard').hasClass('btnCardDisable') ) 
			$('.btnCard').removeClass('btnCardDisable').addClass('btnCardEnable').attr('disabled', false);
		
		else 
			$('.btnCard').removeClass('btnCardEnable').addClass('btnCardDisable').attr('disabled', 'disabled');	

	});


	// function monitorUserEvents() {
	    $(".btnDefault").click(function () {
	        var cartQuantity = parseInt($(this).parent().find("input.inputQuant-Lista").val());
	        var skuid = $(this).parent().find("input.idSku").val();

	        if ($(this).hasClass("btnMore")) {
	            cartQuantity += 1;
	            $(this).parent().parent().find("span.iconeEstoque").removeClass("iconErro");
	        }
	        else if ($(this).hasClass("btnLess")) {
	            if (cartQuantity > 0)
	                cartQuantity -= 1;
	            if (cartQuantity === 0)
	                $(this).parent().parent().find("span.iconeEstoque").addClass("iconErro");
	        }
	        $(this).parent().find("input.inputQuant-Lista").val(cartQuantity);
	        updateQuantity(skuid, cartQuantity);
	    });

	    $(".inputQuant-Lista").change(function () {
	        var cartQuantity = parseInt($(this).val());
	        var skuid = $(this).parent().find("input.idSku").val();

	        if (cartQuantity === 0)
	            $(this).parent().parent().find("span.iconeEstoque").addClass("iconErro");
	        else
	            $(this).parent().parent().find("span.iconeEstoque").removeClass("iconErro");
	        updateQuantity(skuid, cartQuantity);
	    });
	    $("#btnVitrine").click(function () {
	        ga(trackerName + ".send", "event", {
	            eventCategory: "BuyList",
	            eventAction: "Buy",
	            eventLabel: className
	        });
	    });
	// }


















	

});




