<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\register;
use App\Models\owner;
use App\Models\reader;
use App\Models\contactus;

class showController extends Controller
{
    function show()
    {
        //return register::all();
        $data=register::all();
        return view('main\viewData',["register"=>$data]);
    }

    function insert(Request $req){
        $validatedata=$req->validate([
            'txtusername' => 'required',
            'txtpassword' => 'required',
            'email' => 'required'
        ]);
        

        
        $data = new register;
        $lastid=register::orderBy('regid', 'desc')->first()->regid;
    // $lastid=register::('regid')->primary();
         $data->regid = $lastid + 1;
    
         $date = date('Y-m-d');
         $data->regdate=$date;
         $data->username = $req->input('txtusername');
         $data->password = $req->input('txtpassword');
         $data->usertype = $req->input('txtusertype');
         $data->email = $req->input('email');
         if($data->usertype=='owner'){
              $owner = new owner; 
              $owner->regid =  $lastid + 1;
              $owner->ownername = $req->input('txtusername'); 
              $owner->emailid = $req->input('email');
              $owner->save();         
         }
         if($data->usertype=='reader'){
            $reader = new reader; 
            $reader->regid =  $lastid + 1;
            $reader->fname = $req->input('txtusername'); 
            $reader->emailid = $req->input('email');
            $reader->save();         
         }
         
         $data->save();
         
       //  return view('main\login');
         return redirect('login');
    }
    
    function delete($regid){
        $reg=new register;
        $data=$reg::find($regid);
        $data->delete();
        $data=register::all();
        return view('main\viewData',["register"=>$data]);
    }

    function search($regid){
        $data = register::find($regid);
        return view('main\test',["register"=>$data]);
    }


    function update(Request $req){
       
       $data = register::find($req->input('txtid'));
        $data->username = $req->input('txtusername');
        $data->password = $req->input('txtpassword');
        $data->usertype = $req->input('txtusertype');
        $data->email = $req->input('txtemail');
        $data->save();
        //return view('main/signup');
      //  return $req->input();
       $data=register::all();
        return view('main\viewData',['register'=>$data]);
    }

    function contactus(Request $req){
        $con = new contactus;
        $date = date('Y-m-d');
        $con->contactdate=$date;
        $con->name = $req->input('txtname');
        $con->subject = $req->input('txtsubject');
        $con->details = $req->input('txtmessage');
        $con->contactno = $req->input('txtcno');
        $con->emailid = $req->input('txtemail');
        $con->save();
        return redirect('home');
    }

}
