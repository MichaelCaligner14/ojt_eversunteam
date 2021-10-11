@extends('layouts.reservation')

@section('content')
    <div class="col-start-2 grid grid-rows-5 lg:col-span-2">
        <div class="row-start-1 p-4 flex">
            <img src="img/reserveicon.png" alt="reserve" class="h-10 mt-10"><span class="font-bold font-condensed text-3xl ml-3 mt-10">Reservations</span>
        </div>
    </div>
    <form method="post" action="{{route('reservationupdate')}}" class="bg-baby-blue ml-20 col-span-4 row-span-3 -mb-1 md:col-start-3 md:col-span-3 lg:col-start-4 lg:col-span-2 row-start-2 md:row-start-2 md:row-span-2 text-2xl p-5 shadow-xl rounded-md md:-mb-10 md:ml-0 md:mr-28 lg:mr-32">
        @csrf
        <input type="hidden" name="id" value="{{$reserve->id}}">
        Date: <input type="text" name="date" value="{{$reserve->date}}" class="block border mt-2">
        Pickup Location: <input type="text" name="pickup" value="{{$reserve->pickup}}" class="block border mt-2">
        Destination: <input type="text" name="destination" value="{{$reserve->destination}}" class="block border mt-2">
        Pickup Time: <input type="text" name="time" value="{{$reserve->time}}" class="block border mt-2">
        <input type="submit" value="Submit Reservation" class="btntest mt-5 cursor-pointer"></input>
        <a href="{{url('reservationlist')}}" class="btntest mt-5 ml-5">
            Return to Reservation List
        </a>
        @if(Session::has('reservation_update'))
        <span>{{Session::get('reservation_update')}}</span>
        @endif
    </form>
@endsection