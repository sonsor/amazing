var cta1 = $(".step1CTA");
var cta2 = $(".step2CTA");
var step1 = $(".step1 .stepDetails");
var step2 = $(".step2 .stepDetails");
var step3 = $(".step3 .stepDetails");

// First Cta click ----------------

cta1.click(function() {
  
  

  
  
  // Details Scroll

  var step2DetPrice = anime({
    targets: ".details",
    translateY: "112px",
    easing: "easeOutExpo",
    duration: "680",
    delay: "380"
  });

  // Details Plan Price Show

  var step2Details = anime({
    targets: ".detPrice",
    height: "114px",
    opacity: "1",
    easing: "easeOutExpo",
    duration: "680",
    delay: "480"
  });

  // Step 2 Container Animation

  var step2Show = anime({
    targets: ".step2 .stepDetails",
    opacity: 1,
    height: "343px",
    easing: "easeOutExpo",
    duration: "680",
    delay: "480"
  });

  $(".step2 .stepCount").addClass("active");

  // Step 1 Container Animation

  var step1Hide = anime({
    targets: ".step1 .stepDetails",
    height: "0",
    easing: "easeOutExpo",
    duration: "680"
  });

  $(".step1 .stepCount").removeClass("active");
  $(".step1 .stepCount").addClass("done");

  // Header Work

  var step1Hide = anime({
    targets: ".stepHeader1 h3 p",
    opacity: 0,
    translateY: ["0", "-20px"],
    easing: "easeOutExpo",
    duration: "320",
    delay: "0"
  });

  var step1Hide = anime({
    targets: ".step1 .stepHeader h3 span",
    opacity: 1,
    translateY: ["20px", "0"],
    easing: "easeOutExpo",
    duration: "320",
    delay: "0"
  });

  var step1HeaderShow = anime({
    targets: ".step2 .stepDetails",
    opacity: 1,
    easing: "easeOutExpo",
    duration: "1200",
    delay: "880"
  });

  // Scrolling

  $("html").scrollTo({ top: "166px", left: "0" }, 680);
});

// Change click -----------------------

$(".step1Change").click(function() {
  // Switch Panels

  var hr = anime({
    targets: ".stuff",
    opacity: 1,
    easing: "easeOutExpo",
    duration: "340",
    delay: 480
  });

  var hr = anime({
    targets: ".summaryWrapp",
    opacity: 0,
    easing: "easeOutExpo",
    duration: "340",
    delay: 480
  });

  $(".stuff").delay(0).queue(function(next) {
    $(".stuff").css("display", "flex");
    next();
  });

  $(".summaryWrapp").delay(680).queue(function(next) {
    $(".summaryWrapp").css("display", "none");
    next();
  });

  var step2DetPrice = anime({
    targets: ".detPrice",
    height: "0",
    opacity: "0",
    easing: "easeOutExpo",
    duration: "680",
    delay: "380"
  });

  var hr = anime({
    targets: ".line",
    height: ["90%", "90%"],
    easing: "easeOutExpo",
    duration: "680",
    delay: 330
  });

  // Details Scroll

  var step2Details = anime({
    targets: ".details",
    translateY: "0px",
    easing: "easeOutExpo",
    duration: "680",
    delay: "480"
  });

  // Step 3 Container Animation

  var step2Hide = anime({
    targets: ".step3 .stepDetails",
    height: "0",
    easing: "easeOutExpo",
    duration: "680"
  });

  // Step 2 Animation

  var step2Hide = anime({
    targets: ".step2 .stepDetails",
    height: "0",
    easing: "easeOutExpo",
    duration: "680"
  });

  $(".step2 .stepCount").removeClass("active");
  $(".step3 .stepCount").removeClass("active");
  $(".step1 .stepCount").removeClass("done");
  $(".step2 .stepCount").removeClass("done");

  // Step 1 Animation

  var step1Hide = anime({
    targets: ".step1 .stepDetails",
    opacity: 1,
    height: "572px",
    easing: "easeOutExpo",
    duration: "680",
    delay: "480"
  });

  // Header Work

  var step1Show = anime({
    targets: ".stepHeader1 h3 p",
    opacity: 1,
    translateY: ["-20px", "0"],
    easing: "easeOutExpo",
    duration: "320",
    delay: "0"
  });

  var step1Hide = anime({
    targets: ".step1 .stepHeader h3 span",
    opacity: 0,
    translateY: ["0", "20px"],
    easing: "easeOutExpo",
    duration: "320",
    delay: "0"
  });

  /// Step 2 - Header Work

  // Header Work

  var step1Show = anime({
    targets: ".stepHeader2 h3 p",
    opacity: 1,
    translateY: ["-20px", "0"],
    easing: "easeOutExpo",
    duration: "320",
    delay: "0"
  });

  var step1Hide = anime({
    targets: ".step2 .stepHeader h3 span",
    opacity: 0,
    translateY: ["0", "20px"],
    easing: "easeOutExpo",
    duration: "320",
    delay: "0"
  });

  $(".step1 .stepCount").addClass("active");

  // Scrolling

  $("html").scrollTo({ top: "166px", left: "0" }, 680);
});

