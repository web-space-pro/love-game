import Swiper from 'swiper';
import {Autoplay, EffectFade, Navigation, Pagination, Manipulation} from 'swiper/modules';
Swiper.use([Navigation, Pagination, Autoplay, EffectFade, Manipulation]);

const swiper = new Swiper('.slider', {
    slidesPerView: 4,
    loop: true,
    spaceBetween: 20,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    breakpoints: {
        0: {
            slidesPerView: 1,
        },
        768: {
            slidesPerView: 2,
        },
        992: {
            slidesPerView: 3,
        },
        1280: {
            slidesPerView: 4,
        }
    }
});



