<section id="products">
    <!-- start circle text -->
    <div class="absolute top-2/3 -end-[100px] animate-spin-slow max-md:hidden rtl:hidden !overflow-hidden">
        <img class="w-[200px] h-[200px] object-contain" src="{{ asset('assets/img/circle-text/products.png') }}"
            alt="">
    </div>

    <div class="container">
        <!-- start title -->
        <div class="max-md:hidden relative *:capitalize text-center pb-10">
            <h2 class="text-8xl [-webkit-text-stroke:0.5px_#999] text-transparent font-bold absolute left-[-10%] -mt-5">
                {{ __('site.Products') }}
            </h2>
            <h3 class="text-primary bg-primary/10 rounded-3xl p-2 px-8 max-w-max mx-auto text-lg">
                {{ __('site.Our Products') }}
            </h3>
            <h4 class="text-gray-800 text-4xl font-bold mt-5 mb-6">
                “{{ __('site.Simple Additions For Stunning Results') }}”
            </h4>
        </div>

        <!-- start content -->
        <div class="grid md:grid-cols-3 gap-8">
            <!-- product item -->
            <div class="grid justify-center gap-7 text-center">
                <div class="p-1 rounded-full overflow-hidden from-primary to-secondary bg-gradient-to-r bg-white">
                    <div class="p-4 bg-white rounded-full">
                        <img alt="product-img" class="w-[270px] h-[270px] object-cover border rounded-full"
                            src="{{ asset('assets/img/products/product-1.jpg') }}" />
                    </div>
                </div>
                <h5 class="text-secondary text-4xl font-semibold capitalize">
                    {{ __('site.emulsifier') }}
                </h5>
            </div>

            <!-- product item -->
            <div class="grid justify-center gap-7 text-center">
                <div class="p-1 rounded-full overflow-hidden from-primary to-secondary bg-gradient-to-r bg-white">
                    <div class="p-4 bg-white rounded-full">
                        <img alt="product-img" class="w-[270px] h-[270px] object-cover border rounded-full"
                            src="{{ asset('assets/img/products/product-2.jpg') }}" />
                    </div>
                </div>
                <h5 class="text-secondary text-4xl font-semibold capitalize">
                    {{ __('site.thickeners') }}
                </h5>
            </div>

            <!-- product item -->
            <div class="grid justify-center gap-7 text-center">
                <div class="p-1 rounded-full overflow-hidden from-primary to-secondary bg-gradient-to-r bg-white">
                    <div class="p-4 bg-white rounded-full">
                        <img alt="product-img" class="w-[270px] h-[270px] object-cover border rounded-full"
                            src="{{ asset('assets/img/products/product-3.jpg') }}" />
                    </div>
                </div>
                <h5 class="text-secondary text-4xl font-semibold capitalize">
                    {{ __('site.stabilizer') }}
                </h5>
            </div>
        </div>
    </div>
</section>
