@extends('layouts.reservation')

@section('content')
    <div class="col-start-2 grid grid-rows-5 lg:col-span-2">
        <div class="row-start-1 p-4 flex">
            <img src="img/reserveicon.png" alt="reserve" class="h-10 mt-10"><span class="font-bold font-condensed text-3xl ml-3 mt-10">Reservations</span>
        </div>
    </div>
    <div class="col-start-1 col-span-5 md:col-start-2 md:col-end-5 lg:col-end-8 md:col-span-6 row-start-2 row-end-5 row-span-3 bg-white font-condensed overflow-x-scroll lg:overflow-hidden -mr-28 md:-mr-40 lg:mr-0">
        <table class="w-full text-2xl">
            <tr class="bg-baby-blue">
                <th>ID</th>
                <th>Date</th>
                <th>Pickup Location</th>
                <th>Destination</th>
                <th>Pickup Time</th>
                <th>Action</th>
            </tr>
            @foreach($reserves as $reserve)
            <tr>
                <td>{{$reserve->id}}</td>
                <td>{{$reserve->date}}</td>
                <td>{{$reserve->pickup}}</td>
                <td>{{$reserve->destination}}</td>
                <td>{{$reserve->time}}</td>
                <td>
                    <a href="{{url('reservationedit')}}/{{$reserve->id}}">Edit |
                    </a>
                    <a href="{{url('reservationcancel')}}/{{$reserve->id}}">Cancel
                    </a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
    <a href="{{url('reservationadd')}}" class="text-xl mt-5 col-start-3 lg:col-start-5 row-start-5 -ml-20">
        <span class="col-start-5 col-span-1">
            Add Reservation <img src="img/plusicon.png" alt="plus" class="w-6 pl-1 inline-block">
        </span>
    </a>
@endsection