<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\messages;
use Illuminate\Support\Facades\Auth;
use App\User;

class PageController extends Controller
{
    public function welcome() {
        return view('welcome');
    }

    public function register() {
        return view('register');
    }

    public function message(Request $req) {
        if(Auth::check())
            $messages = messages::where('receiver', $req->user()->id)->get();
        else
            $messages = '';

        return view('messages')->with(compact('messages'));
    }

    public function login() {
        
        return view('loginpage');
    }

    public function putmessage() {
        $users = User::all();
        return view('putmessage')->with(compact('users'));
    }

    public function insertmessage(Request $req) {
        $db = new messages;

        $db->id = null;
        $db->message = $req->message;
        $db->receiver = $req->receiver;
        $db->save();
        return redirect()->route('home');
    }
}
