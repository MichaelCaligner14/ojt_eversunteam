@extends('layouts.navbar')

@section('content')
<img
      src="img/order.png"
      class="fixed hidden lg:block ml-56 inset-0 h-full"
      style="z-index: -1;"
    />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="itempricefunction.js"></script>
        <script src="script.js"></script>
        <!--HEADER CONTENT-->
        <div class="flex-1 p-5 font-bold justify-center items-center">

        @include('layouts.flash')

            <div class="bg-white pt-16 justify-start pr-24">
                
                <form action="add" method="post" class="flex justify-center">
                @csrf

                <div class="w-60 px-1">
                          <input type="text" placeholder="Customer Name" name="name" value="{{old('name')}}" class="w-full mt-2 mb-2 px-4 py-2 border border-black-900 rounded-md
                          text-gray-700 "/>
                          <span class="text-red-800">@error('name') {{$message}} @enderror </span>
                    </div>

                <div class="w-60 px-1 mt-2">
                          <select class="block appearance-none w-full bg-white border border-black-900 text-black
                    py-2 text-base px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="inventories_id" type="number">
                    <option value="" selected disable>--Select Id--</option>
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                  </div>
                          <span class="text-red-800">@error('inventories_id') {{$message}} @enderror </span>
                </div>

                <div class="w-60 px-1 mt-2 item-type">

                    <select id="itemprice" type="number" class="block appearance-none w-full bg-white border border-black-900 text-black 
                    py-2 text-base px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="order">
                    <option value="" selected disable>--Select Items--</option>
                    <option data-price="8" >Noodle</option>
                      <option data-price="15" >Coke</option>
                      <option data-price="25" >Sprite</option>
                      <option data-price="18" >Sardines</option>
                      <option data-price="55" >Spam</option>
                    </select>
                </div>
                          <div class="w-60 px-1">
                            <input placeholder="Price" id="price" name="price" class="w-full mt-2 mb-2 px-4 py-2 border border-black-900 rounded-md
                            text-gray-600 price-input"readonly/>
                            <span class="text-red-800">@error('price') {{$message}} @enderror </span>
                        </div>
                    </div>
                      <div class="flex justify-center pr-24">
                        
                        <div class="w-60 px-1">
                            <input placeholder="Quantity" id="qty" name="Order_quantity" value="{{old('Order_quantity')}}" class="w-full mt-2 mb-2 px-4 py-2 border border-black-900 rounded-md
                            text-gray-700 ">
                            <span class="text-red-800">@error('Order_quantity') {{$message}} @enderror </span>
                        </div>

                        <div class="w-60 px-1">
                          <input placeholder="Total" name="total" value="{{old('total')}}" class="w-full mt-2 mb-2 px-4 py-2 border border-black-900 rounded-md
                            text-gray-700 " id="total">
                            <span class="text-red-800">@error('total') {{$message}} @enderror </span>
                        </div>

                        <div class="px-1 pt-2 lg:w-60 xs:w-24 sm:w-24 md:w-24">
                          <input class="appearance-none block w-full text-base bg-white text-black border border-black-900
                          rounded py-2 px-2 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            name="date" value="{{old('date')}}" type="date">
                        </div>

                        <div class="">
                        <button type="submit" class="lg:w-60 xs:w-24 sm:w-24 md:w-24 mt-2 mb-2 px-4 py-2 border rounded-md bg-blaze-orange-500 text-white font-bold ">ADD</button>                     </div>
                    </div>
                </form>
            

            <br>
            <br>
            <br>

            <!--TABLE-->
  <div class="flex flex-col">
    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
      <div class="shadow overflow-y-auto h-80 border-b border-gray-200 sm:rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">
          <thead class="bg-gray-50">
            <tr>
              <th scope="col" class="bg-indigo-500 px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                #
              </th>
              <th scope="col" class="bg-indigo-500 px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                Name
              </th>
              <th scope="col" class="bg-indigo-500 px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                ID
              </th>
              <th scope="col" class="bg-indigo-500 px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                Items
              </th>
              <th scope="col" class="bg-indigo-500 px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                Price
              </th>
              <th scope="col" class="bg-indigo-500 px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                Qauntity
              </th>
              <th scope="col" class="bg-indigo-500 px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                Total
              </th>
              <th scope="col" class="bg-indigo-500 px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                Date
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
              {{$item->inventories_id}}
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
              {{$item->order}}
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
              {{$item->price}}
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
              {{$item->Order_quantity}}
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
              {{$item->total}}
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">  
              {{$item->date}}
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
              <a href="edit/{{ $item->id }}" class="text-blue-400 hover:text-blue-600 underline"><svg xmlns="http://www.w3.org/2000/svg" 
              class="h-5 w-5 inline-block" viewBox="0 0 20 20" fill="black"><path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                </svg></a>
                <a href="delete/{{ $item->id }}"  class="text-blue-400 hover:text-blue-600 underline pl-6"><svg xmlns="http://www.w3.org/2000/svg" 
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
<script src="js/jquery-3.5.0.min.js"></script>
    <script src="calcu.js">
    </script>
@endsection

