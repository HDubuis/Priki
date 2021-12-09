<div>
    @isset($nbDays)
        <p>Nouveau de <input wire:model="nbDays" name="last-updated-limit" type="number" min="0" max="365"
                             value="{{$nbDays}}"/> {{ $nbDays <= 1 ? 'jour' : 'jours' }}
        </p>
    @endisset
    <div class="card-group">
        @forelse ($practices as $practice)
            <livewire:practice-card :practice="$practice"/>
        @empty
            <div class="ml-3"> Aucune pratique à afficher ici</div>
        @endforelse
    </div>
</div>
