<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <!-- <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" /> -->
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">

        @vite('resources/css/app.css')

    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div x-data="{ scrollToSection(sectionId) {
                const target = document.getElementById(sectionId);
                if (target) {
                    target.scrollIntoView({ behavior: 'smooth' });
                }
            }
        }" id="logo">
            <nav class="bg-transparent fixed top-4 left-0 w-full z-10" >
                <div  x-data="{ open: false }" id="logo" class="max-w-screen-xl mx-auto flex justify-between items-center px-6 md:px-16 lg:px-32 py-4 animate-fade-down">

                    <a x-on:click="scrollToSection('logo')" class="flex items-center space-x-2 text-lg font-semibold text-white drop-shadow-lg animate-float">
                        <img src="{{ asset('/images/home/logo.jpg') }}" alt="Kenneth Pet Grooming Logo" class="w-12 h-12 object-contain rounded-full animate-float">
                        <span>PAWTASTIC</span>
                    </a>

                    <ul class="hidden md:flex space-x-8 animate-fade-in">
                        <li><a x-on:click="scrollToSection('about-us')"  class="text-black hover:text-gray-300 drop-shadow-lg">About us</a></li>
                        <li><a x-on:click="scrollToSection('schedule-us')" class="text-black hover:text-gray-300 drop-shadow-lg">Schedule a visit</a></li>
                    </ul>

                    <button @click="open = !open" class="md:hidden text-white focus:outline-none">
                        <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16m-7 6h7" />
                        </svg>
                    </button>

                    <div x-show="open" x-transition :class="{'nav': true, 'open': open}"
                        class="md:hidden absolute bg-opacity-80 w-full left-0 top-16 text-white flex flex-col items-center space-y-4 py-4 ">
                        <a x-on:click="scrollToSection('about-us')" class="hover:text-blue-300">About us</a>
                        <a x-on:click="scrollToSection('schedule-us')" class="hover:text-blue-300">Schedule a visit</a>
                    </div>
                </div>
            </nav>
            <div>
                    {{ $slot }}
            </div>
        </div>
        @vite('resources/js/app.js')
    </body>
</html>
