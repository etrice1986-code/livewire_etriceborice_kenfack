

    <div>
        
        <div class="text-center mt-5">
            
            <h1 class="text-3xl font-bold mb-4">Counter Livewire </h1>
            
            <div class="text-4xl font-bold mb-4 display-4">
                Valore: {{ $count }}
             
            </div>
            
            <button wire:click="increment" class="btn btn-success mx-1">+1</button>
            <button wire:click="decrement" class="btn btn-danger mx-1">-1</button>
            
            <button wire:click="incrementBynumber(5)" class="btn btn-primary mx-1">+5</button>
            <button wire:click="decrementBynumber(5)" class="btn btn-warning mx-1">-5</button>
            
        </div>
        
    </div>
    
