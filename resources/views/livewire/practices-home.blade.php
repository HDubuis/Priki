<div>
    @isset($nbDays)
        <p>Nouveau de <input wire:model="nbDays" name="last-updated-limit" type="number" min="1" max="365"
                             value="{{$nbDays}}"/> {{ $nbDays <= 1 ? 'jour' : 'jours' }}
        </p>
    @endisset
    @forelse ($practices as $practice)
        <livewire:practice-card :practice="$practice" :domainName="$practice->domain->name"/>
    @empty
        <div class="ml-3"> Aucune pratique à afficher ici</div>
    @endforelse
</div>
