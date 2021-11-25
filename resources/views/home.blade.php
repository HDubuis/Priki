@extends('layout')

@section('content')
    <h2>Pratiques</h2>
    <p>Mises à jours dans les {{$nbDays}} derniers jours</p>
    <div class="row">
        @forelse (\App\Models\Practice::all() as $practice)
            <div class="col-sm-6">
                <div class="card w-70 m-2">
                    <h5 class="card-title"> {{$practice->domain->name}}</h5>
                    <div class="card-body">
                        {{$practice->description}}
                    </div>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
        @empty
            <p>Aucune pratique à afficher ici</p>
        @endforelse
    </div>
@endsection
