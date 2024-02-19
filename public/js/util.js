let video = document.querySelector(".video-section");
let video_mobile = document.querySelector(".video-section-mobile");
let original_video = video ? video.querySelector("source").src : "";
let original_mobile_video = video_mobile ? video_mobile.querySelector("source").src : "";

function hideContent() {
    $(".menu-body").addClass("d-none");
}

function showContent() {

    $(".menu-body").removeClass("d-none");
}

function playVideo_landing() {
    $(".play").addClass("d-none");
    $(".stop").removeClass("d-none");
    video.style.display = 'none';
    video_mobile.style.display = 'none';
    $('.body-section').addClass('d-none');
    $('.foot-section').addClass('d-none');
    $('.play-video-text').addClass('d-none');
    if (window.innerWidth > 769) {
        $(".menu-bg").removeClass('d-none');
        video.querySelector("source").src = "/Video/OISH.mp4";
        video.load();
        video.addEventListener('canplaythrough', function () {
            $(".menu-bg").addClass('d-none');
            video.style.display = 'block';
            video.play();
        });
        video.muted = false;
    } else {
        $(".menu-bg-mobile").removeClass('d-none');
        $('.body-section').addClass('d-none');
    $('.foot-section').addClass('d-none');
    video_mobile.querySelector("source").src = "/Video/OISV.mp4";
        video_mobile.load();
        video_mobile.addEventListener('canplaythrough', function () {
            $(".menu-bg-mobile").addClass('d-none');
            video_mobile.style.display = 'block';
            video_mobile.play();
        });
        video_mobile.muted = false;
    }


}
function stopVideo_landing() {
    $(".stop").addClass("d-none");
    $(".play").removeClass("d-none");
    $('.body-section').removeClass('d-none');
    $('.foot-section').removeClass('d-none');
    $('.play-video-text').removeClass('d-none');
    if (window.innerWidth > 769) {
        $(".menu-bg").removeClass('d-none');
        video.querySelector("source").src = original_video;
        video.load();
        video.muted = true;
        $('.body-section').removeClass('d-none');
    $('.foot-section').removeClass('d-none');
    video.addEventListener('canplaythrough', function () {
            $(".menu-bg").addClass('d-none');
            video.style.display = 'block';
        });

    } else {
        $(".menu-bg-mobile").removeClass('d-none');
        video_mobile.querySelector("source").src = original_mobile_video;
        video_mobile.load();
        video_mobile.muted = true;
        $('.body-section').removeClass('d-none');
    $('.foot-section').removeClass('d-none');
    video_mobile.addEventListener('canplaythrough', function () {
            $(".menu-bg-mobile").addClass('d-none');
            video_mobile.play();
            video_mobile.style.display = 'block';
        });
    }
}

function playVideo() {
    $(".play").addClass("d-none");
    $(".stop").removeClass("d-none");
    if (window.innerWidth > 769) {
        video.style.display = 'none';
        $(".menu-bg").removeClass('d-none');
        $('.body-section').addClass('d-none');
    $('.foot-section').addClass('d-none');
    video.querySelector('source').src = '/Video/OISH.mp4';
        video.load();
        video.addEventListener('canplaythrough', function () {
            $(".menu-bg").addClass('d-none');
            video.style.display = 'block';
            video.play();
        });
        video.muted = false;
    }
    else {
        video_mobile.style.display = 'none';
        $(".menu-bg-mobile").removeClass('d-none');
        $('.body-section').addClass('d-none');
    $('.foot-section').addClass('d-none');
    video_mobile.querySelector('source').src = '/Video/OISV.mp4';
        video_mobile.load();
        video_mobile.addEventListener('canplaythrough', function () {
            $(".menu-bg-mobile").addClass('d-none');
            video_mobile.style.display = 'block';
            video_mobile.play();
        });
        video.muted = false;
    }
}
function stopVideo() {
    if (window.innerWidth > 769) {
        video.querySelector('source').src = '';
        video.load();
        video.muted = true;
        $(".menu-bg").removeClass('d-none');
    }
    else {
        video_mobile.querySelector('source').src = '';
        video_mobile.load();
        video_mobile.muted = true;
        $(".menu-bg-mobile").removeClass('d-none');
    }

    $('.stop').addClass('d-none');
    $('.play').removeClass('d-none');
    $('.body-section').removeClass('d-none');
    $('.foot-section').removeClass('d-none');
    video.style.display = 'none';
    video_mobile.style.display = 'none';
}

//select-custom function

let selectDom = document.getElementsByClassName('form-select-custom');
for(let i = 0 ; i < selectDom.length ; i ++) {
    let selEle = selectDom[i].getElementsByTagName("select")[0];
    let a = document.createElement("DIV");
    a.setAttribute('class', 'select-selected');
    a.innerHTML = selEle.options[selEle.selectedIndex].innerHTML;
    selectDom[i].appendChild(a);

    let b = document.createElement('DIV');
    b.setAttribute('class', 'select-items select-hide');
    for(let j = 1 ; j < selEle.length ; j ++) {
        let c = document.createElement('DIV');
        c.innerHTML = selEle.options[j].innerHTML;
        c.addEventListener('click', function(e) {
            let s = this.parentNode.parentNode.getElementsByTagName('select')[0];
            let h = this.parentNode.previousSibling;
            console.log(s)
            console.log(h)
        });
        b.appendChild(c);
    }
    selectDom[i].appendChild(b);

    a.addEventListener('click', function(e) {
        e.stopPropagation();
        closeAllSelect(this);
        this.nextSibling.classList.toggle('select-hide');
        this.classList.toggle('select-arrow-active');
    })
}

function closeAllSelect(ele) {
    
}