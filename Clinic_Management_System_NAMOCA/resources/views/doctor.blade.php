


@extends('layouts.sidebar')

@section('content')
   
    <div class=" bg-gray-800 mt-3 mb-5 mr-5 ml-2 w-full rounded-3xl border-white border-solid" style="border:1px solid; border-color:pink;">

        <h1 class="flex items-center justify-center text-white font-semibold text-4xl mt-10 "> DOCTOR SCHEDULE</h1>
        <div class="bg-gray-200 ml-24 mt-10" style="width:80%; height: 1px;"></div>

        <div class="flex mt-10 ml-24" style="width:80%; height:74%; ">

        <div class="bg-gray-800  rounded-lg hover:bg-gray-900 " style="width:50%; height:98%; border:1px solid; border-color:gray;">

            <img src="img/doc.jpg" class="h-36 w-36 rounded-full mt-5 " style="margin-left: 36%;" >
            <h1 class="text-white font-semibold ml-14 mt-6 text-3xl">Dr. Trishia Mae Hamo-Ay</h1>
            <p class="mt-2 text-gray-400 ml-40 ">Agdao Davao City</p>
            <p class="mt-1 text-gray-400 ml-28 ">Trishamaehamo-ay@gmail.com</p>
            <p class="mt-1 text-gray-400 ml-44 ">09095645372</p>

            <div>
            <button id="delete-btn"  class="bg-gray-400 px-20 ml-24 text-black font-semibold mt-7 py-2 rounded-full hover:bg-gray-500" >View Schedules</button>
            </div>
            <i  class="text-white text-3xl mt-2 ml-56 hover:text-black fas fa-chevron-down"></i>
            
            
        </div>
        

        


        <div class="bg-gray-800 ml-4 rounded-lg hover:bg-gray-900"style="width:50%; height:98%; border:1px solid; border-color:gray;">

            <img src="img/doc2.jpg" class="h-36 w-36 rounded-full mt-5 "style="margin-left: 36%;"  >
            <h1 class="text-white font-semibold ml-14 mt-6 text-3xl">Dr. Michael Jhon Caligner</h1>
            <p class="mt-2 text-gray-400 ml-40 ">Ecoland Davao City</p>
            <p class="mt-1 text-gray-400 ml-28 ">Michaeljohncaligner@gmail.com</p>
            <p class="mt-1 text-gray-400 ml-44 ">09235645657</p>

            <div>
            <button id="delete" class="bg-gray-400 px-20 ml-24 text-black font-semibold mt-7 py-2 rounded-full hover:bg-gray-500" >View Schedules</button>
            </div>
            <i class="text-white text-3xl mt-2 ml-56 hover:text-black fas fa-chevron-down"></i>
        </div>

    </div>



    <!-- modals doctor1 -->
    <div class=" absolute inset-0 hidden h-5/6 justify-center  items-center" id="overlay">
    <div class="bg-gray-900  rounded-lg " style="width:45%; height:60%; border:1px solid; border-color:gray;">
    <i id="close-modal" class="float-right mt-3 mr-3 text-gray-300 hover:text-white  text-2xl far fa-times-circle"></i>

<img src="img/doc.jpg" class="h-36 w-36 rounded-full mt-5 " style="margin-left: 40%;" >
<h1 class="text-white font-semibold text-center text-3xl">Dr. Trishia Mae Hamo-Ay</h1>
<p class="mt-1 text-gray-400 text-center ">Trishamaehamo-ay@gmail.com</p>



<table class="border-collapse w-11/12 mt-10 rounded" style="margin-left:5%; margin-right-5%;">
    <thead>
        <tr>
            <th class="p-3 font-semisemibold  bg-gray-700 text-white border border-gray-300 hidden lg:table-cell">Mon</th>
            <th class="p-3 font-semibold  bg-gray-700 text-white border border-gray-300 hidden lg:table-cell">Tue</th>
            <th class="p-3 font-semibold  bg-gray-700 text-white border border-gray-300 hidden lg:table-cell">Wed</th>
            <th class="p-3 font-semibold  bg-gray-700 text-white border border-gray-300 hidden lg:table-cell">Thurs</th>
            <th class="p-3 font-semibold  bg-gray-700 text-white border border-gray-300 hidden lg:table-cell">Fri</th>
            <th class="p-3 font-semibold  bg-gray-700 text-white border border-gray-300 hidden lg:table-cell">Sat</th>
            <th class="p-3 font-semibold  bg-gray-700 text-white border border-gray-300 hidden lg:table-cell">Sun</th>
        </tr>
    </thead>
    <tbody>
   
        <tr class="bg-gray-900  flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
            <td class="w-full lg:w-auto lg:hover:bg-gray-700 p-3 text-white text-center border border-b block lg:table-cell  lg:static">
                <span class="lg:hidden  top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold">Mon</span>
                <i class="fas fa-check"></i>
            </td>
            <td class="w-full lg:w-auto lg:hover:bg-gray-700 p-3 text-white  border border-b text-center block lg:table-cell  lg:static">
                <span class="lg:hidden  top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold uppercase">Tue</span>
                <i class="fas fa-check"></i>
            </td>
          	<td class="w-full lg:w-auto lg:hover:bg-gray-700 p-3  text-white  border border-b text-center block lg:table-cell  lg:static">
                <span class="lg:hidden  top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold uppercase">Wed</span>
                <i class="fas fa-times"></i>
          	</td>
            <td class="w-full lg:w-auto lg:hover:bg-gray-700 p-3  text-white  border border-b text-center block lg:table-cell  lg:static">
                <span class="lg:hidden  top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold uppercase">Thurs</span>
                <i class="fas fa-check"></i>
            </td>
            <td class="w-full lg:w-auto lg:hover:bg-gray-700 p-3  text-white  border border-b text-center block lg:table-cell  lg:static">
                <span class="lg:hidden  top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold uppercase">Fri</span>
                <i class="fas fa-times"></i>
            </td>
                
            </td>
            <td class="w-full lg:w-auto lg:hover:bg-gray-700 p-3  text-white  border border-b text-center block lg:table-cell  lg:static">
                <span class="lg:hidden  top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold uppercase">Sat</span>
                <i class="fas fa-check"></i>
            </td>

            <td class="w-full lg:w-auto lg:hover:bg-gray-700 p-3  text-white  border border-b text-center block lg:table-cell  lg:static">
                <span class="lg:hidden  top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold uppercase">Sun</span>
                <i class="fas fa-times"></i>
            </td>
           
        </tr>
        
        
    </tbody>
