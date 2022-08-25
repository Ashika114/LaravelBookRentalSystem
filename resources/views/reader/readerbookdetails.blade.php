@extends('reader/readerlayout')
@section('title','book details')
<style>
body {font-family: "Times New Roman", Georgia, Serif;}
h1, h2, h3, h4, h5, h6 {
  font-family: "Playfair Display";
  letter-spacing: 1px;
}
</style>
@section('details')
 <div class="row" >
    <div class="col-6" style="margin-top:30px;">
    
        <img src="{{$book['image']}}" alt="Book Image" width="530" height="550">
    </div>

    <div class="col-6" style="margin-top:30px;">
    
        <h1>Book details</h1><br>
        <h5><b>Book Name :</b> {{$book['bookname']}}</h5>
        <h5><b>Author Name :</b> {{$book['authorname']}}</h5>
        <h6><b>Publication Name :</b> {{$book['pubname']}}</h6>
        <h6><b>Short Name :</b> {{$book['shortname']}}</h6>
        <h5><b>Total Page :</b> {{$book['totalpage']}}</h5>
        <hr>
        <h4><b>Price : </b>{{$book['price']}}</h4>
        <hr>
        <h5 style="margin-left:50px;"><b>Details</b></h5>
        <p>{{$book['details']}}</p>
        <hr>
        <p><button style="color: white; background-color: #eb5d1e; border: none; outline: 0; padding: 12px;
         text-align: center; cursor: pointer; width: 50%; font-size: 18px;">Booking</button></p>
    </div>
    
</div>

<hr>
@endsection