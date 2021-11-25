@extends('layout')

@section('content')
    @foreach($domain->practices as $practice)
        <div class="col-sm-6">
            <div class="card">
                <h5 class="card-title"> {{$practice->domain->name}}</h5>
                <div class="card-body">
                    {{$practice->description}}
                </div>
            </div>
        </div>
    @endforeach
@endsection
