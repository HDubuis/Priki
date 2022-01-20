<div>
    @forelse ($opinions as $opinion)
        <livewire:opinion-card :opinion="$opinion"/>
    @empty
        <div class="ml-3"> Aucune opinion à afficher ici</div>
    @endforelse
</div>
