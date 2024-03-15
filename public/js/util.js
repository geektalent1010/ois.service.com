let video = document.querySelector(".video-section");
let video_mobile = document.querySelector(".video-section-mobile");
let original_video = video ? video.querySelector("source").src : "";
let original_mobile_video = video_mobile
    ? video_mobile.querySelector("source").src
    : "";

function hideContent() {
    $(".menu-body").addClass("d-none");
}

function showContent() {
    $(".menu-body").removeClass("d-none");
}

function playVideo_landing() {
    $(".play").addClass("d-none");
    $(".stop").removeClass("d-none");
    video.style.display = "none";
    video_mobile.style.display = "none";
    $(".body-section").addClass("d-none");
    $(".foot-section").addClass("d-none");
    $(".play-video-text").addClass("d-none");
    if (window.innerWidth > 769) {
        video.querySelector("source").src = "/Video/OISH.mp4";
        video.load();
        video.addEventListener("canplaythrough", function () {
            video.style.display = "block";
            video.play();
        });
        video.muted = false;
    } else {
        $(".body-section").addClass("d-none");
        $(".foot-section").addClass("d-none");
        video_mobile.querySelector("source").src = "/Video/OISV.mp4";
        video_mobile.load();
        video_mobile.addEventListener("canplaythrough", function () {
            video_mobile.style.display = "block";
            video_mobile.play();
        });
        video_mobile.muted = false;
    }
}
function stopVideo_landing() {
    $(".stop").addClass("d-none");
    $(".play").removeClass("d-none");
    $(".body-section").removeClass("d-none");
    $(".foot-section").removeClass("d-none");
    $(".play-video-text").removeClass("d-none");
    if (window.innerWidth > 769) {
        video.querySelector("source").src = original_video;
        video.load();
        video.muted = true;
        $(".body-section").removeClass("d-none");
        $(".foot-section").removeClass("d-none");
        video.addEventListener("canplaythrough", function () {
            video.style.display = "block";
        });
    } else {
        video_mobile.querySelector("source").src = original_mobile_video;
        video_mobile.load();
        video_mobile.muted = true;
        $(".body-section").removeClass("d-none");
        $(".foot-section").removeClass("d-none");
        video_mobile.addEventListener("canplaythrough", function () {
            video_mobile.play();
            video_mobile.style.display = "block";
        });
    }
}

function playVideo() {
    $(".play").addClass("d-none");
    $(".stop").removeClass("d-none");
    if (window.innerWidth > 769) {
        video.style.display = "none";
        $(".menu-bg").removeClass("d-none");
        $(".body-section").addClass("d-none");
        $(".foot-section").addClass("d-none");
        video.querySelector("source").src = "/Video/OISH.mp4";
        video.load();
        video.addEventListener("canplaythrough", function () {
            $(".menu-bg").addClass("d-none");
            video.style.display = "block";
            video.play();
        });
        video.muted = false;
    } else {
        video_mobile.style.display = "none";
        $(".menu-bg-mobile").removeClass("d-none");
        $(".body-section").addClass("d-none");
        $(".foot-section").addClass("d-none");
        video_mobile.querySelector("source").src = "/Video/OISV.mp4";
        video_mobile.load();
        video_mobile.addEventListener("canplaythrough", function () {
            $(".menu-bg-mobile").addClass("d-none");
            video_mobile.style.display = "block";
            video_mobile.play();
        });
        video.muted = false;
    }
}
function stopVideo() {
    if (window.innerWidth > 769) {
        video.querySelector("source").src = "";
        video.load();
        video.muted = true;
        $(".menu-bg").removeClass("d-none");
    } else {
        video_mobile.querySelector("source").src = "";
        video_mobile.load();
        video_mobile.muted = true;
        $(".menu-bg-mobile").removeClass("d-none");
    }

    $(".stop").addClass("d-none");
    $(".play").removeClass("d-none");
    $(".body-section").removeClass("d-none");
    $(".foot-section").removeClass("d-none");
    video.style.display = "none";
    video_mobile.style.display = "none";
}

