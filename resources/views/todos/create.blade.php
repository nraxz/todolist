@extends('layouts.app')
@section('content')
    <h1>Create Todo</h1>
    {!! Form::open(['url' => 'TodosController@store', 'method' => 'POST']) !!}
    //
    {!! Form::close() !!}

@endsection
