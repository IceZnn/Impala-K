<x-guest-layout>
    <div class="d-flex align-items-center justify-content-center min-vh-100">
        <div class="card shadow border-0" style="width: 100%; max-width: 5000px;">
            <div class="card-body p-5">
                <!-- Cabeçalho -->
                <div class="text-center mb-4">
                    <i class="fas fa-crown text-primary fa-3x mb-3"></i>
                    <h2 class="fw-bold text-dark">Impala's King</h2>
                    <p class="text-muted">Crie sua conta</p>
                </div>

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <!-- Nome -->
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Nome completo</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="fas fa-user"></i>
                            </span>
                            <input type="text" 
                                   class="form-control" 
                                   name="name" 
                                   value="{{ old('name') }}" 
                                   required 
                                   autofocus 
                                   placeholder="Seu nome completo">
                        </div>
                        @if ($errors->has('name'))
                            <div class="text-danger small mt-2">
                                {{ $errors->first('name') }}
                            </div>
                        @endif
                    </div>

                    <!-- Email -->
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Email</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="fas fa-envelope"></i>
                            </span>
                            <input type="email" 
                                   class="form-control" 
                                   name="email" 
                                   value="{{ old('email') }}" 
                                   required 
                                   placeholder="seu@email.com">
                        </div>
                        @if ($errors->has('email'))
                            <div class="text-danger small mt-2">
                                {{ $errors->first('email') }}
                            </div>
                        @endif
                    </div>

                    <!-- Senha -->
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Senha</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="fas fa-lock"></i>
                            </span>
                            <input type="password" 
                                   class="form-control" 
                                   name="password" 
                                   required 
                                   placeholder="Mínimo 8 caracteres">
                        </div>
                        @if ($errors->has('password'))
                            <div class="text-danger small mt-2">
                                {{ $errors->first('password') }}
                            </div>
                        @endif
                    </div>

                    <!-- Confirmar Senha -->
                    <div class="mb-4">
                        <label class="form-label fw-semibold">Confirmar senha</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="fas fa-check-circle"></i>
                            </span>
                            <input type="password" 
                                   class="form-control" 
                                   name="password_confirmation" 
                                   required 
                                   placeholder="Digite a senha novamente">
                        </div>
                        @if ($errors->has('password_confirmation'))
                            <div class="text-danger small mt-2">
                                {{ $errors->first('password_confirmation') }}
                            </div>
                        @endif
                    </div>

                    <!-- Botões -->
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <a href="{{ route('login') }}" class="text-primary text-decoration-none">
                            <i class="fas fa-arrow-left me-1"></i>
                            Já tem conta?
                        </a>
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-user-plus me-2"></i>
                            Registrar
                        </button>
                    </div>

                    <!-- Termos -->
                    <div class="text-center border-top pt-3">
                        <p class="text-muted small mb-0">
                            Ao se registrar, você concorda com nossos 
                            <a href="#" class="text-decoration-none">Termos</a> 
                            e 
                            <a href="#" class="text-decoration-none">Privacidade</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</x-guest-layout>