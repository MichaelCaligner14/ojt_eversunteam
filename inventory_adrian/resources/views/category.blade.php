@extends('layouts.navbar')

@section('content')
     
        <script src="script.js"></script>

        <div class="bg-white lg:w-3/4 mx-auto lg:px-16 xs:px-6 sm:px-6 md:px-10 pt-16 justify-between">

            @include('layouts.flash')
            <form action="addctg" method="post" class="text-gray-600 font-bold">
               @csrf

              <div class="flex">
              <div class="md:w-60 mb-6 md:mb-0">
                  <label class="block uppercase tracking-wide text-black text-xs font-bold mb-2">
                    BRAND NAMES
                  </label>
                    <select class="block appearance-none w-full bg-white border border-black-900 text-black 
                    py-2 text-base px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="name">
                    <option>Coca Cola</option>
                      <option>Sprite</option>
                      <option>Noodle</option>
                      <option>Sardines</option>
                      <option>Spam</option>
                    </select>
                </div>
                  
                <div class=" md:w-60 px-3 mb-6 md:mb-0">
                  <label class="block uppercase tracking-wide text-black text-xs font-bold mb-2">
                    CATEGORY
                  </label>
                    <select class="block appearance-none w-full bg-white border border-black-900 text-black 
                    py-2 text-base px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="category">
                    <option>Food</option>
                      <option>Drinks</option>
                    </select>
                </div>
                <div class='md:w-60 mb-6 md:mb-0 mt-5'>
                <button class="px-4 py-2 border rounded-md bg-blaze-orange-500 text-white font-bold ">ADD</button>
                </div>
                </form>

                <form action="category" class="mt-2" method="post">
                @csrf
                    <div>
                      <input type="text" name="name" placeholder="Search ... " class="w-60 rounded border border-black-900 text-black mt-2 mb-2 px-4 py-2" > 
                <button type="submit" class="px-4 py-2 border rounded-md bg-blaze-orange-500 text-white font-bold ">Search</button>
                </div>
              </form>

              </div>
              <br>
              <br>
              <br>
             <!--TABLE-->
<div class="flex flex-col">
  <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
      <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">
          <thead class="bg-gray-50">
            <tr>
              <th scope="col" class="bg-indigo-500 px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                #
              </th>
              <th scope="col" class="bg-indigo-500 px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                Items
              </th>
              <th scope="col" class="bg-indigo-500 px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                Category
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
                {{$item->category}}
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
              <a href="editctg/{{ $item->id }}" class="text-blue-400 hover:text-blue-600 underline"><svg xmlns="http://www.w3.org/2000/svg" 
              class="h-5 w-5 inline-block" viewBox="0 0 20 20" fill="black"><path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                </svg></a>
                <a href="ctgdelete/{{ $item->id }}"  class="text-blue-400 hover:text-blue-600 underline pl-6"><svg xmlns="http://www.w3.org/2000/svg" 
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