<!-- Footer -->
<footer class="pt-10 pb-6">
    <div class="max-md:hidden relative *:capitalize text-center pb-10">
        <h2 class="text-8xl [-webkit-text-stroke:0.5px_#c7c7c7] text-transparent font-bold absolute left-10 -mt-5">
            {{ __('site.Footer') }}
        </h2>
    </div>
    <div class="container">
        <h3 class="text-primary bg-primary/10 rounded-3xl p-2 px-8 max-w-max mx-auto text-lg">
            {{ __('site.Contact Info') }}
        </h3>
        <p class="text-4xl font-bold pt-6 pb-12 text-center">“{{ __('site.Reach Us On') }}”</p>

        <!-- contact info -->
        <div class="flex flex-wrap gap-12 max-sm:justify-center justify-between max-w-[600px] mx-auto">
            <!-- Phone Number -->
            <a class="flex gap-2.5 text-xl" href="tel:01010101010" target="_blank">
                <img src="{{ asset('assets/img/icons/call-calling.svg') }}" alt="Phone Number Icon" class="w-6 h-6 object-contain" />
                {{ __('site.Phone Number') }}
            </a>

            <!-- Location -->
            <a class="flex gap-2.5 text-xl" href="https://maps.google.com/maps?q=39.1893012,21.5318114&hl=es&z=14"
                target="_blank">
                <img src="{{ asset('assets/img/icons/location.svg') }}" alt="Location Icon" class="w-6 h-6 object-contain" />
                {{ __('site.Location') }}
            </a>

            <!-- Email -->
            <a class="flex gap-2.5 text-xl" href="mailto:test@gmail.com" target="_blank">
                <img src="{{ asset('assets/img/icons/sms.svg') }}" alt="Email Icon" class="w-6 h-6 object-contain" />
                {{ __('site.Email') }}
            </a>
        </div>

        <!-- copyright -->
        <div class="grid gap-3 justify-items-center mt-12">
            <img src="{{ asset('assets/img/logo/logo-text.png') }}" alt="Logo text" />
            <p class="text-lg opacity-60">2024. All Rights Reserved</p>
        </div>
    </div>
</footer>
<!-- End Footer -->
