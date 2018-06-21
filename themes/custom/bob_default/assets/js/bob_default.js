jQuery(document).ready(function() {
	// Random color //
	var color_value = Math.floor((Math.random() * 4));
	console.log('color_value = ' + color_value);

	var color_classList = [
		'ultra_violet',
		'greenery',
		'rose_quartz',
		'serenity'
	];

	jQuery('body').addClass(color_classList[color_value]);

	// Header //
	jQuery('#toggler_for_sidebar').find('.btn_toggle').click(function(e) {
		if(jQuery(this).hasClass('closed')) {
			console.log('Open menu');
			jQuery(this).removeClass('closed');
			jQuery(this).addClass('opened');
			jQuery('#main_container').removeClass('closed');
			jQuery('#main_container').addClass('opened');
		}
		else if(jQuery(this).hasClass('opened')) {
			console.log('Close menu');
			jQuery(this).removeClass('opened');
			jQuery(this).addClass('closed');
			jQuery('#main_container').removeClass('opened');
			jQuery('#main_container').addClass('closed');
		}
	});
});
