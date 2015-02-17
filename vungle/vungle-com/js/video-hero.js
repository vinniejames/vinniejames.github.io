$(document).ready(function() {

    // Resize video
    scaleVideoContainer();

    initBannerVideoSize('.video-container .poster img');
    initBannerVideoSize('.video-container .filter');
    initBannerVideoSize('.video-container video');
        
    $(window).on('resize', function() {
        scaleVideoContainer();
        scaleBannerVideoSize('.video-container .poster img');
        scaleBannerVideoSize('.video-container .filter');
        scaleBannerVideoSize('.video-container video');
    });

});

// Reusable Functions

function scaleVideoContainer() {

    var height = $(window).height();
    var unitHeight = parseInt(height) + 'px';
    $('.homepage-hero-module').css('height',unitHeight); //swaps css height: unitHeight on homepage-hero-module container

}

function initBannerVideoSize(element){ //sets initial load size on .video--container
    
    $(element).each(function(){
        $(this).data('height', $(this).height()); //swaps css height on .video-container
        $(this).data('width', $(this).width()); //swaps css width on .video-container
    });

    scaleBannerVideoSize(element); // runs scaleVideoContainer() with initial h x w

}

function scaleBannerVideoSize(element){

    var windowWidth = $(window).width(),
        windowHeight = $(window).height(),
        videoWidth,
        videoHeight;
    
    console.log(windowHeight); // display height in console

    $(element).each(function(){
        var videoAspectRatio = $(this).data('height')/$(this).data('width'),
            windowAspectRatio = windowHeight/windowWidth;

        if (videoAspectRatio > windowAspectRatio) { 
	        /* if window width < than video width |16:9 .56|4:3  .75| returns: false .56 < .75 CHECK THIS COMMENT, FEELS OPPOSITE??? */
            videoWidth = windowWidth;
            videoHeight = videoWidth * videoAspectRatio;
            $(this).css({'top' : -(videoHeight - windowHeight) / 2 + 'px', 'margin-left' : 0});
        } else { //window width wider than video width
            videoHeight = windowHeight;
            videoWidth = videoHeight / videoAspectRatio;
            $(this).css({'margin-top' : 0, 'margin-left' : -(videoWidth - windowWidth) / 2 + 'px'});
        }

        $(this).width(videoWidth).height(videoHeight); //grabs proper vid size based on aspect ratio

        $('.homepage-hero-module .video-container video').addClass('fadeIn animated');
        

    });
}