$(document).ready(function() {
    "use strict";

    // Smooth Scroll
    $('body').on('click', '.page-scroll', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: ($($anchor.attr('href')).offset().top - 0)
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });

    jQuery(".accordion").find(".accordion-toggle").click(function() {
        jQuery(this).toggleClass("active-tab").find("span").toggleClass("icon-minus icon-plus");
        jQuery(this).next().toggleClass("open").slideToggle("fast")
    })

	jarallax(document.querySelectorAll('.jarallax'), {
		speed: 0.4
	});

});

(function ($) {
	$('.tab ul.tabs').addClass('active').find('> li:eq(0)').addClass('current');

	$('.tab ul.tabs li a').click(function (g) {
		var tab = $(this).closest('.tab'),
			index = $(this).closest('li').index();

		tab.find('ul.tabs > li').removeClass('current');
		$(this).closest('li').addClass('current');

		tab.find('.tab_content').find('div.tabs_item').not('div.tabs_item:eq(' + index + ')').slideUp();
		tab.find('.tab_content').find('div.tabs_item:eq(' + index + ')').slideDown();

		g.preventDefault();
	} );
})(jQuery);

$(document).ready(function() {
	$('.count').each(function () {
    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    }, {
        duration: 4000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
});

	$('.benefits').hover(function(){
		$('.fly-in-left').slideToggle("slow");
		$('.fly-in-right').slideToggle("slow");
	});
});
