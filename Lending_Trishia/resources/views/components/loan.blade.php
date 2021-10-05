<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Proza+Libre:wght@500;600&family=Roboto&family=Roboto+Condensed:wght@400;700&family=Ropa+Sans&display=swap"
    rel="stylesheet">
    <link rel="stylesheet" href="./styles.css">
    <link rel="stylesheet" href="css/app.css">
    <title>Loan</title>
</head>

<body class="bg-gray-100">


    <div class="relative min-h-screen md:flex">


        <div class="bg-primarycolor text-white flex justify-between md:hidden">
            <a href="#" class="block p-4 text-white font-bold">DVOFINDS</a>
            <button class="mobile-menu p-4 focus:outline-none focus:bg-gray-700">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                  </svg>
            </button>
        </div>

        <div class="sidebar bg-primarycolor  text-white w-60 px-2 space-y-6 py-7 absolute inset-y-0 left-0 transform -translate-x-full md:relative md:translate-x-0 transition duration-200 ease-in-out">
            
            <a href="#" class="text-white flex items-center px-5 pt-6">
                <img src="images/icon2.png">
            <span class="text-lg font-primary font-semibold">DVOFINDS</span> </a>

            
              
            <nav class="pt-6">

                <a href="home" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-600 text-white font-third">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 inline-block justify-between mr-4 ml-6" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                      </svg>HOME</a>

                <a href="borrowers" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-600 text-white font-third">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 inline-block justify-between mr-4 ml-6 " viewBox="0 0 20 20" fill="currentColor">
                        <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z" />
                      </svg>BORROWERS</a>

                <a href="loan" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-600 text-white font-third">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 inline-block justify-between mr-4 ml-6 " viewBox="0 0 20 20" fill="currentColor"><path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                            <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
                        </svg>LOAN</a>

                <a href="loanreport" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-600 text-white font-third">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 inline-block justify-between mr-4 ml-6 " viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm2 10a1 1 0 10-2 0v3a1 1 0 102 0v-3zm2-3a1 1 0 011 1v5a1 1 0 11-2 0v-5a1 1 0 011-1zm4-1a1 1 0 10-2 0v7a1 1 0 102 0V8z" clip-rule="evenodd" />
                    </svg>LOAN REPORT</a>


                <a href="payments" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-600 text-white font-third">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 inline-block justify-between mr-4 ml-6" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                      </svg>PAYMENTS</a>

                <a href="user" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-600 text-white font-third">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 inline-block justify-between mr-4 ml-6" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                      </svg>USER</a>

                <a href="index" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-600 text-white font-third">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 inline-block justify-between mr-4 ml-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                      </svg>LOGOUT</a>
            </nav>
        </div>  
        
        <div class="flex-1  w-full items-center justify-center">
            <header class="bg-gray-300 p-4 font-bold text-right">LENDING SYSTEM</header>
            <div class="p-8 ">
                <h1 class="font-fourth font-bold text-3xl tracking-widest">LOAN</h1>
            </div>

            <div class="bg-white lg:w-3/4 mx-auto lg:px-16 xs:px-6 sm:px-6 md:px-10 shadow-xl">
                
               
                
                <div class="py-6">
                    <div class="mb-3">
                        <span class="font font-semibold">Loan Information</span>
                    </div>

                    <div class="flex">
                        <div class=" w-1/2 px-1 mt-0">
                            <label class="text-gray-600 font-light ">Loan Amount</label>
                            <input type="text" placeholder="" class="w-full mt-2 mb-2 px-4 lg:py-2 xs:py-1 sm:py-1 border rounded-md
                            text-gray-600 focus:outline-none focus:border-green-500"/>
                        </div>
                        


                        <div class=" w-1/2 px-1 mt-0">
                            <label class="text-gray-600 font-light ">Loan Amount</label>
                            <input type="text" placeholder="" class="w-full mt-2 mb-2 px-4 lg:py-2 xs:py-1 sm:py-1 border rounded-md
                            text-gray-600 focus:outline-none focus:border-green-500"/>
                        </div>
                    </div>
                    <div class="flex">
                        <div class=" w-1/2 px-1 mt-0">
                            <label class="text-gray-600 font-light ">Months</label>
                            <input type="text" placeholder=" " class="w-full mt-2 mb-2 px-4 lg:py-2 xs:py-1 sm:py-1 border rounded-md text-gray-600 focus:outline-none focus:border-green-500"/>
                        </div>
                        <div class=" w-1/2 px-1 mt-0">
                            <label class="text-gray-600 font-light ">Interest</label>
                            <input type="text" placeholder="" class="w-full mt-2 mb-2 px-4 lg:py-2 xs:py-1 sm:py-1 border rounded-md
                            text-gray-600 focus:outline-none focus:border-green-500"/>
                        </div>
                    </div>
                    <div class="flex justify-between">
                        <div class=" w-1/2 px-1 mt-0">
                            <label class="text-gray-600 font-light ">Purpose</label>
                            <input type="text" placeholder=" " class="w-full mt-2 mb-2 px-4 lg:py-2 xs:py-1 sm:py-1 border rounded-md text-gray-600 focus:outline-none focus:border-green-500"/>
                        </div>
                        <div class=" lg:w-1/4 xs:w-1/4 sm:w-1/4 md:W-1/4 px-2 mt-0">
                            <button class="w-full  mt-8 mb-2 px-4 lg:py-2 xs:py-1 sm:py-1 border rounded-md bg-blue-800 text-white font-bold focus:outline-none focus:border-green-500">COMPUTE</button>
                        </div>
                    </div>

                </div>
                <hr class="-mx-18 mt-2">
                <div class="py-6">
                    <div class="flex text-center mt-2">
                        <div class=" w-1/2 px-1 mt-0">
                            <h1 class="font-bold">Total Payable Amount</h1>
                            <h1 class="m-6 font-bold text-lg">0</h1>
                        </div>
                        <div class=" w-1/2 px-1 mt-0 ">
                            <h1 class="font-bold ">Monthly Payable Amount</h1>
                            <h1 class="m-6 font-bold text-lg">0</h1>
                        </div>
                    </div>
                    <hr class="-mx-18 mt-2">
                </div> 
            </div>
            <div class="w-3/4 mx-auto py-6 flex justify-end">
                <a href="#" class="py-1 px-14 bg-blue-800 rounded-md text-center mr-4 text-white font-bold uppercase text-lg">SAVE</a>
                <a href="#" class="py-1 px-12 bg-gray-800  rounded-md text-center  text-white font-bold uppercase text-lg">CANCEL</a>
            </div>
            </div></div>
    </div>
    </div>

    

<script src="js/sidebar.js"></script>

</body>
</html>