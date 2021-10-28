@extends('layouts.navbar')

@section('content')
        <script src="script.js"></script>
        <div class="bg-white lg:w-1/3 mx-auto lg:px-16 xs:px-6 sm:px-6 md:px-10 pt-16">

            @include('layouts.flash')
                
                <form action="addinventory" method="post" 
                class="text-gray-600 bg-indigo-500 font-bold lg:w-96 xs:w-96 sm:w-96 md:w-4 rounded px-8 pb-8 mb-4">
                @csrf

                  <div class="pl-10">
                  <div class="w-60 px-1 pt-10">
                      <input type="text" placeholder="Product Name" name="product_name" value="{{old('product_name')}}" class="w-full mt-2 mb-2 px-4 py-2 border border-black-900 rounded-md
                      text-gray-700 "/>
                      <span class="text-red-800">@error('product_name') {{$message}} @enderror </span>
                  </div>
                  <div class="w-60 px-1">
                      <input type="text" placeholder="Items" name="items" value="{{old('items')}}" class="w-full mt-2 mb-2 px-2 py-2 border border-black-900 rounded-md
                      text-gray-700 "/>
                      <span class="text-red-800">@error('items') {{$message}} @enderror </span>
                  </div>
                  <div class="w-60 px-1">
                      <input type="text" placeholder="Quantity" name="Inventory_quantity" value="{{old('Inventory_quantity')}}" class="w-full mt-2 mb-2 px-2 py-2 border border-black-900 rounded-md
                      text-gray-700 "/>
                      <span class="text-red-800">@error('Inventory_quantity') {{$message}} @enderror </span>
                  </div>
                  <div class="px-2 mt-0">
                    <button class="lg:w-24 xs:w-24 sm:w-24 md:w-24 mt-2 mb-2 px-4 py-2 border-grey-200 rounded-md bg-blaze-orange-500 text-white font-bold ">ADD</button>
                </div>
                </form>
              </div>
              </div>
             <!--TABLE-->
<div class="flex flex-col mt-10 justify-center">
    <div class="py-2 lg:w-3/4 md:w-3/4 sm:w-3/4 mx-auto lg:px-16 xs:px-6 sm:px-6 md:px-10 ">
      <div class="shadow border-b border-gray-200 sm:rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">
          <thead class="bg-gray-50">
            <tr>
              <th scope="col" class="bg-indigo-500 px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                #
              </th>
              <th scope="col" class="bg-indigo-500 px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                Product Name
              </th>
              <th scope="col" class="bg-indigo-500 px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                Items
              </th>
              <th scope="col" class="bg-indigo-500 px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                Quantity
              </th>
              <th scope="col" class="bg-indigo-500 px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                Action
              </th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y divide-gray-200">
          @foreach ($data as $item)
            <tr>
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                {{$item->id}}
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                {{$item->product_name}}
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">  
                {{$item->items}}
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">  
                {{$item->total_quantity}}
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
              <a href="empedit/{{ $item->id }}" class="text-blue-400 hover:text-blue-600 underline"><svg xmlns="http://www.w3.org/2000/svg" 
              class="h-5 w-5 inline-block" viewBox="0 0 20 20" fill="black"><path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                </svg></a>
                <a href="deletes/{{ $item->id }}"  class="text-blue-400 hover:text-blue-600 underline pl-6"><svg xmlns="http://www.w3.org/2000/svg" 
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
@endsection