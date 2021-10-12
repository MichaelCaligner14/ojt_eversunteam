
@extends('layouts.master')

@section('content')
      
        <!-- content -->
        <div class="flex-1  w-full">    
        <header class="bg-gray-900 p-4 font-bold text-right text-white  ">STUDENT REGISTRATION </header>
            <img
            src=""
            
          />
          <Br>
        
   
          @if(Session::get('success'))
          <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">{{Session::get('success')}}</div>
          @endif
          @if(Session::get('fail'))
          <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">{{Session::get('fail')}}</div>
          @endif
          
        <form action="addsubjects" method="post"  class=" border-2 border-gray-800 font-bold px-6 py-6 rounded-md" >

        @csrf
        <p class="text-6xl flex-col w-23 h-20 text-gray-800 font-bold font-roboto">List of Subject Offers (PROSPECTUS)</p>
        <hr style="height:5px; background-color:black;" class="mb-3">
       
       
        <table class="border-collapse w-full">
          
          <thead>
              <tr>
                  <th class="p-3 font-bold uppercase bg-blue-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Subject Code</th>
                  <th class="p-3 font-bold uppercase bg-blue-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Description</th>
                  <th class="p-3 font-bold uppercase bg-blue-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Time</th>
                  <th class="p-3 font-bold uppercase bg-blue-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Section</th>
              </tr>
          </thead>
          <tbody>

             

              <tr class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
                  <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                      <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Subject Code</span>
                      PE 101 (2021)
                  </td>
                  <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                      <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Description</span>
                      Physical Education   
                  </td>
                  <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                      <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Time</span>
                      9:00am - 10:00am
                  </td>
                  <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                      <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Section</span>
                      B502 
                  </td>
              </tr>

              
              <tr class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
                  <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                      <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Subject Code</span>
                      CC 102 (2021)
                  </td>
                  <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                      <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Description</span>
                      Computer Programming 1   
                  </td>
                  <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                      <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Time</span>
                     6:00am - 7:00am
                  </td>
                  <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                      <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Section</span>
                     B501 
                  </td>
              </tr>

               
              <tr class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
                  <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                      <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Subject Code</span>
                      Hum 101 (2021)
                  </td>
                  <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                      <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Description</span>
                      Art Appreciation
                  </td>
                  <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                      <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Time</span>
                      10:00am - 11:00am	
                  </td>
                  <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                      <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Section</span>
                      A504 
                  </td>
              </tr>

               
              <tr class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
                  <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                      <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Subject Code</span>
                      ESocSciPhil 101 (2021)
                  </td>
                  <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                      <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Description</span>
                      Gender and Society
                  </td>
                  <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                      <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Time</span>
                     2:00pm - 3:00pm
                  </td>
                  <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                      <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Section</span>
                     B505 
                  </td>
              </tr>

                
              <tr class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
                  <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                      <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Subject Code</span>
                      SciTech 101 (2021)
                  </td>
                  <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                      <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Description</span>
                      Science, Technology and Society
                  </td>
                  <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                      <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Time</span>
                     1:00pm - 2:00pm
                  </td>
                  <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                      <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Section</span>
                     B504 
                  </td>
              </tr>

                
              <tr class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
                  <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                      <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Subject Code</span>
                      Hist 101 (2021)
                  </td>
                  <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                      <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Description</span>
                      Readings in Philippine History
                  </td>
                  <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                      <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Time</span>
                     7:00am - 8:00am
                  </td>
                  <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                      <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Section</span>
                     A503 
                  </td>
              </tr>

                
              <tr class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
                  <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                      <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Subject Code</span>
                      Homeroom 101 (2021)
                  </td>
                  <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                      <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Description</span>
                      Personal Growth and Development
                  </td>
                  <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                      <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Time</span>
                     8:00am - 9:00am
                  </td>
                  <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                      <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Section</span>
                     A505
                  </td>
              </tr>

                
              <tr class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
                  <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                      <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Subject Code</span>
                      CC 101 (2021)
                  </td>
                  <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                      <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Description</span>
                      Introduction to Computing
                  </td>
                  <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                      <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Time</span>
                     11:00am - 12:00pm
                  </td>
                  <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                      <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Section</span>
                     A501    
                  </td>
              </tr>


              <tr class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
                  <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                      <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Subject Code</span>
                     Total Units: 26.00
                  </td>
                  <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                      <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Description</span>
                      
                  </td>
                  <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                      <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Time</span>
                    
                  </td>
                  <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                      <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Section</span>
                     
                  </td>
              </tr>


                
            </tbody>
        <br>
        
