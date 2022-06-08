<?php

namespace App\Http\Controllers;

use App\Models\Message;



class MessageController extends Controller
{

    public function showAll()
    {
        $messages = Message::all()->sortByDesc('created_at');

        return view('messages', ['messages' => $messages]);
    }

    public function create(Request $request) {

        $message = new Message();
        $message->title = $request->title;
        $message->content = $request->content;
        $message->save();

        return redirect('/messages');
    }
}
