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
<body>
  <div class="w-full min-h-screen flex justify-center items-center lg:grid lg:grid-cols-2 p-6 text-black">
      <img src="img/shop.png" class="hidden lg:block" />
     
        <form action="{{route('register-user')}}" method="post"
        class=" bg-casal-500 flex flex-col items-center lg:w-full md:w-2/3 h-full p-6 xs:w-full sm:w-2/3 pt-56 pb-56">
        @include('layouts.flash')
            @csrf

              <h2 class=" my-8 font-display font-bold text-xl text-white text-center">Create an Account</h2>
      
              <div class="relative w-60">
                  <label class="text-sm text-white">Name</label>
                  <input type="text" placeholder="Name" name="name" value="{{old('name')}}" class="w-full h-10 border border-gray-200 p-3 text-black text-sm rounded outline-none focus:border-blue-400" />
                  <span class="text-red-800">@error('name') {{$message}} @enderror </span>
              </div>
              <br>

              <div class="relative w-60">
                  <label class="text-sm text-white">Email Address</label>
                  <input type="email" placeholder="Email Address" name="email" value="{{old('email')}}" class="w-full h-10 border border-gray-200 p-3 text-sm rounded outline-none focus:border-blue-400" />
                  <span class="text-red-800">@error('email') {{$message}} @enderror </span>
              </div>
      
              <div class="relative mt-4 w-60">
                  <label class="text-sm text-white">Password</label>
                  <input type="password" placeholder="Password" name="password" class="w-full h-10 border border-gray-200 p-3 text-sm rounded outline-none focus:border-blue-400"/>
                  <span class="text-red-800">@error('password') {{$message}} @enderror </span>
              </div>
              
            <br>
            <button class="btnreg" type="submit">
            Create Account
            </button>
            </button>
              <h1 class="mt-6 text-gray-400">Already have an Account!<a href="login" class="text-white"> Login</h1></a>
          </form>
      
  </div>
</body>
</html>