</table>

</div>
            
    </div>

    <!-- end for modals doctor1 -->




    <!-- modals doctor2 -->

    <div class=" absolute inset-0 hidden h-5/6 justify-center  items-center " id="over">
    <div class="bg-gray-900  rounded-lg  " style="width:45%; height:60%; border:1px solid; border-color:gray;">
    <i id="close" class="float-right mt-3 mr-3 text-gray-300 hover:text-white  text-2xl far fa-times-circle"></i>

    <img src="img/doc2.jpg" class="h-36 w-36 rounded-full mt-5 " style="margin-left: 40%;"  >
            <h1 class="text-white font-semibold text-center text-3xl">Dr. Michael Jhon Caligner</h1>
            <p class="mt-1 text-gray-400 text-center ">Michaeljohncaligner@gmail.com</p>



<table class="border-collapse w-11/12 mt-10 rounded" style="margin-left:5%; margin-right-5%;">
    <thead>
        <tr>
            <th class="p-3 font-semisemibold  bg-gray-700 text-white border border-gray-300 hidden lg:table-cell">Mon</th>
            <th class="p-3 font-semibold  bg-gray-700 text-white border border-gray-300 hidden lg:table-cell">Tue</th>
            <th class="p-3 font-semibold  bg-gray-700 text-white border border-gray-300 hidden lg:table-cell">Wed</th>
            <th class="p-3 font-semibold  bg-gray-700 text-white border border-gray-300 hidden lg:table-cell">Thurs</th>
            <th class="p-3 font-semibold  bg-gray-700 text-white border border-gray-300 hidden lg:table-cell">Fri</th>
            <th class="p-3 font-semibold  bg-gray-700 text-white border border-gray-300 hidden lg:table-cell">Sat</th>
            <th class="p-3 font-semibold  bg-gray-700 text-white border border-gray-300 hidden lg:table-cell">Sun</th>
        </tr>
    </thead>
    <tbody>
   
        <tr class="bg-gray-900  flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
            <td class="w-full lg:w-auto lg:hover:bg-gray-700 p-3 text-white  border border-b block lg:table-cell  lg:static">
                <span class="lg:hidden  top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold">Mon</span>
                <i class="fas fa-times"></i>
            </td>
            <td class="w-full lg:w-auto lg:hover:bg-gray-700 p-3 text-white  border border-b text-center block lg:table-cell  lg:static">
                <span class="lg:hidden  top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold uppercase">Tue</span>
                <i class="fas fa-check"></i>
            </td>
          	<td class="w-full lg:w-auto lg:hover:bg-gray-700 p-3  text-white  border border-b text-center block lg:table-cell  lg:static">
                <span class="lg:hidden  top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold uppercase">Wed</span>
                <i class="fas fa-check"></i>
          	</td>
            <td class="w-full lg:w-auto lg:hover:bg-gray-700 p-3  text-white  border border-b text-center block lg:table-cell  lg:static">
                <span class="lg:hidden  top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold uppercase">Thurs</span>
                <i class="fas fa-times"></i>
            </td>
            <td class="w-full lg:w-auto lg:hover:bg-gray-700 p-3  text-white  border border-b text-center block lg:table-cell  lg:static">
                <span class="lg:hidden  top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold uppercase">Fri</span>
                <i class="fas fa-check"></i>
            </td>
                
            </td>
            <td class="w-full lg:w-auto lg:hover:bg-gray-700 p-3  text-white  border border-b text-center block lg:table-cell  lg:static">
                <span class="lg:hidden  top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold uppercase">Sat</span>
                <i class="fas fa-times"></i>
            </td>

            <td class="w-full lg:w-auto lg:hover:bg-gray-700 p-3  text-white  border border-b text-center block lg:table-cell  lg:static">
                <span class="lg:hidden  top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold uppercase">Sun</span>
                <i class="fas fa-check"></i>
            </td>
           
        </tr>
        
        
    </tbody>
</table>

</div>
            
    </div>


    <!-- end for modals doctor2 -->


    
   

</div>
    

    

@endsection


</div>

<script src="modals.js"></script>
<script src="sidebar.js"></script>


           
    
    
</body>


