<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Proza+Libre:wght@500;600&family=Roboto&family=Roboto+Condensed:wght@400;700&family=Ropa+Sans&display=swap"
    rel="stylesheet">

    <link rel="stylesheet" href="css/app.css">
    <title>Home</title>
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

        <div class="sidebar bg-primarycolor text-white w-60 px-2 space-y-6 py-7 absolute inset-y-0 left-0 transform -translate-x-full md:relative md:translate-x-0 transition duration-200 ease-in-out">
            
            <a href="#" class="text-white flex items-center px-5 pt-6">
                <img src="images/icon2.png">
            <span class="text-lg font-primary font-semibold">DVOFINDS</span> </a>
            
            
            <nav class="pt-6">    
                <a href="" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-600 text-white font-third">

                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 inline-block justify-between mr-4 ml-6" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                      </svg>HOME</a>

                      <a href="borrowers" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-600 text-white font-third">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 inline-block justify-between mr-4 ml-6 " viewBox="0 0 20 20" fill="currentColor">
                        <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z" />
                      </svg>BORROWERS</a>

                <a href="loans" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-600 text-white font-third">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 inline-block justify-between mr-4 ml-6 " viewBox="0 0 20 20" fill="currentColor"><path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                            <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
                        </svg>LOAN</a>

                <a href="loanreport" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-600 text-white font-third">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 inline-block justify-between mr-4 ml-6 " viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm2 10a1 1 0 10-2 0v3a1 1 0 102 0v-3zm2-3a1 1 0 011 1v5a1 1 0 11-2 0v-5a1 1 0 011-1zm4-1a1 1 0 10-2 0v7a1 1 0 102 0V8z" clip-rule="evenodd" />
                </svg>LOAN REPORT</a>

                <a href="" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-600 text-white font-third">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 inline-block justify-between mr-4 ml-6" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                      </svg>PAYMENTS</a>

                <a href="user" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-600 text-white font-third">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 inline-block justify-between mr-4 ml-6" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                      </svg>USER</a>
                <a href="logout" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-600 text-white font-third">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 inline-block justify-between mr-4 ml-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                      </svg>LOGOUT</a>
            </nav>
        </div>
        
        <div class="flex-1  w-full">
            <header class="bg-gray-300 p-4 font-bold text-right">LENDING SYSTEM</header>
            <div class="p-8">
                <h1 class="font-fourth font-bold text-3xl ">Admin Dashboard</h1>
                <svg width="303" height="7" viewBox="0 0 403 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.997559 3.5L402.5 3.50001" stroke="black"/>
                    </svg>
                    <h5 class="text-2xl italic ">Welcome to DVOFINDS!</h5>
            </div>
                   

            <div class="flex flex-wrap justify-center mt-18 ">

                    <div class="flex flex-col bg-blue-400 text-white rounded-lg shadow-md w-full m-6 overflow-hidden
                       sm:w-72">
                        <div>
                            <h2 class="text-md mb-16 font-fourth font-bold p-4 bg-blue-500 text-black">
                                Borrowers
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-flex items-center float-right" viewBox="0 0 20 20"  fill="currentColor"><path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z" /></svg></h2>
                            </div>
                            <h2 class="text-3xl text-center px-2 pb-5 mb-20">0</h2>
                    </div>


                    <div class=" flex flex-col bg-green-400 text-white rounded-lg shadow-md w-full m-6 overflow-hidden
                       sm:w-72">
                       <div>
                            <h2 class="text-md mb-16 font-bold p-4 bg-green-500 text-black font-fourth">Active Loans
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-flex items-center float-right" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" /></svg></h2>
                            </div>
                            <h2 class="text-3xl text-center px-2 pb-5 mb-20">0</h2>
                    </div>

                    <div class=" flex flex-col text-white rounded-lg shadow-md w-full m-6 overflow-hidden
                       sm:w-72 bg-red-400 ">
                        <div>
                            <h2 class="text-md mb-16 font-bold p-4 bg-red-500 text-black font-fourth">Total Receivable
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-flex items-center float-right" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd" />
                            </svg></h2>
                            <h2 class="text-3xl text-center px-2 pb-5 mb-20">0</h2>
                    </div>

                </div>
            </div>   
        </div>
    </div>
    <script>
        const btn = document.querySelector(".mobile-menu");
        const sidebar = document.querySelector(".sidebar");

        btn.addEventListener("click" , () => {
        sidebar.classList.toggle("-translate-x-full");
    });
    </script>
     

</body>
</html>
