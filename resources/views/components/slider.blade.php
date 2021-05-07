<div>
    <section class="w-full slider-section ">
        <div class="swiper-container w-full h-full ">
            <div class="swiper-wrapper ">
                @foreach ( $images as $image)
                <div class="swiper-slide w-full h-full  image object-cover">
                    <img src="{{asset('storage/' .$folder .'/' .$image->file_name )}}" alt="" class="object-fill min-h-full object-center w-full">    
                </div>
                @endforeach
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
                    delay: 5000,
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
