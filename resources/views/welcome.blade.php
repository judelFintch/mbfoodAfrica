<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="./favicon.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="description" />
    <title>Restaurant - Home</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/index.css')}}">
</head>

<body class="overflow-x-hidden">

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

    <!-- <div scroll-to-top-box class="fixed z-50 bottom-3 right-3 hiddenScrollTop transition-all duration-300 bg-opacity-80 ease-linear">
        <a href="#" class="bg-primary block transition hover:bg-opacity-90 text-white p-3 rounded-md">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                <path d="M9.25 13.25a.75.75 0 001.5 0V4.636l2.955 3.129a.75.75 0 001.09-1.03l-4.25-4.5a.75.75 0 00-1.09 0l-4.25 4.5a.75.75 0 101.09 1.03L9.25 4.636v8.614z" />
                <path d="M3.5 12.75a.75.75 0 00-1.5 0v2.5A2.75 2.75 0 004.75 18h10.5A2.75 2.75 0 0018 15.25v-2.5a.75.75 0 00-1.5 0v2.5c0 .69-.56 1.25-1.25 1.25H4.75c-.69 0-1.25-.56-1.25-1.25v-2.5z" />
            </svg>              
        </a>
    </div> -->

    <!-- hero section -->
    <section id="#" class="relative">
        <div class="mx-auto w-full max-w-screen-lg lg:max-w-screen-xl px-5 sm:px-10 md:px-12 lg:px-6">
            <div class="grid lg:items-center lg:grid-cols-2 gap-10 lg:gap-12">
                <div
                    class="relative z-20 lg:pb-14 pt-12 lg:pt-24 flex flex-col lg:items-start mx-auto max-w-2xl w-auto lg:max-w-none gap-8 lg:mx-0 items-center text-center lg:text-left">
                    <div class="flex flex-col gap-5 items-center lg:items-start">
                        <h1
                            class="text-4xl text-center leading-snug lg:text-left md:text-5xl lg:text-6xl font-bold text-title">
                            Trouvez les <div
                                class="relative inline-block w-max before:absolute before:bg-primary before:inset-0 before:skew-x-6 before:rounded-md ">
                                <span class="relative text-white">meilleurs</span>
                            </div> plats de la ville
                        </h1>
                        <p class="text-gray-500 line-clamp-3">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti iusto repellendus itaque
                            ipsa saepe perferendis iste temporibus mollitia minus possimus perspiciatis, aut animi ea
                            enim odio culpa nostrum. Sed, molestiae.
                        </p>
                    </div>
                    <div class="flex w-full sm:flex-row gap-5 flex-col sm:w-max justify-center lg:justify-start">
                        <a href="#contact-us"
                            class="relative sm:w-max w-full px-6 py-3 
                        after:absolute after:inset-0 after:z-0 after:bg-primary after:rounded-md after:transition after:ease-linear after:duration-300 hover:after:scale-105 focus:after:scale-100">
                            <span class="text-white relative z-10">Trouver mon plat</span>
                        </a>

                        <a href="#"
                            class="relative sm:w-max w-full px-6 py-3 text-primary gap-4 
                        after:absolute after:inset-0 after:z-0 after:bg-transparent hover:after:bg-primary/10 after:rounded-md after:transition after:ease-linear after:duration-300 hover:after:scale-105 focus:after:scale-100">
                            <div class="relative z-10 flex flex-nowrap items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15.91 11.672a.375.375 0 010 .656l-5.603 3.113a.375.375 0 01-.557-.328V8.887c0-.286.307-.466.557-.327l5.603 3.112z" />
                                </svg>
                                Voir une demo
                            </div>
                        </a>
                    </div>
                </div>
                <div class="relative lg:flex lg:h-full lg:static lg:items-end justify-center">
                    
                    
                    <div class="relative flex h-full lg:pt-4 items-center justify-center">
                        <img src="images/Image.png" width="400" alt="hungry young girl" class=" lg:w-auto lg:h-full flex relative">
                        <div class="absolute -bottom-3 -right-3 p-2 bg-white rounded-lg shadow-lg shadow-primary/10">
                            <div class="flex items-center gap-3">
                                <div class="flex w-16 h-16 rounded-md overflow-hidden">
                                    <img src="images/food1.webp" alt="product" class="w-full h-full object-cover" width="200">
                                </div>
                                <div class="flex flex-col">
                                    <h3 class="text-title font-semibold ">Product name</h3>
                                    <span class="text-orange-600">&starf;&starf;&starf;&starf;&starf;</span>
                                    <p class="block text-gray-dark"><span class="text-primary">32</span> $</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- hero section -->


    <!-- categories section -->
    <section id="categories" class="pt-24 lg:pt-32">
        <div class="mx-auto w-full max-w-screen-lg lg:max-w-screen-xl px-5 sm:px-10 md:px-12 lg:px-6">
            <div class="flex flex-col gap-7">
                <div class="flex flex-col text-center items-center mx-auto max-w-xl">
                    <span class="font-bold text-lg text-primary">- Categories</span>
                    <h2 class="text-4xl lg:text-4xl font-bold text-title">
                        Les meilleurs plats <div
                            class="w-max inline-block relative before:absolute before:inset-0 before:bg-primary p-0.5 before:skew-x-6 before:rounded-md ">
                            <span class="relative text-white">Lorem ips</span>
                        </div> en RDC
                    </h2>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-3 items-stretch gap-4 sm:gap-8 lg:gap-10">
                    <div class="p-4 rounded-md group bg-cover bg-center bg-no-repeat"
                        style="background-image: url(images/food1.webp);">
                        <div
                            class="opacity-0 rounded-md transition h-full ease-linear group-hover:opacity-100 bg-primary bg-opacity-60 w-full flex items-center justify-center py-12 md:py-16 lg:py-20 px-4">
                            <div class="text-center">
                                <h2 class="text-lg font-semibold sm:text-xl text-white">Category name</h2>
                            </div>
                        </div>
                    </div>

                    <div class="p-4 rounded-md group bg-cover bg-center bg-no-repeat"
                        style="background-image: url(images/food1.webp);">
                        <div
                            class="opacity-0 rounded-md transition h-full ease-linear group-hover:opacity-100 bg-primary bg-opacity-60 w-full flex items-center justify-center py-12 md:py-16 lg:py-20 px-4">
                            <div class="text-center">
                                <h2 class="text-lg font-semibold sm:text-xl text-white">Category name</h2>
                            </div>
                        </div>
                    </div>

                    <div class="p-4 rounded-md group bg-cover bg-center bg-no-repeat"
                        style="background-image: url(images/food1.webp);">
                        <div
                            class="opacity-0 rounded-md transition h-full ease-linear group-hover:opacity-100 bg-primary bg-opacity-60 w-full flex items-center justify-center py-12 md:py-16 lg:py-20 px-4">
                            <div class="text-center">
                                <h2 class="text-lg font-semibold sm:text-xl text-white">Category name</h2>
                            </div>
                        </div>
                    </div>

                    <div class="p-4 rounded-md group bg-cover bg-center bg-no-repeat"
                        style="background-image: url(images/food1.webp);">
                        <div
                            class="opacity-0 rounded-md transition h-full ease-linear group-hover:opacity-100 bg-primary bg-opacity-60 w-full flex items-center justify-center py-12 md:py-16 lg:py-20 px-4">
                            <div class="text-center">
                                <h2 class="text-lg font-semibold sm:text-xl text-white">Category name</h2>
                            </div>
                        </div>
                    </div>


                    <div class="p-4 rounded-md group bg-cover bg-center bg-no-repeat"
                        style="background-image: url(images/food1.webp);">
                        <div
                            class="opacity-0 rounded-md transition h-full ease-linear group-hover:opacity-100 bg-primary bg-opacity-60 w-full flex items-center justify-center py-12 md:py-16 lg:py-20 px-4">
                            <div class="text-center">
                                <h2 class="text-lg font-semibold sm:text-xl text-white">Category name</h2>
                            </div>
                        </div>
                    </div>


                    <div class="p-4 rounded-md group bg-cover bg-center bg-no-repeat"
                        style="background-image: url(images/food1.webp);">
                        <div
                            class="opacity-0 rounded-md transition h-full ease-linear group-hover:opacity-100 bg-primary bg-opacity-60 w-full flex items-center justify-center py-12 md:py-16 lg:py-20 px-4">
                            <div class="text-center">
                                <h2 class="text-lg font-semibold sm:text-xl text-white">Category name</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- categories section -->


    <!-- menus section -->
    <section id="menus" class="pt-24 lg:pt-32">
        <div class="mx-auto w-full max-w-screen-lg lg:max-w-screen-xl px-5 sm:px-10 md:px-12 lg:px-6">
            <div class="flex flex-col gap-7">
                <div class="flex flex-col text-center items-center mx-auto max-w-xl">
                    <span class="font-bold text-lg text-primary">- Menus</span>
                    <h2 class="text-4xl lg:text-4xl font-bold text-title">
                        Les meilleurs plats <div
                            class="w-max inline-block relative before:absolute before:inset-0 before:bg-primary p-0.5 before:skew-x-6 before:rounded-md ">
                            <span class="relative text-white">Lorem ips</span>
                        </div>
                    </h2>
                </div>
                <div class="flex flex-col gap-10">
                    <div class="flex justify-center">
                        <div class="flex w-max p-1 rounded-md border-2 border-gray-100 bg-primary/10">
                            <div class="flex items-center gap-2 flex-wrap relative">
                                <span data-indicator class="indicator"></span>
                                <button data-filter-btn data-target="all" class="relative px-5 py-2 rounded-md min-w-maxtext-gray-dark">
                                    <span class="relative  ">Tout</span>
                                </button>
                                <button data-filter-btn data-target="category1" class="relative px-5 py-2 rounded-md min-w-max text-gray-dark">
                                    <span class="relative">Category 1</span>
                                </button>
                                <button data-filter-btn data-target="category2" class="relative px-5 py-2 rounded-md min-w-max text-gray-dark">
                                    <span class="relative">Category 2</span>
                                </button>
                                <button data-filter-btn data-target="category3" class="relative px-5 py-2 rounded-md min-w-max text-gray-dark">
                                    <span class="relative">Category 3</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div data-products class="grid sm:grid-cols-2 md:grid-cols-3 items-stretch gap-6 sm:gap-8 lg:gap-10">
                        <div data-category="category1" data-product class="bg-white border border-gray-100 shadow-xl rounded-lg shadow-primary/5">
                            <div class="w-full rounded-t-lg rounded-br-2xl overflow-hidden bg-primary/10 h-44 sm:h-48 lg:h-64">
                                <img src="images/food1.webp" width="400" alt="img prod" class="w-full h-full object-cover">
                            </div>
                            <div class="flex flex-col px-5 py-5">
                                <span class="w-max p-0.5 px-2 rounded-full text-orange-600 bg-primary/10">
                                    &starf;&starf;&starf;&starf;&starf;
                                </span>
                                <h2 class="text-title font-semibold text-xl md:text-2xl">Product name 1</h2>
                                <p class="line-clamp-2 text-gray-500 pt-3">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                </p>
                                <div class="flex justify-between pt-4">
                                    <div class="text-primary font-semibold text-2xl">
                                        <span>12</span> $
                                    </div>
                                    <div class="">
                                        <button class="p-2 px-4 bg-primary rounded-md text-white flex items-center gap-2 text-xs sm:text-sm ">
                                            <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4" width="16" height="16">
                                                <path d="M1 1.75A.75.75 0 011.75 1h1.628a1.75 1.75 0 011.734 1.51L5.18 3a65.25 65.25 0 0113.36 1.412.75.75 0 01.58.875 48.645 48.645 0 01-1.618 6.2.75.75 0 01-.712.513H6a2.503 2.503 0 00-2.292 1.5H17.25a.75.75 0 010 1.5H2.76a.75.75 0 01-.748-.807 4.002 4.002 0 012.716-3.486L3.626 2.716a.25.25 0 00-.248-.216H1.75A.75.75 0 011 1.75zM6 17.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM15.5 19a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" />
                                            </svg> 
                                            Commander                                        
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div data-category="category1" data-product class="bg-white border border-gray-100 shadow-xl rounded-lg shadow-primary/5">
                            <div class="w-full rounded-t-lg rounded-br-2xl overflow-hidden bg-primary/10 h-44 sm:h-48 lg:h-64">
                                <img src="images/food1.webp" width="400" alt="img prod" class="w-full h-full object-cover">
                            </div>
                            <div class="flex flex-col px-5 py-5">
                                <span class="w-max p-0.5 px-2 rounded-full text-orange-600 bg-primary/10">
                                    &starf;&starf;&starf;&starf;&starf;
                                </span>
                                <h2 class="text-title font-semibold text-xl md:text-2xl">Product name 1</h2>
                                <p class="line-clamp-2 text-gray-500 pt-3">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                </p>
                                <div class="flex justify-between pt-4">
                                    <div class="text-primary font-semibold text-2xl">
                                        <span>12</span> $
                                    </div>
                                    <div class="">
                                        <button class="p-2 px-4 bg-primary rounded-md text-white flex items-center gap-2 text-xs sm:text-sm ">
                                            <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4" width="16" height="16">
                                                <path d="M1 1.75A.75.75 0 011.75 1h1.628a1.75 1.75 0 011.734 1.51L5.18 3a65.25 65.25 0 0113.36 1.412.75.75 0 01.58.875 48.645 48.645 0 01-1.618 6.2.75.75 0 01-.712.513H6a2.503 2.503 0 00-2.292 1.5H17.25a.75.75 0 010 1.5H2.76a.75.75 0 01-.748-.807 4.002 4.002 0 012.716-3.486L3.626 2.716a.25.25 0 00-.248-.216H1.75A.75.75 0 011 1.75zM6 17.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM15.5 19a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" />
                                            </svg> 
                                            Commander                                        
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div data-category="category2" data-product class="bg-white border border-gray-100 shadow-xl rounded-lg shadow-primary/5">
                            <div class="w-full rounded-t-lg rounded-br-2xl overflow-hidden bg-primary/10 h-44 sm:h-48 lg:h-64">
                                <img src="images/food1.webp" width="400" alt="img prod" class="w-full h-full object-cover">
                            </div>
                            <div class="flex flex-col px-5 py-5">
                                <span class="w-max p-0.5 px-2 rounded-full text-orange-600 bg-primary/10">
                                    &starf;&starf;&starf;&starf;&starf;
                                </span>
                                <h2 class="text-title font-semibold text-xl md:text-2xl">Product name 1</h2>
                                <p class="line-clamp-2 text-gray-500 pt-3">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                </p>
                                <div class="flex justify-between pt-4">
                                    <div class="text-primary font-semibold text-2xl">
                                        <span>12</span> $
                                    </div>
                                    <div class="">
                                        <button class="p-2 px-4 bg-primary rounded-md text-white flex items-center gap-2 text-xs sm:text-sm ">
                                            <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4" width="16" height="16">
                                                <path d="M1 1.75A.75.75 0 011.75 1h1.628a1.75 1.75 0 011.734 1.51L5.18 3a65.25 65.25 0 0113.36 1.412.75.75 0 01.58.875 48.645 48.645 0 01-1.618 6.2.75.75 0 01-.712.513H6a2.503 2.503 0 00-2.292 1.5H17.25a.75.75 0 010 1.5H2.76a.75.75 0 01-.748-.807 4.002 4.002 0 012.716-3.486L3.626 2.716a.25.25 0 00-.248-.216H1.75A.75.75 0 011 1.75zM6 17.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM15.5 19a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" />
                                            </svg> 
                                            Commander                                        
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div data-category="category3" data-product class="bg-white border border-gray-100 shadow-xl rounded-lg shadow-primary/5">
                            <div class="w-full rounded-t-lg rounded-br-2xl overflow-hidden bg-primary/10 h-44 sm:h-48 lg:h-64">
                                <img src="images/food1.webp" width="400" alt="img prod" class="w-full h-full object-cover">
                            </div>
                            <div class="flex flex-col px-5 py-5">
                                <span class="w-max p-0.5 px-2 rounded-full text-orange-600 bg-primary/10">
                                    &starf;&starf;&starf;&starf;&starf;
                                </span>
                                <h2 class="text-title font-semibold text-xl md:text-2xl">Product name 1</h2>
                                <p class="line-clamp-2 text-gray-500 pt-3">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                </p>
                                <div class="flex justify-between pt-4">
                                    <div class="text-primary font-semibold text-2xl">
                                        <span>12</span> $
                                    </div>
                                    <div class="">
                                        <button class="p-2 px-4 bg-primary rounded-md text-white flex items-center gap-2 text-xs sm:text-sm ">
                                            <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4" width="16" height="16">
                                                <path d="M1 1.75A.75.75 0 011.75 1h1.628a1.75 1.75 0 011.734 1.51L5.18 3a65.25 65.25 0 0113.36 1.412.75.75 0 01.58.875 48.645 48.645 0 01-1.618 6.2.75.75 0 01-.712.513H6a2.503 2.503 0 00-2.292 1.5H17.25a.75.75 0 010 1.5H2.76a.75.75 0 01-.748-.807 4.002 4.002 0 012.716-3.486L3.626 2.716a.25.25 0 00-.248-.216H1.75A.75.75 0 011 1.75zM6 17.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM15.5 19a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" />
                                            </svg> 
                                            Commander                                        
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div data-category="category3" data-product class="bg-white border border-gray-100 shadow-xl rounded-lg shadow-primary/5">
                            <div class="w-full rounded-t-lg rounded-br-2xl overflow-hidden bg-primary/10 h-44 sm:h-48 lg:h-64">
                                <img src="images/food1.webp" width="400" alt="img prod" class="w-full h-full object-cover">
                            </div>
                            <div class="flex flex-col px-5 py-5">
                                <span class="w-max p-0.5 px-2 rounded-full text-orange-600 bg-primary/10">
                                    &starf;&starf;&starf;&starf;&starf;
                                </span>
                                <h2 class="text-title font-semibold text-xl md:text-2xl">Product name 1</h2>
                                <p class="line-clamp-2 text-gray-500 pt-3">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                </p>
                                <div class="flex justify-between pt-4">
                                    <div class="text-primary font-semibold text-2xl">
                                        <span>12</span> $
                                    </div>
                                    <div class="">
                                        <button class="p-2 px-4 bg-primary rounded-md text-white flex items-center gap-2 text-xs sm:text-sm ">
                                            <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4" width="16" height="16">
                                                <path d="M1 1.75A.75.75 0 011.75 1h1.628a1.75 1.75 0 011.734 1.51L5.18 3a65.25 65.25 0 0113.36 1.412.75.75 0 01.58.875 48.645 48.645 0 01-1.618 6.2.75.75 0 01-.712.513H6a2.503 2.503 0 00-2.292 1.5H17.25a.75.75 0 010 1.5H2.76a.75.75 0 01-.748-.807 4.002 4.002 0 012.716-3.486L3.626 2.716a.25.25 0 00-.248-.216H1.75A.75.75 0 011 1.75zM6 17.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM15.5 19a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" />
                                            </svg> 
                                            Commander                                        
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div data-category="category1" data-product class="bg-white border border-gray-100 shadow-xl rounded-lg shadow-primary/5">
                            <div class="w-full rounded-t-lg rounded-br-2xl overflow-hidden bg-primary/10 h-44 sm:h-48 lg:h-64">
                                <img src="images/food1.webp" width="400" alt="img prod" class="w-full h-full object-cover">
                            </div>
                            <div class="flex flex-col px-5 py-5">
                                <span class="w-max p-0.5 px-2 rounded-full text-orange-600 bg-primary/10">
                                    &starf;&starf;&starf;&starf;&starf;
                                </span>
                                <h2 class="text-title font-semibold text-xl md:text-2xl">Product name 1</h2>
                                <p class="line-clamp-2 text-gray-500 pt-3">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                </p>
                                <div class="flex justify-between pt-4">
                                    <div class="text-primary font-semibold text-2xl">
                                        <span>12</span> $
                                    </div>
                                    <div class="">
                                        <button class="p-2 px-4 bg-primary rounded-md text-white flex items-center gap-2 text-xs sm:text-sm ">
                                            <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4" width="16" height="16">
                                                <path d="M1 1.75A.75.75 0 011.75 1h1.628a1.75 1.75 0 011.734 1.51L5.18 3a65.25 65.25 0 0113.36 1.412.75.75 0 01.58.875 48.645 48.645 0 01-1.618 6.2.75.75 0 01-.712.513H6a2.503 2.503 0 00-2.292 1.5H17.25a.75.75 0 010 1.5H2.76a.75.75 0 01-.748-.807 4.002 4.002 0 012.716-3.486L3.626 2.716a.25.25 0 00-.248-.216H1.75A.75.75 0 011 1.75zM6 17.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM15.5 19a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" />
                                            </svg> 
                                            Commander                                        
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- menus section -->


    <!-- about section -->
    <section id="about" class="pt-24 lg:pt-32">
        <div class="mx-auto w-full max-w-screen-lg lg:max-w-screen-xl px-5 sm:px-10 md:px-12 lg:px-6">
            <div class="grid md:items-center md:grid-cols-2 gap-10 lg:gap-12">
                <div class="w-full md:h-full flex">
                    <img src="images/chef.webp" width="500" alt="img cover about" class="w-full md:h-full object-cover rounded-lg">
                </div>
                <div class="flex flex-col gap-5">
                    <div class="flex flex-col">
                        <span class="font-bold text-lg text-primary">- A propos</span>
                        <h2 class="text-4xl lg:text-4xl font-bold text-title">
                            Les meilleurs plats <div
                                class="w-max inline-block relative before:absolute before:inset-0 before:bg-primary p-0.5 before:skew-x-6 before:rounded-md ">
                                <span class="relative text-white">Lorem ips</span>
                            </div> en RDC
                        </h2>
                    </div>
                    <div class="space-y-1">
                        <p class="text-gray-500">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error consequatur optio repellat,
                            non labore iure facere, odio quo impedit sequi, libero nisi nesciunt nemo harum
                        </p>
                        <p class="text-gray-500">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error consequatur optio repellat,
                            non labore iure facere, odio quo impedit sequi, libero nisi nesciunt nemo harum
                        </p>
                    </div>
                    <div class="pt-2 w-max">
                        <a href="#contact-us"
                            class="relative px-6 py-3 
                        after:absolute after:inset-0 after:z-0 after:bg-primary after:rounded-md after:transition after:ease-linear after:duration-300 hover:after:scale-105 focus:after:scale-100">
                            <span class="text-white relative z-10">En savoir plus</span>
                        </a>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!-- about section -->

    <!-- services section -->
    <section id="services" class="pt-24 lg:pt-32">
        <div class="mx-auto w-full max-w-screen-lg lg:max-w-screen-xl px-5 sm:px-10 md:px-12 lg:px-6">
            <div class="flex flex-col text-center items-center mx-auto max-w-xl">
                <span class="font-bold text-lg text-primary">- Nos services</span>
                <h2 class="text-4xl lg:text-4xl font-bold text-title">
                    Optez pour <div
                        class="w-max inline-block relative before:absolute before:inset-0 before:bg-primary p-0.5 before:skew-x-6 before:rounded-md ">
                        <span class="relative text-white">le meilleur</span>
                    </div> sercvice en RDC
                </h2>
            </div>
            <div class="grid gap-6 lg:items-stretch lg:gap-10 md:mx-auto md:w-8/12 lg:w-full lg:grid-cols-3 pt-10">
                <div class="group space-y-6 border border-gray-100 bg-white px-8 py-12 text-center shadow-xl rounded-lg shadow-primary/5">
                    <div class="flex justify-center">
                        <span class="p-5 rounded-full bg-primary text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20" viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6">
                                <path fill-rule="evenodd" d="M2 3a1 1 0 00-1 1v1a1 1 0 001 1h16a1 1 0 001-1V4a1 1 0 00-1-1H2zm0 4.5h16l-.811 7.71a2 2 0 01-1.99 1.79H4.802a2 2 0 01-1.99-1.79L2 7.5zM10 9a.75.75 0 01.75.75v2.546l.943-1.048a.75.75 0 111.114 1.004l-2.25 2.5a.75.75 0 01-1.114 0l-2.25-2.5a.75.75 0 111.114-1.004l.943 1.048V9.75A.75.75 0 0110 9z" clip-rule="evenodd" />
                              </svg>                          
                        </span>
                      </div>
                  <h3 class="text-2xl font-semibold  text-gray-dark">Livraison rapide</h3>
                  <p class="text-gray-500">
                    Obcaecati, quam? Eligendi, nulla numquam natus laborum porro at cum, consectetur ullam
                    tempora ipsa iste officia sed officiis! Incidunt ea animi officiis.
                  </p>
                </div>
                <div class="group space-y-6 border border-gray-100 bg-white px-8 py-12 text-center shadow-xl rounded-lg shadow-primary/5">
                    <div class="flex justify-center">
                        <span class="p-5 rounded-full bg-primary text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20" viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6">
                                <path fill-rule="evenodd" d="M2 3a1 1 0 00-1 1v1a1 1 0 001 1h16a1 1 0 001-1V4a1 1 0 00-1-1H2zm0 4.5h16l-.811 7.71a2 2 0 01-1.99 1.79H4.802a2 2 0 01-1.99-1.79L2 7.5zM10 9a.75.75 0 01.75.75v2.546l.943-1.048a.75.75 0 111.114 1.004l-2.25 2.5a.75.75 0 01-1.114 0l-2.25-2.5a.75.75 0 111.114-1.004l.943 1.048V9.75A.75.75 0 0110 9z" clip-rule="evenodd" />
                              </svg>                          
                        </span>
                      </div>
                  <h3 class="text-2xl font-semibold  text-gray-dark">Meilleur prix</h3>
                  <p class="text-gray-500">
                    Obcaecati, quam? Eligendi, nulla numquam natus laborum porro at cum, consectetur ullam
                    tempora ipsa iste officia sed officiis! Incidunt ea animi officiis.
                  </p>
                </div>
                <div class="group space-y-6 border border-gray-100 bg-white px-8 py-12 text-center shadow-xl rounded-lg shadow-primary/5">
                  <div class="flex justify-center">
                    <span class="p-5 rounded-full bg-primary text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20" viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6">
                            <path fill-rule="evenodd" d="M2 3a1 1 0 00-1 1v1a1 1 0 001 1h16a1 1 0 001-1V4a1 1 0 00-1-1H2zm0 4.5h16l-.811 7.71a2 2 0 01-1.99 1.79H4.802a2 2 0 01-1.99-1.79L2 7.5zM10 9a.75.75 0 01.75.75v2.546l.943-1.048a.75.75 0 111.114 1.004l-2.25 2.5a.75.75 0 01-1.114 0l-2.25-2.5a.75.75 0 111.114-1.004l.943 1.048V9.75A.75.75 0 0110 9z" clip-rule="evenodd" />
                          </svg>                          
                    </span>
                  </div>
                  <h3 class="text-2xl font-semibold text-gray-dark">Excellence</h3>
                  <p class="text-gray-500">
                    Obcaecati, quam? Eligendi, nulla numquam natus laborum porro at cum, consectetur ullam
                    tempora ipsa iste officia sed officiis! Incidunt ea animi officiis.
                  </p>
                </div>
              </div>
            </div>
        </div>
    </section>
    <!-- services section -->


    <!-- why-us section -->
    <section id="why-us" class="pt-24 lg:pt-32">
        <div class="mx-auto w-full max-w-screen-lg lg:max-w-screen-xl px-5 sm:px-10 md:px-12 lg:px-6">
            <div class="grid md:items-center md:grid-cols-2 gap-10 lg:gap-12">
                <div class="flex flex-col gap-5">
                    <div class="flex flex-col gap-5">
                        <div class="flex flex-col">
                            <span class="font-bold text-lg text-primary">- Pourquoi nous</span>
                            <h2 class="text-4xl lg:text-4xl font-bold text-title">
                                Les meilleurs plats <div
                                    class="w-max inline-block relative before:absolute before:inset-0 before:bg-primary p-0.5 before:skew-x-6 before:rounded-md ">
                                    <span class="relative text-white">Lorem ips</span>
                                </div> en RDC
                            </h2>
                        </div>
                        <p class="md:line-clamp-2 text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                    <div class="space-y-3">
                        <div class="p-3 rounded-md bg-white shadow-lg shadow-transparent transition-all ease-linear border border-gray-100 hover:border-gray-200 hover:shadow-primary/20">
                            <div class="flex gap-4">
                                <div class="min-w-max">
                                    <span class="flex text-primary aspect-square rounded bg-primary/10 p-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-7 h-7">
                                            <path d="M12 9a1 1 0 01-1-1V3c0-.553.45-1.008.997-.93a7.004 7.004 0 015.933 5.933c.078.547-.378.997-.93.997h-5z" />
                                            <path d="M8.003 4.07C8.55 3.992 9 4.447 9 5v5a1 1 0 001 1h5c.552 0 1.008.45.93.997A7.001 7.001 0 012 11a7.002 7.002 0 016.003-6.93z" />
                                        </svg>                                          
                                    </span>
                                </div>
                                <div class="space-y-0.5">
                                    <h3 class="text-lg font-semibold text-gray-dark">
                                        Achetez
                                    </h3>
                                    <p class="text-gray-500 line-clamp-2">
                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Est animi reiciendis laboriosam aut
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="p-3 rounded-md bg-white shadow-lg shadow-transparent transition-all ease-linear border border-gray-100 hover:border-gray-200 hover:shadow-primary/20">
                            <div class="flex gap-4">
                                <div class="min-w-max">
                                    <span class="flex text-primary aspect-square rounded bg-primary/10 p-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-7 h-7">
                                            <path d="M12 9a1 1 0 01-1-1V3c0-.553.45-1.008.997-.93a7.004 7.004 0 015.933 5.933c.078.547-.378.997-.93.997h-5z" />
                                            <path d="M8.003 4.07C8.55 3.992 9 4.447 9 5v5a1 1 0 001 1h5c.552 0 1.008.45.93.997A7.001 7.001 0 012 11a7.002 7.002 0 016.003-6.93z" />
                                        </svg>                                          
                                    </span>
                                </div>
                                <div class="space-y-0.5">
                                    <h3 class="text-lg font-semibold text-gray-dark">
                                        Achetez
                                    </h3>
                                    <p class="text-gray-500 line-clamp-2">
                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Est animi reiciendis laboriosam aut
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="p-3 rounded-md bg-white shadow-lg shadow-transparent transition-all ease-linear border border-gray-100 hover:border-gray-200 hover:shadow-primary/20">
                            <div class="flex gap-4">
                                <div class="min-w-max">
                                    <span class="flex text-primary aspect-square rounded bg-primary/10 p-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-7 h-7">
                                            <path d="M12 9a1 1 0 01-1-1V3c0-.553.45-1.008.997-.93a7.004 7.004 0 015.933 5.933c.078.547-.378.997-.93.997h-5z" />
                                            <path d="M8.003 4.07C8.55 3.992 9 4.447 9 5v5a1 1 0 001 1h5c.552 0 1.008.45.93.997A7.001 7.001 0 012 11a7.002 7.002 0 016.003-6.93z" />
                                        </svg>                                          
                                    </span>
                                </div>
                                <div class="space-y-0.5">
                                    <h3 class="text-lg font-semibold text-gray-dark">
                                        Achetez
                                    </h3>
                                    <p class="text-gray-500 line-clamp-2">
                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Est animi reiciendis laboriosam aut
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full md:h-full flex">
                    <img src="images/chef.webp" width="500" alt="img cover about" class="w-full md:h-full object-cover rounded-lg">
                </div>


            </div>
        </div>
    </section>
    <!-- why-us section -->


    <section id="contact-us" class="pt-24 lg:pt-32 pb-16">
        <div class="mx-auto w-full max-w-screen-lg lg:max-w-screen-xl px-5 sm:px-10 md:px-12 lg:px-6">
            <div class="grid md:grid-cols-3 gap-10">
                <div class="md:col-span-2 flex flex-col gap-8">
                    <div class="flex flex-col gap-5">
                        <h2 class="text-4xl lg:text-4xl font-bold text-title">Prendre <div
                            class="w-max inline-block relative before:absolute before:inset-0 before:bg-primary p-0.5 before:skew-x-6 before:rounded-md ">
                            <span class="relative text-white">Contact</span></div> avec nous
                        </h2>
                        <p class="text-gray-500">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        </p>
                    </div>
                    <div class="flex w-full">
                        <form action="" class="w-full gap-6 grid sm:grid-cols-2">
                            <div class="col-span-1 space-y-1 text-gray-500">
                                <label for="contact_name">Nom</label>
                                <input type="text" name="contact_name" id="contact_name" class="w-full focus:caret-primary px-5 py-3 rounded-lg bg-white shadow-lg shadow-primary/5 outline-none transition-all ease-linear focus:text-gray-600 text-gray-500 border-2 border-gray-100 focus:shadow-primary/20 focus:border-primary">
                            </div>
                            <div class="col-span-1 space-y-1 text-gray-500">
                                <label for="contact_email">Adresse mail</label>
                                <input type="email" name="contact_email" id="contact_email" class="w-full focus:caret-primary px-5 py-3 rounded-lg bg-white shadow-lg shadow-primary/5 outline-none transition-all ease-linear focus:text-gray-600 text-gray-500 border-2 border-gray-100 focus:shadow-primary/20 focus:border-primary">
                            </div>
                            <div class="sm:col-span-2 space-y-1 text-gray-500">
                                <label for="contact_msg">Message</label>
                                <textarea name="contact_msg" id="contact_msg" class="w-full focus:caret-primary px-5 py-3 rounded-lg bg-white shadow-lg shadow-primary/5 outline-none transition-all ease-linear focus:text-gray-600 text-gray-500 border-2 border-gray-100 focus:shadow-primary/20 focus:border-primary h-32 resize-none"></textarea>
                            </div>
                            <div class="sm:col-span-2">
                                <div class="w-max pt-4">
                                    <button type="submit"
                                        class="relative px-6 py-3.5 
                                        after:absolute after:inset-0 after:z-0 after:bg-primary after:rounded-md after:transition after:ease-linear after:duration-300 hover:after:scale-105 focus:after:scale-100">
                                        <span class="text-white relative z-10">Envoyer le message</span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                
                <div class="h-72 md:h-full border rounded-md overflow-hidden">
                    Map Here
                </div>
            </div>
        </div>
    </section>


    
    
</body>

</html>