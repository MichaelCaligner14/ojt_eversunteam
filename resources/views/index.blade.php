<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Proza+Libre:wght@500;600&family=Roboto&family=Roboto+Condensed:wght@400;700&family=Ropa+Sans&display=swap"
    rel="stylesheet">

    <link rel="stylesheet" href="./styles.css">

    <title>LendingSystem</title>
    <link rel="stylesheet" href="css/app.css">

</head>
<body>  

    <div class="bg-primarycolor flex justify-between  items-center lg:p-3 xs:p-4 sm:p-3 md:p-3">
        <div class="flex items-center">
            <h2 class="font-bold text-white lg:ml-12 xs:ml-2 mr-2"> LENDING SYSTEM</h2>
        </div>

        <div class="hidden md:flex   justify-end items items-center lg:inline-flex lg:flex-row lg:w-auto" id="navigation">
            <a href="{{ url('login') }}" class="inline-block mr-4 p-3 text-white hover:bg-gray-900 rounded-lg font-bold">LOGIN</a>
            <a href="{{ url('signup') }}" class="inline-block p-3 lg:mr-12 xs:mr-2 text-white hover:bg-gray-900 rounded-lg font-bold">SIGN UP</a>
        </div>

        <div class=" md:hidden flex items-center">
            <button class="button">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
                  </svg>
            </button>
        </div>
  </div>

  <div class="mobile hidden bg-primarycolor text-white lg:hidden">
    <a href="" class="block py-2 px-4 text-md font-bold rounded transition duration-200 hover:bg-gray-600">LOGIN</a>
    <a href="" class="block py-2 px-4 text-md font-bold rounded transition duration-200 hover:bg-gray-600">SIGN UP</a>
</div>
<script src="navbar.js"></script>

    

<div class="md:flex justify-between lg:ml-12 xs:ml-2 mt-20 lg:mr-12 text-black">

    <div class="md:w-1/2">   
        <h2 class="md:text-6xl sm:text-6xl lg:text-7xl xs:text-5xl text-3xl text-black mb-2 font-primary mt-20 ml-2 border-b-2 border-black-400 ">DVOFINDS</h2>
        <p class="lg:text-3xl md:text-3xl sm:text-3xl xs:text-2xl font-secondary ml-4">We Provide Best <br /> Loan for your Future</p>
    </div>

    <div class="md:w-3/4">
        <img src="images/img3.png" class="w-full">
    </div>

</div>

