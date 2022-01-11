@extends('layout')

@section('content')
    <h2>{{$practice->domain->name}}</h2>
    <div>{{$practice->description}}</div>
    <div>{{$practice->created_at}}</div>
    <div>{{$practice->updated_at}}</div>
    <div>{{$practice->user->fullname}}</div>
@endsection
