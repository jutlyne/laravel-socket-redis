<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Chat;
use App\Models\User;
use App\Events\ChatEvent;

class ChatController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        $chats = Chat::all();

        return view('welcome', compact('chats'));
    }

    public function loginWithId()
    {
        Auth::loginUsingId(
            User::all()->random()->id
        );

        return redirect()->route('chat.index');
    }
	public function sendMessage(Request $request){
        $chat = new Chat();
        $chat->from_user_id = auth()->id();
        $chat->author = auth()->user()->name;
        $chat->message = $request->message;
        $chat->save();

		return response()->json([]);
	}
}
