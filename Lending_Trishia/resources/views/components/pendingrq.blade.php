@extends('layouts.master')
@section('title')
<title>Pending Request</title>
@stop
@section('sidebar')

@section('content')   
    @section('header')
    @stop
        
            <div class="p-8">
                <h1 class="font-fourth font-bold text-3xl tracking-widest mb-10">PENDING REQUESTS</h1>
                    

                    @if (session()->has('success'))
                    <div class="bg-green-100 border border-green-400 mb-4x text-green-700 px-4
                     py-3 rounded relative" role="alert">{{ Session()->get('success') }}</div>
                    @endif
                    @if(Session::has('fail'))
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">{{ Session::get('fail')}}</div>
                    @endif

                <div class="flex justify-between mt-2">

                <form action="{{route('pendingrq')}}" method="post">
                    @csrf
                    <div class="flex justify-start">
                        <div>
                        <input type="text" name="lname" id="lname" class="lg:w-full sm:w-1/2 inline-block shadow-md mb-2 lg:px-4 xs:px-2 py-1 border rounded-md text-gray-600 focus:outline-none focus:border-green-500"/>
                        </div>
                        <div>
                        <button type="submit" class="bg-blue-700 border rounded-md lg:px-10 xs:px-2 py-1 ml-2 text-white ">Search</button>
                        </div>
                    </div>   
                </form>
                
                    <div>
                    <button class="modal-open mb-1 lg:text-sm xs:text-xs bg-red-900 border hover:bg-red-600 text-white font-bold py-2 px-4 rounded-md">
                        APPROVE REQUEST</button>
                    </div>      
                </div>
            

