<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initials-scale=1.0">
    <title>Inventory System</title>
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
  <header class="bg-casal-500 p-2 font-medium text-left text-white">
    Inventory System
</header> 
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
            <a href="home" class=" py-2 5 px-4 rounded transition duration-200 hover:bg-casal-500 hover:text-white flex items-center space-x-4">
                    <svg class="w-10 h-10 " xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="white">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                      </svg>
                    Home</a>
                <a href="user" class=" py-2 5 px-4 rounded transition duration-200 hover:bg-casal-500 hover:text-white flex items-center space-x-4" >
                <svg class="w-10 h-10" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="white">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                  </svg>
                  User</a>
                  <a href="employee" class=" py-2 5 px-4 rounded transition duration-200 hover:bg-casal-500 hover:text-white flex items-center space-x-4" >
                <svg class="w-10 h-10" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>
                  Employee</a>
                <a href="order" class=" py-2 5 px-4 rounded transition duration-200 hover:bg-casal-500 hover:text-white flex items-center space-x-4">
                    <svg class="w-10 h-10" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                      </svg>
                    Order</a>
                <a href="product" class=" py-2 5 px-4 rounded transition duration-200 hover:bg-casal-500 hover:text-white flex items-center space-x-4">
                    <svg class="w-10 h-10" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                      </svg>
                    Product</a>
                <a href="category" class=" py-2 5 px-4 rounded transition duration-200 hover:bg-casal-500 hover:text-white flex items-center space-x-4">
                    <svg class="w-10 h-10" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                      </svg>
                    Category</a>
                <a href="inventory" class=" py-2 5 px-4 rounded transition duration-200 hover:bg-casal-500 hover:text-white flex items-center space-x-4">
                    <svg class="w-10 h-10" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M3 10h18M3 14h18m-9-4v8m-7 0h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                      </svg>
                    Inventory</a>


            </nav>
        </div>
     
        <script src="script.js"></script>
        <!--HEADER CONTENT-->
        <div class="flex-1 p-10  font-bold">
            <p class="text-4xl flex justify-between p-2">--ORDER--
            <a href="logout">
                <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                  </svg>
            </a>
            </p>

            <div class="bg-black-900 pt-1" style="width: full; height: 5px;"></div>

            <div class="bg-white lg:w-3/4 mx-auto lg:px-16 xs:px-6 sm:px-6 md:px-10 pt-16 justify-start">
           
                @if (Session::has('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">{{Session::get('success')}}</div>
                @endif
                @if (Session::has('fail'))
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">{{Session::get('fail')}}</div>
                @endif
                
                <form action="add" method="post" class="flex">
                @csrf
                   <div class="w-60 px-1">
                       <label class="text-gray-600">ID</label>
                        <input type="text" placeholder="" class="w-full mt-2 mb-2 px-4 py-2 border border-black-900 rounded-md
                              text-gray-600 "/>
                              
                          </div>

                          <div class="w-60 px-1">
                              <label class="text-gray-600">NAME</label>
                              <input type="text" placeholder="" name="name" value="{{old('name')}}" class="w-full mt-2 mb-2 px-4 py-2 border border-black-900 rounded-md
                              text-gray-700 "/>
                              <span class="text-red-800">@error('name') {{$message}} @enderror </span>
                          </div>

                          <div class="w-60 px-1">
                     <label class="text-gray-600 ">ORDER</label>
                              <input type="text" placeholder="" name="order" value="{{old('order')}}" class="w-full mt-2 mb-2 px-2 py-2 border border-black-900 rounded-md
                              text-gray-700 "/>
                              <span class="text-red-800">@error('order') {{$message}} @enderror </span>
                          </div>  

                    </div>
  
                      <div class="flex pl-64">
                        <div class="w-60 px-1">
                            <label class="text-gray-600">PRICE</label>
                            <input type="text" placeholder="" name="price" value="{{old('price')}}" class="w-full mt-2 mb-2 px-4 py-2 border border-black-900 rounded-md
                            text-gray-600 "/>
                            <span class="text-red-800">@error('price') {{$message}} @enderror </span>
                        </div>
                        <div class="w-60 px-1">
                            <label class="text-gray-600">QTY</label>
                            <input type="text" placeholder="" name="qty" value="{{old('qty')}}" class="w-full mt-2 mb-2 px-4 py-2 border border-black-900 rounded-md
                            text-gray-700 ">
                            <span class="text-red-800">@error('qty') {{$message}} @enderror </span>
                        </div>
                        <div class="w- px-1">
                            <label class="text-gray-600">DATE</label>
                            <input type="text" placeholder="" name="date" value="{{old('date')}}" class="w-full mt-2 mb-2 px-2 py-2 border border-black-900 rounded-md
                            text-gray-700 "/>
                            <span class="text-red-800">@error('date') {{$message}} @enderror </span>
                        </div>

                        <div class=" lg:w-24 xs:w-24 sm:w-24 md:w-24 px-2 mt-0">
                          <button type="submit" class="w-24 mt-8 mb-2 px-4 py-2 border rounded-md bg-blaze-orange-500 text-white font-bold ">ADD</button>
                      </div>
                    </div>
  
                </form>
  

            <br>
            <br>
            <br>

            <!--TABLE-->
            <table id="datatable" class=" shadow-md border-collapse w-full">
              <thead>
                  <tr>
                      <th class="p-3 font-bold text-sm uppercase bg-shark-500 text-white border border-gray-300 hidden lg:table-cell">#</th>
                      <th class="p-3 font-bold text-sm uppercase bg-shark-500 text-white border border-gray-300 hidden lg:table-cell">Name</th>
                      <th class="p-3 font-bold text-sm uppercase bg-shark-500 text-white border border-gray-300 hidden lg:table-cell">Order</th>
                      <th class="p-3 font-bold text-sm uppercase bg-shark-500 text-white border border-gray-300 hidden lg:table-cell">Price</th>
                      <th class="p-3 font-bold text-sm uppercase bg-shark-500 text-white border border-gray-300 hidden lg:table-cell">Quantity</th>
                      <th class="p-3 font-bold text-sm uppercase bg-shark-500 text-white border border-gray-300 hidden lg:table-cell">Date</th>
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
                        <span class="lg:hidden float-left top-0 left-0 px-2 py-1 text-xs font-bold uppercase">Order</span>
                        {{$item->order}}
                    </td>

                      <td class="w-full lg:w-auto p-1.5 text-gray-800 border border-b text-sm text-center block lg:table-cell  lg:static">
                        <span class="lg:hidden float-left top-0 left-0 px-2 py-1 text-xs font-bold uppercase">Price</span>
                        {{$item->price}}
                      </td>

                      <td class="w-full lg:w-auto p-1.5 text-gray-800 border border-b text-sm text-center block lg:table-cell  lg:static">
                        <span class="lg:hidden float-left top-0 left-0 px-2 py-1 text-xs font-bold uppercase">Quantity</span>
                        {{$item->qty}}
                      </td>

                      <td class="w-full lg:w-auto p-1.5 text-gray-800 border border-b text-sm text-center block lg:table-cell  lg:static">
                        <span class="lg:hidden float-left top-0 left-0 px-2 py-1 text-xs font-bold uppercase">Date</span>
                        {{$item->date}}
                      </td>

                    <td class="w-full lg:w-auto p-1.5 text-gray-800  border border-b text-sm text-center lg:table-cell  lg:static">
                        <span class="lg:hidden float-left top-0 left-0 px-2 py-1 text-xs font-bold uppercase">Actions</span>
                        
                        <button id="update" class="text-blue-400 hover:text-blue-600 underline" > <svg xmlns="http://www.w3.org/2000/svg" 
                            class="h-5 w-5 inline-block" viewBox="0 0 20 20" fill="black"><path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                          </svg></button>

                        <a href="delete/{{ $item->id }}" class="text-blue-400 hover:text-blue-600 underline pl-6"><svg xmlns="http://www.w3.org/2000/svg" 
                            class="h-5 w-5 inline-block" viewBox="0 0 20 20" fill="black"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                          </svg></a>
                    </td>
                </tr>
                @endforeach
              </tbody>
          </table>

          <!--MODAL-->


    <div class="bg-black bg-opacity-50 absolute inset-0 hidden h-5/6 justify-center items-center" id="overlay">
        <div class="bg-gray-200  py-2 px-3 rounded shadow-xl text-gray-800">
            <div class="flex justify-between items-center">
            <h4 class="text-lg font-bold">UPDATE</h4>
                
            </div>
            <form action="update" method="post" class="m-8">
            @csrf
                
                          <div class="w-96 px-1">
                              <label class="text-gray-600">NAME</label>
                              <input type="text" placeholder="" name="name" value="{{old('name')}}" id="name" class="w-full mt-2 mb-2 px-4 py-2 border border-black-900 rounded-md
                              text-gray-700 "/>
                              <span class="text-red-800">@error('name') {{$message}} @enderror </span>
                          </div>

                          <div class="w-96 px-1">
                     <label class="text-gray-600 ">ORDER</label>
                              <input type="text" placeholder="" name="order" value="{{old('order')}}" id="order" class="w-full mt-2 mb-2 px-2 py-2 border border-black-900 rounded-md
                              text-gray-700 "/>
                              <span class="text-red-800">@error('order') {{$message}} @enderror </span>
                          </div>  

  
                        <div class="w-96 px-1">
                            <label class="text-gray-600">PRICE</label>
                            <input type="text" placeholder="" name="price" value="{{old('price')}}" id="price" class="w-full mt-2 mb-2 px-4 py-2 border border-black-900 rounded-md
                            text-gray-600 "/>
                            <span class="text-red-800">@error('price') {{$message}} @enderror </span>
                        </div>
                        <div class="w-96 px-1">
                            <label class="text-gray-600">QTY</label>
                            <input type="text" placeholder="" name="qty" value="{{old('qty')}}" id="qty" class="w-full mt-2 mb-2 px-4 py-2 border border-black-900 rounded-md
                            text-gray-700 ">
                            <span class="text-red-800">@error('qty') {{$message}} @enderror </span>
                        </div>
                        <div class="w-96 px-1">
                            <label class="text-gray-600">DATE</label>
                            <input type="text" placeholder="" name="date" value="{{old('date')}}" id="date" class="w-full mt-2 mb-2 px-2 py-2 border border-black-900 rounded-md
                            text-gray-700 "/>
                            <span class="text-red-800">@error('date') {{$message}} @enderror </span>
                        </div>

  
                </form>
            
            <div class="mt-3 flex justify-end space-x-3">
                <button class="px-3 py-1 rounded hover:bg-red-300 hover:bg-opacity-50 hover:text-red-900" id="close-modal">Cancel</button>
                <a href="update"  class="px-3 py-1 bg-red-800 text-gray-200 hover:bg-red-600 rounded">Update</a>
            </div>
        </div>
    </div>
    
    <script>
        window.addEventListener('DOMContentLoaded', () =>{
            const overlay = document.querySelector('#overlay')
            const delBtn = document.querySelector('#update-btn')
            const closeBtn = document.querySelector('#close-modal')

            const toggleModal = () => {
                overlay.classList.toggle('hidden')
                overlay.classList.toggle('flex')
            }

            delBtn.addEventListener('click', toggleModal)

            closeBtn.addEventListener('click', toggleModal)
        })

    </script>
        </body>
</html>