<x-app-layout>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Impala's King</title>
    
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <body style="
        background: linear-gradient(rgba(255, 249, 249, 0.9), rgba(255, 255, 255, 0.9)), url('/null.jpg');
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        font-family: 'Inter', sans-serif;
        min-height: 100vh;
    ">
    
    <div style="height: 30px;"></div>

    <!-- Hero Section com Carrossel -->
    <section class="hero-section mb-5">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"></button>
            </div>
            <div class="carousel-inner rounded-3 shadow-lg">
                <div class="carousel-item active">
                    <img src="carscel11.png" class="d-block w-100" alt="Carro Clássico 1" style="height: 500px; object-fit: cover;">
                </div>
                <div class="carousel-item">
                    <img src="carscel22.png" class="d-block w-100" alt="Carro Clássico 2" style="height: 500px; object-fit: cover;">
                </div>
                <div class="carousel-item">
                    <img src="carscel33.png" class="d-block w-100" alt="Carro Clássico 3" style="height: 500px; object-fit: cover;">
                </div>
                <div class="carousel-item">
                    <img src="carscel44.png" class="d-block w-100" alt="Carro Clássico 4" style="height: 500px; object-fit: cover;">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Próximo</span>
            </button>
        </div>
    </section>

    <!-- Cards de Métricas -->
    <section class="container mb-5">
        <div class="row g-4">
            <!-- Card 1: Preço Médio -->
            <div class="col-md-4">
                <div class="card border-0 shadow-lg rounded-3 h-100" style="background: rgba(255, 255, 255, 0.95);">
                    <div class="card-header bg-gradient-primary text-white text-center py-3 border-0 rounded-top-3">
                        <i class="fas fa-tag fa-2x mb-2"></i>
                        <h5 class="mb-0 fw-bold">Preço Médio</h5>
                    </div>
                    <div class="card-body text-center p-4">
                        <h2 class="display-6 fw-bold text-dark mb-3">R$ 450.000</h2>
                        <p class="text-muted mb-4">Valor médio dos veículos em nossa coleção</p>
                        <a href="#" class="btn btn-outline-primary rounded-pill px-4">
                            <i class="fas fa-chart-line me-2"></i>Ver Vendas
                        </a>
                    </div>
                </div>
            </div>

            <!-- Card 2: Avaliações -->
            <div class="col-md-4">
                <div class="card border-0 shadow-lg rounded-3 h-100" style="background: rgba(255, 255, 255, 0.95);">
                    <div class="card-header bg-gradient-success text-white text-center py-3 border-0 rounded-top-3">
                        <i class="fas fa-star fa-2x mb-2"></i>
                        <h5 class="mb-0 fw-bold">Avaliações</h5>
                    </div>
                    <div class="card-body text-center p-4">
                        <h2 class="display-6 fw-bold text-dark mb-3">102</h2>
                        <p class="text-muted mb-4">Clientes satisfeitos com nossos serviços</p>
                        <a href="#" class="btn btn-outline-success rounded-pill px-4">
                            <i class="fas fa-comments me-2"></i>Ver Avaliações
                        </a>
                    </div>
                </div>
            </div>

            <!-- Card 3: Carros Disponíveis -->
            <div class="col-md-4">
                <div class="card border-0 shadow-lg rounded-3 h-100" style="background: rgba(255, 255, 255, 0.95);">
                    <div class="card-header bg-gradient-warning text-white text-center py-3 border-0 rounded-top-3">
                        <i class="fas fa-car fa-2x mb-2"></i>
                        <h5 class="mb-0 fw-bold">Carros Disponíveis</h5>
                    </div>
                    <div class="card-body text-center p-4">
                        <h2 class="display-6 fw-bold text-dark mb-3">208</h2>
                        <p class="text-muted mb-4">Veículos exclusivos em nosso catálogo</p>
                        <a href="{{ route('ver_produtos') }}" class="btn btn-outline-warning rounded-pill px-4">
                            <i class="fas fa-search me-2"></i>Explorar Catálogo
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Últimas Vendas -->
    <section class="container mb-5">
        <div class="card border-0 shadow-lg rounded-3" style="background: rgba(255, 255, 255, 0.95);">
            <div class="card-header bg-gradient-dark text-white py-4 border-0 rounded-top-3">
                <div class="d-flex align-items-center">
                    <i class="fas fa-history fa-2x me-3"></i>
                    <h4 class="mb-0 fw-bold">Últimas Vendas</h4>
                </div>
                <p class="mb-0 mt-2 opacity-75">Transações recentes realizadas</p>
            </div>
            <div class="card-body p-0">
                <div class="list-group list-group-flush">
                    <!-- Venda 1 -->
                    <div class="list-group-item p-4">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <img src="jaowique.jpg" class="rounded-circle shadow" width="60" height="60" alt="John Wick">
                            </div>
                            <div class="col">
                                <h6 class="mb-1 fw-bold text-dark">John Wick</h6>
                                <p class="mb-1 text-muted">Fusca - Cor Preta - Ano 1969</p>
                                <small class="text-success">
                                    <i class="fas fa-check-circle me-1"></i>Venda concluída
                                </small>
                            </div>
                            <div class="col-auto text-end">
                                <span class="badge bg-primary rounded-pill px-3 py-2">R$ 85.000</span>
                                <div class="text-muted small mt-1">
                                    <i class="fas fa-clock me-1"></i>16:13
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Venda 2 -->
                    <div class="list-group-item p-4">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <img src="cosrei.jpg" class="rounded-circle shadow" width="60" height="60" alt="Ayanami">
                            </div>
                            <div class="col">
                                <h6 class="mb-1 fw-bold text-dark">Ayanami</h6>
                                <p class="mb-1 text-muted">EVA - Unidade 00 - Ano 1995</p>
                                <small class="text-success">
                                    <i class="fas fa-check-circle me-1"></i>Venda concluída
                                </small>
                            </div>
                            <div class="col-auto text-end">
                                <span class="badge bg-primary rounded-pill px-3 py-2">R$ 2.500.000</span>
                                <div class="text-muted small mt-1">
                                    <i class="fas fa-clock me-1"></i>00:00
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Venda 3 -->
                    <div class="list-group-item p-4">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <img src="capetaraivoso.jpg" class="rounded-circle shadow" width="60" height="60" alt="Dean Winchester">
                            </div>
                            <div class="col">
                                <h6 class="mb-1 fw-bold text-dark">Dean Winchester</h6>
                                <p class="mb-1 text-muted">Chevrolet Impala - Cor Preto - Ano 1967</p>
                                <small class="text-success">
                                    <i class="fas fa-check-circle me-1"></i>Venda concluída
                                </small>
                            </div>
                            <div class="col-auto text-end">
                                <span class="badge bg-primary rounded-pill px-3 py-2">R$ 120.000</span>
                                <div class="text-muted small mt-1">
                                    <i class="fas fa-clock me-1"></i>04:44
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Logo Central -->
    <section class="container text-center mb-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card border-0 shadow-lg rounded-3" style="background: rgba(255, 255, 255, 0.95);">
                    <div class="card-body py-5">
                        <img src="{{ asset('zoom.png') }}" alt="Impala's King" class="img-fluid mb-4" style="max-height: 1000px;">
                        <h3 class="fw-bold text-dark mb-3">Impala's King</h3>
                        <p class="text-muted mb-4">Antiquário de veículos clássicos e exclusivos</p>
                        <div class="d-flex justify-content-center gap-3">
                            <a href="{{ route('ver_produtos') }}" class="btn btn-primary rounded-pill px-4">
                                <i class="fas fa-car me-2"></i>Ver Veículos
                            </a>
                            <a href="{{ route('formulario') }}" class="btn btn-outline-primary rounded-pill px-4">
                                <i class="fas fa-plus me-2"></i>Cadastrar Veículo
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        .bg-gradient-primary {
            background: linear-gradient(135deg, #2c3e50 0%, #3498db 100%) !important;
        }
        
        .bg-gradient-success {
            background: linear-gradient(135deg, #27ae60 0%, #2ecc71 100%) !important;
        }
        
        .bg-gradient-warning {
            background: linear-gradient(135deg, #f39c12 0%, #f1c40f 100%) !important;
        }
        
        .bg-gradient-dark {
            background: linear-gradient(135deg, #2c3e50 0%, #34495e 100%) !important;
        }
        
        .card {
            backdrop-filter: blur(10px);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.175) !important;
        }
        
        .btn-primary {
            background: linear-gradient(135deg, #3498db 0%, #2980b9 100%);
            border: none;
            transition: all 0.3s ease;
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(52, 152, 219, 0.4);
        }
        
        .btn-outline-primary {
            border: 2px solid #3498db;
            color: #3498db;
            background: transparent;
            transition: all 0.3s ease;
        }
        
        .btn-outline-primary:hover {
            background: #3498db;
            color: white;
            transform: translateY(-2px);
        }
        
        .hero-section {
            padding: 0 2rem;
        }
        
        .carousel-inner {
            border-radius: 1rem;
            overflow: hidden;
        }
        
        .carousel-control-prev, .carousel-control-next {
            width: 5%;
        }
        
        .list-group-item {
            border: none;
            border-bottom: 1px solid #e9ecef;
        }
        
        .list-group-item:last-child {
            border-bottom: none;
        }
    </style>

    <div style="height: 100px;"></div>
@include('components.footer')
</x-app-layout>