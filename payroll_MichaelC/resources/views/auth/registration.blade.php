
<!doctype html>
<html>
<head>
  <!-- ... -->
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <title>Payroll System</title>
</head>
<body class="bg-gray-700 mx-auto">

<div class="py-28 ">
  <div class="grid text-center sm:grid-flow-col gap-6  ">
<div class="grid grid-cols-1 ">
  <div class="mx-auto">

<p class="w-36 py-6 text-white w-52 text-2xl"><span class="text-yellow-600">Sign Up</span> Here!</p>

</div>
      <div class="mx-auto">
        <div class="bg-gray-600 shadow rounded-3xl" style="width: 500px; height: 600px;">
          <form class="w-full mx-auto bg-gray-600 text-white max-w-sm  py-16 px-6 mt-4" action="{{route('register-user')}}" method="POST">
          @csrf
            <div class="flex flex-wrap -mx-3 mb-4">
              <div class="w-full px-3">
                <input class="appearance-none rounded-3xl block text-base w-full bg-white text-black border 
                border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" name="username" type="text" value="{{old('username')}}">
                <label class="block uppercase tracking-wide text-xs font-bold mb-2">
                  Username
                </label>
              </div>
            </div>
            
            <div class="flex flex-wrap -mx-3 mb-4">
              <div class="w-full px-3">
              <span class="text-red-300">@error('password'){{$message}}@enderror</span>
                <input class="appearance-none rounded-3xl block w-full bg-white text-black border 
                border-red-500 rounded text-base py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" name="password" type="password">
                <label class="block uppercase tracking-wide text-xs font-bold mb-2">
                  Password
                </label>
            </div>
          </div>
          <div class="flex flex-wrap -mx-3 mb-4">
            <div class="w-full px-3">
            <span class="text-red-300">@error('email'){{$message}}@enderror</span>
              <input class="appearance-none rounded-3xl block w-full bg-white text-black border 
              border-red-500 rounded text-base py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" name="email" type="email" value="{{old('email')}}">
              <label class="block uppercase tracking-wide text-xs font-bold mb-2">
                Email
              </label>
          </div>
        </div>
        
         <button class="bg-white hover:text-white hover:bg-blue-700 w-36 text-black text-base font-bold mt-4 py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
              Singup
          </button>
            <div class="pt-6">
            
            <div class="bg-gray-300 w-full" style="height: 3px;"></div>
            <a href="login"><p class="pt-3">Already have an account?, <span class="text-yellow-500 font-bold">LOGIN</span></a></p>
            </div>
          </div>
         
          </form>
          <div class="pt-6">
          @if(Session::has('success'))
          <div class="text-white px-6 py-4 border-0 rounded relative mb-4 bg-green-500">{{Session::get('success')}}</div>
          @endif
          @if(Session::has('fail'))
          <div class="text-white px-6 py-4 border-0 rounded relative mb-4 bg-red-500">{{Session::get('fail')}}</div>
          @endif
      </div>
</div>
      </div>
    </div>
    
    </div>
  </div>
</body>
</html>