<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Global site tag (gtag.js) - Google Analytics 
        Goes here...
        -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    
    <div class="lg:max-w-screen-lg md:max-w-screen-md leading-6 mx-auto px-4 w-full">
      
    <nav class="flex flex-wrap items-center justify-between pb-6 pt-8 text-gray-700">
        
        <span class="flex justify-center text-3xl leading-normal w-full"> 
            <a href="/" class="bg-transparent cursor-pointer leading-normal"></a>
        </span>
        
     <div class="lg:flex hidden text-xs">
               
    <!-- logo-->
    <a href="/">
        <img src="/images/logo.png" class="border-none cursor-pointer inline-block w-40 align-middle">
    </a>
    </div>
  
    <div class="font-medium leading-6 mx-auto z-10">
      <a href="/about" class="bg-transparent cursor-pointer leading-6 pr-8">About</a>
      <a href="/contact" class="bg-transparent cursor-pointer leading-6 pr-8">Contact</a>
      <a href="/pricing" class="bg-transparent cursor-pointer leading-6 pr-8">Pricing</a>
  
      @if (Route::has('login'))
          @auth
                  <a href="{{ url('dashboard') }}" class="leading-6 pr-8">Dashboard</a>    
              @else

                  <a href="{{ Route('dashboard')}}"class="leading-6 pr-8">Login</a>
                  @if (Route::has('register'))

                  <a href="{{ route('register') }}" class="lg-4 text-md text-gray-700 underline leading-6 pr-8">Register</a>
              @endif
          @endauth
      @endif
          </div>
      </nav>
    </div>
</html>
