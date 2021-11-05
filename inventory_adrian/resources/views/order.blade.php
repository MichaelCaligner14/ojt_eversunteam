@extends('layouts.navbar')

@section('content')

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="itempricefunction.js"></script>
        <script src="script.js"></script>
        <!--HEADER CONTENT-->
        <form action="add" method="post" class="min-h-3/6 flex items-center justify-center">
         @csrf
        <div class="min-h-3/6 p-6">
  <div class="container max-w-screen-lg mx-auto">
    <div>
    @include('layouts.flash')

      <div class="bg-white rounded p-4 px-4 md:p-8 mb-6">
        <div class="grid  gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
          <div class="text-gray-600">

            <p class="font-medium text-lg">Order Details</p>
            <p>Please fill out all the fields.</p>

          </div>

          <div class="lg:col-span-2">
            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
              <div class="md:col-span-5">
                <label for="full_name">Customer Name</label>
                <input type="text" name="name" id="name" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{old('name')}}" />
              </div>
              <span class="text-red-800">@error('name') {{$message}} @enderror </span>

              <div class="md:col-span-5">
                <label for="email">Inventory ID</label>
                <select class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" name="inventories_id" type="number">
                    <option value="" selected disable>--Select Id--</option>
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
              </div>

              <div class="md:col-span-3 item-type">
              <label for="order">Items</label>
                <select id="itemprice" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" name="order">
                    <option selected disable>--Select Items--</option>
                    <option data-price="8" >Noodle</option>
                      <option data-price="15" >Coke</option>
                      <option data-price="25" >Sprite</option>
                      <option data-price="18" >Sardines</option>
                      <option data-price="55" >Spam</option>
                    </select>
              </div>

              <div class="md:col-span-2">
                <label for="price">Price</label>
                <input name="price" value="{{old('price')}}" id="price" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50 price-input" readonly/>
                <span class="text-red-800">@error('price') {{$message}} @enderror </span>
              </div>

              <div class="md:col-span-3 item-type">
              <label for="Order_quantity">Quantity</label>
                  <input placeholder="" id="qty" name="Order_quantity" value="{{old('Order_quantity')}}" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50">
                <span class="text-red-800">@error('Order_quantity') {{$message}} @enderror </span>
              </div>

              <div class="md:col-span-2">
              <label for="total">Total</label>
              <input placeholder="" name="total" value="{{old('total')}}" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" id="total" readonly>
                  <span class="text-red-800">@error('total') {{$message}} @enderror </span>
                </div>

                <div class="md:col-span-5">
                <input class="h-10 border mt-1 rounded px-4 w-full bg-gray-50
                           py-2"
                            name="date" value="{{old('date')}}" type="date">
                  </div>


            
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
<script src="js/jquery-3.5.0.min.js"></script>
    <script src="calcu.js">
    </script>
@endsection

