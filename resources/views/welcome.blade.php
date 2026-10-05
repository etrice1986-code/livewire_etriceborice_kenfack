<x-layout>
    
    <x-hero badge="Dashboard" title="Welcome to My App">
        Un'interfaccia moderna e reattiva sviluppata con Laravel, Livewire 3 e Bootstrap 5. Gestisci i tuoi dati in tempo reale.

        <x-slot:buttons>
            <a href="#counter-section" class="btn btn-primary btn-lg px-4 me-2 shadow-sm fw-medium">
                Esplora App
            </a>
            <a href="/posts" class="btn btn-outline-secondary btn-lg px-4 fw-medium">
                Vedi i Post
            </a>
        </x-slot:buttons>
    </x-hero>

    
    <x-counter-card title="Strumento Contatore" description="Modifica lo stato dell'applicazione istantaneamente senza ricaricare la pagina.">
        
        <livewire:counter />
        
    </x-counter-card>

</x-layout>
