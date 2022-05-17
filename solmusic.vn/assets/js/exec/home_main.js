/* Loading */
$(window).load(function() {
  $(".spinner").delay(500).fadeOut();
  $("#mask").delay(500).fadeOut("slow");
  $("body").addClass("loaded");
});



/*----------------------------------------------
P L A Y E R   I N T R O
------------------------------------------------*/
$(function() {

  function loadAudio() {
    // Setup the player to autoplay the next track
    var a = audiojs.createAll({
      trackEnded: function() {
        var next = $('ol.playlist li.playing').next();
        if (!next.length) next = $('ol.playlist li').first();
        next.addClass('playing').siblings().removeClass('playing');
        audio.load($('a', next).attr('data-src'));
        //console.log("event next play click")
        audio.play();
      }
    });
    //console.log(a)
    // Load in the first track
    var audio = a[0];
    first = $('ol.playlist a').attr('data-src');
    $('ol.playlist li').first().addClass('playing');
    //console.log("load first", audio)
    audio.load(first);

    // Load in a track on click
    $('ol.playlist li').click(function(e) {
      e.preventDefault();
      $(this).addClass('playing').siblings().removeClass('playing');
      audio.load($('a', this).attr('data-src'));
      console.log("event play click")
      audio.play();
    });

    $('.nextprev .next').click(function(e) {
      e.preventDefault();
      var next = $('ol.playlist li.playing').next();
      if (!next.length) next = $('ol.playlist li').first();
      next.click();
    });
    $('.nextprev .prev').click(function(e) {
      var prev = $('ol.playlist li.playing').prev();
      if (!prev.length) prev = $('ol.playlist li').last();
      prev.click();
    });

    $('.btnloop').click(function(e) {
      if ($('audio').attr('loop')) {
        $('audio').removeAttr('loop');
        $(this).removeClass('active');
      } else {
        $('audio').attr('loop', 0);
        $(this).addClass('active');
      }
    });

    // /// Keyboard shortcuts
    // $(document).keydown(function(e) {
    //   var unicode = e.charCode ? e.charCode : e.keyCode;
    //      // right arrow
    //   if (unicode == 39) {
    //     var next = $('li.playing').next();
    //     if (!next.length) next = $('ol li').first();
    //     next.click();
    //     // back arrow
    //   } else if (unicode == 37) {
    //     var prev = $('li.playing').prev();
    //     if (!prev.length) prev = $('ol li').last();
    //     prev.click();
    //     // spacebar
    //   } else if (unicode == 32) {
    //     audio.playPause();
    //   }
    // })
  }

  if ($('.player').length>0 ) {
    //console.log("load player",$('.player').length)
    loadAudio();
  };

});

if ($('#DateCountdown').length>0 ) {
  $(window).resize(function(){
    $("#DateCountdown").TimeCircles().rebuild();
  });
  $("#DateCountdown").TimeCircles({
    "animation": "smooth",
    "bg_width": 0.5,
    "fg_width": 0.023333333333333334,
    "circle_bg_color": "#000000",
    "time": {
      "Days": {
        "text": "Days",
        "color": "#fff",
        "show": true
      },
      "Hours": {
        "text": "Hours",
        "color": "#fff",
        "show": true
      },
      "Minutes": {
        "text": "Minutes",
        "color": "#fff",
        "show": true
      },
      "Seconds": {
        "text": "Seconds",
        "color": "#fff",
        "show": true
      }
    }
  });
}


