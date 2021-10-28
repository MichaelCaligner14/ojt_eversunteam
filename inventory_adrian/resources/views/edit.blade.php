<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initials-scale=1.0">
    <title>Inventory System</title>
    <link rel="stylesheet" href="css/app.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-black-100">
  <header class="bg-casal-500 p-2 font-medium text-left text-white">
    Inventory System
</header> 
  
        <!--HEADER CONTENT-->
        <div class="flex-1 p-10  font-bold">
            <p class="text-4xl flex justify-center p-2">--UPDATE ORDERS--
            
            </p>

            <div class="bg-black-900 pt-1 justify-center items-center" style="width: full; height: 5px;"></div>

            <div class="flex bg-black-100 xs:px-6 sm:px-6 md:px-10 pt-16 justify-center items-center">
            <div class="bg-casal-500 w-2/3 py-2 px-3 rounded shadow-xl text-gray-800">
           
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

                          <div class="w-full px-1">
                              <label class="text-gray-600">NAME</label>
                              <input type="text" placeholder="" name="name" value="{{ $Info->name }}" id="name" class="w-full mt-2 mb-2 px-4 py-2 border border-black-900 rounded-md
                              text-gray-700 "/>
                              <span class="text-red-800">@error('name') {{$message}} @enderror </span>
                          </div>

                          <div class="w-full px-1">
                     <label class="text-gray-600 ">ORDER</label>
                              <input type="text" placeholder="" name="order" value="{{ $Info->order }}" id="order" class="w-full mt-2 mb-2 px-2 py-2 border border-black-900 rounded-md
                              text-gray-700 "/>
                              <span class="text-red-800">@error('order') {{$message}} @enderror </span>
                          </div>  

                        <div class="w-full px-1">
                            <label class="text-gray-600">DATE</label>
                            <input type="text" placeholder="" name="date" value="{{ $Info->date }}" id="date" class="w-full mt-2 mb-2 px-2 py-2 border border-black-900 rounded-md
                            text-gray-700 "/>
                            <span class="text-red-800">@error('date') {{$message}} @enderror </span>
                        </div>

                        <div class="">
                        <button type="submit" class="float-right w-24 mt-8 mb-2 px-4 py-2 border rounded-md bg-red-700 text-white font-bold ">UPDATE</button>
                        <button type="submit" class="float-right w-24  mt-8 mb-2 px-4 py-2 border rounded-md bg-red-500 text-white font-bold ">CANCEL</button>
                      </div>

                </form>
                </div>
                </div>

        </body>
</html>