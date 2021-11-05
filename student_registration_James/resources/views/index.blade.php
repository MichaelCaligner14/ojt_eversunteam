<html lang="en">
<head>
<meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />

   <link rel="stylesheet" href="css/app.css">
    <title>Students</title>
    

          
       

          </nav>
        </div>
      
        <!-- content -->
        <div class="flex-1 p-10 text-2xl font-bold">
            <img
            src=""
            
          />
        

    <div class="app flex flex-col w-full">
        
        <div class="flex-1  w-full">
        <header class="text-7xl flex-col w-23 h-20 text-gray-800 font-bold font-roboto" >Student Complain</header>
      
        <hr style="height:3px; background-color:black;" class="mb-5">

            <div class="flex-1 w-full"> 
            <input class="w-full rounded-md text-white py-5 bg-gray-700 text-sm h-8 flex-col text-center text-white-800 font-roboto" style=" border:1px solid; border-color:black;" type="text" name="username" id="username" placeholder="Please enter your name...">

  
        <div class="overflow-y-auto block h-96" id="messages"> </div>
            <form id="message_form" class="flex" >
                <input class="rounded-md border-border-gray flex-1" style="border:1px solid; border-color:black;" type="text" name="message" id="message_input" placeholder="Write a message..."/>

                <button type="submit" id="message_send" class= "py-1 px-2  bg-primarycolor mx-4 rounded-2 hover:bg-blue-700 text-white font-bold uppercase
                 text-lg mt-2 mr-46 transform bg-gray-600 transition-all duration-500 bg-black bg-opacity-90 rounded " >
                
                 <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" />
</svg>
                
                </button> 
                
                </form>
           
               
            </form>
     
            <a href="homepage" class=" text-white block py-2.5 px-4 text-center rounded transition duration-200 hover:bg-gray-700 hover:text-white "> 
                Home
               
                
            </a>
</div>
    </div>
    <script src="./js/app.js"></script>


    </body>
</html>