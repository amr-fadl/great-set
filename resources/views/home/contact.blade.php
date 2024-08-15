<section id="contact" class="bg-cover" style="background-image: url('./assets/img/contact/bg-contact.jpg')">
    <div class="absolute inset-0 bg-black/25"></div>
    <div class="max-md:hidden relative *:capitalize text-center pb-10">
        <h2 class="text-8xl [-webkit-text-stroke:0.5px_#c7c7c7] text-transparent font-bold absolute left-5 -mt-5">
            {{ __('site.Contact Us') }}
        </h2>
    </div>
    <div class="absolute top-1/4 -end-[100px] animate-spin-slow max-md:hidden rtl:hidden overflow-hidden z-10">
        <div class="border border-primary/50 w-[200px] h-[200px] rounded-full -rotate-90 [&_span]:px-1 *:text-white">
            <img class="w-[200px] h-[200px] object-contain" src="{{ asset('assets/img/circle-text/contact.png') }}"
                alt="">
        </div>
    </div>
    <div class="absolute top-2/3 -start-[100px] animate-spin-slow max-md:hidden rtl:hidden overflow-hidden z-10">
        <div class="border border-primary/50 w-[200px] h-[200px] rounded-full -rotate-90 [&_span]:px-1 *:text-white">
            <img class="w-[200px] h-[200px] object-contain" src="{{ asset('assets/img/circle-text/contact.png') }}"
                alt="">
        </div>
    </div>

    <div class="container relative z-10">
        <!-- title -->
        <div class="relative *:capitalize text-center pb-10">
            <h3 class="text-primary bg-white rounded-3xl p-2 px-8 max-w-max mx-auto text-lg">
                {{ __('site.Contact Us') }}
            </h3>
            <h4 class="text-white text-4xl font-bold mt-5 mb-6">
                “{{ __('site.Feel Free To Contact Us') }}”
            </h4>
        </div>

        <!-- form -->
        <form action="">
            <div class="p-3 md:pt-7 md:px-10 pb-4 rounded-md grid gap-2 bg-white w-[620px] max-w-full mx-auto">
                <p class="text-center text-2xl font-bold text-secondary">
                    “{{ __('site.Inquiry') }}”
                </p>

                <!-- start input -->
                <div class="relative">
                    <input type="text" placeholder="{{ __('site.First Name') }}"
                        class="border p-3 rounded w-full placeholder:text-sm" />
                    <img alt="First Name Icon" src="{{ asset('assets/img/icons/profile.svg') }}"
                        class="absolute end-0 top-1/2 -translate-y-1/2 me-2.5 opacity-50" />
                </div>

                <!-- start input -->
                <div class="relative">
                    <input type="email" placeholder="{{ __('site.Email') }}"
                        class="border p-3 rounded w-full placeholder:text-sm" />
                    <img alt="Email Icon" src="{{ asset('assets/img/icons/sms.svg') }}"
                        class="absolute end-0 top-1/2 -translate-y-1/2 me-2.5 opacity-50" />
                </div>

                <!-- start input -->
                <div class="relative">
                    <input type="text" placeholder="{{ __('site.Phone Number') }}"
                        class="border p-3 rounded w-full placeholder:text-sm" />
                    <img alt="Phone Number Icon" src="{{ asset('assets/img/icons/smart-phone.svg') }}"
                        class="absolute end-0 top-1/2 -translate-y-1/2 me-2.5 opacity-50" />
                </div>

                <!-- start input -->
                <div class="relative">
                    <textarea type="text" placeholder="{{ __('site.Your Message') }}"
                        class="border p-3 rounded w-full placeholder:text-sm" rows="4"></textarea>
                </div>

                <!-- start button -->
                <button
                    class="flex gap-2 items-center justify-center py-3 px-7 rounded-3xl bg-secondary text-white text-lg font-bold w-[250px] justify-self-center">
                    {{ __('site.Send') }}
                    <img src="{{ asset('assets/img/icons/play.svg') }}" alt="contact us icon" />
                </button>
            </div>
        </form>
    </div>
</section>
