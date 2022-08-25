<?php

namespace App\Http\Controllers;
use App\Models\author;
use Illuminate\Http\Request;
use App\Models\publication;
use App\Models\feedback;
use App\Models\review;
use App\Models\reader;
use App\Models\owner;
use App\Models\contactus;
use App\Models\book;
use Mail;
use App\Mail\TestMail;

class adminController extends Controller
{
    //AUTHOR DETAILS 
    function showa()
    {
        $data=author::paginate(5);
        return view('admin\author\showauthor',["author"=>$data]);
    }

    function authorinsert(Request $req){
       // if($req->input('btncancel')){
            $pub = new author;
        
            $pub->authorname = $req->input('txtauthorname');
            $pub->contactno = $req->input('txtcno');
            $pub->emailid = $req->input('txtemail');
            $uploadedFile=$req->file('fupimage');
            $filename = 'file/'.$uploadedFile->getClientOriginalName();
            $pub->image = $filename;
            $req->file('fupimage')->move(public_path('file'),$filename);


            $pub->save();
         //   echo $pub;
        //     $data=author::all();
          // return view('admin\showauthor',["author"=>$data]);
            return redirect('showa');
        // }
        // else{
        //     return redirect('/adminhome1');
        // }
        
    }

    function authorDelete($authorid){
        $aut=new author;
        $data=$aut::find($authorid);
        $data->delete();
      //  $data=author::all();
     //  return view('admin\showauthor',["author"=>$data]);
        return redirect()->back();
    }

    function authorsearch($authorid){
        $aut = author::find($authorid);
        //echo $data;
        return view('admin\author\authorupdate',['author'=>$aut]);
        
    }

    function authorupdate(Request $req){
       
       $data = author::find($req->input('txtauthorid'));
        $data->authorname = $req->input('txtauthorname');
        $data->contactno = $req->input('txtcno');
        $data->emailid = $req->input('txtemail');
        
        $uploadedFile=$req->file('fupimage');
        $filename = 'file/'.$uploadedFile->getClientOriginalName();
        $data->image = $filename;
        $req->file('fupimage')->move(public_path('file'),$filename);
        $data->save();
        //return view('main/signup');
      //  return $req->input();
       $data=author::all();
        return view('admin/author/showauthor',['author'=>$data]);
     // return redirect('showp',['author'=>$data]);
    }
    


    //PUBLICATION 
    function showp()
    {
        $data=publication::paginate(5);
        return view('admin\publication\publicationshow',["publication"=>$data]);
    }

    function pubinsert(Request $req){
        $pub = new publication;
        $pub->pubname = $req->input('txtpubname');
        $pub->contactno = $req->input('txtcno');
        $pub->emailid = $req->input('txtemail');
        $pub->save();
       return redirect('showp');
    }

    function pubDelete($pubid){
        $pub=new publication;
        $data=$pub::find($pubid);
        $data->delete();
        return redirect('showp');
    }

    function pubsearch($pubid){
        $data = publication::find($pubid);
        //echo $data;
        return view('admin\publication\publicationupdate',['publication'=>$data]);
    }

    function pubupdate(Request $req){
       
       $data = publication::find($req->input('pubid'));
        $data->pubname = $req->input('txtpubname');
        $data->contactno = $req->input('txtcno');
        $data->emailid = $req->input('txtemail');
        
        $data->save();
        
        return redirect('showp');
    }

    //FEEDBACK
    function showf()
    {
        $data=feedback::paginate(10);
        return view('admin\feedbackshow',["feedback"=>$data]);
    }

    //REVIEW
    function showr()
    {
        $data=review::paginate(10);
        return view('admin\reviewshow',["review"=>$data]);
    }

    //READER
    function showread()
    {
        $data=reader::paginate(10);
        return view('admin\readershow',["reader"=>$data]);
    }

    //OWNER
    function showo()
    {
        $data=owner::paginate(10);
        return view('admin\ownershow',["owner"=>$data]);
    }

    function selecto()
    {
        $data=owner::all();
        return view('admin\adminemail',["owner"=>$data]);
    }

    function admincomm(Request $req){
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

    //CONTACTUS
    function showc()
    {
        $data=contactus::paginate(10);
        return view('admin\contactshow',["contact"=>$data]);
    }

    function contactsearch($contactid){
        $data = contactus::find($contactid);
        //echo $data;
        return view('\admin\responseform',['contact'=>$data]);
    }

    function response(Request $req){
       $con = contactus::find($req->input('contactid'));
       $con->response = $req->input('txtresponse');
       $email = $req->input('txtemail');
       $con->save();
       $msg=$req->input('txtresponse');
        $details=[
            'title'=>'Mail to response of Contact to BookMyBook',
            'body'=>$msg
        ];
        
        \Mail::to($email)->send(new TestMail($details));
       // return "Email Sent";
       // echo $con;
       //return back()->with('success', 'MAIL SENT.');
      // return redirect()->route('adminhome1');
      $data=contactus::paginate(10);
      return view('admin\contactshow',["contact"=>$data]);
    }


    function adminhome( ){
        $book1=book::all()->count();
        $reader=reader::all()->count();
        $owner=owner::all()->count();
        $contactus=contactus::all()->count();
        $book=book::all()->take(3);
        $data = [
            "book1"=>$book1,
            "reader" =>$reader,
            "owner"=>$owner,
            "contactus"=>$contactus,
            "book"=>$book
        ];
        return view('admin\adminhome')->with($data);
    }

    
}
