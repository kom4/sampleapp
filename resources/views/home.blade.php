@extends('layouts.app')

@section('content')
    <h1>HOME</h1>
    <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore sequi optio quisquam alias veniam sapiente facilis esse, natus deleniti sunt vero numquam voluptatum iusto, rem necessitatibus tempora illo sit laudantium?</p>
@endsection

@section('sidebar')
    @parent
    <p>This is appended to the sidebar</p>
@endsection

