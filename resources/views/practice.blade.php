@extends('layout')

@section('content')
    <h2>{{$practice->domain->name}}</h2>
    <div>{{$practice->description}}</div>
    <small class="text-muted">
        <div> Crée le {{$practice->created_at->translatedFormat('j F Y') }}
            / Modifié le {{$practice->updated_at->translatedFormat('j F Y') }}</div>
    </small>
    <div>{{$practice->user->fullname}}</div>

    <livewire:opinions :practice="$practice"/>
@endsection
