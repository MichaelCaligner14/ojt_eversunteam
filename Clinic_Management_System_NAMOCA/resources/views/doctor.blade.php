
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/app.css">
   
    <script src="https://kit.fontawesome.com/c26cd2166c.js"></script>
    <title> Doctor Schedule </title>
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

    <a href="http://localhost/cms/public/index"><img src="img/logo.png" class="w-24 ml-14 mt-3"></a>
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
            <button  class="bg-gray-400 px-20 ml-24 text-black font-semibold mt-7 py-2 rounded-full hover:bg-gray-500" >View Schedules</button>
            </div>
            <i class="text-white text-3xl mt-2 ml-52 hover:text-black fas fa-chevron-down"></i>
            
            
        </div>
        

        


        <div class="bg-gray-800 ml-4 rounded-lg hover:bg-gray-900"style="width:50%; height:98%; border:1px solid; border-color:gray;">

            <img src="img/doc2.jpg" class="h-36 w-36 rounded-full mt-5 "style="margin-left: 36%;"  >
            <h1 class="text-white font-semibold ml-14 mt-6 text-3xl">Dr. Michael Jhon Caligner</h1>
            <p class="mt-2 text-gray-400 ml-40 ">Ecoland Davao City</p>
            <p class="mt-1 text-gray-400 ml-28 ">michaeljhoncaligner@gmail.com</p>
            <p class="mt-1 text-gray-400 ml-44 ">09235645657</p>

            <div>
            <button class="bg-gray-400 px-20 ml-24 text-black font-semibold mt-7 py-2 rounded-full hover:bg-gray-500" >View Schedules</button>
            </div>
            <i class="text-white text-3xl mt-2 ml-52 hover:text-black fas fa-chevron-down"></i>
        </div>

    </div>

    
   

</div>
    

    




</div>

<script src="modals.js"></script>
<script src="sidebar.js"></script>
           
    
    
</body>
</html>  

