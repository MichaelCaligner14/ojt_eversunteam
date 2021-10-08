@extends('layouts.master')
@section('title')
<title>Borrowers</title>
@stop
@section('sidebar')
 
@section('content')   
    @section('header')
    @stop

            <div class="p-8 ">
                <h1 class="font-fourth font-bold text-3xl tracking-widest">BORROWERS</h1>
            </div>


            <div class="mx-16">
                 @if(Session::has('success'))
                    <div class="bg-green-100 border border-green-400 mb-4x text-green-700 px-4 py-3 rounded relative" role="alert">{{ Session::get('success')}}</div>
                    @endif
                    @if(Session::has('fail'))
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">{{ Session::get('fail')}}</div>
                    @endif

            <button class="modal-open mb-2 bg-transparent border border-gray-500 hover:border-indigo-500 text-gray-500 hover:text-indigo-500 font-bold py-2 px-4 rounded-md">
                ADD DATA </button>
               
            </div>


<!-- ADD Modal-->
        <div class="modal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center">
            <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>
            
            <div class="modal-container bg-white w-auto  rounded shadow-lg z-50 overflow-y-auto">
            
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
                <p class="text-md font-bold">PERSONAL INFORMATION</p>
                <div class="modal-close cursor-pointer z-50">
                    <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                    <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
                    </svg>
                </div>
                </div>

        
                   
                <!--Body-->
                <form action="add" method="post">
                @csrf
                    <div class="flex">
                        <div class="w-1/2 px-1">
                            <label class="text-gray-600 font-light">Firstname</label>
                            <input type="text" placeholder="" name="fname" class="w-full mt-2 mb-2 px-4 lg:py-2 xs:py-1 sm:py-1 border rounded-md
                            text-gray-600 focus:outline-none focus:border-green-500"/>
                        </div>
                        <div class="w-1/2 px-1">
                            <label class="text-gray-600 font-light">Lastname</label>
                            <input type="text" placeholder="" name="lname" class="w-full mt-2 mb-2 px-4 lg:py-2 xs:py-1 md:py-1 sm:py-1 border rounded-md
                            text-gray-700 focus:outline-none focus:border-green-500"/>
                        </div>
                        <div class="w-12 px-1">
                            <label class="text-gray-600 font-light">M.I</label>
                            <input type="text" placeholder=""  name="mname" class="w-full mt-2 mb-2 px-2 lg:py-2 xs:py-1 sm:py-1 border rounded-md
                            text-gray-700 focus:outline-none focus:border-green-500"/>
                        </div>
                    </div>

                    <div class=" w-full px-1 mt-0">
                        <label class="text-gray-600 font-light ">Address</label>
                        <input type="text" placeholder=""  name="address" class="w-full mt-2 mb-2 px-4 lg:py-2 xs:py-1 sm:py-1 border rounded-md
                        text-gray-600 focus:outline-none focus:border-green-500"/>
                    </div>

                    <div class="flex">
                        <div class=" w-1/2 px-1 mt-0">
                            <label class="text-gray-600 font-light ">Email Address</label>
                            <input type="text" placeholder=" "  name="email" class="w-full mt-2 mb-2 px-4 lg:py-2 xs:py-1 sm:py-1 border rounded-md text-gray-600 focus:outline-none focus:border-green-500"/>
                        </div>
                        <div class=" w-1/2 px-1 mt-0">
                            <label class="text-gray-600 font-light ">Contact No</label>
                            <input type="text" placeholder=""  name="contactNo" class="w-full mt-2 mb-2 px-4 lg:py-2 xs:py-1 sm:py-1 border rounded-md
                            text-gray-600 focus:outline-none focus:border-green-500"/>
                        </div>
                </div>

             <!--Footer-->
                <div class="flex justify-end pt-2">
                    <button type="submit" class="px-4 bg-transparent p-3 rounded-lg bg-blue-800 hover:bg-indigo-400 text-white mr-2">SAVE</button>
                    <button class="modal-close px-4 bg-gray-800 p-3 rounded-lg text-white hover:bg-indigo-400">Close</button>
               </div>

                </form>
              </div>
            </div>
        </div>
          

                <div class="mx-16 mb-24"> 
                    <table id="datatable" class="border-collapse shadow-md w-full">
                    <thead>
                        <tr>
                            <th class="p-3 font-bold text-sm uppercase bg-gray-700 text-white border border-gray-300 hidden lg:table-cell">#</th>
                            <th class="p-3 font-bold text-sm uppercase bg-gray-700 text-white border border-gray-300 hidden lg:table-cell">Fullname</th>
                            <th class="p-3 font-bold text-sm uppercase bg-gray-700 text-white border border-gray-300 hidden lg:table-cell">Address</th>
                            <th class="p-3 font-bold text-sm uppercase bg-gray-700 text-white border border-gray-300 hidden lg:table-cell">Email Address</th>
                            <th class="p-3 font-bold text-sm uppercase bg-gray-700 text-white border border-gray-300 hidden lg:table-cell">Contact No.</th>
                            <th class="p-3 font-bold text-sm uppercase bg-gray-700 text-white border border-gray-300 hidden lg:table-cell">Manage</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($list as $item)
                    <tr class="idCust bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
                            <td class="w-full lg:w-auto p-1.5 text-gray-800 text-center border text-sm border-b block lg:table-cell  lg:static">
                                <span class="lg:hidden float-left top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">#</span>
                                {{$item->id}}
                            </td>
                            
                            <td class="lname w-full lg:w-auto p-1.5 text-gray-800 text-center border text-sm border-b block lg:table-cell  lg:static">
                                <span class="lg:hidden float-left top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Name</span>
                                {{$item->lname}}, {{$item->fname}} {{$item->mname}}.
                            </td>
                            
                            <td class="address w-full lg:w-auto p-1.5 text-gray-800 text-center border text-sm border-b block lg:table-cell  lg:static">
                                <span class="lg:hidden float-left top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Username</span>
                                {{$item->address}}
                            </td>
                            <td class="email w-full lg:w-auto p-1.5 text-gray-800 text-center border text-sm border-b block lg:table-cell  lg:static">
                                <span class="lg:hidden float-left top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Name</span>
                                {{$item->email}}
                            </td>
                            <td class="contactNo w-full lg:w-auto p-1.5 text-gray-800 text-center border text-sm border-b block lg:table-cell  lg:static">
                                <span class="lg:hidden float-left top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Username</span>
                                {{$item->contactNo}}
                                
                            </td>
                      
                            <td class="w-full lg:w-auto p-1.5 text-gray-800  border border-b text-sm text-center lg:table-cell lg:static">
                                <span class="lg:hidden float-left top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Actions</span>

                                <a href="edit/{{ $item->id }}"  class=" text-blue-400 hover:text-blue-600 underline">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                                </svg></a>
                                
                                <a href="delete/{{$item->id}}"  class="text-blue-400 hover:text-blue-600 underline pl-6">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block " viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                </svg></a>

                            </td>
                        </tr>
                        @endforeach
                          
                    </tbody>
                </table>
            </div>
        </div>
    </div>




<script src="js/sidebar.js"></script>
<script src="js/addData.js"></script>

@stop