$(document).ready(function(){
   $("#box_popup_regist").hide();
   $("#box_popup_contact").hide();
  /*----------------------------------------------
  I N T R O  S L I D E R
  ------------------------------------------------*/
  $('#slides').superslides({
    hashchange: false,
    animation: 'fade',
    play: 10000,
    pagination: true
  });

  function slidertext() {
    $("#owl-main-text").owlCarousel({
      autoPlay: 10000,
      goToFirst: true,
      goToFirstSpeed: 2000,
      navigation: false,
      slideSpeed: 700,
      pagination: false,
      transitionStyle: "fadeUp",
      singleItem: true
    });
  }

  if ($('#owl-main-text').length>0 ) {
    slidertext();
  };
   
    /*var owl = $('#list-partner');
    owl.owlCarousel({items:6,loop:true,margin:15,autoplay:true,autoplayTimeout:2000,autoplayHoverPause:true,nav:true})
    $('.t-check-list-cooperation.owl-carousel .owl-prev').addClass('fa fa-chevron-circle-left');
    $('.t-check-list-cooperation.owl-carousel .owl-next').addClass('fa fa-chevron-circle-right');*/
    
    
$('.items').slick({
dots: true,
infinite: true,
speed: 2000,
autoplay: true,
autoplaySpeed: 2000,
slidesToShow: 6,
slidesToScroll: 6,
arrows:true,
responsive: [
{
breakpoint: 1024,
settings: {
slidesToShow: 6,
slidesToScroll: 6,
infinite: true,
dots: true
}
},
{
breakpoint: 600,
settings: {
slidesToShow: 4,
slidesToScroll: 4
}
},
{
breakpoint: 480,
settings: {
slidesToShow: 3,
slidesToScroll: 3
}
}

]
});
  /*----------------------------------------------
  T W I T T E R
  ------------------------------------------------*/
  // function twitterfeed() {
  //   var config5 = {
  //     "id": '702067549920485376',
  //     "domId": 'twitter-feed',
  //     "maxTweets": 4,
  //     "enableLinks": true,
  //     "showUser": true,
  //     "showTime": true,
  //     "dateFunction": '',
  //     "showRetweet": false,
  //     "customCallback": handleTweets,
  //     "showInteraction": false
  //   };
  //
  //   function handleTweets(tweets){
  //     var x = tweets.length;
  //     var n = 0;
  //     var element = document.getElementById('twitter-feed');
  //     var html = '<ul class="slider-twitter">';
  //     while(n < x) {
  //       html += '<li class="gallery-cell">' + tweets[n] + '</li>';
  //       n++;
  //     }
  //     html += '</ul>';
  //     element.innerHTML = html;
  //
  //     $('.slider-twitter').flickity({
  //       cellAlign: 'left',
  //       contain: true,
  //       wrapAround: true,
  //       prevNextButtons: false
  //     });
  //   }
  //   twitterFetcher.fetch(config5);
  // }
  //
  // if ($('.twitterfeed').length>0 ) {
  //   twitterfeed();
  // };

  /*----------------------------------------------
  S L I D E R  D A T E S
  ------------------------------------------------*/
  var $carouselDates = $('.jcarouselDates').flickity({
    cellAlign: 'left',
    wrapAround: true,
    contain: true,
    prevNextButtons: false,
    pageDots: false,
    draggable: false
  });
  $('.button-group').on( 'click', '.button', function() {
    var index = $(this).index();
    $carouselDates.flickity( 'select', index );
    $(this).addClass('active').siblings().removeClass('active');
  });






  /*----------------------------------------------
  L I G H T B O X
  ------------------------------------------------*/
  $('.swipebox').swipebox();

  if ($(".playerVideo").length>0) { //If there are video backgrounds
    $(".playerVideo").mb_YTPlayer();
    jQuery('.playerVideo').on("YTPPause",function(){
      jQuery('.play-video').removeClass('playing');
    });
    jQuery('.playerVideo').on("YTPPlay",function(){
      jQuery('.play-video').addClass('playing');
    });
    jQuery('.play-video').on('click', function(e) {
      if (jQuery('.play-video').hasClass('playing')) {
        jQuery(".playerVideo").pauseYTP();
      } else {
        jQuery('audio').each(function (i,e) {
          this.pause();
        });
        jQuery(".playerVideo").playYTP();
      }
      e.preventDefault();
    });

  }
  


});



