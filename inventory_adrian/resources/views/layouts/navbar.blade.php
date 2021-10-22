<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="css/app.css">
    <title>Inventory System</title>
</head>
<body>
     <!--SIDENAVBAR-->
     <div class="relative min-h-screen md:flex">
        <!--mobile menu-->
        <div class="bg-casal-500 text-gray-100 flex justify-between md:hidden">
             <a href="home.html" class="block p-4 text-white font-medium"> </a>

             <button class="mobile-menu p-4 focus:ootline-none focus:bg-gray-700">
                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
              </svg>
             </button>
        </div>
        <!--reponsive-->
        <div class="sidebar bg-shark-500 text-blue-100 w-64 space-y-40 py-7 px-2 absolute inset-y-0 left-0 transform -translate-x-full md:relative md:translate-x-0 transition duration-200 ease-in-out>">
            <p href="#" class="px-6">
            </a>
            <nav>
            <a href="home" class="gap-2 py-2 5 px-4 rounded transition duration-200 hover:bg-casal-500 hover:text-white flex items-center space-x-4">
                    <svg class="w-10 h-10 " xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="white">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                      </svg>
                    Home</a>
                <a href="user" class="gap-2 py-2 5 px-4 rounded transition duration-200 hover:bg-casal-500 hover:text-white flex items-center space-x-4" >
                <svg class="w-10 h-10" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="white">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                  </svg>
                  User</a>
                  <a href="employee" class="gap-2 py-2 5 px-4 rounded transition duration-200 hover:bg-casal-500 hover:text-white flex items-center space-x-4" >
                <svg class="w-10 h-10" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>
                  Employee</a>
                <a href="order" class="gap-2 py-2 5 px-4 rounded transition duration-200 hover:bg-casal-500 hover:text-white flex items-center space-x-4">
                    <svg class="w-10 h-10" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                      </svg>
                    Order</a>
                <a href="product" class="gap-2 py-2 5 px-4 rounded transition duration-200 hover:bg-casal-500 hover:text-white flex items-center space-x-4">
                    <svg class="w-10 h-10" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                      </svg>
                    Product</a>
                <a href="category" class="gap-2 py-2 5 px-4 rounded transition duration-200 hover:bg-casal-500 hover:text-white flex items-center space-x-4">
                    <svg class="w-10 h-10" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                      </svg>
                    Category</a>
                <a href="inventory" class="gap-2 py-2 5 px-4 rounded transition duration-200 hover:bg-casal-500 hover:text-white flex items-center space-x-4">
                    <svg class="w-10 h-10" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M3 10h18M3 14h18m-9-4v8m-7 0h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                      </svg>
                    Inventory</a>
            </nav>
        </div>
        <div class="flex-1 w-full h-full">
            <header>
                @component('components.test')
                @slot('tittle')
                INVENTORY SYSTEM
                @endslot
                @endcomponent
            </header>

            <div class="p-8">
                <h1 class="font-fourth font-bold text-3xl ">Welcome<a class="float-right" href="logout">
                <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                  </svg>
            </a></h1>
                <div class="bg-black-900 pt-1" style="width: full; height: 5px;"></div>
            </div>

            @yield('content')

</body>
</html>