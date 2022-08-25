@extends('admin/adminlayout')
@section('title','AdminHome Page')
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.price {
  color: grey;
  font-size: 22px;
}

.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #008080;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card button:hover {
  opacity: 0.7;
}
</style>
@section('header','Welcome to Admin Panel')

@section('details')


<div class="container">

<div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-info text-white mb-4">
                                    <div class="card-body">{{$reader}}</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                    Total Reader
                                    <a class="small text-white stretched-link" href="showread"></a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6" >
                                <div class="card bg-secondary text-white mb-4">
                                    <div class="card-body">{{$book1}}
                                       
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between" >
                                          Total Books  
                                        <a class="small text-white stretched-link" href="#"></a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-info text-white mb-4">
                                    <div class="card-body">{{$owner}}</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                    Total Owner    
                                    <a class="small text-white stretched-link" href="showo"></a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-secondary text-white mb-4">
                                    <div class="card-body">{{$contactus}}</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                    Total ContactUS    
                                    <a class="small text-white stretched-link" href="showc"></a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
</div>

 <hr>
 <center><h3>SOME BOOKS</h3></center>
 <hr>
<div class="row" id="row">
  
  @foreach($book as $b)
    <div class="col-4" style="margin-top:10px;">
      
        <h2 style="text-align:center">BOOK </h2>
          @csrf
        <div class="card">
          <img src="{{$b['image'] }}" alt="book"  width='300px' height='250px'>
          <h3>{{$b['bookname']}}</h3>
          <h3>{{$b['totalpage']}}</h3>
          <p class="price">Price : {{$b['price'] }}</p>
        
        </div>
      
    </div>
  @endforeach
  
  </div>
  
@endsection