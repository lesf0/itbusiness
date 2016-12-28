jQuery(document).ready(function($){
	var doc = $(document);

	var menu = $('.menu-container');
	var menu_offset = menu.parent().offset().top;
	var menu_fixed = false;

	var s = function(){
		var scrollTop = doc.scrollTop();

		if(scrollTop > menu_offset && !menu_fixed){
			menu.addClass('fixed');
			menu_fixed = true;
		}else if(scrollTop <= menu_offset && menu_fixed){
			menu.removeClass('fixed');
			menu_fixed = false;
		}
	}

	var r = function(){
		menu_offset = menu.parent().offset().top;
		s();
	}
	r();
	$(window).resize(r);

	doc.scroll(s);
});