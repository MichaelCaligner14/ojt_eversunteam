



@extends('layouts.sidebar')

@section('content')
   
    <div class=" bg-gray-800 mt-3 mb-5 mr-5 ml-2 w-full rounded-3xl  border-solid" style="border:1px solid; border-color:pink;">

        <h1 class="flex items-center justify-center text-white font-semibold text-4xl mt-10 "> PAYMENT HERE!</h1>
        <div class="bg-gray-200 w-4/5 ml-24 mt-10" style=" height: 1px;"></div>


        <div class=" w-4/5 mt-5 text-white ml-24" style=" height:74%; ">

          
        <form action="{{route('search-records')}}" method="post">
                 {{csrf_field()}}
                <label class="text-2xl">Search ID:  </label>
                <input type="text" name="id" class="rounded-full bg-gray-600 ml-4 ">
              
                
         
           
            </form>
            <a href="#" id="delete-btn" > <i style="margin-left: 90%;" class="-mt-60 text-4xl fas fa-money-check"></i></a>

            <table class="border-collapse w-9/12 mt-5 rounded" style="margin-left: 10%; margin-right:10%;">
    <thead>
        <tr>
            <th class="p-3 font-semisemibold  bg-gray-700 text-white border border-gray-300 hidden lg:table-cell">ID</th>
            <th class="p-3 font-semibold  bg-gray-700 text-white border border-gray-300 hidden lg:table-cell">Fullname</th>
            <th class="p-3 font-semibold  bg-gray-700 text-white border border-gray-300 hidden lg:table-cell">Date</th>
            <th class="p-3 font-semibold  bg-gray-700 text-white border border-gray-300 hidden lg:table-cell">Time</th>
            <th class="p-3 font-semibold  bg-gray-700 text-white border border-gray-300 hidden lg:table-cell">Test</th>
         
  
        </tr>
    </thead>
    <tbody>
    @foreach ($list as $item)
        <tr class="bg-gray-800 lg:hover:bg-gray-700 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
            <td class="w-full lg:w-auto p-3 text-white text-center  border border-b block lg:table-cell  lg:static">
                <span class="lg:hidden  top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold">ID</span>
                {{$item ->id}}
            </td>
            <td class="w-full lg:w-auto p-3 text-white  border border-b text-center block lg:table-cell  lg:static">
                <span class="lg:hidden  top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold uppercase">Fullname</span>
                {{$item ->fullname}}
            </td>
          	<td class="w-full lg:w-auto p-3  text-white  border border-b text-center block lg:table-cell  lg:static">
                <span class="lg:hidden  top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold uppercase">Date</span>
                {{$item ->date}}
          	</td>
            <td class="w-full lg:w-auto p-3  text-white  border border-b text-center block lg:table-cell  lg:static">
                <span class="lg:hidden  top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold uppercase">Time</span>
                {{$item ->time}}
            </td>
            <td class="w-full lg:w-auto p-3  text-white  border border-b text-center block lg:table-cell  lg:static">
                <span class="lg:hidden  top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold uppercase">Test</span>
                {{$item ->test}}
            </td>

           
           
        </tr>
        
        @endforeach
    </tbody>
</table>
<div class="bg-gray-200 w-3/5  mt-10" style=" height: 1px; margin-left: 18%;"> </div>
<div class="bg-gray-200 w-5/5  mt-5" style=" height: 1px; "></div>   


