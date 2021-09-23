<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initials-scale=1.0">
    <title>Inventory System</title>
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
  
  <div class="w-full min-h-screen flex justify-center items-center lg:grid lg:grid-cols-2 p-6 text-white">

    <img src="img/charts.png" class="hidden lg:block" />
          <form class=" bg-casal-500 flex flex-col items-center lg:w-full md:w-2/3 h-full p-6 xs:w-full sm:w-2/3 pt-56 pb-56"></h2>
              <h2 class=" my-8 font-display font-bold text-xl text-white text-center">Login to Your Account</h2>
      
      
              <div class="relative w-60">
                  <label class="text-sm">Email Address</label>
                  <input type="text" placeholder="Email Address" class="w-full h-10 border border-gray-200 p-3 text-sm rounded outline-none focus:border-blue-400" />
              </div>
      
              <div class="relative mt-4 w-60">
                  <label class="text-sm">Password</label>
                  <input type="password" placeholder="Password" class="w-full h-10 border border-gray-200 p-3 text-sm rounded outline-none focus:border-blue-400"/>
              </div>
              <a href="{{ url('home') }}" class="py-3 px-8 bg-black-900 rounded-lg text-center text-white font-bold uppercase tex-lg mt-4 w-30">Login</a>
              <h1 class="mt-6 text-gray-400">Don't have an account?
                  <a href="{{ url('signup') }}" class="text-white"> Sign up</h1></a>
          </form>
      
  </div>
   



  
  
</body>
</html>