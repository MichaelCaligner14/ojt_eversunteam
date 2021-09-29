<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="css/app.css">
</head>
<body class="bg-light-gray grid grid-cols-4 grid-rows-5 lg:grid-cols-7 gap-10 pr-10">
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
            <div class="-mt-10 mb-5"><img src="img/pfp.png" alt="prof" class="pl-5 lg:pl-8 pb-4"><span class="pl-14 lg:pl-16 font-condensed">Pass N. Jherr</span></div>
            <div class="row-span-2 text-2xl font-condensed grid grid-rows-5">
                <a href="{{url('dashboard')}}" class="hover:bg-teal hover:text-white flex pt-4 pl-4"><img src="img/homeicon.png" alt="home" class="h-9 w-9"><span class="pt-1 pl-1"> Dashboard</span></a>
                <a href="{{url('reservation')}}" class="hover:bg-teal hover:text-white flex pt-4 pl-4"><img src="img/reserveicon.png" alt="reserve" class="h-9 w-9"><span class="pt-1 pl-1"> Reservations</span></a>
                <a href="{{url('payments')}}" class="hover:bg-teal hover:text-white flex pt-4 pl-4"><img src="img/paymentsicon.png" alt="pay" class="h-9 w-9"><span class="pt-1 pl-1"> Payments</span></a>
                <a href="#" class="bg-teal text-white flex pt-4 pl-4"><img src="img/nameicon.png" alt="name" class="h-9 w-9"><span class="pt-1 pl-1"> Profile</span></a>
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
            <img src="img/nameicon.png" alt="reserve" class="h-10 mt-10"><span class="font-bold font-condensed text-3xl ml-3 mt-10">Profile</span>
        </div>
    </div>
    <div class="md:col-start-3 col-start-2 col-span-2 md:col-span-1 lg:col-start-4 lg:col-end-6 row-start-2 md:row-start-2 row-span-4 md:row-span-3 bg-baby-blue rounded-2xl shadow-xl -ml-20 -mr-20 lg:ml-10 lg:mr-10 pt-10 pl-16">
        <span class="bg-dark-blue text-white rounded pt-1 pb-1 pl-4 pr-4 h-8 w-28 ml-16 lg:ml-24">Passenger</span>
        <img src="img/pfp.png" alt="pfp" class="h-40 w-40 mt-5 ml-8 lg:ml-16">
        <div class="mt-4 lg:ml-10">
            <img src="img/nameicon.png" alt="pfp" class="w-8 inline-block">
            <span class="text-xl">Pass N. Jherr</span>
        </div>
        <div class="mt-4 lg:ml-10">
            <img src="img/dateicon.png" alt="date" class="w-8 inline-block">
            <span class="text-xl">Month XX, 20XX</span>
        </div>
        <div class="mt-4 lg:ml-10">
            <img src="img/addressicon.png" alt="trip" class="w-8 inline-block">
            <span class="text-xl">Homeville, Philippines</span>
        </div>
        <div class="mt-4 lg:ml-10">
            <img src="img/phoneicon.png" alt="phone" class="w-8 inline-block">
            <span class="text-xl">09XXXXXXXXX</span>
        </div>
        <div class="mt-4 lg:ml-10">
            <img src="img/mailicon.png" alt="mail" class="w-8 inline-block">
            <span class="text-xl">passenger@travel.com</span>
        </div>
    </div>
</body>
</html>