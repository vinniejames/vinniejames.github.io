function scaleVideoContainer(){var a=$(window).height(),b=parseInt(a)+"px";$(".homepage-hero-module").css("height",b)}function initBannerVideoSize(a){$(a).each(function(){$(this).data("height",$(this).height()),$(this).data("width",$(this).width())}),scaleBannerVideoSize(a)}function scaleBannerVideoSize(a){var b,c,d=$(window).width(),e=$(window).height();$(a).each(function(){var a=$(this).data("height")/$(this).data("width"),f=e/d;a>f?(b=d,c=b*a,$(this).css({top:-(c-e)/2+"px","margin-left":0})):(c=e,b=c/a,$(this).css({"margin-top":0,"margin-left":-(b-d)/2+"px"})),$(this).width(b).height(c),$(".homepage-hero-module .video-container video").addClass("fadeIn animated")})}$(document).ready(function(){scaleVideoContainer(),initBannerVideoSize(".video-container .poster img"),initBannerVideoSize(".video-container .filter"),initBannerVideoSize(".video-container video"),$(window).on("resize",function(){scaleVideoContainer(),scaleBannerVideoSize(".video-container .poster img"),scaleBannerVideoSize(".video-container .filter"),scaleBannerVideoSize(".video-container video")})});