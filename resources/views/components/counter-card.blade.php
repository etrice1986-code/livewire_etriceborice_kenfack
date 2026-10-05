<div class="container mb-5" id="counter-section">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-6">
            
            <div class="card border-0 shadow-lg rounded-4 overflow-hidden">
                <div class="card-header bg-dark text-white py-3 border-0 d-flex align-items-center justify-content-between">
                    <h5 class="mb-0 fw-bold tracking-tight">
                        <span class="me-2">📊</span> {{ $title }}
                    </h5>
                    <span class="badge bg-success rounded-pill px-2 py-1 text-xs fw-normal">Livewire Active</span>
                </div>
                
                <div class="card-body p-4 bg-white text-center">
                    <p class="text-muted small mb-4">
                        {{ $description }}
                    </p>
                    
                    {{ $slot }}
                    
                </div>
            </div>

        </div>
    </div>
</div>
