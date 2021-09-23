
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/app.css">
   
    <script src="https://kit.fontawesome.com/c26cd2166c.js"></script>
    <title> Appointment </title>
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
            <a href="{{ url('welcome') }}"><i class="ml-4 hover:text-black fas fa-power-off"></i></a>

        </div> 
    </div>


   
    <div class="bg-gray-800 mt-3 mb-5 mr-5 ml-2 w-full rounded-3xl border-white border-solid" style="border:1px solid; border-color:pink;">

        <h1 class="flex items-center justify-center text-white font-semibold text-4xl mt-10 "> APPOINTMENTS</h1>
        <div class="bg-gray-200 ml-24 mt-10" style="width:80%; height: 1px;"></div>

        <div class="ml-28 mt-5 ">
            <h1 class="text-white font-bold">5th Tuesday, Sep</h1>
            <div class="flex mt-3">
            <img src="img/first.png" class="w-10 h-10 rounded-full"> 
            <img src="img/second.png" class="ml-1 w-10 h-10 rounded-full">
            <img src="img/third.png" class="ml-1 w-10 h-10 rounded-full">
            <img src="img/four.png" class="ml-1 w-10 h-10 rounded-full">
            <i class="mt-2 ml-3 text-gray-600 text-2xl hover:text-white fas fa-calendar-check"></i>
            <p class="text-gray-600 hover:text-white font-semibold mt-2 ml-3 "> Appointments today</p>
            <i class="text-gray-600 text-2xl ml-80 mt-2 hover:text-white fas fa-calendar-week"></i>
            <i class="text-gray-600 text-2xl ml-16 mt-2 hover:text-white far fa-calendar-alt"></i>
            <i class="text-gray-600 text-2xl ml-16 mt-2 hover:text-white fas fa-calendar-plus"></i>
            
           </div>
           

        </div>
        <div class="bg-gray-200 ml-24 mt-10" style="width:80%; height: 1px;"></div>

        <div class="flex ml-28">
            <p class="text-white mt-12">11:00 AM </p>  <div class="flex bg-gray-500 h-10 mt-10 ml-10 hover:bg-gray-600  rounded-full" style="width:72%;">
            
                <img src="img/first.png" class="ml-4 w-8 mt-1 h-8 rounded-full"> <p class="text-white mt-2 ml-5 "> Jessa Mae Donor - Check-Up</p> <p class="text-white mt-2" style="margin-left: 60%;"> ••••</p>

            </div>

        </div>

        <div class="flex ml-28">
            <p class="text-white mt-10">12:00 AM </p>  <div class="flex bg-gray-500 h-10 mt-8 ml-10 hover:bg-gray-600  rounded-full" style="width:72%;">
            
                <img src="img/second.png" class="ml-4 w-8 mt-1 h-8 rounded-full"> <p class="text-white mt-2 ml-5"> Trishia Mae Hamo-Ay - Cosmotology</p> <p class="text-white mt-2" style="margin-left: 53%;"> ••••</p>

            </div>

        </div>


        <div class="flex ml-28">
            <p class="text-white mt-10">01:00 PM </p>  <div class="flex bg-gray-500 h-10 mt-8 ml-10 hover:bg-gray-600  rounded-full" style="width:72%;">
            
                <img src="img/third.png" class="ml-4 w-8 mt-1 h-8 rounded-full"> <p class="text-white mt-2 ml-5"> Joana Mae Mantilla - Visit Clinic for monthly check up</p> <p class="text-white mt-2" style="margin-left: 38%;"> ••••</p>

            </div>

        </div>

        <div class="flex ml-28">
            <p class="text-white mt-10">02:00 PM </p>  <div class="flex bg-gray-500 h-10 mt-8 ml-10 hover:bg-gray-600  rounded-full" style="width:72%;">
            
                <img src="img/four.png" class="ml-4 w-8 mt-1 h-8 rounded-full"> <p class="text-white mt-2 ml-5"> Michael John Caligner - Osteopathy</p> <p class="text-white mt-2" style="margin-left: 54%;"> ••••</p>

            </div>

        </div>


        <div class="flex ml-28">
            <p class="text-white mt-9">03:00 PM </p> <div class="bg-gray-400 ml-10 mt-12" style="width:72%; height: 1px;"></div>

        </div>

        <div class="flex ml-28">
            <p class="text-white mt-9">04:00 PM </p> <div class="bg-gray-400 ml-10 mt-12" style="width:72%; height: 1px;"></div>

        </div>



        
        </div>

    







</div>


           
    
    
</body>
</html>  


<script>
    const btn = document.querySelector('.mobile-menu-button');
const sidebar = document.querySelector('.sidebar')


btn.addEventListener('click', () => {
    sidebar.classList.toggle("-translate-x-full");
});
</script>