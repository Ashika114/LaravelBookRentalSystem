@extends('reader/readerlayout')
@section('title','book show')

@section('details')

<div class="container py-5 h-300 ">
<table class="table table-bordered" style="background-color: white">
    <thead class="thead-dark" style="background-color:#eb5d1e; color:white;">
        <tr>
        <th scope="col">BOOKINGID</th>
        <th scope="col">BOOKINGDATE</th>
        <th scope="col">BOOK NAME</th>
        <th scope="col">READER NAME</th>
        <th scope="col">OWNER NAME</th>
        <th scope="col">DAYS</th>
        <th scope="col">STATUS</th>
        <th scope="col">CONFORMATION</th>
        <th scope="col">CANCEL</th>
        </tr>
    </thead>
    <tbody>
    @foreach($booking as $b)
        <tr>
       <th scope="row">{{ $b['bookingid'] }}</th>
        <td>{{ $b['bookingdate'] }}</td>
        <td>{{ $b['bookname'] }}</td>
        <td>{{ $b['fname'] }}</td>
        <td>{{ $b['ownername'] }}</td>
        <td>{{ $b['days'] }}</td>
        <td>{{ $b['status'] }}</td>
        <td>{{ $b['confirmation'] }}</td>
        <td><a href="/readerbkcancel/{{$b['bookingid']}}">CANCEL</td>
        </tr>
    @endforeach  
    </tbody>
    </table>
    
</div>

@endsection