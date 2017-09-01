@extends('layouts.app')
@section('content')
<div class="jumbotron text-center">
    <h1>Larater</h1>
    <nav>
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link" href="/">Home</a>
            </li>
        </ul>
    </nav>
</div>
<div class="row">
    @foreach($messages as $message)
        <div class="col-6">
            <img class="img-thumbnail" src="{{ $message['image'] }}">
            <p class="card-text">
                {{ $message['content'] }}
                <a href="/messeges/{{ $message['id'] }}">Leer más</a>
            </p>
        </div>
    @endforeach
</div>
@stop