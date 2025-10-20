<x-app-layout>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deletar Produto</title>
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
    background: linear-gradient(rgba(255, 248, 240, 0.8), rgba(230, 220, 210, 0.8)), url('/fallout.jpeg');
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
                    <div class="card-header bg-gradient-danger text-white text-center py-4 border-0">
                        <h4 class="mb-0 fw-bold"><i class="fas fa-trash-alt me-2"></i>Deletar Produto</h4>
                        <p class="mb-0 mt-2 opacity-75">Confirme a exclusão permanente deste produto</p>
                    </div>
                    <div class="card-body p-4">
                        <div class="alert alert-warning border-0 rounded-2 mb-4">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-exclamation-triangle me-2 fs-5"></i>
                                <strong>Atenção:</strong> Esta ação não pode ser desfeita!
                            </div>
                            <p class="mb-0 mt-2">Todos os dados deste produto serão permanentemente excluídos do sistema.</p>
                        </div>

                        <form action="{{ route('apaga_produto') }}" method="POST" id="deleteForm">
                            @csrf
                            <input type="text" id="id" name="id" hidden value="{{$produto->id}}">
                            
                            <!-- Nome -->
                            <div class="mb-4">
                                <label for="Nome" class="form-label fw-semibold text-dark">
                                    <i class="fas fa-tag me-2 text-danger"></i>Nome do Produto
                                </label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-end-0">
                                        <i class="fas fa-tag text-danger"></i>
                                    </span>
                                    <input type="text" name="Nome" disabled value="{{ $produto->Nome }}" id="Nome" 
                                        class="form-control form-control-lg border-start-0 bg-light" 
                                        placeholder="Nome do produto" required>
                                </div>
                            </div>

                            <!-- Ano -->
                            <div class="mb-4">
                                <label for="Ano" class="form-label fw-semibold text-dark">
                                    <i class="fas fa-calendar me-2 text-danger"></i>Ano
                                </label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-end-0">
                                        <i class="fas fa-calendar text-danger"></i>
                                    </span>
                                    <input type="text" name="Ano" disabled value="{{$produto->Ano}}" id="Ano" 
                                        class="form-control form-control-lg border-start-0 bg-light" 
                                        placeholder="Ano do produto" required>
                                </div>
                            </div>

                            <!-- Vendedor -->
                            <div class="mb-4">
                                <label for="Vendedor" class="form-label fw-semibold text-dark">
                                    <i class="fas fa-user me-2 text-danger"></i>Vendedor
                                </label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-end-0">
                                        <i class="fas fa-user text-danger"></i>
                                    </span>
                                    <input type="text" name="Vendedor" id="Vendedor" disabled value="{{$produto->Vendedor}}"  
                                        class="form-control form-control-lg border-start-0 bg-light" 
                                        placeholder="Nome do vendedor" required>
                                </div>
                            </div>

                            <!-- Estado -->
                            <div class="mb-4">
                                <label for="estado" class="form-label fw-semibold text-dark">
                                    <i class="fas fa-file-text me-2 text-danger"></i>Descrição
                                </label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-end-0 align-items-start pt-3">
                                        <i class="fas fa-file-text text-danger"></i>
                                    </span>
                                    <textarea name="estado" id="estado" disabled class="form-control form-control-lg border-start-0 bg-light" 
                                        rows="5" placeholder="Descrição do produto" required>{{$produto->estado}}</textarea>
                                </div>
                            </div>

                            <!-- Botões -->
                            <div class="d-flex gap-3 mt-4">
                                <a href="{{ url()->previous() }}" class="btn btn-outline-secondary btn-lg rounded-pill py-3 fw-semibold flex-fill">
                                    <i class="fas fa-arrow-left me-2"></i>Cancelar
                                </a>
                                <button type="button" onclick="confirmDelete()" class="btn btn-danger btn-lg shadow-sm rounded-pill py-3 fw-bold flex-fill">
                                    <i class="fas fa-trash-alt me-2"></i>Deletar Produto
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .bg-gradient-danger {
            background: linear-gradient(135deg, #dc3545 0%, #c82333 100%) !important;
        }
        
        .form-control-lg {
            border: 1px solid #dee2e6;
            border-left: 0;
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
        
        .btn-danger {
            background: linear-gradient(135deg, #dc3545 0%, #c82333 100%);
            border: none;
            transition: all 0.3s ease;
        }
        
        .btn-danger:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(220, 53, 69, 0.4);
            background: linear-gradient(135deg, #c82333 0%, #a71e2a 100%);
        }
        
        .btn-outline-secondary:hover {
            transform: translateY(-2px);
        }
        
        .bg-light {
            background-color: #f8f9fa !important;
        }
    </style>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function confirmDelete() {
            Swal.fire({
                title: 'Tem certeza?',
                text: "Esta ação não pode ser desfeita! O produto será permanentemente excluído.",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#dc3545',
                cancelButtonColor: '#6c757d',
                confirmButtonText: 'Sim, deletar!',
                cancelButtonText: 'Cancelar',
                reverseButtons: true,
                customClass: {
                    confirmButton: 'btn btn-danger rounded-pill px-4',
                    cancelButton: 'btn btn-outline-secondary rounded-pill px-4'
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('deleteForm').submit();
                }
            });
        }
    </script>

    
</x-app-layout>