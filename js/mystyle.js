$(document).ready(function (){
    const swiper = new Swiper('.swiper', {
        // Optional parameters
        direction: 'horizontal',
        autoplay: {
            delay: 5000,
        },
        loop: true,
        slidesPerView: 4,
        spaceBetween: 10,
        // Responsive breakpoints
        breakpoints: {
            // when window width is >= 320px
            320: {
                slidesPerView: 1,
                spaceBetween: 20
            },
            // when window width is >= 640px
            640: {
                slidesPerView: 2,
                spaceBetween: 40
            },
            1080: {
                slidesPerView: 4,
                spaceBetween: 40
            }
        },

        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
            clickable:true
        },

        // And if we need scrollbar
        scrollbar: {
            el: '.swiper-scrollbar',
        },
    });
})

