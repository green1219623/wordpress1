// drawer
jQuery('.menu').on('click', function () {
	jQuery('.menu__line').toggleClass('active');
	jQuery('.gnav').toggleClass('active');
	jQuery('.bg-ground').toggleClass('active');

});

// top button
jQuery(function($) {
    var topBtn = $('.top-btn');
    topBtn.hide();

    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            topBtn.fadeIn();
        } else {
            topBtn.fadeOut();
        }
	});
	
    topBtn.click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 500);
        return false;
    });
});