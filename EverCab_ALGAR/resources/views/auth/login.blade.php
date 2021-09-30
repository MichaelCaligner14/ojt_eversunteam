<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/app.css">
</head>
<body class="bg-baby-blue grid grid-cols-5 md:grid-cols-3 lg:grid-cols-5 grid-rows-6 lg:grid-rows-6">
    <form class="bg-white col-start-2 col-span-3 md:col-start-2 md:col-span-1 lg:col-start-3 lg:col-span-1 row-start-2 lg:row-start-2 row-span-3 md:row-span-3 lg::row-span-3 lg:row-span-2 border pt-6" action="{{route('login-user')}}" method="post">
        @if(Session::has('success'))
            <div class="bg-green-100 border border-green-400 mb-4 text-green-700 px-4 py-3 rounded ml-8 mr-8">{{ Session::get('success')}}</div>
        @endif
        @if(Session::has('fail'))
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded ml-8 mr-8">{{ Session::get('fail')}}</div>
        @endif
        @csrf
        <span class="underline font-bold text-4xl pl-24 lg:pl-32 font-condensed">EverCab</span>
        <div>
            <input type="number text email" placeholder="Email" name="email" class="text-sm w-64 bg-light-gray border ml-6 mt-8 lg:ml-14 p-2 rounded" value="{{old('email')}}">
            <span class="text-red pl-6 text-xs">@error('email') {{$message}} @enderror</span>
        </div>
        <div>
            <input type="password" placeholder="Password" name="password" class="text-sm w-64 bg-light-gray border ml-6 mt-2 lg:ml-14 p-2 rounded">
            <span class="text-red pl-6 text-xs">@error('password') {{$message}} @enderror</span>
        </div>
        <button class="bg-dark-blue text-white p-1 rounded mt-2 w-64 ml-6 lg:ml-14 flex justify-center" type="submit">Log In</button>
        <span class="block mt-2 ml-6 lg:ml-14">────────── OR ──────────</span>
        <a href="#" class="flex ml-12 lg:ml-20"><img src="img/fbicon.png" alt="fb">Login with Facebook</a>
        <a href="#" class="flex ml-16 lg:ml-24"><img src="img/googleicon.png" alt="google">Login with Google</a>
    </form>
    <div class="bg-white col-start-2 col-span-3 md:col-span-1 row-start-5 md:row-start-4 md:col-start-2 border mt-2 mb-20 lg:col-start-3">
        <span class="flex md:mt-5 ml-6 lg:ml-16">Don't have an account? <a href="{{url('register')}}" class="text-blue ml-4">Sign up!</a></span>
    </div>
    <div class="text-sm col-start-2 col-span-3 md:col-span-1 md:col-start-2 row-start-6 md:row-start-5 -mt-16 lg:col-start-3 flex justify-center">
        Get the app.
    </div>
    <div class="flex h-9 gap-5 col-start-2 col-span-3 md:col-start-2 lg:col-start-3 row-start-6 md:row-start-5  ml-2 -mt-8 lg:ml-14">
        <img src="img/appstore.png" alt="apple">
        <img src="img/googleplay.png" alt="gooplay">
    </div>
</body>
</html>