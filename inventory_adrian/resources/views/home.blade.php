@extends('layouts.homenavbar')

@section('content')
            <div class="flex justify-center items-center font-bold pt-16 pb-16">
            <!--DASHBOARD-->

            <div class="flex flex-wrap justify-center gap-x-32">
                <div class="flex flex-col bg-pixie-green-500 rounded-lg shadow-md w-60 m-6 overflow-hidden sm:w-52">
                     <svg class="m-6 h-52" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="black">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                      </svg> 
                        <a href="user" class="bg-casal-500 text-white p-3 text-center hover:bg-casal-700 transition-all duration-500">User</a>
                </div>

                <div class="flex justify-center gap-x-32">
                <div class="flex flex-col bg-pixie-green-500 rounded-lg shadow-md w-60 m-6 overflow-hidden sm:w-52">
                    <svg class="m-6 h-52" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                      </svg>
                    <a href="order" class="bg-casal-500 text-white p-3 text-center hover:bg-casal-700 transition-all duration-500">Order</a>
                
                </div>

                <div class="flex flex-col bg-pixie-green-500 rounded-lg shadow-md w-60 m-6 overflow-hidden sm:w-52">
                    <svg class="m-6 h-52" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                      </svg>
                
                    <a href="category" class="bg-casal-500 text-white p-3 text-center hover:bg-casal-700 transition-all duration-500">Category</a>
                
                </div>
            </div>

            <div class="flex flex-wrap justify-center gap-x-32">
                <div class="flex flex-col bg-pixie-green-500 rounded-lg shadow-md w-60 m-6 overflow-hidden sm:w-52">
                <svg class="m-6 h-52" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>
                    <a href="employee" class="bg-casal-500 text-white p-3 text-center hover:bg-casal-700 transition-all duration-500">Employee</a>
                
                </div>
                <div class="flex flex-col bg-pixie-green-500 rounded-lg shadow-md w-60 m-6 overflow-hidden sm:w-52">
                    <svg class="m-6 h-52" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                      </svg>
                    
                    <a href="product" class="bg-casal-500 text-white p-3 text-center hover:bg-casal-700 transition-all duration-500">Product</a>
    
                </div>
                <div class="flex flex-col bg-pixie-green-500 rounded-lg shadow-md w-60 m-6 overflow-hidden sm:w-52">
                    <svg class="m-6 h-52 " xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M3 14h18m-9-4v8m-7 0h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                      </svg>
                    
                    <a href="inventory" class="bg-casal-500 text-white p-3 text-center hover:bg-casal-700 transition-all duration-500">Inventory</a>
    
                </div>
                
            </div>
            
</div>

</div>

          <script src="script.js"></script> 
@endsection


