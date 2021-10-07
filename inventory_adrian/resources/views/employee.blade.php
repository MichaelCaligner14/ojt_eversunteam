<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initials-scale=1.0">
    <title>Inventory System</title>
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
  
  <div class="relative min-h-screen md:flex">
  <!--mobile menu-->
  <div class="bg-casal-500 text-gray-100 flex justify-between md:hidden">
       <a href="#" class="block p-4 text-white font-medium"> </a>

       <button class="mobile-menu p-4 focus:ootline-none focus:bg-gray-700">
          <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
       </button>
  </div>
  <!--reposive-->
  <div class="sidebar bg-shark-500 text-blue-100 w-64 space-y-40 py-7 px-2 absolute inset-y-0 left-0 transform -translate-x-full md:relative md:translate-x-0 transition duration-200 ease-in-out>">
      <a href="#" class="px-6">
            <a href="#" class="px-6 text-2xl">
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
                  <a href="employee" class="gap-2 py-2 5 px-4 rounded transition duration-200 hover:bg-casal-500 hover:text-white flex items-center space-x-4">
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

        <div class="flex-1  w-full">
            <header class="bg-casal-500 p-4 font-bold text-left text-white">INVENTORY SYSTEM </header>
            <div class="p-8">
                <h1 class="font-fourth font-bold text-3xl ">--EMPLOYEE--
                  <a class="float-right" href="logout">
                <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                  </svg>
            </a></h1>
                <div class="bg-black-900 pt-1" style="width: full; height: 5px;"></div>
            </div>
     
        <script src="script.js"></script>


            <div class="bg-white lg:w-3/4 mx-auto lg:px-16 xs:px-6 sm:px-6 md:px-10 pt-16 justify-start">
                <div class="flex-1 p-10 font-bold justify-center lg:px-16 xs:px-6 sm:px-6 md:px-10">
                @if (Session::has('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">{{Session::get('success')}}</div>
                @endif
                @if (Session::has('fail'))
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">{{Session::get('fail')}}</div>
                @endif
                
                  <div class="flex w-full float-left xs:w-full lg:px-16 xs:px-6 sm:px-6 md:px-10 gap-2">  

          
                
                <form action="addemp" method="post" class="flex gap-2 ">
                
                    @csrf
                    
                          <div class="w-60 px-1">
                              <label class="text-gray-600">Name</label>
                              <input type="text" placeholder="Name" name="name" value="{{old('name')}}" class="w-full mt-2 mb-2 px-4 py-2 border border-black-900 rounded-md
                              text-gray-700"/>
                              <span class="text-red-800">@error('name') {{$message}} @enderror </span>

                          </div>

                          <div class="w-60 px-1">
                              <label class="text-gray-600 ">Phone</label>
                              <input type="text" placeholder="Phone" name="phone" value="{{old('phone')}}" class="w-full mt-2 mb-2 px-2 py-2 border border-black-900 rounded-md
                              text-gray-700 "/>
                              <span class="text-red-800">@error('phone') {{$message}} @enderror </span>
                          </div>  
                    </div>

  
                      <div class="flex lg:px-16 xs:px-6 sm:px-6 md:px-10 gap-2">

                        <div class="w-60 px-1">
                            <label class="text-gray-600">Email</label>
                            <input type="text" placeholder="Email" name="email" value="{{old('email')}}" class="w-full mt-2 mb-2 px-4 py-2 border border-black-900 rounded-md
                            text-gray-600 "/>
                            <span class="text-red-800">@error('email') {{$message}} @enderror </span>
                        </div>

                        <div class="w-60 px-1">
                            <label class="text-gray-600">Position</label>
                            <input type="text" placeholder="Position" name="position" value="{{old('position')}}" class="w-full mt-2 mb-2 px-4 py-2 border border-black-900 rounded-md
                            text-gray-700 ">
                            <span class="text-red-800">@error('position') {{$message}} @enderror </span>
                        </div>
                        
                        <div class="lg:w-60 xs:w-24 sm:w-24 md:w-24">
                          <button type="submit" class="w-60 mt-8 mb-2 px-4 py-2 border rounded-md bg-blaze-orange-500 text-white font-bold ">ADD</button>
                        </div>
                    </div>
  
                </form>
  

            <br>
            <br>
            <br>

            <!--TABLE-->
            <table class=" shadow-md border-collapse w-full">
              <thead>
                  <tr>
                      <th class="p-3 font-bold text-sm uppercase bg-shark-500 text-white border border-gray-300 hidden lg:table-cell">#</th>
                      <th class="p-3 font-bold text-sm uppercase bg-shark-500 text-white border border-gray-300 hidden lg:table-cell">Name</th>
                      <th class="p-3 font-bold text-sm uppercase bg-shark-500 text-white border border-gray-300 hidden lg:table-cell">Phone</th>
                      <th class="p-3 font-bold text-sm uppercase bg-shark-500 text-white border border-gray-300 hidden lg:table-cell">Email</th>
                      <th class="p-3 font-bold text-sm uppercase bg-shark-500 text-white border border-gray-300 hidden lg:table-cell">Position</th>
                      <th class="p-3 font-bold text-sm uppercase bg-shark-500 text-white border border-gray-300 hidden lg:table-cell">Actions</th>
                  </tr>
              </thead>
              <tbody>
              @foreach ($list as $item)
                  <tr class="bg-hint-of-green-500 lg: flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
                    <td class="w-full lg:w-auto p-1.5 text-gray-800 text-center border text-sm border-b block lg:table-cell  lg:static">
                        <span class="lg:hidden float-left top-0 left-0 px-2 py-1 text-xs font-bold uppercase">#</span>
                        {{$item->id}}

                    </td>

                    <td class="w-full lg:w-auto p-1.5 text-gray-800 text-center border text-sm border-b block lg:table-cell  lg:static">
                        <span class="lg:hidden float-left top-0 left-0 px-2 py-1 text-xs font-bold uppercase">Name</span>
                        {{$item->name}}

                    </td>

                    <td class="w-full lg:w-auto p-1.5 text-gray-800 text-center border text-sm border-b block lg:table-cell  lg:static">
                        <span class="lg:hidden float-left top-0 left-0 px-2 py-1 text-xs font-bold uppercase">Phone</span>
                        {{$item->phone}}

                    </td>

                      <td class="w-full lg:w-auto p-1.5 text-gray-800 border border-b text-sm text-center block lg:table-cell  lg:static">
                        <span class="lg:hidden float-left top-0 left-0 px-2 py-1 text-xs font-bold uppercase">Email</span>
                        {{$item->email}}

                      </td>

                      <td class="w-full lg:w-auto p-1.5 text-gray-800 border border-b text-sm text-center block lg:table-cell  lg:static">
                        <span class="lg:hidden float-left top-0 left-0 px-2 py-1 text-xs font-bold uppercase">Position</span>
                        {{$item->position}}

                      </td>

                    <td class="w-full lg:w-auto p-1.5 text-gray-800  border border-b text-sm text-center lg:table-cell  lg:static">
                        <span class="lg:hidden float-left top-0 left-0 px-2 py-1 text-xs font-bold uppercase">Actions</span>
                        <a href="empedit/{{ $item->id }}" class="text-blue-400 hover:text-blue-600 underline"><svg xmlns="http://www.w3.org/2000/svg" 
                            class="h-5 w-5 inline-block" viewBox="0 0 20 20" fill="black"><path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                          </svg></a>
                        <button id="deletemodal" class="text-blue-400 hover:text-blue-600 underline pl-6"><svg xmlns="http://www.w3.org/2000/svg" 
                            class="h-5 w-5 inline-block" viewBox="0 0 20 20" fill="black"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                          </svg></button>
                    </td>
                </tr>
                @endforeach
              </tbody>
          </table>
</div>
</div>

          <footer class="bg-casal-500 p-4 font-bold mt-36  min-w-full text-white text-right">INVENTORY SYSTEM<br>09458835712<br>EVERSUN </footer>
 <!--Open modal delete-->


 <div id="modal"
    class="fixed top-0 left-0 w-screen h-screen flex items-center justify-center bg-black-400 bg-opacity-50 transform scale-0 transition-transform duration-300">
    <!-- Modal content -->
    <div class="bg-white w-auto h-auto p-12"> 
        <!-- Test content -->
        <p>Delete this from table?</p>
        <div class="mt-3 flex justify-end space-x-3">
                <button id="closebutton" class="px-3 py-1 rounded hover:bg-red-300 hover:bg-opacity-50 hover:text-red-900">Cancel</button>
                <a href="deletes/{{ $item->id }}"  class="px-3 py-1 bg-red-800 text-gray-200 hover:bg-red-600 rounded">delete</a>
        </div>
    </div>
</div>


<script src="empdeletemodal.js"></script>
        </body>
</html>