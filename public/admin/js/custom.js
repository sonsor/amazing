(function ($) {

    // side menu
    $('#menu-action').click(function () {
        $('.sidebar').toggleClass('active');
        $('.main').toggleClass('active');
        $(this).toggleClass('active');

        if ($('.sidebar').hasClass('active')) {
            $(this).find('i').addClass('fa-close');
            $(this).find('i').removeClass('fa-bars');
        } else {
            $(this).find('i').addClass('fa-bars');
            $(this).find('i').removeClass('fa-close');
        }
        $('#menu-action').hover(function () {
            $('.sidebar').toggleClass('hovered');
        });
    });

    $('[data-toggle="tooltip"]').tooltip();

    // active deactive icon
    $("i.fa-eye").on("click", function () {
        var $this = $(this);
        if ($this.hasClass("fa-eye")) {
            $this.removeClass("fa-eye");
            $this.addClass("fa-eye-slash");
        } else {
            $this.hasClass("fa-eye-slash");
            $this.removeClass("fa-eye-slash");
            $this.addClass("fa-eye");
        }
    });
    // on click change star
    $(".star i").on("click", function () {
        var $this = $(this);
        if ($this.hasClass("fa-star")) {
            $this.removeClass("fa-star");
            $this.addClass("fa-star-o");
        } else {
            $this.hasClass("fa-star-o");
            $this.removeClass("fa-star-o");
            $this.addClass("fa-star");

        }
    });
})(jQuery)




