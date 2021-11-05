<html lang="en">
<head>
<meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />

   <link rel="stylesheet" href="css/app.css">
    <title>Students</title>
    

              <br>
           
        

          </nav>
        </div>
      
        <!-- content -->
        <div class="flex-1 p-10 text-2xl font-bold">
            <img
            src=""
            
          />
        
   
         

        @csrf
        <p class="text-6xl flex-col w-23 h-20 text-gray-800 font-bold font-roboto">List of Students Enrolled</p>
        <hr style="height:3px; background-color:black;" class="mb-3">
    
     
        <form action="{{route('search-record')}}" method="post">
    {{csrf_field()}}

       <div class="text-gray-800">
           Search:
        <input type="text" name="id" placeholder="Search ID #" class="rounded-full text-black bg-white-300 pl-5 h-8" style="width: 25%; border:1px solid; border-color:black;"> 
      
       </div>
</form>
    <div class=" w-full overflow-y-auto h-96" >
          <table class="border-collapse w-full">
              
            <thead>
                <tr>
                <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">ID</th>
                    <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">First Name</th>
                    <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Middle Name</th>
                    <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Last Name</th>
                    <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Birthday</th>
                    <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Address</th>
                    <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Gender</th>
                    <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Course List</th>
                    <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Mobile Number</th>
                    <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Parents/Guardian Name</th>
                    <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Parents/Guardian Mobile Number</th>
                    <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Actions</th>

                </tr>
            </thead>
            <tbody>
                

                @foreach ($list as $item)

                
                
                
                <tr class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
                <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                        <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">ID</span>
                        {{$item ->id}}
                    </td>
                <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                        <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">First Name</span>
                        {{$item ->first}}
                    </td>
                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                        <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Middle Name</span>
                        {{$item ->middle}}
                    </td>
                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                        <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Last Name</span>
                        {{$item ->last}}
                    </td>
                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                        <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Birthday</span>
                        {{$item ->birthday}}
                    </td>
                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                        <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Address</span>
                        {{$item ->address}}
                    </td>
                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                        <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Gender</span>
                        {{$item ->gender}}
                    </td>
                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                        <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Course List</span>
                        {{$item ->courselist}}
                    </td>
                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                        <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Mobile Number</span>
                        {{$item ->mobilenumber}}
                    </td>
                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                        <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Parents/Guardian Name</span>
                        {{$item ->parentsguardianname}}
                    </td>
                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                        <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Parents/Guardian Mobile Number</span>
                        {{$item ->parentsguardiannumber}}
                    </td>

                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                        <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Actions</span>
                        <div class="input-group">

                        <a href="delete/{{$item->id}}" class="py-1 px-2 bg-primarycolor mx-4 rounded-2 hover:bg-red-700 text-white font-bold uppercase text-lg mt-1 transform bg-red-400
                         transition-all duration-500 bg-black bg-opacity-90 rounded" style="width: 50px; height: 25px;">Delete</a>   
<br>
<br>
                         <a href="edit/{{$item->id}}" class="py-1 px-2 bg-primarycolor mx-4 rounded-2 hover:bg-green-700 text-white font-bold uppercase text-lg mt-1 transform bg-green-400
                         transition-all duration-500 bg-black bg-opacity-90 rounded" style="width: 65px; height: 37px;">Edit</a>             
                    </td>
                   
                </tr>
                
               @endforeach
            </tbody>
        </table>
</div>
               
                
               <br>
               
        
               <a
        
               href="homepage"
               class="py-1 px-2 bg-primarycolor mx-4 rounded-2 hover:bg-blue-700 text-white font-bold uppercase text-lg mt-1 transform bg-gray-600 transition-all duration-500 bg-black bg-opacity-90 rounded" style="width: 65px; height: 37px;"
               >Done</a
             > 
             
      </div>
      
        
      </div>

     
     
            <div>
           


        </div>
        
      </div>

      </div>

    
    


      </div>
     
      <script src="script.js"></script>
</body>
</html>