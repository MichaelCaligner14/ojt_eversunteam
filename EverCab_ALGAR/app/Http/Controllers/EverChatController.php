<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EverChat;
use App\Models\EverMessenger;
use Illuminate\Support\Facades\Auth;

class EverChatController extends Controller
{
    public function rooms(Request $request){
        return EverChat::all();
    }

    public function messages(Request $request, $roomId){
        return EverMessenger::where('chat_room_id', $roomId)
        ->with('user')
        ->orderBy('created_at', 'DESC')
        ->get();
    }

    public function newMessage(Request $request, $roomId){
        $newMessage = new EverMessenger;
        $newMessage->user_id = Auth::id();
        $newMessage->chat_room_id = $roomId;
        $newMessage->message = $request->message;
        $newMessage->save();

        return $newMessage;
    }
}
