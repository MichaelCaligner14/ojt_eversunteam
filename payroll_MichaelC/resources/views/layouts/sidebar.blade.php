
<!doctype html>
<html>
<head>
  <!-- ... -->
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  


    <title>Document</title>
</head>
<body>
<div class="relative min-h-screen md:flex">
    
    <!-- responsive -->
    <div class="bg-gray-800 text-gray-100 flex justify-between md:hidden">
          <a href="index.html" class="block p-4 text-white font-bold">Payroll</a>
          <button class="mobile-menu-button p-4 focus:outline-none focus:bg-gray-700">
            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
          </button>
        </div>
      
        <!-- sidebar -->
        <div  class="sidebar absolute text-white text-base w-64 bg-gray-700 space-y-6 py-7 px-2 inset-y-0 left-0 
          transform -translate-x-full md:relative md:translate-x-0 transition duration-200 ease-in-out">

         <img src="img/admin.png" class=" mx-auto py-4 w-48 h-36">
         <p class="text-center  font-bold">Payroll Manager</p>
         <p class="text-center   pb-5">Admin</p>
         
         <!-- nav -->
          <nav class="text-center pb-24">
            <a href="employee" class="py-4 m-3 rounded transition duration-200 justify-center flex hover:bg-blue-400 pl-8">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z" />
              </svg><span class="px-6">EMPLOYEES</span></a>

              <a href="attendance" class="py-4 m-3 rounded transition duration-200 justify-center flex hover:bg-blue-400 pl-10">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                  <path d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z" />
                </svg><span class="px-6">ATTENDANCE</span></a>
  
                <a href="records" class="py-4 m-3 rounded transition duration-200 justify-center flex hover:bg-blue-400 pl-3">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4l2 2h4a2 2 0 012 2v1H8a3 3 0 00-3 3v1.5a1.5 1.5 0 01-3 0V6z" clip-rule="evenodd" />
                    <path d="M6 12a2 2 0 012-2h8a2 2 0 012 2v2a2 2 0 01-2 2H2h2a2 2 0 002-2v-2z" />
                  </svg><span class="px-6">RECORDS</span></a>

                <a href="salary" class="py-4 m-3 rounded transition duration-200 justify-center flex hover:bg-blue-400">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z" />
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z" clip-rule="evenodd" />
              </svg><span class="px-6">SALARY</span></a>
        

              <a href="logout" class="py-4 m-3 rounded transition duration-200 justify-center flex hover:bg-blue-400">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z" clip-rule="evenodd" />
                  </svg><span class="px-5">LOGOUT</span></a>
            
          </nav>
        
          <p class="w-full h-5 text-sm text-white px-4">Contact Us</p>
          <hr style="border:solid;height: 5px;background-color: white;" class="m-4">
          <p class="w-full h-5 text-sm text-white px-4">Eversun Software</p>
          <p class="patrick.v@agentsofvalue.com w-48 h-5 text-sm text-white px-4">patrick.v@agentsofvalue.com</p>
          <p class="agentsofvalue.com w-32 h-6 text-sm text-white px-4">agentsofvalue.com</p>

            </div>
            @yield('sidebarnav') 
          
</body>
            </html>
