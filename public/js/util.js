let video = document.querySelector(".video-section");
let video_mobile = document.querySelector(".video-section-mobile");
function playVideo() {
    if (window.innerWidth > 769) {
        video.querySelector("source").src = "/Video/OISH.mp4";
        video.load();
        video.play();
        video.muted = false;
    } else {
        video_mobile.querySelector("source").src = "/Video/OISV.mp4";
        video_mobile.load();
        video_mobile.play();
        video_mobile.muted = false;
    }

    $(".play").addClass("d-none");
    $(".stop").removeClass("d-none");
    $(".menu-body").addClass("d-none");
}
function stopVideo() {
    if (window.innerWidth > 769) {
        video.querySelector("source").src = "";
        video.load();
        video.muted = true;
    } else {
        video_mobile.querySelector("source").src = "";
        video_mobile.load();
        video_mobile.muted = true;
    }

    $(".stop").addClass("d-none");
    $(".play").removeClass("d-none");
    $(".menu-body").removeClass("d-none");
}
