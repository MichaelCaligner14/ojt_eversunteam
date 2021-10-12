@extends('layouts.profset')
@section('title')
<title>Notifications</title>
@stop
@section('content')
    <div class="col-span-5 md:col-start-2 pl-10 md:pl-0 md:col-end-5 md:col-span-3 lg:col-start-2 lg:col-end-8 lg:col-span-6 row-start-2 row-end-6 lg:row-start-2 lg:row-end-6 -mt-20 mb-10 lg:-mt-20 grid grid-cols-4 lg:grid-cols-8 grid-rows-7 md:text-xl font-condensed">
        <a href="{{url('profset')}}" class="lg:col-span-2 mb-20 border-b-4 pl-8 pt-4 lg:pl-36 hover:bg-dark-blue hover:text-white"> Profile Settings</a>
        <a href="{{url('payset')}}" class="lg:col-span-2 mb-20 border-b-4 pl-6 pt-4 lg:pl-36 hover:bg-dark-blue hover:text-white">Payment Settings</a>
        <a href="{{url('privset')}}" class="lg:col-span-2 mb-20 border-b-4 pl-4 pt-4 lg:pl-36 hover:bg-dark-blue hover:text-white">Privacy & Security</a>
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
            <button class="btntest">Deactivate my Account</button>
        </div>
        <div class="col-start-4 col-span-2 lg:col-start-8 row-start-7">
            <button class="btntest">Save Changes</button>
        </div>
    </div>
@endsection