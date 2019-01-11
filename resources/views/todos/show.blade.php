@extends('layouts.app')
@section('content')
    <a class="btn btn-primary" href="/">Back</a>
    <h1> Detail</h1>

            <div class="well">
                <h3 class="mt-5">{{$todo->title}}</h3>
                <p>{{$todo->due}}</p>
                <hr>
                <p class="lead">{{$todo->body}}</p>

            </div>

@endsection
