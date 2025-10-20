<section>
    <header class="mb-4">
        <h2 class="h4 fw-bold text-white mb-2">
            <i class="fas fa-key me-2"></i>{{ __('Atualizar Senha') }}
        </h2>
        <p class="text-light opacity-75 mb-0">
            {{ __('Recomendamos uma senha longa ou aleatória para garantir a sua segurança') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-4">
        @csrf
        @method('put')

        <!-- Senha Atual -->
        <div class="mb-4">
            <label for="update_password_current_password" class="form-label text-white fw-semibold">
                <i class="fas fa-lock me-2"></i>{{ __('Senha Atual') }}
            </label>
            <div class="input-group">
                <span class="input-group-text bg-dark border-dark text-light">
                    <i class="fas fa-key"></i>
                </span>
                <input type="password" 
                       id="update_password_current_password" 
                       name="current_password" 
                       class="form-control bg-dark border-dark text-light" 
                       autocomplete="current-password"
                       placeholder="Digite sua senha atual">
            </div>
            @if ($errors->updatePassword->get('current_password'))
                <div class="text-warning small mt-2">
                    <i class="fas fa-exclamation-triangle me-1"></i>
                    {{ $errors->updatePassword->first('current_password') }}
                </div>
            @endif
        </div>

        <!-- Nova Senha -->
        <div class="mb-4">
            <label for="update_password_password" class="form-label text-white fw-semibold">
                <i class="fas fa-lock me-2"></i>{{ __('Nova Senha') }}
            </label>
            <div class="input-group">
                <span class="input-group-text bg-dark border-dark text-light">
                    <i class="fas fa-plus"></i>
                </span>
                <input type="password" 
                       id="update_password_password" 
                       name="password" 
                       class="form-control bg-dark border-dark text-light" 
                       autocomplete="new-password"
                       placeholder="Digite sua nova senha">
            </div>
            @if ($errors->updatePassword->get('password'))
                <div class="text-warning small mt-2">
                    <i class="fas fa-exclamation-triangle me-1"></i>
                    {{ $errors->updatePassword->first('password') }}
                </div>
            @endif
        </div>

        <!-- Confirmar Senha -->
        <div class="mb-4">
            <label for="update_password_password_confirmation" class="form-label text-white fw-semibold">
                <i class="fas fa-lock me-2"></i>{{ __('Confirmar Senha') }}
            </label>
            <div class="input-group">
                <span class="input-group-text bg-dark border-dark text-light">
                    <i class="fas fa-check"></i>
                </span>
                <input type="password" 
                       id="update_password_password_confirmation" 
                       name="password_confirmation" 
                       class="form-control bg-dark border-dark text-light" 
                       autocomplete="new-password"
                       placeholder="Confirme sua nova senha">
            </div>
            @if ($errors->updatePassword->get('password_confirmation'))
                <div class="text-warning small mt-2">
                    <i class="fas fa-exclamation-triangle me-1"></i>
                    {{ $errors->updatePassword->first('password_confirmation') }}
                </div>
            @endif
        </div>

        <!-- Botão e Mensagem -->
        <div class="d-flex align-items-center gap-3">
            <button type="submit" class="btn btn-primary px-4 py-2 fw-semibold rounded-pill">
                <i class="fas fa-save me-2"></i>{{ __('Salvar') }}
            </button>

            @if (session('status') === 'password-updated')
                <div class="alert alert-success alert-dismissible fade show mb-0 py-2" role="alert">
                    <i class="fas fa-check-circle me-2"></i>{{ __('Senha atualizada com sucesso!') }}
                    <button type="button" class="btn-close btn-close-sm" data-bs-dismiss="alert"></button>
                </div>
            @endif
        </div>
    </form>
</section>

<style>
    .form-control:focus {
        border-color: #0d6efd;
        box-shadow: 0 0 0 0.2rem rgba(13, 110, 253, 0.25);
    }
    
    .input-group-text {
        border-right: none;
    }
    
    .form-control {
        border-left: none;
    }
    
    .btn-primary {
        background: linear-gradient(135deg, #0d6efd 0%, #0a58ca 100%);
        border: none;
        transition: all 0.3s ease;
    }
    
    .btn-primary:hover {
        transform: translateY(-1px);
        box-shadow: 0 4px 8px rgba(13, 110, 253, 0.3);
    }
    
    .alert-success {
        border: none;
        border-radius: 8px;
    }
</style>