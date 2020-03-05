<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Mail\ContactVidiz;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    // send mail
    public function sendMail() {
        // cho nay la de kiem tra cac dieu kien cua email
        request()->validate(['email' => 'required|email']);

        // cho nay la de gui mail
//            Mail::raw('It work!', function ($message) {
//                $message->to(request('email'))
//                        ->subject('hello. My name is Vdiz');
//            });

        Mail::to(\request('email'))->send(new ContactVidiz());


        return 'dut anh Will nha!';
    }
    public function blankImage(Request $request) {
        $email = $request->email ?? 'unknown';
        Log::alert('abc: ' . $email);
        return response() ->file(resource_path('chugau.jpg'));
    }
}
