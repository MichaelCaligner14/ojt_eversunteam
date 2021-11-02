@extends('layouts.navbar')

@section('content')
<script src="script.js"></script>
<!--<img
      src="img/employee.png"
      class="fixed hidden lg:block ml-56 inset-0 h-full"
      style="z-index: -1;"
    />
     


            <div class="lg:w-3/4 mx-auto lg:px-16 xs:px-6 sm:px-6 md:px-10 pt-16 justify-start">
                <div class="font-bold justify-center xs:px-6 sm:px-6 md:px-10">

                
                @include('layouts.flash')
                
                <div class="w-full gap-2">
                <form action="addemp" method="post" class="flex">
                
                    @csrf
                    
                          <div class="w-60 px-1">
                              <input type="text" placeholder="First Name" name="fname" value="{{old('fname')}}" class="w-full mt-2 mb-2 px-4 py-2 border border-black-900 rounded-md
                              text-gray-700"/>
                              <span class="text-red-800">@error('fname') {{$message}} @enderror </span>

                          </div>

                          <div class="w-60 px-1">
                              <input type="text" placeholder="Last Name" name="lname" value="{{old('lname')}}" class="w-full mt-2 mb-2 px-4 py-2 border border-black-900 rounded-md
                              text-gray-700"/>
                              <span class="text-red-800">@error('lname') {{$message}} @enderror </span>

                          </div>

                          <div class="w-60 px-1">
                              <input type="text" placeholder="Phone" name="phone" value="{{old('phone')}}" class="w-full mt-2 mb-2 px-2 py-2 border border-black-900 rounded-md
                              text-gray-700 "/>
                              <span class="text-red-800">@error('phone') {{$message}} @enderror </span>
                          </div>  
                          </div>
  
                      <div class="flex">
                        <div class="w-60 px-1">
                            <input type="text" placeholder="Email" name="email" value="{{old('email')}}" class="w-full mt-2 mb-2 px-4 py-2 border border-black-900 rounded-md
                            text-gray-600 "/>
                            <span class="text-red-800">@error('email') {{$message}} @enderror </span>
                        </div>

                        <div class="w-60 px-1">
                            <input type="text" placeholder="Position" name="position" value="{{old('position')}}" class="w-full mt-2 mb-2 px-4 py-2 border border-black-900 rounded-md
                            text-gray-700 ">
                            <span class="text-red-800">@error('position') {{$message}} @enderror </span>
                        </div>
                      
                          <button type="submit" class="lg:w-60 xs:w-24 sm:w-24 md:w-24 mt-2 mb-2 px-4 py-2 border-black-900 rounded-md bg-blaze-orange-500 text-white font-bold ">ADD</button>

                    </div>
                  
                </form>
  
                </div>
</div>

-->
<form action="addemp" method="post" class="min-h-3/6 flex items-center justify-center">
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

               <div class="md:col-span-2">
              <label for="Order_quantity">First Name</label>
                  <input placeholder="" id="fname" name="fname" value="{{old('fname')}}" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50">
                <span class="text-red-800">@error('fname') {{$message}} @enderror </span>
              </div>

              <div class="md:col-span-2">
              <label for="Order_quantity">Last Name</label>
                  <input placeholder="" id="lname" name="lname" value="{{old('lname')}}" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50">
                <span class="text-red-800">@error('lname') {{$message}} @enderror </span>
              </div>

              <div class="md:col-span-2">
              <label for="Order_quantity">Phone</label>
                  <input placeholder="" id="qty" name="phone" value="{{old('phone')}}" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50">
                <span class="text-red-800">@error('phone') {{$message}} @enderror </span>
              </div>

              <div class="md:col-span-2">
              <label for="Order_quantity">Email</label>
                  <input placeholder="" id="qemailty" name="email" value="{{old('email')}}" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50">
                <span class="text-red-800">@error('email') {{$message}} @enderror </span>
              </div>

               <div class="md:col-span-2">
              <label for="Order_quantity">Position</label>
                  <input placeholder="" id="position" name="position" value="{{old('position')}}" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50">
                <span class="text-red-800">@error('position') {{$message}} @enderror </span>
              </div>

              <div class="md:col-span-2 text-left pt-6">
                <div class="inline-flex items-end">
                  <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold w-48 py-2 px-4 rounded">Submit</button>
                  
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
      src="img/employee.png"
      class="w-1/2 h-1/2 hidden lg:block md:block inset-0" 
      style="z-index: -1;"
    />
</form>
            <!--TABLE-->

  <div class="flex flex-col justify-center">
    <div class="py-2 lg:w-3/4 mx-auto lg:px-16 xs:px-6 sm:px-6 md:px-10 ">
      <div class="shadow overflow-y-auto h-60 border-b border-gray-200 sm:rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">
          <thead class="bg-gray-50">
            <tr>
              <th scope="col" class="bg-indigo-500 px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                First Name
              </th>
              <th scope="col" class="bg-indigo-500 px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                Last Name
              </th>
              <th scope="col" class="bg-indigo-500 px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                Phone
              </th>
              <th scope="col" class="bg-indigo-500 px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                Email
              </th>
              <th scope="col" class="bg-indigo-500 px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                Position
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
                {{$item->fname}}
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                {{$item->lname}}
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">  
                {{$item->phone}}
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
              {{$item->email}}
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
              {{$item->position}}
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
</div>
</div>
@endsection
          

