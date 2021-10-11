@extends('layouts.payments')

@section('content')
    <div class="col-start-2 grid grid-rows-5 lg:col-span-2">
        <div class="row-start-1 p-4 flex">
            <img src="img/paymentsicon.png" alt="reserve" class="h-10 mt-10"><span class="font-bold font-condensed text-3xl ml-3 mt-10">Payments</span>
        </div>
    </div>
    <div class="col-span-5 ml-10 md:ml-0 md:col-start-2 md:col-end-5 lg:col-start-2 lg:col-end-8 md:col-span-3 lg:col-span-6 row-start-2 row-end-5 row-span-3 bg-white grid grid-rows-8 divide-y divide-light-gray font-condensed">
        <span class="row-start-1 text-3xl bg-teal pl-5 pt-5 font-bold">Primary Payment Method/s:</span>
        <span class="row-start-2 text-3xl pt-5 pl-5 flex">Gcash <img src="img/gcash.png" alt="gcash" class="h-10 w-28 pl-4"></span>
        <span class="row-start-3 text-3xl pt-5 pl-5 flex">Cash on Arrival <img src="img/paymentsicon.png" alt="payme" class="h-12 pl-4 -mt-3"></span>
        <span class="row-start-4 p-6"></span>
        <span class="row-start-5 text-3xl bg-teal pl-5 pt-5 font-bold">Secondary Payment Method/s:</span>
        <span class="row-start-6 text-3xl pt-5 pl-5 flex">Paypal <img src="img/paypal.png" alt="paypal" class="h-10 w-28 pl-4"></span>
        <span class="row-start-7 text-3xl pt-5 pl-5 flex">Debit/Credit Card <img src="img/credebit.png" alt="cred" class="h-12 pl-4 -mt-2"></span>
        <span class="row-start-8 p-6"></span>
    </div>
@endsection