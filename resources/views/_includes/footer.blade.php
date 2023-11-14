<footer class="accordion py-0" id="footer">
    <div class="video-control">
        <p class="continue-text text-center d-none play-video-text">PLAY VIDEO</p>
        <a onclick="playVideo()" class="play">
            <img class="play-video" src="{{ asset('images/Play.svg') }}" onclick="playVideo()">
        </a>
        <a onclick="stopVideo()" class="stop d-none">
            <img class="stop-video" src="{{ asset('images/Stop.svg') }}" onclick="stopVideo()">
        </a>
    </div>    
</footer>