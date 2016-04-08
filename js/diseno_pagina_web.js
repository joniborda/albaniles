$(document).on('mouseover', '.porfolio_img, .porfolio_box>a>span', function(event){
	var this_ = $(this).closest('a').find('.porfolio_img');
	this_.animate({
		'opacity': '0.4'	
	},
	500);
	this_.parent().find('span').removeClass('hide');
});
$(document).on('mouseleave', '.porfolio_img', function(event){
	$(this).animate({
		'opacity': '1'
	},
	300);
	$(this).parent().find('span').addClass('hide');
});

