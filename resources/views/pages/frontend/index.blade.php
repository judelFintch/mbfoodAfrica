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
                    Découvrez la variété de  produits  !  <div
                            class="w-max inline-block relative before:absolute before:inset-0 before:bg-primary p-0.5 before:skew-x-6 before:rounded-md ">
                            <span class="relative text-white">chez Mobile Food Africa</span>
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


    <!-- menus section -->
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
    <!-- menus section -->

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
                           
                            <b>
                                <p>Notre mission </b> de devenir un géant de la restauration en république démocratique du Congo,  et en Afrique,  reconnu pour la qualité des produits et le service rapide. 
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
@endsection