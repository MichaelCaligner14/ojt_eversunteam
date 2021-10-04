
<!doctype html>
<html>
<head>
  <!-- ... -->
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <title>Payroll System</title>
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

         
       
         
         <!-- nav -->
         
      
          
        </div>
      
        <!-- content -->
        <div class="flex-1 p-10 text-2xl font-bold">
            
            <p class="w-80 h-12 text-2xl font-bold">UPDATE INFORMATION</p>
            <div class="bg-gray-300" style="width: full; height: 5px;">

        </div>

<div class="grid md:grid-flow-col gap-4 ">
        <div class="grid grid-cols-1 gap-4">
        <div class="mx-auto">
            
        <form action="update" method="POST">
            
            <h1 class="py-12">{{$Title}} | EMPLOYEE INFORMATION</h1>
        <div class="flex flex-wrap -mx-3 mb-4">
                <div class="w-full px-3">
                <input type="text" name="empname" value="{{$Info->id}}">
                  <label class="block uppercase tracking-wide text-xs font-bold mb-2 mr-8" >
                    Name
                  </label>
                  <input class="appearance-none block text-base w-full bg-white text-black border 
                  border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" type="text" name="name" placeholder="Full Name" value="{{$Info->name}}">
                </div>
              </div>
              
              <div class="flex flex-wrap -mx-3 mb-4">
                <div class="w-full px-3">
                  <label class="block uppercase tracking-wide text-xs font-bold mb-2">
                    Address
                  </label>
                  <input class="appearance-none block w-full bg-white text-black border 
                  border-red-500 rounded text-base py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" name="address" type="text" placeholder="Davao City..." value="{{$Info->address}}">
               
                </div>
              </div>
    
              <div class="flex flex-wrap -mx-3 mb-2">
                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                  <label class="block uppercase tracking-wide  text-xs font-bold mb-2">
                   Age
                  </label>
                  <input class="appearance-none block w-full text-base bg-white text-black border border-gray-200 
                  rounded py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
                   type="number" min="1" max="100" name="age" value="{{$Info->age}}">
                  
                </div>
                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                  <label class="block uppercase tracking-wide  text-xs font-bold mb-2">
                    Sex
                  </label>
                  <input class="appearance-none block w-full text-base bg-white text-black border border-gray-200 rounded py-2 px-4 
                  leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="sex" type="text" min="100" value="{{$Info->sex}}">
               
                </div>
                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                  <label class="block uppercase tracking-wide  text-xs font-bold mb-2">
                   Rate
                  </label>
                  <input class="appearance-none block w-full text-base bg-white text-black border border-gray-200 rounded py-2 
                  px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="rate" type="number" min="100" value="{{$Info->rate}}">
                </div>
              </div>
              <button class="bg-blue-500 hover:bg-blue-700 w-full text-white text-base font-bold mt-6 py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                UPDATE RECORDS
              </button>
        </div>
</form>
</div>
</div>
</div>


</div>
</body>
</html>