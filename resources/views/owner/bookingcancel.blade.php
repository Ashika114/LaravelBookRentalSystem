@extends('owner/ownerlayout')
@section('title','show book')
<style>
    table.table-bordered{
    border:3px solid black;
    margin-top:20px;
  }
</style>
@section('header','BOOKING CANCEL')
@section('details')
<div class="container py-5 h-300 ">
<table class="table table-bordered" style="background-color: white">
    <thead class="thead-dark" style="background-color:#eb5d1e; color:white;">
    <tr>
      <th scope="col">BKCANID </th>
      <th scope="col">BKCANDATE</th>
      <th scope="col">BOOKINGID</th>
      <th scope="col">REASON</th>
      <th scope="col">STATUS</th>
      <th scope="col">ACCEPT</th>
    </tr>
  </thead>
  <tbody>
    @foreach($bookingcancel as $b)
    <tr>
      <th scope="row">{{$b['bkcanid']}}</th>
      <td>{{$b['bkcandate']}}</td>
      <td>{{$b['bookingid']}}</td>
      <td>{{$b['reason']}}</td>
      <td>{{$b['status']}}</td>
      <td><a href="/accepted/{{$b['bkcanid']}}">Accepted</td>
    </tr>
    @endforeach
  </tbody>
</table>

</div>

@endsection