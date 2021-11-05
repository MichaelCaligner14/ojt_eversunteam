<html lang="en">
<head>
<meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <link href="{{ asset('css/app.css') }}" rel="stylesheet">
   <link rel="stylesheet/less" type="text/css" href="css/style.less" />
   <script src="https://cdn.jsdelivr.net/npm/less@4.1.1" ></script>
    <title>Dashboard</title>
    
    <div class="flex-1 p-10 text-2xl font-bold">
            <img
            src=""
            
          />
      
        <!-- content -->
        <p class="text-6xl flex-col w-23 h-20 text-gray-800 font-bold font-roboto">Subject List Enrolled</p>
        <p>________________________________________________________________________________________________</p>
        <br>
    
        <table class="border-collapse w-full">
          <thead>
              <tr>
                  <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Subject Code</th>
                  <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Description</th>
                  <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Time</th>
                  <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Section/Instructor</th>
                  <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Actions</th>
                </tr>
          </thead>
          <tbody>

              @foreach ($lists as $subj)

              <tr class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
                  <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                      <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Subject Code</span>
                     {{$subj->subject}}
                  </td>
                  <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                      <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Description</span>
                      {{$subj->description}}
                  </td>
                  <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                      <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Time</span>
                      {{$subj->time}}
                  </td>
                  <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                      <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Section</span>
                      {{$subj->section}}
            </td>
            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                        <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Actions</span>
                        <div class="input-group">
 


                         <a href="dropsubj/{{$subj->id}}" class="py-1 px-2 bg-primarycolor mx-4 rounded-2 hover:bg-red-700 text-white uppercase text-sm mt-1 transform bg-red-400
                         transition-all duration-500 bg-black bg-opacity-90 rounded" style="width: 50px; height: 25px;">Drop</a>            
              </tr>

              @endforeach
          
            </tbody>

      </table>
               <br>
               <a class="py-1 px-2 bg-primarycolor hover:bg-green-700 mx-4 rounded-2 text-white font-bold uppercase text-lg mt-1 transform bg-green-600 transition-all duration-500 bg-black bg-opacity-90 rounded"
              style="width: 65px; height: 37px;" href="subjects">ADD SUBJECT</a>
        
             <a class="py-1 px-2 bg-primarycolor hover:bg-blue-700 mx-4 rounded-2 text-white font-bold uppercase text-lg mt-1 transform bg-gray-600 transition-all duration-500 bg-black bg-opacity-90 rounded"
              style="width: 65px; height: 37px;" href="homepage">DONE</a>
              
             
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