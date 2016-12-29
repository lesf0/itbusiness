$(document).ready(function() {
	$('#certs_slider > div').magnificPopup({
		delegate: 'a',
		type: 'image',
		closeOnContentClick: false,
		closeBtnInside: false,
		mainClass: 'mfp-with-zoom mfp-img-mobile',
		image: {
			verticalFit: true,
			markup: '<div class="mfp-figure"><div class="mfp-close"></div><div class="mfp-img"></div></div>'
		},
		zoom: {
			enabled: true,
			duration: 300, // don't foget to change the duration also in CSS
			opener: function(element) {
				return element;
			}
		}	
	});
});