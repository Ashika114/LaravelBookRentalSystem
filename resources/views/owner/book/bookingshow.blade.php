@extends('owner/ownerlayout')
@section('title','show booking')
<style>
    table.table-bordered{
    border:3px solid black;
    margin-top:20px;
  }
</style>
@section('header','BOOKING SHOW')
@section('details')
<div class="container py-5 h-300 ">
<table class="table table-bordered" style="background-color: white">
    <thead class="thead-dark" style="background-color:#eb5d1e; color:white;">
    <tr>
      <th scope="col">BOOKING ID </th>
      <th scope="col">BOOK DATE</th>
      <th scope="col">BOOK ID</th>
      <th scope="col">READER NAME</th>
      <th scope="col">OWNER NAME</th>
      <th scope="col">STATUS</th>
      <th scope="col">CONFIRMATION</th>
      <th scope="col">ACCEPT</th>
      <th scope="col">REJECT</th>
    </tr>
  </thead>
  <tbody>
    @foreach($booking as $b)

    <tr>

      <th scope="row">{{$b['bookingid']}}</th>
      <td>{{$b['bookingdate']}}</td>
      <td>{{$b['bookname']}}</td>
      <td>{{$b['fname']}}</td>
      <td>{{$b['ownername']}}</td>
      <td>{{$b['status']}}</td>
      <td>{{$b['confirmation']}}</td>
      <td><a href="/conform1/{{$b['bookingid']}}">ACCEPT</td>
      <td><a href="/conform/{{$b['bookingid']}}">REJECT</td>
    </tr>
        
    @endforeach
  </tbody>
</table>
</div>

@endsection