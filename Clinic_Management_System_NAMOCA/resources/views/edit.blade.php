
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/app.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
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

   
        
        
    </div>


   
    <div class="bg-gray-800 mt-3 mb-5 mr-5 ml-2 w-full rounded-3xl border-white border-solid" style="border:1px solid; border-color:pink;">
   
        <h1 class="flex items-center justify-center text-white font-semibold text-4xl mt-10 ">EDIT PATIENT</h1> <a href="{{ url('patview') }}"><i style="margin-left:85%;" class="text-gray-300 hover:text-white text-3xl fas fa-table"></i></a>
        <div class="bg-gray-200 ml-24 mt-2" style="width:80%; height: 1px;"></div>

        <form action="{{route('update')}}" method="post">
       

        @csrf
        <input type="hidden" name="id" value="{{$info->id}}">
        <div class="mt-5">
        <label for="fullname" class="text-white ml-40 ">Fullname </label>
        <input  type="text" name="fullname" value="{{$info->fullname}}" required class="rounded-lg text-white mt-3 bg-gray-800 border-2 ml-40  border-gray-500  "style="width: 68%;">

        <ul class="mt-3">
            <label for="address" class="text-white ml-40">Address </label>
            </ul>
            <input  type="text" name="address" value="{{$info->address}}" required class="rounded-lg text-white  ml-40 mt-3 bg-gray-800 border-2  border-gray-500  " style="width: 68%;">

        

        <ul class="mt-3">
            <label for="email" class="text-white ml-40">Email </label>
            <label for="contact" class="text-white" style="margin-left:34%">Contact </label>
            </ul>
            <input type="text" name="email" value="{{$info->email}}" required placeholder="  @" class="rounded-lg text-white  ml-40 mt-3 bg-gray-800 border-2  border-gray-500  " style="width: 36%;">
            <input type="text" name="contact" value="{{$info->contact}}" required class="rounded-lg text-white mt-3 bg-gray-800 border-2 ml-1  border-gray-500" style="width:31%;">
          
            <ul class="mt-3">
            <label for="age" class="text-white ml-40">Age </label>
            <label for="birth" class="text-white" style="margin-left:34%">Date </label>
             
                </ul>
                <input type="text" name="age" value="{{$info->age}}" required  class="rounded-lg text-white  ml-40 mt-3 bg-gray-800 border-2  border-gray-500  " style="width: 36%;">
                <input type="text" name="birth" value="{{$info->birth}}" required class="rounded-lg text-white mt-3 bg-gray-800 border-2 ml-1  border-gray-500" style="width:31%;">
               

                <div class="bg-gray-200 ml-48 mt-6" style="width:63%; height: 1px;"></div>
                <div class="bg-gray-200 ml-24 mt-5" style="width:80%; height: 1px;"></div>

                <h1 class="flex mt-3 items-center justify-center text-white text-2xl">Body Mask Index</h1>

                <ul class="mt-5">
                    <label for="temp" class="text-white ml-80">Temperature </label>
                    <label for="weight" class="text-white ml-24">Weight</label>
                    <label for="height" class="text-white ml-32">Height</label>               
                    </ul>
                    <input type="text" name="temp" value="{{$info->temp}}" required placeholder="                                  ℃" class="rounded-lg text-white ml-80 mt-3 bg-gray-800 border-2  border-gray-500  ">
                    <input type="text" name="weight" value="{{$info->weight}}" required placeholder="                                 Kg" class="rounded-lg text-white mt-3 bg-gray-800 border-2  border-gray-500  ">
                    <input type="text" name="height" value="{{$info->height}}" required placeholder="                                 Cm" class="rounded-lg text-white mt-3 bg-gray-800 border-2  border-gray-500  ">

                    <div class="bg-gray-200 ml-24 mt-10" style="width:80%; height: 1px;"></div>
                   
                    <div>
                        <button type="submit" class="bg-gray-600 px-28  text-white mt-7 py-3 rounded-xl hover:bg-gray-700" style="margin-left:38%"> U P D A T E</button>
                    </div>
                
                   

        </div>
        </form>
        </div>
    



        </div>
       








</div>


<script src="sidebar.js"></script>
    
    
</body>
</html>  









