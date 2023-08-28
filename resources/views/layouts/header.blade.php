<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <TITLE>{{ $pageName }}</TITLE>

    <!-- Fonts -->
    <link href="{{ asset('/nunito_wght@400;600;700&display=swap.css') }}" rel="stylesheet">
    <link href="{{ asset('/flowbite.min.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('/font-awesome_6.4.0_css_all.min.css') }}" />

    <!-- Styles -->
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/plain.css') }}" rel="stylesheet">
</head>

<body class="antialiased">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <div class="fixed top-0 z-30 w-full">
        <nav class="bg-white border-gray-200">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <a href="/" class="flex items-center">
                    <img src="{{ asset('/demo-logo.png') }}" class="h-8 mr-3" alt="StoreManagementWebsite Logo" />
                    <span class="self-center text-2xl font-semibold whitespace-nowrap">Vehicle Accessory Shop</span>
                </a>

                <div class="flex items-center md:order-3">
                    <button type="button"
                        class="flex mr-3 text-sm bg-slate-400 rounded-full focus:ring-4 focus:ring-gray-300"
                        id="cart-button" onclick="window.location.href='{{ route('wishlist') }}'">
                        <span class="sr-only">Open Wishlist</span>
                        <!-- component -->
                        <div class="text-l w-10 h-10 p-2">
                            <i class="fa-solid fa-heart fa-xl"></i>
                        </div>
                    </button>
                    <button type="button"
                        class="flex mr-3 text-sm bg-slate-400 rounded-full focus:ring-4 focus:ring-gray-300"
                        id="cart-button" onclick="window.location.href='{{ route('cart') }}'">
                        <span class="sr-only">Open Cart</span>
                        <!-- component -->
                        <div class="text-l w-10 h-10 p-2">
                            <i class="fa-solid fa-cart-shopping fa-xl"></i>
                        </div>
                    </button>
                    @auth
                        @if (Auth::user()->is_admin)
                            <button type="button" onclick="window.location.href='{{ route('admin-dashboard') }}'"
                                class="flex mr-3 text-sm bg-slate-400 rounded-full focus:ring-4 focus:ring-gray-300"
                                id="admin-menu-button">
                                <span class="sr-only">Open admin menu</span>
                                <!-- component -->
                                <div class="text-l w-10 h-10 p-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="1.5em"
                                        viewBox="0 0 640 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                        <path
                                            d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c1.8 0 3.5-.2 5.3-.5c-76.3-55.1-99.8-141-103.1-200.2c-16.1-4.8-33.1-7.3-50.7-7.3H178.3zm308.8-78.3l-120 48C358 277.4 352 286.2 352 296c0 63.3 25.9 168.8 134.8 214.2c5.9 2.5 12.6 2.5 18.5 0C614.1 464.8 640 359.3 640 296c0-9.8-6-18.6-15.1-22.3l-120-48c-5.7-2.3-12.1-2.3-17.8 0zM591.4 312c-3.9 50.7-27.2 116.7-95.4 149.7V273.8L591.4 312z" />
                                    </svg>
                                </div>
                            </button>
                        @endif
                    @endauth
                    <button type="button"
                        class="flex mr-3 text-sm bg-slate-400 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300"
                        id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
                        data-dropdown-placement="bottom">
                        <span class="sr-only">Open user menu</span>
                        <!-- component -->
                        <div class="text-l w-10 h-10 p-2">
                            <i class="fa-regular fa-user fa-xl"></i>
                        </div>
                        {{-- <img class="w-8 h-8 rounded-full" src="{{ asset('/demo-logo.png') }}" alt="user photo"> --}}
                    </button>
                    <!-- Dropdown menu -->
                    <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow"
                        id="user-dropdown">
                        <div class="px-4 py-3">
                            <span class="block text-sm text-gray-900">@auth
                                    {{ @Auth::user()->name }}
                                @else
                                    Guest
                                @endauth
                            </span>
                            <span class="block text-sm  text-gray-500 truncate">@auth
                                    {{ @Auth::user()->email }}
                                @else
                                    No Email
                                @endauth
                            </span>
                        </div>
                        <ul class="py-2" aria-labelledby="user-menu-button">
                            @auth
                                <li>
                                    <a href="{{ route('dashboard') }}"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Dashboard</a>
                                </li>
                                <li>
                                    <a href="{{ route('usersetting') }}"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Settings</a>
                                </li>
                                <li>
                                    <a href="{{ route('orders') }}"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Orders</a>
                                </li>
                                <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <x-dropdown-link :href="route('logout')"
                                            onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                        </x-dropdown-link>
                                    </form>
                                </li>
                            @else
                                <li>
                                    <a href="{{ route('login') }}"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Sign
                                        in</a>
                                </li>
                                <li>
                                    <a href="{{ route('register') }}"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Register</a>
                                </li>
                            @endauth
                        </ul>
                    </div>
                    <button data-collapse-toggle="navbar-user" type="button"
                        class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 "
                        aria-controls="navbar-user" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 17 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 1h15M1 7h15M1 13h15" />
                        </svg>
                    </button>
                </div>
                <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-user">
                    <ul
                        class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white">
                        <li>
                            <a href="{{ route('home') }}"
                                class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0"
                                aria-current="page">Home</a>
                        </li>
                        <li>
                            <a href="{{ route('shop') }}"
                                class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0">Shop</a>
                        </li>
                        <li>
                            <a href="{{ route('contactUs') }}"
                                class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0">Contact</a>
                        </li>
                        <li>
                            <a href="{{ route('aboutUs') }}"
                                class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0">About
                                Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    </div>
