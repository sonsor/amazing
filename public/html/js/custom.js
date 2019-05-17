(function ($) {
    //"use strict";
    //- fix navbar on scrool
    jQuery(document).ready(function ($) {
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
        $(function () {
            var logo = $(".logo"); $(window).scroll(function () {
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

            });
        });

        //password
        $('#password').focus(function () {
            $('.password').css('height', '10px')
            setTimeout(function () {
                $('.password').css('opacity', '1')
            }, 350)
        });
        $('#password').blur(function () {
            $('.password').css('opacity', '0')
            setTimeout(function () {
                $('.password').css('height', '0px')
            }, 350)
        });
        $('#rePassword').focus(function () {
            $('.rePassword').css('height', '10px')
            setTimeout(function () {
                $('.rePassword').css('opacity', '1')
            }, 350)
        });
        $('#rePassword').blur(function () {
            $('.rePassword').css('opacity', '0')
            setTimeout(function () {
                $('.rePassword').css('height', '0px')
            }, 350)
        });
        //email address
        $('#email').focus(function () {
            $('.email').css('height', '10px')
            setTimeout(function () {
                $('.email').css('opacity', '1')
            }, 350)
        });
        $('#email').blur(function () {
            $('.email').css('opacity', '0')
            setTimeout(function () {
                $('.email').css('height', '0px')
            }, 350)
        });
        // user Name
        $('#userName').focus(function () {
            $('.userName').css('height', '10px')
            setTimeout(function () {
                $('.userName').css('opacity', '1')
            }, 350)
        });
        $('#userName').blur(function () {
            $('.userName').css('opacity', '0')
            setTimeout(function () {
                $('.userName').css('height', '0px')
            }, 350)
        });
        // Phone Number
        $('#phoneNumber').focus(function () {
            $('.phoneNumber').css('height', '10px')
            setTimeout(function () {
                $('.phoneNumber').css('opacity', '1')
            }, 350)
        });
        $('#phoneNumber').blur(function () {
            $('.phoneNumber').css('opacity', '0')
            setTimeout(function () {
                $('.phoneNumber').css('height', '0px')
            }, 350)
        });
        // country
        $('#country').focus(function () {
            $('.country').css('height', '10px')
            setTimeout(function () {
                $('.country').css('opacity', '1')
            }, 350)
        });
        $('#country').blur(function () {
            $('.country').css('opacity', '0')
            setTimeout(function () {
                $('.country').css('height', '0px')
            }, 350)
        });
         // city
        $('#city').focus(function () {
            $('.city').css('height', '10px')
            setTimeout(function () {
                $('.city').css('opacity', '1')
            }, 350)
        });
        $('#city').blur(function () {
            $('.city').css('opacity', '0')
            setTimeout(function () {
                $('.city').css('height', '0px')
            }, 350)
        });
         // address
        $('#address').focus(function () {
            $('.address').css('height', '10px')
            setTimeout(function () {
                $('.address').css('opacity', '1')
            }, 350)
        });
        $('#address').blur(function () {
            $('.address').css('opacity', '0')
            setTimeout(function () {
                $('.address').css('height', '0px')
            }, 350)
        });
        ////////////////////////////////// // logint form
        // login user Name
        $('#loginUserName').focus(function () {
            $('.loginUserName').css('height', '10px')
            setTimeout(function () {
                $('.loginUserName').css('opacity', '1')
            }, 350)
        });
        $('#loginUserName').blur(function () {
            $('.loginUserName').css('opacity', '0')
            setTimeout(function () {
                $('.loginUserName').css('height', '0px')
            }, 350)
        });
        // login user Name
        $('#loginPassword').focus(function () {
            $('.loginPassword').css('height', '10px')
            setTimeout(function () {
                $('.loginPassword').css('opacity', '1')
            }, 350)
        });
        $('#loginPassword').blur(function () {
            $('.loginPassword').css('opacity', '0')
            setTimeout(function () {
                $('.loginPassword').css('height', '0px')
            }, 350)
        });

        ////////////////////////////////// // contact form
         // user name
        $('#contactUsername').focus(function () {
            $('.contactUsername').css('height', '10px')
            setTimeout(function () {
                $('.contactUsername').css('opacity', '1')
            }, 350)
        });
        $('#contactUsername').blur(function () {
            $('.contactUsername').css('opacity', '0')
            setTimeout(function () {
                $('.contactUsername').css('height', '0px')
            }, 350)
        });
        // email address
        $('#contactEmail').focus(function () {
            $('.contactEmail').css('height', '10px')
            setTimeout(function () {
                $('.contactEmail').css('opacity', '1')
            }, 350)
        });
        $('#contactEmail').blur(function () {
            $('.contactEmail').css('opacity', '0')
            setTimeout(function () {
                $('.contactEmail').css('height', '0px')
            }, 350)
        });

        // Business Name
        $('#ContactBusinessName').focus(function () {
            $('.ContactBusinessName').css('height', '10px')
            setTimeout(function () {
                $('.ContactBusinessName').css('opacity', '1')
            }, 350)
        });
        $('#ContactBusinessName').blur(function () {
            $('.ContactBusinessName').css('opacity', '0')
            setTimeout(function () {
                $('.ContactBusinessName').css('height', '0px')
            }, 350)
        });

        // Business Name
        $('#contactPhoneNumber').focus(function () {
            $('.contactPhoneNumber').css('height', '10px')
            setTimeout(function () {
                $('.contactPhoneNumber').css('opacity', '1')
            }, 350)
        });
        $('#contactPhoneNumber').blur(function () {
            $('.contactPhoneNumber').css('opacity', '0')
            setTimeout(function () {
                $('.contactPhoneNumber').css('height', '0px')
            }, 350)
        });

        // Business Name
        $('#contactDescription').focus(function () {
            $('.contactDescription').css('height', '10px')
            setTimeout(function () {
                $('.contactDescription').css('opacity', '1')
            }, 350)
        });
        $('#contactDescription').blur(function () {
            $('.contactDescription').css('opacity', '0')
            setTimeout(function () {
                $('.contactDescription').css('height', '0px')
            }, 350)
        });

    });
        
    // color picker
    jQuery('#sky').click(function () {       
        jQuery('.collection').find('.icon-box').removeClass('green black gray red').addClass('sky');
    });
    jQuery('#gray').click(function () {
        jQuery('.collection').find('.icon-box').removeClass('sky green black red').addClass('gray');
    });
    jQuery('#black').click(function () {
        jQuery('.collection').find('.icon-box').removeClass('gray sky green red').addClass('black');
    });
    jQuery('#green').click(function () {
        jQuery('.collection').find('.icon-box').removeClass('gray sky black red').addClass('green');
    });
    jQuery('#red').click(function () {
        jQuery('.collection').find('.icon-box').removeClass('gray sky black green').addClass('red');
    });
    // /color picker

      //select payment mathod
    //$(document).ready(function () { $('.transaction-content').addClass('active'); });
    $("a.paymentType").click(function () {
        $("a.paymentType").removeClass("active");
        $(this).addClass("active");
    });

     // scrollup
    $(window).on("scroll", function () {
        if ($(this).scrollTop() > 250) {
            $('.scrollup').fadeIn();
        } else {
            $('.scrollup').fadeOut();
        }
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
    document.getElementById("copyButton").addEventListener("click", function() {
        copyToClipboardMsg(document.getElementById("copyTarget"), "msg");
    });
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














































