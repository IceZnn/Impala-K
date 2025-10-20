<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Deletar Conta') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Uma vez que sua conta for excluída, todos os seus recursos e dados serão apagados permanentemente. Antes de excluir sua conta, faça o download de quaisquer dados ou informações que deseja manter.') }}
        </p>
    </header>

    <button 
        class="btn btn-danger btn-lg shadow-sm rounded-pill px-4 py-2 fw-bold"
        data-bs-toggle="modal" 
        data-bs-target="#confirmUserDeletion"
    >
        <i class="fas fa-trash-alt me-2"></i>{{ __('Deletar Conta') }}
    </button>

    <!-- Modal -->
    <div class="modal fade" id="confirmUserDeletion" tabindex="-1" aria-labelledby="confirmUserDeletionLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0 shadow-lg rounded-3">
                <div class="modal-header bg-gradient-danger text-white border-0">
                    <h5 class="modal-title fw-bold" id="confirmUserDeletionLabel">
                        <i class="fas fa-exclamation-triangle me-2"></i>{{ __('Confirmar Exclusão') }}
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                
                <form method="post" action="{{ route('profile.destroy') }}">
                    @csrf
                    @method('delete')
                    
                    <div class="modal-body p-4">
                        <div class="alert alert-warning border-0 rounded-2 mb-4">
                            <i class="fas fa-exclamation-circle me-2"></i>
                            <strong>Atenção:</strong> Esta ação não pode ser desfeita.
                        </div>

                        <h6 class="fw-semibold text-gray-900 mb-3">
                            {{ __('Tem certeza que deseja deletar sua conta?') }}
                        </h6>

                        <p class="text-muted small mb-4">
                            {{ __('Uma vez que sua conta for excluída, todos os seus recursos e dados serão apagados permanentemente. Antes de excluir sua conta, faça o download de quaisquer dados ou informações que deseja manter.') }}
                        </p>

                        <div class="mb-3">
                            <label for="password" class="form-label fw-semibold text-gray-700">
                                {{ __('Digite sua senha para confirmar:') }}
                            </label>
                            <div class="input-group">
                                <span class="input-group-text bg-light">
                                    <i class="fas fa-lock text-danger"></i>
                                </span>
                                <input 
                                    id="password"
                                    name="password"
                                    type="password"
                                    class="form-control rounded-end"
                                    placeholder="{{ __('Senha Atual') }}"
                                    required
                                />
                            </div>
                            @if ($errors->userDeletion->get('password'))
                                <div class="text-danger small mt-2">
                                    <i class="fas fa-exclamation-circle me-1"></i>
                                    {{ $errors->userDeletion->first('password') }}
                                </div>
                            @endif
                        </div>
                    </div>
                    
                    <div class="modal-footer border-0 bg-light rounded-bottom-3">
                        <button type="button" class="btn btn-outline-secondary rounded-pill px-4" data-bs-dismiss="modal">
                            <i class="fas fa-times me-2"></i>{{ __('Cancelar') }}
                        </button>
                        <button type="submit" class="btn btn-danger rounded-pill px-4 fw-semibold">
                            <i class="fas fa-trash-alt me-2"></i>{{ __('Deletar Conta') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Adicione esses scripts se necessário -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<style>
    .bg-gradient-danger {
        background: linear-gradient(135deg, #dc3545 0%, #c82333 100%) !important;
    }
    
    .btn-danger {
        background: linear-gradient(135deg, #dc3545 0%, #c82333 100%);
        border: none;
    }
    
    .btn-danger:hover {
        background: linear-gradient(135deg, #c82333 0%, #a71e2a 100%);
        transform: translateY(-1px);
    }
    
    .modal-content {
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
    }
</style>