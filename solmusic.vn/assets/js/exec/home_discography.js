var $actual= null;
var opened=false;

$(".open-disc").click(function() {
  /*var album = $(this).data('album');
  
  if(album){
      openData(album);
  }
  else{
     open($(this).data('url'));
  }*/
  open($(this).data('url'));
  $actual=$(this);
});

if ($('.playlist1').length) {
  var playlist1 = $('#playlist_newalbum');
  var a1 = audiojs.create(playlist1, {
    trackEnded: function() {
      var next = $('ol.playlist1 li.playing').next();
      if (!next.length) next = $('ol.playlist1 li').first();
      next.addClass('playing').siblings().removeClass('playing');
      audio1.load($('a', next).attr('data-src'));
      audio1.play();
    }
  });

  var audio1 = a1[0];
  first = $('ol.playlist1 a').attr('data-src');
  $('ol.playlist1 li').first().addClass('pause');
  audio1.load(first);
}


$('ol.playlist1 li').click(function(e) {
  e.preventDefault();
   pauseAllAudio();
   removeClassPlayPause("");
   removeClassPlayPause("0");
  if( $(this).attr('class') == 'playing' ) {
    $(this).addClass('pause');
    audio1.playPause();
  } else {
    $(this).removeClass('pause').addClass('playing').siblings().removeClass('playing').removeClass('pause');
    audio1.load($('a', this).attr('data-src'));
    audio1.play();
  }

});
function pauseAllAudio(){
    $(".audiojs").each(function() {
        $(this).removeClass('playing').removeClass('pause');
    });
   jQuery('audio').each(function (i,e) {
        this.pause();
    });
}
function removeClassPlayPause(strNo){
   $("ol.playlist" + strNo + " li").each(function() {
        $(this).removeClass('playing').removeClass('pause');
    });
}

function openData(data){
    $('.project-content').html(data);
    $(".project-content").hide(0)
    $('.project-window').hide(0)
    close();
    $("html, body").animate({ scrollTop: $('#project-show').offset().top - (200) }, 300, function(){
      $('.project-window').show(0);
      $('.project-window').css('height','0');
      var heightAjax = $('.project-content').height();
      $('.project-window').animate({height:heightAjax}, 500,function(){
        $('.project-window').css('height',heightAjax);
        $(".project-content").fadeIn("slow");
      });
    });
}
function getHtmlAlbum(album){
    //var album_image = STATIC_URL + album.image;
    var songs = album.songDetails;
    var html='<div class="container"><div class="close-btn"></div><div class="voffset90"></div>';
    html+='<div class="row">';
    html+='<div class="col-md-4">';
    html+='<div class="info-album">';
    html+='<div class="cover">';
    html+='<img src="'+album.image+'"  alt=""></div>';
    html+='<p class="album album-list">'+album.name+'</p>';
    html+='<p class="artist">'+ album.desc+'</p>';
    html+='<div class="voffset20"></div>';
    html+='<p class="buyalbum"><a href="#" class="btn square inverse">Tạo playlist</a></p>';
    html+='<div class="voffset80"></div>';
    html+='</div>';
    html+='</div>';
    html+='<div class="col-md-8">';
    html+='<div class="disc-tracklist">';
    html+='<audio preload id="playlist0"></audio>';
    html+='<ol class="playlist0">';
    for (var i in songs) {
        var item = songs[i];
        var domSong = getHtmlSong(item);
        html+=domSong;
    }
    html+='</ol>';
    html+='</div>';
    html+='</div>';
    html+='</div></div>';
    return html;
}
function getHtmlSong(song){
    var songHtml='<li>';
    songHtml+='<a href="#" data-src="'+song.streamUrl+'">';
    songHtml+='<div class="track-info">';
    songHtml+='<p class="track-title">'+song.title+'</p>';
    songHtml+='<p class="track-album">'+song.artists+'</p>';
    songHtml+='</div>';
    songHtml+='</a>';
    songHtml+='</li>';
    return songHtml;
}
function open(e){
  $.ajax({
    url: e,
    success: function(data) {
      if(data.data!=""){
      var albumHtml=getHtmlAlbum(data.data);
      $('.project-content').html(albumHtml);
      $(".project-content").hide(0);
      $('.project-window').hide(0);
      console.log("ajax call end");
      close();
      $("html, body").animate({ scrollTop: $('#project-show').offset().top - (200) }, 300, function(){
        $('.project-window').show(0);
        $('.project-window').css('height','0');
        var heightAjax = $('.project-content').height();
        $('.project-window').animate({height:heightAjax}, 500,function(){
          $('.project-window').css('height',heightAjax);
          $(".project-content").fadeIn("slow");
        });
      });
    }
    }
  });
}

function close(){
  $(".close-btn").click(function() {
    $(".project-window").slideUp("slow");
    $(".project-content").fadeOut("slow");
    $("html, body").animate({ scrollTop: $('#discography').offset().top -(50) }, 1000);
    opened=false;
  });
}



$(document).ajaxComplete(function(event, request, settings) {
  //console.log(settings.url);
  //console.log(settings.url.indexOf("album/detail"));
  if(settings.url.indexOf("album/detail")>0) {
    //console.log("ajax call complete");
    var playlist0 = $('#playlist0');
    var a0 = audiojs.create(playlist0, {
      trackEnded: function() {
        var next = $('ol.playlist0 li.playing').next();
        if (!next.length) next = $('ol.playlist0 li').first();
        next.addClass('playing').siblings().removeClass('playing');
        audio0.load($('a', next).attr('data-src'));
        audio0.play();
      }
      // ,
      // pause: function() {
      //   if (this.playing) this.settings.play().addClass('playing');
      //   else this.settings.pause();
      //   $('ol.playlist0 li.playing').addClass('pause');
      // },
      // play: function() {
      //   var player = this.settings.createPlayer;
      //   container[audiojs].helpers.addClass(this.wrapper, player.playingClass);
      //   $('ol.playlist0 li.pause').removeClass('pause');
      // }
    });

    // Load in the first track
    var audio0 = a0[0];
    first = $('ol.playlist0 a').attr('data-src');
    $('ol.playlist0 li').first().addClass('pause');
    audio0.load(first);

    // Load in a track on click
    $('ol.playlist0 li').click(function(e) {
      e.preventDefault();
      pauseAllAudio();
      removeClassPlayPause("");
      removeClassPlayPause("1");
      if( $(this).attr('class') == 'playing' ) {
        $(this).addClass('pause');
        audio0.playPause();
        console.log("audio0 playPause")
      } else {
        $(this).removeClass('pause').addClass('playing').siblings().removeClass('playing').removeClass('pause');
        audio0.load($('a', this).attr('data-src'));
        audio0.play();
      }

    });

    // $('.pause').click(function(e) {
    //     e.preventDefault();
    //     $('ol.playlist0 li').siblings().removeClass('playing');
    //     audio0.playPause();
    // })


  }
});
