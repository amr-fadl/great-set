<!-- Navbar -->
<nav class="bg-white shadow-md">
    <div class="container">
        <div class="container mx-auto flex justify-between items-center py-4 px-6">
            <!-- Logo -->
            <div class="flex items-center">
                <img alt="site logo" src="{{ asset('assets/img/logo/logo.png') }}" class="h-16 w-16 object-contain" />
            </div>

            <!-- Menu -->
            <div class="relative max-md:ms-auto max-md:me-2">
                <div class="menu-button md:hidden">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </div>

                <div
                    class="menu rounded-md max-md:bg-white max-md:absolute max-md:top-full max-md:end-0 max-md:p-4 max-md:z-10 max-md:h-0 [&.active]:h-auto max-md:opacity-0 [&.active]:opacity-100 overflow-hidden duration-300">
                    <ul
                        class="flex max-md:flex-col max-md:min-w-[200px] max-md:gap-3 gap-7 [&_*]:text-neutral *:text-lg [&_*:hover]:text-primary [&_*]:capitalize">
                        <li><a href="#banner">{{ __('site.Home') }}</a></li>
                        <li><a href="#products">{{ __('site.Our Products') }}</a></li>
                        <li><a href="#solutions">{{ __('site.Our Solutions') }}</a></li>
                        <li><a href="#contact">{{ __('site.Contact Us') }}</a></li>
                    </ul>
                </div>
            </div>

            <!-- Language Selector -->
            <div>
                <a href="{{ LaravelLocalization::getLocalizedURL(App::getLocale() == 'ar' ? 'en' : 'ar', null, [], true) }}"
                    class="flex items-center justify-center border border-primary text-neutral font-bold text-lg rounded-full h-[42px] w-[42px] hover:bg-primary">
                    {{ App::getLocale() == 'ar' ? 'EN' : 'AR' }}
                </a>
            </div>
        </div>
    </div>
</nav>
