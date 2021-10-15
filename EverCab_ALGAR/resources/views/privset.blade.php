@extends('layouts.profset')
@section('title')
<title>Privacy & Security</title>
@stop
@section('content')
    <div class="col-span-5 ml-10 md:ml-0 md:col-start-2 md:col-end-5 md:col-span-3 lg:col-start-2 lg:col-end-8 lg:col-span-6 row-start-2 row-end-6 lg:row-start-2 lg:row-end-6 md:-mt-20 mb-10 grid grid-cols-4 lg:grid-cols-8 grid-rows-9 md:text-xl font-condensed">
        <a href="{{url('profset')}}" class="lg:col-span-2 mb-20 border-b-4 pl-8 pt-4 lg:pl-36 hover:bg-dark-blue hover:text-white"> Profile Settings</a>
        <a href="{{url('payset')}}" class="lg:col-span-2 mb-20 border-b-4 pl-6 pt-4 lg:pl-36 hover:bg-dark-blue hover:text-white">Payment Settings</a>
        <a href="#" class="lg:col-span-2 mb-20 border-b-4 pl-4 pt-4 lg:pl-36 bg-dark-blue text-white">Privacy & Security</a>
        <a href="{{url('notifset')}}" class="lg:col-span-2 mb-20 border-b-4 pl-3 md:pl-10 pt-4 lg:pl-36 hover:bg-dark-blue hover:text-white">Notifications</a>
        <div class="row-start-2 col-span-4 lg:col-span-8 flex justify-between bg-baby-blue pt-8 pl-4 pr-4">
            <span>Password</span>
            <a href="#" class="text-black opacity-50">Change Password</a>
        </div>
        <div class="row-start-3 col-span-4 lg:col-span-8 flex justify-between pt-8 pl-4 pr-4">
            <span>Private my account</span>
            <select name="private" id="" class="text-black opacity-50 bg-light-gray -mt-8 appearance-none">
                <option value="">Yes</option>
                <option value="">No</option>
            </select>
        </div>
        <div class="row-start-4 col-span-4 lg:col-span-8 flex justify-between bg-baby-blue pt-8 pl-4 pr-4">
            <span>Blocked driver</span>
            <a href="#" class="text-black opacity-50">View list</a>
        </div>
        <div class="row-start-5 col-span-4 lg:col-span-8 flex justify-between pt-8 pl-4 pr-4">
            <span>Record location/s</span>
            <select name="private" id="" class="text-black opacity-50 bg-light-gray -mt-8 appearance-none">
                <option value="">Yes</option>
                <option value="">No</option>
            </select>
        </div>
        <div class="row-start-6 col-span-4 lg:col-span-8 flex justify-between bg-baby-blue pt-8 pl-4 pr-4">
            <span>Personalization and data</span>
            <select name="private" id="" class="text-black opacity-50 bg-baby-blue -mt-8 appearance-none">
                <option value="">On</option>
                <option value="">Off</option>
            </select>
        </div>
        <div class="row-start-7 col-span-4 lg:col-span-8 flex justify-between pt-8 pl-4 pr-4">
            <span>Reveal home address</span>
            <select name="private" id="" class="text-black opacity-50 bg-light-gray -mt-8 appearance-none">
                <option value="">On</option>
                <option value="">Off</option>
            </select>
        </div>
        <div class="row-start-8 col-span-4 lg:col-span-8 col-start-3 -ml-32 md:-ml-40 mt-10 lg:col-start-5">
            <a href="#" class="text-lg text-white bg-dark-blue rounded-full py-2 px-4">Enable Two-Factor Authentication</a>
        </div>
        <div class="col-start-1 mt-10 col-span-2 row-start-9">
            <button class="btntest">Deactivate my Account</button>
        </div>
        <div class="col-start-4 mt-10 lg:col-start-8 row-start-9">
            <button class="btntest">Save Changes</button>
        </div>
    </div>
@endsection