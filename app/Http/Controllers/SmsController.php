<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Nexmo\Laravel\Facade\Nexmo;

class SmsController extends Controller
{
    public function index()
    {
        try{
            $basic  = new \Nexmo\Client\Credentials\Basic(getenv("NEXMO_KEY"), getenv("NEXMO_SECRET"));
            $client = new \Nexmo\Client($basic);
            $message = $client->message()->send([
                'to' => '+917202974209',
                'from' => 'Nexmo',
                'text' => 'Test SMS'
            ]);
            dd('Message Sent!');
        }
        catch(Exception $e){
            dd("Error :".$e->getMessage());
        }
        
    }
    
}
