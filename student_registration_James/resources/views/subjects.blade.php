<html lang="en">
<head>
<meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Subjects</title>

</head>
<body>
<header class="w-full h-15 bg-gray-600 static bottom-2 font-bold font-roboto text-4x1 text-white text-right">
      Student Registration
      
      
        
</header>
  
    <div class="relative min-h-screen md:flex">

        <!-- mobile menu bar -->
        <div class="bg-gray-800 text-gray-100 flex justify-between md:hidden">
          <!-- logo -->
          
          <a href="#" class="block p-4 text-white font-bold">J ACADEMY</a>
          
      
          <!-- mobile menu button -->
          <button class="mobile-menu-button p-4 focus:outline-none focus:bg-gray-700">

            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
          </button>
        </div>
        
      
        <!-- sidebar -->
        <div class="sidebar bg-gray-800 text-gray-100 w-1/6 space-y-6 py-9 px-2 absolute inset-y-0 left-0 transform -translate-x-full
         md:relative md:translate-x-0 transition duration-200 ease-in-out">
      
          <!-- logo -->
          <a href="#" class="text-white flex items-center space-x-2 px-4">
            <svg class="w-8 h-8" xmlns="" fill="none" viewBox="0 0 24 24" stroke="currentColor">    
                
    <img src="./logo.png"/>
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
            </svg>
            
          </a>
        
          <p class="text-xs md:text-center">___________________________________ </p>
          <p class="text-xs md:text-center">___________________________________ </p>
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
                Student Registration
            </a>
            <a href="subjects" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 hover:text-white">
                <span class=" inline-block">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
</svg>
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
           
              <p class="text-xs md:text-center">234-2315-123 </p>
              <p class="text-xs md:text-center">pinedajamesryan@gmail.com </p>


          </nav>
        </div>
      
        <!-- content -->
        <div class="flex-1 p-10 text-2xl font-bold">
            <img
            src=""
            
          />
        
   
          @if(Session::get('success'))
          <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">{{Session::get('success')}}</div>
          @endif
          @if(Session::get('fail'))
          <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">{{Session::get('fail')}}</div>
          @endif
          
        <form action="addsubjects" method="post"  class=" border-2   border-gray-800 font-bold rounded-md px-6 py-6" >

        @csrf
        <p class="text-6xl flex-col w-23 h-20 text-gray-800 font-bold font-roboto">List of Subject Offers</p>
        <hr style="height:5px; background-color:black;" class="mb-3">
       
       
        <table class="border-collapse w-full">
          
          <thead>
              <tr>
                  <th class="p-3 font-bold uppercase bg-blue-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Subject Code</th>
                  <th class="p-3 font-bold uppercase bg-blue-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Description</th>
                  <th class="p-3 font-bold uppercase bg-blue-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Time</th>
                  <th class="p-3 font-bold uppercase bg-blue-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Section</th>
              </tr>
          </thead>
          <tbody>

             

              <tr class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
                  <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                      <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Subject Code</span>
                      PE (2021)
                  </td>
                  <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                      <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Description</span>
                      Physical Education   
                  </td>
                  <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                      <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Time</span>
                      9:00am - 10:00am
                  </td>
                  <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                      <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Section</span>
                      B502 
                  </td>
              </tr>

              
              <tr class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
                  <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                      <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Subject Code</span>
                      CC 102 (2018)
                  </td>
                  <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                      <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Description</span>
                      Computer Programming 1   
                  </td>
                  <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                      <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Time</span>
                     6:00am - 7:00am
                  </td>
                  <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                      <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Section</span>
                     B501 
                  </td>
              </tr>

               
              <tr class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
                  <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                      <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Subject Code</span>
                      Hum 101(2018)	
                  </td>
                  <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                      <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Description</span>
                      Art Appreciation
                  </td>
                  <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                      <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Time</span>
                      10:00am - 11:00am	
                  </td>
                  <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                      <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Section</span>
                      A504 
                  </td>
              </tr>

               
              <tr class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
                  <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                      <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Subject Code</span>
                      ESocSciPhil (2018)
                  </td>
                  <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                      <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Description</span>
                      Gender and Society
                  </td>
                  <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                      <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Time</span>
                     2:00pm - 3:00pm
                  </td>
                  <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                      <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Section</span>
                     B505 
                  </td>
              </tr>

                
              <tr class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
                  <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                      <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Subject Code</span>
                      SciTech 101 
                  </td>
                  <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                      <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Description</span>
                      Science, Technology and Society
                  </td>
                  <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                      <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Time</span>
                     1:00pm - 2:00pm
                  </td>
                  <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                      <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Section</span>
                     B504 
                  </td>
              </tr>

                
              <tr class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
                  <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                      <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Subject Code</span>
                      Hist 101
                  </td>
                  <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                      <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Description</span>
                      Readings in Philippine History
                  </td>
                  <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                      <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Time</span>
                     7:00am - 8:00am
                  </td>
                  <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                      <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Section</span>
                     A503 
                  </td>
              </tr>

                
              <tr class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
                  <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                      <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Subject Code</span>
                      Homeroom 101
                  </td>
                  <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                      <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Description</span>
                      Personal Growth and Development
                  </td>
                  <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                      <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Time</span>
                     8:00am - 9:00am
                  </td>
                  <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                      <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Section</span>
                     A505
                  </td>
              </tr>

                
              <tr class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
                  <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                      <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Subject Code</span>
                      CC 101 
                  </td>
                  <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                      <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Description</span>
                      Introduction to Computing
                  </td>
                  <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                      <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Time</span>
                     11:00am - 12:00pm
                  </td>
                  <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                      <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Section</span>
                     A501    
                  </td>
              </tr>


              <tr class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
                  <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                      <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Subject Code</span>
                     Total Units: 26.00
                  </td>
                  <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                      <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Description</span>
                      
                  </td>
                  <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                      <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Time</span>
                    
                  </td>
                  <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                      <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Section</span>
                     
                  </td>
              </tr>


                
            </tbody>
        <br>
        
