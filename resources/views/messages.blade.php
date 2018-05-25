@extends('layouts.app')

@section('content')
    <h1>MESSAGES</h1>

    @foreach($messages as $message)
    <div class="card mb-3">
      <ul class="list-group">
        <li class="list-group-item">Name: {{$message->name}}</li>
        <li class="list-group-item">Email: {{$message->email}}</li>
        <li class="list-group-item">Message: {{$message->message}}</li>
      </ul>    
    </div>
    @endforeach
   
@endsection

@section('sidebar')
    @parent
    <p>This is appended to the sidebar</p>
@endsection