<div class="grid grid-cols-2 gap-4 items-center mt-40">
    <div>            
        <h1 class="font-primary lg:text-3xl md:text-3xl sm:text-3xl xs:text-2xl text-right border-r-4 h-full border-black pr-4 ">DVOFINDS
            <br /><a href="#">
            <svg width="25" height="25" viewBox="0 0 34 35" " class="float-right" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M6.2082 0.400024C2.76913 0.400024 0 3.16915 0 6.60821V28.1918C0 31.6309 2.76913 34.4 6.2082 34.4H17.9063V21.1081H14.3916V16.3226H17.9063V12.2341C17.9063 9.022 19.983 6.07271 24.7669 6.07271C26.7038 6.07271 28.1361 6.25866 28.1361 6.25866L28.0234 10.7275C28.0234 10.7275 26.5627 10.7137 24.9688 10.7137C23.2436 10.7137 22.967 11.5086 22.967 12.8281V16.3227H28.1605L27.9342 21.1082H22.967V34.4H27.7918C31.2309 34.4 34 31.6309 34 28.1918V6.60824C34 3.16918 31.2309 0.400058 27.7918 0.400058L6.2082 0.400024Z" fill="black"/>
            </svg></a>
            <a href="#">
            <svg width="25" height="25" viewBox="0 0 34 35" class="float-right mr-2" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M30.3571 2.4375H3.64286C1.6317 2.4375 0 4.0752 0 6.09375V32.9062C0 34.9248 1.6317 36.5625 3.64286 36.5625H30.3571C32.3683 36.5625 34 34.9248 34 32.9062V6.09375C34 4.0752 32.3683 2.4375 30.3571 2.4375ZM26.646 14.5336C26.6612 14.7469 26.6612 14.9678 26.6612 15.1811C26.6612 21.7852 21.6522 29.3947 12.4996 29.3947C9.67634 29.3947 7.05804 28.5721 4.85714 27.1553C5.25938 27.201 5.64643 27.2162 6.05625 27.2162C8.38616 27.2162 10.5263 26.424 12.2339 25.0834C10.0482 25.0377 8.21161 23.598 7.5817 21.6176C8.34821 21.7318 9.03884 21.7318 9.82812 21.5262C7.55134 21.0615 5.84375 19.0506 5.84375 16.6207V16.5598C6.50402 16.933 7.27812 17.1615 8.09018 17.192C7.40747 16.7362 6.8478 16.1179 6.46112 15.3922C6.07443 14.6665 5.87277 13.856 5.87411 13.033C5.87411 12.1037 6.11696 11.2506 6.54955 10.5117C9.00089 13.5434 12.6817 15.5238 16.8103 15.7371C16.1045 12.3475 18.6317 9.59766 21.6674 9.59766C23.1018 9.59766 24.392 10.1994 25.3027 11.1744C26.4259 10.9611 27.5036 10.5422 28.4598 9.9709C28.0879 11.1287 27.3063 12.1037 26.2741 12.7207C27.2759 12.6141 28.2473 12.3322 29.1429 11.9438C28.4674 12.9416 27.6174 13.8252 26.646 14.5336Z" fill="black"/>
            </svg></a>
            <a href="#">
            <svg width="25" height="26" viewBox="0 0 34 35" class="float-right mr-2" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M31.68 0.400024H1.32C0.589875 0.400024 0 0.989899 0 1.72002V32.08C0 32.8101 0.589875 33.4 1.32 33.4H31.68C32.4101 33.4 33 32.8101 33 32.08V1.72002C33 0.989899 32.4101 0.400024 31.68 0.400024ZM23.3888 24.556C21.714 26.0988 19.4288 27.0063 16.7021 27.0063C12.7545 27.0063 9.339 24.7416 7.67663 21.4416C6.96832 20.0325 6.59961 18.4772 6.6 16.9C6.6 15.2665 6.99188 13.7238 7.67663 12.3584C9.339 9.05427 12.7545 6.78965 16.7021 6.78965C19.4246 6.78965 21.7099 7.79203 23.463 9.4214L20.5672 12.3213C19.5195 11.3189 18.1871 10.8115 16.7062 10.8115C14.0745 10.8115 11.847 12.5894 11.0509 14.9778C10.8487 15.5841 10.7332 16.2318 10.7332 16.9C10.7332 17.5683 10.8487 18.2159 11.0509 18.8223C11.847 21.2106 14.0745 22.9885 16.7021 22.9885C18.0634 22.9885 19.2184 22.6296 20.1217 22.0233C21.1942 21.3055 21.9038 20.2372 22.1389 18.9708H16.7021V15.0603H26.2185C26.3381 15.7244 26.4 16.4133 26.4 17.1269C26.4 20.2083 25.2986 22.7946 23.3888 24.556Z" fill="black"/>
            </svg></a>          

        </h1>
    </div>
        <div class="text-sm  ">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" /></svg>
                        Sta.Ana Avenue St. Davao City
                </div>
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M7 2a2 2 0 00-2 2v12a2 2 0 002 2h6a2 2 0 002-2V4a2 2 0 00-2-2H7zm3 14a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
                      </svg>
                    0923-456-7894
                </div>
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                      </svg>
                      dvofinds@gmail.com 
                </div>
        </div>
<div>

    <script>
        const btnn = document.querySelector("button.button");
        const menu = document.querySelector(".mobile");

        btnn.addEventListener("click" , () => {
        menu.classList.toggle("hidden");
    });
    </script>

</body>
</html> 