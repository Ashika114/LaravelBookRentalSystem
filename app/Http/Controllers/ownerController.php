<?php

namespace App\Http\Controllers;
use App\Models\book;
use App\Models\owner;
use App\Models\register;
use App\Models\author;
use App\Models\reader;
use App\Models\publication;
use Mail;
use App\Mail\TestMail;

use Illuminate\Http\Request;

class ownerController extends Controller
{

    //OWNER....
    function index(){
        $id=session('regid');
        $owner= new owner;
        $data = $owner::where('regid',$id)->first();
        return view('owner\ownerprofile',["owner"=>$data]);
    }
    
    function ownerupdate(Request $req){
        $id=session('regid');
        $owner= new owner;
        $owner = $owner::where('regid',$id)->first();
        $owner->ownername=$req->input('txtownername');
        $owner->address= $req->input('txtaddress');
        $owner->city= $req->input('txtcity');
        $owner->contactno= $req->input('txtcontactno');
        $owner->pincode= $req->input('txtpincode');
        $owner->gender= $req->input('gender');
        $owner->birthdate= $req->input('txtbirthdate');
        $uploadedFile=$req->file('fupimage');
            $filename = 'file/'.$uploadedFile->getClientOriginalName();
            $owner->image = $filename;
            $req->file('fupimage')->move(public_path('file'),$filename);
        $owner->save();
        return back();
    }

    function selectr()
    {
        $data=reader::all();
        return view('owner\owneremail',["reader"=>$data]);
    }

    function ownercomm(Request $req){
      //  $con = owner::find($req->input('txtowner'));
       // $con->response = $req->input('txtmessage');
        $email = $req->input('txtowner');
        $msg=$req->input('txtmessage');
       // echo $email;
         $details=[
             'title'=>'Mail from Admin of BookMyBook',
             'body'=>$msg
         ];
         
         \Mail::to($email)->send(new TestMail($details));
        
        return back()->with('success', 'MAIL SENT.');

     }
    
    


}
