@extends('reader/readerlayout')
@section('title','book return show')

@section('details')

<div class="container py-5 h-300 ">
<table class="table table-bordered" style="background-color: white">
    <thead class="thead-dark" style="background-color:#eb5d1e; color:white;">
        <tr>
        <th scope="col">BOOKINGID</th>
        <th scope="col">BOOKNAME</th>
        <th scope="col">FNAME</th>
        <th scope="col">OWNERNAME</th>
        <th scope="col">STATUS</th>
        <th scope="col">RETURN</th>
        </tr>
    </thead>
    <tbody>
    @foreach($bookreturn as $b)
            <tr>
        <th scope="row">{{ $b['bookingid'] }}</th>
            <td>{{ $b['bookname'] }}</td>
            <td>{{ $b['fname'] }}</td>
            <td>{{ $b['ownername'] }}</td>
            <td>{{ $b['status'] }}</td>
            <td><a href="/readerreturn/{{$b['returnid']}}">RETURN</td>
            </tr>
    @endforeach  
    </tbody>
    </table>
    
</div>

@endsection