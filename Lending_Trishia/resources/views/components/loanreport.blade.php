@extends('layouts.master')
@section('title')
<title>Loan Report</title>
@stop
@section('sidebar')

@section('content')   
    @section('header')
    @stop
        
            <div class="p-8">
                <h1 class="font-fourth font-bold text-3xl tracking-widest">LOAN RECORD</h1>
            
                    <form>
                    <div class="inline-block mt-8 ">
                        <input type="text" placeholder="" 
                        class="lg:w-full sm:w-full inline-block mt-2 shadow-md mb-2 px-4 py-1 border rounded-md text-gray-600 focus:outline-none focus:border-green-500"/>
                    </div>
                    <div class=" w-1/4 inline-block">
                        <button class="bg-blue-700 border rounded-md px-10 py-1 text-white ">Search</button>
                    </div>
</form>
                
            <table class="border-collapse w-full shadow-md">
                <thead>
                    <tr>
                        <th class="p-3 font-bold text-xs uppercase bg-gray-700 text-white border border-gray-300 hidden lg:table-cell">#</th>
                        <th class="p-3 font-bold text-xs uppercase bg-gray-700 text-white border border-gray-300 hidden lg:table-cell">Loan Request ID</th>
                        <th class="p-3 font-bold text-xs uppercase bg-gray-700 text-white border border-gray-300 hidden lg:table-cell">Loan Type</th>
                        <th class="p-3 font-bold text-xs uppercase bg-gray-700 text-white border border-gray-300 hidden lg:table-cell">Date</th>
                        <th class="p-3 font-bold text-xs uppercase bg-gray-700 text-white border border-gray-300 hidden lg:table-cell">Loan Amount</th>
                        <th class="p-3 font-bold text-xs uppercase bg-gray-700 text-white border border-gray-300 hidden lg:table-cell">Balance</th>
                        <th class="p-3 font-bold text-xs uppercase bg-gray-700 text-white border border-gray-300 hidden lg:table-cell">Status</th>
                        <th class="p-3 font-bold text-xs uppercase bg-gray-700 text-white border border-gray-300 hidden lg:table-cell">Manage</th>
                    </tr>
                </thead>
                <tbody>
                    
                    @foreach($data as $row)
                    <tr class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
                    <td class="w-full lg:w-auto text-center p-1.5 text-gray-800 text-sm border border-b block lg:table-cell lg:static">
                            <span class="lg:hidden float-left top-0 bg-blue-200 px-2 py-1 text-sx font-bold uppercase">#</span>
                            <h1 class="">{{$row->id}}</h1>
                            </td> 
                        <td class="w-full lg:w-auto text-center p-1.5 text-gray-800  border border-b text-sm block lg:table-cell  lg:static">
                            <span class="lg:hidden float-left top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Loan Ref. No</span>
                            <h1 class="">{{$row->loanrequest_id}}</h1>
                        </td>
                        <td class="w-full lg:w-auto p-1.5 text-gray-800 text-center border text-sm border-b block lg:table-cell  lg:static">
                            <span class="lg:hidden float-left top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Date</span>
                            <h1 class="">{{$row->loanType}}</h1>
                        </td>
                        <td class="w-full lg:w-auto p-1.5 text-gray-800 text-center border text-sm border-b block lg:table-cell  lg:static">
                            <span class="lg:hidden float-left top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Date</span>
                            <h1 class="">{{$row->approveDate}}</h1>
                        </td>
                        <td class="w-full lg:w-auto p-1.5 text-gray-800 text-center border text-sm border-b block lg:table-cell  lg:static">
                            <span class="lg:hidden float-left top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Balance</span>
                            <h1 class="">{{$row->totalAmount}}</h1>
                        </td>
                        <td class="w-full lg:w-auto p-1.5 text-gray-800 text-center border text-sm border-b block lg:table-cell  lg:static">
                            <span class="lg:hidden float-left top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Balance</span>
                            <h1 class="">{{$row->loanBalance}}</h1>
                        </td>
                        <td class="w-full lg:w-auto p-1.5 text-gray-800 text-center border text-sm border-b block lg:table-cell  lg:static">
                            <span class="lg:hidden float-left top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Status</span>
                            <h1 class="">{{$row->approveStatus}}</h1>
                        </td>
                       
                        <td class="w-full lg:w-auto p-1.5 text-gray-800  border border-b text-sm text-center lg:table-cell  lg:static">
                            <span class="lg:hidden float-left top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Manage</span>
                           
                            <a href="" class="text-blue-400 hover:text-blue-600 underline"><svg xmlns="http://www.w3.org/2000/svg" 
                                class="h-5 w-5 inline-block" viewBox="0 0 20 20" fill="currentColor"><path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                              </svg></a>
                            <a href="" class="text-blue-400 hover:text-blue-600 underline pl-6"><svg xmlns="http://www.w3.org/2000/svg" 
                                class="h-5 w-5 inline-block" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                              </svg></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            </div>
@stop
