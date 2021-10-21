@extends('layouts.sidebar')
        @section('sidebarnav')
      



        <!-- content -->
        
        <div class="flex-1 text-2xl font-bold">
           
        <div class="bg-gray-200 px-6 py-4">
            <p class="w-full text-lg font-bold">EMPLOYEE RECORDS</p>
          </div>
          
          
       <div class="py-16">
         
                  <div class="flex px-16 gap-6 justify-between">
                  <div class="flex-1">
                      <h1 class="w-full ">LIST OF EMPLOYEES</h1>
                  </div>
                  <form action="{{route('search-record')}}" method="post">
                    @csrf
                  <div>
                 
                       <input type="search" name="name" class=" pl-3 pr-4 py-1 text-base border-2 border-black-900 focus:outline-none text-black "
                  placeholder="Enter employee name">
                  
                  <button class="bg-blue-700 text-base px-6 py-1 text-white " type="submit">Search</button>
                  </div>
                  </form>
</div>
     

                <section class="container mx-auto pb-24 pt-6  font-sans">
                  <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
                    <div class="w-full overflow-y-auto h-screen">
                      <table class="w-full text-base">
                        <thead>
                          <tr class=" font-semibold tracking-wide text-left text-white bg-gray-700 uppercase border-b border-gray-600">
                          <th class="px-4 py-3">ATTENDANCE ID</th>
                            <th class="px-4 py-3">EMPLOYEE ID</th>
                            <th class="px-4 py-3">NAME</th>
                            <th class="px-4 py-3">RATE</th>
                            <th class="px-4 py-3">Workdays</th>
                            <th class="px-4 py-3">Initial Amount</th> 
                            <th class="px-4 py-3">Action</th>
                            
                          </tr>
                        </thead>
                        <tbody class="bg-white">
                     
                        @foreach($data as $item)
                          <tr class="text-gray-700 border-black">
                            <td class="px-4 py-3 font-semibold border">{{$item->id}}</td>
                            <td class="px-4 py-3 font-semibold border">{{$item->empAdd_id}}</td>
                            <td class="px-4 py-3 font-semibold border">{{$item->name}}</td>
                            <td class="px-4 py-3 font-semibold border">{{$item->rate}}</td>
                            <td class="px-4 py-3 font-semibold border">{{$item->workdays}}</td>
                            <td class="px-4 py-3 font-semibold border"> {{$item->initialamount}}</td>
                  </td>
                    <td class="px-4 py-3 font-semibold border"> 
                      <a href="deleterecord/{{ $item->empAdd_id }}" id="buttonmodal"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 fill-current text-red-400 float-left" viewBox="0 0 20 20" fill="currentColor">
                      <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                    </svg></a>
                  </td>
                            
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