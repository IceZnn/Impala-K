<x-guest-layout>
    <div class="mb-4 text-sm text-black-600 dark:text-black-400 ">
        <b>{{ __('Esqueceu sua senha?Sem problema.Nos informe seu email para que possamos lhe enviar um link de alteração.') }}</b>
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Enviar Link de Alteração') }}
            </x-primary-button>
        </div>
        <body style="background: linear-gradient(rgba(218, 230, 247, 0.7), rgba(134, 141, 165, 0.7)), url('wall1.png'); background-size: cover; background-position: center;"></body>

    </form>
</x-guest-layout>
