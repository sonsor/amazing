

AddEvent(window, 'load', function () {
    html_scrollTop = html.scrollTop || body.scrollTop;

    HeaderCustomize();
});

AddEvent(window, 'scroll', function () {
    if (!html ||
        !body ||
        !header) {
        html = document.documentElement;
        body = document.getElementsByTagName('body')[0];
        header = document.getElementById('header');
    }
    html_scrollTop = html.scrollTop || body.scrollTop;

    HeaderCustomize();
});

AddEvent(window, 'resize', function () {
    html_scrollTop = html.scrollTop || body.scrollTop;


});

function HeaderCustomize() {
    if (html_scrollTop > HEADER_CUSTOMIZE_LENGTH || body.scrollTop > HEADER_CUSTOMIZE_LENGTH) {
        if (header.className != 'scrolled') {
            header.className = 'scrolled';
        }
    } else {
        if (header.className != '') {
            header.className = '';
        }
    }
}
function GetElementOffset(element) {
    var offset = {
        top: 0
        , left: 0
    };

    while (element) {
        offset.top += element.offsetTop;
        offset.left += element.offsetLeft;
        element = element.offsetParent;
    }

    return offset;
}

var Scroll = {
    // left: 37, up: 38, right: 39, down: 40,
    // spacebar: 32, pageup: 33, pagedown: 34, end: 35, home: 36
    keys: [32, 33, 34, 35, 36, 37, 38, 39, 40]
    , preventDefault: function (event) {
        event = event || window.event;
        if (event.preventDefault) {
            event.preventDefault();
        } else if (event.getPreventDefault) {
            event.getPreventDefault();
        } else {
            event.defaultPrevented;
        }
        event.returnValue = false;
    }
    , preventKeys: function (event) {
        if (this.keys.indexOf(event.keyCode) > -1) {
            this.preventDefault(event);
            return false;
        }
    }
    , disable: function () {
        if (window.addEventListener) // older FF
            window.addEventListener('DOMMouseScroll', this.preventDefault, false);
        window.onwheel = this.preventDefault; // modern standard
        window.onmousewheel = document.onmousewheel = this.preventDefault; // older browsers, IE
        window.ontouchmove = this.preventDefault; // mobile
        document.onkeydown = this.preventKeys;
    }
    , enable: function () {
        if (window.removeEventListener)
            window.removeEventListener('DOMMouseScroll', this.preventDefault, false);
        window.onmousewheel = document.onmousewheel = null;
        window.onwheel = null;
        window.ontouchmove = null;
        document.onkeydown = null;
    }
    , delay: function (duration) {
        this.disable();
        setTimeout(function () {
            Scroll.enable();
        }, duration);
    }
}


// Get Elements
var html = null;
var body = null;
var header = null;
var content = null;
var footer = null;
// Customizing Constants
var HEADER_CUSTOMIZE_LENGTH = 50;
var MENU_COLLAPSED = 950;

// Not initialized variables
var window_height = null;
var window_width = null;
var html_scrollTop = null;

function AddEvent(element, event_name, event_handler) {
    if (event_name == 'ready') {
        if (document.addEventListener) {
            document.addEventListener("DOMContentLoaded", event_handler, false);
        } else if (document.attachEvent) {
            document.attachEvent("onreadystatechange", function () {
                if (document.readyState === "complete") {
                    event_handler();
                }
            });
        }
    } else {
        if (element.addEventListener) {
            element.addEventListener(event_name, event_handler, false);
        } else if (element.attachEvent) {
            element.attachEvent('on' + event_name, event_handler);
        }
    }
}

// Events Base Template
AddEvent(document, 'ready', function () {
    html = document.documentElement;
    body = document.getElementsByTagName('body')[0];
    header = document.getElementById('header');
    content = document.getElementById('content');
    footer = document.getElementById('footer');


    html_scrollTop = html.scrollTop || body.scrollTop;
});

AddEvent(window, 'load', function () {
    html_scrollTop = html.scrollTop || body.scrollTop;

    HeaderCustomize();
});

AddEvent(window, 'scroll', function () {
    if (!html ||
        !body ||
        !header) {
        html = document.documentElement;
        body = document.getElementsByTagName('body')[0];
        header = document.getElementById('header');
    }
    html_scrollTop = html.scrollTop || body.scrollTop;

    HeaderCustomize();

});
function HeaderCustomize() {
    if (html_scrollTop > HEADER_CUSTOMIZE_LENGTH || body.scrollTop > HEADER_CUSTOMIZE_LENGTH) {
        if (header.className != 'scrolled') {
            header.className = 'scrolled';
        }
    } else {
        if (header.className != '') {
            header.className = '';
        }
    }
}


function GetElementOffset(element) {
    var offset = {
        top: 0
        , left: 0
    };

    while (element) {
        offset.top += element.offsetTop;
        offset.left += element.offsetLeft;
        element = element.offsetParent;
    }

    return offset;
}
var Scroll = {
    keys: [32, 33, 34, 35, 36, 37, 38, 39, 40]
    , preventDefault: function (event) {
        event = event || window.event;
        if (event.preventDefault) {
            event.preventDefault();
        } else if (event.getPreventDefault) {
            event.getPreventDefault();
        } else {
            event.defaultPrevented;
        }
        event.returnValue = false;
    }
    , preventKeys: function (event) {
        if (this.keys.indexOf(event.keyCode) > -1) {
            this.preventDefault(event);
            return false;
        }
    }
    , disable: function () {
        if (window.addEventListener) // older FF
            window.addEventListener('DOMMouseScroll', this.preventDefault, false);
        window.onwheel = this.preventDefault; // modern standard
        window.onmousewheel = document.onmousewheel = this.preventDefault; // older browsers, IE
        window.ontouchmove = this.preventDefault; // mobile
        document.onkeydown = this.preventKeys;
    }
    , enable: function () {
        if (window.removeEventListener)
            window.removeEventListener('DOMMouseScroll', this.preventDefault, false);
        window.onmousewheel = document.onmousewheel = null;
        window.onwheel = null;
        window.ontouchmove = null;
        document.onkeydown = null;
    }
    , delay: function (duration) {
        this.disable();
        setTimeout(function () {
            Scroll.enable();
        }, duration);
    }
}

