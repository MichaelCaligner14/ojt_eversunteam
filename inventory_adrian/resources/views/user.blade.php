@extends('layouts.usersidebar')
@section('user')  
<img
      src="img/wave.png"
      class="fixed hidden lg:block ml-56 inset-0 h-full"
      style="z-index: -1;"
    />

    <div class="flex flex-wrap justify-center gap-x-32">
           
    <div class="flex w-full justify-center mt-20 float-left xs:w-full">

    <form action="user" method="post" class="bg-casal-500 shadow-md rounded px-8 pb-8 mb-4">
               @csrf
    <div class="mb-4">
        <div>
            <img src="img/profile.png" class="h-96"/>
        </div>
      <label class="block text-white text-lg font-bold mb-2 mt-4 text-center">
        {{ $data->name }}
      </label>
      
    </div>
    <div class="mb-6">
      <label class="block text-white text-sm font-bold mb-2 text-center">
        {{$data->email}}
      </label>
     

    </div>
  </form>   
 </div>
</div>
<footer class="bg-casal-500 p-4 font-bold mt-32  min-w-full text-white text-right">INVENTORY SYSTEM<br>09458835712<br>EVERSUN </footer>     
</div>
<script src="script.js"></script>
@endsection