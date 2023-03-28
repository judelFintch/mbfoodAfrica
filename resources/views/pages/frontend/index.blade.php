@extends('layouts.app')
@section('title', 'Mobile Food Africa')
@section('content')
  <!-- hero section -->
  <section id="#" class="relative">
        <div class="mx-auto w-full max-w-screen-lg lg:max-w-screen-xl px-5 sm:px-10 md:px-12 lg:px-6">
            <div class="grid lg:items-center lg:grid-cols-2 gap-10 lg:gap-12">
                <div
                    class="relative z-20 lg:pb-14 pt-12 lg:pt-24 flex flex-col lg:items-start mx-auto max-w-2xl w-auto lg:max-w-none gap-8 lg:mx-0 items-center text-center lg:text-left">
                    <div class="flex flex-col gap-5 items-center lg:items-start">
                        <h1
                            class="text-4xl text-center leading-snug lg:text-left md:text-5xl lg:text-6xl font-bold text-title">
                           Avec mobile Food Trouvez les <div
                                class="relative inline-block w-max before:absolute before:bg-primary before:inset-0 before:skew-x-6 before:rounded-md ">
                                <span class="relative text-white">meilleurs</span>
                            </div> plats de la ville
                        </h1>
                        <p class="text-gray-600 line-clamp-4">
                        Manger rapidement et facilement, c'est possible avec Mobile Food! Commandez en ligne et faites-vous livrer ou venez retirer votre commande en magasin. Plus besoin de faire la queue, commandez depuis votre ordinateur ou votre téléphone portable
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
                        <img src="{{asset('frontend/images/Image.png')}}" width="400" alt="hungry young girl" class=" lg:w-auto lg:h-full flex relative">
                        <div class="absolute -bottom-3 -right-3 p-2 bg-white rounded-lg shadow-lg shadow-primary/10">
                        <!-- 
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
                          -->
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
                    Découvrez la variété  !  <div
                            class="w-max inline-block relative before:absolute before:inset-0 before:bg-primary p-0.5 before:skew-x-6 before:rounded-md ">
                            <span class="relative text-white">de nos  produits</span>
                        </div> 
                    </h2>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-3 items-stretch gap-4 sm:gap-8 lg:gap-10">
                    <div class="p-4 rounded-md group bg-cover bg-center bg-no-repeat"
                        style="background-image: url(frontend/images/hot-dog-sonora.webp);">
                        <div
                            class="opacity-0 rounded-md transition h-full ease-linear group-hover:opacity-100 bg-primary bg-opacity-60 w-full flex items-center justify-center py-12 md:py-16 lg:py-20 px-4">
                            <div class="text-center">
                                <h2 class="text-lg font-semibold sm:text-xl text-white">Hot dog</h2>
                            </div>
                        </div>
                    </div>

                    <div class="p-4 rounded-md group bg-cover bg-center bg-no-repeat"
                        style="background-image: url(frontend/images/2.webp);">
                        <div
                            class="opacity-0 rounded-md transition h-full ease-linear group-hover:opacity-100 bg-primary bg-opacity-60 w-full flex items-center justify-center py-12 md:py-16 lg:py-20 px-4">
                            <div class="text-center">
                                <h2 class="text-lg font-semibold sm:text-xl text-white">Sandwich</h2>
                            </div>
                        </div>
                    </div>

                    <div class="p-4 rounded-md group bg-cover bg-center bg-no-repeat"
                        style="background-image: url(frontend/images/3.webp);">
                        <div
                            class="opacity-0 rounded-md transition h-full ease-linear group-hover:opacity-100 bg-primary bg-opacity-60 w-full flex items-center justify-center py-12 md:py-16 lg:py-20 px-4">
                            <div class="text-center">
                                <h2 class="text-lg font-semibold sm:text-xl text-white">hamburger</h2>
                            </div>
                        </div>
                    </div>

                

                    <div class="p-4 rounded-md group bg-cover bg-center bg-no-repeat"
                        style="background-image: url(frontend/images/4.webp);">
                        <div
                            class="opacity-0 rounded-md transition h-full ease-linear group-hover:opacity-100 bg-primary bg-opacity-60 w-full flex items-center justify-center py-12 md:py-16 lg:py-20 px-4">
                            <div class="text-center">
                                <h2 class="text-lg font-semibold sm:text-xl text-white">Pizza</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- categories section -->


    <!-- menus section 
    <section id="menus" class="pt-24 lg:pt-32">
        <div class="mx-auto w-full max-w-screen-lg lg:max-w-screen-xl px-5 sm:px-10 md:px-12 lg:px-6">
            <div class="flex flex-col gap-7">
                <div class="flex flex-col text-center items-center mx-auto max-w-xl">
                    <span class="font-bold text-lg text-primary">- Menus</span>
                    <h2 class="text-4xl lg:text-4xl font-bold text-title">
                    Venez déguster nos nouveaux  <div
                            class="w-max inline-block relative before:absolute before:inset-0 before:bg-primary p-0.5 before:skew-x-6 before:rounded-md ">
                            <span class="relative text-white">Plats</span>
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
                                <img src="{{asset('frontend/images/food1.webp')}}" width="400" alt="img prod" class="w-full h-full object-cover">
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
                                <img src="{{asset('frontend/images/food1.webp')}}" width="400" alt="img prod" class="w-full h-full object-cover">
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
                                <img src="{{asset('frontend/images/food1.webp')}}" width="400" alt="img prod" class="w-full h-full object-cover">
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
                                <img src="{{asset('frontend/images/food1.webp')}}" width="400" alt="img prod" class="w-full h-full object-cover">
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
                                <img src="{{asset('frontend/images/food1.webp')}}" width="400" alt="img prod" class="w-full h-full object-cover">
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
                                <img src="{{asset('frontend/images/food1.webp')}}" width="400" alt="img prod" class="w-full h-full object-cover">
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
    menus section -->

    <!-- about section -->
    <section id="about" class="pt-24 lg:pt-32">
        <div class="mx-auto w-full max-w-screen-lg lg:max-w-screen-xl px-5 sm:px-10 md:px-12 lg:px-6">
            <div class="grid md:items-center md:grid-cols-2 gap-10 lg:gap-12">
                <div class="w-full md:h-full flex">
                    <img src="{{asset('frontend/images/chef.webp')}}" width="500" alt="img cover about" class="w-full md:h-full object-cover rounded-lg">
                </div>
                <div class="flex flex-col gap-5">
                    <div class="flex flex-col">
                        <span class="font-bold text-lg text-primary">- A propos</span>
                        <h2 class="text-4xl lg:text-4xl font-bold text-title">
                A propos    <div
                                class="w-max inline-block relative before:absolute before:inset-0 before:bg-primary p-0.5 before:skew-x-6 before:rounded-md ">
                                <span class="relative text-white">Mobile Food</span>
                            </div> Africa
                        </h2>
                    </div>
                    <div class="space-y-1">
                        <p class="text-gray-500">
                       
                            <p>
                                <b>L’objectif</b> de l’entreprise et sa ligne directrice sont de préparer et de livrer des plats fast Food de meilleure qualité et dans le bref délai possible pour satisfaire aux besoins de nos clients. 
                            </p>
                           
                        
                                <p ><b>Notre mission </b> est de devenir un géant de la restauration en République Démocratique du Congo,  et en Afrique,  reconnu pour la qualité des produits et le service rapide. 
                            Mais aussi en contribuant au développement du pays et de l’Afrique par la création de plusieurs emplois.
                            </p>
                           
                            <p>
                                Mobile Food offre un <b>Services</b> de restauration fast Food, dont l’axe principale est la livraison des plats sur commande.
                            </p>
                        </p>
                       
                        
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
                  Vous êtes pressé ? Pas de problème ! Chez nous, nous vous offrons une livraison ultra rapide ! Commandez en ligne ou par téléphone, et nous nous occupons de tout. Que ce soit pour un déjeuner d'affaires ou pour une soirée télévision, nous livrons rapidement nos burgers, frites, boissons et desserts directement chez vous.
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
                  Recherchez-vous des prix abordables pour des repas de qualité ? , nous vous offrons les meilleurs prix pour des produits frais et savoureux. Commandez en ligne ou en magasin et bénéficiez de nos offres spéciales, telles que des menus à prix réduits ou des promotions sur certains produits. 
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
                  Nous offrons une garantie de satisfaction à 100%, pour vous assurer que vous serez entièrement satisfait de notre service. Nous croyons que vous méritez le meilleur, c'est pourquoi nous nous efforçons constamment de nous améliore.
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
                            Vous cherchez<div
                                    class="w-max inline-block relative before:absolute before:inset-0 before:bg-primary p-0.5 before:skew-x-6 before:rounded-md ">
                                    <span class="relative text-white"> un repas?</span>
                                </div> 
                            </h2>
                        </div>
                        <p class="md:line-clamp-3 text-gray-500">
                        
                        Nous proposons une variété de produits pour tous les goûts. Que ce soit nos burgers à la viande fraîchement préparés, nos sandwichs réalisés avec des produits frais provenant des petits producteurs locaux, ou nos wraps gourmands et originaux, chaque bouchée est savoureuse et préparée avec soin
                        </p>
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
                                        
                                    </h3>
                                    <p class="text-gray-500 line-clamp-4">
                                    Notre restaurant est entièrement écologique; tous nos produits proviennent de producteurs locaux respectueux de l'environnement et nos emballages sont entièrement compostables et biodégradables
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
                                        
                                    </h3>
                                    <p class="text-gray-500 line-clamp-4">
                                    De plus, nous sommes fiers de proposer les prix les plus bas du marché. Nos menus affichent des prix abordables qui conviennent aux petits et grands budgets.
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
                                        
                                    </h3>
                                    <p class="text-gray-500 line-clamp-4">
                                    Venez découvrir notre fast food pour déguster de délicieux repas préparés avec des produits frais, écologiques et abordables. Nous vous promettons que vous ne serez pas déçu !
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full md:h-full flex">
                    <img src="{{asset('frontend/images/chef.webp')}}" width="500" alt="img cover about" class="w-full md:h-full object-cover rounded-lg">
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
                        Si vous avez besoin de plus d'informations supplémentaires ou pour un entretien, n'hésitez pas à nous contactez
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
@endsection