// --------------------------------

// Step #2 Cta click

cta2.click(function() {
  // Switch Panels

  var hr = anime({
    targets: ".stuff",
    opacity: 0,
    easing: "easeOutExpo",
    duration: "340",
    delay: 480
  });

  var hr = anime({
    targets: ".summaryWrapp",
    opacity: 1,
    easing: "easeOutExpo",
    duration: "340",
    delay: 480
  });

  $(".stuff").delay(680).queue(function(next) {
    $(".stuff").css("display", "none");
    next();
  });

  $(".summaryWrapp").delay(0).queue(function(next) {
    $(".summaryWrapp").css("display", "flex");
    next();
  });

  // Line Animation

  var hr = anime({
    targets: ".line",
    height: ["90%", "32%"],
    easing: "easeOutExpo",
    duration: "680",
    delay: 270
  });

  // Details Scroll

  var step2Details = anime({
    targets: ".details",
    translateY: "230px",
    easing: "easeOutExpo",
    duration: "680",
    delay: "480"
  });

  // Step 3 Animation

  var step2Show = anime({
    targets: ".step3 .stepDetails",
    opacity: 1,
    height: ["0", "486px"],
    easing: "easeOutExpo",
    duration: "680",
    delay: "480"
  });

  $(".step3 .stepCount").addClass("active");
  $(".step2 .stepCount").addClass("done");

  // Step 2 Animation

  var step1Hide = anime({
    targets: ".step2 .stepDetails",
    height: "0",
    easing: "easeOutExpo",
    duration: "680"
  });

  // Header Work

  var step1Hide = anime({
    targets: ".stepHeader2 h3 p",
    opacity: 0,
    translateY: ["0", "-20px"],
    easing: "easeOutExpo",
    duration: "320",
    delay: "0"
  });

  var step1Hide = anime({
    targets: ".step2 .stepHeader h3 span",
    opacity: 1,
    translateY: ["20px", "0"],
    easing: "easeOutExpo",
    duration: "320",
    delay: "0"
  });

  var step1HeaderShow = anime({
    targets: ".step3 .stepDetails",
    opacity: 1,
    easing: "easeOutExpo",
    duration: "1200",
    delay: "880"
  });

  $(".step2 .stepCount").removeClass("active");

  // Scrolling

  $("html").scrollTo({ top: "280px", left: "0" }, 680);
});

// ---------------------

// Step #2 Change click

$(".step2Change").click(function() {
  // Switch Panels

  var hr = anime({
    targets: ".stuff",
    opacity: 1,
    easing: "easeOutExpo",
    duration: "680",
    delay: 480
  });

  var hr = anime({
    targets: ".summaryWrapp",
    opacity: 0,
    easing: "easeOutExpo",
    duration: "680",
    delay: 480
  });

  $(".stuff").delay(0).queue(function(next) {
    $(".stuff").css("display", "flex");
    next();
  });

  $(".summaryWrapp").delay(680).queue(function(next) {
    $(".summaryWrapp").css("display", "none");
    next();
  });

  //-------------------------

  var hr = anime({
    targets: ".line",
    height: ["85%", "85%"],
    easing: "easeOutExpo",
    duration: "680",
    delay: 330
  });

  // Details Scroll

  var step2Details = anime({
    targets: ".details",
    translateY: "112px",
    easing: "easeOutExpo",
    duration: "680",
    delay: "480"
  });

  // Step 2 Animation

  var step2Hide = anime({
    targets: ".step3 .stepDetails",
    height: ["230px", "0"],
    easing: "easeOutExpo",
    duration: "680"
  });

  $(".step3 .stepCount").removeClass("active");
  $(".step2 .stepCount").removeClass("done");

  // Step 1 Animation

  var step1Hide = anime({
    targets: ".step2 .stepDetails",
    opacity: 1,
    height: ["0", "458px"],
    easing: "easeOutExpo",
    duration: "680",
    delay: "480"
  });

  // Header Work

  var step1Show = anime({
    targets: ".stepHeader2 h3 p",
    opacity: 1,
    translateY: ["-20px", "0"],
    easing: "easeOutExpo",
    duration: "320",
    delay: "0"
  });

  var step1Hide = anime({
    targets: ".step2 .stepHeader h3 span",
    opacity: 0,
    translateY: ["0", "20px"],
    easing: "easeOutExpo",
    duration: "320",
    delay: "0"
  });

  $(".step2 .stepCount").addClass("active");

  // Scrolling

  $("html").scrollTo({ top: "166px", left: "0" }, 680);
});

