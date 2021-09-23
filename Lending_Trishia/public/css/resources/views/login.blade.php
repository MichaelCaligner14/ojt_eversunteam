<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Proza+Libre:wght@500;600&family=Roboto&family=Roboto+Condensed:wght@400;700&family=Ropa+Sans&display=swap"
    rel="stylesheet">
    
    <link rel="stylesheet" href="css/app.css">

    <title>Login</title>
</head>
<body>


    
    <div class="w-screen h-screen flex flex-col justify-center items-center lg:grid lg:grid-cols-2 p-6 text-white">
        <img src="images/img5.jpg" class="hidden lg:block" />
       
            <form class=" bg-primarycolor flex flex-col items-center lg:w-2/3 md:w-1/2 font-third h-full md:p-8 xs:w-full sm:w-2/3">
                <h2 class=" my-8 font-display font-bold text-xl text-white text-center">Login to Your Account</h2>
        
        
                <div class="relative w-9/12"><br><br>
                    <label class="text-sm">Email Address</label>
                    <input type="text" placeholder="Email Address" class="w-full h-10 border border-gray-200 p-3 text-sm rounded outline-none focus:border-blue-400" />
                </div>
        
                <div class="relative mt-4 w-9/12">
                    <label class="text-sm">Password</label>
                    <input type="password" placeholder="Password" class="w-full h-10 border border-gray-200 p-3 text-sm rounded outline-none focus:border-blue-400"/>
                </div>
        
                <div class="w-9/12 mt-2 mb-6">
                    <input type="checkbox" id="agree">
                    <label for="agree" class="text-gray-400 text-sm font-bold">Remember Me</label>
                </div>
                
                <a href="{{ url('home') }}" class="py-3 px-20 bg-black rounded-lg text-center text-white font-bold uppercase tex-lg mt-4 transform hover:translate-y-1 transition-all duration-500 w-9/12">Login</a>
                <h1 class="mt-6 text-gray-400">Don't have an account?<a href="{{ url('signup') }}" class="text-white"> Sign up</h1></a>
            </form>
        
    </div>
     
 


    
    
</body>
</html>