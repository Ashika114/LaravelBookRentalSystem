<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\TestMail;

class sendmail extends Controller
{
    function sendemail()
    {
        $details=[
            'title'=>'Mail from IT.com',
            'body'=>'This is for testing'
        ];
        
        \Mail::to('patel.ashika4100@gmail.com')->send(new TestMail($details));
       // \Mail::to('patel.ashika4100@gmail.com')->send(new TestMail($details));
        return "Email Sent";
       // return view('owner/sendmail');
    }
    
}
