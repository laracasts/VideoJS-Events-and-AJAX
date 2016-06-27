var video = videojs('my-video', {
    playbackRates: [.5, 1, 1.5, 2, 2.5],
    fluid: true,
    plugins: {
        hotkeys: {
            seekStep: 10,
            enableNumbers: false
        }
    }
});

video.on('ended', function () {
    $.ajax({
        type: 'POST',
        url: '/completions',
        data: { videoId: 1 } // hard-coding video id for simplicity
    });
});
