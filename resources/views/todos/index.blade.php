@extends('layouts.app')
@section('content')
    <h1>Todos</h1>
@if(count($todos) > 0)
    @foreach($todos as $todo)
        <div class="well">
            <h3 class="mt-5"><a href="todo/{{$todo->id}}">{{$todo->title}}</a></h3>

            <p>{{$todo->due}}</p>
        </div>

        @endforeach
    @endif
@endsection