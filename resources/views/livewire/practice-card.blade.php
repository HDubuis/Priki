<div class="card">
    <h5 class="card-title"> {{$practice->domain->name}}</h5>
    <div class="card-body">
        {{$practice->description}}
    </div>
    <p class="card-text"><small class="text-muted">{{$practice->updated_at->translatedFormat('j F Y') }}</small></p>
</div>
