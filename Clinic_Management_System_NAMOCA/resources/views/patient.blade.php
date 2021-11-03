

   @extends('layouts.sidebar')

@section('content')

    <div class="bg-gray-800 mt-3 mb-5 mr-5 ml-2 w-full rounded-3xl border-white border-solid" style="border:1px solid; border-color:pink;">
   
        <h1 class="flex items-center justify-center text-white font-semibold text-4xl mt-10 "> PATIENT FORM</h1> <a href="{{ url('patview') }}"><i style="margin-left:85%;" class="text-gray-300 hover:text-white text-3xl fas fa-table"></i></a>
        <div class="bg-gray-200 ml-24 mt-2" style="width:80%; height: 1px;"></div>
        <form action="{{route('patient-page')}}" method="post">
       
        @if(Session::has('success'))
                <div class="ml-40 text-white bg-gray-600  w-80 rounded text-center" role="alert">{{Session::get('success')}}</div>
                @endif

                @if(Session::has('fail'))
                <div class="ml-40 text-red bg-gray-500 w-80 rounded text-center" role="alert">{{Session::get('fail')}}</div>
                @endif

        @csrf
        <div class="mt-5 ">
        <ul class="mt-3">
    
        <label for="fullname" class="text-white ml-40 ">Fullname </label>
        </ul>
        <input  type="text" name="fullname" value="{{old('fullname')}}" required class="rounded-lg text-white  ml-40 mt-3 bg-gray-800 border-2  border-gray-500  " style="width: 68%;">

        <ul class="mt-3">
            <label for="address" class="text-white ml-40">Address </label>
            </ul>
            <input  type="text" name="address" value="{{old('address')}}" required class="rounded-lg text-white  ml-40 mt-3 bg-gray-800 border-2  border-gray-500  " style="width: 68%;">

     

        <ul class="mt-3">
            <label for="email" class="text-white ml-40">Email </label>
            <label for="contact" class="text-white" style="margin-left:34%">Contact </label>
            </ul>
            <input type="text" name="email" value="{{old('email')}}" required placeholder="  @" class="rounded-lg text-white  ml-40 mt-3 bg-gray-800 border-2  border-gray-500  " style="width: 36%;">
            <input type="text" name="contact" value="{{old('contact')}}" required class="rounded-lg text-white mt-3 bg-gray-800 border-2 ml-1  border-gray-500" style="width:31%;">
          
            <ul class="mt-3">
            <label for="age" class="text-white ml-40">Age </label>
            <label for="birth" class="text-white" style="margin-left:34%">Date </label>
             
                </ul>
                <input type="text" name="age" value="{{old('age')}}" required  class="rounded-lg text-white  ml-40 mt-3 bg-gray-800 border-2  border-gray-500  " style="width: 36%;">
                <input type="date" name="birth" value="{{old('birth')}}" required class="rounded-lg text-white mt-3 bg-gray-800 border-2 ml-1  border-gray-500" style="width:31%;">
               

                <div class="bg-gray-200 ml-48 mt-6" style="width:63%; height: 1px;"></div>
                <div class="bg-gray-200 ml-24 mt-5" style="width:80%; height: 1px;"></div>

                <h1 class="flex mt-3 items-center justify-center text-white text-2xl">Body Mask Index</h1>

                <ul class="mt-5">
                    <label for="temp" class="text-white ml-80">Temperature </label>
                    <label for="weight" class="text-white ml-24">Weight</label>
                    <label for="height" class="text-white ml-32">Height</label>               
                    </ul>
                    <input type="text" name="temp" value="{{old('temp')}}" required placeholder="                                  ℃" class="rounded-lg text-white ml-80 mt-3 bg-gray-800 border-2  border-gray-500  ">
                    <input type="text" name="weight" value="{{old('weight')}}" required placeholder="                                 Kg" class="rounded-lg text-white mt-3 bg-gray-800 border-2  border-gray-500  ">
                    <input type="text" name="height" value="{{old('height')}}" required placeholder="                                 Cm" class="rounded-lg text-white mt-3 bg-gray-800 border-2  border-gray-500  ">

                    <div class="bg-gray-200 ml-24 mt-10" style="width:80%; height: 1px;"></div>
                   
                    <div>
                        <button type="submit" class="bg-gray-600 px-28  text-white mt-7 py-3 rounded-xl hover:bg-gray-700" style="margin-left:38%">S U B M I T</button>
                    </div>
            
                   

        </div>
        </form>
        </div>
    



        </div>
       






        @endsection

</div>


<script src="sidebar.js"></script>

</body>











