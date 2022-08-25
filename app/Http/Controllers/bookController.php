<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\book;
use App\Models\booking;
use App\Models\vwbooking;
use App\Models\bookingcancel;
use App\Models\author;
use App\Models\publication;
use App\Models\booktype;
use App\Models\vwreturn;
use App\Models\vwbkcancel;

class bookController extends Controller
{
    //BOOK....

    function bookshow()
    {
            $data=book::all()->where('ownerid',session('regid'));
            return view('owner\book\bookshow',["book"=>$data]);
    }

    function authorselect()
    {
        $aut=author::all();
        $pub=publication::all();
        $bktype=booktype::all();
        $data = [
            "aut"=>$aut,
            "pub" =>$pub,
            "bktype"=>$bktype
        ];
     //   return view('home', ["data"=>$data]);
        return view('owner\book\bookform')->with($data);
      //  return view('owner\book\bookform',["aut"=>$data]);
    }


    function bookinsert(Request $req){
        
        $book = new book;
        $book->bookname = $req->input('txtbookname');
        $book->shortname = $req->input('txtshortname');
        $book->authorid=$req->input('lstauthor');
        $book->pubid=$req->input('lstpublication');
        $book->ownerid=session('regid');
        $book->booktypeid=$req->input('lstbooktype');
        $book->price=$req->input('txtprice');
        $book->days=$req->input('txtdays');
        $book->copies=$req->input('txtcopies');
        $book->totalpage=$req->input('txtpage');
        $book->pubdate=$req->input('txtpubdate');
        $book->details=$req->input('txtdetails');
        if($req->file('fupimage')){
        $uploadedFile=$req->file('fupimage');
        $filename = 'file/'.$uploadedFile->getClientOriginalName();
        $book->image = $filename;
        $req->file('fupimage')->move(public_path('file'),$filename);
        }
        else{
            return back()->with('success', 'Insert Image');
        }

        $book->save();
        $data=book::all()->where('ownerid',session('regid'));
        return view('owner\book\bookshow',["book"=>$data]);
    }

    function booksearch($authorid){
        $book = book::find($authorid);    
        $aut=author::all();
        $pub=publication::all();
        $bktype=booktype::all();
        $data = [
            "aut"=>$aut,
            "pub" =>$pub,
            "bktype"=>$bktype,
            "book"=>$book
        ];
        return view('owner\book\bookupdate')->with($data);
        
    }
    function bookupdate(Request $req){
       
         $book = book::find($req->input('txtbookid'));
         $book->bookname = $req->input('txtbookname');
         $book->shortname = $req->input('txtshortname');
         $book->authorid=$req->input('lstauthor');
         $book->pubid=$req->input('lstpublication');
         $book->booktypeid=$req->input('lstbooktype');
         $book->price=$req->input('txtprice');
         $book->copies=$req->input('txtcopies');
         $book->totalpage=$req->input('txtpage');
         $book->pubdate=$req->input('txtpubdate');
         $book->details=$req->input('txtdetails');
         $uploadedFile=$req->file('fupimage');
         $filename = 'file/'.$uploadedFile->getClientOriginalName();
         $book->image = $filename;
         $req->file('fupimage')->move(public_path('file'),$filename);
 
         $book->save();
         $data=book::all()->where('ownerid',session('regid'));
        return view('owner\book\bookshow',["book"=>$data]);
         
       // $data=book::paginate(10);
       // return view('owner\book\bookshow',["book"=>$data]);
     }

    
    function bookingshow()
    {
        $data=vwbooking::all()->where('ownerid',session('regid'));
        return view('owner\book\bookingshow',["booking"=>$data]);
    }

    function bookDelete($bookid){
        $book=new book;
        $data=$book::find($bookid);
        $data->delete();
        return redirect('/bookshow');
    }

   
    function conform($bookingid){
        $book = new booking;
        $data=$book::find($bookingid);
        $data->confirmation = "NO";
        $data->save();
        $data1=booking::all()->where('ownerid',session('regid'));;
        return back();
    }

    function conform1($bookingid){
        $book = new booking;
        $data=$book::find($bookingid);
        $data->confirmation = "YES";
        $data->save();
        return back()->with('success', 'MAIL SENT.');
    }

    function bookingcancelo()
    {
        $data=vwbkcancel::all()->where('ownerid',session('regid'));
        return view('owner\bookingcancel',["bookingcancel"=>$data]);
    }
    function accepted($bkcanid){
        $book = new bookingcancel;
        $data=$book::find($bkcanid);
        $data->status = "Accepted";
        $data->save();
        return back()->with('success', 'MAIL SENT.');
    }

    function bookreturno()
    {
        $data=vwreturn::all()->where('ownername',session('username'));
        return view('owner\bookreturn',["return"=>$data]);
    }


}
