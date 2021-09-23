
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/app.css">
   
    <script src="https://kit.fontawesome.com/c26cd2166c.js"></script>
    <title> Payment Page </title>
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


   
    <div class=" bg-gray-800 mt-3 mb-5 mr-5 ml-2 w-full rounded-3xl  border-solid" style="border:1px solid; border-color:pink;">

        <h1 class="flex items-center justify-center text-white font-semibold text-4xl mt-10 "> PAYMENT HERE!</h1>
        <div class="bg-gray-200 w-4/5 ml-24 mt-10" style=" height: 1px;"></div>

        <div class=" w-4/5 mt-10 ml-24" style=" height:74%; ">

            <div class="text-white mt-10 ">
              
                <label class="text-2xl">Patients ID:  </label>
                <input type="text" class="rounded-full bg-gray-600 ml-4 ">


            
            <div class="text-white mt-3"></div>
                <label class="text-2xl">Fullname: </label>
                <input type="text" class="rounded-full bg-gray-600 ml-8 "> 
                
            
                
            </div>
            <div class="-mt-28  bg-gray-800" style="margin-left:50%; width: 40%;">
                <table class="border-collapse w-full mt-10 rounded" style="margin-right: 10%;">
                    <thead>
                        <tr>
                            <th class="p-3 font-semisemibold  bg-gray-700 text-white border border-gray-300 hidden lg:table-cell">ID</th>
                            <th class="p-3 font-semibold  bg-gray-700 text-white border border-gray-300 hidden lg:table-cell">Fullname</th>
                            <th class="p-3 font-semibold  bg-gray-700 text-white border border-gray-300 hidden lg:table-cell">Amount</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-gray-800 lg:hover:bg-gray-700 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 -ml-48 mt-28 lg:mb-0">
                            <td class="w-full lg:w-auto p-3 text-white text-center border border-b block lg:table-cell relative lg:static">
                                <span class="lg:hidden absolute top-0 left-0  px-2 py-1 text-xs font-bold">ID</span>
                                12
                            </td>
                            <td class="w-full lg:w-auto p-3 text-white text-center border border-b text-center block lg:table-cell relative lg:static">
                                <span class="lg:hidden absolute top-0 left-0  px-2 py-1 text-xs font-bold uppercase">Fullname</span>
                                Jonna Marcedes
                            </td>
                              <td class="w-full lg:w-auto p-3  text-white text-center border border-b text-center block lg:table-cell relative lg:static">
                                <span class="lg:hidden absolute top-0 left-0  px-2 py-1 text-xs font-bold uppercase">Amount</span>
                                ₱ 8,350
                              </td>
                              
                        </tr>

                        <tr class="bg-gray-800 lg:hover:bg-gray-700 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 -ml-48 lg:mb-0">
                            <td class="w-full lg:w-auto p-3 text-white text-center border border-b block lg:table-cell relative lg:static">
                                <span class="lg:hidden absolute top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold">ID</span>
                                13
                            </td>
                            <td class="w-full lg:w-auto p-3 text-white text-center border border-b text-center block lg:table-cell relative lg:static">
                                <span class="lg:hidden absolute top-0 left-0 px-2 py-1 text-xs font-bold uppercase">Fullname</span>
                                Luther Galang
                            </td>
                              <td class="w-full lg:w-auto p-3  text-white text-center border border-b text-center block lg:table-cell relative lg:static">
                                <span class="lg:hidden absolute top-0 left-0  px-2 py-1 text-xs font-bold uppercase">Amount</span>
                                ₱ 8,350
                              </td>
                              
                        </tr>

                        
                        
                        
        
                       
                
                      
                        
                
                    </tbody>
                    
                </table>
            
        </div>  
        <div class="bg-gray-200 w-3/5 ml-44 mt-20" style=" height: 1px;"></div>
        <div class="bg-gray-200 w-4/5 ml-20 mt-5" style=" height: 1px;"></div>

        <table class="border-collapse w-full mt-10 rounded" style="margin-right: 10%;">
            <thead>
                <tr>
                    <th class="p-3 font-semisemibold  bg-gray-700 text-white border border-gray-300 hidden lg:table-cell">ID</th>
                    <th class="p-3 font-semibold  bg-gray-700 text-white border border-gray-300 hidden lg:table-cell">Fullname</th>
                    <th class="p-3 font-semibold  bg-gray-700 text-white border border-gray-300 hidden lg:table-cell">Date</th>
                    <th class="p-3 font-semibold  bg-gray-700 text-white border border-gray-300 hidden lg:table-cell">Address</th>
                    <th class="p-3 font-semibold  bg-gray-700 text-white border border-gray-300 hidden lg:table-cell">Test</th>
                    <th class="p-3 font-semibold  bg-gray-700 text-white border border-gray-300 hidden lg:table-cell">Total Amount</th>
                    <th class="p-3 font-semibold  bg-gray-700 text-white border border-gray-300 hidden lg:table-cell">Payment</th>
                    <th class="p-3 font-semibold  bg-gray-700 text-white border border-gray-300 hidden lg:table-cell">Change</th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-gray-800 lg:hover:bg-gray-700 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
                    <td class="w-full lg:w-auto p-3 text-white text-center border border-b block lg:table-cell relative lg:static">
                        <span class="lg:hidden absolute top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold">ID</span>
                        21
                    </td>
                    <td class="w-full lg:w-auto p-3 text-white text-center border border-b text-center block lg:table-cell relative lg:static">
                        <span class="lg:hidden absolute top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold uppercase">Fullname</span>
                        Ericka Jane
                    </td>
                      <td class="w-full lg:w-auto p-3  text-white text-center border border-b text-center block lg:table-cell relative lg:static">
                        <span class="lg:hidden absolute top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold uppercase">Date</span>
                        08/23/2021
                      </td>
                    <td class="w-full lg:w-auto p-3  text-white text-center border border-b text-center block lg:table-cell relative lg:static">
                        <span class="lg:hidden absolute top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold uppercase">Address</span>
                        Spring Valley Davao City
                    </td>
                    <td class="w-full lg:w-auto p-3  text-white text-center border border-b text-center block lg:table-cell relative lg:static">
                        <span class="lg:hidden absolute top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold uppercase">Test</span>
                        Lab Test
                    </td>
                    <td class="w-full lg:w-auto p-3  text-white text-center border border-b text-center block lg:table-cell relative lg:static">
                        <span class="lg:hidden absolute top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold uppercase">Total Amount</span>
                        ₱ 8,350
                    </td>
                    <td class="w-full lg:w-auto p-3  text-white text-center border border-b text-center block lg:table-cell relative lg:static">
                        <span class="lg:hidden absolute top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold uppercase">Payment</span>
                        ₱ 9,000
                    </td>
                    <td class="w-full lg:w-auto p-3  text-white text-center border border-b text-center block lg:table-cell relative lg:static">
                        <span class="lg:hidden absolute top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold uppercase">Change</span>
                        ₱ 650.00
                    </td>
                </tr>

                <tr class="bg-gray-800 lg:hover:bg-gray-700 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
                    <td class="w-full lg:w-auto p-3 text-white text-center border border-b block lg:table-cell relative lg:static">
                        <span class="lg:hidden absolute top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold">ID</span>
                        22
                    </td>
                    <td class="w-full lg:w-auto p-3 text-white text-center border border-b text-center block lg:table-cell relative lg:static">
                        <span class="lg:hidden absolute top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold uppercase">Fullname</span>
                        Zyla Pipeto
                    </td>
                      <td class="w-full lg:w-auto p-3  text-white text-center border border-b text-center block lg:table-cell relative lg:static">
                        <span class="lg:hidden absolute top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold uppercase">Date</span>
                        08/23/2021
                      </td>
                    <td class="w-full lg:w-auto p-3  text-white text-center border border-b text-center block lg:table-cell relative lg:static">
                        <span class="lg:hidden absolute top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold uppercase">Address</span>
                        Tigatto Davao City
                    </td>
                    <td class="w-full lg:w-auto p-3  text-white text-center border border-b text-center block lg:table-cell relative lg:static">
                        <span class="lg:hidden absolute top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold uppercase">Test</span>
                        Skin Test
                    </td>
                    <td class="w-full lg:w-auto p-3  text-white text-center border border-b text-center block lg:table-cell relative lg:static">
                        <span class="lg:hidden absolute top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold uppercase">Total Amount</span>
                        ₱ 1,800
                    </td>
                    <td class="w-full lg:w-auto p-3  text-white text-center border border-b text-center block lg:table-cell relative lg:static">
                        <span class="lg:hidden absolute top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold uppercase">Payment</span>
                        ₱ 2,000
                    </td>
                    <td class="w-full lg:w-auto p-3  text-white text-center border border-b text-center block lg:table-cell relative lg:static">
                        <span class="lg:hidden absolute top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold uppercase">Change</span>
                        ₱ 200.00
                    </td>
                </tr>

                <tr class="bg-gray-800 lg:hover:bg-gray-700 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
                    <td class="w-full lg:w-auto p-3 text-white text-center border border-b block lg:table-cell relative lg:static">
                        <span class="lg:hidden absolute top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold">ID</span>
                        23
                    </td>
                    <td class="w-full lg:w-auto p-3 text-white text-center border border-b text-center block lg:table-cell relative lg:static">
                        <span class="lg:hidden absolute top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold uppercase">Fullname</span>
                        Charlyn Landao
                    </td>
                      <td class="w-full lg:w-auto p-3  text-white text-center border border-b text-center block lg:table-cell relative lg:static">
                        <span class="lg:hidden absolute top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold uppercase">Date</span>
                        08/024/2021
                      </td>
                    <td class="w-full lg:w-auto p-3  text-white text-center border border-b text-center block lg:table-cell relative lg:static">
                        <span class="lg:hidden absolute top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold uppercase">Address</span>
                        Buhangin Davao City
                    </td>
                    <td class="w-full lg:w-auto p-3  text-white text-center border border-b text-center block lg:table-cell relative lg:static">
                        <span class="lg:hidden absolute top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold uppercase">Test</span>
                        Swab Test
                    </td>
                    <td class="w-full lg:w-auto p-3  text-white text-center border border-b text-center block lg:table-cell relative lg:static">
                        <span class="lg:hidden absolute top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold uppercase">Total Amount</span>
                        ₱ 8,350
                    </td>
                    <td class="w-full lg:w-auto p-3  text-white text-center border border-b text-center block lg:table-cell relative lg:static">
                        <span class="lg:hidden absolute top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold uppercase">Payment</span>
                        ₱ 8,400
                    </td>
                    <td class="w-full lg:w-auto p-3  text-white text-center border border-b text-center block lg:table-cell relative lg:static">
                        <span class="lg:hidden absolute top-0 left-0 bg-gray-800 px-2 py-1 text-xs font-bold uppercase">Change</span>
                        ₱ 50.00
                    </td>
                </tr>

               
        
              
                
        
            </tbody>
            
        </table>
        <div class="mt-5 text-white">
            <button class="bg-gray-500 hover:bg-gray-600 h-10 w-24 rounded " style="margin-left: 72%;" >Submit</button>
            <button class="bg-gray-500 hover:bg-gray-600 h-10 w-16 rounded"  >Edit</button>
            <button class="bg-gray-500 hover:bg-gray-600 h-10 w-24 rounded " >Delete</button>
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