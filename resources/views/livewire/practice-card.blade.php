<div class="card" style="margin-bottom: 5px">
    @isset($domainName)
        <h5 class="card-title">{{$domainName}}</h5>
    @endisset
    <div class="card-body">
        {{$practice->description}}
    </div>
    <p class="card-text"><small class="text-muted">{{$practice->updated_at->translatedFormat('j F Y') }}</small></p>
        <a href="practice-{{$practice->id}}" class="stretched-link"></a>
</div>
