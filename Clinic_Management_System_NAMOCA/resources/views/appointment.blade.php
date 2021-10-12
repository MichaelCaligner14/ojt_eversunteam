


@extends('layouts.sidebar')

@section('content')

   
    <div class="bg-gray-800 mt-3 mb-5 mr-5 ml-2 w-full rounded-3xl border-white border-solid" style="border:1px solid; border-color:pink;">

        <h1 class="flex items-center justify-center text-white font-semibold text-4xl mt-10 "> APPOINTMENTS</h1>
        <div class="bg-gray-200 ml-24 mt-10" style="width:80%; height: 1px;"></div>

        <div class="ml-28 mt-5 ">
            <h1 class="text-white font-bold">5th Tuesday, OCT</h1>
            <div class="flex mt-3">
            <img src="img/first.png" class="w-10 h-10 rounded-full"> 
            <img src="img/second.png" class="ml-1 w-10 h-10 rounded-full">
            <img src="img/third.png" class="ml-1 w-10 h-10 rounded-full">
            <img src="img/four.png" class="ml-1 w-10 h-10 rounded-full">
            <i class="mt-2 ml-3 text-gray-600 text-2xl hover:text-white fas fa-calendar-check"></i>
            <p class="text-gray-600 hover:text-white font-semibold mt-2 ml-3 "> Appointments today</p>

            <a href="#" id="delete-btn" ><i class="text-gray-600 text-2xl ml-96 mt-2 hover:text-white fas fa-calendar-plus"></i></a>
            
           </div>
           

        </div>
        <div class="bg-gray-200 ml-24 mt-10" style="width:80%; height: 1px;"></div>

        <div class="flex ml-28">
            <p class="text-white mt-12">11:00 AM </p>  <div class="flex bg-gray-500 h-10 mt-10 ml-10 hover:bg-gray-600  rounded-full" style="width:72%;">
            
                <img src="img/first.png" class="ml-4 w-8 mt-1 h-8 rounded-full"> <p class="text-white mt-2 ml-5 "> Jessa Mae Donor - Check-Up</p> <p class="text-white mt-2" style="margin-left: 60%;"> </p>

            </div>

        </div>

        <div class="flex ml-28">
            <p class="text-white mt-10">12:00 AM </p>  <div class="flex bg-gray-500 h-10 mt-8 ml-10 hover:bg-gray-600  rounded-full" style="width:72%;">
            
                <img src="img/second.png" class="ml-4 w-8 mt-1 h-8 rounded-full"> <p class="text-white mt-2 ml-5"> Trishia Mae Hamo-Ay - Cosmotology</p> <p class="text-white mt-2" style="margin-left: 53%;"> </p>

            </div>

        </div>


        <div class="flex ml-28">
            <p class="text-white mt-10">01:00 PM </p>  <div class="flex bg-gray-500 h-10 mt-8 ml-10 hover:bg-gray-600  rounded-full" style="width:72%;">
            
                <img src="img/third.png" class="ml-4 w-8 mt-1 h-8 rounded-full"> <p class="text-white mt-2 ml-5"> Joana Mae Mantilla - Visit Clinic for monthly check up</p> <p class="text-white mt-2" style="margin-left: 38%;"> </p>

            </div>

        </div>

        <div class="flex ml-28">
            <p class="text-white mt-10">02:00 PM </p>  <div class="flex bg-gray-500 h-10 mt-8 ml-10 hover:bg-gray-600  rounded-full" style="width:72%;">
            
                <img src="img/four.png" class="ml-4 w-8 mt-1 h-8 rounded-full"> <p class="text-white mt-2 ml-5"> Michael John Caligner - Osteopathy</p> <p class="text-white mt-2" style="margin-left: 54%;"> </p>

            </div>

        </div>


        <div class="flex ml-28">
            <p class="text-white mt-9">03:00 PM </p> <div class="bg-gray-400 ml-10 mt-12" style="width:72%; height: 1px;"></div>

        </div>

        <div class="flex ml-28">
            <p class="text-white mt-9">04:00 PM </p> <div class="bg-gray-400 ml-10 mt-12" style="width:72%; height: 1px;"></div>

        </div>



        
        </div>

        <!-- add modal -->
<div class=" absolute inset-0 hidden h-5/6 justify-center items-center" id="overlay">
        <div class="bg-gray-700  py-2 px-3 rounded shadow-xl text-gray-800">
            <div class="flex justify-between items-center">
            <h4 class="text-lg text-gray-100 font-bold">Appointment</h4>
                
            </div>
            <form action="{{route('appoint-page')}}" method="post" class="m-8">
            

        @csrf
                
                          <div class="w-96 px-1">
                              <label for="name" class="text-white">Fullname</label>
                              <input type="text" required  name="fullname" value="{{old('fullname')}}" class="bg-gray-700 w-full mt-2 mb-2 px-4 py-2 border border-white rounded-md
                              text-gray-100 ">
                              
                          </div>

                          <div class="w-96 px-1">
                     <label for="date" class="text-white ">Purpose</label>
                              <input type="text" required name="purpose" value="{{old('purpose')}}" class="bg-gray-700 w-full mt-2 mb-2 px-4 py-2 border border-white rounded-md
                              text-gray-100 ">
                           
                          </div>  

                          <div class="w-96 px-1">
                     <label for="date" class="text-white ">Time</label>
                              <input type="text" required name="time" value="{{old('time')}}" class="bg-gray-700 w-full mt-2 mb-2 px-4 py-2 border border-white rounded-md
                              text-gray-100 ">
                           
                          </div>  

                          <div class="w-96 px-1">
                     <label for="date" class="text-white ">Date</label>
                              <input type="text" required name="date" value="{{old('date')}}" class="bg-gray-700 w-full mt-2 mb-2 px-4 py-2 border border-white rounded-md
                              text-gray-100 ">
                           
                          </div>  

  
                    

  
               
            
            <div class="mt-3 flex justify-end space-x-3">
            
                <button id="close-modal" class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700  hover:text-white">Cancel</button>
                <button type="submit" class="px-3 py-1 bg-gray-600 text-gray-100 hover:bg-gray-500 rounded">SAVE</button>
            </div>
           
        </div>
</form>
    </div>

<!-- end modal -->

    





        @endsection


</div>

<script src="modals.js"></script>
<script src="sidebar.js"></script>    
    
    
</body>


