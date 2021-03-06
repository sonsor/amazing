(function ($) {
    //"use strict";
    //- fix navbar on scrool
    $(".embed-responsive iframe").addClass("embed-responsive-item");
    $(".carousel-inner .item:first-child").addClass("active");
    $('[data-toggle="tooltip"]').tooltip();

    $(document).on('scroll', function (e) {
        var scrollTop = $(document).scrollTop();
        if (scrollTop > $('nav').height()) {
            $('nav').removeClass('navbar-default').addClass('navbar-fixed-top')
        } else {
            $('nav').removeClass('navbar-fixed-top').addClass('navbar-default')
        }
    });

    //- change logo on scrool
    var logo = $(".logo");
    $(window).scroll(function () {
        var scroll = $(window).scrollTop();

        if (scroll >= 50) {
            if (!logo.hasClass("logo-active")) {
                logo.hide();
                logo.removeClass('logo').addClass("logo-active").fadeIn("slow");
            }
        } else {
            if (!logo.hasClass("logo")) {
                logo.hide();
                logo.removeClass("logo-active").addClass('logo').fadeIn("slow");
            }
        }

        scroll > 250 ? $('.scrollup').fadeIn(): $('.scrollup').fadeOut();
    });

    ////////////////////////////////// // contact form
     // user name
    $("#contact-form, #login-form, #register-form").find('input, textarea').on('focus', function() {
        $('.' + $(this).attr('id')).css('height', '10px')
        setTimeout(function () {
            $('.' + $(this).attr('id')).css('opacity', '1')
        }, 350)
    });


    // color picker
    $("body").on('click', '.icon-color-picker div', function () {
        $('.collection').find('.icon-box').removeClass('green sky black gray red');
        $('.collection').find('.icon-box').addClass($(this).attr('id'));
    });
    // /color picker

      //select payment mathod
    //$(document).ready(function () { $('.transaction-content').addClass('active'); });
    $("a.paymentType").click(function () {
        $("a.paymentType").removeClass("active");
        $(this).addClass("active");
    });

    $('.scrollup').on("click", function () {
        $("html, body").animate({
            scrollTop: 0
        }, 900);
        return false;
    });

    //- icon carousel
    var owl = $('.owl-carousel');
    owl.owlCarousel({
        items: 1,
        loop: true,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 3500,
        autoplayHoverPause: true,
        pagination : true,
        responsiveRefreshRate: 200,
        smartSpeed: 1000,
        navigation: true,
        nav:true, 
        navContainerClass: 'owl-buttons',
        dotsClass: 'owl-pagination',
        dotClass: 'owl-page',
        navClass: ['owl-prev svg', 'owl-next svg'],
        navText: ["<img src='./images/left.svg'>", "<img src='./images/right.svg'>"],
        //animateOut: 'fadeOut',
        // animateIn: 'fadeIn',
        responsive: { 0: { items: 1 }, 600: { items: 3 }, 1000: { items: 5 } },
    });
    $('.play').on('click', function () {
        owl.trigger('play.owl.autoplay', [500])
    })
    $('.stop').on('click', function () {
        owl.trigger('stop.owl.autoplay')
    })

      // click to copy
    $('#copyButton').click(function() {
        copyToClipboardMsg($('#copyTarget', 'msg'))
    })

    function copyToClipboardMsg(elem, msgElem) {
          var succeed = copyToClipboard(elem);
        var msg;
        if (!succeed) {
            msg = "Copy not supported or blocked.  Press Ctrl+c to copy."
        } else {
            msg = "Text copied to the clipboard."
        }
        if (typeof msgElem === "string") {
            msgElem = document.getElementById(msgElem);
        }
        msgElem.innerHTML = msg;
        setTimeout(function() {
            msgElem.innerHTML = "";
        }, 2000);
    }
    function copyToClipboard(elem) {
          // create hidden text element, if it doesn't already exist
        var targetId = "_hiddenCopyText_";
        var isInput = elem.tagName === "INPUT" || elem.tagName === "TEXTAREA";
        var origSelectionStart, origSelectionEnd;
        if (isInput) {
            // can just use the original source element for the selection and copy
            target = elem;
            origSelectionStart = elem.selectionStart;
            origSelectionEnd = elem.selectionEnd;
        } else {
            // must use a temporary form element for the selection and copy
            target = document.getElementById(targetId);
            if (!target) {
                var target = document.createElement("textarea");
                target.style.position = "absolute";
                target.style.left = "-9999px";
                target.style.top = "0";
                target.id = targetId;
                document.body.appendChild(target);
            }
            target.textContent = elem.textContent;
        }
        // select the content
        var currentFocus = document.activeElement;
        target.focus();
        target.setSelectionRange(0, target.value.length);
        
        // copy the selection
        var succeed;
        try {
              succeed = document.execCommand("copy");
        } catch(e) {
            succeed = false;
        }
        // restore original focus
        if (currentFocus && typeof currentFocus.focus === "function") {
            currentFocus.focus();
        }
        
        if (isInput) {
            // restore prior selection
            elem.setSelectionRange(origSelectionStart, origSelectionEnd);
        } else {
            // clear temporary content
            target.textContent = "";
        }
        return succeed;
    }

}(jQuery))