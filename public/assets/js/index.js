

// const tabsNextBtn = document.querySelectorAll('.tabs-next-btn');
// const navLink = document.querySelectorAll('.nav-link');
// const tabs = document.querySelectorAll('.tab-pane')
// tabsNextBtn.forEach((btn, index) => {
//     btn.addEventListener('click', function (e) {
//         tabs.forEach(link => {
//             link.style.display = 'none';
//         });
//         tabs[index].style.display = 'block'
//     });
// });


// tabs form end


$('.service-cards').slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 1,
    arrows: true,
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                dots: true
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: true,
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            }
        }
    ]
});
$('.testimonial-slider').slick({
    dots: false,
    infinite: true,
    arrows: true,
    speed: 300,
    slidesToShow: 1,
    slidesToScroll: 1,
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                dots: true
            }
        },
        {
            breakpoint: 600,
            settings: {

                slidesToScroll: 1,
                dots: false,
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
    ]
});
$('.reason-cards').slick({
    centerMode: true,
    centerPadding: '60px',
    slidesToShow: 3,
    arrows: false,
    responsive: [

        {
            breakpoint: 992,
            settings: {
                slidesToShow: 1,
                arrows: false,
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: 1
            }
        },

        {
            breakpoint: 768,
            settings: {
                slidesToShow: 1,
                arrows: false,
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: 1
            }
        },
        {
            breakpoint: 480,
            settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: 1
            }
        }
    ]
});
function openNav() {
    let openBtn = document.getElementById("mySidenav");
    openBtn.style.width = "350px";
    openBtn.style.transition = "1s";


}

function closeNav() {
    let closeBtn = document.getElementById("mySidenav");
    closeBtn.style.width = "0"
    closeBtn.style.transition = '0.3s'
}
let navs = document.querySelector('.navbar-nav')
let menuIcon = document.querySelectorAll('.menu-toggle')
console.log(navs, menuIcon);
menuIcon.forEach(function (e) {
    e.addEventListener('click', function () {
        navs.classList.toggle('active');
    });
});


let shouldExecuteCode = true;
if (shouldExecuteCode) {
    const passFields = document.querySelectorAll('.pass-field')
    const passBtn = document.querySelectorAll('.show-pass')
    console.log(passBtn);
    console.log(passBtn);
    passBtn.forEach((btn, index) => {
        passFields[index].type = 'password'
        btn.addEventListener('click', function (e) {
            // alert('hellow')
            e.preventDefault();
            if (passFields[index].type === 'password') {
                passFields[index].type = 'text'
                btn.classList.replace('fa-eye', 'fa-eye-slash');
            } else {
                passFields[index].type = 'password'
                btn.classList.replace('fa-eye-slash', 'fa-eye');
            }
        })
    })
}


// icon change
function changeIcon(x) {
    if (x.textContent === "+") {
        x.textContent = "−";
    } else {
        x.textContent = "+";
    }
}
// icon change end


const tabsNextBtn1 = document.querySelector('#next-tabs-btn-1')
const tabsNextBtn2 = document.querySelector('#next-tabs-btn-2')
const tabsNextBtn3 = document.querySelector('#next-tabs-btn-3')
const tabsPrevBtn1 = document.querySelector('#prev-tabs-btn-1')
const tabsPrevBtn2 = document.querySelector('#prev-tabs-btn-2')
const tabForm1 = document.querySelector('.tab-form-1')
const tabForm2 = document.querySelector('.tab-form-2')
const tabForm3 = document.querySelector('.tab-form-3')
const progressBar = document.querySelectorAll('.step-indicators');
// let currentStep = 0;
// progressBar[currentStep].classList.add('active')
const tabNextBtnFunc = (next, tabStep1, tabStep2, progress) => {
    next.onclick = function () {
        tabStep1.style.left = '-112rem';
        tabStep2.style.left = '0';
        // tabStep2.classList.add('active');
        // progress.forEach((btn, index) => {
        //     btn[index].classList.add('active')
        // })
    }
}
tabNextBtnFunc(tabsNextBtn1, tabForm1, tabForm2, progressBar);
tabNextBtnFunc(tabsNextBtn2, tabForm2, tabForm3, progressBar);
const tabPrevBtnFunc = (prev, tabStep1, tabStep2) => {
    prev.onclick = function () {
        tabStep2.classList.add('active')
        tabStep2.classList.add('show')
        tabStep1.style.left = '0';
        tabStep2.style.left = '112rem';
        // currentStep--;
        // updateIndicators();
    }
}
tabPrevBtnFunc(tabsPrevBtn1, tabForm1, tabForm2);
tabPrevBtnFunc(tabsPrevBtn2, tabForm2, tabForm3);



