<html lang="en">
<head>
<meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Student Registration</title>

</head>
<body>


  
    <div class="relative min-h-screen md:flex">
      

        <!-- mobile menu bar -->
        <div class="bg-gray-800 text-gray-100 flex justify-between md:hidden">
          <!-- logo -->
          
          <a href="#" class="block p-4 text-white font-bold">J ACADEMY</a>
          
      
          <!-- mobile menu button -->
          <button class=" mobile-menu-button p-4 focus:outline-none focus:bg-gray-700">

            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
          </button>
        </div>
        
      
        <!-- sidebar -->
        <div  class="sidebar absolute text-white text-base w-64 bg-gray-800 space-y-10 py-9 px-8 inset-y-0 left-0 
          transform -translate-x-full md:relative md:translate-x-0 transition duration-200 ease-in-out">
      
          <!-- logo -->
          <a href="#" class="text-white flex items-center space-x-2 px-4">
            <svg class="w-8 h-8" xmlns="" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                
           <img src="./logo.png"/>
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
            </svg>
            
          </a>
        
          <hr style="height:1px; background-color:white;" class="mb-1">
          <hr style="height:1px; background-color:white;" class="mb-1">
          <!-- nav -->
          <nav>
            
            <a href="homepage" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 hover:text-white "> 
                
                <span class=" inline-block">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                </span>    </svg>Home  
                
            </a>
            <a href="stdntreg" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 hover:text-white">
                <span class=" inline-block">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 4v12l-4-2-4 2V4M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </span> </svg>
                 Registration
            </a>
            <a href="subjects" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 hover:text-white">
                <span class=" inline-block">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                      
                </span>  </svg>
                Subjects
            </a>
            <a href="dashboard" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 hover:text-white">
                <span class=" inline-block">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2" />
                      
                </span>  </svg>
                Dashboard
            </a>
            <a href="liststudents" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 hover:text-white">
                <span class=" inline-block">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path d="M12 14l9-5-9-5-9 5 9 5z" />
                    <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                </span>   </svg>
                Student
            </a>
            <a href="index" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 hover:text-white">
                <span class=" inline-block">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
  </span> </svg>
                Complain
              </a>
            <a href="about" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 hover:text-white">
                <span class=" inline-block">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                 </span> </svg>
               
                About
              </a>
              <a href="welcome" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 hover:text-white">
                <span class=" inline-block">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                </span>   </svg>
                
                Logout

              </a>
              
              <br>

          </nav>
        
        </div>
        <div class="container">
               @yield('content') 

</body>
</html>