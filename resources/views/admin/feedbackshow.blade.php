@extends('admin/adminlayout')
@section('title','Feedback show')
<style>
    table.table-bordered{
    border:3px solid black;
    margin-top:20px;
  }
</style>
@section('header','FEEDBACK SHOW')
@section('details')
<div class="container py-5 h-300 ">
<table class="table table-bordered" style="background-color: white">
    <thead class="thead-dark" style="background-color:#eb5d1e; color:white;">
        <tr>
        <th scope="col">FEEDBACKID</th>
        <th scope="col">FEEDBACKDATE</th>
        <th scope="col">READERID</th>
        <th scope="col">OWNERID</th>
        <th scope="col">DETAILS</th>
        </tr>
    </thead>
    <tbody>
    @foreach($feedback as $f)
        <tr>
       <th scope="row">{{ $f['feedbackid'] }}</th>
        <td>{{ $f['feedbackdate'] }}</td>
        <td>{{ $f['readerid'] }}</td>
        <td>{{ $f['ownerid'] }}</td>
        <td>{{ $f['details'] }}</td>
        </tr>
    @endforeach  
    </tbody>
    </table>
<spam>
        {{$feedback->links()}}
</spam> 
 <style>
        .w-5{
        display:none
        }
</style>  
</div>
@endsection