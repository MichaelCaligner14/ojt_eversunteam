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
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Borrowers|Edit</title>
</head>

<body class="bg-gray-100">



    <div class="relative min-h-screen md:flex">

        <div class="flex-1  w-full items-center justify-center">
        <div class="bg-secondarycolor flex justify-between  items-center lg:p-4 xs:p-4 sm:p-3 md:p-3">
        <div class="flex items-center ">
            <h2 class="font-bold text-black lg:ml-12 xs:ml-2 mr-2">DVOFINDS</h2>
        </div>
        <div class="md:flex justify-end items items-center lg:inline-flex lg:flex-row lg:w-auto" id="navigation">
            <a class="font-bold text-right">LENDING SYSTEM</a>
        </div>
        </div>

        <div class="p-8 ">
            </div>
                
           
                    
           <div>
            </div>
            <div class="bg-thirdcolor lg:w-3/4 mx-auto shadow-xl rounded-md pb-6">
            <div class="flex justify-end bg-gray-100">
                <a href="home" class="inline justify-end text-md hover:text-red-700 text-gray-600 text-bold">Dashboard /</a>
                <a href="" class="inline justify-end text-md pl-2 hover:text-red-700  text-bold text-gray-600">Update Loan Information
                </a>
            </div>
                <div class="rounded-t bg-white mb-0 px-6 py-4 ">
                    <div class="text-center flex justify-between">
                        <h6 class="text-blueGray-700 text-md font-bold">
                            UPDATE BORROWER INFORMATION
                        </h6>
                    </div>
                </div>
                
            <div class="lg:px-16 xs:px-6 sm:px-6 md:px-10">
                <div class="py-6">
                    
                <form action="{{ route('update') }}" method="post">
                    @csrf

                    <h6 class="text-blueGray-700 text-md font-semibold text-gray-500">
                            Personal Information
                        </h6>
                    <div class="flex">
                        <input type="hidden" name="cid" value="{{$info->id}}">
                        <div class="w-1/2 px-1">
                            <label class="text-gray-600 font-light">Firstname</label>
                            <input type="text" placeholder="" name="fname" class="w-full mt-2 mb-2 px-4 lg:py-1.5 xs:py-1 sm:py-1 border rounded-md
                            text-gray-600 focus:outline-none focus:border-green-500" value="{{$info->fname}}"/>
                        </div>
                    
                        <div class="w-1/2 px-1">
                            <label class="text-gray-600 font-light">Lastname</label>
                            <input type="text" placeholder="" name="lname" class="w-full mt-2 mb-2 px-4 lg:py-1.5 xs:py-1 md:py-1 sm:py-1 border rounded-md
                            text-gray-700 focus:outline-none focus:border-green-500" value="{{$info->lname}}"/>
                        </div>
                        <div class="w-12 px-1">
                            <label class="text-gray-600 font-light">M.I</label>
                            <input type="text" placeholder=""  name="mname" class="w-full mt-2 mb-2 px-2 lg:py-1.5 xs:py-1 sm:py-1 border rounded-md
                            text-gray-700 focus:outline-none focus:border-green-500" value="{{$info->mname}}"/>
                        </div>
                    </div>

                    <div class=" w-full px-1 mt-0">
                        <label class="text-gray-600 font-light ">Address</label>
                        <input type="text" placeholder=""  name="address" class="w-full mt-2 mb-2 px-4 lg:py-1.5 xs:py-1 sm:py-1 border rounded-md
                        text-gray-600 focus:outline-none focus:border-green-500"  value="{{$info->address}}"/>
                    </div>

                    <div class="flex">
                        <div class=" w-1/2 px-1 mt-0">
                            <label class="text-gray-600 font-light ">Email Address</label>
                            <input type="text" placeholder=" "  name="email" class="w-full mt-2 mb-2 px-4 lg:py-1.5 xs:py-1 sm:py-1 border rounded-md
                             text-gray-600 focus:outline-none focus:border-green-500" value="{{$info->email}}"/>
                        </div>
                        <div class=" w-1/2 px-1 mt-0">
                            <label class="text-gray-600 font-light ">Contact No</label>
                            <input type="text" placeholder=""  name="contactNo" class="w-full mt-2 mb-2 px-4 lg:py-1.5 xs:py-1 sm:py-1 border rounded-md
                            text-gray-600 focus:outline-none focus:border-green-500" value="{{$info->contactNo}}"/>
                        </div>
                    </div>
        
                    </div> 
                    </div>
                    </div>
                    <div class="w-3/4 mb-14 mx-auto py-6 flex justify-between">
                        <div>
                        <h1 class="font-third">2021 DVOFINDS</h1>
                        </div>
                        <div class="justify-end">
                        <button type="submit" class="py-1 px-14 bg-blue-800 rounded-md text-center mr-4 text-white font-bold uppercase text-lg">SAVE</button>
                        <button href="borrowers" class="py-1 px-12 bg-gray-800 rounded-md text-center mr-4 text-white font-bold uppercase text-lg">CANCEL</button>
                        </div>
                    </div>
                    </form>
                </div> 
            </div>
     </div>
</div>
        

</body>
</html>