@extends('layouts.sidebar')
        @section('sidebarnav')
      
        <!-- content -->
        
        <div class="flex-1 text-2xl font-bold">
        <div class="bg-gray-200 px-6 py-4">
            <p class="w-full text-lg font-bold">EMPLOYEE SALARY</p>
          </div>
      
        <div class="grid sm:grid-flow-col mx-auto gap-4 ">
        <div class="grid px-12 grid-cols-1 gap-4 ">
          <div class="py-28 ">
            <div class="bg-gray-100 py-8 border text-black px-8 shadow">

            <h1> Total Number of Beneficiaries -> {{$cust}} </h1>
            <hr>

          
          </div>
         
        
        </div>
        </div>
        <form class="w-full mx-auto bg-gray-600 text-white max-w-sm  p-8 mt-6" action="addsalary" method="POST">
            @csrf
         <div class="grid grid-cols-1">
          <div>
              <p class="text-xl font-bold text-white mb-4 text-center">ADD DEDUCTION</p>
              <div class="flex flex-wrap -mx-3 mb-2">
                <div class="w-full px-3">
                  <label class="block uppercase tracking-wide text-xs font-bold mb-2">
                    Attendance ID
                  </label>
                  <input class="appearance-none block text-base w-full bg-white text-black border 
                  border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                   name="empattendance_id" type="text" value="{{old('empattendance_id')}}">
                   <span class="text-red-300 text-sm">@error('empattendance_id'){{$message}}@enderror</span>
                </div>
              </div>
              
              <div class="flex flex-wrap -mx-3 mb-2">
                <div class="w-full px-3">
                  <label class="block uppercase tracking-wide text-xs font-bold mb-2" >
                    Type of Deduction
                  </label>
                      <select id="grid-deduction"  class="appearance-none block w-full bg-white text-black border 
                        border-red-500 rounded text-base py-3 px-4 mb-3 leading-tight focus:outline-none
                         focus:bg-white" name="typeDeduction">
                        <option>PAG IBIG Contribution</option>
                        <option>Philhealth Contribution</option>
                        <option>SSS Contribution</option>
                        <option>Loans</option>
                       </select>
                </div>
              </div>
              <div class="flex flex-wrap -mx-3 mb-4">
                <div class="w-full px-3">
                  <label class="block uppercase tracking-wide text-xs font-bold mb-2">
                    Amount of Deduction
                  </label>
                  <input class="appearance-none block w-full bg-white text-black border 
                  border-red-500 rounded text-base py-3 px-4 mb-3 leading-tight focus:outline-none 
                  focus:bg-white" name="deductionAmount" type="number">
                  
                </div>
              </div>
              
              <button class="bg-blue-500 hover:bg-blue-700 w-full text-white text-base font-bold  py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                Submit
              </button>
              @if(Session::has('success'))
          <div class="text-white  text-center mt-6 text-sm border-0 rounded relative mb-4 ">{{Session::get('success')}}</div>
          @endif
          @if(Session::has('fail'))
          <div class="text-white text-sm text-center mt-6 border-0 rounded relative mb-4">{{Session::get('fail')}}</div>
          @endif
         
          </div>
            </div>
           </div>
        
        </form>
         
       
        <div class="flex px-40 py-6 mt-6 gap-6 justify-between">
                  <div class="flex-1">
                      <h1 class="w-full ">LIST OF EMPLOYEES</h1>
                  </div>
                 
                  <div>
                 
                       <input type="search" name="name" class=" pl-3 pr-4 py-1 text-base border-2 border-black-900 focus:outline-none text-black "
                  placeholder=".........">
                  <button class="bg-blue-700 text-base px-6 py-1 text-white " type="submit">Search</button>
                  </div>
                 
</div>
          
        <section class="container mx-auto font-sans">
          <div class="w-full overflow-hidden rounded-lg shadow-lg">
            <div class="w-full overflow-y-auto h-96">
              <table class="w-full text-base">
                <thead>
                  <tr class=" font-semibold tracking-wide text-left text-white bg-gray-700 uppercase border-b border-gray-600">
                    <th class="px-4 py-3">ID</th>
                    <th class="px-4 py-3">Attendance ID</th>
                    <th class="px-4 py-3">DEDUCTION</th>
                    <th class="px-4 py-3">TOTAL AMOUNT</th>
                    <th class="px-4 py-3">ACTION</th>
                   
                  </tr>
                </thead>
                <tbody class="bg-white">
                @foreach($data as $item)
                   <tr class="text-gray-700">
                    <td class="px-4 py-3 border">{{$item->id}}</td>
                    <td class="px-4 py-3 border">{{$item->empattendance_id}}</td>
                    <td class="px-4 py-3 border">
                      <h1>{{$item->deductionAmount}}</h1>
                    </td>
                    <td class="px-4 py-3 border">{{$item->deducted_salary}}</td>
                    <td class="px-4 py-3 border">
                      <a href="deletesalary/{{ $item->id }}" id="buttonmodal"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 fill-current text-red-400 float-left" viewBox="0 0 20 20" fill="currentColor">
                      <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                    </svg></a>
                  </td>
                    
                  </tr>
                </tbody>
                @endforeach
               
              </table>

            </div>
          </div>
        </section>
        </div>
        </div>  </div>
        <script src="sidebar.js"></script>
@endsection