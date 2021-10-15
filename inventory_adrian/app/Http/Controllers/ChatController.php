<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ChatRoom;
use App\Models\ChatMessage;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    public function rooms(Request $request){
        return ChatRoom::all();
    }

    public function message(Request $request, $roomID){
        return ChatMessage::where('chat_room_id', $roomID)
        ->with('name')
        ->orderBy('creat_at', 'DESC')
        ->get();
    }
    public function newMessage(Request $request, $roomID){
        $newMessage = new ChatMessage;
        $newMessage->user_id = Auth::id();
        $newMessage->chat_room_id = $roomID;
        $newMessage->message = $request->message;
        $newMessage->save();

        return $newMessage;
    }
}
