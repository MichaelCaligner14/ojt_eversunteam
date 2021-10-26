@extends('layouts.master')
@section('title')
<title>Home</title>
@stop
@section('sidebar')
        
@section('content')   
    @section('header')
    @stop



            
        <div class="p-8">
            <h1 class="font-fourth font-bold text-3xl">Admin Dashboard</h1>
                <div class="flex flex-grid xs:flex-wrap lg:flex-nowrap gap-4">

                   <div class="flex-col bg-white text-black rounded-sm shadow-md lg:w-64 mt-6 xs:w-full h-auto overflow-hidden">
                        <h2 class="text-md mb-16  font-fourth font-bold p-3 bg-gray-200 text-black"> Borrowers
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block items-center float-right" viewBox="0 0 20 20"  fill="currentColor">
                        <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z" /></svg></h2>
                        <h2 class="text-4xl text-right text-bold px-2 pb-5 mr-5">{{ $cust}}</h2>
                    </div>
                    <div class="flex-col bg-white text-black rounded-sm shadow-md lg:w-64 mt-6 xs:w-full h-auto overflow-hidden">
                        <h2 class="text-md mb-16  font-fourth font-bold p-3 bg-gray-200 text-black"> Active Loans
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-flex items-center float-right" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg></h2>
                        <h2 class="text-4xl text-right text-bold px-2 pb-5 mr-5">{{ $act}}</h2>
                     </div>
                    <div class="flex-col bg-white text-black rounded-sm shadow-md lg:w-1/2 mt-6 xs:w-full overflow-hidden">
                        <h2 class="text-md mb-16  font-fourth font-bold p-3 bg-gray-200 text-black">Total Receivable
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-flex items-center float-right" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd" />
                        </svg></h2>  
                        <h2 class="text-4xl text-right text-bold px-2 pb-5 mr-5">₱ {{ $rcv}}</h2>
                    </div>
    
                </div>
            

                <!-- another part -->
            <div class="flex xs:flex-wrap lg:flex-nowrap justify-start xs:p-0 xs:justify-center mb-16 gap-4">
                <div class="flex flex-col bg-white text-black rounded-sm shadow-md lg:w-1/2 mt-6  w-full h-auto overflow-hidden">
                   <h2 class="text-md font-fourth font-bold p-3 mb-4 bg-gray-200 text-black">LOAN SIMULATOR</h2>
                  
                   <div class="flex">
                        <div class="w-1/2 px-3">
                            <label class="text-gray-600 font-semibold">Amount</label>
                            <input type="text" placeholder="Amount" name="loanAmount" id="loanAmount" class="w-full mt-2 mb-2 px-4 lg:py-1 xs:py-1 sm:py-1 border rounded-md
                            text-gray-600 focus:outline-none focus:border-green-500" value="" />
                        </div>
                        <div class="w-1/2 px-3">
                            <label class="text-gray-600 font-semibold">Terms of Payment</label>
                            <input type="text" placeholder="Terms of Payment" name="loanMonth" id="loanMonth" class="w-full mt-2 mb-2 px-4 lg:py-1 xs:py-1 sm:py-1 border rounded-md
                            text-gray-600 focus:outline-none focus:border-green-500" />
                        </div>
                       
                    </div>

                    <div class="flex">
                        <div class="w-1/2 px-3">
                            <label class="text-gray-600 font-semibold">Interest Rate</label>
                            <input type="text" placeholder="Interest Rate" name="loanInterest" id="loanInterest" class="w-full mt-2 mb-2 px-4 lg:py-1 xs:py-1 sm:py-1 border rounded-md
                            text-gray-600 focus:outline-none focus:border-green-500"  />
                        </div>
                    </div> 

                    <div class="flex">
                        <div class="w-1/2 px-3">
                            <label class="text-gray-600 font-semibold">Total Loan Amount</label>
                            <input type="text" placeholder="Total Amount" name="totalAmount"  id="totalAmount" class="w-full mt-2 mb-2 px-4 lg:py-1 xs:py-1 sm:py-1 border rounded-md
                            text-gray-600 focus:outline-none focus:border-green-500" value="" disabled/>
                        </div>
                        <div class="w-1/2 px-3 mb-10">
                            <label class="text-gray-600 font-semibold">Montly Amount</label>
                            <input type="text" placeholder="Montly Amount" name="monthlyPay" id="monthlyPay" class="w-full mt-2 mb-2 px-4 lg:py-1 xs:py-1 sm:py-1 border rounded-md
                            text-gray-600 focus:outline-none focus:border-green-500" value="" disabled>
                        </div>
                    </div>       
                        
                </div>


                <div class="flex flex-col bg-white text-black rounded-sm shadow-md lg:w-1/2 mt-6 xs:w-full overflow-hidden">
                   
                    <img src="images/img15.jpg" class="h-auto justify-start w-auto mt-2 inline-block">
                   
                        
                        <div>
                        </div>
                    </div>
                </div>

            </div>
                   

               
                


<script src="js/jquery-3.5.0.min.js"></script>
<script src="js/calc.js"></script>

            
@stop