//select-custom function
function drawSelectForm(selectPartDom) {
        for(const element of selectPartDom.getElementsByClassName('select-selected')) {
            element.remove();
        }
        for(const element of selectPartDom.getElementsByClassName('select-items')) {
            element.remove();
        }

        let selectDom = selectPartDom.getElementsByTagName("select")[0];
        let selectedDom = document.createElement("DIV");
        selectedDom.setAttribute("class", "select-selected");
        if(selectPartDom.classList.contains('select-left-icon') ) {
            selectedDom.innerHTML = '<img src="/images/select-arrows.svg" /><div class="select-text d-flex">' + selectDom.options[selectDom.selectedIndex].innerHTML + '</div>';
        } else {
            selectedDom.innerHTML = '<div class="select-text d-flex">' + selectDom.options[selectDom.selectedIndex].innerHTML + '</div><img src="/images/select-arrows.svg" />';
        }

        selectPartDom.appendChild(selectedDom);
        if(selectDom.length == 1) return;

        let customOptions = document.createElement("DIV");
        customOptions.setAttribute("class", "select-items select-hide");
        for (let j = 1; j < selectDom.length; j++) {
            let optionDom = document.createElement("DIV");
            $(optionDom).attr('data-value', selectDom.options[j].value);
            let data1 = $(selectDom[j]).data('data1');
            const tempData1 = $(selectDom[j - 1]).data('data1');
            let data2 = $(selectDom[j]).data('data2');
            if(data1 && data2) {
                optionDom.innerHTML = '<div>' + (data1 != tempData1 ? data1 : '') + ' </div><div>&nbsp- ' + data2 + '</div>';
            } else if(data1) {
                optionDom.innerHTML = '<div>' + data1 + '</div>';
            }

            if (selectDom.options[selectDom.selectedIndex].value == $(optionDom).data('value')) {
                optionDom.classList.add("active");
            }

            optionDom.addEventListener("click", function (e) {
                let selectDom = this.parentNode.parentNode.getElementsByTagName("select")[0];
                let selectedDom = this.parentNode.previousSibling;
                for (let k = 1; k < selectDom.length; k++) {
                    if (selectDom.options[k].value == $(this).data('value')) {
                        selectDom.selectedIndex = k;
                        const data1 = selectDom.options[k].dataset.data1;
                        const data2 = selectDom.options[k].dataset.data2;
                        let data = '';
                        data += data1 ? data1: '';
                        data += data2 ? (' - ' + data2) : '';
                        selectedDom.getElementsByClassName('select-text')[0].innerHTML = data;
                        let hasActiveDoms = this.parentNode.getElementsByClassName("active");
                        for(const ele of hasActiveDoms) {
                            ele.classList.remove('active');
                        }
                        this.classList.add("active");
                        break;
                    }
                }
                optionDom.parentNode.previousSibling.classList.remove('d-none'); //show select item
            });

            customOptions.appendChild(optionDom);
        }
        selectPartDom.appendChild(customOptions);

        if(!selectPartDom.classList.contains('disabled')) {
            selectedDom.addEventListener("click", function (e) {
                e.stopPropagation();
                closeAllSelect();
                this.nextSibling.classList.toggle("select-hide");
                this.classList.add('d-none');
            });
        }

}

function closeAllSelect() {
    let selectedItems = document.getElementsByClassName("select-items");
    for (const element of selectedItems) {
        element.classList.add("select-hide");
    }
    let selectSelectedDoms = document.getElementsByClassName('select-selected');
    for (const element of selectSelectedDoms) {
        element.classList.remove('d-none');
    }
}

document.addEventListener("click", closeAllSelect);

//select-custom function END

// Email validation function START
function validateEmail(email) {
    let re = /\S+@\S+\.\S+/;
    return re.test(email);
}
// Email validation function END

// input dropdown function start

let searchPartDom = document.getElementsByClassName("custom-input-dropdown");
for (let element of searchPartDom) {
    let inputPartDom = element.getElementsByClassName("search-input")[0];
    let inputDom = inputPartDom.getElementsByClassName("custom-input")[0];
    let listDetailsDom = element.getElementsByClassName("list-detail")[0];

    inputDom.addEventListener("focus", function (e) {
        listDetailsDom.classList.remove("d-none");
    });

    for (let listEle of listDetailsDom.children) {
        listEle.addEventListener("click", function (e) {
            inputDom.value = listEle.getAttribute('value').toLowerCase();
            inputDom.focus();

            for(let listEle of listDetailsDom.children) {
                if(listEle.textContent.toLowerCase().includes(inputDom.value)) {
                    listEle.classList.remove('d-none');
                } else {
                    listEle.classList.add('d-none');
                }
            }
        });
    }

    inputDom.addEventListener("blur", function (e) {
        // setTimeout(() => {
        //     listDetailsDom.classList.add('d-none');
        // }, 100);
    });

    inputDom.addEventListener('input', function(e) {
        for(let listEle of listDetailsDom.children) {
            if(listEle.textContent.toLowerCase().includes(e.target.value)) {
                listEle.classList.remove('d-none');
            } else {
                listEle.classList.add('d-none');
            }
        }
    });

    document.addEventListener('click', function(e) {
        if(!e.target.classList.contains('detail') && !e.target.classList.contains('custom-input')) {
            listDetailsDom.classList.add('d-none');
        }
    })
}

// input dropdown function end

// custom alert msg pop-up start

const customAlert = (title, message, status) => {
    let doms = document.createElement('div');
    doms.innerHTML += `
        <div class="custom-alert-popup">
            <div class="alert-body ${status}">
                <div class="alert-text-part">
                    <div class="alert-title-text">${title}</div>
                    <div class="alert-message-text">${message}</div>
                </div>
                <div class="alert-icon-part">
                    <img src="/images/PopupSmile_${status}.svg" alt="icon"/>
                </div>
            </div>
        </div>
    `;

    for(const element of doms.getElementsByClassName('alert-body')) {
        element.addEventListener('click', function() {
            gsap.to('.custom-alert-popup', { duration: 0.5, opacity: 0, scale: 1, ease: 'power4.out' });
            gsap.to(this, { duration: 0.5, opacity: 0, scale: 1.2, ease: 'power4.out' });
            setTimeout(() => {
                this.parentNode.remove();
            }, 500);

        });
    }

    document.body.appendChild(doms);
    gsap.fromTo('.alert-body', {opacity: 0, scale: 0}, { duration: 0.3, opacity: 1, scale: 1, ease: 'power4.out' });
}

// custom alert msg pop-up end
