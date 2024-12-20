const { Autoplay } = require("swiper/modules");

const hero = new Swiper( ".swiper-hero" , {
    slidesPerView : 1,
    cssMode: true,
    spaceBetween : 15,
    loop: true,
    autoplay: false,

    breakpoints: {
        360:{
            slidesPerView : 1,
            cssMode: true,
            spaceBetween : 0,
        },
        640:{
            slidesPerView : 1,
            cssMode: true,
            spaceBetween :15,
        }
    },
    pagination: {
        el: ".swiper-pagination",
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

const philo = new Swiper(".swiper-philo", {
    cssMode: true,
    loop: true,
    navigation: {
        nextEl: ".swiper-button-next-philo",
        prevEl: ".swiper-button-prev-philo",
    },
});


const contempo = new Swiper(".swiper-contempo", {
    cssMode: true,
    loop: true,
    navigation: {
        nextEl: ".swiper-button-next-contempo",
        prevEl: ".swiper-button-prev-contempo",
    },
});

const contempo_mirror = new Swiper(".swiper-contempo-mirror", {
    cssMode: true,
    loop: true,
    navigation: {
        nextEl: ".swiper-button-next-contempo-mirror",
        prevEl: ".swiper-button-prev-contempo-mirror",
    },
});