/*
$(window).scroll(function(){
    if ($(window).scrollTop() >= $('.header').height()) {
         $(".details").addClass('fixed');

    }

  else {
     $(".details").removeClass('fixed');
  }
});

*/

// Step #2 Change click

$(".detHeader a").click(function() {
  $(".detPurchase").toggleClass("marg");
   $(".second").toggleClass("viewed");



  var detListHide = anime({
    targets: ".detHeader a svg",
    rotate: "+=180deg",
    opacity: 1,
    easing: "easeOutExpo",
    duration: "230"
  });
});



// Product Mapping




// Features Arrays -------------------

var f_Unlimited = ['1000+ Icons 400+ free & other Paid', 'for Single Project', 'EXTRA ICONS', 'INCLUDING YOUR LOGO*', '1000+ Icons 400+ free & other Paid', 'for six Project', 'EXTRA ICONS', 'INCLUDING YOUR LOGO', '.png Images', 'USE FOR COMMERCIAL & PERSONAL', 'Font Types (ttf, otf, eot, svg, woff)', 'Other files (CSS, SOSS, LES)', 'Psd', 'Ai', 'SVG', 'Eps', 'Sketch'];

// standard plan
var f_standard = ['1000+ Icons 400+ free & other Paid', 'for Single Project', 'EXTRA ICONS', '.png Images', 'USE FOR COMMERCIAL & PERSONAL', 'Font Types (ttf, otf, eot, svg, woff)', 'Other files (CSS, SOSS, LES)', 'Psd', 'Ai', 'SVG', 'Eps', 'Sketch'];
//free plan
var f_free = ['400+ icons', 'Unlimited Usage', 'Font Types (ttf, otf, eot, svg, woff)', 'Other files (CSS, SOSS, LES)', 'Psd', 'Ai', 'SVG', 'Eps', 'Sketch'];
// advance plan
var b_advance = ['1000+ Icons 400+ free & other Paid', 'for six Project', '.png Images', 'USE FOR COMMERCIAL & PERSONAL', 'Font Types (ttf, otf, eot, svg, woff)', 'Other files (CSS, SOSS, LES)', 'Psd', 'Ai', 'SVG', 'Eps', 'Sketch'];



// Benefits Arrays -------------------

var b_Unlimited = ['' ];





/// Initial Unlimited Load -----

var featureList = $('.features')
$.each(f_Unlimited, function(i) {
    var li = $('<li/>').appendTo(featureList);  
    var p = $('<p>').text(f_Unlimited[i]).appendTo(li);
});

var benefitsList = $('.benefits')
$.each(b_Unlimited, function(i) {
    var li = $('<li/>').appendTo(benefitsList);  
    var p = $('<p>').text(b_Unlimited[i]).appendTo(li);
});

/// -----------


/// free-plan Hover -----
$("#free-plan").hover(function () {
    $(".detTitle").html('free-plan');
    $(".tag").html('$ 0.00 Free download ');
    $(".benefits").show();
    $(".features li").empty();
    $.each(f_free, function (i) {
        var li = $('<li/>').appendTo(featureList);
        var p = $('<p>').text(f_free[i]).appendTo(li);
    });
});

/// standard Hover -----
$("#standard").hover(function () {
    $(".detTitle").html('standard');
    $(".tag").html('$39.99 for Single Project');
    $(".features li").empty();
    $(".benefits").show('Fast');
    $.each(f_standard, function (i) {
        var li = $('<li/>').appendTo(featureList);
        var p = $('<p>').text(f_standard[i]).appendTo(li);
    });
});

