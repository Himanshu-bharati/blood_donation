@extends('layouts.app')

@section('content')
 

 <div class="panel panel-default">
  <div class="panel-heading">Message</div>
  <div class="panel-body">
    <table class="table">
    	<tr>
    	  <td> Sender</td>
    	  <td> {{ $message->sender }}</td>
    	 </tr>

            <tr>
          <td> Phone</td>
          <td> {{ $message->phone }}</td>
         </tr>

    	 <tr>
    	  <td> Subject</td>
    	  <td> {{ $message->subject }}</td>
    	 </tr> 

    	 <tr>
    	  <td> Date</td>
    	  <td> {{  date('F d, Y h:m A', strtotime($message->created_at)) }}</td>
    	 </tr>

    	 <tr>
    	  <td>Message</td>
    	  <td> {{ $message->message }}</td>
    	 </tr>
 
    </table> 


  


  </div>
</div>

@stop