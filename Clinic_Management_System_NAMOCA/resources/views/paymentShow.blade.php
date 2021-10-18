
@extends('layouts.sidebar')

@section('content')

   
    <div class="bg-gray-800 mt-3 mb-5 mr-5 ml-2 w-full rounded-3xl border-white border-solid" style="border:1px solid; border-color:pink;">
   
        <h1 class="flex items-center justify-center text-white font-semibold text-4xl mt-10 "> PAID RECORDS</h1> <a href="{{ url('payment') }}"><i style="margin-left:8%;" class="text-gray-300 hover:text-white text-3xl fas fa-arrow-left"></i></a>
        <div class="bg-gray-200 ml-24 mt-2" style="width:80%; height: 1px;"></div>


        <div class="w-11/12 overflow-y-auto h-96 ml-10 mt-10">
        <table class="border-collapse w-full  rounded">
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
            <th class="p-3 font-semibold  bg-gray-700 text-white border border-gray-300 hidden lg:table-cell">Action</th>
         
  
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
                {{$item ->birth}}
          	</td>
            <td class="w-full lg:w-auto p-3  text-white  border border-b text-center block lg:table-cell  lg:static">
                <span class="lg:hidden  top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold uppercase">Time</span>
                {{$item ->time}}
            </td>
            <td class="w-full lg:w-auto p-3  text-white  border border-b text-center block lg:table-cell  lg:static">
                <span class="lg:hidden  top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold uppercase">Test</span>
                {{$item ->test}}
            </td>

            </td>
            <td class="w-full lg:w-auto p-3  text-white  border border-b text-center block lg:table-cell  lg:static">
                <span class="lg:hidden  top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold uppercase">Total Amount</span>
                {{$item ->bill}}
            </td>

            </td>
            <td class="w-full lg:w-auto p-3  text-white  border border-b text-center block lg:table-cell  lg:static">
                <span class="lg:hidden  top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold uppercase">Cash</span>
                {{$item ->cash}}
            </td>

            </td>
            <td class="w-full lg:w-auto p-3  text-white  border border-b text-center block lg:table-cell  lg:static">
                <span class="lg:hidden  top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold uppercase">Change</span>
                {{$item ->change}}
            </td>
            <td class="w-full lg:w-auto p-3  text-white  border border-b text-center block lg:table-cell  lg:static">
                <span class="lg:hidden  top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold uppercase">Actions</span>

               <a href="deleted/{{$item->fullname}}" class="text-blue-400 hover:text-gray-200 underline">Delete</a>
                
                
            </td>

           
           
        </tr>
        @endforeach
  
    </tbody>
</table>
</div>


<div class="bg-gray-200 w-3/5  mt-10" style=" height: 1px; margin-left: 18%;"></div>
    

        </div>
       


        
    
  

        @endsection



</div>



<script src="sidebar.js"></script>
    
</body>












