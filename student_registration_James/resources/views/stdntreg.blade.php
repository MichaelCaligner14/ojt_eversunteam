@extends('layouts.master')

@section('content')
        


        <div class="flex-1  w-full">    
        <header class="bg-gray-900 p-4 font-bold text-right text-white  ">STUDENT REGISTRATION </header>
      
        <!-- content -->
       
        <div class="flex-1 p-10 rounded-md text-2xl font-bold">
   
          @if(Session::get('success'))
          <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">{{Session::get('success')}}</div>
          @endif
          @if(Session::get('fail'))
          <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">{{Session::get('fail')}}</div>
          @endif
          
        <form action="addingstud" method="post" class="border-gray-900 border-2 border-gray-800 font-bold px-6 py-6 rounded-md">

        @csrf
        <p class="text-6xl text-gray-800 pb-3 font-bold font-roboto">Student Form</p>
        <hr style="height:5px; background-color:black;" class="mb-3">
        <p class="text-xs w-23 h-12 text-red-800 font-bold font-roboto">Please fill up the form properly:</p>
        
      
        <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
            <div>
                <label class="text-lg font-roboto text-gray-800 mb-2 mt-2" for="first">Firstname</label>
                <input name="first" value="{{old('first')}}" type="text" class="block w-full px-4 py-1 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>

            <div>
                <label class="text-lg font-roboto text-gray-800 mb-2 mt-2">Gender</label>
                <select class="block w-full px-4 py-1 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring" name="gender" value="{{old('gender')}}">
                            <option value="0" class="text-lg">--</option>
                            <option value="Male" class="text-lg">Male</option>
                            <option value="Female" class="text-lg">Female</option>
              
                </select>
              </div>

            <div>
                <label class="text-lg font-roboto text-gray-800 mb-2 mt-2" for="middle">Middlename</label>
                <input name="middle" value="{{old('middle')}}" type="text" class="block w-full px-4 py-1 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>

            <div>
                <label class="text-lg font-roboto text-gray-800 mb-2 mt-2" for="courselist">Course List</label>
                <select class="block w-full px-4 py-1 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring"
                 id="" name="courselist" value="{{old('courselist')}}">
                            <option value="0">--</option>
                            <option value="Bachelor of Science in Information Technology (BSIT)" class="text-lg">Bachelor of Science in Information Technology (BSIT)</option>
                            <option value="Bachelor of Science in Accountancy (BSA)"  class="text-lg">Bachelor of Science in Accountancy (BSA)</option>
                            <option value="Bachelor of Science in Computer Engineering (BSCpE)"  class="text-lg">Bachelor of Science in Computer Engineering (BSCpE)</option>
                            <option value="Bachelor of Arts in Communication (AB Communication)"  class="text-lg">Bachelor of Arts in Communication (AB Communication)</option>
                            <option value="Bachelor of Science in Custom Adminitration (BSCA)"  class="text-lg">Bachelor of Science in Custom Adminitration (BSCA)</option>
                            <option value="Bachelor of Science in Information System (BSIS)"  class="text-lg">Bachelor of Science in Information System (BSIS)</option>
                            <option value="Bachelor of Science in Mathematics (BS Mathematics)"  class="text-lg">Bachelor of Science in Mathematics (BS Mathematics)</option>
                </select>
            </div>

            <div>
                <label class="text-lg font-roboto text-gray-800 mb-2 mt-2" for="last">Lastname</label>
                <input name="last" value="{{old('last')}}" type="text" class="block w-full px-4 py-1 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>

            <div>
                <label class="text-lg font-roboto text-gray-800 mb-2 mt-2" for="mobilenumber">Mobile No</label>
                <input  type="text" placeholder="" name="mobilenumber" value="{{old('mobilenumber')}}" class="block w-full px-4 py-1 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>

            <div>
                <label class="text-lg font-roboto text-gray-800 mb-2 mt-2">Birthday</label>
                <input type="date" placeholder="" name="birthday" value="{{old('birthday')}}" class="text-lg block w-full px-4 py-1 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>

            <div>
                <label class="text-lg font-roboto text-gray-800 mb-2 mt-2">Enter Parents/Guardian Name</label>
                <input type="text" placeholder="" name="parentsguardianname" value="{{old('parentsguardianname')}}" class="block w-full px-4 py-1 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>

            <div>
                <label class="text-lg font-roboto text-gray-800 mb-2 mt-2" >Address</label>
                <input type="text" placeholder="" name="address" value="{{old('address')}}" type="text" class="block w-full px-4 py-1 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>

            <div>
                <label class="text-lg font-roboto text-gray-800 mb-2 mt-2">Enter Parents/Guardian Mobile Number</label>
                <input type="text" placeholder="" name="parentsguardiannumber" value="{{old('parentsguardiannumber')}}" class="block w-full px-4 py-1 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>
        </div>

        <div> 
        <button type="submit" class="mt-10 py-2 px-10 bg-primarycolor rounded-2 hover:bg-blue-700 text-white font-bold uppercase hover:bg-blue-500 text-lg mt-4 transform bg-gray-600 transition-all duration-500 bg-black bg-opacity-90 rounded"
         >FINISH</button>
        </div>
  </div>











                <!--<p class="text-lg font-roboto text-gray-800 mb-2 mt-2">First Name</p>
                <input class="w-62 h-7 px-3 border border-gray-800 rounded-md" type="text" placeholder="" name="first" value="{{old('first')}}">
                <br>
                <span class="text-red-800 text-sm">@error('first') {{$message}} @enderror </span>
               
                <p class="text-lg font-roboto  text-gray-800 mb-2 mt-2">Middle Name</p>
                <input class="w-62 h-7 px-3 border border-gray-800 rounded-md" type="text" placeholder="" name="middle" value="{{old('middle')}}">
                <br>
                <span class="text-red-800 text-sm">@error('middle') {{$message}} @enderror </span>
                
                <p class="text-lg font-roboto  text-gray-800 mb-2 mt-2">Last Name</p>
                <input class="w-62 h-7 px-3 border border-gray-800 rounded-md" type="text" placeholder="" name="last" value="{{old('last')}}">
                <br>
                <span class="text-red-800 text-sm ">@error('last') {{$message}} @enderror </span>
                
                <p class="text-lg font-roboto  text-gray-800 mb-2 mt-2">Birthday</p>
                <input class="w-62 h-7 px-3 border border-gray-800 rounded-md" type="date" placeholder="" name="birthday" value="{{old('birthday')}}">
                <br>
                <span class="text-red-800 text-sm ">@error('birthday') {{$message}} @enderror </span>
               
                <p class="text-lg font-roboto  text-gray-800 mb-2 mt-2">Address</p>
                <input class="w-62 h-7 px-3 border border-gray-800 rounded-md" type="text" placeholder="" name="address" value="{{old('address')}}">
                <br>
                <span class="text-red-800 text-sm ">@error('address') {{$message}} @enderror </span>
                
                <p class="text-lg font-roboto  text-gray-800 mb-2 mt-2">Gender</p>
  
                            <select class="form-control w-62 h-7 px-3 mb-2 px-4 lg:py-1 xs:py-1 sm:py-1 border rounded-md
                            border-gray-800 text-gray-600 focus:outline-none focus:border-green-500" id="" name="gender" value="{{old('gender')}}">
                            <option value="0">--</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
              
                          </select>
              
                <p class="text-lg font-roboto  text-gray-800 mb-2 mt-2">Course List</p>
                
                <select class="form-control w-62 h-7 px-3 px-4 lg:py-1 xs:py-1 sm:py-1 border rounded-md
                border-gray-800 text-gray-600 focus:outline-none focus:border-green-500" id="" name="courselist" value="{{old('courselist')}}">
                            <option value="0">--</option>
                            <option value="Bachelor of Science in Information Technology (BSIT)">Bachelor of Science in Information Technology (BSIT)</option>
                            <option value="Bachelor of Science in Accountancy (BSA)">Bachelor of Science in Accountancy (BSA)</option>
                            <option value="Bachelor of Science in Computer Engineering (BSCpE)">Bachelor of Science in Computer Engineering (BSCpE)</option>
                            <option value="Bachelor of Arts in Communication (AB Communication)">Bachelor of Arts in Communication (AB Communication)</option>
                            <option value="Bachelor of Science in Custom Adminitration (BSCA)">Bachelor of Science in Custom Adminitration (BSCA)</option>
                            <option value="Bachelor of Science in Information System (BSIS)">Bachelor of Science in Information System (BSIS)</option>
                            <option value="Bachelor of Science in Mathematics (BS Mathematics)">Bachelor of Science in Mathematics (BS Mathematics)</option>
                          </select>
              
                <br>
                
                
                <p class="text-lg font-roboto  text-gray-800 mb-2 mt-2">Mobile Number</p>
                <input class="w-62 h-7 px-3 border border-gray-800 rounded-md" type="text" placeholder="" name="mobilenumber" value="{{old('mobilenumber')}}">
                <br>
                <span class="text-red-800 text-sm ">@error('mobilenumber') {{$message}} @enderror </span>
                
                <p class="text-lg font-roboto  text-gray-800 mb-2 mt-2">Enter Parents/Guardian Name</p>
                <input class="w-62 h-7 px-3 border border-gray-800 rounded-md" type="text" placeholder="" name="parentsguardianname" value="{{old('parentsguardianname')}}">
                <br>
                <span class="text-red-800 text-sm ">@error('parentsguardianname') {{$message}} @enderror </span>
                
                <p class="text-lg font-roboto  text-gray-800 mb-2 mt-2">Enter Parents/Guardian Mobile Number</p>
                <input class="w-62 h-7 px-3 border border-gray-800 rounded-md" type="text" placeholder="" name="parentsguardiannumber" value="{{old('parentsguardiannumber')}}">
                <br>
                <span class="text-red-800 text-sm ">@error('parentsguardiannumber') {{$message}} @enderror </span>
                
               
                
                
                <br>
                <button type="submit"
               class="py-1 px-2 bg-primarycolor rounded-2 hover:bg-blue-700 text-white font-bold uppercase hover:bg-blue-500 text-lg mt-4 transform bg-gray-600 transition-all duration-500 bg-black bg-opacity-90 rounded" style="width: 90px; height: 58px;"
               >FINISH</button>-->

          </form>
      </div>
</div>

      

    <script src="sdbr.js"></script>

    @endsection