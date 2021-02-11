var swiper = new Swiper(".swiper-container", {
    spaceBetween: 0,
    centeredSlides: true,
    autoplay: {
        delay: 16000,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});
