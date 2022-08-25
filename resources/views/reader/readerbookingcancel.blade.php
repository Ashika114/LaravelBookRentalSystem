@extends('reader/readerlayout')
@section('title','book show')

@section('details')

<div class="container py-5 h-300 ">
<table class="table table-bordered" style="background-color: white">
    <thead class="thead-dark" style="background-color:#eb5d1e; color:white;">
        <tr>
        <th scope="col">BKCANID</th>
        <th scope="col">BKCANDATE</th>
        <th scope="col">BOOKINGID</th>
        <th scope="col">REASON</th>
        <th scope="col">STATUS</th>
        </tr>
    </thead>
    <tbody>
    @foreach($bookingcan as $b)
        <tr>
       <th scope="row">{{ $b['bkcanid'] }}</th>
        <td>{{ $b['bkcandate'] }}</td>
        <td>{{ $b['bookingid'] }}</td>
        <td>{{ $b['reason'] }}</td>
        <td>{{ $b['status'] }}</td>
        </tr>
    @endforeach  
    </tbody>
    </table>
    
</div>

@endsection