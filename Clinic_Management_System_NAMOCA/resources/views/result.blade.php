
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


   
    <div class=" bg-gray-800 mt-3 mb-5 mr-5 ml-2 w-full rounded-3xl border-white border-solid" style="border:1px solid; border-color:pink;">


        <div>
        <h1 class="flex items-center justify-center text-white font-semibold text-4xl mt-10 "> RESULT PAGE</h1>
        <div class="bg-gray-200 ml-24 mt-10" style="width:80%; height: 1px;"></div>

        <div class="flex mt-10 ml-24" style="width:80%; height:74%; ">

       <div>
        <input type="text" placeholder="  Search ... " class="rounded-full bg-gray-800 h-8" style="width: 250%; border:1px solid; border-color:pink;"> 
       </div>
       <i class="text-white hover:text-gray-200 text-4xl fas fa-bell" style="margin-left: 60%;"></i>
       <button class="bg-gray-800 hover:bg-gray-700 text-white h-8 w-24 ml-5 "style="border:1px solid; border-color:pink;" > <i class="fas mr-4 fa-chevron-down"></i>Date</button>
        

        

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
        <tr class="bg-gray-800 lg:hover:bg-gray-700 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
            <td class="w-full lg:w-auto p-3 text-white text-center border border-b block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold">ID</span>
                33
            </td>
            <td class="w-full lg:w-auto p-3 text-white text-center border border-b text-center block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold uppercase">Fullname</span>
                Trisha Faustino
            </td>
          	<td class="w-full lg:w-auto p-3  text-white text-center border border-b text-center block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold uppercase">Date</span>
                09/02/2021
          	</td>
            <td class="w-full lg:w-auto p-3  text-white text-center border border-b text-center block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold uppercase">Time</span>
                10:00 AM
            </td>
            <td class="w-full lg:w-auto p-3  text-white text-center border border-b text-center block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold uppercase">Test</span>
                Swab Test
            </td>
            <td class="w-full lg:w-auto p-3  text-white text-center border border-b text-center block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold uppercase">Actions</span>
               
                <a href="#" class="text-blue-400 hover:text-gray-200 underline">Open</a>
                <a href="#" class="text-blue-400 hover:text-gray-200 underline pl-6">Delete</a>
                
                
            </td>
        </tr>

        <tr class="bg-gray-800 lg:hover:bg-gray-700 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
            <td class="w-full lg:w-auto p-3 text-white text-center border border-b block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold">ID</span>
                34
            </td>
            <td class="w-full lg:w-auto p-3 text-white text-center border border-b text-center block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold uppercase">Fullname</span>
                Marc Beriones
            </td>
          	<td class="w-full lg:w-auto p-3  text-white text-center border border-b text-center block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold uppercase">Date</span>
                09/02/2021
          	</td>
            <td class="w-full lg:w-auto p-3  text-white text-center border border-b text-center block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold uppercase">Time</span>
                11:00 AM
            </td>
            <td class="w-full lg:w-auto p-3  text-white text-center border border-b text-center block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold uppercase">Test</span>
                Skin Test
            </td>
            <td class="w-full lg:w-auto p-3  text-white text-center border border-b text-center block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold uppercase">Actions</span>
                <a href="#" class="text-blue-400 hover:text-gray-200 underline">Open</a>
                <a href="#" class="text-blue-400 hover:text-gray-200 underline pl-6">Delete</a>
            </td>
        </tr>
        

        <tr class="bg-gray-800 lg:hover:bg-gray-700 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
            <td class="w-full lg:w-auto p-3 text-white text-center border border-b block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold">ID</span>
                35
            </td>
            <td class="w-full lg:w-auto p-3 text-white text-center border border-b text-center block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold uppercase">Fullname</span>
                Jeffy Amables
            </td>
          	<td class="w-full lg:w-auto p-3  text-white text-center border border-b text-center block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold uppercase">Date</span>
                09/02/2021
          	</td>
            <td class="w-full lg:w-auto p-3  text-white text-center border border-b text-center block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold uppercase">Time</span>
                12:00 AM
            </td>
            <td class="w-full lg:w-auto p-3  text-white text-center border border-b text-center block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold uppercase">Test</span>
                Lab Test
            </td>
            <td class="w-full lg:w-auto p-3  text-white text-center border border-b text-center block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold uppercase">Actions</span>
                <a href="#" class="text-blue-400 hover:text-gray-200 underline">Open</a>
                <a href="#" class="text-blue-400 hover:text-gray-200 underline pl-6">Delete</a>
            </td>
        </tr>
        

        <tr class="bg-gray-800 lg:hover:bg-gray-700 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
            <td class="w-full lg:w-auto p-3 text-white text-center border border-b block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold">ID</span>
                36
            </td>
            <td class="w-full lg:w-auto p-3 text-white text-center border border-b text-center block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold uppercase">Fullname</span>
                Anna Namoca
            </td>
          	<td class="w-full lg:w-auto p-3  text-white text-center border border-b text-center block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold uppercase">Date</span>
                09/03/2021
          	</td>
            <td class="w-full lg:w-auto p-3  text-white text-center border border-b text-center block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold uppercase">Time</span>
                01:00 PM
            </td>
            <td class="w-full lg:w-auto p-3  text-white text-center border border-b text-center block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold uppercase">Test</span>
                Lab Test
            </td>
            <td class="w-full lg:w-auto p-3  text-white text-center border border-b text-center block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold uppercase">Actions</span>
                <a href="#" class="text-blue-400 hover:text-gray-200 underline">Open</a>
                <a href="#" class="text-blue-400 hover:text-gray-200 underline pl-6">Delete</a>
            </td>
        </tr>
        

        <tr class="bg-gray-800 lg:hover:bg-gray-700 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
            <td class="w-full lg:w-auto p-3 text-white text-center border border-b block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold">ID</span>
                37
            </td>
            <td class="w-full lg:w-auto p-3 text-white text-center border border-b text-center block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold uppercase">Fullname</span>
                Julone Navales
            </td>
          	<td class="w-full lg:w-auto p-3  text-white text-center border border-b text-center block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold uppercase">Date</span>
                09/03/2021
          	</td>
            <td class="w-full lg:w-auto p-3  text-white text-center border border-b text-center block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold uppercase">Time</span>
                02:00 PM
            </td>
            <td class="w-full lg:w-auto p-3  text-white text-center border border-b text-center block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold uppercase">Test</span>
                2D Echo
            </td>
            <td class="w-full lg:w-auto p-3  text-white text-center border border-b text-center block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold uppercase">Actions</span>
                <a href="#" class="text-blue-400 hover:text-gray-200 underline">Open</a>
                <a href="#" class="text-blue-400 hover:text-gray-200 underline pl-6">Delete</a>
            </td>
        </tr>
        

        <tr class="bg-gray-800 lg:hover:bg-gray-700 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
            <td class="w-full lg:w-auto p-3 text-white text-center border border-b block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold">ID</span>
                38
            </td>
            <td class="w-full lg:w-auto p-3 text-white text-center border border-b text-center block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold uppercase">Fullname</span>
                Angelo Sumbaq
            </td>
          	<td class="w-full lg:w-auto p-3  text-white text-center border border-b text-center block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold uppercase">Date</span>
                09/04/2021
          	</td>
            <td class="w-full lg:w-auto p-3  text-white text-center border border-b text-center block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold uppercase">Time</span>
                03:00 PM
            </td>
            <td class="w-full lg:w-auto p-3  text-white text-center border border-b text-center block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold uppercase">Test</span>
                2D Echo
            </td>
            <td class="w-full lg:w-auto p-3  text-white text-center border border-b text-center block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold uppercase">Actions</span>
                <a href="#" class="text-blue-400 hover:text-gray-200 underline">Open</a>
                <a href="#" class="text-blue-400 hover:text-gray-200 underline pl-6">Delete</a>
            </td>
        </tr>
        <tr class="bg-gray-800 lg:hover:bg-gray-700 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
            <td class="w-full lg:w-auto p-3 text-white text-center border border-b block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold">ID</span>
                39
            </td>
            <td class="w-full lg:w-auto p-3 text-white text-center border border-b text-center block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold uppercase">Fullname</span>
                Jasmi Namoca
            </td>
          	<td class="w-full lg:w-auto p-3  text-white text-center border border-b text-center block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold uppercase">Date</span>
                09/04/2021
          	</td>
            <td class="w-full lg:w-auto p-3  text-white text-center border border-b text-center block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold uppercase">Time</span>
                04:00 PM
            </td>
            <td class="w-full lg:w-auto p-3  text-white text-center border border-b text-center block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold uppercase">Test</span>
                Skin Test
            </td>
            <td class="w-full lg:w-auto p-3  text-white text-center border border-b text-center block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold uppercase">Actions</span>
                <a href="#" class="text-blue-400 hover:text-gray-200 underline">Open</a>
                <a href="#" class="text-blue-400 hover:text-gray-200 underline pl-6">Delete</a>
            </td>
        </tr>
        <tr class="bg-gray-800 lg:hover:bg-gray-700 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
            <td class="w-full lg:w-auto p-3 text-white text-center border border-b block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold">ID</span>
                40
            </td>
            <td class="w-full lg:w-auto p-3 text-white text-center border border-b text-center block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold uppercase">Fullname</span>
                Paul Ronquillo
            </td>
          	<td class="w-full lg:w-auto p-3  text-white text-center border border-b text-center block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold uppercase">Date</span>
                09/04/2021
          	</td>
            <td class="w-full lg:w-auto p-3  text-white text-center border border-b text-center block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold uppercase">Time</span>
                05:00 PM
            </td>
            <td class="w-full lg:w-auto p-3  text-white text-center border border-b text-center block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold uppercase">Test</span>
                Lab Test
            </td>
            <td class="w-full lg:w-auto p-3  text-white text-center border border-b text-center block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold uppercase">Actions</span>
                <a href="#" class="text-blue-400 hover:text-gray-200 underline">Open</a>
                <a href="#" class="text-blue-400 hover:text-gray-200 underline pl-6">Delete</a>
            </td>
        </tr>
    </tbody>
</table>
<div class="bg-gray-200 w-3/5  mt-10" style=" height: 1px; margin-left: 18%;"></div>
    

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