
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/app.css">
   
    <script src="https://kit.fontawesome.com/c26cd2166c.js"></script>
    <title> Result Page </title>
</head>

<header class="bg-gray-800 py-1 pr-8 text-gray-300 hover:text-white text-right">
<i class="px-2 fas fa-clinic-medical"></i>CLINIC MANAGEMENT SYSTEM
</header>

<body class="bg-gray-600" >
  
<div class="relative min-h-screen md:flex">

    <div class="bg-gray-800 text-white flex justify-between md:hidden">

        <a href="#" class="block p-4 text-white font-bold">Clinic Management System</a>
<button class="mobile-menu-button p-4 focus:outline-none focus:bg-gray-500">
    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
      </svg>
</button>



    </div>

    

    <div class="sidebar bg-gray-800 text-white w-60 absolute inset-y-0 left-0 transform -translate-x-full md:relative md:translate-x-0 transition duration-200 ease-in-out;" >

    <a href="http://localhost/cms/public/index"> <img src="img/logo.png" class="w-24 ml-14 mt-3"></a>
        <h1 class="ml-5 font-semibold text-sm hover:text-gray-600"> Clinic Management System </h1>

        <nav class="mt-10">
           
                <div class="container">
    
                <ul class="navbar-nav"> 
                        <li class="nav-item rounded-sm p-2 hover:bg-gray-500  active">
    
                            <i class="text-white mr-5 ml-3 fas fa-columns hover:text-black"></i> <a class="nav-link text-white hover:text-black " href="{{ url('index') }}">Dashboard</a>
                            
                        </li>
                        <li class="nav-item rounded-sm p-2 hover:bg-gray-500    active">
                            <i class="text-white mr-4 ml-3 hover:text-black fas fa-hospital-user"></i> <a class=" hover:text-black nav-link text-white "href="{{ url('patient') }}">Patients</a>
                        </li>
                        <li class="nav-item rounded-sm p-2 hover:bg-gray-500  active">
                            <i class="text-white mr-6 ml-3 hover:text-black fas fa-calendar-check"></i><a class=" hover:text-black nav-link text-white"href="{{ url('appointment') }}">Appointment</a>
                        </li>
                
                        <li class="nav-item rounded-sm p-2 hover:bg-gray-500 active">
                            <i class="text-white mr-6 ml-3 hover:text-black fas fa-user-md"></i><a class="hover:text-black nav-link text-white"href="{{ url('doctor') }}">Doctors</a>
                            </li>
    
                        <li class="nav-item rounded-sm p-2 hover:bg-gray-500 active">
                            <i class="text-white mr-5 ml-3 hover:text-black fas fa-poll-h"></i> <a class="hover:text-black nav-link text-white"href="{{ url('result') }}">Result</a>
                                </li>
    
                        <li class="nav-item rounded-sm p-2 hover:bg-gray-500 active">
                            <i class="text-white mr-5 ml-3 hover:text-black far fa-credit-card"></i><a class="hover:text-black nav-link text-white"href="{{ url('payment') }}">Payment</a>
                                    </li>
                
                    </ul>
               
                </div>

        </nav>
        <div class="text-white mt-96 ">
            <i class="ml-4 hover:text-black fas fa-battery-half"></i>
            <i class="ml-4 hover:text-black fas fa-wifi"></i>
            <i class="ml-4 hover:text-black fab fa-bluetooth-b"></i>
            <i class="ml-4 hover:text-black fas fa-volume-up"></i>
            <a href="{{ url('login') }}"><i class="ml-4 hover:text-black fas fa-power-off"></i></a>

        </div> 
    </div>


   
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
                              <label for="name" class="text-white">NAME</label>
                              <input type="text" required  name="fullname" value="{{old('fullname')}}" class="bg-gray-700 w-full mt-2 mb-2 px-4 py-2 border border-white rounded-md
                              text-gray-100 ">
                              
                          </div>

                          <div class="w-96 px-1">
                     <label for="date" class="text-white ">DATE</label>
                              <input type="text" required name="date" value="{{old('date')}}" class="bg-gray-700 w-full mt-2 mb-2 px-4 py-2 border border-white rounded-md
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




    


