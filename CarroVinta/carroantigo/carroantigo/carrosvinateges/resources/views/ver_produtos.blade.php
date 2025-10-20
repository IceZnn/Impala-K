<x-app-layout>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Impala's King</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <body style="
        background: linear-gradient(rgba(189, 214, 255, 0.373), rgba(189, 214, 255, 0.373)), url('/wall1.png');
        background-size: cover;
        background-position: center;
        background-blend-mode: overlay;
        font-family: 'Playfair Display', serif;
        min-height: 100vh;
    ">

    <div class="container mt-5">
        <div class="row g-4 justify-content-center">
            @foreach($produto as $p)
            <div class="col-lg-6 col-md-8 col-sm-12">
                <div class="card shadow-lg border-0 rounded-4 h-100 news-card" style="background: rgba(157, 203, 225, 0.8); backdrop-filter: blur(10px);">
                    
                    <div class="card-header bg-gradient-primary text-white border-0 rounded-top-4 py-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="card-title mb-0 fw-bold">
                                <i class="fas fa-car me-2"></i>{{ $p->Nome }}
                            </h5>
                            <span class="badge bg-light text-primary fs-6">{{ $p->Ano }}</span>
                        </div>
                    </div>

                    <div class="card-body d-flex flex-column">
                        <div class="d-flex align-items-center mb-3">
                            <div class="avatar-placeholder rounded-circle d-flex align-items-center justify-content-center me-3"
                                 style="width: 50px; height: 50px; background: linear-gradient(135deg, #667eea 0%, #060656 100%);">
                                <i class="fas fa-user text-white"></i>
                            </div>
                            <div>
                                <h6 class="mb-1 fw-semibold text-dark">{{ $p->Vendedor }}</h6>
                                <small class="text-muted">Vendedor</small>
                            </div>
                        </div>

                        <div class="description-container flex-grow-1">
                            <h6 class="text-primary fw-semibold mb-2">
                                <i class="fas fa-file-alt me-2"></i>Descrição:
                            </h6>
                            <p class="card-text text-dark lh-base">
                                {{ Str::limit($p->estado, 200, '...') }}
                            </p>
                        </div>

                        <div class="mt-3 pt-3 border-top">
                            <div class="row text-center">
                                <div class="col-4">
                                    <small class="text-muted d-block">
                                        <i class="fas fa-eye me-1"></i> Visualizar
                                    </small>
                                </div>
                                <div class="col-4">
                                    <small class="text-muted d-block">
                                        <i class="fas fa-edit me-1"></i> Editar
                                    </small>
                                </div>
                                <div class="col-4">
                                    <small class="text-muted d-block">
                                        <i class="fas fa-trash me-1"></i> Excluir
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer bg-light border-0 rounded-bottom-4 py-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <small class="text-muted">
                                <i class="fas fa-calendar me-1"></i> 
                                {{ $p->created_at->format('d/m/Y H:i') }}
                            </small>
                            <button class="btn btn-primary btn-sm rounded-pill px-3">
                                <i class="fas fa-shopping-cart me-1"></i> Comprar
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <style>
        .bg-gradient-primary {
            background: linear-gradient(135deg, #667eea 0%, #5942cb 100%) !important;
        }
        
        .news-card {
            transition: all 0.3s ease;
            border: none;
        }
        
        .news-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 25px rgba(0, 0, 0, 0.15) !important;
        }
        
        .card-header {
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        .card-footer {
            background: rgba(255, 255, 255, 0.9) !important;
        }
        
        .description-container {
            min-height: 80px;
        }
        
        .avatar-placeholder {
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }
        
        .btn-primary {
            background: linear-gradient(135deg, #667eea 0%, #4b4fa2 100%);
            border: none;
            transition: all 0.3s ease;
        }
        
        .btn-primary:hover {
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(102, 126, 234, 0.4);
        }
        
        .badge {
            font-size: 0.8rem;
            padding: 0.4em 0.8em;
            border-radius: 20px;
        }
        
        .container {
            padding: 2rem;
        }
    </style>

    <div style="height: 100px;"></div>
    @include('components.footer')
</x-app-layout>