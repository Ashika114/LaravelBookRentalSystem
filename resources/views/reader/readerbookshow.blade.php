@extends('reader/readerlayout')
@section('title','book show')
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
@section('details')

<div class="row" id="row">
  
@foreach($book as $b)
  <div class="col-4" style="margin-top:10px;">
    
      <h2 style="text-align:center">BOOK </h2>
        @csrf
      <div class="card">
        <img src="{{$b['image'] }}" alt="book"  width='300px' height='250px'>
        <h3>{{$b['bookid']}}</h3>
        <h3>{{$b['bookname']}}</h3>
        <p class="price">Price : {{$b['price'] }}</p>
       

        <p><a href="/booking/{{$b['bookid']}}"><button style="color: white; background-color: #eb5d1e;">Booking</button></a></p>
        <p><a href="/bookdetails/{{$b['bookid']}}"> <button>Details</button></a></p>
      
      </div>
    
  </div>
@endforeach

</div>


@endsection