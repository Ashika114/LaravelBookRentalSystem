@extends('owner/ownerlayout')
@section('title','show book')
<style>
    table.table-bordered{
    border:3px solid black;
    margin-top:20px;
  }
</style>
@section('header','BOOK SHOW')
@section('details')
<div class="container py-5 h-300 ">
<table class="table table-bordered" style="background-color: white">
    <thead class="thead-dark" style="background-color:#eb5d1e; color:white;">
    <a href="authorselect"><button class="btn btn-success btn-block" type="submit">NEW</button>
    <tr>
      <th scope="col">BOOK ID </th>
      <th scope="col">BOOK NAME</th>
      <th scope="col">SHORT NAME</th>
      <th scope="col">TOTAL PAGE</th>
      <th scope="col">PRICE</th>
      <th scope="col">PUB DATE</th>
      <th scope="col">DETAILS</th>
      <th scope="col">COPIES</th>
      <th scope="col">DELETE</th>
      <th scope="col">UPDATE</th>
    </tr>
  </thead>
  <tbody>
    @foreach($book as $b)
    <tr>
      <th scope="row">{{$b['bookid']}}</th>
      <td>{{$b['bookname']}}</td>
      <td>{{$b['shortname']}}</td>
      <td>{{$b['totalpage']}}</td>
      <td>{{$b['price']}}</td>
      <td>{{$b['pubdate']}}</td>
      <td>{{$b['details']}}</td>
      <td>{{$b['copies']}}</td>
      <td><a href="/bookDelete/{{$b['bookid']}}">DELETE</td>
      <td><a href="/booksearch/{{$b['bookid']}}">UPDATE</td>
    </tr>
    @endforeach
  </tbody>
</table>

</div>

@endsection