@extends('layouts.navbar')

@section('content')
        <script src="script.js"></script>
        <!--HEADER CONTENT-->
        <div class="flex-1 p-5 font-bold justify-center items-center">

        @include('layouts.flash')

            <div class="bg-white pt-16 justify-start pr-24">
            
           
            
                
                <form action="add" method="post" class="flex justify-center">
                @csrf
    
                <div class="w-60 px-1">
                         <label class="text-gray-600">INVENTORY ID</label>
                          <input type="text" placeholder="" name="inventory_id" value="{{old('inventory_id')}}" class="w-full mt-2 mb-2 px-4 py-2 border border-black-900 rounded-md
                          text-gray-700 "/>
                          <span class="text-red-800">@error('inventory_id') {{$message}} @enderror </span>
                    </div>

                    <div class="w-60 px-1">
                         <label class="text-gray-600">NAME</label>
                          <input type="text" placeholder="" name="name" value="{{old('name')}}" class="w-full mt-2 mb-2 px-4 py-2 border border-black-900 rounded-md
                          text-gray-700 "/>
                          <span class="text-red-800">@error('name') {{$message}} @enderror </span>
                    </div>

                    <div class="w-60 px-1 mt-3">
                  <label class="block uppercase tracking-wide text-black text-xs font-bold mb-2">
                   ITEMS
                  </label>
                    <select class=" block appearance-none w-full bg-white border border-black-900 text-black 
                    py-2 text-base px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="order">
                    <option>Coke</option>
                      <option>Sprite</option>
                      <option>Noodle</option>
                      <option>Sardines</option>
                      <option>Spam</option>
                    </select>
                </div>
                          <div class="w-60 px-1">
                            <label class="text-gray-600">PRICE</label>
                            <input type="text" placeholder="" id="price" name="price" value="{{old('price')}}" class="w-full mt-2 mb-2 px-4 py-2 border border-black-900 rounded-md
                            text-gray-600 "/>
                            <span class="text-red-800">@error('price') {{$message}} @enderror </span>
                        </div>

                    </div>
  
                      <div class="flex justify-center">
                        
                        <div class="w-60 px-1">
                            <label class="text-gray-600">QUANTITY</label>
                            <input type="text" placeholder="" id="qty" name="qty" value="{{old('qty')}}" class="w-full mt-2 mb-2 px-4 py-2 border border-black-900 rounded-md
                            text-gray-700 ">
                            <span class="text-red-800">@error('qty') {{$message}} @enderror </span>
                        </div>

                        <div class="w-60 px-1">
                        <label class="text-gray-600">TOTAL</label>
                          <input name="total" value="{{old('total')}}" class="w-full mt-2 mb-2 px-4 py-2 border border-black-900 rounded-md
                            text-gray-700 " id="total">
                            <span class="text-red-800">@error('total') {{$message}} @enderror </span>
                        </div>

                        <div class="w-60 px-1 pt-2">
                        <label class="text-gray-600">
                            DATE
                          </label>
                          <input class="appearance-none block w-full text-base bg-white text-black border border-black-900
                          rounded py-2 px-2 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            name="date" type="date">
                        </div>

                        <div class="w-60">
                        <button type="submit" class="xs:w-24 sm:w-24 md:w-24 mt-8 mb-2 px-4 py-2 border rounded-md bg-blaze-orange-500 text-white font-bold ">ADD</button>
                          
                      </div>
                    </div>
  
                </form>
            

            <br>
            <br>
            <br>

            <!--TABLE-->
            <table id="datatable" class=" shadow-md border-collapse w-full justify-center">
              <thead>
                  <tr>
                      <th class="p-3 font-bold text-sm uppercase bg-shark-500 text-white border border-gray-300 hidden lg:table-cell">#</th>
                      <th class="p-3 font-bold text-sm uppercase bg-shark-500 text-white border border-gray-300 hidden lg:table-cell">inventory_id </th>
                      <th class="p-3 font-bold text-sm uppercase bg-shark-500 text-white border border-gray-300 hidden lg:table-cell">Name</th>
                      <th class="p-3 font-bold text-sm uppercase bg-shark-500 text-white border border-gray-300 hidden lg:table-cell">Items</th>
                      <th class="p-3 font-bold text-sm uppercase bg-shark-500 text-white border border-gray-300 hidden lg:table-cell">Price</th>
                      <th class="p-3 font-bold text-sm uppercase bg-shark-500 text-white border border-gray-300 hidden lg:table-cell">Quantity</th>
                      <th class="p-3 font-bold text-sm uppercase bg-shark-500 text-white border border-gray-300 hidden lg:table-cell">Total</th>
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
                        <span class="lg:hidden float-left top-0 left-0 px-2 py-1 text-xs font-bold uppercase">#</span>
                        {{$item->inventory_id}}
                    </td>

                    <td class="w-full lg:w-auto p-1.5 text-gray-800 text-center border text-sm border-b block lg:table-cell  lg:static">
                        <span class="lg:hidden float-left top-0 left-0 px-2 py-1 text-xs font-bold uppercase">Name</span>
                        {{$item->name}}
                    </td>

                    <td class="w-full lg:w-auto p-1.5 text-gray-800 text-center border text-sm border-b block lg:table-cell  lg:static">
                        <span class="lg:hidden float-left top-0 left-0 px-2 py-1 text-xs font-bold uppercase">Items</span>
                        {{$item->order}}
                    </td>

                      <td  class="w-full lg:w-auto p-1.5 text-gray-800 border border-b text-sm text-center block lg:table-cell  lg:static">
                        <span class="lg:hidden float-left top-0 left-0 px-2 py-1 text-xs font-bold uppercase">Price</span>
                        {{$item->price}}
                      </td>

                      <td id="quantity" class="w-full lg:w-auto p-1.5 text-gray-800 border border-b text-sm text-center block lg:table-cell  lg:static">
                        <span class="lg:hidden float-left top-0 left-0 px-2 py-1 text-xs font-bold uppercase">Quantity</span>
                        {{$item->qty}}
                      </td>

                      <td id="total" class="w-full lg:w-auto p-1.5 text-gray-800 border border-b text-sm text-center block lg:table-cell  lg:static">
                        <span class="lg:hidden float-left top-0 left-0 px-2 py-1 text-xs font-bold uppercase">Sales</span>
                        {{$item->total}}
                      </td>

                      <td class="w-full lg:w-auto p-1.5 text-gray-800 border border-b text-sm text-center block lg:table-cell  lg:static">
                        <span class="lg:hidden float-left top-0 left-0 px-2 py-1 text-xs font-bold uppercase">Date</span>
                        {{$item->date}}
                      </td>

                    <td class="w-full lg:w-auto p-1.5 text-gray-800  border border-b text-sm text-center lg:table-cell  lg:static">
                        <span class="lg:hidden float-left top-0 left-0 px-2 py-1 text-xs font-bold uppercase">Actions</span>
                        
                        <a href="edit/{{ $item->id }}" class="text-blue-400 hover:text-blue-600 underline" > <svg xmlns="http://www.w3.org/2000/svg" 
                            class="h-5 w-5 inline-block" viewBox="0 0 20 20" fill="black"><path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                          </svg></a>

                        <a href="delete/{{ $item->id }}" class="text-blue-400 hover:text-blue-600 underline pl-6"><svg xmlns="http://www.w3.org/2000/svg" 
                            class="h-5 w-5 inline-block" viewBox="0 0 20 20" fill="black"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                          </svg></a>
                    </td>
                </tr>
                @endforeach
              </tbody>
          </table>
        </div>
<script src="js/jquery-3.5.0.min.js"></script>
    <script src="calcu.js">
    </script>
@endsection

