<footer class="accordion py-0" id="footer">
    <div class="video-control">
        @if (isset($VIDEO_PLAY_TEXT) && $VIDEO_PLAY_TEXT == true)
            <p class="continue-text text-center play-video-text">PLAY VIDEO</p>
        @endif
        @if (isset($VIDEO_LOCK) && $VIDEO_LOCK == true)
            <a>
                <img class="play-video" src="{{ asset('images/Play.svg') }}" alt="">
            </a>
        @else
            @if (isset($VIDEO_BACKGROUND) && $VIDEO_BACKGROUND == true)
                <a onclick="playVideo_landing()" class="play">
                    <img class="play-video" src="{{ asset('images/Play.svg') }}" alt="">
                </a>
                <a onclick="stopVideo_landing()" class="stop d-none">
                    <img class="stop-video" src="{{ asset('images/Stop.svg') }}" alt="">
                </a>
            @else
                <a onclick="playVideo()" class="play">
                    <img class="play-video" src="{{ asset('images/Play.svg') }}" alt="">
                </a>
                <a onclick="stopVideo()" class="stop d-none">
                    <img class="stop-video" src="{{ asset('images/Stop.svg') }}" alt="">
                </a>
            @endif
        @endif
    </div>
</footer>
