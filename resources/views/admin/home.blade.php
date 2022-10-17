@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Benvenuto {{Auth::user()->name}}!</h1>
    </div>

@endsection