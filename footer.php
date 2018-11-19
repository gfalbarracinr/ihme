<footer id="footer" data-ix="contact-button-hide" class="w-container footer-columns">
    <h2 class="footer-heading">Contact us!</h2>
    <div class="w-row">
        <div class="w-col w-col-3 footer-column-left">
            <img src="/wordpress/wp-content/themes/ihme/images/2c46e6e-5124e24.png"/>        
        </div>
        <div class="w-col w-col-3 footer-column-left">
            <h3 class="footer-column-heading">Ihme-3d Oy</h3>
            <p class="footer-content">Voimatie 6 C
                <br> 90440 Kempele
                <br>Business ID: 2324297-7</p>
            <div class="call-us-heading">Call us:</div>
            <div class="footer-number"><a href="tel:+358443561782">+358 44 3561 782</a>
            </div>
        </div>
    </div>
    <a href="#footer" class="w-button fixed-button cta-button">Contact us</a>
</footer>
    <script src="/wordpress/wp-content/themes/ihme/js/1d30625-9d6814b.js"></script>
    <script src="/wordpress/wp-content/themes/ihme/js/ac40371-f485bd0.js"></script>
    
    <script>
        var lang = $('html').attr('lang');
        //This loads the IFrame Player API code asynchronously.
        var tag = document.createElement('script');
        tag.src = "/wordpress/wp-content/themes/ihme/www.youtube.com/iframe_api";
        var firstScriptTag = document.getElementsByTagName('script')[0];
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

        // This function creates an <iframe> (and YouTube player) after the API code downloads.
        var player;
        function onYouTubeIframeAPIReady() {
            player = new YT.Player('youTubePlayer', {
                videoId: lang === 'fi' ? 'ozeEpqPHrfE' : '7z0nJ_MsJCk',
                events: {
                    'onReady': onPlayerReady,
                    'onStateChange': onPlayerStateChange
                },
                width: 560,
                height: 315
            });
        }
        function onPlayerReady(event) {
            // Find all YouTube videos
            var $allVideos = $("iframe[src^='https://www.youtube.com']"),

                    // The element that is fluid width
                    $fluidEl = $("#video-content");

            // Figure out and save aspect ratio for each video
            $allVideos.each(function() {

                $(this)
                        .data('aspectRatio', this.height / this.width)

                        // and remove the hard coded width/height
                        .removeAttr('height')
                        .removeAttr('width');
            });

            // When the window is resized
            // (You'll probably want to debounce this)
            $(window).resize(function() {
                var newWidth = $fluidEl.width();

                // Resize all videos according to their own aspect ratio
                $allVideos.each(function() {

                    var $el = $(this);
                    $el
                            .width(newWidth)
                            .height(newWidth * $el.data('aspectRatio'));
                });
                // Kick off one resize to fix all videos on page load
            }).resize();
        }

        function onPlayerStateChange(event) {
            // track when user clicks to Play
            if (event.data == YT.PlayerState.PLAYING) {
                ga('send', 'event', 'Videos', 'Play', lang === 'fi' ? 'Video in Finnish': 'Video in English');
            }

            // track when user clicks to Pause
            if (event.data == YT.PlayerState.PAUSED) {
                ga('send', 'event', 'Videos', 'Pause', lang === 'fi' ? 'Video in Finnish': 'Video in English');
            }

            // track when video ends
            if (event.data == YT.PlayerState.ENDED) {
                ga('send', 'event', 'Videos', 'Finished', lang === 'fi' ? 'Video in Finnish': 'Video in English');
            }
        }
    </script>
    </body>

</html>