<table class="border-collapse w-11/12 mt-5 rounded" style="margin-left: 1%; margin-right:1%;">
    <thead>
        <tr>
            <th class="p-3 font-semisemibold  bg-gray-700 text-white border border-gray-300 hidden lg:table-cell">ID</th>
            <th class="p-3 font-semibold  bg-gray-700 text-white border border-gray-300 hidden lg:table-cell">Fullname</th>
            <th class="p-3 font-semibold  bg-gray-700 text-white border border-gray-300 hidden lg:table-cell">Date</th>
            <th class="p-3 font-semibold  bg-gray-700 text-white border border-gray-300 hidden lg:table-cell">Time</th>
            <th class="p-3 font-semibold  bg-gray-700 text-white border border-gray-300 hidden lg:table-cell">Test</th>
            <th class="p-3 font-semibold  bg-gray-700 text-white border border-gray-300 hidden lg:table-cell">Total Amount</th>
            <th class="p-3 font-semibold  bg-gray-700 text-white border border-gray-300 hidden lg:table-cell">Cash</th>
            <th class="p-3 font-semibold  bg-gray-700 text-white border border-gray-300 hidden lg:table-cell">Change</th>
         
  
        </tr>
    </thead>
    <tbody>
   
        <tr class="bg-gray-800 lg:hover:bg-gray-700 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
            <td class="w-full lg:w-auto p-3 text-white text-center  border border-b block lg:table-cell  lg:static">
                <span class="lg:hidden  top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold">ID</span>
               
            </td>
            <td class="w-full lg:w-auto p-3 text-white  border border-b text-center block lg:table-cell  lg:static">
                <span class="lg:hidden  top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold uppercase">Fullname</span>
             
            </td>
          	<td class="w-full lg:w-auto p-3  text-white  border border-b text-center block lg:table-cell  lg:static">
                <span class="lg:hidden  top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold uppercase">Date</span>
               
          	</td>
            <td class="w-full lg:w-auto p-3  text-white  border border-b text-center block lg:table-cell  lg:static">
                <span class="lg:hidden  top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold uppercase">Time</span>
              
            </td>
            <td class="w-full lg:w-auto p-3  text-white  border border-b text-center block lg:table-cell  lg:static">
                <span class="lg:hidden  top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold uppercase">Test</span>
              
            </td>

            </td>
            <td class="w-full lg:w-auto p-3  text-white  border border-b text-center block lg:table-cell  lg:static">
                <span class="lg:hidden  top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold uppercase">Total Amount</span>
              
            </td>

            </td>
            <td class="w-full lg:w-auto p-3  text-white  border border-b text-center block lg:table-cell  lg:static">
                <span class="lg:hidden  top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold uppercase">Cash</span>
              
            </td>

            </td>
            <td class="w-full lg:w-auto p-3  text-white  border border-b text-center block lg:table-cell  lg:static">
                <span class="lg:hidden  top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold uppercase">Change</span>
              
            </td>

           
           
        </tr>
        
  
    </tbody>
</table>




    
<!-- add modal -->
<div class=" absolute inset-0 hidden h-5/6 justify-center items-center" id="overlay">
        <div class="bg-gray-700  py-2 px-3 rounded shadow-xl text-gray-800">
            <div class="flex justify-between items-center">
            <h4 class="text-lg text-gray-100 font-bold">Total Amount</h4>
                
            </div>
            <form action="{{route('result-page')}}" method="post" class="m-8">
            

        @csrf
                
                          <div class="w-96 px-1">
                              <label for="name" class="text-white">Patient ID</label>
                              <input type="text" required  name="id" value="{{old('fullname')}}" class="bg-gray-700 w-full mt-2 mb-2 px-4 py-2 border border-white rounded-md
                              text-gray-100 ">
                              
                          </div>

                          <div class="w-96 px-1">
                     <label  class="text-white ">Total Bill</label>
                              <input type="text"  required name="date" id="price" value="{{old('date')}}" class="bg-gray-700 w-full mt-2 mb-2 px-4 py-2 border border-white rounded-md
                              text-gray-100 ">
                           
                          </div>  

                          <div class="w-96 px-1">
                     <label  class="text-white ">Cash</label>
                              <input type="text" id="qty" required name="cash" value="{{old('cash')}}" class="bg-gray-700 w-full mt-2 mb-2 px-4 py-2 border border-white rounded-md
                              text-gray-100 ">
                           
                          </div>  

                          <div class="w-96 px-1">
                     <label  class="text-white ">Change</label>
                             <input type="text" id="change" required name="change" value="{{old('change')}}" class="bg-gray-700 w-full mt-2 mb-2 px-4 py-2 border border-white rounded-md
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

</div>  
  

</div>



</div>


<script src="modals.js"></script>
<script src="sidebar.js"></script>
<script src="js/jquery-3.5.0.min.js"></script>
<script src="js/payment.js"></script>



</body>

@endsection