/*----------------------------------------------
I S O T O P E
------------------------------------------------*/
$(window).load(function(){
  //ISOTOPE events
  var $container = $('.upevents').isotope({
    itemSelector: '.upevent',
    masonry: {
      columnWidth: '.upevent'
    }
  });

  //ISOTOPE media
  var $container = $('.thumbnails').isotope({
    itemSelector: '.thumbnail',
    masonry: {
      // columnWidth: '.thumbnail.small',
      gutter: 30
    }
  });
  // filter items on button click
  $('.filters').on( 'click', 'li', function() {
    var filterValue = $(this).attr('data-filter');
    $container.isotope({ filter: filterValue });
  });

  // change is-checked class on buttons
  $('.filters').each( function( i, buttonGroup ) {
    var $buttonGroup = $( buttonGroup );
    $buttonGroup.on( 'click', 'li', function() {
      $buttonGroup.find('.is-checked').removeClass('is-checked');
      $( this ).addClass('is-checked');
    });
  });

  // load more
  $('#append').click(function() {
    newItems = $('#more-items').appendTo('.thumbnails');
    $(".thumbnails").isotope('insert', newItems );
    $(this).hide();
    return false;
  });

});



/*----------------------------------------------
P A R A L L A X
------------------------------------------------*/
if(jQuery().parallax) {
  jQuery('.parallax-section').parallax();
}



