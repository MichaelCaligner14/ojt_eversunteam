@extends('layouts.profset')

@section('content')
    <div class="ml-10 md:ml-0 col-start-1 col-span-5 md:col-start-2 md:col-end-5 md:col-span-3 lg:col-start-2 lg:col-end-8 lg:col-span-6 row-start-2 row-span-6 row-end-7 lg:row-start-2 lg:row-end-7 mb-10 lg:-mt-10 grid grid-cols-4 lg:grid-cols-8 grid-rows-9 md:text-xl font-condensed">
        <a href="{{url('profset')}}" class="lg:col-span-2 mb-20 border-b-4 pl-8 pt-4 lg:pl-36 hover:bg-dark-blue hover:text-white"> Profile Settings</a>
        <a href="#" class="lg:col-span-2 mb-20 border-b-4 pl-6 pt-4 lg:pl-36 bg-dark-blue text-white">Payment Settings</a>
        <a href="{{url('privset')}}" class="lg:col-span-2 mb-20 border-b-4 pl-4 pt-4 lg:pl-36 hover:bg-dark-blue hover:text-white">Privacy & Security</a>
        <a href="{{url('notifset')}}" class="lg:col-span-2 mb-20 border-b-4 pl-3 md:pl-10 pt-4 lg:pl-36 hover:bg-dark-blue hover:text-white">Notifications</a>
        <div class="row-start-2 col-span-4 lg:col-span-8 text-3xl">
            Preferred Payment Method/s <span class="text-black">(unselected methods will not show up in the payment menu)</span>
        </div>
        <div class="row-start-3 col-span-4 lg:col-span-8">
            <input type="checkbox" class="w-5 h-5 mr-5">
            <span class="text-2xl">Gcash</span>
            <img src="img/gcash.png" alt="gcash" class="inline-block w-20">
        </div>
        <div class="row-start-4 col-span-4 lg:col-span-8">
            <input type="checkbox" class="w-5 h-5 mr-5">
            <span class="text-2xl">Paypal</span>
            <img src="img/paypal.png" alt="payme" class="inline-block w-24">
        </div>
        <div class="row-start-5 col-span-4 lg:col-span-6">
            <input type="checkbox" class="w-5 h-5 mr-5">
            <span class="text-2xl">Debit/Credit Card</span>
            <img src="img/credebit.png" alt="cred" class="inline-block w-12">
        </div>
        <div class="row-start-6 col-span-4 lg:col-span-8">
            <input type="checkbox" class="w-5 h-5 mr-5">
            <span class="text-2xl">Apple Pay</span>
            <img src="img/appay.png" alt="applay" class="inline-block w-16">
        </div>
        <div class="row-start-7 col-span-4 lg:col-span-8">
            <input type="checkbox" class="w-5 h-5 mr-5">
            <span class="text-2xl">Google Pay</span>
            <img src="img/goopay.png" alt="gooplay" class="inline-block w-10">
        </div>
        <div class="row-start-8 col-span-4 lg:col-span-8 mb-32">
            <input type="checkbox" class="w-5 h-5 mr-5">
            <span class="text-2xl">Cash on Arrival</span>
            <img src="img/paymentsicon.png" alt="arrive" class="inline-block w-10">
        </div>
        <div class="col-start-1 col-span-2 row-start-9">
            <button class="btntest">Deactivate my Account</button>
        </div>
        <div class="col-start-4 lg:col-start-8 row-start-9">
            <button class="btntest">Save Changes</button>
        </div>
    </div>
@endsection