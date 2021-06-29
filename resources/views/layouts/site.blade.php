<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <div class="bg-deep-blue text-deep-gray">
            <header x-data="{isOpen: false}">
                <div class="max-w-8xl mx-auto px-8">
                    <div class="flex items-center justify-between">
                        <img class="w-20 h-20 text-green" src="{{url('images/portfolio-logo.png')}}" alt="portfolio-logo">
                        <div class="hidden sm:flex items-center px-10 sm:px-0">
                            <a href="#about"><span class="text-green mr-2">01.</span><span class="mr-6 text-light-gray hover:text-green">About</span></a>
                            <a href="#experience"><span class="text-green mr-2">02.</span><span class="mr-6 text-light-gray hover:text-green">Experience</span></a>
                            <a href="#portfolio"><span class="text-green mr-2">03.</span><span class="mr-6 text-light-gray hover:text-green">Portfolio</span></a>
                            <a href="#contact"><span class="text-green mr-2">04.</span><span class="mr-6 text-light-gray hover:text-green">Contact</span></a>
                            <a href="{{url('pdf/resume.pdf')}}" target="_blank" class="border border-green rounded px-4 py-2 text-green">Resume</a>
                        </div>
                        <button @click="isOpen = !isOpen" type="button" class="text-green-400 block sm:hidden cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-green" fill="none" viewBox="0 0   24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                        </button>
                    </div>
                    <!-- Mobile menu -->
                    <div x-show="isOpen" class="sm:hidden">
                        <div class="space-y-4">
                            <a href="#about" class="block"><span class="text-green mr-2">01.</span><span class="mr-6 text-light-gray hover:text-green">About</span></a>
                            <a href="#experience" class="block"><span class="text-green mr-2">02.</span><span class="mr-6 text-light-gray hover:text-green">Experience</span></a>
                            <a href="#portfolio"class="block"><span class="text-green mr-2">03.</span><span class="mr-6 text-light-gray hover:text-green">Portfolio</span></a>
                            <a href="#contact" class="block"><span class="text-green mr-2">04.</span><span class="mr-6 text-light-gray hover:text-green">Contact</span></a>
                            <a href="{{url('pdf/resume.pdf')}}" target="_blank" class="border rounded px-4 py-2 text-green inline-block">Resume</a>
                        </div>
                    </div>
                </div>
            </header>
            <main>
                @yield('content')
            </main>

            <footer>
                <section class="bg-bg-dark-blue py-10">
                    <div class="flex space-x-4 justify-center">
                        <a class="hover:text-green" href="https://www.linkedin.com/feed/" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-light-gray hover:text-green" viewBox="0 0 20 20"><path fill="#fff" d="M10 .4C4.698.4.4 4.698.4 10s4.298 9.6 9.6 9.6 9.6-4.298 9.6-9.6S15.302.4 10 .4zM7.65 13.979H5.706V7.723H7.65v6.256zm-.984-7.024c-.614 0-1.011-.435-1.011-.973 0-.549.409-.971 1.036-.971s1.011.422 1.023.971c0 .538-.396.973-1.048.973zm8.084 7.024h-1.944v-3.467c0-.807-.282-1.355-.985-1.355-.537 0-.856.371-.997.728-.052.127-.065.307-.065.486v3.607H8.814v-4.26c0-.781-.025-1.434-.051-1.996h1.689l.089.869h.039c.256-.408.883-1.01 1.932-1.01 1.279 0 2.238.857 2.238 2.699v3.699z"/></svg>
                        </a>
                        <a class="hover:text-green" href="https://www.facebook.com/" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-light-gray hover:text-green" viewBox="0 0 20 20"><path fill="#fff" d="M10 .4C4.698.4.4 4.698.4 10s4.298 9.6 9.6 9.6 9.6-4.298 9.6-9.6S15.302.4 10 .4zm2.274 6.634h-1.443c-.171 0-.361.225-.361.524V8.6h1.805l-.273 1.486H10.47v4.461H8.767v-4.461H7.222V8.6h1.545v-.874c0-1.254.87-2.273 2.064-2.273h1.443v1.581z"/></svg>
                        </a>
                        <a class="hover:text-green" href="https://www.instagram.com/" target="_blank">
                            <svg data-name="Instagram w/circle" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-light-gray hover:text-green" viewBox="0 0 19.2 19.2"><path d="M13.498 6.651a1.656 1.656 0 00-.95-.949 2.766 2.766 0 00-.928-.172c-.527-.024-.685-.03-2.02-.03s-1.493.006-2.02.03a2.766 2.766 0 00-.929.172 1.656 1.656 0 00-.949.95 2.766 2.766 0 00-.172.928c-.024.527-.03.685-.03 2.02s.006 1.493.03 2.02a2.766 2.766 0 00.172.929 1.656 1.656 0 00.95.949 2.766 2.766 0 00.928.172c.527.024.685.029 2.02.029s1.493-.005 2.02-.03a2.766 2.766 0 00.929-.171 1.656 1.656 0 00.949-.95 2.766 2.766 0 00.172-.928c.024-.527.029-.685.029-2.02s-.005-1.493-.03-2.02a2.766 2.766 0 00-.171-.929zM9.6 12.168A2.568 2.568 0 1112.168 9.6 2.568 2.568 0 019.6 12.168zm2.669-4.637a.6.6 0 11.6-.6.6.6 0 01-.6.6zM11.267 9.6A1.667 1.667 0 119.6 7.933 1.667 1.667 0 0111.267 9.6zM9.6 0a9.6 9.6 0 109.6 9.6A9.6 9.6 0 009.6 0zm4.97 11.661a3.67 3.67 0 01-.233 1.214 2.556 2.556 0 01-1.462 1.462 3.67 3.67 0 01-1.213.233c-.534.024-.704.03-2.062.03s-1.528-.006-2.062-.03a3.67 3.67 0 01-1.213-.233 2.556 2.556 0 01-1.462-1.462 3.67 3.67 0 01-.233-1.213c-.024-.534-.03-.704-.03-2.062s.006-1.528.03-2.062a3.67 3.67 0 01.232-1.213 2.556 2.556 0 011.463-1.463 3.67 3.67 0 011.213-.232c.534-.024.704-.03 2.062-.03s1.528.006 2.062.03a3.67 3.67 0 011.213.232 2.556 2.556 0 011.462 1.463 3.67 3.67 0 01.233 1.213c.024.534.03.704.03 2.062s-.006 1.528-.03 2.062z" fill="#fff"/></svg>
                        </a>
                        <a class="hover:text-green" href="https://collins145.github.io/" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-light-gray hover:text-green" viewBox="0 0 20 20"><path fill="#FFF" d="M10.015 9.949h-.03c-1.191 0-2.24-.303-2.861.268a1.57 1.57 0 00-.527 1.197c0 1.852 1.483 2.08 3.389 2.08h.029c1.905 0 3.389-.229 3.389-2.08 0-.443-.156-.856-.527-1.197-.622-.571-1.671-.268-2.862-.268zM8.393 12.48c-.363 0-.656-.408-.656-.91s.293-.908.656-.908.657.406.657.908c.001.502-.293.91-.657.91zm3.213 0c-.363 0-.657-.408-.657-.91s.294-.908.657-.908c.362 0 .656.406.656.908.001.502-.293.91-.656.91zM10 .4C4.698.4.4 4.698.4 10s4.298 9.6 9.6 9.6 9.6-4.298 9.6-9.6S15.302.4 10 .4zm.876 13.539c-.172 0-.514 0-.876.002-.362-.002-.704-.002-.876-.002-.76 0-3.772-.059-3.772-3.689 0-.834.286-1.445.755-1.955-.074-.184-.078-1.232.32-2.236 0 0 .916.1 2.301 1.051.289-.081.781-.122 1.272-.122s.982.041 1.273.121c1.385-.951 2.301-1.051 2.301-1.051.398 1.004.395 2.053.32 2.236.469.51.755 1.121.755 1.955-.001 3.632-3.013 3.69-3.773 3.69z"/></svg>
                        </a>
                    </div>
                    <p class="text-center hover:text-green pt-4">Designed and Built by Collins Omondi</p>
                    <div class="flex justify-center space-x-2 pt-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 20 20"><path fill="#FFF" d="M18.8 8.022h-6.413L10 1.3 7.611 8.022H1.199l5.232 3.947-1.871 6.929L10 14.744l5.438 4.154-1.869-6.929L18.8 8.022zM10 12.783l-3.014 2.5 1.243-3.562-2.851-2.3 3.522.101 1.1-4.04 1.099 4.04 3.521-.101-2.851 2.3 1.243 3.562-3.012-2.5z"/></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 20 20"><path fill="#FFF" d="M18.8 8.022h-6.413L10 1.3 7.611 8.022H1.199l5.232 3.947-1.871 6.929L10 14.744l5.438 4.154-1.869-6.929L18.8 8.022zM10 12.783l-3.014 2.5 1.243-3.562-2.851-2.3 3.522.101 1.1-4.04 1.099 4.04 3.521-.101-2.851 2.3 1.243 3.562-3.012-2.5z"/></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 20 20"><path fill="#FFF" d="M18.8 8.022h-6.413L10 1.3 7.611 8.022H1.199l5.232 3.947-1.871 6.929L10 14.744l5.438 4.154-1.869-6.929L18.8 8.022zM10 12.783l-3.014 2.5 1.243-3.562-2.851-2.3 3.522.101 1.1-4.04 1.099 4.04 3.521-.101-2.851 2.3 1.243 3.562-3.012-2.5z"/></svg>
                    </div>
                </section>
            </footer>
        </div>
    </body>
</html>
