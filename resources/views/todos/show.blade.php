@extends('layouts.app')
@section('content')
    <a class="btn btn-primary" href="/">Back</a>
    <h1> Detail</h1>

            <div class="well">
                <h3 class="mt-5">{{$todo->title}}</h3>
                <p>{{$todo->due}}</p>
                <hr>
                <p class="lead">{{$todo->body}}</p>


                <a href="/todo/{{$todo->id}}/edit" class="btn btn-default">Edit</a>

                {!! Form::open(['action' => ['TodosController@destroy', $todo->id], 'method' => 'POST', 'class' => 'pull-right']) !!}

                    {{Form::hidden('_method', 'Delete')}}
                    {{Form::bsSubmit('Delete', ['class' => "btn btn-danger"])}}

                {!! Form::close() !!}
            </div>




@endsection