/*----------------------------------------------
M E N U   A N C H O R S
------------------------------------------------*/
$('a[href*=#]').click(function() {
  if (location.pathname.replace(/^\//,'') === this.pathname.replace(/^\//,'') && location.hostname === this.hostname) {
    var $target = $(this.hash);
    $target = $target.length && $target || $('[name=' + this.hash.slice(1) +']');
    if ($target.length) {
      var targetOffset = $target.offset().top;
      $('html,body').animate({scrollTop: targetOffset-42}, 1000);

      // collapse nav
      $('.navbar-collapse.in').removeClass('in').addClass('collapse');

      return false;
    }
  }
});



/*----------------------------------------------
M E N U   F I X E D
------------------------------------------------*/
$(function() {
  $(window).bind("scroll", function(){
      if (!$('#jHeader.overflow-video').length) {
        if ($(window).scrollTop() >= 85) {
          $('#jHeader').addClass('overflow');
        } else {
          $('#jHeader').removeClass('overflow');
        }
        if ($(window).scrollTop() >= ($('.jIntro').height()/2)) {
          $('#jHeader').addClass('fixed');
        } else {
          $('#jHeader').removeClass('fixed');
        }
      }
  });







  // $('.disc-tracklist').on('click', function() {
  //   alert( "CLICK" );
  // });



});

// more events
$('#more-events').click(function(){
  $('.upcomming-events-list li.more').slideToggle("slow");
  $(this).hide();
  return false;
})

// more events
$('.createpl').click(function(){
  var islogin = $('#islogin').val();
  console.log(islogin);
  if(islogin==0){
      $("#box_popup_regist").show();
  }
  else{
      window.location="/album/create";
  }
  return false;
})
$('.contactsky').click(function(){
    $("#box_popup_contact").show();
})

///dang ky dung thu
  var alertMsg = function(msg, type, fn) {
        $.alert({
            useBootstrap: false,
            title: 'Thông báo!',
            content: msg,
            icon: 'fa fa-rocket',
            animation: 'zoom',
            closeAnimation: 'zoom',
            type: type,
            buttons: {
                okay: {
                    text: 'OK',
                    btnClass: 'btn-blue',
                    action: fn
                }
            }
        });
    };
    
    $('.reload_captcha').click(function (){
        $('.txt_capcha').attr('src', '/ajax/captcha');
    });
    
    /**
     * form contact us.
     */
    var formContactUs = $("form[id='form_popup_contact']");

    formContactUs.validate({
        rules: {
            fullname: {
                required: true,
                minlength: 3,
                maxlength: 50
            },
            email: {
                required: true,
                email: true
            },
            phone: {
                required: true,
                minlength: 8,
                maxlength: 50
            },
            captcha: {
                required: true,
                minlength: 5,
                maxlength: 5
            }
        },
        messages: {
            fullname: {
                required: "Please Input Your Name",
                minlength: "Name Must Have At Least 3 Characters",
                maxlength: "Name Only Up To 50 Characters"
            },
            email: {
                required: "Please Input Your Email",
                email: "Please Input Correct Email Format"
            },
            phone: {
                required: "Please Input Your Phone Number",     
                minlength: "Phone Number Must Have At Least 8 Numbers",
                maxlength: "Phone Number Only Up To 50 Numbers"
            },
            captcha: {
                required: "Please Input Capcha Code",
                minlength: "Capcha Code Must Have At Least 5 Characters",
                maxlength: "Capcha Code Only Up To 5 Characters"
            }
        }
    });

    formContactUs.on('submit', function (e) {
        if (formContactUs.valid()) {
            e.preventDefault();

            $.post('/ajax/contact_us', formContactUs.serialize(), function(data) {
                if (data.status === 'ok') {                    
                    alertMsg('Your contact has been sent successfully.<br>We will reply to you as soon as possible', 'blue', function(){
                        formContactUs.trigger('reset');
                        $('.reload_captcha').trigger('click');
                         $("#box_popup_contact").hide();
                    });
                } else {
                    alertMsg(data.error.msg, 'red');
                }
            }, 'json');
        }
    });
    
    /**
     * form popup regist.
     */
    var formPopupRegist = $("form[id='form_popup_regist']");

    formPopupRegist.validate({
        rules: {
            name: {
                required: true,
                minlength: 3,
                maxlength: 50
            },
            email: {
                required: true,
                email: true
            },
            phone: {
                required: true,
                minlength: 8,
                maxlength: 50
            },
            captcha: {
                required: true,
                minlength: 5,
                maxlength: 5
            }
        },
        messages: {
            name: {
                required: "Please Input Your Business/Personal Name",
                minlength: "Name Must Have At Least 3 Characters",
                maxlength: "Name Only Up To 50 Characters"
            },
            email: {
                required: "Please Input Your Email",
                email: "Please Input Correct Email Format"
            },
            phone: {
                required: "Please Input Your Phone Number",     
                minlength: "Phone Number Must Have At Least 8 Numbers",
                maxlength: "Phone Number Only Up To 50 Numbers"
            },
            captcha: {
                required: "Please Input Capcha Code",
                minlength: "Capcha Code Must Have At Least 5 Characters",
                maxlength: "Capcha Code Only Up To 5 Characters"
            }
        }
    });

    formPopupRegist.on('submit', function (e) {
        if (formPopupRegist.valid()) {
            e.preventDefault();

            $.post('/ajax/regist', formPopupRegist.serialize(), function(data) {
                if (data.status === 'ok') {
                    alertMsg('Your request has been sent successfully.<br>We will contact you within 24 hours', 'blue', function() {
                        formPopupRegist.trigger('reset');
                        $('.reload_captcha').trigger('click');
                        $("#box_popup_regist").hide();
                    });
                } else {
                    alertMsg(data.error.msg, 'red');
                }
            }, 'json');
        }
    });
    
    /* general */
    $(".btn_regist").click(function(){
        $("#box_popup_regist").show();
    });
    
    $(".info_regist .close").click(function(){
        formPopupRegist.data("validator").resetForm();
        $("#box_popup_regist").hide();
    });
     $(".btn_contact").click(function(){
        $("#box_popup_contact").show();
    });
    $(".info_contact .close").click(function(){
        formContactUs.data("validator").resetForm();
        $("#box_popup_contact").hide();
    });