<section>
    <header class="mb-4">
        <h2 class="h4 fw-bold text-white mb-2">
            <i class="fas fa-user-edit me-2"></i>{{ __('Informação do Perfil') }}
        </h2>
        <p class="text-light opacity-75 mb-0">
            {{ __("Atualize seus dados e email.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-4">
        @csrf
        @method('patch')

        <!-- Nome -->
        <div class="mb-4">
            <label for="name" class="form-label text-white fw-semibold">
                <i class="fas fa-user me-2"></i>{{ __('Nome') }}
            </label>
            <div class="input-group">
                <span class="input-group-text bg-dark border-dark text-light">
                    <i class="fas fa-id-card"></i>
                </span>
                <input type="text" 
                       id="name" 
                       name="name" 
                       class="form-control bg-dark border-dark text-light" 
                       value="{{ old('name', $user->name) }}" 
                       required 
                       autofocus 
                       autocomplete="name"
                       placeholder="Digite seu nome">
            </div>
            @if ($errors->get('name'))
                <div class="text-warning small mt-2">
                    <i class="fas fa-exclamation-triangle me-1"></i>
                    {{ $errors->first('name') }}
                </div>
            @endif
        </div>

        <!-- Email -->
        <div class="mb-4">
            <label for="email" class="form-label text-white fw-semibold">
                <i class="fas fa-envelope me-2"></i>{{ __('Email') }}
            </label>
            <div class="input-group">
                <span class="input-group-text bg-dark border-dark text-light">
                    <i class="fas fa-at"></i>
                </span>
                <input type="email" 
                       id="email" 
                       name="email" 
                       class="form-control bg-dark border-dark text-light" 
                       value="{{ old('email', $user->email) }}" 
                       required 
                       autocomplete="username"
                       placeholder="Digite seu email">
            </div>
            @if ($errors->get('email'))
                <div class="text-warning small mt-2">
                    <i class="fas fa-exclamation-triangle me-1"></i>
                    {{ $errors->first('email') }}
                </div>
            @endif

            <!-- Verificação de Email -->
            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div class="alert alert-warning border-0 rounded-2 mt-3">
                    <div class="d-flex align-items-center">
                        <i class="fas fa-exclamation-circle me-2 fs-5"></i>
                        <strong class="me-2">{{ __('Seu email não é verificado.') }}</strong>
                    </div>
                    <p class="mb-2 mt-2">{{ __('Clique no botão abaixo para reenviar o email de verificação.') }}</p>
                    <button form="send-verification" class="btn btn-outline-warning btn-sm rounded-pill px-3">
                        <i class="fas fa-paper-plane me-1"></i>{{ __('Reenviar Email') }}
                    </button>
                    
                    @if (session('status') === 'verification-link-sent')
                        <div class="alert alert-success border-0 rounded-2 mt-3 mb-0 py-2">
                            <i class="fas fa-check-circle me-2"></i>
                            {{ __('Um novo link de email foi enviado para você.') }}
                        </div>
                    @endif
                </div>
            @endif
        </div>

        <!-- Botão e Mensagem -->
        <div class="d-flex align-items-center gap-3">
            <button type="submit" class="btn btn-primary px-4 py-2 fw-semibold rounded-pill">
                <i class="fas fa-save me-2"></i>{{ __('Salvar') }}
            </button>

            @if (session('status') === 'profile-updated')
                <div class="alert alert-success alert-dismissible fade show mb-0 py-2" role="alert">
                    <i class="fas fa-check-circle me-2"></i>{{ __('Perfil atualizado com sucesso!') }}
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
    
    .alert {
        border: none;
        border-radius: 8px;
    }
    
    .btn-outline-warning {
        border-width: 2px;
        font-weight: 500;
    }
</style>