/// advance Hover -----
$("#advance").hover(function () {
    $(".detTitle").html("advance");
    $(".tag").html('$199.95 for 6 Projects');
    $(".features li").empty();
    $(".benefits li").empty();
    $(".benefits").show();
    //$.each(f_Unlimited, function (i) {
    //    var li = $('<li/>').appendTo(featureList);
    //    var p = $('<p>').text(f_Unlimited[i]).appendTo(li);
    //});
    $.each(b_advance, function (i) {
        // var li = $('<li/>').appendTo(benefitsList);
        var li = $('<li/>').appendTo(featureList);
        var p = $('<p>').text(b_advance[i]).appendTo(li);
    });
});


/// Unlimited Hover -----

$("#Unlimited").hover(function () {
    $(".detTitle").html("Premium" + "<span>Most Popular</span>");
    $(".tag").html('$199.99 for Unlimited Projects');
    $(".features li").empty();
    $(".benefits li").empty();
    $(".benefits").show();
    $.each(f_Unlimited, function (i) {
        var li = $('<li/>').appendTo(featureList);
        var p = $('<p>').text(f_Unlimited[i]).appendTo(li);
    });
    $.each(b_Unlimited, function (i) {
        var li = $('<li/>').appendTo(benefitsList);
        var p = $('<p>').text(b_Unlimited[i]).appendTo(li);
    });
});


// Cycle Switcher -------------------------------



$("#4Years").hover(function() {
     $(".detHeader div p ").html("3 Years Subscription");
  $(".detPrice div p ").html("$360.00 <small>($10.00 × 36 months)</small><span class='priceSave'>Save 55%</span>");
  
   $(".benefits p").empty();
  
  $.each(b_Unlimited, function(i) {
  
    var li = $('<li/>').appendTo(benefitsList);  
    var p = $('<p>').text(b_Unlimited[i]).appendTo(li);

});
  
  
});

$("#3Years").hover(function() {
     $(".detHeader div p ").html("Subscription for 3 Years <p class='green'>+ Include your logo in font </p>");
  $(".detPrice div p ").html("$539.64 <small>($14.99 × 36 months)</small><span class='priceSave'>Save 7%</span>");
  
   $(".benefits p").empty();
  
  $.each(b_Unlimited, function(i) {
  
    var li = $('<li/>').appendTo(benefitsList);  
    var p = $('<p>').text(b_Unlimited[i]).appendTo(li);

});
  
  
});

$("#2Year").hover(function () {
     $(".detHeader div p ").html("Subscription for 2 Years");
  $(".detPrice div p ").html("$359.76 <small>($14.99 × 24 months)</small><span class='priceSave'>Save 7%</span>");
  
  $(".benefits p").empty();
  
  $.each(b_Unlimited, function(i) {  
    var li = $('<li/>').appendTo(benefitsList);  
    var p = $('<p>').text(b_Unlimited[i]).appendTo(li);
}); 
});

$("#1Year").mouseenter(function () {
    $(".detHeader div p ").html("Yearly Subscription");
     $(".detPrice div p ").html("$199.99 <small>/Year</small> <small>($16.66 × 12 months)<span style='opacity:0;' class='priceSave'>Save 0%</span>");
  $(".benefits li").remove();
    var p = $('</p>').text(" Monthly subscriptions do not include a free domain, premium apps and ad vouchers.").appendTo(".benefits");
});


/// Plans & Cycles Hover Logic -----
   
  $('#1year.planPrice button').addClass('active');

 var PlanBd = anime({ 
    targets: ['#Unlimited object' , '#1Year object'],  
    opacity: 1,
    easing: "easeOutExpo",
    duration: "230"
  });
 

$(".product").mouseenter(function() { 
   

  $('.product .planPrice button').removeClass('active');
  $(this).find('.planPrice button').addClass('active');
  
  var PlanBd = anime({
    targets: '.product object',
    opacity: 0, 
   
    easing: "easeOutExpo",
    duration: "230",
    
  });
  
  var PlanBd = anime({
    targets: this.querySelectorAll('object'),
    opacity: 1,
    easing: "easeOutExpo",
    duration: "230",

  });
  
});
 

$(".cycle").mouseenter(function() { 
   

  $('.cycle .planPrice button').removeClass('active');
  $(this).find('.planPrice button').addClass('active');
  
  var PlanBd = anime({
    targets: '.cycle object',
    opacity: 0, 
   
    
  });
  
  var PlanBd = anime({
    targets: this.querySelectorAll('object'),
    opacity: 1,

  });
  
});