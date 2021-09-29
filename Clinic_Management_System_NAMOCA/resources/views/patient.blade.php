
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/app.css">
   
    <script src="https://kit.fontawesome.com/c26cd2166c.js"></script>
    <title> Patient </title>
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

        <h1 class="flex items-center justify-center text-white font-semibold text-4xl mt-10 "> PATIENT FORM</h1>
        <div class="bg-gray-200 ml-24 mt-10" style="width:80%; height: 1px;"></div>
        <div class="mt-5">
            <ul>
        <label class="text-white ml-40">Fullname </label>
        </ul>
        <input type="text" class="rounded-lg  ml-40 mt-3 bg-gray-800 border-2  border-gray-500  "style="width: 68%;">

        <ul class="mt-3">
            <label class="text-white ml-40">Address </label>
            </ul>
            <input type="text" class="rounded-lg  ml-40 mt-3 bg-gray-800 border-2  border-gray-500  " style="width: 68%;">

        

        <ul class="mt-3">
            <label class="text-white ml-40">Email </label>
            <label class="text-white" style="margin-left:34%">Contact </label>
            </ul>
            <input type="text" placeholder="  @" class="rounded-lg  ml-40 mt-3 bg-gray-800 border-2  border-gray-500  " style="width: 36%;">
            <input type="text" class="rounded-lg mt-3 bg-gray-800 border-2 ml-1  border-gray-500" style="width:31%;">
          
            <ul class="mt-3">
                <label class="text-white ml-40">Age </label>
                <label class="text-white ml-40">Birthday date</label>
                <label class="text-white ml-40">Sex</label>
                <label class="text-white ml-40">Status</label>
                </ul>
                <input type="text" class="rounded-lg ml-40 mt-3 bg-gray-800 border-2  border-gray-500  ">
                <input type="text" class="rounded-lg mt-3 bg-gray-800 border-2  border-gray-500  "style="width: 21%;">
                <input type="text" class="rounded-lg mt-3 bg-gray-800 border-2  border-gray-500  ">
                <input type="text" class="rounded-lg mt-3 bg-gray-800 border-2  border-gray-500  ">


                <div class="bg-gray-200 ml-48 mt-6" style="width:63%; height: 1px;"></div>
                <div class="bg-gray-200 ml-24 mt-5" style="width:80%; height: 1px;"></div>

                <h1 class="flex mt-3 items-center justify-center text-white text-2xl">Body Mask Index</h1>

                <ul class="mt-5">
                    <label class="text-white ml-80">Temperature </label>
                    <label class="text-white ml-24">Weight</label>
                    <label class="text-white ml-32">Height</label>               
                    </ul>
                    <input type="text" placeholder="                                  ℃" class="rounded-lg ml-80 mt-3 bg-gray-800 border-2  border-gray-500  ">
                    <input type="text" placeholder="                                 Kg" class="rounded-lg mt-3 bg-gray-800 border-2  border-gray-500  ">
                    <input type="text" placeholder="                                 Cm" class="rounded-lg mt-3 bg-gray-800 border-2  border-gray-500  ">

                    <div class="bg-gray-200 ml-24 mt-10" style="width:80%; height: 1px;"></div>

                    <div>
                        <button class="bg-gray-600 px-28  text-white mt-7 py-3 rounded-xl hover:bg-gray-700" style="margin-left:38%">SUBMIT</button>
                    </div>
                


        </div>
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


