@extends('layout')

@section('content')
    <h1>Liste des domaines</h1>

    @foreach((\App\Models\Domain::all()) as $domain)
        <h5>{{$domain->name}}</h5>
        @foreach($domain->practices()->get() as $practice)
            <livewire:practice-card :practice="$practice"/>
        @endforeach
    @endforeach
@endsection
