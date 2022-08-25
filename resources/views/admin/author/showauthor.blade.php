@extends('admin/adminlayout')
@section('title','Author show')

<style>
    table.table-bordered{
    border:3px solid black;
    margin-top:20px;
  }
 
</style>

@section('header','AUTHOR SHOW')
@section('details')
<div class="container py-5 h-300 ">
<div>
<table class="table table-bordered" style="background-color: white">
    <thead class="thead-dark" style="background-color:#eb5d1e; color:white;">
       <a href="authorform"><button class="btn btn-success btn-block" type="submit">NEW</button>
        <tr>
        <th scope="col">AUTHORID</th>
        <th scope="col">AUTHORNAME</th>
        <th scope="col">CONTACTNO</th>
        <th scope="col">EMAILID</th>
        <th scope="col">IMAGE</th>
        <th scope="col">DELETE</th>
        <th scope="col">UPDATE</th>
        </tr>
    </thead>
    <tbody>
    @foreach($author as $a)
        <tr>
       <th scope="row">{{ $a['authorid'] }}</th>
        <td>{{ $a['authorname'] }}</td>
        <td>{{ $a['contactno'] }}</td>
        <td>{{ $a['emailid'] }}</td>
        <td><img src="{{$a['image'] }}" alt='Profile picture' width='150px' height='100px'></td>
        <td><a href="authorDelete/{{$a['authorid']}}">DELETE</td>
        <td><a href="/searcha/{{$a['authorid']}}">UPDATE</td>
        </tr>
    @endforeach  
    </tbody>
    </table>
</div>
<spam>
        {{$author->links()}}
</spam> 
 <style>
        .w-5{
        display:none
        }
</style>
 
    
</div>

@endsection