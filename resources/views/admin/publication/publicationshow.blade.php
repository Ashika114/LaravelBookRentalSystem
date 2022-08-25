@extends('admin/adminlayout')
@section('title','Publication show')
<style>
    table.table-bordered{
    border:3px solid black;
    margin-top:20px;
  }
</style>
@section('header','PUBLICATION SHOW')
@section('details')
<div class="container py-5 h-300 ">
<table class="table table-bordered" style="background-color: white">
    <thead class="thead-dark" style="background-color:#eb5d1e; color:white;">
       <a href="publicationform"><button class="btn btn-success btn-block" type="submit">NEW</button>
        <tr>
        <th scope="col">PUBID</th>
        <th scope="col">PUBNAME</th>
        <th scope="col">CONTACTNO</th>
        <th scope="col">EMAILID</th>
        <th scope="col">DELETE</th>
        <th scope="col">UPDATE</th>
        </tr>
    </thead>
    <tbody>
    @foreach($publication as $p)
        <tr>
       <th scope="row">{{ $p['pubid'] }}</th>
        <td>{{ $p['pubname'] }}</td>
        <td>{{ $p['contactno'] }}</td>
        <td>{{ $p['emailid'] }}</td>
        <td><a href="pubDelete/{{$p['pubid']}}">DELETE</td>
        <td><a href="pubsearch/{{$p['pubid']}}">UPDATE</td>
        </tr>
    @endforeach  
    </tbody>
    </table>
<spam>
        {{$publication->links()}}
</spam> 
 <style>
        .w-5{
        display:none
        }
</style>
    
</div>
@endsection