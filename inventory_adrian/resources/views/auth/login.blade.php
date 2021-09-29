<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initials-scale=1.0">
    <title>Inventory System</title>
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
  
  <div class="w-full min-h-screen flex justify-center items-center lg:grid lg:grid-cols-2 p-6 text-black">

    <img src="img/charts.png" class="hidden lg:block" />

          <form action="{{route('login-user')}}" method="post" 
          class=" bg-casal-500 flex flex-col items-center lg:w-full md:w-2/3 h-full p-6 xs:w-full sm:w-2/3 pt-56 pb-56">
          @if (Session::has('success'))
      <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">{{Session::get('success')}}</div>
      @endif
      @if (Session::has('fail'))
      <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">{{Session::get('fail')}}</div>
      @endif
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
              <button class="bg-black-500 text-white font-bold py-2 px-4 rounded" type="submit">
            Login
            </button>
              <h1 class="mt-6 text-gray-400">Don't have an account?<a href="registration" class="text-white"> Sign up</h1></a>
          </form>
      
  </div>
   



  
  
</body>
</html>