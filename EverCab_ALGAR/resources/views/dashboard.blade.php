@extends('layouts.dashboard')

@section('content')
    <div class="col-span-2 md:col-span-1 md:col-start-2 md:grid md:grid-rows-5 lg:col-span-2">
        <div class="row-start-1 md:row-start-1 p-4 flex justify-center">
            <img src="img/homeicon.png" alt="home" class="h-7 mt-10"><span class="font-bold font-condensed text-3xl ml-3 mt-10">Welcome! <span class="font-condensed block underline text-xl font-normal">{{$data->name}}</span></span>
        </div>
        <div class="col-span-2 md:row-start-2 bg-baby-blue p-4 rounded shadow-xl grid grid-rows-4 grid-cols-2 h-48 md:ml-0 -mr-10 md:mr-0">
            <span class="col-start-1 row-start-1 text-2xl font-bold">Your Trips</span>
            <img src="img/tripicon.png" alt="trip" class="col-start-2 row-span-1 h-16 w-16 lg:h-24 lg:w-24 ml-8 lg:ml-32 lg:-mt-4 relative">
            <span class="col-start-1 row-start-2 text-4xl lg:text-6xl mt-6 lg:mt-0">10</span>
            <span class="col-span-2 row-start-4 flex justify-center mt-3 text-2xl text-dark-gray font-condensed bg-teal -ml-4 -mr-4 -mb-4 pt-2 rounded-b">Most Recent</span>
        </div>
        <div class="row-start-2 col-span-2 md:row-start-3 md:row-span-2 bg-white p-4 shadow-xl grid grid-rows-6 grid-cols-3 divide-y divide-light-gray md:ml-0 -mr-10 md:mr-0">
            <span class="flex justify-between col-span-3 text-2xl lg:pr-20">Your Trips <span class="text-baby-blue cursor-pointer">View All</span></span>
            <span class="row-start-2 tripstop">From: <span class="tripsbot">Lorem</span></span>
            <span class="row-start-3 tripstop">From: <span class="tripsbot">Lorem</span></span>
            <span class="row-start-4 tripstop">From: <span class="tripsbot">Lorem</span></span>
            <span class="row-start-5 tripstop">From: <span class="tripsbot">Lorem</span></span>
            <span class="row-start-6 tripstop">From: <span class="tripsbot">Lorem</span></span>
            <span class="row-start-2 col-start-2 tripstop">To: <span class="tripsbot">Ipsum</span></span>
            <span class="row-start-3 col-start-2 tripstop">To: <span class="tripsbot">Ipsum</span></span>
            <span class="row-start-4 col-start-2 tripstop">To: <span class="tripsbot">Ipsum</span></span>
            <span class="row-start-5 col-start-2 tripstop">To: <span class="tripsbot">Ipsum</span></span>
            <span class="row-start-6 col-start-2 tripstop">To: <span class="tripsbot">Ipsum</span></span>
            <span class="row-start-2 col-start-3 tripstop">Date: <span class="tripsbot">XX-XX-XX</span></span>
            <span class="row-start-3 col-start-3 tripstop">Date: <span class="tripsbot">XX-XX-XX</span></span>
            <span class="row-start-4 col-start-3 tripstop">Date: <span class="tripsbot">XX-XX-XX</span></span>
            <span class="row-start-5 col-start-3 tripstop">Date: <span class="tripsbot">XX-XX-XX</span></span>
            <span class="row-start-6 col-start-3 tripstop">Date: <span class="tripsbot">XX-XX-XX</span></span>
        </div>
    </div>
    <div class="row-start-3 col-span-2 md:col-span-1 md:row-start-1 md:col-start-3 lg:col-start-4 lg:col-span-2 grid grid-rows-5 -mr-10 md:mr-0">
        <div class="md:row-start-2 bg-baby-blue p-4 rounded shadow-xl grid grid-rows-4 grid-cols-2 h-48">
            <span class="col-start-1 row-start-1 text-2xl font-bold">Payments</span>
            <img src="img/tripaymenticon.png" alt="trip" class="col-start-2 row-span-1 h-16 w-16 lg:h-24 lg:w-24 ml-8 -mt-3 lg:ml-40 lg:-mt-6 relative">
            <span class="col-start-1 row-start-2 text-3xl lg:text-4xl mt-0 lg:mt-4">Php 1,234.56</span>
            <span class="col-span-2 row-start-4 flex justify-center mt-3 text-2xl text-dark-gray font-condensed bg-teal -ml-4 -mr-4 -mb-4 pt-2 rounded-b">Most Recent</span>
        </div>
        <div class="row-start-3 row-span-2 bg-white pl-4 pt-4 shadow-xl grid grid-rows-6 grid-cols-2 divide-y divide-light-gray overflow-x-auto lg:overflow-hidden -mt-48 md:mt-0">
            <span class="flex justify-between col-span-3 text-2xl lg:pr-20">Payments <span class="text-baby-blue cursor-pointer">View All</span></span>
            <span class="text-lg col-start-1 pt-2">GCash <img src="img/gcash.png" alt="gcash" class="h-8 w-24 ml-2 inline-block"><span class="block text-black text-opacity-50">XX-XX-XX</span></span>
            <span class="cashmoney">Php 123.00</span>
            <span class="text-lg col-start-1 pt-2">Paypal <img src="img/paypal.png" alt="paypal" class="lg:h-6 lg:w-20 ml-2 inline-block"><span class="block text-black text-opacity-50">XX-XX-XX</span></span>
            <span class="cashmoney">Php 123.00</span>
            <span class="text-lg col-start-1 pt-2">Credit/Debit <img src="img/credebit.png" alt="cred" class="h-10 w-10 ml-2 inline-block"><span class="block text-black text-opacity-50">XX-XX-XX</span></span>
            <span class="cashmoney">Php 123.00</span>
            <span class="text-lg col-start-1 pt-2">Cash on Arrival <img src="img/paymentsicon.png" alt="payments" class="h-8 w-8 ml-2 inline-block"><span class="block text-black text-opacity-50">XX-XX-XX</span></span>
            <span class="cashmoney">Php 123.00</span>
            <span class="text-lg col-start-1 pt-2">GCash <img src="img/gcash.png" alt="gcash" class="h-8 w-24 ml-2 inline-block"><span class="block text-black text-opacity-50">XX-XX-XX</span></span>
            <span class="cashmoney">Php 123.00</span>
        </div>
    </div>
    <div class="row-start-4 col-span-2 md:row-start-1 md:col-start-4 lg:col-start-6 lg:col-span-2 grid grid-rows-5 -mr-10 md:mr-0">
        <div class="row-start-2 bg-baby-blue p-4 rounded shadow-xl grid grid-rows-4 grid-cols-2 h-48">
            <span class="col-start-1 row-start-1 text-2xl font-bold">Feedback</span>
            <img src="img/feedbackicon.png" alt="trip" class="col-start-2 row-span-1 h-12 w-12 lg:h-16 lg:w-16 ml-8 lg:ml-40 relative">
            <span class="col-start-1 row-start-2 text-4xl lg:text-6xl mt-6 lg:mt-0">3</span>
            <span class="col-span-2 row-start-4 flex justify-center mt-3 text-2xl text-dark-gray font-condensed bg-teal -ml-4 -mr-4 -mb-4 pt-2 rounded-b">Most Recent</span>
        </div>
        <div class="row-start-4 row-span-2 md:row-start-3 bg-white pl-4 pt-4 shadow-xl grid grid-rows-6 grid-cols-2 divide-y divide-light-gray overflow-x-auto lg:overflow-hidden -mt-48 md:mt-0">
            <span class="flex justify-between col-span-3 text-2xl lg:pr-20">Feedback <span class="text-baby-blue cursor-pointer">View All</span></span>
            <span class="text-lg col-start-1 pt-2">Driver 1</span>
            <span class="col-start-2 pt-4 lg:pl-20"><div class="flex"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="yellow" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
              </svg><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="yellow" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
              </svg><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="yellow" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
              </svg><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="yellow" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
              </svg><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="yellow" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
              </svg></div>
            </span>
            <span class="text-lg col-start-1 pt-2">Driver 2</span>
            <span class="col-start-2 pt-4 lg:pl-20"><div class="flex"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="yellow" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
              </svg><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="yellow" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
              </svg><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="yellow" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
              </svg><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="yellow" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
              </svg><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
              </svg></div>
            </span>
            <span class="text-lg col-start-1 pt-2">Driver 3</span>
            <span class="col-start-2 pt-4 lg:pl-20"><div class="flex"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="yellow" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
              </svg><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="yellow" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
              </svg><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="yellow" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
              </svg><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
              </svg><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
              </svg></div>
            </span>
            <span class="text-lg col-start-1 pt-2"></span>
            <span class="col-start-2 pt-4 lg:pl-20"></span>
            <span class="text-lg col-start-1 pt-2"></span>
            <span class="col-start-2 pt-4 lg:pl-20"></span>
        </div>
    </div>
@endsection