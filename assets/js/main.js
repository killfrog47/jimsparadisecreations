$(function(){
	var mobilequotes = $('.mobile-quotes');
	var newIndex = 0;

	$("input#phoneNumber").numeric();

	if(mobilequotes.is(':visible')){
		setTimeout(function(){
			slider
		}, 6000);
		// console.log('its there')
	
		// console.log($('.quote-block-mobile').length - 1);


		var slider = setInterval(function(){
			mobilequotes.find('.quote-block-mobile.active').animate({
				marginLeft: "-800px"}, 
				750, 
				function(){
					
					
					$(this).removeClass('active');

					// console.log(newIndex);
					if (newIndex >= $('.quote-block-mobile').length - 1) {
						newIndex = 0;
					}else{
						newIndex++;
					}

					$('.quote-block-mobile').eq(newIndex).addClass('active').css('margin-left', '800px').animate({marginLeft: "0px"}, 750);
				})
		}, 6000);
	}
	$('[placeholder]').focus(function() {
		var input = $(this);
		if (input.val() == input.attr('placeholder')) {
			input.val('');
			input.removeClass('placeholder');
		}
	}).blur(function() {
		var input = $(this);
		if (input.val() == '' || input.val() == input.attr('placeholder')) {
			input.addClass('placeholder');
			input.val(input.attr('placeholder'));
		}
	}).blur().parents('form').submit(function() {
		$(this).find('[placeholder]').each(function() {
			var input = $(this);
			if (input.val() == input.attr('placeholder')) {
				input.val('');
			}
		})
	});
	var headerHeight = $('#header').height();
	// var hash = '#' + window.location.hash.substr(1).replace('/','');
	// console.log(hash);
	// if(hash.length > 1){
	// 	$("html, body").animate({ scrollTop: $(hash)}, headerHeight);
	// }
	$('#contact-us-btn').on('click', function(event) {
		$("html, body").animate({ scrollTop: $($(this).attr('href').replace('/','')).offset().top });
	});

	//mobile nav control
	$('.mobile-hamburger').on('click', function(event) {
		event.preventDefault();
		if ($(this).hasClass('active')) {
			$(this).removeClass('active');
			$('.mobile-nav').finish().slideToggle(250);
		}else{
			$(this).addClass('active');
			$('.mobile-nav').finish().slideToggle(250);
		}
	});
});