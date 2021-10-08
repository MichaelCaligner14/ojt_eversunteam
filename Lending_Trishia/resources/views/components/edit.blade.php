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
        <div class="bg-gray-300 flex justify-between  items-center lg:p-4 xs:p-4 sm:p-3 md:p-3">
        <div class="flex items-center ">
            <h2 class="font-bold text-black lg:ml-12 xs:ml-2 mr-2">DVOFINDS</h2>
        </div>
        <div class="md:flex justify-end items items-center lg:inline-flex lg:flex-row lg:w-auto" id="navigation">
            <a class="font-bold text-right">LENDING SYSTEM</a>
        </div>

       
        </div>

            <div class="bg-primarycolor py-10 px-10 min-h-screen ">
            <div class="bg-white p-10 md:w-3/4 lg:w-1/2 mx-auto rounded-md">
            <h1 class="font-fourth font-bold text-3xl tracking-widest mb-10">UPDATE</h1>
            <form action="{{route('update')}}" method="post">
            @csrf

            <div class="flex">
                        <input type="hidden" name="cid" value="{{$info->id}}">
                        <div class="w-1/2 px-1">
                            <label class="text-gray-600 font-light">Firstname</label>
                            <input type="text" placeholder="" name="fname" class="w-full mt-2 mb-2 px-4 lg:py-2 xs:py-1 sm:py-1 border rounded-md
                            text-gray-600 focus:outline-none focus:border-green-500" value="{{$info->fname}}"/>
                        </div>
                        <div class="w-1/2 px-1">
                            <label class="text-gray-600 font-light">Lastname</label>
                            <input type="text" placeholder="" name="lname" class="w-full mt-2 mb-2 px-4 lg:py-2 xs:py-1 md:py-1 sm:py-1 border rounded-md
                            text-gray-700 focus:outline-none focus:border-green-500" value="{{$info->lname}}"/>
                        </div>
                        <div class="w-12 px-1">
                            <label class="text-gray-600 font-light">M.I</label>
                            <input type="text" placeholder=""  name="mname" class="w-full mt-2 mb-2 px-2 lg:py-2 xs:py-1 sm:py-1 border rounded-md
                            text-gray-700 focus:outline-none focus:border-green-500" value="{{$info->mname}}"/>
                        </div>
                    </div>

                    <div class=" w-full px-1 mt-0">
                        <label class="text-gray-600 font-light ">Address</label>
                        <input type="text" placeholder=""  name="address" class="w-full mt-2 mb-2 px-4 lg:py-2 xs:py-1 sm:py-1 border rounded-md
                        text-gray-600 focus:outline-none focus:border-green-500"  value="{{$info->address}}"/>
                    </div>

                    <div class="flex">
                        <div class=" w-1/2 px-1 mt-0">
                            <label class="text-gray-600 font-light ">Email Address</label>
                            <input type="text" placeholder=" "  name="email" class="w-full mt-2 mb-2 px-4 lg:py-2 xs:py-1 sm:py-1 border rounded-md
                             text-gray-600 focus:outline-none focus:border-green-500" value="{{$info->email}}"/>
                        </div>
                        <div class=" w-1/2 px-1 mt-0">
                            <label class="text-gray-600 font-light ">Contact No</label>
                            <input type="text" placeholder=""  name="contactNo" class="w-full mt-2 mb-2 px-4 lg:py-2 xs:py-1 sm:py-1 border rounded-md
                            text-gray-600 focus:outline-none focus:border-green-500" value="{{$info->contactNo}}"/>
                        </div>
                    </div>

                    <div class="flex justify-end my-4 pt-2">
                        <button type="submit" class="px-4 bg-transparent p-3 rounded-lg bg-blue-800 hover:bg-indigo-400 text-white mr-2">UPDATE</button>
                        <button href="borrowers" class="px-4 bg-gray-800 p-3 rounded-lg text-white hover:bg-indigo-400">CANCEL</button>
                    </div>
                </div>

    </form>
  </div>
</div>
        </div>
    </div>
</div>
        





</body>
</html>