@extends('owner/ownerlayout')
@section('title','book form')
<style>
  label {
    font-size:20px;
    font-weight:bold;
    
  }
  #row{
    margin-top: 20px;
    text-align: left;
  }
  .form-control:valid {
  background-color:#F5F5F5;
  }
  
</style>
@section('header','BOOK FORM')
@section('details')
<form action="\bookupdate" method="post" enctype="multipart/form-data">
@csrf
  <div class="container">
    <div class="row d-flex justify-content-center align-items-center">
      <div class="col-12 col-md-8">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">
          <input type="hidden" value="{{$book['bookid']}}" name="txtbookid" />
            <div class="row" id="row">
              <div class="col-4">
                 <label for="aname">Author Name</label>
              </div>
              <div class="col">
                <select name="lstauthor" class="form-control">
                @foreach($aut as $a)
                    <option value="{{$a->authorid}}">{{$a->authorname}}</option>
                @endforeach
                </select>
              </div>
            </div>

            <div class="row" id="row">
              <div class="col-4">
                 <label for="pname">Publication Name</label>
              </div>
              <div class="col">
                <select name="lstpublication" class="form-control">
                @foreach($pub as $p)
                    <option value="{{$p->pubid}}">{{$p->pubname}}</option>
                @endforeach
                </select>
              </div>
            </div>

            <div class="row" id="row">
              <div class="col-4">
                 <label for="type">BookType</label>
              </div>
              <div class="col">
                <select name="lstbooktype" class="form-control">
                @foreach($bktype as $bk)
                    <option value="{{$bk->booktypeid}}">{{$bk->booktypename}}</option>
                @endforeach
                </select>
              </div>
            </div>

            <div class="row" id="row">
              <div class="col-4">
                 <label for="bname">Book Name</label>
              </div>
              <div class="col">
                <input type="text" class="form-control" value="{{$book['bookname']}}" name="txtbookname" id="bname" placeholder="Enter Book Name" >
              </div>
            </div>

            <div class="row" id="row">
              <div class="col-4">
                 <label for="sname">Short Name</label>
              </div>
              <div class="col">
                <input type="text" class="form-control"  value="{{$book['shortname']}}" name="txtshortname" id="sname" placeholder="Enter Short Name" >
              </div>
            </div>

            <div class="row" id="row">
              <div class="col-4">
                 <label for="tpage">Total Page</label>
              </div>
              <div class="col">
                <input type="number" class="form-control" value="{{$book['totalpage']}}" name="txtpage" id="tpage" placeholder="Enter Page Number" >
              </div>
            </div>

            <div class="row" id="row">
              <div class="col-4">
                 <label for="img">Image</label>
              </div>
              <div class="col">
                <input type="file" class="form-control" name="fupimage" id="img">
              </div>
            </div>

            <div class="row" id="row">
              <div class="col-4">
                 <label for="price">Price</label>
              </div>
              <div class="col">
                <input type="number" class="form-control" value="{{$book['price']}}" name="txtprice" id="price" placeholder="Enter Price" >
              </div>
            </div>

            <div class="row" id="row">
              <div class="col-4">
                 <label for="pdate">Publication Date</label>
              </div>
              <div class="col">
                <input type="text" class="form-control" value="{{$book['pubdate']}}" name="txtpubdate" id="pdate" placeholder="Enter Price" >
              </div>
            </div>

            <div class="row" id="row">
              <div class="col-4">
                 <label for="pdate">No of Days</label>
              </div>
              <div class="col">
                <input type="text" class="form-control" value="{{$book['days']}}" name="txtdays" id="pdate" placeholder="Enter Days" >
              </div>
            </div>

            <div class="row" id="row">
              <div class="col-4">
                 <label for="details">Details</label>
              </div>
              <div class="col">
                <input type="text" class="form-control" name="txtdetails" value="{{$book['details']}}" id="details" placeholder="Enter Details" >
              </div>
            </div>

            <div class="row" id="row">
              <div class="col-4">
                 <label for="copies">Copies</label>
              </div>
              <div class="col">
                <input type="number" class="form-control" name="txtcopies" value="{{$book['copies']}}" id="copies" placeholder="Enter Copies" >
              </div>
            </div>

            <div class="row" id="row">
              <div class="col-9">
                <button class="btn btn-success btn-lg btn-block" type="submit">SAVE</button>
              </div>
              <div class="col">
                <button class="btn btn-success btn-lg btn-block" type="submit">CANCEL</button>
              </div>
            </div>
            
          
          </div>
        </div>
      </div>
    </div>
  </div>
</form>

@endsection