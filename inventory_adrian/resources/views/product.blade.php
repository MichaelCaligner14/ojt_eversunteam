@extends('layouts.navbar')

@section('content')
        <script src="script.js"></script>

           <!-- <div class="bg-white lg:w-3/4 mx-auto lg:px-16 xs:px-6 sm:px-6 md:px-10 pt-16 justify-center">

            @include('layouts.flash')
                
                <form action="addprod" method="post" class="text-gray-600 font-bold">
                @csrf

              <div class="flex">
                  <div class="w-60 px-1">
                      <input type="text" placeholder="Name" name="name" value="{{old('name')}}" class="w-full mt-2 mb-2 px-4 py-2 border border-black-900 rounded-md
                      text-gray-700 "/>
                      <span class="text-red-800">@error('name') {{$message}} @enderror </span>
                  </div>
                  <div class="w-60 px-1">
                      <input type="text" placeholder="Items" name="items" value="{{old('items')}}" class="w-full mt-2 mb-2 px-2 py-2 border border-black-900 rounded-md
                      text-gray-700 "/>
                      <span class="text-red-800">@error('items') {{$message}} @enderror </span>
                  </div>
                  <div class="w-60 px-1">
                      <input type="text" placeholder="Price" name="price" value="{{old('price')}}" class="w-full mt-2 mb-2 px-2 py-2 border border-black-900 rounded-md
                      text-gray-700 "/>
                      <span class="text-red-800">@error('price') {{$message}} @enderror </span>
                  </div>
                  
                  <div class="px-2 mt-0">
                    <button class="lg:w-24 xs:w-24 sm:w-24 md:w-24 mt-2 mb-2 px-4 py-2 border rounded-md bg-blaze-orange-500 text-white font-bold ">ADD</button>
                </div>
                </form>
              </div>
              <br>
              <br>
              <br>
</div>-->
<form action="addprod" method="post" class="min-h-3/6 flex items-center justify-center">
         @csrf
        <div class="min-h-3/6 p-6">
  <div class="container max-w-screen-lg mx-auto">
    <div>
    @include('layouts.flash')

      <div class="bg-white rounded p-4 px-4 md:p-8 mb-6">
        <div class="grid  gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
          <div class="text-gray-600 pr-8">

            <p class="font-medium text-lg">Product Details</p>
            <p>Please fill out all the fields.</p>

          </div>

          <div class="lg:col-span-2">
            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
              <div class="md:col-span-5">
                <label for="full_name">Name</label>
                <input type="text" name="name" id="name" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{old('name')}}" />
              </div>
              <span class="text-red-800">@error('name') {{$message}} @enderror </span>

              <div class="md:col-span-5">
                <label for="full_name">Items</label>
                <input type="text" name="items" id="items" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{old('items')}}" />
              </div>
              <span class="text-red-800">@error('items') {{$message}} @enderror </span>

              <div class="md:col-span-5">
                <label for="full_name">Price</label>
                <input type="text" name="price" id="price" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{old('price')}}" />
              </div>
              <span class="text-red-800">@error('price') {{$message}} @enderror </span>

            


            
              <div class="md:col-span-5 text-right">
                <div class="inline-flex items-end">
                  <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Submit</button>
                  
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>
<img
      src="img/order.png"
      class="w-1/2 hidden lg:block md:block inset-0" 
      style="z-index: -1;"
    />
</form>

              <!--TABLE-->
<div class="flex mt-10 justify-center">
  <div class="-my-2 overflow-x-auto lg:w-3/4 mx-auto lg:px-16 xs:px-6 sm:px-6 md:px-10">
    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
      <div class="shadow overflow-y-auto h-72 border-b border-gray-200 sm:rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">
          <thead class="bg-gray-50">
            <tr>
              <th scope="col" class="bg-indigo-500 px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                #
              </th>
              <th scope="col" class="bg-indigo-500 px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                Brand Name
              </th>
              <th scope="col" class="bg-indigo-500 px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                Items
              </th>
              <th scope="col" class="bg-indigo-500 px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                Price
              </th>
              <th scope="col" class="bg-indigo-500 px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                Action
              </th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y divide-gray-200">
          @foreach ($list as $item)
            <tr>
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                {{$item->id}}
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                {{$item->name}}
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">  
                {{$item->items}}
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
              {{$item->price}}
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
              <a href="editprod/{{ $item->id }}" class="text-blue-400 hover:text-blue-600 underline"><svg xmlns="http://www.w3.org/2000/svg" 
              class="h-5 w-5 inline-block" viewBox="0 0 20 20" fill="black"><path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                </svg></a>
                <a href="proddelete/{{ $item->id }}"  class="text-blue-400 hover:text-blue-600 underline pl-6"><svg xmlns="http://www.w3.org/2000/svg" 
                class="h-5 w-5 inline-block" viewBox="0 0 20 20" fill="black"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                </svg></a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
</div>
</div>



@endsection
            
