
@extends('layouts.sidebar')

@section('content')

   
    <div class="bg-gray-800 mt-3 mb-5 mr-5 ml-2 w-full rounded-3xl border-white border-solid" style="border:1px solid; border-color:pink;">
   
        <h1 class="flex items-center justify-center text-white font-semibold text-4xl mt-10 "> PATIENTS LIST</h1> <a href="{{ url('patient') }}"><i style="margin-left:8%;" class="text-gray-300 hover:text-white text-3xl fas fa-arrow-left"></i></a>
        <div class="bg-gray-200 ml-24 mt-2" style="width:80%; height: 1px;"></div>


        <table class="border-collapse w-11/12 mt-10 rounded" style="margin-left: 3%; margin-right:3%;">
    <thead>
        <tr>
            <th class="p-3 font-semisemibold  bg-gray-700 text-white border border-gray-300 hidden lg:table-cell">ID</th>
            <th class="p-3 font-semibold  bg-gray-700 text-white border border-gray-300 hidden lg:table-cell">Fullname</th>
            <th class="p-3 font-semibold  bg-gray-700 text-white border border-gray-300 hidden lg:table-cell">Address</th>
            <th class="p-3 font-semibold  bg-gray-700 text-white border border-gray-300 hidden lg:table-cell">Email Address</th>
            <th class="p-3 font-semibold  bg-gray-700 text-white border border-gray-300 hidden lg:table-cell">Contact</th>
            <th class="p-3 font-semibold  bg-gray-700 text-white border border-gray-300 hidden lg:table-cell">Age</th>
            <th class="p-3 font-semibold  bg-gray-700 text-white border border-gray-300 hidden lg:table-cell">Date</th>
            <th class="p-3 font-semibold  bg-gray-700 text-white border border-gray-300 hidden lg:table-cell">Temperature</th>
            <th class="p-3 font-semibold  bg-gray-700 text-white border border-gray-300 hidden lg:table-cell">Weight</th>
            <th class="p-3 font-semibold  bg-gray-700 text-white border border-gray-300 hidden lg:table-cell">Height</th>
            <th class="p-3 font-semibold  bg-gray-700 text-white border border-gray-300 hidden lg:table-cell">Delete</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($list as $item)
        <tr class="bg-gray-800 lg:hover:bg-gray-700  flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
            <td class="w-full lg:w-auto p-3 text-white text-center border border-b block lg:table-cell  lg:static">
                <span class="lg:hidden  top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold">ID</span>
                {{$item ->id}}
            </td>
            <td class="w-full lg:w-auto p-3 text-white  border border-b text-center block lg:table-cell  lg:static">
                <span class="lg:hidden  top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold uppercase">Fullname</span>
                {{$item ->fullname}}
            </td>
          	<td class="w-full lg:w-auto p-3  text-white  border border-b text-center block lg:table-cell  lg:static">
                <span class="lg:hidden  top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold uppercase">Address</span>
                {{$item ->address}}
          	</td>
            <td class="w-full lg:w-auto p-3  text-white  border border-b text-center block lg:table-cell  lg:static">
                <span class="lg:hidden  top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold uppercase">Email Address</span>
                {{$item ->email}}
            </td>
            <td class="w-full lg:w-auto p-3  text-white  border border-b text-center block lg:table-cell  lg:static">
                <span class="lg:hidden  top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold uppercase">Contact</span>
                {{$item ->contact}}
            </td>
            <td class="w-full lg:w-auto p-3  text-white  border border-b text-center block lg:table-cell  lg:static">
                <span class="lg:hidden  top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold uppercase">Age</span>
                {{$item ->age}}
            </td>

            <td class="w-full lg:w-auto p-3 text-white  border border-b text-center block lg:table-cell  lg:static">
                <span class="lg:hidden  top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold uppercase">Date</span>
                {{$item ->birth}}
                
            </td>

            <td class="w-full lg:w-auto p-3  text-white  border border-b text-center block lg:table-cell  lg:static">
                <span class="lg:hidden  top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold uppercase">Temperature</span>
                {{$item ->temp}}
                
            </td>

            <td class="w-full lg:w-auto p-3  text-white  border border-b text-center block lg:table-cell  lg:static">
                <span class="lg:hidden  top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold uppercase">Weight</span>
                {{$item ->weight}}
                
            </td>

            <td class="w-full lg:w-auto p-3  text-white  border border-b text-center block lg:table-cell  lg:static">
                <span class="lg:hidden  top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold uppercase">Height</span>
                {{$item ->height}}
                
            </td>

            <td class="w-full lg:w-auto p-3  text-white  border border-b text-center block lg:table-cell  lg:static">
                <span class="lg:hidden  top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold uppercase">Delete</span>
                
               <a href="edit/{{$item->id}}" class="text-gray-200 mr-3 hover:text-white " ><i class="fas fa-edit"></i></a>
                <a href="deletes/{{$item->id}}" class=" text-red-500 hover:text-red-400 "><i class="fas fa-trash"></i></a>
         
            </td> 

        </tr>
       
        @endforeach
        </tbody>
</table>


  
    

        </div>
       


        
    
  

        @endsection



</div>



<script src="sidebar.js"></script>
    
</body>












