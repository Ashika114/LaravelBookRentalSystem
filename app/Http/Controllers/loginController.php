<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\register;

class loginController extends Controller
{
    function getlogin(Request $req){
        $validatedata=$req->validate([
            'txtusername' => 'required',
            'txtpassword' => 'required'
        ]);
            $username=$req->txtusername;
            $password=$req->txtpassword;
            $reg = new register;
            $data = $reg::where('username',$username)->first();
            if($data){
                if($data['password']==$password){
                    if($data['usertype']=='admin'){
                        $req->session()->put('username',$username);
                        $req->session()->put('regid',$data['regid']);
                        //return view('admin/adminhome');
                        return redirect('adminhome1');
                    }
                    if($data['usertype']=='owner'){
                        $req->session()->put('username',$username);
                        $req->session()->put('regid',$data['regid']);
                        return redirect('ownerhome');
                    }
                    if($data['usertype']=='reader'){
                        $req->session()->put('username',$username);
                        $req->session()->put('regid',$data['regid']);
                        return redirect('readerhome1');
                    }
                    
                }
                else{
                  //  echo("Incorrect Password");
                    return back()->with('success', 'Incorrect Password.');
                }
            }
            else{
                   // echo("Invalid User");
                    return back()->with('success', 'Incorrect Username.');
            }
    }
    function logout(){
        session()->forget('username');
        return view('main/home1');
    }

    function forget1(Request $req){
        
        $validatedata=$req->validate([
            'txtusername' => 'required',
            'txtpassword' => 'required'
        ]);

        if($req->input('txtpassword') != $req->input('txtpassword1')){
            return back()->with('success', 'Password does not Match');
        }
       
        $data = register::find($req->input('txtusername'));
        if($data){
          $data->password = $req->input('txtpassword');
          $data->save();
        }
        else{
            return back()->with('success', 'Invalid Username'); 
        }
         
         return redirect('/login');
     }

}
