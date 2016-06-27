<!DOCTYPE html>
<html>
    <head>
        <link href="http://vjs.zencdn.net/5.10.2/video-js.css" rel="stylesheet">
        <title>VideoJS</title>
    </head>
    <body>
        <video  id="my-video"
                class="video-js vjs-big-play-centered"
                controls
                poster="http://vjs.zencdn.net/v/oceans.png"
                data-setup="{}"
        >
            <source src="http://vjs.zencdn.net/v/oceans.mp4" type="video/mp4">

            <p class="vjs-no-js">
                To view this video please enable JavaScript, and consider upgrading
                to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
            </p>
        </video>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
        <script src="http://vjs.zencdn.net/5.10.2/video.js"></script>
        <script src="//cdn.sc.gl/videojs-hotkeys/0.2/videojs.hotkeys.min.js"></script>
        <script src="/js/main.js"></script>
    </body>
</html>
