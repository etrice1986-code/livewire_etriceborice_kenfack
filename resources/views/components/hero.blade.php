<div class="bg-light py-5 mb-5 border-bottom shadow-xs text-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <span class="badge bg-primary-subtle text-primary rounded-pill mb-3 px-3 py-2 fw-semibold text-uppercase tracking-wider">
                    {{ $badge }}
                </span>
                
                <h1 class="display-4 fw-extrabold text-dark mb-3">
                    {{ $title }}
                </h1>
                
                <p class="lead text-muted mb-4 fs-5">
                    {{ $slot }}
                </p>
                
                <div>
                    {{ $buttons }}
                </div>
            </div>
        </div>
    </div>
</div>
