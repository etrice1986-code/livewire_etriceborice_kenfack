<div>
    <div class="row">
        <div class="col-12">
            
            <input type="text" wire:model.live="search" placeholder="Cerca tra i post..." class="form-control mb-4 shadow-sm">
            @if (session()->has('message'))
                <div class="alert alert-warning text-center shadow-sm mb-4" role="alert">
                    {{ session('message') }}
                </div>
            @endif
            
            <div class="row g-4">
               
                @foreach($posts as $post)
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="card h-100 shadow-sm">
                    
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title fw-bold text-dark mb-2">{{ $post->title }}</h5>
                                
                                <p class="card-text text-muted flex-grow-1">
                                    {{ Str::limit($post->content ?? $post->body, 100) }}
                                </p>
                                
                                
                            </div>
                        </div>
                    </div>
                
                @endforeach
            </div>
        </div>
    </div>
</div>
