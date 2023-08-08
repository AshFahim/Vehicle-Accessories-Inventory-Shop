<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <TITLE>Featured Parts</TITLE>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.css" rel="stylesheet" />
    <!-- Styles -->
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/plain.css') }}" rel="stylesheet">
</head>

<body class="antialiased">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <div class="fixed top-0 z-30 w-full">
        <nav class="bg-white border-gray-200 dark:bg-gray-900">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <a href="/" class="flex items-center">
                    <img src="{{ asset('/demo-logo.png') }}" class="h-8 mr-3" alt="StoreManagementWebsite Logo" />
                    <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Store Management
                        Website</span>
                </a>

                <div class="flex items-center md:order-2">
                    <button type="button"
                        class="flex mr-3 text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                        id="cart-button">
                        <span class="sr-only">Open Cart</span>
                        <!-- component -->
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="w-10 h-10 p-2 text-gray-600 transition-all duration-300 ease-in-out rounded-full dark:text-gray-400 hover:bg-customBlue hover:text-white"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z">
                            </path>
                        </svg>
                    </button>
                    <button type="button"
                        class="flex mr-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                        id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
                        data-dropdown-placement="bottom">
                        <span class="sr-only">Open user menu</span>
                        <!-- component -->

                        <svg class="w-10 h-10 p-2 text-gray-600 transition-all duration-300 ease-in-out rounded-full dark:text-gray-400 hover:bg-customBlue hover:text-white"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-users">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>
                        {{-- <img class="w-8 h-8 rounded-full" src="{{ asset('/demo-logo.png') }}" alt="user photo"> --}}
                    </button>
                    <!-- Dropdown menu -->
                    <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600"
                        id="user-dropdown">
                        <div class="px-4 py-3">
                            <span class="block text-sm text-gray-900 dark:text-white">@auth
                                    {{ @Auth::user()->name }}
                                @else
                                    Guest
                                @endauth
                            </span>
                            <span class="block text-sm  text-gray-500 truncate dark:text-gray-400">@auth
                                    {{ @Auth::user()->email }}
                                @else
                                    No Email
                                @endauth
                            </span>
                        </div>
                        <ul class="py-2" aria-labelledby="user-menu-button">
                            @auth
                                <li>
                                    <a href="{{ url('/dashboard') }}"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Dashboard</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Settings</a>
                                </li>
                                <li>
                                    <a href="{{ url('/orders') }}"
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
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign
                                        in</a>
                                </li>
                                <li>
                                    <a href="{{ route('register') }}"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Register</a>
                                </li>
                            @endauth
                        </ul>
                    </div>
                    <button data-collapse-toggle="navbar-user" type="button"
                        class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
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
                        class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                        <li>
                            <a href="{{ url('/') }}"
                                class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500"
                                aria-current="page">Home</a>
                        </li>
                        <li>
                            <a href="{{ url('/shop') }}"
                                class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Shop</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About
                                Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    </div>
