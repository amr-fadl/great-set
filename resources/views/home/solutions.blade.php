<section id="solutions" class="bg-contain" style="background-image: url('./assets/img/solutions/bg-solutions.svg')">

    <!-- start circle text -->
    <div class="absolute top-1/4 -end-[100px] animate-spin-slow max-md:hidden rtl:hidden overflow-hidden">
        <img class="w-[200px] h-[200px] object-contain" src="{{ asset('assets/img/circle-text/solutions.png') }}" alt="">
    </div>
    <div class="absolute top-2/3 -start-[100px] animate-spin-slow max-md:hidden rtl:hidden overflow-hidden">
        <img class="w-[200px] h-[200px] object-contain" src="{{ asset('assets/img/circle-text/solutions.png') }}" alt="">
    </div>

    <!-- start title -->
    <div class="container">
        <!-- start title -->
        <div class="relative *:capitalize text-center pb-10">
            <h3 class="text-primary bg-primary/10 rounded-3xl p-2 px-8 max-w-max mx-auto text-lg">
                {{ __('site.Our Solutions') }}
            </h3>
            <h4 class="text-gray-800 text-4xl font-bold mt-5 mb-6">
                “{{ __('site.We Create Solutions For Everyday Use Products') }}”
            </h4>
        </div>
    </div>

    <!-- start single product group -->
    <div class="product-group">

        <!-- start product -->
        <div class="flex flex-wrap justify-center gap-10 lg:gap-16 max-w-[600px] mx-auto">

            <!-- product item -->
            <div class="grid gap-7 text-center relative z-10 group product-item w-[140px]">
                <div
                    class="p-1 rounded-full overflow-hidden from-primary to-secondary bg-gradient-to-r bg-white w-full aspect-square">
                    <div class="w-full h-full p-4 bg-white rounded-full">
                        <img alt="solutions-img" class="w-full h-full object-cover rounded-full"
                            src="{{ asset('assets/img/solutions/solutions-1.png') }}" />
                    </div>
                </div>
                <h5 class="text-xl font-semibold capitalize">
                    {{ __('site.Yogurt') }}
                </h5>

                <!-- popup hover -->
                <div
                    class="absolute md:left-1/2 md:-translate-x-1/2 -mt-4 p-[1px] min-w-[300px] duration-300 overflow-hidden opacity-0 scale-0 group-hover:opacity-100 group-hover:scale-100 group-hover:-translate-y-full -z-10">
                    <span class="absolute inset-0 from-primary to-secondary bg-gradient-to-r rounded-xl"></span>
                    <div class="relative z-10 bg-white rounded-xl p-4 text-start">
                        <h5 class="text-secondary text-2xl font-semibold capitalize">
                            {{ __('site.Yogurt') }}
                        </h5>
                        <p class="text-sm">
                            {{ __('site.solutions_1_desc') }}
                        </p>
                    </div>
                    <div class="absolute top-full w-full h-4 bg-red-500"></div>
                </div>

                <!-- product details -->
                <div class="product-details-item relative z-10 h-0 w-0 overflow-hidden">
                    <div class="py-12 bg-[#FAFAFA]">
                        <div class="container">
                            <h2
                                class="text-8xl [-webkit-text-stroke:0.5px_#999] text-transparent font-bold absolute right-[-10%] -mt-5">
                                product
                            </h2>
                            <h5 class="text-secondary text-2xl font-semibold capitalize mb-5">
                                {{ __('site.Yogurt') }}
                            </h5>
                            <div class="grid lg:grid-cols-2">
                                <!-- start circl -->
                                <div class="product-details-item pb-16">
                                    <!-- start text -->
                                    <p class="text-start text-xl mb-16">
                                        {{ __('site.Applying Products To') }}:
                                    </p>

                                    <!-- start circle -->
                                    <div
                                        class="w-[220px] h-[220px] lg:border border-primary flex gap-3 justify-center items-center rounded-full mx-auto relative">
                                        <img src="{{ asset('assets/img/solutions/solutions-1.png') }}" alt=""
                                            class="w-[50%] h-[50%] object-contain" />
                                        <div class="circle-solution lg:absolute lg:inset-[-15%]">
                                            <span class="lg:absolute">{{ __('site.Labnah') }}</span>
                                            <span class="lg:absolute">{{ __('site.Drinking Yogurt') }}</span>
                                            <span class="lg:absolute">{{ __('site.Spoonable Yogurt') }}</span>
                                            <span class="lg:absolute">{{ __('site.Stirred Yogurt') }}</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- start table -->
                                <div class="grid gap-5">
                                    <!-- start text -->
                                    <p class="text-start text-xl">
                                        {{ __('site.Health-conscious our experts choose for your Specific Needs') }}:
                                    </p>

                                    <!-- start table -->
                                    <table class="[&_td]:p-3 [&_td]:bg-primary/10 border-separate">
                                        <tbody>
                                            <tr>
                                                <td>{{ __('site.Clean Label') }}</td>
                                                <td>{{ __('site.Control Fermentation') }}</td>
                                                <td>{{ __('site.Foam Stability') }}</td>
                                            </tr>
                                            <tr>
                                                <td>{{ __('site.Fruit Preparation') }}</td>
                                                <td>{{ __('site.Mouthfeel') }}</td>
                                                <td>{{ __('site.Process Optimization') }}</td>
                                            </tr>
                                            <tr>
                                                <td>{{ __('site.Texture') }}</td>
                                                <td>{{ __('site.Shelf Life') }}</td>
                                                <td>{{ __('site.Preventions of Syneresis') }}</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <!-- start button -->
                                    <button
                                        class="close-view-product h-max flex gap-2 items-center justify-center py-3 px-7 rounded-3xl bg-secondary text-white text-lg font-bold w-[250px]">
                                        {{ __('site.Back To Products') }}
                                        <img src="{{ asset('assets/img/icons/play.svg') }}" alt="contact us icon" />
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- product item -->
            <div class="grid gap-7 text-center relative z-10 group product-item w-[140px]">
                <div
                    class="p-1 rounded-full overflow-hidden from-primary to-secondary bg-gradient-to-r bg-white w-full aspect-square">
                    <div class="w-full h-full p-4 bg-white rounded-full">
                        <img alt="solutions-img" class="w-full h-full object-cover rounded-full"
                            src="{{ asset('assets/img/solutions/solutions-2.png') }}" />
                    </div>
                </div>
                <h5 class="text-xl font-semibold capitalize">
                    {{ __('site.Rayeb milk') }}
                </h5>

                <!-- popup hover -->
                <div
                    class="absolute md:left-1/2 md:-translate-x-1/2 -mt-4 p-[1px] min-w-[300px] duration-300 overflow-hidden opacity-0 scale-0 group-hover:opacity-100 group-hover:scale-100 group-hover:-translate-y-full -z-10">
                    <span class="absolute inset-0 from-primary to-secondary bg-gradient-to-r rounded-xl"></span>
                    <div class="relative z-10 bg-white rounded-xl p-4 text-start">
                        <h5 class="text-secondary text-2xl font-semibold capitalize">
                            {{ __('site.Rayeb milk') }}
                        </h5>
                        <p class="text-sm">
                            {{ __('site.solutions_1_desc') }}
                        </p>
                    </div>
                    <div class="absolute top-full w-full h-4 bg-red-500"></div>
                </div>

                <!-- product details -->
                <div class="product-details-item relative z-10 h-0 w-0 overflow-hidden">
                    <div class="py-12 bg-[#FAFAFA]">
                        <div class="container">
                            <h2
                                class="text-8xl [-webkit-text-stroke:0.5px_#999] text-transparent font-bold absolute right-[-10%] -mt-5">
                                {{ __('site.Products') }}
                            </h2>
                            <h5 class="text-secondary text-2xl font-semibold capitalize mb-5">
                                {{ __('site.Rayeb milk') }}
                            </h5>
                            <div class="grid lg:grid-cols-2">
                                <!-- start circl -->
                                <div class="product-details-item pb-16">
                                    <!-- start text -->
                                    <p class="text-start text-xl mb-16">
                                        {{ __('site.Applying Products To') }}
                                    </p>

                                    <!-- start circle -->
                                    <div
                                        class="w-[220px] h-[220px] lg:border border-primary flex gap-3 justify-center items-center rounded-full mx-auto relative">
                                        <img src="{{ asset('assets/img/solutions/solutions-2.png') }}" alt=""
                                            class="w-[50%] h-[50%] object-contain" />
                                        <div class="circle-solution lg:absolute lg:inset-[-15%]">
                                            <span class="lg:absolute">{{ __('site.Labnah') }}</span>
                                            <span class="lg:absolute">{{ __('site.Drinking Yogurt') }}</span>
                                            <span class="lg:absolute">{{ __('site.Spoonable Yogurt') }}</span>
                                            <span class="lg:absolute">{{ __('site.Stirred Yogurt') }}</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- start table -->
                                <div class="grid gap-5">
                                    <!-- start text -->
                                    <p class="text-start text-xl">
                                        {{ __('site.Health-conscious our experts choose for your Specific Needs') }}:
                                    </p>

                                    <!-- start table -->
                                    <table class="[&_td]:p-3 [&_td]:bg-primary/10 border-separate">
                                        <tbody>
                                            <tr>
                                                <td>{{ __('site.Clean Label') }}</td>
                                                <td>{{ __('site.Control Fermentation') }}</td>
                                                <td>{{ __('site.Foam Stability') }}</td>
                                            </tr>
                                            <tr>
                                                <td>{{ __('site.Fruit Preparation') }}</td>
                                                <td>{{ __('site.Mouthfeel') }}</td>
                                                <td>{{ __('site.Process Optimization') }}</td>
                                            </tr>
                                            <tr>
                                                <td>{{ __('site.Texture') }}</td>
                                                <td>{{ __('site.Shelf Life') }}</td>
                                                <td>{{ __('site.Preventions of Syneresis') }}</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <!-- start button -->
                                    <button
                                        class="close-view-product h-max flex gap-2 items-center justify-center py-3 px-7 rounded-3xl bg-secondary text-white text-lg font-bold w-[250px]">
                                        {{ __('site.Back To Products') }}
                                        <img src="{{ asset('assets/img/icons/play.svg') }}" alt="contact us icon" />
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- product item -->
            <div class="grid gap-7 text-center relative z-10 group product-item w-[140px]">
                <div
                    class="p-1 rounded-full overflow-hidden from-primary to-secondary bg-gradient-to-r bg-white w-full aspect-square">
                    <div class="w-full h-full p-4 bg-white rounded-full">
                        <img alt="solutions-img" class="w-full h-full object-cover rounded-full"
                            src="{{ asset('assets/img/solutions/solutions-3.png') }}" />
                    </div>
                </div>
                <h5 class="text-xl font-semibold capitalize">
                    {{ __('site.UHT') }}
                </h5>

                <!-- popup hover -->
                <div
                    class="absolute md:left-1/2 md:-translate-x-1/2 -mt-4 p-[1px] min-w-[300px] duration-300 overflow-hidden opacity-0 scale-0 group-hover:opacity-100 group-hover:scale-100 group-hover:-translate-y-full -z-10">
                    <span class="absolute inset-0 from-primary to-secondary bg-gradient-to-r rounded-xl"></span>
                    <div class="relative z-10 bg-white rounded-xl p-4 text-start">
                        <h5 class="text-secondary text-2xl font-semibold capitalize">
                            {{ __('site.UHT') }}
                        </h5>
                        <p class="text-sm">
                            {{ __('site.solutions_1_desc') }}
                        </p>
                    </div>
                    <div class="absolute top-full w-full h-4 bg-red-500"></div>
                </div>

                <!-- product details -->
                <div class="product-details-item relative z-10 h-0 w-0 overflow-hidden">
                    <div class="py-12 bg-[#FAFAFA]">
                        <div class="container">
                            <h2
                                class="text-8xl [-webkit-text-stroke:0.5px_#999] text-transparent font-bold absolute right-[-10%] -mt-5">
                                product
                            </h2>
                            <h5 class="text-secondary text-2xl font-semibold capitalize mb-5">
                                {{ __('site.UHT') }}
                            </h5>
                            <div class="grid lg:grid-cols-2">
                                <!-- start circl -->
                                <div class="product-details-item pb-16">
                                    <!-- start text -->
                                    <p class="text-start text-xl mb-16">
                                        {{ __('site.Applying Products To') }}
                                    </p>

                                    <!-- start circle -->
                                    <div
                                        class="w-[220px] h-[220px] lg:border border-primary flex gap-3 justify-center items-center rounded-full mx-auto relative">
                                        <img src="{{ asset('assets/img/solutions/solutions-3.png') }}" alt=""
                                            class="w-[50%] h-[50%] object-contain" />
                                        <div class="circle-solution lg:absolute lg:inset-[-15%]">
                                            <span class="lg:absolute">{{ __('site.Labnah') }}</span>
                                            <span class="lg:absolute">{{ __('site.Drinking Yogurt') }}</span>
                                            <span class="lg:absolute">{{ __('site.Spoonable Yogurt') }}</span>
                                            <span class="lg:absolute">{{ __('site.Stirred Yogurt') }}</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- start table -->
                                <div class="grid gap-5">
                                    <!-- start text -->
                                    <p class="text-start text-xl">
                                        {{ __('site.Health-conscious our experts choose for your Specific Needs') }}:
                                    </p>

                                    <!-- start table -->
                                    <table class="[&_td]:p-3 [&_td]:bg-primary/10 border-separate">
                                        <tbody>
                                            <tr>
                                                <td>{{ __('site.Clean Label') }}</td>
                                                <td>{{ __('site.Control Fermentation') }}</td>
                                                <td>{{ __('site.Foam Stability') }}</td>
                                            </tr>
                                            <tr>
                                                <td>{{ __('site.Fruit Preparation') }}</td>
                                                <td>{{ __('site.Mouthfeel') }}</td>
                                                <td>{{ __('site.Process Optimization') }}</td>
                                            </tr>
                                            <tr>
                                                <td>{{ __('site.Texture') }}</td>
                                                <td>{{ __('site.Shelf Life') }}</td>
                                                <td>{{ __('site.Preventions of Syneresis') }}</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <!-- start button -->
                                    <button
                                        class="close-view-product h-max flex gap-2 items-center justify-center py-3 px-7 rounded-3xl bg-secondary text-white text-lg font-bold w-[250px]">
                                        {{ __('site.Back To Products') }}
                                        <img src="{{ asset('assets/img/icons/play.svg') }}" alt="contact us icon" />
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- start view proucts -->
        <div class="view-product *:w-auto *:h-auto mb-5"></div>

    </div>

    <div class="product-group">

        <!-- start product -->
        <div class="flex flex-wrap justify-center gap-10 lg:gap-16 max-w-[600px] mx-auto">

            <!-- product item -->
            <div class="grid gap-7 text-center relative z-10 group product-item w-[140px]">
                <div
                    class="p-1 rounded-full overflow-hidden from-primary to-secondary bg-gradient-to-r bg-white w-full aspect-square">
                    <div class="w-full h-full p-4 bg-white rounded-full">
                        <img alt="solutions-img" class="w-full h-full object-cover rounded-full"
                            src="{{ asset('assets/img/solutions/solutions-4.png') }}" />
                    </div>
                </div>
                <h5 class="text-xl font-semibold capitalize">
                    {{ __('site.Cheese') }}
                </h5>

                <!-- popup hover -->
                <div
                    class="absolute md:left-1/2 md:-translate-x-1/2 -mt-4 p-[1px] min-w-[300px] duration-300 overflow-hidden opacity-0 scale-0 group-hover:opacity-100 group-hover:scale-100 group-hover:-translate-y-full -z-10">
                    <span class="absolute inset-0 from-primary to-secondary bg-gradient-to-r rounded-xl"></span>
                    <div class="relative z-10 bg-white rounded-xl p-4 text-start">
                        <h5 class="text-secondary text-2xl font-semibold capitalize">
                            {{ __('site.Cheese') }}
                        </h5>
                        <p class="text-sm">
                            {{ __('site.solutions_1_desc') }}
                        </p>
                    </div>
                    <div class="absolute top-full w-full h-4 bg-red-500"></div>
                </div>

                <!-- product details -->
                <div class="product-details-item relative z-10 h-0 w-0 overflow-hidden">
                    <div class="py-12 bg-[#FAFAFA]">
                        <div class="container">
                            <h2
                                class="text-8xl [-webkit-text-stroke:0.5px_#999] text-transparent font-bold absolute right-[-10%] -mt-5">
                                product
                            </h2>
                            <h5 class="text-secondary text-2xl font-semibold capitalize mb-5">
                                {{ __('site.Cheese') }}
                            </h5>
                            <div class="grid lg:grid-cols-2">
                                <!-- start circl -->
                                <div class="product-details-item pb-16">
                                    <!-- start text -->
                                    <p class="text-start text-xl mb-16">
                                        {{ __('site.Applying Products To') }}
                                    </p>

                                    <!-- start circle -->
                                    <div
                                        class="w-[220px] h-[220px] lg:border border-primary flex gap-3 justify-center items-center rounded-full mx-auto relative">
                                        <img src="{{ asset('assets/img/solutions/solutions-4.png') }}" alt=""
                                            class="w-[50%] h-[50%] object-contain" />
                                        <div class="circle-solution lg:absolute lg:inset-[-15%]">
                                            <span class="lg:absolute">{{ __('site.Labnah') }}</span>
                                            <span class="lg:absolute">{{ __('site.Drinking Yogurt') }}</span>
                                            <span class="lg:absolute">{{ __('site.Spoonable Yogurt') }}</span>
                                            <span class="lg:absolute">{{ __('site.Stirred Yogurt') }}</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- start table -->
                                <div class="grid gap-5">
                                    <!-- start text -->
                                    <p class="text-start text-xl">
                                        {{ __('site.Health-conscious our experts choose for your Specific Needs') }}:
                                    </p>

                                    <!-- start table -->
                                    <table class="[&_td]:p-3 [&_td]:bg-primary/10 border-separate">
                                        <tbody>
                                            <tr>
                                                <td>{{ __('site.Clean Label') }}</td>
                                                <td>{{ __('site.Control Fermentation') }}</td>
                                                <td>{{ __('site.Foam Stability') }}</td>
                                            </tr>
                                            <tr>
                                                <td>{{ __('site.Fruit Preparation') }}</td>
                                                <td>{{ __('site.Mouthfeel') }}</td>
                                                <td>{{ __('site.Process Optimization') }}</td>
                                            </tr>
                                            <tr>
                                                <td>{{ __('site.Texture') }}</td>
                                                <td>{{ __('site.Shelf Life') }}</td>
                                                <td>{{ __('site.Preventions of Syneresis') }}</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <!-- start button -->
                                    <button
                                        class="close-view-product h-max flex gap-2 items-center justify-center py-3 px-7 rounded-3xl bg-secondary text-white text-lg font-bold w-[250px]">
                                        {{ __('site.Back To Products') }}
                                        <img src="{{ asset('assets/img/icons/play.svg') }}" alt="contact us icon" />
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- product item -->
            <div class="grid gap-7 text-center relative z-10 group product-item w-[140px]">
                <div
                    class="p-1 rounded-full overflow-hidden from-primary to-secondary bg-gradient-to-r bg-white w-full aspect-square">
                    <div class="w-full h-full p-4 bg-white rounded-full">
                        <img alt="solutions-img" class="w-full h-full object-cover rounded-full"
                            src="{{ asset('assets/img/solutions/solutions-5.png') }}" />
                    </div>
                </div>
                <h5 class="text-xl font-semibold capitalize">
                    {{ __('site.Cream') }}
                </h5>

                <!-- popup hover -->
                <div
                    class="absolute md:left-1/2 md:-translate-x-1/2 -mt-4 p-[1px] min-w-[300px] duration-300 overflow-hidden opacity-0 scale-0 group-hover:opacity-100 group-hover:scale-100 group-hover:-translate-y-full -z-10">
                    <span class="absolute inset-0 from-primary to-secondary bg-gradient-to-r rounded-xl"></span>
                    <div class="relative z-10 bg-white rounded-xl p-4 text-start">
                        <h5 class="text-secondary text-2xl font-semibold capitalize">
                            {{ __('site.Cream') }}
                        </h5>
                        <p class="text-sm">
                            {{ __('site.solutions_1_desc') }}
                        </p>
                    </div>
                    <div class="absolute top-full w-full h-4 bg-red-500"></div>
                </div>

                <!-- product details -->
                <div class="product-details-item relative z-10 h-0 w-0 overflow-hidden">
                    <div class="py-12 bg-[#FAFAFA]">
                        <div class="container">
                            <h2
                                class="text-8xl [-webkit-text-stroke:0.5px_#999] text-transparent font-bold absolute right-[-10%] -mt-5">
                                product
                            </h2>
                            <h5 class="text-secondary text-2xl font-semibold capitalize mb-5">
                                {{ __('site.Cream') }}
                            </h5>
                            <div class="grid lg:grid-cols-2">
                                <!-- start circl -->
                                <div class="product-details-item pb-16">
                                    <!-- start text -->
                                    <p class="text-start text-xl mb-16">
                                        {{ __('site.Applying Products To') }}
                                    </p>

                                    <!-- start circle -->
                                    <div
                                        class="w-[220px] h-[220px] lg:border border-primary flex gap-3 justify-center items-center rounded-full mx-auto relative">
                                        <img src="{{ asset('assets/img/solutions/solutions-5.png') }}" alt=""
                                            class="w-[50%] h-[50%] object-contain" />
                                        <div class="circle-solution lg:absolute lg:inset-[-15%]">
                                            <span class="lg:absolute">{{ __('site.Labnah') }}</span>
                                            <span class="lg:absolute">{{ __('site.Drinking Yogurt') }}</span>
                                            <span class="lg:absolute">{{ __('site.Spoonable Yogurt') }}</span>
                                            <span class="lg:absolute">{{ __('site.Stirred Yogurt') }}</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- start table -->
                                <div class="grid gap-5">
                                    <!-- start text -->
                                    <p class="text-start text-xl">
                                        {{ __('site.Health-conscious our experts choose for your Specific Needs') }}:
                                    </p>

                                    <!-- start table -->
                                    <table class="[&_td]:p-3 [&_td]:bg-primary/10 border-separate">
                                        <tbody>
                                            <tr>
                                                <td>{{ __('site.Clean Label') }}</td>
                                                <td>{{ __('site.Control Fermentation') }}</td>
                                                <td>{{ __('site.Foam Stability') }}</td>
                                            </tr>
                                            <tr>
                                                <td>{{ __('site.Fruit Preparation') }}</td>
                                                <td>{{ __('site.Mouthfeel') }}</td>
                                                <td>{{ __('site.Process Optimization') }}</td>
                                            </tr>
                                            <tr>
                                                <td>{{ __('site.Texture') }}</td>
                                                <td>{{ __('site.Shelf Life') }}</td>
                                                <td>{{ __('site.Preventions of Syneresis') }}</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <!-- start button -->
                                    <button
                                        class="close-view-product h-max flex gap-2 items-center justify-center py-3 px-7 rounded-3xl bg-secondary text-white text-lg font-bold w-[250px]">
                                        {{ __('site.Back To Products') }}
                                        <img src="{{ asset('assets/img/icons/play.svg') }}" alt="contact us icon" />
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- product item -->
            <div class="grid gap-7 text-center relative z-10 group product-item w-[140px]">
                <div
                    class="p-1 rounded-full overflow-hidden from-primary to-secondary bg-gradient-to-r bg-white w-full aspect-square">
                    <div class="w-full h-full p-4 bg-white rounded-full">
                        <img alt="solutions-img" class="w-full h-full object-cover rounded-full"
                            src="{{ asset('assets/img/solutions/solutions-6.png') }}" />
                    </div>
                </div>
                <h5 class="text-xl font-semibold capitalize">
                    {{ __('site.Tahini') }}
                </h5>

                <!-- popup hover -->
                <div
                    class="absolute md:left-1/2 md:-translate-x-1/2 -mt-4 p-[1px] min-w-[300px] duration-300 overflow-hidden opacity-0 scale-0 group-hover:opacity-100 group-hover:scale-100 group-hover:-translate-y-full -z-10">
                    <span class="absolute inset-0 from-primary to-secondary bg-gradient-to-r rounded-xl"></span>
                    <div class="relative z-10 bg-white rounded-xl p-4 text-start">
                        <h5 class="text-secondary text-2xl font-semibold capitalize">
                            {{ __('site.Tahini') }}
                        </h5>
                        <p class="text-sm">
                            {{ __('site.solutions_1_desc') }}
                        </p>
                    </div>
                    <div class="absolute top-full w-full h-4 bg-red-500"></div>
                </div>

                <!-- product details -->
                <div class="product-details-item relative z-10 h-0 w-0 overflow-hidden">
                    <div class="py-12 bg-[#FAFAFA]">
                        <div class="container">
                            <h2
                                class="text-8xl [-webkit-text-stroke:0.5px_#999] text-transparent font-bold absolute right-[-10%] -mt-5">
                                product
                            </h2>
                            <h5 class="text-secondary text-2xl font-semibold capitalize mb-5">
                                {{ __('site.Tahini') }}
                            </h5>
                            <div class="grid lg:grid-cols-2">
                                <!-- start circl -->
                                <div class="product-details-item pb-16">
                                    <!-- start text -->
                                    <p class="text-start text-xl mb-16">
                                        {{ __('site.Applying Products To') }}
                                    </p>

                                    <!-- start circle -->
                                    <div
                                        class="w-[220px] h-[220px] lg:border border-primary flex gap-3 justify-center items-center rounded-full mx-auto relative">
                                        <img src="{{ asset('assets/img/solutions/solutions-6.png') }}" alt=""
                                            class="w-[50%] h-[50%] object-contain" />
                                        <div class="circle-solution lg:absolute lg:inset-[-15%]">
                                            <span class="lg:absolute">{{ __('site.Labnah') }}</span>
                                            <span class="lg:absolute">{{ __('site.Drinking Yogurt') }}</span>
                                            <span class="lg:absolute">{{ __('site.Spoonable Yogurt') }}</span>
                                            <span class="lg:absolute">{{ __('site.Stirred Yogurt') }}</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- start table -->
                                <div class="grid gap-5">
                                    <!-- start text -->
                                    <p class="text-start text-xl">
                                        {{ __('site.Health-conscious our experts choose for your Specific Needs') }}:
                                    </p>

                                    <!-- start table -->
                                    <table class="[&_td]:p-3 [&_td]:bg-primary/10 border-separate">
                                        <tbody>
                                            <tr>
                                                <td>{{ __('site.Clean Label') }}</td>
                                                <td>{{ __('site.Control Fermentation') }}</td>
                                                <td>{{ __('site.Foam Stability') }}</td>
                                            </tr>
                                            <tr>
                                                <td>{{ __('site.Fruit Preparation') }}</td>
                                                <td>{{ __('site.Mouthfeel') }}</td>
                                                <td>{{ __('site.Process Optimization') }}</td>
                                            </tr>
                                            <tr>
                                                <td>{{ __('site.Texture') }}</td>
                                                <td>{{ __('site.Shelf Life') }}</td>
                                                <td>{{ __('site.Preventions of Syneresis') }}</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <!-- start button -->
                                    <button
                                        class="close-view-product h-max flex gap-2 items-center justify-center py-3 px-7 rounded-3xl bg-secondary text-white text-lg font-bold w-[250px]">
                                        {{ __('site.Back To Products') }}
                                        <img src="{{ asset('assets/img/icons/play.svg') }}" alt="contact us icon" />
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- start view proucts -->
        <div class="view-product *:w-auto *:h-auto mb-5"></div>

    </div>

    <div class="product-group">

        <!-- start product -->
        <div class="flex flex-wrap justify-center gap-10 lg:gap-16 max-w-[600px] mx-auto">

            <!-- product item -->
            <div class="grid gap-7 text-center relative z-10 group product-item w-[140px]">
                <div
                    class="p-1 rounded-full overflow-hidden from-primary to-secondary bg-gradient-to-r bg-white w-full aspect-square">
                    <div class="w-full h-full p-4 bg-white rounded-full">
                        <img alt="solutions-img" class="w-full h-full object-cover rounded-full"
                            src="{{ asset('assets/img/solutions/solutions-7.png') }}" />
                    </div>
                </div>
                <h5 class="text-xl font-semibold capitalize">
                    {{ __('site.Nectar') }}
                </h5>

                <!-- popup hover -->
                <div
                    class="absolute md:left-1/2 md:-translate-x-1/2 -mt-4 p-[1px] min-w-[300px] duration-300 overflow-hidden opacity-0 scale-0 group-hover:opacity-100 group-hover:scale-100 group-hover:-translate-y-full -z-10">
                    <span class="absolute inset-0 from-primary to-secondary bg-gradient-to-r rounded-xl"></span>
                    <div class="relative z-10 bg-white rounded-xl p-4 text-start">
                        <h5 class="text-secondary text-2xl font-semibold capitalize">
                            {{ __('site.Nectar') }}
                        </h5>
                        <p class="text-sm">
                            {{ __('site.solutions_1_desc') }}
                        </p>
                    </div>
                    <div class="absolute top-full w-full h-4 bg-red-500"></div>
                </div>

                <!-- product details -->
                <div class="product-details-item relative z-10 h-0 w-0 overflow-hidden">
                    <div class="py-12 bg-[#FAFAFA]">
                        <div class="container">
                            <h2
                                class="text-8xl [-webkit-text-stroke:0.5px_#999] text-transparent font-bold absolute right-[-10%] -mt-5">
                                product
                            </h2>
                            <h5 class="text-secondary text-2xl font-semibold capitalize mb-5">
                                {{ __('site.Nectar') }}
                            </h5>
                            <div class="grid lg:grid-cols-2">
                                <!-- start circl -->
                                <div class="product-details-item pb-16">
                                    <!-- start text -->
                                    <p class="text-start text-xl mb-16">
                                        {{ __('site.Applying Products To') }}
                                    </p>

                                    <!-- start circle -->
                                    <div
                                        class="w-[220px] h-[220px] lg:border border-primary flex gap-3 justify-center items-center rounded-full mx-auto relative">
                                        <img src="{{ asset('assets/img/solutions/solutions-7.png') }}" alt=""
                                            class="w-[50%] h-[50%] object-contain" />
                                        <div class="circle-solution lg:absolute lg:inset-[-15%]">
                                            <span class="lg:absolute">{{ __('site.Labnah') }}</span>
                                            <span class="lg:absolute">{{ __('site.Drinking Yogurt') }}</span>
                                            <span class="lg:absolute">{{ __('site.Spoonable Yogurt') }}</span>
                                            <span class="lg:absolute">{{ __('site.Stirred Yogurt') }}</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- start table -->
                                <div class="grid gap-5">
                                    <!-- start text -->
                                    <p class="text-start text-xl">
                                        {{ __('site.Health-conscious our experts choose for your Specific Needs') }}:
                                    </p>

                                    <!-- start table -->
                                    <table class="[&_td]:p-3 [&_td]:bg-primary/10 border-separate">
                                        <tbody>
                                            <tr>
                                                <td>{{ __('site.Clean Label') }}</td>
                                                <td>{{ __('site.Control Fermentation') }}</td>
                                                <td>{{ __('site.Foam Stability') }}</td>
                                            </tr>
                                            <tr>
                                                <td>{{ __('site.Fruit Preparation') }}</td>
                                                <td>{{ __('site.Mouthfeel') }}</td>
                                                <td>{{ __('site.Process Optimization') }}</td>
                                            </tr>
                                            <tr>
                                                <td>{{ __('site.Texture') }}</td>
                                                <td>{{ __('site.Shelf Life') }}</td>
                                                <td>{{ __('site.Preventions of Syneresis') }}</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <!-- start button -->
                                    <button
                                        class="close-view-product h-max flex gap-2 items-center justify-center py-3 px-7 rounded-3xl bg-secondary text-white text-lg font-bold w-[250px]">
                                        {{ __('site.Back To Products') }}
                                        <img src="{{ asset('assets/img/icons/play.svg') }}" alt="contact us icon" />
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- product item -->
            <div class="grid gap-7 text-center relative z-10 group product-item w-[140px]">
                <div
                    class="p-1 rounded-full overflow-hidden from-primary to-secondary bg-gradient-to-r bg-white w-full aspect-square">
                    <div class="w-full h-full p-4 bg-white rounded-full">
                        <img alt="solutions-img" class="w-full h-full object-cover rounded-full"
                            src="{{ asset('assets/img/solutions/solutions-8.png') }}" />
                    </div>
                </div>
                <h5 class="text-xl font-semibold capitalize">
                    {{ __('site.Juice') }}
                </h5>

                <!-- popup hover -->
                <div
                    class="absolute md:left-1/2 md:-translate-x-1/2 -mt-4 p-[1px] min-w-[300px] duration-300 overflow-hidden opacity-0 scale-0 group-hover:opacity-100 group-hover:scale-100 group-hover:-translate-y-full -z-10">
                    <span class="absolute inset-0 from-primary to-secondary bg-gradient-to-r rounded-xl"></span>
                    <div class="relative z-10 bg-white rounded-xl p-4 text-start">
                        <h5 class="text-secondary text-2xl font-semibold capitalize">
                            {{ __('site.Juice') }}
                        </h5>
                        <p class="text-sm">
                            {{ __('site.solutions_1_desc') }}
                        </p>
                    </div>
                    <div class="absolute top-full w-full h-4 bg-red-500"></div>
                </div>

                <!-- product details -->
                <div class="product-details-item relative z-10 h-0 w-0 overflow-hidden">
                    <div class="py-12 bg-[#FAFAFA]">
                        <div class="container">
                            <h2
                                class="text-8xl [-webkit-text-stroke:0.5px_#999] text-transparent font-bold absolute right-[-10%] -mt-5">
                                product
                            </h2>
                            <h5 class="text-secondary text-2xl font-semibold capitalize mb-5">
                                {{ __('site.Juice') }}
                            </h5>
                            <div class="grid lg:grid-cols-2">
                                <!-- start circl -->
                                <div class="product-details-item pb-16">
                                    <!-- start text -->
                                    <p class="text-start text-xl mb-16">
                                        {{ __('site.Applying Products To') }}
                                    </p>

                                    <!-- start circle -->
                                    <div
                                        class="w-[220px] h-[220px] lg:border border-primary flex gap-3 justify-center items-center rounded-full mx-auto relative">
                                        <img src="{{ asset('assets/img/solutions/solutions-8.png') }}" alt=""
                                            class="w-[50%] h-[50%] object-contain" />
                                        <div class="circle-solution lg:absolute lg:inset-[-15%]">
                                            <span class="lg:absolute">{{ __('site.Labnah') }}</span>
                                            <span class="lg:absolute">{{ __('site.Drinking Yogurt') }}</span>
                                            <span class="lg:absolute">{{ __('site.Spoonable Yogurt') }}</span>
                                            <span class="lg:absolute">{{ __('site.Stirred Yogurt') }}</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- start table -->
                                <div class="grid gap-5">
                                    <!-- start text -->
                                    <p class="text-start text-xl">
                                        {{ __('site.Health-conscious our experts choose for your Specific Needs') }}:
                                    </p>

                                    <!-- start table -->
                                    <table class="[&_td]:p-3 [&_td]:bg-primary/10 border-separate">
                                        <tbody>
                                            <tr>
                                                <td>{{ __('site.Clean Label') }}</td>
                                                <td>{{ __('site.Control Fermentation') }}</td>
                                                <td>{{ __('site.Foam Stability') }}</td>
                                            </tr>
                                            <tr>
                                                <td>{{ __('site.Fruit Preparation') }}</td>
                                                <td>{{ __('site.Mouthfeel') }}</td>
                                                <td>{{ __('site.Process Optimization') }}</td>
                                            </tr>
                                            <tr>
                                                <td>{{ __('site.Texture') }}</td>
                                                <td>{{ __('site.Shelf Life') }}</td>
                                                <td>{{ __('site.Preventions of Syneresis') }}</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <!-- start button -->
                                    <button
                                        class="close-view-product h-max flex gap-2 items-center justify-center py-3 px-7 rounded-3xl bg-secondary text-white text-lg font-bold w-[250px]">
                                        {{ __('site.Back To Products') }}
                                        <img src="{{ asset('assets/img/icons/play.svg') }}" alt="contact us icon" />
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- product item -->
            <div class="grid gap-7 text-center relative z-10 group product-item w-[140px]">
                <div
                    class="p-1 rounded-full overflow-hidden from-primary to-secondary bg-gradient-to-r bg-white w-full aspect-square">
                    <div class="w-full h-full p-4 bg-white rounded-full">
                        <img alt="solutions-img" class="w-full h-full object-cover rounded-full"
                            src="{{ asset('assets/img/solutions/solutions-9.png') }}" />
                    </div>
                </div>
                <h5 class="text-xl font-semibold capitalize">
                    {{ __('site.Ice Cream') }}
                </h5>

                <!-- popup hover -->
                <div
                    class="absolute md:left-1/2 md:-translate-x-1/2 -mt-4 p-[1px] min-w-[300px] duration-300 overflow-hidden opacity-0 scale-0 group-hover:opacity-100 group-hover:scale-100 group-hover:-translate-y-full -z-10">
                    <span class="absolute inset-0 from-primary to-secondary bg-gradient-to-r rounded-xl"></span>
                    <div class="relative z-10 bg-white rounded-xl p-4 text-start">
                        <h5 class="text-secondary text-2xl font-semibold capitalize">
                            {{ __('site.Ice Cream') }}
                        </h5>
                        <p class="text-sm">
                            {{ __('site.solutions_1_desc') }}
                        </p>
                    </div>
                    <div class="absolute top-full w-full h-4 bg-red-500"></div>
                </div>

                <!-- product details -->
                <div class="product-details-item relative z-10 h-0 w-0 overflow-hidden">
                    <div class="py-12 bg-[#FAFAFA]">
                        <div class="container">
                            <h2
                                class="text-8xl [-webkit-text-stroke:0.5px_#999] text-transparent font-bold absolute right-[-10%] -mt-5">
                                product
                            </h2>
                            <h5 class="text-secondary text-2xl font-semibold capitalize mb-5">
                                {{ __('site.Ice Cream') }}
                            </h5>
                            <div class="grid lg:grid-cols-2">
                                <!-- start circl -->
                                <div class="product-details-item pb-16">
                                    <!-- start text -->
                                    <p class="text-start text-xl mb-16">
                                        {{ __('site.Applying Products To') }}
                                    </p>

                                    <!-- start circle -->
                                    <div
                                        class="w-[220px] h-[220px] lg:border border-primary flex gap-3 justify-center items-center rounded-full mx-auto relative">
                                        <img src="{{ asset('assets/img/solutions/solutions-9.png') }}" alt=""
                                            class="w-[50%] h-[50%] object-contain" />
                                        <div class="circle-solution lg:absolute lg:inset-[-15%]">
                                            <span class="lg:absolute">{{ __('site.Labnah') }}</span>
                                            <span class="lg:absolute">{{ __('site.Drinking Yogurt') }}</span>
                                            <span class="lg:absolute">{{ __('site.Spoonable Yogurt') }}</span>
                                            <span class="lg:absolute">{{ __('site.Stirred Yogurt') }}</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- start table -->
                                <div class="grid gap-5">
                                    <!-- start text -->
                                    <p class="text-start text-xl">
                                        {{ __('site.Health-conscious our experts choose for your Specific Needs') }}:
                                    </p>

                                    <!-- start table -->
                                    <table class="[&_td]:p-3 [&_td]:bg-primary/10 border-separate">
                                        <tbody>
                                            <tr>
                                                <td>{{ __('site.Clean Label') }}</td>
                                                <td>{{ __('site.Control Fermentation') }}</td>
                                                <td>{{ __('site.Foam Stability') }}</td>
                                            </tr>
                                            <tr>
                                                <td>{{ __('site.Fruit Preparation') }}</td>
                                                <td>{{ __('site.Mouthfeel') }}</td>
                                                <td>{{ __('site.Process Optimization') }}</td>
                                            </tr>
                                            <tr>
                                                <td>{{ __('site.Texture') }}</td>
                                                <td>{{ __('site.Shelf Life') }}</td>
                                                <td>{{ __('site.Preventions of Syneresis') }}</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <!-- start button -->
                                    <button
                                        class="close-view-product h-max flex gap-2 items-center justify-center py-3 px-7 rounded-3xl bg-secondary text-white text-lg font-bold w-[250px]">
                                        {{ __('site.Back To Products') }}
                                        <img src="{{ asset('assets/img/icons/play.svg') }}" alt="contact us icon" />
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- start view proucts -->
        <div class="view-product *:w-auto *:h-auto mb-5"></div>

    </div>

    <div class="product-group">

        <!-- start product -->
        <div class="flex flex-wrap justify-center gap-10 lg:gap-16 max-w-[600px] mx-auto">

            <!-- product item -->
            <div class="grid gap-7 text-center relative z-10 group product-item w-[140px]">
                <div
                    class="p-1 rounded-full overflow-hidden from-primary to-secondary bg-gradient-to-r bg-white w-full aspect-square">
                    <div class="w-full h-full p-4 bg-white rounded-full">
                        <img alt="solutions-img" class="w-full h-full object-cover rounded-full"
                            src="{{ asset('assets/img/solutions/solutions-10.png') }}" />
                    </div>
                </div>
                <h5 class="text-xl font-semibold capitalize">
                    {{ __('site.Baked Goods') }}
                </h5>

                <!-- popup hover -->
                <div
                    class="absolute md:left-1/2 md:-translate-x-1/2 -mt-4 p-[1px] min-w-[300px] duration-300 overflow-hidden opacity-0 scale-0 group-hover:opacity-100 group-hover:scale-100 group-hover:-translate-y-full -z-10">
                    <span class="absolute inset-0 from-primary to-secondary bg-gradient-to-r rounded-xl"></span>
                    <div class="relative z-10 bg-white rounded-xl p-4 text-start">
                        <h5 class="text-secondary text-2xl font-semibold capitalize">
                            {{ __('site.Baked Goods') }}
                        </h5>
                        <p class="text-sm">
                            {{ __('site.solutions_1_desc') }}
                        </p>
                    </div>
                    <div class="absolute top-full w-full h-4 bg-red-500"></div>
                </div>

                <!-- product details -->
                <div class="product-details-item relative z-10 h-0 w-0 overflow-hidden">
                    <div class="py-12 bg-[#FAFAFA]">
                        <div class="container">
                            <h2
                                class="text-8xl [-webkit-text-stroke:0.5px_#999] text-transparent font-bold absolute right-[-10%] -mt-5">
                                product
                            </h2>
                            <h5 class="text-secondary text-2xl font-semibold capitalize mb-5">
                                {{ __('site.Baked Goods') }}
                            </h5>
                            <div class="grid lg:grid-cols-2">
                                <!-- start circl -->
                                <div class="product-details-item pb-16">
                                    <!-- start text -->
                                    <p class="text-start text-xl mb-16">
                                        {{ __('site.Applying Products To') }}
                                    </p>

                                    <!-- start circle -->
                                    <div
                                        class="w-[220px] h-[220px] lg:border border-primary flex gap-3 justify-center items-center rounded-full mx-auto relative">
                                        <img src="{{ asset('assets/img/solutions/solutions-10.png') }}" alt=""
                                            class="w-[50%] h-[50%] object-contain" />
                                        <div class="circle-solution lg:absolute lg:inset-[-15%]">
                                            <span class="lg:absolute">{{ __('site.Labnah') }}</span>
                                            <span class="lg:absolute">{{ __('site.Drinking Yogurt') }}</span>
                                            <span class="lg:absolute">{{ __('site.Spoonable Yogurt') }}</span>
                                            <span class="lg:absolute">{{ __('site.Stirred Yogurt') }}</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- start table -->
                                <div class="grid gap-5">
                                    <!-- start text -->
                                    <p class="text-start text-xl">
                                        {{ __('site.Health-conscious our experts choose for your Specific Needs') }}:
                                    </p>

                                    <!-- start table -->
                                    <table class="[&_td]:p-3 [&_td]:bg-primary/10 border-separate">
                                        <tbody>
                                            <tr>
                                                <td>{{ __('site.Clean Label') }}</td>
                                                <td>{{ __('site.Control Fermentation') }}</td>
                                                <td>{{ __('site.Foam Stability') }}</td>
                                            </tr>
                                            <tr>
                                                <td>{{ __('site.Fruit Preparation') }}</td>
                                                <td>{{ __('site.Mouthfeel') }}</td>
                                                <td>{{ __('site.Process Optimization') }}</td>
                                            </tr>
                                            <tr>
                                                <td>{{ __('site.Texture') }}</td>
                                                <td>{{ __('site.Shelf Life') }}</td>
                                                <td>{{ __('site.Preventions of Syneresis') }}</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <!-- start button -->
                                    <button
                                        class="close-view-product h-max flex gap-2 items-center justify-center py-3 px-7 rounded-3xl bg-secondary text-white text-lg font-bold w-[250px]">
                                        {{ __('site.Back To Products') }}
                                        <img src="{{ asset('assets/img/icons/play.svg') }}" alt="contact us icon" />
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- product item -->
            <div class="grid gap-7 text-center relative z-10 group product-item w-[140px]">
                <div
                    class="p-1 rounded-full overflow-hidden from-primary to-secondary bg-gradient-to-r bg-white w-full aspect-square">
                    <div class="w-full h-full p-4 bg-white rounded-full">
                        <img alt="solutions-img" class="w-full h-full object-cover rounded-full"
                            src="{{ asset('assets/img/solutions/solutions-11.png') }}" />
                    </div>
                </div>
                <h5 class="text-xl font-semibold capitalize">
                    {{ __('site.Tomato Sauce') }}
                </h5>

                <!-- popup hover -->
                <div
                    class="absolute md:left-1/2 md:-translate-x-1/2 -mt-4 p-[1px] min-w-[300px] duration-300 overflow-hidden opacity-0 scale-0 group-hover:opacity-100 group-hover:scale-100 group-hover:-translate-y-full -z-10">
                    <span class="absolute inset-0 from-primary to-secondary bg-gradient-to-r rounded-xl"></span>
                    <div class="relative z-10 bg-white rounded-xl p-4 text-start">
                        <h5 class="text-secondary text-2xl font-semibold capitalize">
                            {{ __('site.Tomato Sauce') }}
                        </h5>
                        <p class="text-sm">
                            {{ __('site.solutions_1_desc') }}
                        </p>
                    </div>
                    <div class="absolute top-full w-full h-4 bg-red-500"></div>
                </div>

                <!-- product details -->
                <div class="product-details-item relative z-10 h-0 w-0 overflow-hidden">
                    <div class="py-12 bg-[#FAFAFA]">
                        <div class="container">
                            <h2
                                class="text-8xl [-webkit-text-stroke:0.5px_#999] text-transparent font-bold absolute right-[-10%] -mt-5">
                                product
                            </h2>
                            <h5 class="text-secondary text-2xl font-semibold capitalize mb-5">
                                {{ __('site.Tomato Sauce') }}
                            </h5>
                            <div class="grid lg:grid-cols-2">
                                <!-- start circl -->
                                <div class="product-details-item pb-16">
                                    <!-- start text -->
                                    <p class="text-start text-xl mb-16">
                                        {{ __('site.Applying Products To') }}
                                    </p>

                                    <!-- start circle -->
                                    <div
                                        class="w-[220px] h-[220px] lg:border border-primary flex gap-3 justify-center items-center rounded-full mx-auto relative">
                                        <img src="{{ asset('assets/img/solutions/solutions-11.png') }}" alt=""
                                            class="w-[50%] h-[50%] object-contain" />
                                        <div class="circle-solution lg:absolute lg:inset-[-15%]">
                                            <span class="lg:absolute">{{ __('site.Labnah') }}</span>
                                            <span class="lg:absolute">{{ __('site.Drinking Yogurt') }}</span>
                                            <span class="lg:absolute">{{ __('site.Spoonable Yogurt') }}</span>
                                            <span class="lg:absolute">{{ __('site.Stirred Yogurt') }}</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- start table -->
                                <div class="grid gap-5">
                                    <!-- start text -->
                                    <p class="text-start text-xl">
                                        {{ __('site.Health-conscious our experts choose for your Specific Needs') }}:
                                    </p>

                                    <!-- start table -->
                                    <table class="[&_td]:p-3 [&_td]:bg-primary/10 border-separate">
                                        <tbody>
                                            <tr>
                                                <td>{{ __('site.Clean Label') }}</td>
                                                <td>{{ __('site.Control Fermentation') }}</td>
                                                <td>{{ __('site.Foam Stability') }}</td>
                                            </tr>
                                            <tr>
                                                <td>{{ __('site.Fruit Preparation') }}</td>
                                                <td>{{ __('site.Mouthfeel') }}</td>
                                                <td>{{ __('site.Process Optimization') }}</td>
                                            </tr>
                                            <tr>
                                                <td>{{ __('site.Texture') }}</td>
                                                <td>{{ __('site.Shelf Life') }}</td>
                                                <td>{{ __('site.Preventions of Syneresis') }}</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <!-- start button -->
                                    <button
                                        class="close-view-product h-max flex gap-2 items-center justify-center py-3 px-7 rounded-3xl bg-secondary text-white text-lg font-bold w-[250px]">
                                        {{ __('site.Back To Products') }}
                                        <img src="{{ asset('assets/img/icons/play.svg') }}" alt="contact us icon" />
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- start view proucts -->
        <div class="view-product *:w-auto *:h-auto mb-5"></div>

    </div>

</section>
