let video = document.querySelector(".video-section");
let video_mobile = document.querySelector(".video-section-mobile");
let original_video = video.querySelector("source").src;
let original_mobile_video = video_mobile.querySelector("source").src;

function hideContent() {
    $(".play").addClass("d-none");
    $(".stop").removeClass("d-none");
    $(".menu-body").addClass("d-none");
    $('.content').addClass('d-none');
    $('.play-video-text').addClass('d-none');
}

function showContent() {
    $(".stop").addClass("d-none");
    $(".play").removeClass("d-none");
    $(".menu-body").removeClass("d-none");
    $('.content').removeClass('d-none');
    $('.play-video-text').removeClass('d-none');
}

function playVideo() {
    if (window.innerWidth > 769) {
        video.style.display = 'none';
        $(".menu-bg").removeClass('d-none');
        video.querySelector("source").src = "/Video/OISH.mp4";
        video.load();
        video.addEventListener('canplaythrough', function () {
            hideContent();
            $(".menu-bg").addClass('d-none');
            video.style.display = 'block';
            video.play();
        });
        video.muted = false;
    } else {
        video_mobile.style.display = 'none';
        $(".menu-bg-mobile").removeClass('d-none');
        video_mobile.querySelector("source").src = "/Video/OISV.mp4";
        video_mobile.load();
        video_mobile.addEventListener('canplaythrough', function () {
            hideContent();
            $(".menu-bg-mobile").addClass('d-none');
            video_mobile.style.display = 'block';
            video_mobile.play();
        });
        video_mobile.muted = false;
    }


}
function stopVideo() {
    if (window.innerWidth > 769) {
        $(".menu-bg").removeClass('d-none');
        video.querySelector("source").src = original_video;
        video.load();
        video.muted = true;
        video.addEventListener('canplaythrough', function () {
            $(".menu-bg").addClass('d-none');
            showContent();
            video.play();
        });
    } else {
        $(".menu-bg-mobile").removeClass('d-none');
        video_mobile.querySelector("source").src = original_mobile_video;
        video_mobile.load();
        video_mobile.muted = true;
        video_mobile.addEventListener('canplaythrough', function () {
            showContent();
            $(".menu-bg-mobile").addClass('d-none');
            video_mobile.play();
        });
    }


}
