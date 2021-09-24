<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings</title>
    <link rel="stylesheet" href="css/app.css">
</head>
<body class="bg-light-gray md:grid md:grid-cols-4 lg:grid-cols-7 gap-x-10 pr-10 grid-rows-5">
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
                <a href="{{url('profile')}}" class="hover:bg-teal hover:text-white flex pt-4 pl-4"><img src="img/nameicon.png" alt="name" class="h-9 w-9"><span class="pt-1 pl-1"> Profile</span></a>
                <a href="#" class="bg-teal text-white flex pt-4 pl-4"><img src="img/settingsicon.png" alt="settings" class="h-9 w-9"><span class="pt-1 pl-1"> Settings</span></a>
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
        <div class="row-start-1 p-4 flex mt-10 -mb-10">
            <img src="img/settingsicon.png" alt="settings" class="h-10"><span class="font-bold font-condensed text-3xl ml-3 mt-1">Settings</span>
        </div>
    </div>
    <div class="col-span-5 md:col-start-2 pl-10 md:pl-0 md:col-end-5 md:col-span-3 lg:col-start-2 lg:col-end-8 lg:col-span-6 row-start-2 row-end-6 lg:row-start-2 lg:row-end-6 -mt-20 mb-10 lg:-mt-20 grid grid-cols-4 lg:grid-cols-8 grid-rows-7 md:text-xl font-condensed">
        <a href="{{url('profset')}}" class="lg:col-span-2 mb-20 border-b-4 pl-8 pt-4 lg:pl-36 hover:bg-dark-blue hover:text-white"> Profile Settings</a>
        <a href="{{url('payset')}}" class="lg:col-span-2 mb-20 border-b-4 pl-6 pt-4 lg:pl-36 hover:bg-dark-blue hover:text-white">Payment Settings</a>
        <a href="{{url('p&sset')}}" class="lg:col-span-2 mb-20 border-b-4 pl-4 pt-4 lg:pl-36 hover:bg-dark-blue hover:text-white">Privacy & Security</a>
        <a href="#" class="lg:col-span-2 mb-20 border-b-4 pl-3 md:pl-10 pt-4 lg:pl-36 bg-dark-blue text-white">Notifications</a>
        <div class="row-start-2 col-span-4 lg:col-span-8 text-2xl">
            <input type="checkbox" class="h-5 w-5">
            <span>Notify when a driver has approved your reservation.</span>
        </div>
        <div class="row-start-3 col-span-4 lg:col-span-8 text-2xl">
            <input type="checkbox" class="h-5 w-5">
            <span>Notify when a driver is nearing your location.</span>
        </div>
        <div class="row-start-4 col-span-4 lg:col-span-8 text-2xl">
            <input type="checkbox" class="h-5 w-5">
            <span>Notify when you are nearing your destination.</span>
        </div>
        <div class="row-start-5 col-span-4 lg:col-span-8 text-2xl">
            <input type="checkbox" class="h-5 w-5">
            <span>Notify when payments are successful.</span>
        </div>
        <div class="row-start-5 row-end-7 row-span-2 mt-56 mb-56 col-span-4 lg:col-span-8"></div>
        <div class="col-start-1 col-span-2 row-start-7">
            <a href="#" class="text-xs text-white bg-dark-blue rounded-full py-2 px-4">Deactivate my Account</a>
        </div>
        <div class="col-start-4 col-span-2 lg:col-start-8 row-start-7">
            <a href="#" class="text-xs text-white bg-dark-blue rounded-full py-2 px-4">Save Changes</a>
        </div>
    </div>
</body>
</html>