window.onload = function(){toRatio();};
window.onresize = function(){toRatio();};

function toRatio(){
  $width = $(".content > .video-grid > div > div").css( "width" );
  $width2 = parseInt($width)/16*9;
  $(".content > .video-grid > div > div").css( "height", $width2 );
}
