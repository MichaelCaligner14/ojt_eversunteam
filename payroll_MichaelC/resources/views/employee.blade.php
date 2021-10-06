
<!doctype html>
<html>
<head>
  <!-- ... -->
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <title>Payroll System</title>
</head>
<body>
    <div class="relative min-h-screen md:flex">

        <!-- responsive -->
        <div class="bg-gray-800 text-gray-100 flex justify-between md:hidden">
          <a href="index.html" class="block p-4 text-white font-bold">Payroll</a>
          <button class="mobile-menu-button p-4 focus:outline-none focus:bg-gray-700">
            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
          </button>
        </div>
      
        <!-- sidebar -->
        <div  class="sidebar absolute text-white text-base w-64 bg-gray-700 space-y-6 py-7 px-2 inset-y-0 left-0 
        transform -translate-x-full md:relative md:translate-x-0 transition duration-200 ease-in-out">

         <img src="img/admin.png" class=" mx-auto py-4 w-48 h-36">
         <p class="text-center  font-bold">Payroll Manager</p>
         <p class="text-center   pb-5">Admin</p>
         
         <!-- nav -->
          <nav class="text-center pb-24">
            <a href="employee" class="py-4 m-3 rounded transition duration-200 justify-center flex hover:bg-blue-400 pl-8">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z" />
              </svg><span class="px-6">EMPLOYEES</span></a>

              <a href="attendance" class="py-4 m-3 rounded transition duration-200 justify-center flex hover:bg-blue-400 pl-10">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                  <path d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z" />
                </svg><span class="px-6">ATTENDANCE</span></a>
          
          
                <a href="records" class="py-4 m-3 rounded transition duration-200 justify-center flex hover:bg-blue-400 pl-3">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4l2 2h4a2 2 0 012 2v1H8a3 3 0 00-3 3v1.5a1.5 1.5 0 01-3 0V6z" clip-rule="evenodd" />
                    <path d="M6 12a2 2 0 012-2h8a2 2 0 012 2v2a2 2 0 01-2 2H2h2a2 2 0 002-2v-2z" />
                  </svg><span class="px-6">RECORDS</span></a>

             <a href="salary" class="py-4 m-3 rounded transition duration-200 justify-center flex hover:bg-blue-400">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z" />
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z" clip-rule="evenodd" />
              </svg><span class="px-6">SALARY</span></a>

              <a href="logout" class="py-4 m-3 rounded transition duration-200 justify-center flex hover:bg-blue-400">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z" clip-rule="evenodd" />
                  </svg><span class="px-5">LOGOUT</span></a>
            
          </nav>
          <div class="pb-56">
          <p class="w-full h-5 text-sm text-white px-4">Contact Us</p>
          <hr style="border:solid;height: 5px;background-color: white;" class="m-4">
          <p class="w-full h-5 text-sm text-white px-4">Eversun Software</p>
          <p class="patrick.v@agentsofvalue.com w-48 h-5 text-sm text-white px-4">patrick.v@agentsofvalue.com</p>
          <p class="agentsofvalue.com w-32 h-6 text-sm text-white px-4">agentsofvalue.com</p>
            </div>
          
        </div>
      
        <!-- content -->
        <div class="flex-1 p-10 text-2xl font-bold">
            
            <p class="w-80 h-12 text-2xl font-bold">EMPLOYEES</p>
            <div class="bg-gray-300" style="width: full; height: 5px;">

        <div class="grid md:grid-flow-col gap-4 ">
        <div class="grid grid-cols-1 gap-4">
          <div>
            <div class="py-12"><img class="w-96 h-56 mx-auto" src="img/emp.png"/></div>
            <div> <p class=" w-full  text-2xl text-center font-bold">Macademia Payroll System </p></div>
            <div>  <p class="w-full text-sm  text-center font-bold">Don’t Forget to Smile, While Working!</p></div>
          </div>
        </div>
        <div class="grid grid-cols-1 mx-auto">
          <div>

            <form class="w-full bg-gray-600 text-white max-w-sm  p-8 mt-6" action="add" method="POST">
  
              @csrf
              <p class="text-xl font-bold text-white mb-4 text-center">NEW EMPLOYEE</p>
    
              <div class="flex flex-wrap -mx-3 mb-4">
                <div class="w-full px-3">
                  <label class="block uppercase tracking-wide text-xs font-bold mb-2 mr-8" >
                    Name
                  </label>
                  <input class="appearance-none block text-base w-full bg-white text-black border 
                  border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"  name="name" type="text" placeholder="Full Name" value="{{old('name')}}">
                 
                </div>
              </div>
              
              <div class="flex flex-wrap -mx-3 mb-4">
                <div class="w-full px-3">
                  <label class="block uppercase tracking-wide text-xs font-bold mb-2">
                    Address
                  </label>
                  <input class="appearance-none block w-full bg-white text-black border 
                  border-red-500 rounded text-base py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" name="address" type="text" placeholder="Davao City..." value="{{old('address')}}">
               
                </div>
              </div>
    
              <div class="flex flex-wrap -mx-3 mb-2">
                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                  <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2">
                   Age
                  </label>
                  <input class="appearance-none block w-full text-base bg-white text-black border border-gray-200 rounded py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="age" type="number" min="1" max="100" value="{{old('age')}}">
                  
                </div>
                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                  <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2">
                    Sex
                  </label>
                  <div class="relative">
                    <select class="block appearance-none w-full bg-white border border-gray-20e text-black py-2 text-base px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="sex">
                      <option>Male</option>
                      <option>Female</option>
                      
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-e text-black">
                      <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                    </div>
                  </div>
                </div>
                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                  <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2">
                   Rate
                  </label>
                  <input class="appearance-none block w-full text-base bg-white text-black border border-gray-200 rounded py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="rate" type="number" min="100" value="{{old('rate')}}">
                </div>
             
              </div>
              <button class="bg-blue-500 hover:bg-blue-700 w-full text-white text-base font-bold mt-6 py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                Submit
              </button>
            </form>
          </div>
        </div>
        </div>
     
          
        <section class="container mx-auto p-6 font-sans">
          <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
            <div class="w-full overflow-y-auto">
              <table class="w-full text-base">
                <thead>
                  <tr class=" font-semibold tracking-wide text-left text-white bg-gray-700 uppercase border-b border-gray-600">
                    <th class="px-4 py-3">ID</th>
                    <th class="px-4 py-3">NAME</th>
                    <th class="px-4 py-3">ADDRESS</th>
                    <th class="px-4 py-3">AGE</th>
                    <th class="px-4 py-3">SEX</th>
                    <th class="px-4 py-3">RATE</th>
                    <th class="px-4 py-3">ACTION</th>
                   
                  </tr>
                </thead>
                <tbody class="bg-white">
                 @foreach($list as $item)
                   <tr class="text-gray-700">
             
                    <td class="px-4 py-3 border">
                      <h1 class="">{{$item->id}}</h1>
                    </td>
                    <td class="px-4 py-3 font-semibold border">{{$item->name}}</td>
                    <td class="px-4 py-3 border">{{$item->address}}</td>
                    <td class="px-4 py-3 border">
                      <h1>{{$item->age}}</h1>
                    </td>
                    <td class="px-4 py-3 border">{{$item->sex}}</td>
                    <td class="px-4 py-3 border">{{$item->rate}}</td>
                
                    <td class="px-4 py-3 border">
                      <a href="edit/{{$item->id}}"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 float-left" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                        <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
                      </svg></a>

                      
                      <a href="#" id="buttonmodal"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 fill-current text-red-400 float-left" viewBox="0 0 20 20" fill="currentColor">
                      <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                    </svg></a>

        

                  </td>
                  </tr>
                @endforeach
                </tbody>
              </table>

              <div id="modal" class="fixed top-0 left-0 bg-black bg-opacity-50
               w-screen h-screen flex items-center justify-center  transform
                scale-0">
    <!-- Modal content -->
    <div class="bg-gray-200 w-auto rounded h-auto p-6"> 
        <!-- Test content -->
        <p>Delete this employee from table?</p>
        <div class="mt-6">
        <div class="mt-3 flex justify-end space-x-3">
                <button id="closebutton" class="px-3 py-1 rounded bg-black text-white hover:bg-red-300 hover:bg-opacity-50 hover:text-red-900 text-base">Cancel</button>
                <a href="delete/{{ $item->id }}"  class="px-3 py-1 bg-red-800 text-gray-200 hover:bg-red-600 rounded text-base">delete</a>
        </div>
    </div>
</div>
</div>

            </div>
          </div>
        </section>
        </div>
        </div>  </div>

      <script src="sidebar.js"></script>
      <script src="delete.js"></script>
</body>
</html>