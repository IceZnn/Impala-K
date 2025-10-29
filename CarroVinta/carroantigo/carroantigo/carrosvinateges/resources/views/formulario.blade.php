<x-app-layout>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Veículo - Impala's King</title>

    <!-- Fontes -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <body style="
        background: linear-gradient(rgb(208, 226, 235), rgb(200, 239, 255)), url('/wall1.png');
        background-size: cover;
        background-position: center;
        background-blend-mode: overlay;
        font-family: 'Inter', sans-serif;
        min-height: 100vh;
    ">

    <div style="margin: 7%" class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <!-- Card Principal -->
                <div class="card shadow-lg border-0 rounded-4 overflow-hidden" style="background: rgba(255, 255, 255, 0.95); backdrop-filter: blur(10px);">
                    <!-- Header com Gradiente -->
                    <div class="card-header py-4 text-center text-white border-0" style="
                        background: linear-gradient(135deg, #2c3e50 0%, #3498db 100%);
                    ">
                        <div class="d-flex align-items-center justify-content-center mb-2">
                            <i class="fas fa-car-side fa-2x me-3"></i>
                            <h3 class="mb-0 fw-bold">
                                Cadastrar Veículo
                            </h3>
                        </div>
                        <p class="mb-0 opacity-75">Adicione um novo veículo à coleção Impala's King</p>
                    </div>

                    <!-- Body do Formulário -->
                    <div class="card-body p-4 p-md-5">
                        <form action="{{route('salva_produto')}}" method="POST">
                            @csrf

                            <!-- Nome do Veículo -->
                            <div class="mb-4">
                                <label for="Nome" class="form-label fw-semibold text-dark mb-3">
                                    <i class="fas fa-tag me-2 text-primary"></i>
                                    Nome do Veículo
                                </label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-end-0">
                                        <i class="fas fa-car text-primary"></i>
                                    </span>
                                    <input type="text" name="Nome" id="Nome" 
                                           class="form-control form-control-lg border-start-0"
                                           placeholder="Ex: Chevrolet Impala 1967" required>
                                </div>
                            </div>
                            
                            <div class="mb-4">
                                <label for="imagem" class="form-label fw-semibold text-dark mb-3">
                                    <i class="fas fa-tag me-2 text-primary"></i>
                                    Imagem do veículo
                                </label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-end-0">
                                        <i class="fas fa-null text-primary"></i>
                                    </span>
                                    <input type="text" name="imagem" id="imagem" 
                                           class="form-control form-control-lg border-start-0"
                                           placeholder="Digite a imagem" required>
                                </div>
                            </div>
                            <!-- Ano do Veículo -->
                            <div class="mb-4">
                                <label for="Ano" class="form-label fw-semibold text-dark mb-3">
                                    <i class="fas fa-calendar-alt me-2 text-primary"></i>
                                    Ano do Veículo
                                </label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-end-0">
                                        <i class="fas fa-history text-primary"></i>
                                    </span>
                                    <input type="number" name="Ano" id="Ano" 
                                           class="form-control form-control-lg border-start-0"
                                           placeholder="Ex: 1967" 
                                           min="1900" 
                                           max="2025" 
                                           required>
                                </div>
                            </div>

                            <!-- Vendedor -->
                            <div class="mb-4">
                                <label for="Vendedor" class="form-label fw-semibold text-dark mb-3">
                                    <i class="fas fa-user me-2 text-primary"></i>
                                    Vendedor
                                </label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-end-0">
                                        <i class="fas fa-user-tie text-primary"></i>
                                    </span>
                                    <input type="text" name="Vendedor" id="Vendedor" 
                                           class="form-control form-control-lg border-start-0"
                                           placeholder="Nome completo do vendedor" required>
                                </div>
                            </div>

                            <!-- Estado do Carro -->
                            <div class="mb-4">
                                <label for="estado" class="form-label fw-semibold text-dark mb-3">
                                    <i class="fas fa-file-alt me-2 text-primary"></i>
                                    Descrição do Veículo
                                </label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-end-0 align-items-start pt-3">
                                        <i class="fas fa-clipboard-list text-primary"></i>
                                    </span>
                                    <textarea name="estado" id="estado" 
                                              class="form-control form-control-lg border-start-0" 
                                              rows="5"
                                              placeholder="Descreva detalhes como: estado de conservação, motor, câmbio, interior, histórico..."
                                              required></textarea>
                                </div>
                                <div class="form-text text-muted mt-2">
                                    <i class="fas fa-info-circle me-1"></i>
                                    Inclua informações sobre motor, câmbio, interior, documentação e estado geral.
                                </div>
                            </div>

                            <!-- Botões de Ação -->
                            <div class="d-flex gap-3 mt-5">
                                <a href="{{ url()->previous() }}" class="btn btn-outline-secondary btn-lg rounded-pill fw-semibold flex-fill py-3">
                                    <i class="fas fa-arrow-left me-2"></i>
                                    Voltar
                                </a>
                                <button type="submit" class="btn btn-primary btn-lg rounded-pill fw-bold flex-fill py-3 shadow-sm">
                                    <i class="fas fa-plus-circle me-2"></i>
                                    Cadastrar Veículo
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Informações Adicionais -->
                <div class="text-center mt-4">
                    <p class="text-muted">
                        <i class="fas fa-shield-alt me-2"></i>
                        Todos os veículos são verificados e autenticados.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <style>
        .bg-gradient-primary {
            background: linear-gradient(135deg, #2c3e50 0%, #3498db 100%) !important;
        }
        
        .form-control-lg {
            border: 1px solid #dee2e6;
            border-left: 0;
            transition: all 0.3s ease;
        }
        
        .form-control-lg:focus {
            border-color: #3498db;
            box-shadow: 0 0 0 0.2rem rgba(52, 152, 219, 0.25);
        }
        
        .input-group-text {
            background-color: #f8f9fa !important;
            border: 1px solid #dee2e6;
            border-right: 0;
        }
        
        .card {
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
        
        .btn-outline-secondary:hover {
            transform: translateY(-2px);
        }
        
        .text-primary {
            color: #3498db !important;
        }
    </style>


</x-app-layout>