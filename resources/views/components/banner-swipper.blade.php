<div class="swiper banner-swiper">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <img src="{{ asset('images/banner/banner-1.jpg') }}" alt="Banner 1" class="w-full h-[500px] object-cover">
        </div>
        <div class="swiper-slide">
            <img src="{{ asset('images/banner/banner-2.jpg') }}" alt="Banner 2" class="w-full h-[500px] object-cover">
        </div>
        <div class="swiper-slide">
            <img src="{{ asset('images/banner/banner-3.jpg') }}" alt="Banner 3" class="w-full h-[500px] object-cover">
        </div>
        <div class="swiper-slide">
            <img src="{{ asset('images/banner/banner-1.jpg') }}" alt="Banner 4" class="w-full h-[500px] object-cover">
        </div>
        <div class="swiper-slide">
            <img src="{{ asset('images/banner/banner-2.jpg') }}" alt="Banner 5" class="w-full h-[500px] object-cover">
        </div>
    </div>
    <div class="swiper-pagination"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
</div>

<style>
    .banner-swiper {
        width: 100%;
        height: 500px;
        position: relative;
    }

    .swiper-button-next,
    .swiper-button-prev {
        color: #ffffff;
        background: rgba(0, 0, 0, 0.5);
        padding: 30px;
        border-radius: 50%;
        width: 20px;
        height: 20px;
    }

    .swiper-button-next::after,
    .swiper-button-prev::after {
        font-size: 20px;
    }

    .swiper-pagination-bullet {
        background: #ffffff;
        opacity: 0.5;
    }

    .swiper-pagination-bullet-active {
        background: #ffffff;
        opacity: 1;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const swiper = new Swiper('.banner-swiper', {
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            effect: 'slide',
            speed: 1000,
        });
    });
</script>
