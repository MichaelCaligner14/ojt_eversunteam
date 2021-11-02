<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initials-scale=1.0">
    <title>Inventory System</title>
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet/less" type="text/css" href="css/styles.less" />
    <script src="https://cdn.jsdelivr.net/npm/less@4.1.1" ></script>
</head>
<style>
    .message strong{
    color: #8C38FF;
    font-weight: 600;
    padding-right:5px;
    margin-bottom:5px;
  }
  </style>
<body>
  
  <div class="fixed w-full min-h-screen flex justify-center items-center lg:grid lg:grid-cols-2 p-6 text-black">

    <img src="img/charts.png" class="hidden lg:block" />

        <form action="{{route('login-user')}}" method="post" 
          class=" bg-casal-500 flex flex-col items-center lg:w-full md:w-2/3 h-full p-6 xs:w-full sm:w-2/3 pt-56 pb-56">
          @include('layouts.flash')
            @csrf

              <h2 class=" my-8 font-display font-bold text-xl text-white text-center">Login to Your Account</h2>
      
      
              <div class="relative w-60">
                  <label class="text-sm text-white">Email</label>
                  <input type="email" placeholder="Email Address" name="email" value="{{old('email')}}" class="w-full h-10 border border-gray-200 p-3 text-sm rounded outline-none focus:border-blue-400" />
                  <span class="text-red-800">@error('email') {{$message}} @enderror </span>
              </div>
      
              <div class="relative mt-4 w-60">
                  <label class="text-sm text-white">Password</label>
                  <input type="password" placeholder="Password" name="password" value="{{old('email')}}" class="w-full h-10 border border-gray-200 p-3 text-sm rounded outline-none focus:border-blue-400"/>
                  <span class="text-red-800">@error('password') {{$message}} @enderror </span>
              </div>
              <br>
              <button class="btnreg" type="submit">
            Login
            </button>
              <h1 class="mt-6 text-gray-400">Don't have an account?<a href="registration" class="text-white"> Sign up</h1></a>
              <div>
<br>
              <button id="buttonmodal" class="absolute bottom-14 right-12 focus:outline-none p-2 bg-blue-600 text-white bg-opacity-75 rounded-full h-24 w-24 flex items-center justify-center ring-2 ring-indigo-300" 
              type="button">Message Us.....
            </button>
          </div>
          </form>
          
  </div>
  <div id="modal"
    class="fixed bottom-0 left-0 w-screen h-screen flex justify-end items-end transform scale-0 transition-transform rounded-lg pr-6">
    <!-- Modal content -->
    <div class="bg-gray-50 w-1/5 h-1/2 mb-1"> 
  

        <div class="justify-start bg-yellow-300">
          <button id="closebutton" type="button" class="focus:outline-none float-right p-3">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 float-right" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
        </button>
          <div class="flex flex-col-2">
        
        <img src="img/center.png"
      class="w-20 hidden lg:block md:block inset-0"/>

      <p class="text-sm mt-6">How can we help You?</p>
</div>
</div>

        <div class="flex flex-col items-center justify-center">
            <input class="block w-full bg-gray-50 rounded border border-black-300 pb-4 pt-2 text-center text-black" 
            type="text" name="username" id="username" placeholder="Please enter a username..">
            </div>
            <div class="flex-1 p-4 overflow-y-auto h-3/5 mt-4 justify-end" id="messages"></div>
            <form class="flex" id="message_form">
                <input class="flex-1 font-semibold border shadow-sm bg-gray-300 block w-1/2 pb-4 pt-4 pl-2" 
                type="text" name="message" id="message_input" placeholder="Write a message.."/>
                <button class="appearance-none bg-gray-300 px-8 text-white uppercase hover:bg-gray-100 md:w-24 pl-9" type="submit" id="message_send">
                <svg class="crt8y2ji" width="20px" height="20px" viewBox="0 0 24 24"><path d="M16.6915026,12.4744748 L3.50612381,13.2599618 C3.19218622,13.2599618 3.03521743,13.4170592 3.03521743,13.5741566 L1.15159189,20.0151496 C0.8376543,20.8006365 0.99,21.89 1.77946707,22.52 C2.41,22.99 3.50612381,23.1 4.13399899,22.8429026 L21.714504,14.0454487 C22.6563168,13.5741566 23.1272231,12.6315722 22.9702544,11.6889879 C22.8132856,11.0605983 22.3423792,10.4322088 21.714504,10.118014 L4.13399899,1.16346272 C3.34915502,0.9 2.40734225,1.00636533 1.77946707,1.4776575 C0.994623095,2.10604706 0.8376543,3.0486314 1.15159189,3.99121575 L3.03521743,10.4322088 C3.03521743,10.5893061 3.34915502,10.7464035 3.50612381,10.7464035 L16.6915026,11.5318905 C16.6915026,11.5318905 17.1624089,11.5318905 17.1624089,12.0031827 C17.1624089,12.4744748 16.6915026,12.4744748 16.6915026,12.4744748 Z" fill="#0099FF" fill-rule="evenodd" stroke="none"></path></svg></button> 
            </form>
    </div>
</div>

<script src="./js/app.js"></script>

<script src="chatroom.js"> 
</script>
</body>
</html>