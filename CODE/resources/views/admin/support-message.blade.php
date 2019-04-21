@extends('layouts.admin')

@section('content')
 

 <div class="panel panel-default">

  <div class="panel-heading">
  <div class="pull-right"><a href="{{ url('admin/delete/support/'.$support->id) }}">Delete</a></div>

  <i class="fa fa-ticket"></i> Support Message</div>
  <div class="panel-body">

<table class="table">
  
  <tr>
    <td>Name</td>
    <td> {{ $support->name }}</td>
  </tr>  

<tr>
    <td>Email</td>
    <td> {{ $support->email }}</td>
  </tr>  

  <tr>
    <td>Created at</td>
    <td> {{  date('F d, Y h:m A', strtotime($support->created_at)) }}</td>
  </tr>  

  <tr>
    <td>Message</td>
    <td> {{ $support->message }}</td>
  </tr>  



</table>
   

   
</div>

@stop