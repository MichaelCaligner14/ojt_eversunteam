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
            <p class="text-4xl flex justify-center p-2">--CATEGORY UPDATE--
            
            </p>

            <div class="bg-black-900 pt-1 justify-center items-center" style="width: full; height: 5px;"></div>

            <div class="flex bg-white xs:px-6 sm:px-6 md:px-10 pt-16 justify-center items-center">
            <div class="bg-casal-500 w-2/3 py-2 px-3 rounded shadow-xl text-gray-800">
           
                @if (Session::has('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">{{Session::get('success')}}</div>
                @endif
                @if (Session::has('fail'))
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">{{Session::get('fail')}}</div>
                @endif
                
                <!--<form action="{{ route('ctgupdate') }}" method="post" class="m-8 justify-center items-center">
            @csrf


                        <input type="hidden" placeholder="" name="ctgname" value="{{ $Info->id }}" class="w-full mt-2 mb-2 px-4 py-2 border border-black-900 rounded-md
                              text-gray-600 "/>

                          <div class="w-full px-1">
                              <label class="text-gray-600">NAME</label>
                              <input type="text" placeholder="" name="name" value="{{ $Info->name }}" id="name" class="w-full mt-2 mb-2 px-4 py-2 border border-black-900 rounded-md
                              text-gray-700 "/>
                              <span class="text-red-800">@error('name') {{$message}} @enderror </span>
                          </div>

                          <div class="w-full px-1">
                              <label class="text-gray-600 ">CATEGORY</label>
                              <input type="text" placeholder="Price" name="category" value="{{ $Info->category }}" id="order" class="w-full mt-2 mb-2 px-2 py-2 border border-black-900 rounded-md
                              text-gray-700 "/>
                              <span class="text-red-800">@error('category') {{$message}} @enderror </span>
                          </div>  

                        <div class="">
                        <button type="submit" class="float-right w-24 mt-8 mb-2 px-4 py-2 border rounded-md bg-blaze-orange-500 text-white font-bold ">UPDATE</button>
                        <button type="submit" class="float-right w-24 mt-8 mb-2 px-4 py-2 border rounded-md bg-red-500 text-white font-bold ">CANCEL</button>
                      </div>

                </form>-->
                <form action="{{ route('ctgupdate') }}" method="post" class="min-h-3/6 flex items-center justify-center mt-8">
         @csrf
        <div class="min-h-3/6 p-6">
  <div class="container max-w-screen-lg mx-auto">
    <div>
    @include('layouts.flash')

      <div class="bg-white rounded p-4 px-4 md:p-8 mb-6">
        <div class="grid  gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
          <div class="text-gray-600 pr-8">

            <p class="font-medium text-lg">Category Update</p>
            <p>Please fill out all the fields.</p>

          </div>

          <input type="hidden" placeholder="" name="ctgname" value="{{ $Info->id }}" class="w-full mt-2 mb-2 px-4 py-2 border border-black-900 rounded-md
                              text-gray-600 "/>

          <div class="lg:col-span-2">
            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
              <div class="md:col-span-5">
                <label for="full_name">Name</label>
                <input type="text" name="name" id="name" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{ $Info->name }}" />
              </div>
              <span class="text-red-800">@error('name') {{$message}} @enderror </span>

              <div class="md:col-span-5">
                <label for="full_name">Category</label>
                <input type="text" name="category" id="category" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{ $Info->category }}" />
              </div>
              <span class="text-red-800">@error('category') {{$message}} @enderror </span>

              <div class="md:col-span-5 text-right">
                <div class="inline-flex items-end">
                  <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Cancel</button>
                  
                </div>
                <div class="inline-flex items-end">
                  <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Update</button>
                  
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>
</form>
                </div>
                </div>


        </body>
</html>