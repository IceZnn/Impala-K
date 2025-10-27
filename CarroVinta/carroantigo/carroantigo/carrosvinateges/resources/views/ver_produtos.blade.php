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
        <!-- Sistema de Filtro -->
        <div class="row mb-4">
            <div class="col-12">
                <div class="card shadow-lg border-0 rounded-4" style="background: rgba(157, 203, 225, 0.8); backdrop-filter: blur(10px);">
                    <div class="card-header bg-gradient-primary text-white border-0 rounded-top-4 py-3">
                        <h5 class="card-title mb-0 fw-bold">
                            <i class="fas fa-filter me-2"></i>Filtrar Produtos
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-md-3">
                                <label for="search" class="form-label text-dark fw-semibold">
                                    <i class="fas fa-search me-1"></i>Buscar
                                </label>
                                <input type="text" class="form-control rounded-pill" id="search" 
                                       placeholder="Nome do produto...">
                            </div>
                            <div class="col-md-2">
                                <label for="ano" class="form-label text-dark fw-semibold">
                                    <i class="fas fa-calendar me-1"></i>Ano
                                </label>
                                <input type="number" class="form-control rounded-pill" id="ano" 
                                       placeholder="Ex: 2020" min="1900" max="2030">
                            </div>
                            <div class="col-md-3">
                                <label for="vendedor" class="form-label text-dark fw-semibold">
                                    <i class="fas fa-user me-1"></i>Vendedor
                                </label>
                                <input type="text" class="form-control rounded-pill" id="vendedor" 
                                       placeholder="Nome do vendedor...">
                            </div>
                            <div class="col-md-2">
                                <label for="sort" class="form-label text-dark fw-semibold">
                                    <i class="fas fa-sort me-1"></i>Ordenar por
                                </label>
                                <select class="form-select rounded-pill" id="sort">
                                    <option value="novos">Mais Novos</option>
                                    <option value="antigos">Mais Antigos</option>
                                    <option value="nome_asc">Nome A-Z</option>
                                    <option value="nome_desc">Nome Z-A</option>
                                </select>
                            </div>
                            <div class="col-md-2 d-flex align-items-end">
                                <div class="d-flex gap-2 w-100">
                                    <button type="button" id="limparFiltros" class="btn btn-outline-secondary rounded-pill flex-fill">
                                        <i class="fas fa-redo me-1"></i> Limpar
                                    </button>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Contador de resultados -->
                        <div class="row mt-3">
                            <div class="col-12">
                                <div class="d-flex justify-content-between align-items-center">
                                    <small class="text-muted" id="contadorResultados">
                                        Mostrando <span id="totalVisiveis">0</span> de <span id="totalProdutos">0</span> produtos
                                    </small>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="animacaoFiltro" checked>
                                        <label class="form-check-label text-muted small" for="animacaoFiltro">
                                        Apenas priorizar a pesquisa?
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Cards de Produtos -->
        <div class="row g-4 justify-content-center" id="containerProdutos">
            @foreach($produto as $p)
            <div class="col-lg-6 col-md-8 col-sm-12 produto-card" 
                 data-nome="{{ strtolower($p->Nome) }}"
                 data-ano="{{ $p->Ano }}"
                 data-vendedor="{{ strtolower($p->Vendedor) }}"
                 data-data="{{ $p->created_at->timestamp }}">
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
                                {{ Str::limit($p->estado, 250, '...') }}
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
                            <button class="btn btn-primary btn-sm rounded-pill px-3" onclick="abrirNegociacao()">
                                <i class="fas fa-shopping-cart me-1"></i> Negociar
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Mensagem quando não há resultados -->
        <div class="row mt-5 d-none" id="semResultados">
            <div class="col-12 text-center">
                <div class="card shadow-lg border-0 rounded-4" style="background: rgba(157, 203, 225, 0.8);">
                    <div class="card-body py-5">
                        <i class="fas fa-search fa-3x text-muted mb-3"></i>
                        <h4 class="text-dark mb-3">Nenhum produto encontrado</h4>
                        <p class="text-muted mb-4">Tente ajustar os filtros para ver mais resultados</p>
                        <button id="limparFiltros2" class="btn btn-primary rounded-pill px-4">
                            <i class="fas fa-redo me-2"></i>Limpar Filtros
                        </button>
                    </div>
                </div>
            </div>
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

        .form-control, .form-select {
            border: 1px solid rgba(102, 126, 234, 0.3);
            background: rgba(255, 255, 255, 0.9);
        }

        .form-control:focus, .form-select:focus {
            border-color: #667eea;
            box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25);
        }

        .btn-outline-secondary {
            border-color: #6c757d;
            color: #6c757d;
        }

        .btn-outline-secondary:hover {
            background-color: #6c757d;
            border-color: #6c757d;
            color: white;
        }

        .produto-card {
            transition: all 0.4s ease-in-out;
        }

        .produto-card.hidden {
            opacity: 0;
            transform: scale(0.8);
            height: 0 !important;
            margin: 0 !important;
            padding: 0 !important;
            overflow: hidden;
        }

        .produto-card.visible {
            opacity: 1;
            transform: scale(1);
        }
    </style>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const searchInput = document.getElementById('search');
            const anoInput = document.getElementById('ano');
            const vendedorInput = document.getElementById('vendedor');
            const sortSelect = document.getElementById('sort');
            const limparFiltrosBtn = document.getElementById('limparFiltros');
            const limparFiltros2Btn = document.getElementById('limparFiltros2');
            const animacaoCheckbox = document.getElementById('animacaoFiltro');
            const containerProdutos = document.getElementById('containerProdutos');
            const semResultados = document.getElementById('semResultados');
            const totalVisiveisSpan = document.getElementById('totalVisiveis');
            const totalProdutosSpan = document.getElementById('totalProdutos');
            
            let produtosCards = Array.from(document.querySelectorAll('.produto-card'));
            const totalProdutos = produtosCards.length;
            
            totalProdutosSpan.textContent = totalProdutos;
            totalVisiveisSpan.textContent = totalProdutos;

            // Função para aplicar filtros
            function aplicarFiltros() {
                const searchTerm = searchInput.value.toLowerCase();
                const anoTerm = anoInput.value;
                const vendedorTerm = vendedorInput.value.toLowerCase();
                const sortValue = sortSelect.value;
                const usarAnimacao = animacaoCheckbox.checked;
                
                let produtosFiltrados = produtosCards;
                let visiveis = 0;

                // Aplicar filtros
                produtosFiltrados = produtosCards.filter(card => {
                    const nome = card.dataset.nome;
                    const ano = card.dataset.ano;
                    const vendedor = card.dataset.vendedor;
                    
                    let corresponde = true;
                    
                    // Filtro de busca
                    if (searchTerm && !nome.includes(searchTerm)) {
                        corresponde = false;
                    }
                    
                    // Filtro de ano
                    if (anoTerm && ano !== anoTerm) {
                        corresponde = false;
                    }
                    
                    // Filtro de vendedor
                    if (vendedorTerm && !vendedor.includes(vendedorTerm)) {
                        corresponde = false;
                    }
                    
                    return corresponde;
                });

                // Ordenação
                produtosFiltrados.sort((a, b) => {
                    switch (sortValue) {
                        case 'antigos':
                            return parseInt(a.dataset.data) - parseInt(b.dataset.data);
                        case 'nome_asc':
                            return a.dataset.nome.localeCompare(b.dataset.nome);
                        case 'nome_desc':
                            return b.dataset.nome.localeCompare(a.dataset.nome);
                        default: // novos
                            return parseInt(b.dataset.data) - parseInt(a.dataset.data);
                    }
                });

                // Reorganizar no DOM
                containerProdutos.innerHTML = '';
                produtosFiltrados.forEach(card => {
                    containerProdutos.appendChild(card);
                    
                    if (usarAnimacao) {
                        card.classList.remove('hidden');
                        card.classList.add('visible');
                    } else {
                        card.style.opacity = '1';
                        card.style.transform = 'scale(1)';
                    }
                    
                    visiveis++;
                });

                // Atualizar contador
                totalVisiveisSpan.textContent = visiveis;
                //teste
                // Mostrar/ocultar mensagem de sem resultados
                if (visiveis === 0) {
                    semResultados.classList.remove('d-none');
                    containerProdutos.classList.add('d-none');
                } else {
                    semResultados.classList.add('d-none');
                    containerProdutos.classList.remove('d-none');
                }

                // Ocultar cards que não correspondem (com animação)
                produtosCards.forEach(card => {
                    if (!produtosFiltrados.includes(card)) {
                        if (usarAnimacao) {
                            card.classList.add('hidden');
                            card.classList.remove('visible');
                        } else {
                            card.style.opacity = '0';
                            card.style.transform = 'scale(0.8)';
                            card.style.height = '0';
                            card.style.margin = '0';
                            card.style.padding = '0';
                            card.style.overflow = 'hidden';
                        }
                    }
                });
            }

            // Event listeners
            searchInput.addEventListener('input', aplicarFiltros);
            anoInput.addEventListener('input', aplicarFiltros);
            vendedorInput.addEventListener('input', aplicarFiltros);
            sortSelect.addEventListener('change', aplicarFiltros);
            animacaoCheckbox.addEventListener('change', aplicarFiltros);

            // Limpar filtros
            function limparFiltros() {
                searchInput.value = '';
                anoInput.value = '';
                vendedorInput.value = '';
                sortSelect.value = 'novos';
                aplicarFiltros();
            }

            limparFiltrosBtn.addEventListener('click', limparFiltros);
            limparFiltros2Btn.addEventListener('click', limparFiltros);

            // Inicializar
            aplicarFiltros();
        });

        function abrirNegociacao() {
        Swal.fire({
            title: 'Fazer Oferta',
            html: `
                <div class="text-start">
                    <div class="mb-3">
                        <label class="form-label">Valor da Oferta:</label>
                        <input type="number" id="oferta" class="form-control" placeholder="Digite seu valor">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Mensagem (opcional):</label>
                        <textarea id="mensagem" class="form-control" rows="3" placeholder="Digite sua mensagem..."></textarea>
                    </div>
                </div>
            `,
            icon: 'info',
            showCancelButton: true,
            confirmButtonText: 'Enviar Oferta',
            cancelButtonText: 'Cancelar',
            preConfirm: () => {
                const oferta = document.getElementById('oferta').value;
                const mensagem = document.getElementById('mensagem').value;
                
                    if (!oferta) {
                        Swal.showValidationMessage('Por favor, digite um valor para a oferta');
                        return false;
                    }
                
                    return { oferta: oferta, mensagem: mensagem };
                }
            }).then((result) => {
                if (result.isConfirmed) {
                // Aqui você processa a oferta
                    console.log('Oferta:', result.value);
                
                 Swal.fire(
                        'Oferta Enviada!',
                        `Sua oferta de R$ ${result.value.oferta} foi enviada com sucesso!`,
                        'success'
                    );
                }
            });
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
    <div style="height: 100px;"></div>
    @include('components.footer')

</x-app-layout>