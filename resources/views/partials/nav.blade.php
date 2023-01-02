<section id="#" class="absolute z-0 h-20 w-full invisible opacity-0"></section>
    <header data-header class="w-full lg:py-4 sticky  z-50  top-0 transition">
        <div class="mx-auto w-full max-w-screen-lg lg:max-w-screen-xl lg:px-6">
            <nav class="flex items-center justify-between">
                <!-- logo app -->
                <div data-header-sub class="flex items-center transition justify-between gap-2 w-full lg:w-max px-5 sm:px-10 md:px-12 lg:px-0 lg:bg-transparent h-full py-4 lg:py-0 relative z-200">
                    <a href="#" title="logo" class="text-xl sm:text-2xl flex items-center font-bold text-gray-dark">
                        <img src="{{asset('images/logo.png')}}" width="100" alt="fastFood" class="w-auto h-12">
                    </a>
                    <div class="border-l pl-2 border-gray-200 flex lg:hidden min-w-max">
                        <button data-toggle-nav class="relative w-10 h-auto p-2">
                            <span class="sr-only">Open Nav</span>
                            <div id="line-1"
                                class="mx-auto h-0.5 w-6 rounded bg-title transition duration-300"></div>
                            <div id="line-2"
                                class="mx-auto mt-2 h-0.5 w-6 rounded bg-title transition duration-300">
                            </div>
                        </button>
                    </div>
                </div>
                <!-- logo app -->

                <!-- navigation -->
                <div data-nav-bar class="top-full -translate-y-40 transition-all ease-linear duration-300 lg:-translate-y-0 invisible lg:visible w-full gap-8 lg:py-0 lg:pb-0 pb-8 py-5 lg:gap-4 lg:top-0 flex-col lg:flex-row px-5 sm:px-10 md:px-12 lg:px-0 bg-white p lg:bg-transparent z-100  flex items-center lg:relative absolute lg:w-full lg:justify-between">
                    <ul class="flex lg:text-left text-center flex-col lg:flex-row gap-4 w-full lg:gap-5 lg:items-center lg:w-full lg:justify-center">
                        <li data-nav-item class="flex w-full lg:w-max">
                            <a data-nav-link data-target="#" href="#" class="navlink active-link">
                                Accueil
                            </a>
                        </li>

                        <li data-nav-item class="flex w-full lg:w-max">
                            <a data-nav-link data-target="about" href="#about" class="navlink">
                                A propos
                            </a>
                        </li>

                        <li data-nav-item class="flex w-full lg:w-max">
                            <a data-nav-link data-target="categories" href="#categories" class="navlink">
                                Categories
                            </a>
                        </li>

                        <li data-nav-item class="flex w-full lg:w-max">
                            <a data-nav-link data-target="menus" href="#menus" class="navlink">
                                Menus
                            </a>
                        </li>
                        
                        <li data-nav-item class="flex w-full lg:w-max">
                            <a data-nav-link data-target="services" href="#services" class="navlink">
                                Services
                            </a>
                        </li>

                        <li data-nav-item class="flex w-full lg:w-max">
                            <a data-nav-link data-target="why-us" href="#why-us" class="navlink">
                                Avantages
                            </a>
                        </li>
                    </ul>
                    <!-- button left -->
                    <div class="flex lg:min-w-max sm:w-max w-full">
                        <a href="#contact-us"
                            class="relative px-6 py-3 w-full sm:w-max text-center
                            after:absolute after:inset-0 after:z-0 after:bg-primary after:rounded-md after:transition after:ease-linear after:duration-300 hover:after:scale-105 focus:after:scale-100">
                            <span class="text-white relative z-10">Nous Contacter</span>
                        </a>
                    </div>
                </div>
                <!-- navigation -->

                <!-- overlay nav -->
                <div data-overlay class="fixed bg-gray-dark bg-opacity-70 backdrop-filter backdrop-blur-sm inset-0 z-50 lg:hidden invisible opacity-0 transition-all ease-linear duration-300"></div>
                <!-- overlay nav -->
            </nav>
        </div>
    </header>