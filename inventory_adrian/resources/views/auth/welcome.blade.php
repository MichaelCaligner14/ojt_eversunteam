@extends('layouts.navbar')

@section('content')
<script src="script.js"></script>
<style>
    .message strong{
    color: #8C38FF;
    font-weight: 600;
    padding-right:5px;
    margin-bottom:5px;
  }
  </style>
<form action="user" method="post">
<div class="bg-gray-50 w-5/6 h-full mt-40 ml-36"> 
@csrf
  <div class="justify-start bg-yellow-300">

    <div class="flex flex-col-2 w-full">
  
  <img src="img/center.png"
class="w-20 hidden lg:block md:block inset-0"/>

<p class="text-sm mt-6">{{ $data->name }}</p>
</div>
</div>
</form>
  <div class="flex flex-col items-center justify-center">
      <option class="block w-full bg-gray-50 rounded border border-black-300 pb-4 pt-2 text-center text-black" 
      type="text" name="username" id="username" placeholder="Please enter a username..">{{ $data->name }}</option>
      </div>
      <div class="flex-1 p-4 overflow-y-auto h-96 mt-4 justify-end" id="messages"></div>
      <form class="flex" id="message_form">
          <input class="flex-1 font-semibold border shadow-sm bg-white block w-1/2 pb-4 pt-4 pl-2" 
          type="text" name="message" id="message_input" placeholder="Write a message.."/>
          <button class="appearance-none bg-gray-300 px-8 text-white uppercase hover:bg-gray-100 md:w-24 pl-9" type="submit" id="message_send">
          <svg class="crt8y2ji" width="20px" height="20px" viewBox="0 0 24 24"><path d="M16.6915026,12.4744748 L3.50612381,13.2599618 C3.19218622,13.2599618 3.03521743,13.4170592 3.03521743,13.5741566 L1.15159189,20.0151496 C0.8376543,20.8006365 0.99,21.89 1.77946707,22.52 C2.41,22.99 3.50612381,23.1 4.13399899,22.8429026 L21.714504,14.0454487 C22.6563168,13.5741566 23.1272231,12.6315722 22.9702544,11.6889879 C22.8132856,11.0605983 22.3423792,10.4322088 21.714504,10.118014 L4.13399899,1.16346272 C3.34915502,0.9 2.40734225,1.00636533 1.77946707,1.4776575 C0.994623095,2.10604706 0.8376543,3.0486314 1.15159189,3.99121575 L3.03521743,10.4322088 C3.03521743,10.5893061 3.34915502,10.7464035 3.50612381,10.7464035 L16.6915026,11.5318905 C16.6915026,11.5318905 17.1624089,11.5318905 17.1624089,12.0031827 C17.1624089,12.4744748 16.6915026,12.4744748 16.6915026,12.4744748 Z" fill="#0099FF" fill-rule="evenodd" stroke="none"></path></svg></button> 
      </form>
</div>
    <script src="./js/app.js"></script>
    @endsection