document.addEventListener('DOMContentLoaded',function() {

    
    
    window.homeVideo = function() {
        
        
        var promise = document.getElementById('video').play();

        if (promise !== undefined) {
            promise.then(_ => {
            // Autoplay started!
        }).catch(error => {
            console.log('error');
            // Autoplay was prevented.
            // Show a "Play" button so that user can start playback.
            });
        }
    }

   // document.getElementById('video') ? window.playHomeVideo() : false;
    
/*
    const instance = new vidbg('.vidbg-box', {
        mp4: 'http://example.com/video.mp4',
        poster: 'path/to/fallback.jpg',
        overlay: false,
    }, { })
*/


}, false);