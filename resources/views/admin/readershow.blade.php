@extends('admin/adminlayout')
@section('title','Reader show')
<style>
    table.table-bordered{
    border:3px solid black;
    margin-top:20px;
  }
</style>
@section('header','READER SHOW')
@section('details')
<div class="container py-5 h-300 ">
<table class="table table-bordered" style="background-color: white">
    <thead class="thead-dark" style="background-color:#eb5d1e; color:white;">
        <tr>
        <th scope="col">READERID</th>
        <th scope="col">READER FNAME</th>
        <th scope="col">CITY</th>
        <th scope="col">PINCODE</th>
        <th scope="col">CONTACTNO</th>
        <th scope="col">GENDER</th>
        </tr>
    </thead>
    <tbody>
    @foreach($reader as $r)
        <tr>
       <th scope="row">{{ $r['readerid'] }}</th>
        <td>{{ $r['fname'] }}</td>
        <td>{{ $r['city'] }}</td>
        <td>{{ $r['pincode'] }}</td>
        <td>{{ $r['contactno'] }}</td>
        <td>{{ $r['gender'] }}</td>
        </tr>
    @endforeach  
    </tbody>
    </table>
    <spam>
        {{$reader->links()}}
</spam> 
 <style>
        .w-5{
        display:none
        }
</style>
</div>
@endsection