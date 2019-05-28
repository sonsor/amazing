
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
(function ($) {
    //tooltip
    jQuery(document).ready(function ($) {
        $('[data-toggle="tooltip"]').tooltip();
    });
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
    // data table
    $(document).ready(function () { 
        $('#all-fonts, #premim-fonts, #premim-fonts, #free-fonts, #blockad-fonts, #active-fonts, #allIcons, #premimIcons, #freeIcons, #table_id')
            .DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": true,
            });
        
    });




}(jQuery))




