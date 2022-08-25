@extends('admin/adminlayout')
@section('title','Feedback show')
<style>
    table.table-bordered{
    border:3px solid black;
    margin-top:20px;
  }
</style>
@section('header','REVIEW SHOW')
@section('details')
<div class="container py-5 h-300 ">
<table class="table table-bordered" style="background-color: white">
    <thead class="thead-dark" style="background-color:#eb5d1e; color:white;">
        <tr>
        <th scope="col">REVIEWID</th>
        <th scope="col">REVIEWDATE</th>
        <th scope="col">BOOKID</th>
        <th scope="col">READERID</th>
        <th scope="col">OWNERID</th>
        <th scope="col">RATTINGS</th>
        </tr>
    </thead>
    <tbody>
    @foreach($review as $r)
        <tr>
       <th scope="row">{{ $r['reviewid'] }}</th>
        <td>{{ $r['reviewdate'] }}</td>
        <td>{{ $r['bookid'] }}</td>
        <td>{{ $r['readerid'] }}</td>
        <td>{{ $r['ownerid'] }}</td>
        <td>{{ $r['rattings'] }}</td>
        </tr>
    @endforeach  
    </tbody>
    </table>
    <spam>
        {{$review->links()}}
</spam> 
 <style>
        .w-5{
        display:none
        }
</style>
    
</div>
@endsection