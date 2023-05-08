<?php

namespace App\Http\Controllers\Mails;

use App\Http\Controllers\Controller;
use App\Jobs\QueueMailJob;
use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendMailController extends Controller
{
    public function store(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $message = $request->message;

        $data = [
          'name' => $name,
          'email' => $email,
          'message' => $message,
        ];

        QueueMailJob::dispatch($data);
    }
}
