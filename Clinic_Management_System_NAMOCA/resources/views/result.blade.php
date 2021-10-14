

@extends('layouts.sidebar')

@section('content')


   
    <div class=" bg-gray-800 mt-3 mb-5 mr-5 ml-2 w-full rounded-3xl border-white border-solid" style="border:1px solid; border-color:pink;">


        <div>
        <h1 class="flex items-center justify-center text-white font-semibold text-4xl mt-10 "> PATIENTS VIEW</h1>
        <div class="bg-gray-200 ml-24 mt-10" style="width:80%; height: 1px;"></div>

        <div class="flex mt-10 ml-24" style="width:80%; height:74%; ">


<form action="{{route('search-record')}}" method="post">
    {{csrf_field()}}

       <div>
        <input type="text" name="name" placeholder="  Search ... " class="rounded-full text-white bg-gray-800 pl-5 h-8" style="width: 250%; border:1px solid; border-color:pink;"> 
      
       </div>
</form>


       <i class="text-white hover:text-gray-200 text-4xl fas fa-bell" style="margin-left: 60%;"></i>
       <button id="delete-btn" class="bg-gray-700  hover:bg-gray-600 hover:text-white text-white h-8 w-24 ml-5 "style="border:2px solid; border-color:white;}" > <i class="mr-3 fas fa-folder-plus"></i>ADD</button>
        

        

    </div>


    <div class=" absolute inset-0 hidden h-5/6 justify-center items-center" id="overlay">
        <div class="bg-gray-700  py-2 px-3 rounded shadow-xl text-gray-800">
            <div class="flex justify-between items-center">
            <h4 class="text-lg text-gray-100 font-bold">RESULT</h4>
                
            </div>
            <form action="{{route('result-page')}}" method="post" class="m-8">
            

        @csrf
                
                             <div class="w-96 px-1">
                              <label for="name" class="text-white">PATIENT ID</label>
                              <input type="text" required  name="patientID" value="{{old('patientID')}}" class="bg-gray-700 w-full mt-2 mb-2 px-4 py-2 border border-white rounded-md
                              text-gray-100 ">
                              
                          </div>

                        <div class="w-96 px-1">
                            <label for="time" class="text-white">TIME</label>
                            <input type="text" required name="time" value="{{old('time')}}" class="bg-gray-700 w-full mt-2 mb-2 px-4 py-2 border border-white rounded-md
                              text-gray-100 ">
                     
                        </div>
                        <div  for="test" class="w-96 px-1">
                            <label class="text-white">TEST</label>
                            <input type="text" required name="test" value="{{old('test')}}" class="bg-gray-700 w-full mt-2 mb-2 px-4 py-2 border border-white rounded-md
                              text-gray-100 "">
                            
                        </div>
                    

  
               
            
            <div class="mt-3 flex justify-end space-x-3">
            
                <button id="close-modal" class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700  hover:text-white">Cancel</button>
                <button type="submit" class="px-3 py-1 bg-gray-600 text-gray-100 hover:bg-gray-500 rounded">ADD</button>
            </div>
           
        </div>
</form>
    </div>




    

  <div class="w-11/12 overflow-y-auto h-96 ml-10 mt-10">
<table class="border-collapse w-full  rounded" >

    <thead>
        <tr>
            <th class="p-3 font-semisemibold  bg-gray-700 text-white border border-gray-300 hidden lg:table-cell">ID</th>
            <th class="p-3 font-semibold  bg-gray-700 text-white border border-gray-300 hidden lg:table-cell">Fullname</th>
            <th class="p-3 font-semibold  bg-gray-700 text-white border border-gray-300 hidden lg:table-cell">Date</th>
            <th class="p-3 font-semibold  bg-gray-700 text-white border border-gray-300 hidden lg:table-cell">Time</th>
            <th class="p-3 font-semibold  bg-gray-700 text-white border border-gray-300 hidden lg:table-cell">Test</th>
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
            <td class="w-full lg:w-auto p-3  text-white  border border-b text-center block lg:table-cell  lg:static">
                <span class="lg:hidden  top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold uppercase">Actions</span>

               <a href="delete/{{$item->id}}" class="text-blue-400 hover:text-gray-200 underline">Delete</a>
                
                
            </td>
        </tr>
        
        
        @endforeach
      
    </tbody>
   
</table>
</div>



<div class="bg-gray-200 w-3/5  mt-10" style=" height: 1px; margin-left: 18%;"></div>
    

</div>

</div>

</div>

         
<script src="modals.js"></script>
<script src="sidebar.js"></script>
    
</body>
@endsection