// Get Elements
var fixed_elements = document.getElementsByTagName('address');
var win_changes = document.getElementById('win_changes');
var modal_window = document.getElementById('modal-window');

// Customizing Constants
var COLUMN_WIDTH = 250;
var SCROLL_TABLE_OFFSET_SHOW_BUTTONS = 265;
var OFFSET_TOP_THE_TABLE = 25; //that the price was not displayed 2 times


var table_content_position = {};
var pricing = null;
var table_content = null;
var resizeTimer;

var elemYL = document.getElementById("yellow-label");

// Events On Load
AddEvent(document, 'ready', function () {

    SetDefaultOptions();
    SetTableContentPosition();
});

// Events On Scroll
AddEvent(window, 'scroll', function () {
    html_scrollTop = html.scrollTop || body.scrollTop;


    HeaderCustomize();
    ShowScrollButtons();
});

/**
 * Set params on chenge radio type OS
 */
function SetDefaultOptions() {
    var os = document.getElementById('input-switch-pricing').checked ? 'pricing' : 'x-code';
    pricing = document.getElementById(os + '-pricing');
    table_content = document.getElementById(os + '-pricing-column-content');

    // Set Max table content width
    table_content.style.maxWidth = (table_content.children.length - 1) * COLUMN_WIDTH + 'px';

    table_content_position = GetElementOffset(pricing);
}

function SetTableContentPosition(vector) {
    var max_offset = table_content.children.length - Math.round(table_content.clientWidth / COLUMN_WIDTH) - 1;
    var current_offset = table_content.className.replace('offset-', '') * 1;

    if (max_offset < 0) {
        max_offset = 0;
    }

    if (vector == 'right') {
        current_offset++;
        if (current_offset > max_offset) {
            current_offset = max_offset;
        }
    } else if (vector == 'left') {
        current_offset--;
        if (current_offset < 0) {
            current_offset = 0;
        }
    } else if (current_offset > max_offset) {
        current_offset = max_offset;
    }

    table_content.className = 'offset-' + current_offset;

    ShowScrollButtons();
}

/**
 * Hide all popups androiad
 */
function ShowScrollButtons() {
    if (table_content === null) {
        SetDefaultOptions();
    }

    var left_arrow = false;
    var right_arrow = false;
    var max_offset = table_content.children.length - Math.round(table_content.clientWidth / COLUMN_WIDTH) - 1;
    var current_offset = table_content.className.replace('offset-', '') * 1;

    if ((table_content_position.top - header.clientHeight + OFFSET_TOP_THE_TABLE) >= html_scrollTop) {
        if (content.className.indexOf('show-fixed-arrows') == -1) {
            content.className += ' show-fixed-arrows';
        }
        if (content.className.indexOf('show-fixed-all') > -1) {
            content.className = content.className.replace('show-fixed-all', '').trim();
        }
        for (var index = 0; index < fixed_elements.length; index++) {
            fixed_elements[index].style.top = '0px';
        }
    } else if ((table_content_position.top - header.clientHeight) < html_scrollTop &&
        (table_content_position.top + table_content.clientHeight - SCROLL_TABLE_OFFSET_SHOW_BUTTONS) > html_scrollTop) {
        if (content.className.indexOf('show-fixed-all') == -1) {
            content.className += ' show-fixed-all';
        }
        if (content.className.indexOf('show-fixed-arrows') > -1) {
            content.className = content.className.replace('show-fixed-arrows', '').trim();
        }
        for (var index = 0; index < fixed_elements.length; index++) {
            fixed_elements[index].style.top = html_scrollTop - table_content_position.top + header.clientHeight + 'px';
        }
    } else {
        if (content.className.indexOf('show-fixed-arrows') > -1) {
            content.className = content.className.replace('show-fixed-arrows', '').trim();
        }
        if (content.className.indexOf('show-fixed-all') > -1) {
            content.className = content.className.replace('show-fixed-all', '').trim();
        }
    }

    if (max_offset == 0) {
        if (content.className.indexOf('arrow-left') > -1 ||
            content.className.indexOf('arrow-right') > -1) {
            content.className = content.className.replace('arrow-left', '').replace('arrow-right', '').trim();
        }

        return;
    }

    if (current_offset == max_offset) {
        if (content.className.indexOf('arrow-left') > -1) {
            content.className = content.className.replace('arrow-left', '').trim();
        }
    } else {
        if (content.className.indexOf('arrow-left') < 0) {
            content.className += ' arrow-left';
        }
    }

    if (current_offset == 0) {
        if (content.className.indexOf('arrow-right') > -1) {
            content.className = content.className.replace('arrow-right', '').trim();
        }
    } else {
        if (content.className.indexOf('arrow-right') < 0) {
            content.className += ' arrow-right';
        }
    }
}




