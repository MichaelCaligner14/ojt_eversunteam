@extends('layouts.master')
@section('title')
<title>Loan</title>
@stop
@section('sidebar')

@section('content')   
    @section('header')
    @stop
        
            <div class="p-8 ">
                <h1 class="font-fourth font-bold text-3xl tracking-widest">LOAN REQUEST</h1>
            </div>

            <div class="bg-white lg:w-3/4 mx-auto lg:px-16 xs:px-6 sm:px-6 md:px-10 shadow-xl">
                
            
                <div class="py-6">
                    <div class="mb-3">
                        <span class="font font-semibold">Loan Information</span>
                    </div>

                @if(Session::has('success'))
                <div class="bg-green-100 border border-green-400 mb-4x text-green-700 px-4 py-3 rounded relative" role="alert">{{ Session::get('success')}}</div>
                @endif
                @if(Session::has('fail'))
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">{{ Session::get('fail')}}</div>
                @endif

                <form action="addLoan" method="POST">
                  
                @csrf
                <h2 class=" font-display font-bold text-2xl text-white text-center">Create an Account</h2>
                        

                    <div class="flex justify-start mb-10">
                    <div class=" w-1/2 px-1 mt-0">
                        <label class="text-gray-600 font-light ">Applicant's Name:</label>
                        <input type="text" placeholder="" class="w-full mt-2 mb-2 px-4 lg:py-2 xs:py-1 sm:py-1 border rounded-md
                            text-gray-600 focus:outline-none focus:border-green-500" name="borrowers_id"/>
                        </div>
                    </div>
                    
                   

                    <div class="flex">
                        <div class=" w-1/2 px-1 mt-0">
                            <label class="text-gray-600 font-light ">Loan Amount</label>
                            <input type="text" placeholder="" class="w-full mt-2 mb-2 px-4 lg:py-2 xs:py-1 sm:py-1 border rounded-md
                            text-gray-600 focus:outline-none focus:border-green-500" name="loanAmount"/>
                        </div>
                        


                        <div class=" w-1/2 px-1 mt-0">
                        <label class="text-gray-600 font-light ">Loan Type</label>
                           <select class="form-control w-full mt-2 mb-2 px-4 lg:py-2 xs:py-1 sm:py-1 border rounded-md
                           text-gray-600 focus:outline-none focus:border-green-500" id="" value="loanType" name="loanType">
                           <option value="0"></option>
                           <option value="Emergency Loan">Emergency Loan</option>
                           <option value="Educational Loan">Educational Loan</option>
                           <option value="Personal Loan">Personal Loan</option>
                         </select>


                        </div>
                    </div>
                    <div class="flex">
                        <div class=" w-1/2 px-1 mt-0">
                        <label class="text-gray-600 font-light ">Months</label>
                            <select class="form-control w-full mt-2 mb-2 px-4 lg:py-2 xs:py-1 sm:py-1 border rounded-md
                            text-gray-600 focus:outline-none focus:border-green-500" id="" value="loanMonth" name="loanMonth">
                            <option value="0"></option>
                            <option value="3">3</option>
                            <option value="6">6</option>
                            <option value="9">9</option>
                          </select>


                        </div>
                        <div class=" w-1/2 px-1 mt-0">
                        <label class="text-gray-600 font-light ">Interest</label>
                            <select class="form-control w-full mt-2 mb-2 px-4 lg:py-2 xs:py-1 sm:py-1 border rounded-md
                            text-gray-600 focus:outline-none focus:border-green-500" id="" value="loanInterest" name="loanInterest">
                            <option value="0"></option>
                            <option value="3">3</option>
                            <option value="5">5</option>
                            <option value="8">8</option>
                          </select>
                        </div>
                    </div>
                    <div class="flex justify-between">
                        <div class=" w-1/2 px-1 mt-0">
                            <label class="text-gray-600 font-light ">Purpose</label>
                            <input type="text" placeholder="" name="loanPurpose" class="w-full mt-2 mb-2 px-4 lg:py-2 xs:py-1 sm:py-1 border rounded-md text-gray-600 focus:outline-none focus:border-green-500"/>
                        </div>
                        <div class=" lg:w-1/4 xs:w-1/4 sm:w-1/4 md:W-1/4 px-2 mt-0">
                            <button class="w-full  mt-8 mb-2 px-4 lg:py-2 xs:py-1 sm:py-1 border rounded-md bg-blue-500 text-white font-bold focus:outline-none focus:border-green-500">COMPUTE</button>
                        </div>
                    </div>
                    
                </div>
                <hr class="-mx-18 mt-2">
                <div class="py-6">
                    <div class="flex text-center mt-2">
                        <div class=" w-1/2 px-1 mt-0">
                            <h1 class="font-bold">Total Payable Amount</h1>
                            <h1 class="m-6 font-bold text-lg">0</h1>
                        </div>
                        <div class=" w-1/2 px-1 mt-0 ">
                            <h1 class="font-bold ">Monthly Payable Amount</h1>
                            <h1 class="m-6 font-bold text-lg">0</h1>
                        </div>
                    </div>
                    
                    <hr class="-mx-18 mt-2">
                    <div class="w-1/2 px-1 mt-6 mb-6">
                        <label class="text-gray-600 font-light ">Status</label>
                            <select class="form-control w-full mt-2 mb-2 px-4 lg:py-2 xs:py-1 sm:py-1 border rounded-md
                            text-gray-600 focus:outline-none focus:border-green-500" id="" name="loanStatus">
                            <option value="0"></option>
                            <option value="Approved">Approved</option>
                            <option value="Pending">Pending</option>
                          </select>
                    </div>
                </div> 
            </div>
            <div class="w-3/4 mx-auto py-6 flex justify-end">
                <button type="submit"  class="py-1 px-14 bg-blue-800 rounded-md text-center mr-4 text-white font-bold uppercase text-lg">SAVE</button>
                <button   class="py-1 px-12 bg-gray-800 rounded-md text-center mr-4 text-white font-bold uppercase text-lg">CANCEL</button>
            </div>
        </form>
    
@stop