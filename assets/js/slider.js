jQuery(document).ready(function($){
	new Swiper('#main_slider',{
		//autoplay: 10000,
		speed: 1000,
		loop: true,
		effect: 'coverflow',
		coverflow: {
            rotate: 50,
            stretch: 0,
            depth: 100,
            modifier: 1,
        },
        nextButton: '#main_slider_next',
		prevButton: '#main_slider_prev',
		pagination: '#main_slider_pagination',
		paginationClickable: true,
		paginationBulletRender: function(index,classname){
			return '<a href="#" class="'+classname+' inblock w-10 h-10 m-l-8 m-r-8 rounded bgBlue cBlue opac-100 trans-300"></a>';
		}
	});
});