<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EverChat</title>
    <link rel="stylesheet" href="css/app.css">
    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
    <script>
    Pusher.logToConsole = true;

    var pusher = new Pusher('64abb52bb54c5a4af301', {
      cluster: 'ap1'
    });

    var channel = pusher.subscribe('chat');
    channel.bind('my-event', function(data) {
      alert(JSON.stringify(data));
    });

    channel.bind('pusher:subscription_succeeded', function(members) {
      
    });
  </script>
</head>
<body class="flex flex-col bg-baby-blue">
    <div>
        <header class="bg-dark-blue">
            <h1 class="text-4xl flex justify-center text-white p-4 font-condensed font-bold">Let's Chat!</h1>
            <div class="flex justify-center">
                <input type="text" name="username" id="username" placeholder="Please enter a username..." class="rounded-full p-2 m-4 w-96">
            </div>
        </header>

        <div id="messages" class="w-full bg-baby-blue px-8 py-16"></div>

        <form id="message_form">
            <input type="text" name="message" id="message_input" placeholder="Write a message..." class="w-full h-10 shadow-inner absolute inset-x-0 bottom-0 pl-2">
            <button type="submit" id="message_send" class="bg-dark-blue text-white absolute h-10 bottom-0 right-0 pl-2 pr-2">Send Message</button>
        </form>
    </div>

    <script src="./js/app.js"></script>
</body>
</html>