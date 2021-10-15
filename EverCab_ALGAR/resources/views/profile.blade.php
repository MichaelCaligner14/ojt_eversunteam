@extends('layouts.profile')

@section('content')
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
            <span class="text-xl">{{$prof->username}}</span>
        </div>
        <div class="mt-4 lg:ml-10">
            <img src="img/dateicon.png" alt="date" class="w-8 inline-block">
            <span class="text-xl">{{$prof->bdate}}</span>
        </div>
        <div class="mt-4 lg:ml-10">
            <img src="img/addressicon.png" alt="trip" class="w-8 inline-block">
            <span class="text-xl">{{$prof->address}}</span>
        </div>
        <div class="mt-4 lg:ml-10">
            <img src="img/phoneicon.png" alt="phone" class="w-8 inline-block">
            <span class="text-xl">{{$prof->phone}}</span>
        </div>
        <div class="mt-4 lg:ml-10">
            <img src="img/mailicon.png" alt="mail" class="w-8 inline-block">
            <span class="text-xl">{{$prof->email}}</span>
        </div>
        <div class="lg:ml-24">
        <button class="btntest mt-5 cursor-pointer">
            <a href="{{url('profset')}}">Edit Profile</a>
        </button>
        </div>
    </div>
@endsection