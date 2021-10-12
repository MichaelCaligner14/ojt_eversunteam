<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="css/app.css">
</head>
<body class="bg-baby-blue grid grid-cols-5 md:grid-cols-3 lg:grid-cols-5 grid-rows-7 lg:grid-rows-7">
    <form class="bg-white col-start-2 col-span-3 md:col-start-2 md:col-span-1 lg:col-start-3 lg:col-span-1 row-start-2 lg:row-start-2 row-span-1 lg:row-span-1 border pt-6 flex flex-wrap" action="{{route('register-user')}}" method="post">
        @if(Session::has('success'))
            <div class="bg-green-100 border border-green-400 mb-4 text-green-700 px-4 py-3 rounded ml-16 mr-16">{{ Session::get('success')}}</div>
        @endif
        @if(Session::has('fail'))
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded ml-16 mr-16">{{ Session::get('fail')}}</div>
        @endif
        @csrf
        <span class="underline font-bold text-4xl pl-24 lg:pl-32 font-condensed">EverCab</span>
        <span class="flex mt-4 ml-6 mb-4 mr-6 text-center font-semibold text-dark-gray">
            Sign up to submit ride reservations and get to your destination.
        </span>
        <a href="#" class="ml-16 lg:ml-24"><img src="img/fbicon.png" alt="fb" class="inline-block">Login with Facebook</a>
        <a href="#" class="ml-20 lg:ml-28"><img src="img/googleicon.png" alt="google" class="inline-block">Login with Google</a>
        <span class="block mt-2 ml-6 lg:ml-14">────────── OR ──────────</span>
        <div>
            <input type="email" placeholder="Email" name="email" class="text-sm w-64 bg-light-gray border ml-6 mt-2 lg:ml-14 p-2 rounded" value="{{old('email')}}">
            <span class="text-red pl-16 text-xs">@error('email') {{$message}} @enderror</span>
        </div>
        <div>
            <input type="text" placeholder="Full Name" name="name" class="text-sm w-64 bg-light-gray border ml-6 mt-2 lg:ml-14 p-2 rounded" value="{{old('name')}}">
            <span class="text-red pl-16 text-xs">@error('name') {{$message}} @enderror</span>
        </div>
        <div>
            <input type="text" placeholder="Username" name="username" class="text-sm w-64 bg-light-gray border ml-6 mt-2 lg:ml-14 p-2 rounded" value="{{old('username')}}">
            <span class="text-red pl-16 text-xs">@error('username') {{$message}} @enderror</span>
        </div>
        <div>
            <input type="password" placeholder="Password" name="password" class="text-sm w-64 bg-light-gray border ml-6 mt-2 lg:ml-14 p-2 rounded" value="{{old('password')}}">
            <span class="text-red pl-16 text-xs">@error('password') {{$message}} @enderror</span>
        </div>
        <button class="bg-dark-blue text-white p-1 rounded mt-2 w-64 ml-6 lg:ml-14 flex justify-center" type="submit">Register</button>
        <span class="flex mt-4 ml-6 mb-4 mr-6 text-center font-base text-dark-gray font-semibold">
            By signing up, you agree to our Data Policy, and Cookies Policy.
        </span>
    </form>
    <div class="bg-white row-start-3 col-start-2 col-span-3 md:col-start-2 md:col-span-1 border mt-2 mb-20 lg:col-start-3 h-16">
        <span class="flex mt-5 ml-16 lg:ml-24">Have an account? <a href="{{url('login')}}" class="text-blue ml-4">Log In!</a></span>
    </div>
    <div class="text-sm col-start-2 col-span-3 md:col-span-1 md:col-start-2 row-start-7 md:row-start-4 flex justify-center -mt-24 md:-mt-32 lg:col-start-3">
        Get the app.
    </div>
    <div class="flex h-9 gap-5 col-start-2 col-span-3 md:col-start-2 md:col-span-1 lg:col-start-3 row-start-7 md:row-start-4 ml-3 md:ml-4 -mt-16 md:-mt-24 lg:ml-14">
        <img src="img/appstore.png" alt="apple">
        <img src="img/googleplay.png" alt="gooplay">
    </div>
</body>
</html>
