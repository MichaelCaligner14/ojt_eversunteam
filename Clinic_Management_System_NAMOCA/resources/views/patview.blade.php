
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/app.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
   
    <script src="https://kit.fontawesome.com/c26cd2166c.js"></script>
    <title> Patient|List </title>
</head>

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

    <a href="{{ url('index') }}"> <img src="img/logo.png" class="w-24 ml-14 mt-3"></a>
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
        <div class="text-white mt-80 ">
            <i class="ml-4 hover:text-black fas fa-battery-half"></i>
            <i class="ml-4 hover:text-black fas fa-wifi"></i>
            <i class="ml-4 hover:text-black fab fa-bluetooth-b"></i>
            <i class="ml-4 hover:text-black fas fa-volume-up"></i>
            <a href="{{ url('login') }}"><i class="ml-4 hover:text-black fas fa-power-off"></i></a>

        </div> 
    </div>


   
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
            <td class="w-full lg:w-auto p-3 text-white text-center border border-b text-center block lg:table-cell  lg:static">
                <span class="lg:hidden  top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold uppercase">Fullname</span>
                {{$item ->fullname}}
            </td>
          	<td class="w-full lg:w-auto p-3  text-white text-center border border-b text-center block lg:table-cell  lg:static">
                <span class="lg:hidden  top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold uppercase">Address</span>
                {{$item ->address}}
          	</td>
            <td class="w-full lg:w-auto p-3  text-white text-center border border-b text-center block lg:table-cell  lg:static">
                <span class="lg:hidden  top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold uppercase">Email Address</span>
                {{$item ->email}}
            </td>
            <td class="w-full lg:w-auto p-3  text-white text-center border border-b text-center block lg:table-cell  lg:static">
                <span class="lg:hidden  top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold uppercase">Contact</span>
                {{$item ->contact}}
            </td>
            <td class="w-full lg:w-auto p-3  text-white text-center border border-b text-center block lg:table-cell  lg:static">
                <span class="lg:hidden  top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold uppercase">Age</span>
                {{$item ->age}}
            </td>

            <td class="w-full lg:w-auto p-3 text-white text-center border border-b text-center block lg:table-cell  lg:static">
                <span class="lg:hidden  top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold uppercase">Date</span>
                {{$item ->birth}}
                
            </td>

            <td class="w-full lg:w-auto p-3  text-white text-center border border-b text-center block lg:table-cell  lg:static">
                <span class="lg:hidden  top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold uppercase">Temperature</span>
                {{$item ->temp}}
                
            </td>

            <td class="w-full lg:w-auto p-3  text-white text-center border border-b text-center block lg:table-cell  lg:static">
                <span class="lg:hidden  top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold uppercase">Weight</span>
                {{$item ->weight}}
                
            </td>

            <td class="w-full lg:w-auto p-3  text-white text-center border border-b text-center block lg:table-cell  lg:static">
                <span class="lg:hidden  top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold uppercase">Height</span>
                {{$item ->height}}
                
            </td>

            <td class="w-full lg:w-auto p-3  text-white text-center border border-b text-center block lg:table-cell  lg:static">
                <span class="lg:hidden  top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold uppercase">Delete</span>
                
               <a href="edit/{{$item->id}}" class="text-gray-200 mr-3 hover:text-white " ><i class="fas fa-edit"></i></a>
                <a id="buttonmodal" class=" text-red-500 hover:text-red-400 "><i class="fas fa-trash"></i></a>
         
            </td> 

        </tr>
       
        @endforeach
        </tbody>
</table>


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
                <a href="deletes/{{$item->id}}" class="px-3 py-1 bg-red-800 text-gray-200 hover:bg-red-600 rounded">Delete</a>
            </div>
        </div>
</div>
    

        </div>
       


        
    
  





</div>


<script src="modals.js"></script>
<script src="sidebar.js"></script>
    
</body>
</html>  










