<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initials-scale=1.0">
    <title>Inventory System</title>
    <link rel="stylesheet" href="css/app.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
  <header class="bg-casal-500 p-2 font-medium text-left text-white">
    Inventory System
</header> 
  
        <!--HEADER CONTENT-->
        <div class="flex-1 p-10  font-bold">
            <p class="text-4xl flex justify-between p-2">--UPDATE--
            <a href="logout">
                <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                  </svg>
            </a>
            </p>

            <div class="bg-black-900 pt-1 justify-center items-center" style="width: full; height: 5px;"></div>

            <div class="flex bg-white lg:w-3/4 mx-auto lg:px-16 xs:px-6 sm:px-6 md:px-10 pt-16 justify-center items-center">
            <div class="bg-gray-200  py-2 px-3 rounded shadow-xl text-gray-800">
           
                @if (Session::has('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">{{Session::get('success')}}</div>
                @endif
                @if (Session::has('fail'))
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">{{Session::get('fail')}}</div>
                @endif
                
                <form action="{{ route('update') }}" method="post" class="m-8 justify-center items-center">
            @csrf


                        <input type="hidden" placeholder="" name="oid" value="{{ $Info->id }}" class="w-full mt-2 mb-2 px-4 py-2 border border-black-900 rounded-md
                              text-gray-600 "/>

                          <div class="w-96 px-1">
                              <label class="text-gray-600">NAME</label>
                              <input type="text" placeholder="" name="name" value="{{ $Info->name }}" id="name" class="w-full mt-2 mb-2 px-4 py-2 border border-black-900 rounded-md
                              text-gray-700 "/>
                              <span class="text-red-800">@error('name') {{$message}} @enderror </span>
                          </div>

                          <div class="w-96 px-1">
                     <label class="text-gray-600 ">ORDER</label>
                              <input type="text" placeholder="" name="order" value="{{ $Info->order }}" id="order" class="w-full mt-2 mb-2 px-2 py-2 border border-black-900 rounded-md
                              text-gray-700 "/>
                              <span class="text-red-800">@error('order') {{$message}} @enderror </span>
                          </div>  

  
                        <div class="w-96 px-1">
                            <label class="text-gray-600">PRICE</label>
                            <input type="text" placeholder="" name="price" value="{{ $Info->price }}" id="price" class="w-full mt-2 mb-2 px-4 py-2 border border-black-900 rounded-md
                            text-gray-600 "/>
                            <span class="text-red-800">@error('price') {{$message}} @enderror </span>
                        </div>
                        <div class="w-96 px-1">
                            <label class="text-gray-600">QTY</label>
                            <input type="text" placeholder="" name="qty" value="{{ $Info->qty }}" id="qty" class="w-full mt-2 mb-2 px-4 py-2 border border-black-900 rounded-md
                            text-gray-700 ">
                            <span class="text-red-800">@error('qty') {{$message}} @enderror </span>
                        </div>
                        <div class="w-96 px-1">
                            <label class="text-gray-600">DATE</label>
                            <input type="text" placeholder="" name="date" value="{{ $Info->date }}" id="date" class="w-full mt-2 mb-2 px-2 py-2 border border-black-900 rounded-md
                            text-gray-700 "/>
                            <span class="text-red-800">@error('date') {{$message}} @enderror </span>
                        </div>

                        <div class=" lg:w-24 xs:w-24 sm:w-24 md:w-24 px-2 mt-0">
                          <button type="submit" class="w-24 mt-8 mb-2 px-4 py-2 border rounded-md bg-blaze-orange-500 text-white font-bold ">UPDATE</button>
                      </div>

                </form>
                </div>
                </div>

        </body>
</html>