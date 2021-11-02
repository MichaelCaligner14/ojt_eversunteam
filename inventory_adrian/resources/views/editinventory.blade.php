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
            <p class="text-4xl flex justify-center p-2">--INVENTORY UPDATE--
            
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
                
                <form action="{{ route('inventoryupdate') }}" method="post" class="min-h-3/6  mt-8 items-center justify-center">
         @csrf
        <div class="min-h-3/6 p-6">
  <div class="container max-w-screen-lg mx-auto">
    <div>
    @include('layouts.flash')

      <div class="bg-white rounded p-4 px-4 md:p-8 mb-6">
        <div class="grid  gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
          <div class="text-gray-600 pr-8">

            <p class="font-medium text-lg">Inventory Update</p>
            <p>Please fill out all the fields.</p>

          </div>

          <div class="lg:col-span-2">
          <input type="hidden" placeholder="" name="ivtname" value="{{ $Info->id }}" class="w-full mt-2 mb-2 px-4 py-2 border border-black-900 rounded-md
                              text-gray-600 "/>
            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
              <div class="md:col-span-5">
                <label for="full_name">Product Name</label>
                <input type="text" name="product_name" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{ $Info->product_name }}" />
              </div>
              <span class="text-red-800">@error('product_name') {{$message}} @enderror </span>

              <div class="md:col-span-5">
                <label for="full_name">Items</label>
                <input type="text" name="items" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{ $Info->items }}" />
              </div>
              <span class="text-red-800">@error('items') {{$message}} @enderror </span>

              <div class="md:col-span-5">
                <label for="full_name">Quantity</label>
                <input type="text" name="total_quantity" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{$Info->total_quantity}}" />
              </div>
              <span class="text-red-800">@error('Inventory_quantity') {{$message}} @enderror </span>
              
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