<!-- ADD Modal-->
        <div class="modal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center">
            <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>
            
            <div class="modal-container bg-white w-1/2   h-3/4 rounded shadow-lg z-50 overflow-y-auto">
            
            <div class="modal-close absolute top-0 right-0 cursor-pointer flex flex-col items-center mt-4 mr-4 text-white text-sm z-50">
                <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
                </svg>
                <span class="text-sm">(Esc)</span>
            </div>

            <!-- Add margin if you want to see some of the overlay behind the modal-->
            <div class="modal-content py-4 text-left px-6">
                <!--Title-->
                <div class="flex justify-between items-center pb-3 mb-6">
                <p class="text-md font-bold">APPROVE APPLICATION</p>
                <div class="modal-close cursor-pointer z-50">
                    <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                    <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
                    </svg>
                </div>
                </div>

        
                   
                <form action="addApprove" method="post">
                    @csrf
                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
                        <div class="text-gray-600">
                            <p class="font-medium text-lg">Loan Approval</p>
                            <p>Please fill out all the fields.</p>
                        </div>
    
                        <div class="lg:col-span-2">
                            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">

                            <div class="md:col-span-5">
                                <label for="loanrequest_id">Loan Request ID.</label>
                                <input type="text" name="loanrequest_id" id="loanrequest_id" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50"  />
                            </div>

                            <div class="md:col-span-5">
                                <label for="approveDate">Date</label>
                                <input type="date" name="approveDate" id="approveDate" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50">
                            </div>

                            <div class="md:col-span-5">
                                <label for="approveDate">Balance</label>
                                <input type="text" name="loanBalance" id="loanBalance" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50">
                            </div>


                            <div class="md:col-span-5">
                                <label for="approveStatus" name="approveStatus" id="approveStatus">Status</label>
                                    <select class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" name="approveStatus" value="approveStatus">
                                    <option value="0"></option>
                                    <option value="Active">Active</option>
                                    <option value="Inactive">Inactive</option>
                                    </select>  
                            </div>

                            <div class="md:col-span-5 mt-10 text-right">
                                <div class="inline-flex items-end">
                                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Submit</button>
                                </div>  
                            </div>
                            </form>
                        </div>
                    </div>
               

                </div>
              </div>
            </div>
        </div>



            <table class="border-collapse w-full shadow-md" id="myTable">
                <thead>
                    <tr>
                        <th class="p-3 font-bold text-xs uppercase bg-gray-700 text-white border border-gray-300 hidden lg:table-cell">#</th>
                        <th class="p-3 font-bold text-xs uppercase bg-gray-700 text-white border border-gray-300 hidden lg:table-cell">Borrower</th>
                        <th class="p-3 font-bold text-xs uppercase bg-gray-700 text-white border border-gray-300 hidden lg:table-cell">Date</th>
                        <th class="p-3 font-bold text-xs uppercase bg-gray-700 text-white border border-gray-300 hidden lg:table-cell">Loan Type</th>
                        <th class="p-3 font-bold text-xs uppercase bg-gray-700 text-white border border-gray-300 hidden lg:table-cell">Loan Amount</th>
                        <th class="p-3 font-bold text-xs uppercase bg-gray-700 text-white border border-gray-300 hidden lg:table-cell">M-I</th>
                        <th class="p-3 font-bold text-xs uppercase bg-gray-700 text-white border border-gray-300 hidden lg:table-cell">Total Amount</th>
                        <th class="p-3 font-bold text-xs uppercase bg-gray-700 text-white border border-gray-300 hidden lg:table-cell">Monthly Amount</th>
                        <th class="p-3 font-bold text-xs uppercase bg-gray-700 text-white border border-gray-300 hidden lg:table-cell">Manage</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $item)
                    <tr class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
                    
                    <td class="w-full lg:w-auto text-center p-1.5 text-gray-800 text-sm border border-b block lg:table-cell lg:static">
                            <span class="lg:hidden float-left top-0 bg-blue-200 px-2 py-1 text-sx font-bold uppercase">#</span>
                                <h1 class="">{{$item->id}}</h1>
                            </td> 
                        <td class="w-full lg:w-auto text-center p-1.5 text-gray-800  border border-b text-sm block lg:table-cell  lg:static">
                            <span class="lg:hidden float-left top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Fullname</span>
                            <h1 class="">{{$item->lname}}, {{$item->fname}} {{$item->mname}}.</h1>
                        </td>
                        <td class="w-full lg:w-auto p-1.5 text-gray-800 text-center border text-sm border-b block lg:table-cell  lg:static">
                            <span class="lg:hidden float-left top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Loan Type</span>
                            <h1 class="">{{$item->loanDate}}</h1>
                        </td>
                        <td class="w-full lg:w-auto p-1.5 text-gray-800 text-center border text-sm border-b block lg:table-cell  lg:static">
                            <span class="lg:hidden float-left top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Loan Type</span>
                            <h1 class="">{{$item->loanType}}</h1>
                        </td>
                        <td class="w-full lg:w-auto p-1.5 text-gray-800 text-center border text-sm border-b block lg:table-cell  lg:static">
                            <span class="lg:hidden float-left top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Loan Amount</span>
                            <h1 class="">{{$item->loanAmount}}</h1>
                        </td>
                        <td class="w-full lg:w-auto p-1.5 text-gray-800 text-center border text-sm border-b block lg:table-cell  lg:static">
                            <span class="lg:hidden float-left top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">M-I</span>
                            {{$item->loanMonth}} - {{$item->loanInterest}}
                        </td>
                        <td class="w-full lg:w-auto p-1.5 text-gray-800 text-center border text-sm border-b block lg:table-cell  lg:static">
                            <span class="lg:hidden float-left top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Total Amount</span>
                            <h1 class="">{{$item->totalAmount}}</h1>
                        </td>
                        <td class="w-full lg:w-auto p-1.5 text-gray-800 text-center border text-sm border-b block lg:table-cell  lg:static">
                            <span class="lg:hidden float-left top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Montly Amount</span>
                            <h1 class="">{{$item->monthlyPay}}</h1>
                        </td>
                       

                        <td class="w-full lg:w-auto p-1.5 text-gray-800  border border-b text-sm text-center lg:table-cell  lg:static">
                            <span class="lg:hidden float-left top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Manage</span>
                           
                            <a href="approveLoan/{{$item->id}}" class=" inline-block hover:text-blue-600 underline p-1">
                            <svg xmlns="http://www.w3.org/2000/svg"  class="h-5 w-5 inline-block text-red-900" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg></a>
                              
                            <a href="editLoan/{{$item->id}}" class="inline-block hover:text-blue-600 underline"><svg xmlns="http://www.w3.org/2000/svg" 
                                class="h-5 w-5 inline-block text-green-900" viewBox="0 0 20 20" fill="currentColor"><path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                              </svg></a>

                                <a href="{{route('deleteLoans',['id'=>$item->id])}}"  class="btn_row_delete text-blue-400 inline-block hover:text-blue-600 underline pl-2"><svg xmlns="http://www.w3.org/2000/svg" 
                                class="h-5 w-5 inline-block text-black" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                </svg></a>
                          
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            </div>
            
            
<script src="js/addData.js"></script>


@stop

