<html lang="en">
<head>
<meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Login</title>

</head>
<body>

   

 
    <div
      class="w-screen h-screen flex flex-col justify-center items-center lg:grid lg:grid-cols-2"
    >
    
      <img
        src="./un.png" 
        
      />
      
      <div class="bg-gray-800 rounded-lg" style="width: 400px; height: 600px; float: right: 150px;">
      
        
        
        <form action="{{route('login-user')}}" method="post" class="bg-casal-500 w-full h-screen flex flex-col justify-center items-center w-1/2">
      
          @if(Session::has('success'))
          <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">{{Session::get('success')}}</div>
          @endif
          @if(Session::has('fail'))
          <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">{{Session::get('fail')}}</div>
          @endif

          @csrf
          
          <h2
          class="my-8 font-roboto font-bold text-3xl text-white text-center"
        >
        Login Your Account
        
        </h2>
        <div class="relative mt-8">
          <i class="fa fa-user absolute text-primarycolor text-xl"></i>

          <input name="email" value="{{old('email')}}"
          
            type="email"
            placeholder="email-address"
            class="pl-8 p-1 font-roboto border-b-2 font-display focus:outline-none focus:border-primarycolor transition-all duration-500 capitalize text-lg"
          />
         
         
        </div>
        <span class="text-red-800">@error('email') {{$message}} @enderror </span>
        <div class="relative mt-8">
          <i class="fa fa-lock absolute text-primarycolor text-xl"></i>
          <input name="password" 
            type="password"
            placeholder="password"  
            class="pl-8 p-1 font-roboto border-b-2 font-display focus:outline-none focus:border-primarycolor transition-all duration-500 capitalize text-lg"
          />
          
        </div> 
        <span class="text-red-800">@error('password') {{$message}} @enderror </span>
       
        
        <button type ="submit"
          class="py-2 px-4 bg-primarycolor rounded-5 text-white font-bold uppercase text-lg mt-4 transform bg-black-600 transition-all duration-500 bg-black bg-opacity-90 rounded" style="width: 220px; height: 48px;"
          >Login</button> 
          
        
      </form>
    </div>
</div>
</body>
</html>
    
