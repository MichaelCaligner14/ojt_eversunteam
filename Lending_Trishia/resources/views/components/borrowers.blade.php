<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Proza+Libre:wght@500;600&family=Roboto&family=Roboto+Condensed:wght@400;700&family=Ropa+Sans&display=swap"
    rel="stylesheet">
    <link rel="stylesheet" href="css/app.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Borrowers</title>
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
                <h1 class="font-fourth font-bold text-3xl tracking-widest">BORROWERS</h1>
            </div>


            <div class="mx-16">
                 @if(Session::has('success'))
                    <div class="bg-green-100 border border-green-400 mb-4x text-green-700 px-4 py-3 rounded relative" role="alert">{{ Session::get('success')}}</div>
                    @endif
                    @if(Session::has('fail'))
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">{{ Session::get('fail')}}</div>
                    @endif

            <button class="modal-open mb-2 bg-transparent border border-gray-500 hover:border-indigo-500 text-gray-500 hover:text-indigo-500 font-bold py-2 px-4 rounded-md">
                ADD DATA </button>
               
            </div>


<!-- ADD Modal-->
        <div class="modal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center">
            <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>
            
            <div class="modal-container bg-white w-auto  rounded shadow-lg z-50 overflow-y-auto">
            
            <div class="modal-close absolute top-0 right-0 cursor-pointer flex flex-col items-center mt-4 mr-4 text-white text-sm z-50">
                <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
                </svg>
                <span class="text-sm">(Esc)</span>
            </div>

            <!-- Add margin if you want to see some of the overlay behind the modal-->
            <div class="modal-content py-4 text-left px-6">
                <!--Title-->
                <div class="flex justify-between items-center pb-3 mb-6">
                <p class="text-md font-bold">PERSONAL INFORMATION</p>
                <div class="modal-close cursor-pointer z-50">
                    <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                    <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
                    </svg>
                </div>
                </div>

        
                   
                <!--Body-->
                <form action="add" method="post">
                @csrf
                    <div class="flex">
                        <div class="w-1/2 px-1">
                            <label class="text-gray-600 font-light">Firstname</label>
                            <input type="text" placeholder="" name="fname" class="w-full mt-2 mb-2 px-4 lg:py-2 xs:py-1 sm:py-1 border rounded-md
                            text-gray-600 focus:outline-none focus:border-green-500"/>
                        </div>
                        <div class="w-1/2 px-1">
                            <label class="text-gray-600 font-light">Lastname</label>
                            <input type="text" placeholder="" name="lname" class="w-full mt-2 mb-2 px-4 lg:py-2 xs:py-1 md:py-1 sm:py-1 border rounded-md
                            text-gray-700 focus:outline-none focus:border-green-500"/>
                        </div>
                        <div class="w-12 px-1">
                            <label class="text-gray-600 font-light">M.I</label>
                            <input type="text" placeholder=""  name="mname" class="w-full mt-2 mb-2 px-2 lg:py-2 xs:py-1 sm:py-1 border rounded-md
                            text-gray-700 focus:outline-none focus:border-green-500"/>
                        </div>
                    </div>

                    <div class=" w-full px-1 mt-0">
                        <label class="text-gray-600 font-light ">Address</label>
                        <input type="text" placeholder=""  name="address" class="w-full mt-2 mb-2 px-4 lg:py-2 xs:py-1 sm:py-1 border rounded-md
                        text-gray-600 focus:outline-none focus:border-green-500"/>
                    </div>

                    <div class="flex">
                        <div class=" w-1/2 px-1 mt-0">
                            <label class="text-gray-600 font-light ">Email Address</label>
                            <input type="text" placeholder=" "  name="email" class="w-full mt-2 mb-2 px-4 lg:py-2 xs:py-1 sm:py-1 border rounded-md text-gray-600 focus:outline-none focus:border-green-500"/>
                        </div>
                        <div class=" w-1/2 px-1 mt-0">
                            <label class="text-gray-600 font-light ">Contact No</label>
                            <input type="text" placeholder=""  name="contactNo" class="w-full mt-2 mb-2 px-4 lg:py-2 xs:py-1 sm:py-1 border rounded-md
                            text-gray-600 focus:outline-none focus:border-green-500"/>
                        </div>
                </div>

             <!--Footer-->
                <div class="flex justify-end pt-2">
                    <button type="submit" class="px-4 bg-transparent p-3 rounded-lg bg-blue-800 hover:bg-indigo-400 text-white mr-2">SAVE</button>
                    <button class="modal-close px-4 bg-gray-800 p-3 rounded-lg text-white hover:bg-indigo-400">Close</button>
               </div>

                </form>
              </div>
            </div>
        </div>
          

                <div class="mx-16 mb-24"> 
                    <table id="datatable" class="border-collapse shadow-md w-full">
                    <thead>
                        <tr>
                            <th class="p-3 font-bold text-sm uppercase bg-gray-700 text-white border border-gray-300 hidden lg:table-cell">#</th>
                            <th class="p-3 font-bold text-sm uppercase bg-gray-700 text-white border border-gray-300 hidden lg:table-cell">Fullname</th>
                            <th class="p-3 font-bold text-sm uppercase bg-gray-700 text-white border border-gray-300 hidden lg:table-cell">Address</th>
                            <th class="p-3 font-bold text-sm uppercase bg-gray-700 text-white border border-gray-300 hidden lg:table-cell">Email Address</th>
                            <th class="p-3 font-bold text-sm uppercase bg-gray-700 text-white border border-gray-300 hidden lg:table-cell">Contact No.</th>
                            <th class="p-3 font-bold text-sm uppercase bg-gray-700 text-white border border-gray-300 hidden lg:table-cell">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($list as $item)
                    <tr class="idCust bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
                            <td class="w-full lg:w-auto p-1.5 text-gray-800 text-center border text-sm border-b block lg:table-cell  lg:static">
                                <span class="lg:hidden float-left top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">#</span>
                                {{$item->id}}
                            </td>
                            
                            <td class="lname w-full lg:w-auto p-1.5 text-gray-800 text-center border text-sm border-b block lg:table-cell  lg:static">
                                <span class="lg:hidden float-left top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Name</span>
                                {{$item->lname}}, {{$item->fname}} {{$item->mname}}.
                            </td>
                            
                            <td class="address w-full lg:w-auto p-1.5 text-gray-800 text-center border text-sm border-b block lg:table-cell  lg:static">
                                <span class="lg:hidden float-left top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Username</span>
                                {{$item->address}}
                            </td>
                            <td class="email w-full lg:w-auto p-1.5 text-gray-800 text-center border text-sm border-b block lg:table-cell  lg:static">
                                <span class="lg:hidden float-left top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Name</span>
                                {{$item->email}}
                            </td>
                            <td class="contactNo w-full lg:w-auto p-1.5 text-gray-800 text-center border text-sm border-b block lg:table-cell  lg:static">
                                <span class="lg:hidden float-left top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Username</span>
                                {{$item->contactNo}}
                                
                            </td>
                      
                            <td class="w-full lg:w-auto p-1.5 text-gray-800  border border-b text-sm text-center lg:table-cell lg:static">
                                <span class="lg:hidden float-left top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Actions</span>

                                <a href="edit/{{ $item->id }}"  class=" text-blue-400 hover:text-blue-600 underline">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                                </svg></a>
                                
                                <a href="delete/{{$item->id}}"  class="text-blue-400 hover:text-blue-600 underline pl-6">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block " viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                </svg></a>

                            </td>
                        </tr>
                        @endforeach
                          
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>


<script src="js/sidebar.js"></script>
<script src="js/addData.js"></script>


<script> 
    const buttons = document.querySelectorAll("#buttonmodal");

    buttons.forEach(button => {
    button.addEventListener('click', () => {
        modal.classList.add('scale-100');
    });
    })

    const closeButton = document.querySelectorAll("#closeButton");

    closeButton.forEach(button => {
    button.addEventListener('click', () => {
        modal.classList.add('scale-100');
    });
    })
</script>
</body>
</html>