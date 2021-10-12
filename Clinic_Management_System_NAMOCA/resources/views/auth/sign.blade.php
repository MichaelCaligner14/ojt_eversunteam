
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet/less" type="text/css" href="css/style.less" />
   
    <script src="https://kit.fontawesome.com/c26cd2166c.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/less@4.1.1" ></script>
    
    <title> Sign-Up </title>

    </head>
    <body class="bg-gray-200" >

        <div class="flex">
        <div class="flex items-center justify-center flex-col rounded-lg w-1/2 ">
            <img src="img/logo.png" class="w-24">

            <form action="{{route('sign-user')}}" method="post">
                @if(Session::has('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">{{Session::get('success')}}</div>
                @endif

                @if(Session::has('fail'))
                <div class="bg-red-600 border border-red-500 text-black-700 px-4 py-3 rounded relative" role="alert">{{Session::get('fail')}}</div>
                @endif


              @csrf
            <div class="flex flex-col mt-2 bg-white p-5 rounded shadow-md">
                <label  for="fullname" class="text-sm my-2">Fullname </label>
                <input type="text" name="fullname" value="{{old('fullname')}}" required class="bg-gray-100 border-2 border-gray-200 text-xl rounded">
               

                <label for="address" class="text-sm my-2">Address </label>
                <input type="text" name="address" value="{{old('address')}}"  class="bg-gray-100 border-2 border-gray-200 text-xl rounded">
               

                <label for="email" class="text-sm my-2">Email </label>
                <input type="text" name="email" value="{{old('email')}}"  class="bg-gray-100 border-2 border-gray-200 text-xl rounded">
               

                <label for="username" class="text-sm my-2">Username </label>
                <input type="text"  name="username" value="{{old('username')}}"  class="bg-gray-100 border-2 border-gray-200 text-xl rounded">
               

                <label for="password" class="text-sm my-2">Password </label>
                <input type="password" name="password" value="{{old('password')}}"  class="bg-gray-100 border-2 border-gray-200 text-xl rounded">
                

                <div class="flex justify-between mt-4 mb-10">
                    
                    <div>
                    <!-- <button type="submit" class="btnreg">Sign-Up</button> -->


                    
                    <button type="submit" class="bg-blue-500 text-blue-100 py-1 px-3 rounded hover:bg-blue-600">Sign-Up</button>
                    </div>
                </div>

            </div>
            </form>

 

            <div class="text-xs mt-4 ">
                <h1> Register | Welcome☺</h1>
                <a href="{{ url('login') }}"><h1 class="mt-2"> <i class="fas fa-arrow-left"></i> Login Now!</h1></a>
                
            </div>
        </div>
 

        <div class="w-1/2">
            <img src="img/bg.jpg" class="h-screen object-fit object-cover">
        </div>

    </div>
       





    </body>
    </html>
