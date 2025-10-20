<x-guest-layout>
    <!-- Session Status -->
    @if (session('status'))
        <div class="alert alert-success mb-4">
            {{ session('status') }}
        </div>
    @endif

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="text-center mb-4">
            <h2 class="h3 text-dark">Bem-vindo de volta</h2>
            <p class="text-muted">Faça login em sua conta</p>
        </div>

        <!-- Email Address -->
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <div class="input-group">
                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus autocomplete="username" placeholder="seu@email.com">
            </div>
            @if ($errors->has('email'))
                <div class="text-danger mt-1">{{ $errors->first('email') }}</div>
            @endif
        </div>

        <!-- Password -->
        <div class="mb-3">
            <label for="password" class="form-label">Senha</label>
            <div class="input-group">
                <span class="input-group-text"><i class="fas fa-lock"></i></span>
                <input id="password" type="password" class="form-control" name="password" required autocomplete="current-password" placeholder="Sua senha">
            </div>
            @if ($errors->has('password'))
                <div class="text-danger mt-1">{{ $errors->first('password') }}</div>
            @endif
        </div>

        <!-- Remember Me & Forgot Password -->
        <div class="d-flex justify-content-between align-items-center mb-3">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="remember_me" name="remember">
                <label class="form-check-label" for="remember_me">Lembrar de mim</label>
            </div>
            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" class="text-decoration-none">Esqueceu a senha?</a>
            @endif
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary w-100 py-2 mb-3">
            <i class="fas fa-sign-in-alt me-2"></i>Entrar
        </button>

        <!-- Register Link -->
        @if (Route::has('register'))
            <div class="text-center pt-3 border-top">
                <p class="text-muted">Não tem uma conta? <a href="{{ route('register') }}" class="text-decoration-none">Cadastre-se</a></p>
            </div>
        @endif
    </form>
</x-guest-layout>