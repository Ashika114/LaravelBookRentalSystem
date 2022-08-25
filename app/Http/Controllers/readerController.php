<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\book;
use App\Models\reader;
use App\Models\register;
use App\Models\vwbook;
use App\Models\vwreturn;
use App\Models\vwbkcancel;
use App\Models\bookreturn;
use App\Models\booking;
use App\Models\vwbooking;
use App\Models\bookingcancel;
use Session;

class readerController extends Controller
{
    
    //READER....
    function readerpro(){
        $id=session('regid');
        $reader= new reader;
        $data = $reader::where('regid',$id)->first();
      //  echo $data;
        return view('reader\readerprofile',["reader"=>$data]);
    }

    function readerbookshowController(){
        $data=book::all();
        return view('reader\readerbookshow',["book"=>$data]);
    }

    function booking($bookid){
        $book=new book;
        $data1=$book::find($bookid);
        $data = new booking;
        $lastid=booking::orderBy('bookingid', 'desc')->first()->bookingid;
        $bkid=$lastid + 1;
        $data->bookingid = $bkid;
        Session::put('bookingid', $bkid);
        $data->bookingdate = date('Y-m-d');
        $data->bookid = $data1['bookid'];
        $data->ownerid = $data1['ownerid'];
        $data->readerid = session('regid');
        $bookr = new bookreturn;
        $bookr->bookingid = $bkid;
        $bookr->status = "pending";
        $bookr->save();
        $data->save();
        $book=vwbook::find($data1['bookid']);
        return view('reader\readerpayment',["book"=>$book]);
    }


    function bookdetails($bookid){
        $vwb=new vwbook;
        $data=$vwb::find($bookid);
        return view('reader\readerbookdetails',["book"=>$data]);
    }


    function readerbookingshow(){
        $data=vwbooking::all()->where('readerid',session('regid'));
        return view('reader\readerbookingshow',["booking"=>$data]);
    }

    function readerbookingcancelshow(){
        $data=vwbkcancel::all()->where('readerid',session('regid'));
        return view('reader\readerbookingcancel',["bookingcan"=>$data]);
    }

    function readerbkcancel($bookingid){
          $book = new booking;
          $data=$book::find($bookingid);
          $data->status = "cancel";
          $data->save();
          echo $data;
          return view('reader\readerbkcanform',["bookingcan"=>$data]);
    }

    function bookingcancelinsert(Request $req){
          $bk = new bookingcancel;
          $bk->bookingid = $req->input('txtbookingid');
          $bk->reason = $req->input('txtreason');
          $bk->bkcandate = date('Y-m-d');
          $bk->status= "pending";
          $bk->save();
          $data=vwbkcancel::all()->where('readerid',session('regid'));
          return view('reader\readerbookingcancel',["bookingcan"=>$data]);
    }

    function readerhome1(){
        $data=book::take(5)->get();
        return view('reader\readerhome',["book"=>$data]);
    }

    function readerbookreturn(){
        $data=vwreturn::all()->where('fname',session('username'));
        return view('reader\readerbookreturn',["bookreturn"=>$data]);
    }
    function readerreturn($returnid){
        $ret = new bookreturn;
        $ret=$ret::find($returnid);
        $ret->status = "RETURNED";
        $ret->save();
     //   echo $data;
       // return view('reader\readerbookreturn',["bookreturn"=>$data]);
       return back();
    }
    function rprofile(Request $req){
        $id=session('regid');
        $reader= new reader;
        $data = $reader::where('regid',$id)->first();
        $data->fname = $req->input('txtfname');
        $data->address = $req->input('txtaddress');
        $data->pincode = $req->input('txtpincode');
        $data->birthdate = $req->input('txtbirthdate');
        $data->contactno = $req->input('txtcontactno');
        $data->emailid = $req->input('txtemailid');
        $data->city = $req->input('txtcity');
        $data->gender = $req->input('gender');
        $uploadedFile=$req->file('fupimage');
        $filename = 'file/'.$uploadedFile->getClientOriginalName();
        $data->image = $filename;
        $req->file('fupimage')->move(public_path('file'),$filename);
        $data->save();
       // echo $data;
       return view('reader\readerprofile',["reader"=>$data]);
    }
}
