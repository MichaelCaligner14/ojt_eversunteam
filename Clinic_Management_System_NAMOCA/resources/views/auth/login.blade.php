<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/app.css">
   
    <script src="https://kit.fontawesome.com/c26cd2166c.js"></script>
    <title> Login </title>

    </head>
    <body class="bg-gray-200" >

        <div class="flex">
        <div class="flex items-center justify-center flex-col rounded-lg w-1/2 ">
            <img src="img/logo.png" class="w-24">

            <form action="{{route('login-user')}}" method="post">
            @if(Session::has('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">{{Session::get('success')}}</div>
                @endif

                @if(Session::has('fail'))
                <div class="bg-red-600 border border-red-500 text-black-700 px-4 py-3 rounded relative" role="alert">{{Session::get('fail')}}</div>
                @endif

                
                @csrf

            <div class="flex flex-col mt-2 bg-white p-5 rounded shadow-md">
                <label class="text-sm my-2">Username </label>
                <input type="text" name="username" value="{{old('username')}}" required class="bg-gray-100 border-2 border-gray-200 text-xl rounded">


                <label class="text-sm my-2">Password </label>
                <input type="password" name="password" value="{{old('password')}}" required class="bg-gray-100 border-2 border-gray-200 text-xl rounded">
                <div class="flex justify-between mt-4 mb-10">
                    <div>
                    <input type="checkbox" required>
                    <class="text-xs"> I'm not a robot </>
                    </div>
                    <div>
                    <button type="submit" class="bg-blue-500 text-blue-100 py-1 px-3 rounded hover:bg-blue-600">Login</button>
                    </div>
                </div>

            </div>
</form>

            <div class="text-xs mt-4 ">
                <h1> Register | Forgot Password?</h1>
                <a href="{{ url('sign') }}"><h1 class="mt-2"> Create Account <i class="fas fa-arrow-right"></i></h1></a>
               <button id="buttonmodal"><h1 class="mt-2"> Message Us <i class="fas fa-comments"></i></h1></button>
            </div>
           
        </div>


        <div class="w-1/2">
            <img src="img/bg.jpg" class="h-screen object-fit object-cover">
        </div>

    </div>
    



    <div id="modal"
    class="fixed bottom-0 left-0 w-screen h-screen flex justify-end items-end transform scale-0 transition-transform rounded-lg pr-6">
    <!-- Modal content --> 
    <div class="bg-gray-50 w-1/5 h-1/2 mb-5 rounded-lg"> 
  

        <div class="justify-start bg-black ">
          <button id="closebutton" type="button" class="focus:outline-none float-right p-3">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400 float-right" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
        </button>
          <div class="flex flex-col-2">
        
        <img src="img/logo.png"
      class="w-14 hidden lg:block md:block inset-0"/>

      <p class="text-sm pl-5 text-white mt-6">Clinic Management System</p>
</div>
</div>

        <div class="flex flex-col items-center justify-center">
            <input class=" w-full bg-gray-50 rounded border border-black-300 pb-4 pt-2 text-center text-black" 
            type="text" name="username" id="username" value="" placeholder="Please Enter Your Name...">
            </div>
            <div class="flex-1 p-4 overflow-y-auto h-3/5 mt-4 justify-end" id="messages"></div>
            <form class="flex" id="message_form">
                <input class="flex-1 font-semibold border shadow-sm bg-gray-200 block w-1/2 pb-4 pt-4 pl-2" 
                type="text" name="message" id="message_input" placeholder="Write a message..."/>
                <button class="appearance-none bg-gray-200 px-8 text-white uppercase hover:bg-gray-300 md:w-24 pl-9" type="submit" id="message_send">
                <svg class="crt8y2ji " width="20px" height="20px" viewBox="0 0 24 24"><path d="M16.6915026,12.4744748 L3.50612381,13.2599618 C3.19218622,13.2599618 3.03521743,13.4170592 3.03521743,13.5741566 L1.15159189,20.0151496 C0.8376543,20.8006365 0.99,21.89 1.77946707,22.52 C2.41,22.99 3.50612381,23.1 4.13399899,22.8429026 L21.714504,14.0454487 C22.6563168,13.5741566 23.1272231,12.6315722 22.9702544,11.6889879 C22.8132856,11.0605983 22.3423792,10.4322088 21.714504,10.118014 L4.13399899,1.16346272 C3.34915502,0.9 2.40734225,1.00636533 1.77946707,1.4776575 C0.994623095,2.10604706 0.8376543,3.0486314 1.15159189,3.99121575 L3.03521743,10.4322088 C3.03521743,10.5893061 3.34915502,10.7464035 3.50612381,10.7464035 L16.6915026,11.5318905 C16.6915026,11.5318905 17.1624089,11.5318905 17.1624089,12.0031827 C17.1624089,12.4744748 16.6915026,12.4744748 16.6915026,12.4744748 Z" fill="#0099FF" fill-rule="evenodd" stroke="none"></path></svg></button> 
            </form>
    </div>
</div>


       





    </body>


    </html>
    <script src="message.js"></script>
    <script src="./js/app.js"></script>