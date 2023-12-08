<footer class="accordion py-0" id="footer">
    <div class="video-control">
        @if (isset($VIDEO_STATUS) && $VIDEO_STATUS)
            <p class="continue-text text-center play-video-text">PLAY VIDEO</p>
            <a onclick="playVideo()" class="play">
                <img class="play-video" src="{{ asset('images/Play.svg') }}" onclick="playVideo()" alt="">
            </a>
            <a onclick="stopVideo()" class="stop d-none">
                <img class="stop-video" src="{{ asset('images/Stop.svg') }}" onclick="stopVideo()" alt="">
            </a>
        @else
            <a>
                <img style="width:36px" src="{{ asset('images/IconLock.svg') }}" alt="">
            </a>
        @endif
    </div>
</footer>
