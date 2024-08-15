<section id="about">
    <div class="absolute top-2/3 -start-[100px] animate-spin-slow max-md:hidden rtl:hidden overflow-hidden">
        <div class="border border-primary/50 w-[200px] h-[200px] rounded-full -rotate-90 [&_span]:px-1">
            <img class="w-[200px] h-[200px] object-contain" src="{{ asset('assets/img/circle-text/about.png') }}"
                alt="">
        </div>
    </div>
    <div class="container relative z-10">
        <!-- start title -->
        <div class="max-md:hidden relative *:capitalize text-center pb-10">
            <h2 class="text-8xl [-webkit-text-stroke:0.5px_#999] text-transparent font-bold absolute left-[-10%] -mt-5">
                {{ __('site.About us') }}
            </h2>
            <h3 class="text-primary bg-primary/10 rounded-3xl p-2 px-8 max-w-max mx-auto text-lg">
                {{ __('site.About us') }}
            </h3>
            <h4 class="text-gray-800 text-4xl font-bold mt-5 mb-6">
                “{{ __('site.Behind the Brand') }}”
            </h4>
        </div>

        <!-- start content -->
        <div class="grid md:grid-cols-[55%_1fr] gap-8 items-center">
            <!-- text and button -->
            <div>
                <p class="mb-6 text-xl">
                    <span class="text-secondary font-bold">“{{ __('site.Al Rawasi Company') }}”</span>
                    {{ __('site.about_desc') }}
                </p>
                <button
                    class="flex gap-2 items-center justify-center py-3 px-7 rounded-3xl bg-secondary text-white text-lg font-bold">
                    {{ __('site.Contact Us') }}
                    <img src="{{ asset('assets/img/icons/play.svg') }}" alt="contact us icon" />
                </button>
            </div>

            <!-- image -->
            <div>
                <img alt="about us img" class="w-full md:min-h-[410px] object-cover"
                    src="{{ asset('assets/img/about/about.jpg') }}" />
            </div>
        </div>
    </div>
</section>
