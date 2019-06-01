(function ($) {

    var csrf = $('meta[name="csrf-token"]').attr('content');
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': csrf
        }
    });
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

    $("body").on('click', '.well ul li label', function(e) {
        console.log($(this));
        $(this).closest('li').toggleClass('active');

        $(this).closest('li').find('span').toggleClass('glyphicon-unchecked');
        $(this).closest('li').find('span').toggleClass('glyphicon-check');
    });

    $("body").on('click', '.js-remove', function(e) {
        e.preventDefault();
        confirm($(this).attr('href'));
    });

    function confirm(url) {
        BootstrapDialog.show({
            title: 'Warning',
            message: 'Are you sure you want to delete /',
            buttons: [{
                label: 'Yes',
                action: function(dialog){
                    remove(url);
                    dialog.close();
                }
            }, {
                label: 'No, Take me back',
                cssClass: 'btn-primary',
                action: function(dialogItselfdialog){
                    dialog.close();
                }
            }]
        });
    }

    function remove(url) {
        $.ajax({
            method: 'DELETE',
            url: url,
            success: success
        });
    }

    function success() {
        BootstrapDialog.success('Successfully Deleted');
        window.location.reload();
    }


})(jQuery)