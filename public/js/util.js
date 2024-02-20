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

let selectPartDom = document.getElementsByClassName('form-select-custom');
for(let i = 0 ; i < selectPartDom.length ; i ++) {
    let selectDom = selectPartDom[i].getElementsByTagName("select")[0];
    let selectedDom = document.createElement("DIV");
    selectedDom.setAttribute('class', 'select-selected');
    selectedDom.innerHTML = selectDom.options[selectDom.selectedIndex].innerHTML;
    selectPartDom[i].appendChild(selectedDom);

    let customOptions = document.createElement('DIV');
    customOptions.setAttribute('class', 'select-items select-hide');
    for(let j = 1 ; j < selectDom.length ; j ++) {
        let optionDom = document.createElement('DIV');
        optionDom.innerHTML = selectDom.options[j].innerHTML;
        if(selectDom.options[selectDom.selectedIndex].innerHTML == optionDom.innerHTML) {
            optionDom.classList.add('active');
        }

        optionDom.addEventListener('click', function(e) {
            let selectDom = this.parentNode.parentNode.getElementsByTagName('select')[0];
            let selectedDom = this.parentNode.previousSibling;
            for(let k = 0 ; k < selectDom.length ; k ++) {
                if(selectDom.options[k].innerHTML == this.innerHTML) {
                    selectDom.selectedIndex = k;
                    selectedDom.innerHTML = this.innerHTML;
                    hasActiveDoms = this.parentNode.getElementsByClassName("active");
                    for(let l = 0 ; l < hasActiveDoms.length; l ++) {
                        hasActiveDoms[l].classList.remove('active');
                    }
                    this.classList.add('active');
                    break;
                }
            }
            selectedDom.click();
        });

        customOptions.appendChild(optionDom);
    }
    selectPartDom[i].appendChild(customOptions);

    selectedDom.addEventListener('click', function(e) {
        e.stopPropagation();
        closeAllSelect(i);
        this.nextSibling.classList.toggle('select-hide');
    });
}

function closeAllSelect(index) {
    let selectedItems = document.getElementsByClassName('select-items');
    for(let i = 0 ; i < selectedItems.length ; i ++) {
        if(index != i) selectedItems[i].classList.add('select-hide');
    }
}

document.addEventListener('click', closeAllSelect);