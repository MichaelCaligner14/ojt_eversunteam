<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="css/app.css">
</head>
<body class="bg-baby-blue grid grid-cols-5 md:grid-cols-3 lg:grid-cols-5 grid-rows-7 lg:grid-rows-7">
    <div class="bg-white col-start-2 col-span-3 md:col-start-2 md:col-span-1 lg:col-start-3 lg:col-span-1 row-start-2 lg:row-start-2 row-span-1 lg:row-span-1 border pt-6 flex flex-wrap">
        <span class="underline font-bold text-4xl pl-24 lg:pl-32 font-condensed">EverCab</span>
        <span class="flex mt-4 ml-6 mb-4 mr-6 text-center font-semibold text-dark-gray">
            Sign up to submit ride reservations and get to your destination.
        </span>
        <a href="#" class="ml-16 lg:ml-24"><img src="img/fbicon.png" alt="fb" class="inline-block">Login with Facebook</a>
        <a href="#" class="ml-20 lg:ml-28"><img src="img/googleicon.png" alt="google" class="inline-block">Login with Google</a>
        <span class="block mt-2 ml-6 lg:ml-14">────────── OR ──────────</span>
        <input type="text" placeholder="Mobile number or email" class="text-sm w-64 bg-light-gray border ml-6 mt-2 lg:ml-14 p-2 rounded">
        <input type="text" placeholder="Full Name" class="text-sm w-64 bg-light-gray border ml-6 mt-2 lg:ml-14 p-2 rounded">
        <input type="text" placeholder="Username" class="text-sm w-64 bg-light-gray border ml-6 mt-2 lg:ml-14 p-2 rounded">
        <input type="text" placeholder="Password" class="text-sm w-64 bg-light-gray border ml-6 mt-2 lg:ml-14 p-2 rounded">
        <a href="{{url('dashboard')}}" class="bg-dark-blue text-white p-1 rounded mt-2 w-64 ml-6 lg:ml-14 flex justify-center">Log In</a>
        <span class="flex mt-4 ml-6 mb-4 mr-6 text-center font-base text-dark-gray font-semibold">
            By signing up, you agree to our Data Policy, and Cookies Policy.
        </span>
    </div>
    <div class="bg-white row-start-3 col-start-2 col-span-3 md:col-start-2 md:col-span-1 border mt-2 mb-20 lg:col-start-3 h-16">
        <span class="flex mt-5 ml-16 lg:ml-24">Have an account? <a href="{{url('login')}}" class="text-blue ml-4">Log In!</a></span>
    </div>
    <div class="text-sm col-start-2 col-span-3 md:col-span-1 md:col-start-2 row-start-4 flex justify-center -mt-32 lg:col-start-3">
        Get the app.
    </div>
    <div class="flex h-9 gap-5 col-start-2 col-span-3 md:col-start-2 md:col-span-1 lg:col-start-3 row-start-4 ml-3 md:ml-4 -mt-24 lg:ml-14">
        <img src="img/appstore.png" alt="apple">
        <img src="img/googleplay.png" alt="gooplay">
    </div>
</body>
</html>