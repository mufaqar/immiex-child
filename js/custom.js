jQuery(document).ready(function($) {
    var stickyForm = $('#sticky-form');  // The form we want to make sticky
    var sidebarForm = $('.sidebar-form'); // The parent container for the form
    var stickyTop = stickyForm.offset().top; // Get the form's initial top offset

    $(window).scroll(function() {
        var scrollTop = $(window).scrollTop(); // Get the current scroll position

        // Check if we've scrolled past the sticky form's initial position
        if (scrollTop >= stickyTop) {
            stickyForm.addClass('sticky-active').css({
                'width': sidebarForm.width(), // Maintain width
            });
        } else {
            stickyForm.removeClass('sticky-active');
        }
    });

    // Adjust the form's width when the window is resized
    $(window).resize(function() {
        if (stickyForm.hasClass('sticky-active')) {
            stickyForm.css('width', sidebarForm.width());
        }
    });
});