</table>

<br>


          <p class="text-lg font-roboto text-gray-800 mb-2 mt-2">Subject Code</p>
                <input class="w-3/5 px-3 py-1 border border-gray-800 rounded-md" type="text" placeholder="Enter Subject Code" name="subject" value="{{old('subject')}}">
               <br>
                <span class="text-red-800 text-sm">@error('subject') {{$message}} @enderror </span>

                <p class="text-lg font-roboto text-gray-800 mb-2 mt-2">Description</p>
                <input class="w-3/5 px-3 py-1 border border-gray-800 rounded-md" type="text" placeholder="Enter Description" name="description" value="{{old('description')}}">
                <br>
                <span class="text-red-800 text-sm">@error('description') {{$message}} @enderror </span>

                <p class="text-lg font-roboto text-gray-800 mb-2 mt-2">Time</p>
                
                <select class="form-control w-2/6 mt-2 mb-2 px-4 lg:py-1 xs:py-1 sm:py-1 border rounded-md
                border-gray-800 text-gray-600 focus:outline-none focus:border-green-500" id="" name="time" value="{{old('time')}}">
                            <option value="0">Select Time--</option>
                            <option value="6:00am - 7:00am">6:00am - 7:00am</option>
                            <option value="7:00am - 8:00am">7:00am - 8:00am</option>
                            <option value="8:00am - 9:00am">8:00am - 9:00am</option>
                            <option value="9:00am - 10:00am">9:00am - 10:00am</option>
                            <option value="10:00am - 11:00am">10:00am - 11:00am</option>
                            <option value="11:00am - 12:00am">11:00am - 12:00am</option>
                            <option value="1:00pm - 2:00pm">1:00pm - 2:00pm</option>
                          </select>
                <br>
                <span class="text-red-800 text-sm ">@error('time') {{$message}} @enderror </span>

                <p class="text-lg font-roboto text-gray-800 mb-2 mt-2">Section</p>
                <select class="form-control w-2/6 mt-2 mb-2 px-4 lg:py-1 xs:py-1 sm:py-1 border rounded-md
                border-gray-800 text-gray-600 focus:outline-none focus:border-green-500" id="" name="section" value="{{old('section')}}">
                            <option value="0">Select Section--</option>
                            <option value="A501">A501</option>
                            <option value="A502">A502</option>
                            <option value="A503">A503</option>
                            <option value="A504">A504</option>
                            <option value="A505">A505</option>
                            <option value="B501">B501</option>
                            <option value="B502">B502</option>
                            <option value="B503">B503</option>
                            <option value="B504">B504</option>
                            <option value="B505">B505</option>
                          </select>
                <br>
                <span class="text-red-800 text-sm ">@error('section') {{$message}} @enderror </span>

              
                <br>
                <button type="submit"
               class="py-1 px-2 bg-primarycolor hover:bg-blue-700 rounded-2 text-white font-bold uppercase text-lg mt-4 transform bg-gray-600 transition-all duration-500 bg-black bg-opacity-90 rounded" style="width: 90px; height: 58px;"
               >FINISH</button>

              </div>
     <footer class="w-full h-15 bg-gray-900 font-roboto static bottom-1 text-white text-right">
     <div class=" underline">CONTACT US</div>
       
    
      pinedajamesryan@gmail.com
      <br>
      223-2425-114
      
        
    </footer>
     
      </div>
      
</form>

</div>

</div>

    
      <script src="sdbr.js"></script>



      @endsection