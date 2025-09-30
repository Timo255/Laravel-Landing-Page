<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use App\Notifications\Subscriber as SubscribeUser;

class SubscribeController extends Controller
{
    public function index(Request $request)
    {
        $request->validate([
         'first_name' => "required|string",   
         'last_name' => "required|string",   
         'email' => "required|string|email",   
        ]);

        $userInfo = [
           'first_name' => $request->first_name,
           'subject' => 'Welcome Email Automation',
        ];


        Notification::route('mail', 'timokim62@gmail.com')->notify(new SubscribeUser($userInfo));

        Subscriber::create($request->all());

        return view('include.Product')->with('success', 'Thanks for subscribing us!');
    }
}