</table>
<br>


          <p class="text-lg font-roboto text-gray-800 mb-2 mt-2">Subject Code</p>
                <input class="w-3/5 px-3 py-1 border border-gray-800 rounded-md" type="text" placeholder="Enter Subject Code" name="subject" value="{{old('subject')}}">
               <br>
                <span class="text-red-800 text-sm">@error('subject') {{$message}} @enderror </span>

                <p class="text-lg font-roboto text-gray-800 mb-2 mt-2">Description</p>
                <input class="w-3/5 px-3 py-1 border border-gray-800 rounded-md" type="text" placeholder="Enter Description" name="description" value="{{old('description')}}">
                <br>
                <span class="text-red-800 text-sm">@error('description') {{$message}} @enderror </span>

                <p class="text-lg font-roboto text-gray-800 mb-2 mt-2">Time</p>
                
                <select class="form-control w-2/6 mt-2 mb-2 px-4 lg:py-1 xs:py-1 sm:py-1 border rounded-md
                border-gray-800 text-gray-600 focus:outline-none focus:border-green-500" id="" name="time" value="{{old('time')}}">
                            <option value="0">Select Time--</option>
                            <option value="6:00am - 7:00am">6:00am - 7:00am</option>
                            <option value="7:00am - 8:00am">7:00am - 8:00am</option>
                            <option value="8:00am - 9:00am">8:00am - 9:00am</option>
                            <option value="9:00am - 10:00am">9:00am - 10:00am</option>
                            <option value="10:00am - 11:00am">10:00am - 11:00am</option>
                            <option value="11:00am - 12:00am">11:00am - 12:00am</option>
                            <option value="1:00pm - 2:00pm">1:00pm - 2:00pm</option>
                          </select>
                <br>
                <span class="text-red-800 text-sm ">@error('time') {{$message}} @enderror </span>

                <p class="text-lg font-roboto text-gray-800 mb-2 mt-2">Section</p>
                <select class="form-control w-2/6 mt-2 mb-2 px-4 lg:py-1 xs:py-1 sm:py-1 border rounded-md
                border-gray-800 text-gray-600 focus:outline-none focus:border-green-500" id="" name="section" value="{{old('section')}}">
                            <option value="0">Select Section--</option>
                            <option value="A501">A501</option>
                            <option value="A502">A502</option>
                            <option value="A503">A503</option>
                            <option value="A504">A504</option>
                            <option value="A505">A505</option>
                            <option value="B501">B501</option>
                            <option value="B502">B502</option>
                            <option value="B503">B503</option>
                            <option value="B504">B504</option>
                            <option value="B505">B505</option>
                          </select>
                <br>
                <span class="text-red-800 text-sm ">@error('section') {{$message}} @enderror </span>

              
                <br>
                <button type="submit"
               class="py-1 px-2 bg-primarycolor hover:bg-blue-700 rounded-2 text-white font-bold uppercase text-lg mt-4 transform bg-gray-600 transition-all duration-500 bg-black bg-opacity-90 rounded" style="width: 90px; height: 58px;"
               >FINISH</button>

              </div>
              
      
      </div>
      <footer class="w-full h-15 bg-gray-600 font-bold static bottom-1 text-white text-right">
        Contact Us
       
      <br>
      pinedajamesryan@gmail.com
      <br>
      223-2425-114
      
        
</footer>
    <script src="script.js"></script>
</body>
</html>