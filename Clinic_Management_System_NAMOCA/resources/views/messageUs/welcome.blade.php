


@extends('layouts.sidebar')

@section('content')
   
    <div class=" bg-gray-800 mt-3 mb-5 mr-5 ml-2 w-full rounded-3xl border-white border-solid" style="border:1px solid; border-color:pink;">


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MessageUs</title>
    <link rel="stylesheet" href="./css/app1.css"/>
</head>
<style>
  .message{
    display: block;
    width:100%;
    border-radius:99px;
    -tw-bg-opacity: 1;
background-color:	#2D3545;
    padding: 8px 16px;
    box-shadow: 2px 8px 10px rgba(10,10,10,10.10);
    font-weight: 400;
    margin-bottom: 16px;
  }
  .message {
      color:white;
  }

</style>
<body>
<h1 class="flex items-center justify-center text-white font-semibold text-4xl mt-10 "> Chat Me! </h1>
    <div class="flex h-screen mt-3" style="flex-direction:column;" >
        <header>
            
            <input class=" hidden text-center rounded-xl  p-3 text-lg  w-3/4 ml-40" type="text" name="username" id="username"  value="Admin">
        </header>

        <div  id="messages" style=" flex: 1 1 0%; overflow: scroll; padding: 16px;"></div>
            <form id="message_form" class="">
                <input class="rounded mt-1 w-3/5 p-3 ml-2 mb-2" type="text" name="message"  id="message_input" placeholder="Write a message.."/>
                <button class="bg-blue-700 w-48   text-white  py-3 rounded hover:bg-blue-600" type="submit" id="message_send">Send Message</button> 
            </form>
    </div>
    <script src="./js/app.js"></script>
</body>
</div>
</html>
@endsection