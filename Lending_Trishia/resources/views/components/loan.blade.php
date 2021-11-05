@extends('layouts.master')
@section('title')
<title>Loan</title>
@stop
@section('sidebar')

@section('content')   
    @section('header')
    @stop
        
            <div class="p-8 ">
            </div>

            <div class="bg-white lg:w-3/4 mx-auto lg:px-16 xs:px-6 sm:px-6 md:px-10 shadow-xl">
                
            
                <div class="py-6">
                    <div class="mb-3">
                    @if(Session::has('success'))
                    <div class="bg-green-100 border border-green-400 mb-4x text-green-700 px-4 py-3 rounded relative" role="alert">{{ Session::get('success')}}</div>
                    @endif
                    @if(Session::has('fail'))
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">{{ Session::get('fail')}}</div>
                    @endif

                        <span class="font font-semibold text-xl">Loan Information</span>
                    </div>

                
                <form action="addLoan" method="post">
                    @csrf

                    <div class="flex justify-start mb-10">
                        <div class=" w-1/2 px-1 mt-2">
                            <label class="text-gray-600 font-semibold">ID No.</label>
                            <input type="text" placeholder="" class="w-full mt-2 mb-2 px-4 lg:py-2 xs:py-1 sm:py-1 border rounded-md
                                text-gray-600 focus:outline-none focus:border-green-500" name="borrowers_id"/>
                            </div>
                        </div>
                    
                        <div class="flex">
                            <div class=" w-1/2 px-1 mt-0">
                            <label class="text-gray-600 font-semibold ">Loan Type</label>
                            <select class="form-control w-full mt-2 mb-2 px-4 lg:py-2 xs:py-1 sm:py-1 border rounded-md
                            text-gray-600 focus:outline-none focus:border-green-500" id="" value="loanType" name="loanType">
                            <option value="0"></option>
                            <option value="Emergency Loan">Emergency Loan</option>
                            <option value="Educational Loan">Educational Loan</option>
                            <option value="Personal Loan">Personal Loan</option>
                            </select>
                            </div>
                        
                            <div class=" w-1/2 px-1 mt-0">
                            <label class="text-gray-600 font-semibold ">Loan Amount</label>
                                <input type="text" placeholder="" class="w-full mt-2 mb-2 px-4 lg:py-2 xs:py-1 sm:py-1 border rounded-md
                                text-gray-600 focus:outline-none focus:border-green-500" name="loanAmount" id="loanAmount"/>
                            </div>
                        </div>

                        <div class="flex">
                            <div class=" w-1/2 px-1 mt-0">
                            <label class="text-gray-600 font-semibold ">Months</label>
                                <input type="text" placeholder="" name="loanMonth" id="loanMonth" value="" name="loanMonth"
                                class="w-full mt-2 mb-2 px-4 lg:py-2 xs:py-1 sm:py-1 border rounded-md text-gray-600 focus:outline-none
                                focus:border-green-500"/>
                            </div>

                            <div class=" w-1/2 px-1 mt-0">
                            <label class="text-gray-600 font-semibold ">Interest</label>
                                <input type="text" placeholder="" name="loanInterest" id="loanInterest" value="" name="loanInterest"
                                class="w-full mt-2 mb-2 px-4 lg:py-2 xs:py-1 sm:py-1 border rounded-md text-gray-600 focus:outline-none
                                focus:border-green-500"/>
                                
                            </div>
                        </div>

                        <div class="flex justify-between">
                            <div class=" w-1/2 px-1 mt-0">
                                <label class="text-gray-600 font-semibold ">Purpose</label>
                                <input type="text" placeholder="" name="loanPurpose" class="w-full mt-2 mb-2 px-4 lg:py-2 xs:py-1 sm:py-1 border rounded-md text-gray-600 focus:outline-none focus:border-green-500"/>
                            </div>
                        </div>
                

                    <hr class="mx-18 my-4">
                        <div class="flex">
                                <div class=" w-1/2 px-1 mt-0">
                                <label class="text-gray-600 font-semibold ">Total Loan Amount</label>
                                    <input type="text" class="w-full mt-2 mb-2 px-4 lg:py-2 xs:py-1 sm:py-1 border rounded-md
                                    text-gray-600 focus:outline-none focus:border-green-500" name="totalAmount" id="totalAmount" />
                                </div>
                                <div class=" w-1/2 px-1 mt-0">
                                <label class="text-gray-600 font-semibold">Monthly Payable Amount</label>
                                    <input type="text"  class="w-full mt-2 mb-2 px-4 lg:py-2 xs:py-1 sm:py-1 border rounded-md
                                    text-gray-600 focus:outline-none focus:border-green-500" name="monthlyPay" id="monthlyPay"  />
                                </div>
                        </div>
                    <hr class="-mx-18 mt-6">

                    <div class="flex">
                    <div class=" w-1/2 px-1 mt-6">
                            <label class="text-gray-600 font-semibold ">Loan Request Status</label>
                                <select class="form-control w-full mt-2 mb-2 px-4 lg:py-2 xs:py-1 sm:py-1 border rounded-md
                                text-gray-600 focus:outline-none focus:border-green-500" id="" name="loanrqStatus">
                                <option value="Pending">Pending</option>
                                
                            </select>
                        </div>
                        <div class=" w-1/2 px-1 mt-6">
                            <label class="text-gray-600 font-semibold ">Status</label>
                                <select class="form-control w-full mt-2 mb-2 px-4 lg:py-2 xs:py-1 sm:py-1 border rounded-md
                                text-gray-600 focus:outline-none focus:border-green-500" id="" name="status">
                                <option value="Inactive">Inactive</option>
                                
                            </select>
                        </div>
                    </div>
                        
                    </div>
                    </div>
                    <div class="w-3/4 mx-auto py-6 flex justify-end">
                        <button type="submit" class="py-1 px-14 bg-blue-800 rounded-md text-center mr-4 text-white font-bold uppercase text-lg">SAVE</button>
                        <button class="py-1 px-12 bg-gray-800 rounded-md text-center mr-4 text-white font-bold uppercase text-lg">CANCEL</button>
                    </div>
                </form>
    </div>
</div>



<script src="js/jquery-3.5.0.min.js"></script>
<script src="js/calc.js"></script>


    
@stop