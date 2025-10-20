<x-app-layout>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Playfair+Display:wght@500;700&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Tailwind (opcional, se quiser usar junto) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <x-slot name="header">
        <body style="
        font-family: 'Playfair Display', serif;
        ">
        <div style="background-color: #6f90a0; padding: 1rem; border-radius: 8px;">
            <h2 style="font-weight: bold; font-size: 1.5rem; color: #ffffff; letter-spacing: -0.5px; margin-bottom: 0.25rem;">
                {{ __(' Meu Perfil') }}
            </h2>
            <p style="margin-top: 0.25rem; font-size: 0.875rem; color: #f0f0f0;">
                Gerencie suas informações pessoais, segurança e preferências.
            </p>
        </div>
    </x-slot>



    <div style="padding-top: 3rem; padding-bottom: 3rem; background-color: #001e2d;">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-10">

            {{-- Informações do Perfil --}}
            <div style="padding: 24px; background-color: rgb(0, 49, 73); box-shadow: 0 0 10px rgba(0,0,0,0.15); border-radius: 12px; border: 1px solid #ccc;">
                <h3 style="font-size: 1.25rem; font-weight: 600; color: #ffffff; margin-bottom: 1rem;">
                    Informações Pessoais
                </h3>
                <div style="max-width: 640px;">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div style="padding: 24px; background-color: #003149; box-shadow: 0 0 10px rgba(0,0,0,0.15); border-radius: 12px; border: 1px solid #ccc; margin-top: 2rem;">
                <h3 style="font-size: 1.25rem; font-weight: 600; color: #ffffff; margin-bottom: 1rem;">
                    Segurança da Conta
                </h3>
                <div style="max-width: 640px;">
                    @include('profile.partials.update-password-form')
                </div>
            </div>


            {{-- Excluir Conta --}}
            <div style="padding: 24px; background-color: #500303; box-shadow: 0 0 10px rgba(0,0,0,0.15); border-radius: 12px; border: 1px solid #ff7785; margin-top: 2rem;">
                <h3 style="font-size: 1.25rem; font-weight: 600; color: #ffffff; margin-bottom: 1rem;">
                    Excluir Conta
                </h3>
        

                

                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
