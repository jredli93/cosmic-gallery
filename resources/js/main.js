$("#header").vegas({
    transition: 'flash2',
    animation: 'random',
    timer: false,
    slides: [{
            video: {
                src: [
                    '/assets/images/tattooing.mp4',
                ],
                loop: true,
                mute: true
            },
            src: '/assets/images/slider1.jpg'
        }
    ]
});