<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Notifications\EverMail;
use Illuminate\Support\Facades\Notifications;

class EverMailController extends Controller
{
    public function sendMailNotif(){

        $user = User::first();

        $evermailData = [
            'body' => 'You received a new mail notification',
            'evermailText' => 'You are allowed to mail',
            'url' => url('/'),
            'thankyou' => 'You have 14 days to respond'
        ];

        $user->notify(new EverMail($evermailData));
    }
}
