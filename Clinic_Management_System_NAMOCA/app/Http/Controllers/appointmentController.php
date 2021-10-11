<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Patient;
use Hash;
use Session;
use Illuminate\Support\Facades\DB;


class appointmentController extends Controller
{
    public function appointment(){
    
        return view ('appointment');
    }
}
