@extends('layouts.profset')
@section('title')
<title>Profile Settings</title>
@stop
@section('content')

<div class="col-start-2 col-end-5 col-span-3 lg:col-start-2 lg:col-end-8 lg:col-span-6 row-start-2 row-end-6 lg:row-start-2 lg:row-end-6 md:-mt-20 mb-10 lg:-mt-20 grid grid-cols-4 lg:grid-cols-8 grid-rows-12 md:grid-rows-7 md:text-xl font-condensed">
        <a href="#" class="lg:col-span-2 mb-20 border-b-4 pl-8 pt-4 lg:pl-36 bg-dark-blue text-white"> Profile Settings</a>
        <a href="{{url('payset')}}" class="lg:col-span-2 mb-20 border-b-4 pl-6 pt-4 lg:pl-36 hover:bg-dark-blue hover:text-white">Payment Settings</a>
        <a href="{{url('privset')}}" class="lg:col-span-2 mb-20 border-b-4 pl-4 pt-4 lg:pl-36 hover:bg-dark-blue hover:text-white">Privacy & Security</a>
        <a href="{{url('notifset')}}" class="lg:col-span-2 mb-20 border-b-4 pl-3 md:pl-10 pt-4 lg:pl-36 hover:bg-dark-blue hover:text-white">Notifications</a>
    <form method="post" action="{{route('updateprofile')}}" class="col-start-1 col-span-8 grid grid-cols-4 lg:grid-cols-8 grid-rows-12 md:grid-rows-7 md:text-xl font-condensed">
        @csrf
        <div class="col-start-1 col-span-2 md:col-span-1 row-start-2 mt-2">
            <img src="{{URL::asset('img/nameicon.png')}}" alt="name" class="inline-block">
            <span>Username</span>
            <input type="text" name="username" value="{{$prof->username}}" class="border mt-3 w-40 lg:w-60">
        </div>
        <div class="col-start-3 md:col-start-2 col-span-2 md:col-span-1 row-start-2 lg:col-start-3 mt-2">
            <img src="{{URL::asset('img/phoneicon.png')}}" alt="date" class="inline-block h-8 w-8">
            <span">Phone Number</span>
            <input type="text" name="phone" value="{{$prof->phone}}" class="border mt-2 w-40 lg:w-60">
        </div>
        <div class="col-start-1 col-span-2 md:col-span-1 row-start-3 mt-2">
            <img src="{{URL::asset('img/dateicon.png')}}" alt="date" class="inline-block">
            <span>Birth Date</span>
            <input type="text" name="bdate" value="{{$prof->bdate}}" class="border mt-3 w-40 lg:w-60">
        </div>
        <div class="col-start-3 md:col-start-2 col-span-2 md:col-span-1 row-start-3 lg:col-start-3 mt-2">
            <img src="{{URL::asset('img/mailicon.png')}}" alt="mail" class="inline-block h-8 w-8">
            <span>Email</span>
            <input type="text" name="email" value="{{$prof->email}}" class="border mt-2 w-40 lg:w-60">
        </div>
        <div class="col-start-1 col-span-2 md:col-span-1 row-start-4 mt-2">
            <img src="{{URL::asset('img/addressicon.png')}}" alt="address" class="inline-block">
            <span>Home Address</span>
            <input type="text" name="address" value="{{$prof->address}}" class="border mt-3 w-40 lg:w-60">
        </div>
        <div class="col-start-3 md:col-start-2 col-span-2 md:col-span-1 row-start-4 lg:col-start-3 mt-2">
            <img src="{{URL::asset('img/globeicon.png')}}" alt="globe" class="inline-block h-8 w-8">
            <span>Language</span>
            <select name="language" id="" class="border mt-3 w-40 lg:w-60">
                <option value="">English (USA)</option>
                <option value="">Tagalog (PH)</option>
                <option value="">Japanese (JP)</option>
            </select>
        </div>
        <div class="-ml-10 -mr-10 md:ml-0 md:mr-0 mt-10 mb-10 md:mt-0 md:mb-0 col-start-2 md:col-start-3 md:col-end-5 col-span-2 row-start-5 row-end-7 row-span-3 md:row-start-2 md:row-end-5 md:row-span-3 lg:col-start-5 lg:col-end-7 lg:col-span-2">
            <span>Choose Profile Picture</span>
            <img src="{{URL::asset('img/pfp.png')}}" alt="pfp" class="h-80 w-80 lg:h-80 lg:w-80 ml-5 lg:ml-12 lg:-mr-12">
            <div class="flex justify-between">
                <span class="text-blue hover:underline cursor-pointer">Upload Now</span>
                <span class="text-red hover:underline cursor-pointer">Delete</span>
            </div>
        </div>
        <div class="col-start-1 row-start-8 md:row-start-5 col-span-2">
            <span>Gender</span>
            <div class="mt-2 ml-2">
                <input type="checkbox"><span> Male</span>
                <input type="checkbox"><span> Female</span>
                <input type="checkbox"><span> Other</span>
            </div>
        </div>
        <div class="col-start-1 row-start-9 mb-10 md:row-start-6 col-span-2">
            <button>Linked Accounts <img src="{{URL::asset('img/plusicon.png')}}" alt="plus" class="inline-block h-6 w-6"></button>
            <div class="mt-2">
                <button>Facebook <img src="{{URL::asset('img/fbicon.png')}}" alt="fb" class="inline-block"></button>
                <button>Twitter <img src="{{URL::asset('img/twittericon.png')}}" alt="twt" class="inline-block h-5 w-5"></button>
            </div>
        </div>
        <div class="col-start-1 col-span-2 row-start-12 md:row-start-7">
        <a href="{{url('deleteprofile')}}/{{$prof->id}}" class="btntest">Deactivate my Account</a>
        </div>
        <div class="col-start-4 lg:col-start-8 row-start-12 md:row-start-7 -mt-5 md:mt-0">
            <input type="submit" value="Save Changes" class="btntest mt-5 cursor-pointer"></input>
        </div>
        @if(Session::has('profile_update'))
        <span class="col-start-2 col-span-2">{{Session::get('profile_update')}}</span>
        @endif
    </div>
    </form> 
</div>
@endsection