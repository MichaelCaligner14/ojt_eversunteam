
        @extends('layouts.sidebar')
        @section('sidebarnav')
      
        <!-- content -->
        <div class="flex-1  text-2xl font-bold">
        <div class="bg-gray-200 px-6 py-4">
            <p class="w-80 text-lg font-bold">EMPLOYEE ATTENDANCE</p>
          </div>
      <div class="p-10">
        <div class="grid md:grid-flow-col gap-4 ">
        <div class="grid grid-cols-1 gap-4">
          <div>
            <div class="py-6"><img class="w-96 h-full mx-auto" src="img/pic1.png"/></div>
          </div>
        </div>
        <div class="grid grid-cols-1 mx-auto">
          <div>
         
            <form class="w-full bg-gray-600 text-white max-w-lg  p-8 mt-6" action="addattendance" method="POST">
              @csrf
              <p class="text-xl font-bold text-white mb-4 text-center">ATTENDANCE</p>

              <div class="flex flex-wrap -mx-3 mb-4">
                <div class="w-full px-3">
                  <label class="block uppercase tracking-wide text-xs font-bold mb-2">
                    Employee ID
                  </label>
                  <input class="appearance-none block text-base w-full bg-white text-black border 
                  border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" name="empAdd_id" type="text" value="{{old('empAdd_id')}}">
                  <span class="text-red-300 text-sm">@error('empAdd_id'){{$message}}@enderror</span>
                </div>
              </div>
              
              
              <div class="flex flex-wrap -mx-3 mb-2">
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                  <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2">
                   date from
                  </label>
                  <input class=" text-base appearance-none block w-full bg-white text-black border border-gray-200
                   rounded py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="datefrom"
                    name="datefrom" type="date">
                </div>
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                  <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2">
                    date to
                  </label>
                  <input class="appearance-none block w-full text-base bg-white text-black border border-gray-200
                   rounded py-2 px-2 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="dateto"
                    name="dateto" type="date">
                </div>
                <div class="w-full md:w-1/4 px-3 mt-4 mb-6 md:mb-0">
                  <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2">
                   Rate
                  </label>
                  <input class="appearance-none block w-full text-base bg-white text-black border border-gray-200
                   rounded py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="rate"
                    name="rate" type="number"  min="100" value="{{old('rate')}}">
                </div>
                <div class="w-full md:w-1/4 px-3 mt-4 mb-6 md:mb-0">
                  <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2">
                   Absences
                  </label>
                  <input class="appearance-none block w-full text-base bg-white text-black border border-gray-200
                   rounded py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="absent"
                    name="absent" type="number">
                </div>
                <div class="w-full md:w-1/4 px-3 mt-4 mb-6 md:mb-0">
                  <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2">
                   Workdays
                  </label>
                  <input class="appearance-none block w-full text-base bg-white text-black border border-gray-200
                   rounded py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="workdays"
                    name="workdays" type="number">
                  
                </div>
                <div class="w-full md:w-1/4 px-3 mt-4 mb-6 md:mb-0">
                  <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2">
                   InitialAmount
                  </label>
                  <input class="appearance-none block w-full text-base bg-white text-black border border-gray-200
                   rounded py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="initialamount"
                    name="initialamount" type="number">
                  
                </div>
                
</div>
              <div class="flex flex-wrap -mx-3 mb-2">
                <div class="w-full px-3 mb-6 md:mb-0">
                  
           
                    <button class="bg-blue-500 hover:bg-blue-700 w-full text-white text-base font-bold mt-6 py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
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
            </form>
            
          </div>
        </div>
  
        </div>
     
        <div class="grid grid-cols-1 pt-20 mx-auto md:grid-cols-3">
          <div class="py-20">
            <div class="text-center bg-indigo-900">
                <div class="py-6">
              <p class="text-base  py-2 text-white">Cutoff  </p>
              <div class="w-48 py-1 mx-auto bg-gray-300"></div>
              <p class="text-base  py-2 text-white">15th Day of the Month</p>
          </div></div>
            </div>

            <div class="py-10">
              <div class="text-center bg-blue-700">
                  <div class="py-16">
                <p class="text-base  py-2 text-white">Goals</p>
                <div class="w-48 py-1 mx-auto bg-gray-300"></div>
                <p class="text-base  py-2 text-white">Efficiency and Success</p>
            </div></div>
              </div>
           <div class="py-20">
  <div class="text-center bg-indigo-900">
      <div class="py-6">
    <p class="text-base  py-2 text-white">Salary</p>
    <div class="w-48 py-1 mx-auto bg-gray-300"></div>
    <p class="text-base  py-2 text-white">Depends on your Job</p>
</div></div>
  </div>
        </div>

        </div>
        </div>  </div>
</div>
        <script src="sidebar.js"></script>
        <script src="js/jquery-3.5.0.min.js"></script>
        <script src="js/workdays.js"></script>
        <script src="js/initialamount.js"></script>
@endsection

