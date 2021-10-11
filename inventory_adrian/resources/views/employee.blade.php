@extends('layouts.navbar')

@section('content')

     
        <script src="script.js"></script>


            <div class="bg-white lg:w-3/4 mx-auto lg:px-16 xs:px-6 sm:px-6 md:px-10 pt-16 justify-start">
                <div class="font-bold justify-start lg:px-16 xs:px-6 sm:px-6 md:px-10">

                
                @include('layouts.flash')
                
                  <div class="w-full gap-2">  

          
                
                <form action="addemp" method="post" class="flex">
                
                    @csrf
                    
                          <div class="w-60 px-1">
                              <label class="text-gray-600">Name</label>
                              <input type="text" placeholder="Name" name="name" value="{{old('name')}}" class="w-full mt-2 mb-2 px-4 py-2 border border-black-900 rounded-md
                              text-gray-700"/>
                              <span class="text-red-800">@error('name') {{$message}} @enderror </span>

                          </div>

                          <div class="w-60 px-1">
                              <label class="text-gray-600 ">Phone</label>
                              <input type="text" placeholder="Phone" name="phone" value="{{old('phone')}}" class="w-full mt-2 mb-2 px-2 py-2 border border-black-900 rounded-md
                              text-gray-700 "/>
                              <span class="text-red-800">@error('phone') {{$message}} @enderror </span>
                          </div>  
                    </div>

  
                      <div class="flex gap-2">

                        <div class="w-60 px-1">
                            <label class="text-gray-600">Email</label>
                            <input type="text" placeholder="Email" name="email" value="{{old('email')}}" class="w-full mt-2 mb-2 px-4 py-2 border border-black-900 rounded-md
                            text-gray-600 "/>
                            <span class="text-red-800">@error('email') {{$message}} @enderror </span>
                        </div>

                        <div class="w-60 px-1">
                            <label class="text-gray-600">Position</label>
                            <input type="text" placeholder="Position" name="position" value="{{old('position')}}" class="w-full mt-2 mb-2 px-4 py-2 border border-black-900 rounded-md
                            text-gray-700 ">
                            <span class="text-red-800">@error('position') {{$message}} @enderror </span>
                        </div>
                        
                        <div class="">
                          <button type="submit" class="lg:w-24 xs:w-24 sm:w-24 md:w-24 mt-8 mb-2 px-4 py-2 border rounded-md bg-blaze-orange-500 text-white font-bold ">ADD</button>
                        </div>
                    </div>
  
                </form>
  

            <br>
            <br>
            <br>

            <!--TABLE-->
            <table class=" shadow-md border-collapse w-full">
              <thead>
                  <tr>
                      <th class="p-3 font-bold text-sm uppercase bg-shark-500 text-white border border-gray-300 hidden lg:table-cell">#</th>
                      <th class="p-3 font-bold text-sm uppercase bg-shark-500 text-white border border-gray-300 hidden lg:table-cell">Name</th>
                      <th class="p-3 font-bold text-sm uppercase bg-shark-500 text-white border border-gray-300 hidden lg:table-cell">Phone</th>
                      <th class="p-3 font-bold text-sm uppercase bg-shark-500 text-white border border-gray-300 hidden lg:table-cell">Email</th>
                      <th class="p-3 font-bold text-sm uppercase bg-shark-500 text-white border border-gray-300 hidden lg:table-cell">Position</th>
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
                        <span class="lg:hidden float-left top-0 left-0 px-2 py-1 text-xs font-bold uppercase">Name</span>
                        {{$item->name}}

                    </td>

                    <td class="w-full lg:w-auto p-1.5 text-gray-800 text-center border text-sm border-b block lg:table-cell  lg:static">
                        <span class="lg:hidden float-left top-0 left-0 px-2 py-1 text-xs font-bold uppercase">Phone</span>
                        {{$item->phone}}

                    </td>

                      <td class="w-full lg:w-auto p-1.5 text-gray-800 border border-b text-sm text-center block lg:table-cell  lg:static">
                        <span class="lg:hidden float-left top-0 left-0 px-2 py-1 text-xs font-bold uppercase">Email</span>
                        {{$item->email}}

                      </td>

                      <td class="w-full lg:w-auto p-1.5 text-gray-800 border border-b text-sm text-center block lg:table-cell  lg:static">
                        <span class="lg:hidden float-left top-0 left-0 px-2 py-1 text-xs font-bold uppercase">Position</span>
                        {{$item->position}}

                      </td>

                    <td class="w-full lg:w-auto p-1.5 text-gray-800  border border-b text-sm text-center lg:table-cell  lg:static">
                        <span class="lg:hidden float-left top-0 left-0 px-2 py-1 text-xs font-bold uppercase">Actions</span>
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
@endsection
          