<table class="border-collapse w-9/12 mt-10 rounded" style="margin-left: 10%; margin-right:10%;">
    <thead>
        <tr>
            <th class="p-3 font-semisemibold  bg-gray-700 text-white border border-gray-300 hidden lg:table-cell">ID</th>
            <th class="p-3 font-semibold  bg-gray-700 text-white border border-gray-300 hidden lg:table-cell">Fullname</th>
            <th class="p-3 font-semibold  bg-gray-700 text-white border border-gray-300 hidden lg:table-cell">Date</th>
            <th class="p-3 font-semibold  bg-gray-700 text-white border border-gray-300 hidden lg:table-cell">Time</th>
            <th class="p-3 font-semibold  bg-gray-700 text-white border border-gray-300 hidden lg:table-cell">Test</th>
            <th class="p-3 font-semibold  bg-gray-700 text-white border border-gray-300 hidden lg:table-cell">Result</th>
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
            <td class="w-full lg:w-auto p-3  text-white  border border-b text-center block lg:table-cell  lg:static">
                <span class="lg:hidden  top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold uppercase">Actions</span>
               
                <a href="#" id="delete" class="text-blue-400 hover:text-gray-200 underline">Open</a>
               <a> <button id="buttonmodal" class="text-blue-400 hover:text-gray-200 underline pl-6">Delete</button></a>
                
                
            </td>
        </tr>
        <div class="bg-black bg-opacity-50 absolute inset-0 hidden justify-center items-center" id="over">
        <div class="bg-gray-200 max-w-sm py-2 px-3 rounded shadow-xl text-gray-800">
            <div class="flex justify-between items-center">
                <h4 class="text-lg font-bold">Sorry,Something went wrong <i class="far fa-frown-open"></i></h4>
                
            </div>
            <div class="mt-2 text-sm">
                <p>Please try again.</p>
            </div>
            <div class="mt-3 flex justify-center space-x-3">
                <button id="close" class="px-3 py-1 text-blue-900  rounded hover:bg-red-300 hover:bg-opacity-50 hover:text-red-900">OK</button>
            </div>
        </div>
    </div>
        
        @endforeach
    </tbody>
</table>

<!-- modals for delete -->
<div id="modal"
    class="fixed top-0 left-0 w-screen h-screen flex items-center justify-center  bg-black bg-opacity-50 transform scale-0 transition-transform duration-300">
    <div class="bg-gray-200 max-w-sm py-2 px-3 rounded shadow-xl text-gray-800">
            <div class="flex justify-between items-center">
                <h4 class="text-lg font-bold">Warning!!!</h4>
                
            </div>
            <div class="mt-2 text-sm">
                <p>Are you sure to delete this table?</p>
            </div>
            <div class="mt-3 flex justify-end space-x-3">
                <button id="closebutton" class="px-3 py-1 rounded hover:bg-red-300 hover:bg-opacity-50 hover:text-red-900">Cancel</button>
                <a href="delete/{{$item->id}}" class="px-3 py-1 bg-red-800 text-gray-200 hover:bg-red-600 rounded">Delete</a>

                
            </div>
        </div>
</div>

<!-- end of delete modals -->


<div class="bg-gray-200 w-3/5  mt-10" style=" height: 1px; margin-left: 18%;"></div>
    

</div>

</div>

</div>

         
<script src="modals.js"></script>
<script src="sidebar.js"></script>
    
</body>
<footer class="bg-gray-800 text-gray-300 hover:text-white py-1 text-center">
    All rights reserved. Powered by: <a class="text-blue-500 hover:text-blue-300" href="https://www.facebook.com/espcdvo/" >ESPC</a>
</footer>
</html>  