// const step1 = document.querySelector('.step-1');
// const step2 = document.querySelector('.step-2');
// const step3 = document.querySelector('.step-3');
// const next1 = document.querySelector('#next-1');
// const next2 = document.querySelector('#next-2');
// const next3 = document.querySelector('#next-3');
// const prev1 = document.querySelector('#prev-1');
// const prev2 = document.querySelector('#prev-2');
// const progressBar = document.querySelectorAll('.indicators');
// let currentStep = 0;
// progressBar[currentStep].classList.add('active');
// const nextBtnFunc = (next, steps, steps2) => {
//     next.onclick = function () {
//         steps.style.left = '-76rem';
//         steps2.style.left = '0';
//         currentStep++;
//         progressBar[currentStep].classList.add('active');
//     }
// }
// nextBtnFunc(next1, step1, step2);
// nextBtnFunc(next2, step2, step3);

// const prevBtnFunc = (prev, steps, steps2) => {
//     prev.onclick = function () {
//         steps.style.left = '0';
//         steps2.style.left = '76rem';
//         progressBar[currentStep].classList.remove('active');
//         currentStep--;
//         progressBar[currentStep].classList.add('active');
//     }
// }
// prevBtnFunc(prev1, step1, step2);
// prevBtnFunc(prev2, step2, step3);
// const form = document.querySelector('#step-form');
// form.addEventListener('click', (e) => {
//     e.preventDefault();
// });






// const step1 = document.querySelector('.step-1');
// const step2 = document.querySelector('.step-2');
// const step3 = document.querySelector('.step-3');
// const progressBar = document.querySelectorAll('.indicators');
// const prevformBtn = document.querySelectorAll('.form-prev-button')
// const formNextBtn = document.querySelectorAll('.form-next-button')
// let currentStep = 0;
// progressBar[currentStep].classList.add('active');
// const nextBtnFunc = (next, steps, steps2) => {
//     next.forEach((btn, index) => {
//         btn.addEventListener('click', function () {
//             steps.style.left = '-76rem';
//             steps2.style.left = '0';
//             currentStep++;
//             progressBar[currentStep].classList.add('active');
//             if (currentStep != 0) {
//                 prevformBtn.forEach(btn => {
//                     btn.style.display = 'block';
//                 })
//             }
//             if (currentStep === 3) {
//                 formNextBtn.innerHTML = 'submit';
//             }
//         })

//     })
// }
// nextBtnFunc(formNextBtn, step1, step2);
// nextBtnFunc(formNextBtn, step2, step3);

// const prevBtnFunc = (prev, steps, steps2) => {
//     prev.forEach(btn => {
//         btn.addEventListener('click', function () {
//             steps.style.left = '0';
//             steps2.style.left = '76rem';
//             progressBar[currentStep].classList.remove('active');
//             currentStep--;
//             progressBar[currentStep].classList.add('active');
//         })
//     })
// }
// prevBtnFunc(prevformBtn, step1, step2);
// const form = document.querySelector('#step-form');
// form.addEventListener('click', (e) => {
//     e.preventDefault();
// });

// Slider  js


// tabs step form

// tabs step form end








