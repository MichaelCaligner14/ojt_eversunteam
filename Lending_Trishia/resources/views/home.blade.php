@extends('layouts.master')
@section('title')
<title>Home</title>
@stop
@section('sidebar')
        
@section('content')   
    @section('header')
    @stop

            <div class="p-8">
            
                <h1 class="font-fourth font-bold text-3xl ">Admin Dashboard</h1>
                <svg width="303" height="7" viewBox="0 0 403 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.997559 3.5L402.5 3.50001" stroke="black"/>
                    </svg>
                    <h5 class="text-2xl italic ">Welcome to DVOFINDS!</h5>
            </div>
                   
            <div class="flex flex-wrap justify-center mt-18">

                    <div class="flex flex-col bg-blue-400 text-white rounded-lg shadow-md w-full m-6 overflow-hidden
                       sm:w-72">
                        <div>
                            <h2 class="text-md mb-16 font-fourth font-bold p-4 bg-blue-500 text-black">
                                Borrowers
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-flex items-center float-right" viewBox="0 0 20 20"  fill="currentColor"><path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z" /></svg></h2>
                            </div>
                            <h2 class="text-3xl text-center px-2 pb-5 mb-20">{{ $cust }}</h2>
                    </div>

                    <div class=" flex flex-col bg-green-400 text-white rounded-lg shadow-md w-full m-6 overflow-hidden
                       sm:w-72">
                       <div>
                            <h2 class="text-md mb-16 font-bold p-4 bg-green-500 text-black font-fourth">Active Loans
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-flex items-center float-right" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" /></svg></h2>
                            </div>
                            <h2 class="text-3xl text-center px-2 pb-5 mb-20">0</h2>
                    </div>

                    <div class=" flex flex-col text-white rounded-lg shadow-md w-full m-6 overflow-hidden
                       sm:w-72 bg-red-400 ">
                        <div>
                            <h2 class="text-md mb-16 font-bold p-4 bg-red-500 text-black font-fourth">Total Receivable
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-flex items-center float-right" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd" />
                            </svg>
                            </div>
                            <h2 class="text-3xl text-center px-2 pb-5 mb-20">0</h2>
                    </div>
                </div>   
            <footer class="bg-gray-300 p-4 font-bold text-xs text-right w-full mt-80">Sta.Ana Avenue St. Davao City <br > dvofinds@gmail.com 
            </footer>
@stop
