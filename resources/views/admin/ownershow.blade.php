@extends('admin/adminlayout')
@section('title','Owner show')
<style>
    table.table-bordered{
    border:3px solid black;
    margin-top:20px;
  }
</style>
@section('header','OWNER SHOW')
@section('details')
<div class="container py-5 h-300 ">
<table class="table table-bordered" style="background-color: white">
    <thead class="thead-dark" style="background-color:#eb5d1e; color:white;">
        <tr>
        <th scope="col">OWNERID</th>
        <th scope="col">OWNERNAME</th>
        <th scope="col">CITY</th>
        <th scope="col">PINCODE</th>
        <th scope="col">CONTACTNO</th>
        <th scope="col">GENDER</th>
        </tr>
    </thead>
    <tbody>
    @foreach($owner as $o)
        <tr>
       <th scope="row">{{ $o['ownerid'] }}</th>
        <td>{{ $o['ownername'] }}</td>
        <td>{{ $o['city'] }}</td>
        <td>{{ $o['pincode'] }}</td>
        <td>{{ $o['contactno'] }}</td>
        <td>{{ $o['gender'] }}</td>
        </tr>
    @endforeach  
    </tbody>
    </table>
<spam>
        {{$owner->links()}}
</spam> 
 <style>
        .w-5{
        display:none
        }
</style>
    
</div>
@endsection