<x-app-layout>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Produto</title>
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
        background: linear-gradient(rgba(255, 248, 240, 0.8), rgba(230, 220, 210, 0.8)), url('/cacetaatomica.jpg');
        background-size: cover;
        background-position: center;
        background-blend-mode: overlay;
        font-family: 'Playfair Display', serif;
        min-height: 100vh;
    ">

    <div style="margin: 7%" class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10 col-sm-12">
                <div class="card shadow-lg border-0 rounded-3" style="background: rgba(255, 255, 255, 0.95); backdrop-filter: blur(10px);">
                    <div class="card-header bg-gradient-primary text-white text-center py-4 border-0">
                        <h4 class="mb-0 fw-bold"><i class="fas fa-edit me-2"></i>Alterar Produto</h4>
                        <p class="mb-0 mt-2 opacity-75">Atualize as informações do produto</p>
                    </div>
                    <div class="card-body p-4">
                        <form action="{{route('alterar_produto')}}" method="POST" id="productForm">
                            @csrf
                            <input type="text" id="id" name="id" hidden value="{{$produto->id}}">

                            <!-- Nome -->
                            <div class="mb-4">
                                <label for="Nome" class="form-label fw-semibold text-dark">
                                    <i class="fas fa-tag me-2 text-primary"></i>Nome do Produto
                                </label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-end-0">
                                        <i class="fas fa-tag text-primary"></i>
                                    </span>
                                    <input type="text" name="Nome" value="{{$produto->Nome}}" id="Nome" 
                                        class="form-control form-control-lg border-start-0" 
                                        placeholder="Digite o nome do produto" required>
                                </div>
                            </div>

                            <!-- Ano -->
                            <div class="mb-4">
                                <label for="Ano" class="form-label fw-semibold text-dark">
                                    <i class="fas fa-calendar me-2 text-primary"></i>Ano
                                </label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-end-0">
                                        <i class="fas fa-calendar text-primary"></i>
                                    </span>
                                    <input type="text" name="Ano" id="Ano" value="{{$produto->Ano}}" 
                                        class="form-control form-control-lg border-start-0" 
                                        placeholder="Digite o ano" required>
                                </div>
                            </div>

                            <!-- Vendedor -->
                            <div class="mb-4">
                                <label for="Vendedor" class="form-label fw-semibold text-dark">
                                    <i class="fas fa-user me-2 text-primary"></i>Vendedor
                                </label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-end-0">
                                        <i class="fas fa-user text-primary"></i>
                                    </span>
                                    <input type="text" name="Vendedor" value="{{$produto->Vendedor}}" id="Vendedor" 
                                        class="form-control form-control-lg border-start-0" 
                                        placeholder="Digite o nome do vendedor" required>
                                </div>
                            </div>

                            <!-- Estado -->
                            <div class="mb-4">
                                <label for="estado" class="form-label fw-semibold text-dark">
                                    <i class="fas fa-file-text me-2 text-primary"></i>Descrição do Produto
                                </label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-end-0 align-items-start pt-3">
                                        <i class="fas fa-file-text text-primary"></i>
                                    </span>
                                    <textarea name="estado" id="estado" class="form-control form-control-lg border-start-0" 
                                        rows="6" placeholder="Descreva o produto aqui..." required>{{$produto->estado}}</textarea>
                                </div>
                            </div>

                            <!-- Botões -->
                            <div class="d-flex gap-3 mt-4">
                                <a href="{{ url()->previous() }}" class="btn btn-outline-secondary btn-lg rounded-pill py-3 fw-semibold flex-fill">
                                    <i class="fas fa-arrow-left me-2"></i>Cancelar
                                </a>
                                <button type="submit" class="btn btn-primary btn-lg shadow-sm rounded-pill py-3 fw-bold flex-fill">
                                    <i class="fas fa-save me-2"></i>Atualizar Produto
                                </button>
                            </div>
                        </form>
                    </div>
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
            border: none;
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
    </style>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        // Adiciona validação básica do formulário
        document.getElementById('productForm').addEventListener('submit', function(e) {
            const nome = document.getElementById('Nome').value.trim();
            const ano = document.getElementById('Ano').value.trim();
            const vendedor = document.getElementById('Vendedor').value.trim();
            const estado = document.getElementById('estado').value.trim();
            
            if (!nome || !ano || !vendedor || !estado) {
                e.preventDefault();
                Swal.fire({
                    icon: 'warning',
                    title: 'Campos obrigatórios',
                    text: 'Por favor, preencha todos os campos obrigatórios.',
                    confirmButtonColor: '#3498db'
                });
            }
        });
    </script>
    
</x-app-layout>