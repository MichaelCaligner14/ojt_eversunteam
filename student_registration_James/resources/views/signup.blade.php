<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="./styles.css">
    <link rel="stylesheet" href="css/app.css">
</head>
<body>

    <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initials-scale=1.0">
    <title>School Registration</title>
    <link rel="stylesheet" href="./styles.css">
</head>
<body>
 
    <div
      class="w-screen h-screen flex flex-col justify-center items-center lg:grid lg:grid-cols-2"
    >
    
      <img
        src="./un.png" 
        
      />
      
      <div class="bg-gray-800 rounded-lg" style="width: 400px; height: 600px; float: right: 150px;"/>
      <form class="bg-casal-500 w-full h-screen flex flex-col justify-center items-center w-1/2">
        
        <h2
          class="my-8 font-roboto font-bold text-3xl text-white text-center"
        >
        
        Create an Account
        </h2>
        <div class="relative">
          <i class="fa fa-user absolute text-primarycolor text-xl"></i>

          <input
            type="text"
            placeholder="username"
            class="pl-8 p-1 font-roboto border-b-2 font-display focus:outline-none focus:border-primarycolor transition-all duration-500 capitalize text-lg"
          />
        </div>
        <div class="relative mt-8">
          <i class="fa fa-lock absolute text-primarycolor text-xl"></i>
          <input
            type="password"
            placeholder="password"
            class="pl-8 p-1 font-roboto border-b-2 font-display focus:outline-none focus:border-primarycolor transition-all duration-500 capitalize text-lg"
          />
        </div>
        <div class="relative mt-8">
            <i class="fa fa-lock absolute text-primarycolor text-xl"></i>
            <input
              type="password"
              placeholder="retype-password"
              class="pl-8 p-1 font-roboto border-b-2 font-display focus:outline-none focus:border-primarycolor transition-all duration-500 capitalize text-lg"
            />
          </div>
          <div class="flex mt-6">
            <label class="flex items-center">
              <input type="checkbox" class="form-checkbox">
              <span class="ml-3 text-white">I agree to the terms and condition</span></span>
            </label>
          </div>
          
        
        <a
        
          href="{{ url('home') }}"
          class="py-2 px-4 bg-primarycolor rounded-5 text-white font-bold uppercase text-lg mt-4 transform bg-black-600 transition-all duration-500 bg-black bg-opacity-90 rounded" style="width: 220px; height: 48px;"
          >Create an Account</a
        > 
          
        
      </form>
    </div>

</body>
</html>
    
</body>
</html>