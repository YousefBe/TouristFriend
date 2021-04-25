<div>
    <section class=" w-full h-96 ">
        <div class="swiper-container w-full h-full ">
            <div class="swiper-wrapper ">
                <div class="swiper-slide  w-full h-full  image object-cover image1">aaaa
                </div>
                <div class="swiper-slide w-full h-full  image object-cover  image1"> </div>
                <div class="swiper-slide w-full h-full image object-cover  image1">Slide 3</div>

            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
            <!-- Add Arrows -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>

    @push('swiper-scipts')
        <script>
            var swiper = new Swiper(".swiper-container", {
                spaceBetween: 0,
                centeredSlides: true,
                autoplay: {
                    delay: 3000,
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

        </script>
    @endpush

</div>
