<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Driver;

class DriverController extends Controller
{
    public function driverApp(){
        return view('driverapp');
    }
    public function driverPay(){
        return view('driverpay');
    }
}
