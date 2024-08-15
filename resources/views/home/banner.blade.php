<div id="banner" class="relative">
    <!-- swiper banner -->
    <div class="swiper banner-slider relative">
        <div
            class="swiper-wrapper *:relative *:!h-[70vh] lg:*:min-h-[500px] [&_img]:w-full [&_img]:h-full [&_img]:object-cover">
            <!-- banner item -->
            <div class="swiper-slide overflow-hidden">
                <!-- img -->
                <img src="{{ asset('assets/img/banner/banner-1.jpg') }}" alt="banner img" />
                <!-- ovrlay -->
                <div class="absolute inset-0 bg-black/40"></div>
                <!-- title -->
                <div class="absolute top-2/4 left-2/4 z-10 translate-x-[-50%] translate-y-[-50%] text-center">
                    <h2 data-swiper-parallax-x="1000">
                        <span
                            class="text-7xl text-transparent bg-clip-text bg-gradient-to-b from-white from-[55%] to-secondary/30 font-bold">
                            {{ __('site.Modern Facility') }}
                        </span>
                    </h2>
                </div>
            </div>

            <!-- banner item -->
            <div class="swiper-slide overflow-hidden">
                <!-- img -->
                <img src="{{ asset('assets/img/banner/banner-2.jpg') }}" alt="banner img" />
                <!-- ovrlay -->
                <div class="absolute inset-0 bg-black/40"></div>
                <!-- title -->
                <div class="absolute top-2/4 left-2/4 z-10 translate-x-[-50%] translate-y-[-50%] text-center">
                    <h2 data-swiper-parallax-x="1000">
                        <span
                            class="text-7xl text-transparent bg-clip-text bg-gradient-to-b from-white from-[55%] to-secondary/30 font-bold">
                            {{ __('site.Satisfied Clients') }}
                        </span>
                    </h2>
                </div>
            </div>

            <!-- banner item -->
            <div class="swiper-slide overflow-hidden">
                <!-- img -->
                <img src="{{ asset('assets/img/banner/banner-3.jpg') }}" alt="banner img" />
                <!-- ovrlay -->
                <div class="absolute inset-0 bg-black/40"></div>
                <!-- title -->
                <div class="absolute top-2/4 left-2/4 z-10 translate-x-[-50%] translate-y-[-50%] text-center">
                    <h2 data-swiper-parallax-x="1000">
                        <span
                            class="text-7xl text-transparent bg-clip-text bg-gradient-to-b from-white from-[55%] to-secondary/30 font-bold">
                            {{ __('site.Health-Conscious Choices') }}
                        </span>
                    </h2>
                </div>
            </div>

            <!-- banner item -->
            <div class="swiper-slide overflow-hidden">
                <!-- img -->
                <img src="{{ asset('assets/img/banner/banner-4.jpg') }}" alt="banner img" />
                <!-- ovrlay -->
                <div class="absolute inset-0 bg-black/40"></div>
                <!-- title -->
                <div class="absolute top-2/4 left-2/4 z-10 translate-x-[-50%] translate-y-[-50%] text-center">
                    <h2 data-swiper-parallax-x="1000">
                        <span
                            class="text-7xl text-transparent bg-clip-text bg-gradient-to-b from-white from-[55%] to-secondary/30 font-bold">
                            {{ __('site.Customized Formulations') }}
                        </span>
                    </h2>
                </div>
            </div>
        </div>
        <div
            class="swiper-pagination *:!bg-[#B5B5B5] [&_.swiper-pagination-bullet-active]:!bg-primary *:!opacity-100 *:!h-4 *:!w-4">
        </div>
    </div>
</div>
