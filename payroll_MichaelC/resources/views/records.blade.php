@extends('layouts.sidebar')
        @section('sidebarnav')
      



        <!-- content -->
        
        <div class="flex-1 text-2xl font-bold">
           
        <div class="bg-gray-200 px-6 py-4">
            <p class="w-full text-lg font-bold">EMPLOYEE RECORDS</p>
          </div>
          
                <div class="flex-1 justify-between px-24 pt-16 pb-4 ">
                <div class="px-16">
         
</div>
                 </div>
                  
                  <div class="flex px-16 gap-6 justify-between">
                  <div class="flex-1">
                      <h1 class="w-full ">LIST OF EMPLOYEES</h1>
                  </div>
                  <div>
                       <input type="search"
                  class=" pl-10 pr-4 py-1 text-base border-2 border-black-900 focus:outline-none text-black "
                  placeholder="........."><button class="bg-blue-700 text-base px-6 py-1 text-white">Search</button>
                  </div>
</div>
            

                <section class="container mx-auto pb-24 pt-6  font-sans">
                  <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
                    <div class="w-full overflow-x-auto">
                      <table class="w-full text-base">
                        <thead>
                          <tr class=" font-semibold tracking-wide text-left text-white bg-gray-700 uppercase border-b border-gray-600">
                            <th class="px-4 py-3">ID</th>
                            <th class="px-4 py-3">NAME</th>
                            <th class="px-4 py-3">RATE</th>
                            <th class="px-4 py-3">Hours</th>
                            
                          </tr>
                        </thead>
                        <tbody class="bg-white">
                     
                        @foreach($data as $item)
                          <tr class="text-gray-700 border-black">
                            <td class="px-4 py-3 font-semibold border">
                              <h1 class="">{{$item->id}}</h1>
                            </td>
                            <td class="px-4 py-3 font-semibold border">{{$item->name}}</td>
                            <td class="px-4 py-3 border">
                              <h1>{{$item->rate}}</h1>
                            </td>
                            <td class="px-4 py-3 border">{{$item->hours}}</td>
                        
                            
                          </tr>
                          @endforeach
                        </tbody>
                      </table>

                    </div>
                  </div>
                </section>
               
              
                
                </div>
    
    
    
    
    
    </div>

    <script src="sidebar.js"></script>
@endsection