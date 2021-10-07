<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation</title>
    <link rel="stylesheet" href="css/app.css">
</head>
<body class="bg-light-gray grid grid-cols-4 lg:grid-cols-7 gap-10 pr-10 grid-rows-5">
    <div class="mobile-menu-button bg-baby-blue md:hidden fixed cursor-pointer w-full">
        <div class="w-8 h-8 float-right">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
        </div>
      </div>
    <nav class="sidebar bg-baby-blue col-start-1 row-span-5 absolute inset-y-0 left-0 transform -translate-x-full duration-200 ease-in-out md:translate-x-0 md:relative">
        <div class="grid grid-rows-5 w-52 lg:w-60">
            <div class="text-3xl underline font-condensed pl-12 pt-16 lg:pl-16">EverCab</div>
            <div class="-mt-10 mb-5"><img src="img/pfp.png" alt="prof" class="pl-5 lg:pl-8 pb-4"><span class="pr-4 font-condensed flex justify-center">test</span></div>
            <div class="row-span-2 text-2xl font-condensed grid grid-rows-5">
                <a href="{{url('dashboard')}}" class="hover:bg-teal hover:text-white flex pt-4 pl-4"><img src="img/homeicon.png" alt="home" class="h-9 w-9"><span class="pt-1 pl-1"> Dashboard</span></a>
                <a href="#" class="bg-teal text-white flex pt-4 pl-4"><img src="img/reserveicon.png" alt="reserve" class="h-9 w-9"><span class="pt-1 pl-1"> Reservations</span></a>
                <a href="{{url('payments')}}" class="hover:bg-teal hover:text-white flex pt-4 pl-4"><img src="img/paymentsicon.png" alt="pay" class="h-9 w-9"><span class="pt-1 pl-1"> Payments</span></a>
                <a href="{{url('profile')}}" class="hover:bg-teal hover:text-white flex pt-4 pl-4"><img src="img/nameicon.png" alt="name" class="h-9 w-9"><span class="pt-1 pl-1"> Profile</span></a>
                <a href="{{url('profset')}}" class="hover:bg-teal hover:text-white flex pt-4 pl-4"><img src="img/settingsicon.png" alt="settings" class="h-9 w-9"><span class="pt-1 pl-1"> Settings</span></a>
            </div>
            <div class="mt-40 ml-10 lg:ml-16">
                <a href="{{url('login')}}" class="text-xl text-white bg-dark-blue rounded-full py-2 px-4">Log Out</a>
            </div>
        </div>
        <script>
            const btn = document.querySelector(".mobile-menu-button");
            const sidebar = document.querySelector(".sidebar");
  
            btn.addEventListener('click', () => {
              sidebar.classList.toggle("-translate-x-full");
            });
          </script>
    </nav>
    <div class="col-start-2 grid grid-rows-5 lg:col-span-2">
        <div class="row-start-1 p-4 flex">
            <img src="img/reserveicon.png" alt="reserve" class="h-10 mt-10"><span class="font-bold font-condensed text-3xl ml-3 mt-10">Reservations</span>
        </div>
    </div>
    <form method="post" action="{{route('reservationupdate')}}" class="bg-baby-blue ml-20 col-span-4 row-span-3 -mb-1 md:col-start-3 md:col-span-3 lg:col-start-4 lg:col-span-2 row-start-2 md:row-start-2 md:row-span-2 text-2xl p-5 shadow-xl rounded-md md:-mb-10 md:ml-0 md:mr-28 lg:mr-32">
        @csrf
        <input type="hidden" name="id" value="{{$reserve->id}}">
        Date: <input type="text" name="date" value="{{$reserve->date}}" class="block border mt-2">
        Pickup Location: <input type="text" name="pickup" value="{{$reserve->pickup}}" class="block border mt-2">
        Destination: <input type="text" name="destination" value="{{$reserve->destination}}" class="block border mt-2">
        Pickup Time: <input type="text" name="time" value="{{$reserve->time}}" class="block border mt-2">
        <input type="submit" value="Submit Reservation" class="btntest mt-5 cursor-pointer"></input>
        <a href="{{url('reservationlist')}}" class="btntest mt-5 ml-5">
            Return to Reservation List
        </a>
        @if(Session::has('reservation_update'))
        <span>{{Session::get('reservation_update')}}</span>
        @endif
    </form>
</body>
</html>