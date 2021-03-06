<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Proza+Libre:wght@500;600&family=Roboto&family=Roboto+Condensed:wght@400;700&family=Ropa+Sans&display=swap"
    rel="stylesheet">

    <link rel="stylesheet" href="css/app.css">
    <title>Register</title>
</head>
<body>


    
    <div class="w-screen h-screen flex flex-col justify-center items-center lg:grid lg:grid-cols-2 p-6">
        
        
            <form action="{{ route('register-user') }}" method="post" 
            class=" bg-primarycolor flex flex-col justify-center items-center font-third h-full p-5 lg:w-4/6 xs:w-full sm:w-2/3 md:w-1/2 lg:ml-24 xs:ml-0">
                @if(Session::has('success'))
                <div class="bg-green-100 border border-green-400 mb-4 text-green-700 px-4 py-3 rounded relative" role="alert">{{ Session::get('success')}}</div>
                @endif
                @if(Session::has('fail'))
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">{{ Session::get('fail')}}</div>
                @endif
                @csrf
                <h2 class=" font-display font-bold text-2xl text-white text-center">Create an Account</h2>
        
                
                <div class="relative w-9/12"><br><br>
                    <label class="text-white text-sm">Name</label>
                    <input type="text" placeholder="Name" name="name" value="{{ old('name') }}" class="w-full h-10 border border-gray-200 p-3 text-sm rounded outline-none focus:border-blue-400" />
                    <span class="text-danger text-red-700">@error('name'){{ $message }} @enderror</span>
                </div><br>

                <div class="relative w-9/12">
                    <label class="text-white text-sm">Email Address</label>
                    <input type="text" placeholder="Email Address" name="email" value="{{ old('email') }}" class="w-full h-10 border border-gray-200 text-sm p-3 rounded outline-none focus:border-blue-400" />
                    <span class="text-danger text-red-700">@error('email'){{ $message }} @enderror</span>
                </div>

                <div class="relative mt-4 w-9/12">
                    <label class="text-white text-sm ">Password</label>
                    <input type="password" placeholder="Password" name="password" class="w-full h-10 border border-gray-200 p-3 text-sm rounded outline-none focus:border-blue-400"/>
                    <span class="text-danger text-red-700">@error('password'){{ $message }} @enderror</span>
                </div>
        
                <div class="w-9/12 mt-2 mb-6">
                    <input type="checkbox" id="agree">
                    <label for="agree" class="text-gray-400 text-sm font-bold">I Agree to Terms and Conditions.</label>
                </div>
                
                <button type="submit" class="py-3  bg-black rounded-lg text-center text-white font-bold uppercase tex-lg mt-4 transform hover:translate-y-1 transition-all duration-500 w-9/12">
                    CREATE ACCOUNT</button>
                    <h1 class="text-gray-400 mt-6 ">Already registered? <a href="login" class=" text-white"> Sign in</a></h1>
                 
            </form>
      
           

                <img src="images/img7.jpg" class="hidden lg:block " />
        
        </div>
     
 


    
    
</body>
</html>