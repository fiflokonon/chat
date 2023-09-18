<?php

namespace App\Http\Controllers;

use App\Events\ChatMessageEvent;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function index()
    {
        return view('chat.index');
    }

    public function store(Request $request)
    {
        event(new ChatMessageEvent($request->message));
        return response()->json(['success' => 'message.sent']);
    }
}
