@extends('admin/adminlayout')
@section('title','Contact show')
<style>
    table.table-bordered{
    border:3px solid black;
    margin-top:20px;
  }
</style>
@section('header','CONTACTUS DETAILS')
@section('details')
<div class="container py-5 h-300 ">
<table class="table table-bordered" style="background-color: white">
    <thead class="thead-dark" style="background-color:#eb5d1e; color:white;">
        <tr>
        <th scope="col">CONTACTID</th>
        <th scope="col">CONTACT NAME</th>
        <th scope="col">DETAILS</th>
        <th scope="col">CONTACTNO</th>
        <th scope="col">EMAILID</th>
        <th scope="col">RESPONSE</th>
        <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
    @foreach($contact as $c)
        <tr>
       <th scope="row">{{ $c['contactid'] }}</th>
        <td>{{ $c['name'] }}</td>
        <td>{{ $c['details'] }}</td>
        <td>{{ $c['contactno'] }}</td>
        <td>{{ $c['emailid'] }}</td>
        <td>{{ $c['response'] }}</td>
        <td><a href="/contactsearch/{{$c['contactid']}}">RESPONSE</td>
        </tr>
    @endforeach  
    </tbody>
    </table>
<spam>
        {{$contact->links()}}
</spam> 
 <style>
        .w-5{
        display:none
        }
</style>
    
</div>
@endsection