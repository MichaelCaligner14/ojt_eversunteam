
<!doctype html>
<html>
<head>
  <!-- ... -->
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/app.css" >
  <title>Payroll System</title>
</head>
<body class="bg-gray-700 mx-auto">

<div class="py-32">
  <div class="grid text-center sm:grid-flow-col gap-6  ">
  
<div class="grid grid-cols-1 mx-auto">
    <div class="mx-auto">
    <p class="w-36 py-6 text-white w-52 text-2xl">Good Day, <span class="text-yellow-600">Admin!</span></p>
  </div>
      <div>
        <div class="bg-gray-600 shadow rounded-3xl" style="width: 500px; height: 600px;">
          <form class="w-full mx-auto bg-gray-600 text-white max-w-sm  p-6 mt-4">
            <img class="mx-auto pb-12" src="img/login.png">
  
            <div class="flex flex-wrap -mx-3 mb-4">
              <div class="w-full px-3">
              
                <input class="appearance-none rounded-3xl block text-base w-full bg-white text-black border 
                border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-username" type="text">
                <label class="block uppercase tracking-wide text-xs font-bold mb-2" for="grid-username">
                  Username
                </label>
              </div>
            </div>
            
            <div class="flex flex-wrap -mx-3 mb-4">
              <div class="w-full px-3">
               
                <input class="appearance-none rounded-3xl block w-full bg-white text-black border 
                border-red-500 rounded text-base py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-password" type="address">
                <label class="block uppercase tracking-wide text-xs font-bold mb-2" for="grid-address">
                  Password
                </label>
            </div>
          </div>
        
          <a href="{{ url('employee') }}"><button class="bg-white hover:text-white hover:bg-blue-700 w-36 text-black text-base font-bold mt-4 py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
              Login
          </a></button>
            <div class="pt-6">
            <div class="bg-gray-300 w-full" style="height: 3px;"></div>
            <a href="{{ url('signup') }}"><p class="pt-3">Create an Admin Account, <span class="text-yellow-500 font-bold">SIGN UP</span></a></p>
            </div>
          </div>
          </form>
</div>
      </div>
    </div>
    
    </div>
  </div>
</body>
</html>