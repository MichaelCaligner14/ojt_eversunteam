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
            <div><p class="  text-2xl font-bold">TOTAL AMOUNT OF SALARY</p></div>
            <div><p class="  text-sm  font-bold">18,000.00</p></div>
          </div>
          <div class="grid md:grid-cols-1 mx-auto gap-6 px-4 pt-8 ">
            <div class="mx-auto">
                <button class="bg-blue-500 hover:bg-gray-700 float-left text-white text-base font-bold  py-2 px-16 rounded focus:outline-none focus:shadow-outline" type="button">
                    Submit
                  </button>
                  <button class="bg-gray-500 hover:bg-blue-700 float-left text-white text-base font-bold  py-2 px-16 rounded focus:outline-none focus:shadow-outline" type="button">
                    Cancel
                  </button>
                </div>
       
        </div>
        
        </div>
        </div>
        
        <div class="grid grid-cols-1">
          <div>
            <form class="w-full mx-auto bg-gray-600 text-white max-w-sm  p-8 mt-6">
              <p class="text-xl font-bold text-white mb-4 text-center">ADD SALARY</p>
    
              <div class="flex flex-wrap -mx-3 mb-2">
                <div class="w-full px-3">
                  <label class="block uppercase tracking-wide text-xs font-bold mb-2" for="grid-username">
                    Employee ID
                  </label>
                  <input class="appearance-none block text-base w-full bg-white text-black border 
                  border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-username" type="text" placeholder="Full Name">
                </div>
              </div>
              
              <div class="flex flex-wrap -mx-3 mb-2">
                <div class="w-full px-3">
                  <label class="block uppercase tracking-wide text-xs font-bold mb-2" for="grid-deduction">
                    Type of Deduction
                  </label>
              
                      <select id="grid-deduction"  class="appearance-none block w-full bg-white text-black border 
                        border-red-500 rounded text-base py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" form="carform">
                        <option value="volvo">PAG IBIG Contribution</option>
                        <option value="saab">Philhealth Contribution</option>
                        <option value="opel">SSS Contribution</option>
                        <option value="audi">Loans</option>
                       </select>
                 
                </div>
              </div>
              <div class="flex flex-wrap -mx-3 mb-4">
                <div class="w-full px-3">
                  <label class="block uppercase tracking-wide text-xs font-bold mb-2" for="grid-address">
                    Amount of Deduction
                  </label>
                  <input class="appearance-none block w-full bg-white text-black border 
                  border-red-500 rounded text-base py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-password" type="number" placeholder="Davao City...">
                </div>
              </div>
              
              <button class="bg-blue-500 hover:bg-blue-700 w-full text-white text-base font-bold  py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                Calculate
              </button>
            </form>
          </div>
        </div>
        
        </div>
     
       
        <div class="flex px-16 py-6 mt-6 gap-6 justify-between">
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
            <div class="w-full overflow-y-auto">
              <table class="w-full text-base">
                <thead>
                  <tr class=" font-semibold tracking-wide text-left text-white bg-gray-700 uppercase border-b border-gray-600">
                    <th class="px-4 py-3">ID</th>
                    <th class="px-4 py-3">NAME</th>
                    <th class="px-4 py-3">DEDUCTION</th>
                    <th class="px-4 py-3">TOTAL AMOUNT</th>
                   
                  </tr>
                </thead>
                <tbody class="bg-white">

                   <tr class="text-gray-700">
                    <td class="px-4 py-3 border">
                      <h1 class="">1333</h1>
                    </td>
                    <td class="px-4 py-3 font-semibold border">Michael John Caligner</td>
                    <td class="px-4 py-3 border">
                      <h1>300</h1>
                    </td>
                    <td class="px-4 py-3 border">15</td>
                    
                  </tr>

                   <tr class="text-gray-700">
                    <td class="px-4 py-3 border">
                      <h1 class="">1333</h1>
                    </td>
                    <td class="px-4 py-3 font-semibold border">Michael John Caligner</td>
                    <td class="px-4 py-3 border">
                      <h1>300</h1>
                    </td>
                    <td class="px-4 py-3 border">15</td>
                    
                  </tr>

                  <tr class="text-gray-700">
                    <td class="px-4 py-3 border">
                      <h1 class="">1333</h1>
                    </td>
                    <td class="px-4 py-3 font-semibold border">Michael John Caligner</td>
                    <td class="px-4 py-3 border">
                      <h1>300</h1>
                    </td>
                    <td class="px-4 py-3 border">15</td>
                    
                  </tr>

                   <tr class="text-gray-700">
                    <td class="px-4 py-3 border">
                      <h1 class="">1333</h1>
                    </td>
                    <td class="px-4 py-3 font-semibold border">Michael John Caligner</td>
                    <td class="px-4 py-3 border">
                      <h1>300</h1>
                    </td>
                    <td class="px-4 py-3 border">15</td>
                    
                  </tr>

                   <tr class="text-gray-700">
                    <td class="px-4 py-3 border">
                      <h1 class="">1333</h1>
                    </td>
                    <td class="px-4 py-3 font-semibold border">Michael John Caligner</td>
                    <td class="px-4 py-3 border">
                      <h1>300</h1>
                    </td>
                    <td class="px-4 py-3 border">15</td>
                    
                  </tr>
               
                  

                
                 
                </tbody>
              </table>

            </div>
          </div>
        </section>
        </div>
        </div>  </div>
        <script src="sidebar.js"></script>
@endsection