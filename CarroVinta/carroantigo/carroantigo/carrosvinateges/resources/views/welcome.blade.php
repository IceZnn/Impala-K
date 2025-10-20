<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Laravel') }}</title>
        
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
        
        <!-- Tailwind -->
        <script src="https://cdn.tailwindcss.com"></script>
        <!-- Bootstrap Icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    </head>
    
    <body class="min-h-screen flex items-center justify-center relative overflow-hidden">
        <!-- Background com efeito gradiente e imagem -->
        <div class="absolute inset-0 bg-gradient-to-br from-blue-50 via-indigo-100 to-purple-100 z-0"></div>
        <div class="absolute inset-0 bg-[url('wall2.png')] bg-cover bg-center bg-no-repeat opacity-20 z-0"></div>
        
        <!-- Conteúdo principal -->
        <div class="relative z-10 text-center max-w-4xl mx-auto px-6">
            <!-- Logo -->
            <div class="mb-8 transform hover:scale-105 transition-transform duration-300">
                <img src="{{ asset('logo tranp.png') }}" alt="Impala's King" class="h-40 w-auto mx-auto drop-shadow-lg">
            </div>
            
            <!-- Título principal -->
            <h1 class="text-5xl md:text-6xl font-bold text-gray-900 mb-6 leading-tight">
                Bem-vindo ao <span class="text-blue-600">Impala's King</span>
            </h1>
            
            <!-- Subtítulo -->
            <p class="text-xl md:text-2xl text-gray-700 mb-10 max-w-2xl mx-auto leading-relaxed font-medium">
                <i class="fas fa-crown text-yellow-500 mr-2"></i>
                Antiquário de veículos clássicos e exclusivos
            </p>

            <!-- Destaques -->
            <div class="mt-12 bg-black/10 backdrop-blur-sm rounded-2xl p-6 max-w-2xl mx-auto border border-white/30">
                <p class="text-gray-700 text-lg mb-4">
                    <i class="fas fa-info-circle text-blue-600 mr-2"></i>
                    Explore nossa coleção exclusiva de veículos que marcaram época
                </p>
                <div class="flex justify-center space-x-6 text-gray-600">
                    <span class="flex items-center">
                        <i class="fas fa-check-circle text-green-500 mr-2"></i>
                        Qualidade
                    </span>
                    <span class="flex items-center">
                        <i class="fas fa-check-circle text-green-500 mr-2"></i>
                        Tradição
                    </span>
                    <span class="flex items-center">
                        <i class="fas fa-check-circle text-green-500 mr-2"></i>
                        Excelência
                    </span>
                </div>
            </div>
            
            <div style="height: 35px;"></div>
            <!-- Botões de ação -->
            <div class="space-y-4 md:space-y-0 md:space-x-6 flex flex-col md:flex-row justify-center items-center">
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}" 
                           class="group bg-gradient-to-r from-blue-600 to-purple-600 text-white px-8 py-4 rounded-2xl hover:from-blue-700 hover:to-purple-700 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl font-semibold text-lg flex items-center justify-center min-w-[200px]">
                            <i class="fas fa-tachometer-alt mr-3 group-hover:rotate-12 transition-transform"></i>
                            Dashboard
                        </a>
                    @else
                        <a href="{{ route('login') }}" 
                           class="group bg-gradient-to-r from-gray-900 to-gray-700 text-white px-8 py-4 rounded-2xl hover:from-gray-800 hover:to-gray-600 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl font-semibold text-lg flex items-center justify-center min-w-[200px]">
                            <i class="fas fa-sign-in-alt mr-3 group-hover:translate-x-1 transition-transform"></i>
                            Login
                        </a>
                        
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" 
                               class="group bg-white/90 text-gray-900 px-8 py-4 rounded-2xl hover:bg-white transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl font-semibold text-lg border border-gray-200 flex items-center justify-center min-w-[200px]">
                                <i class="fas fa-user-plus mr-3 group-hover:scale-110 transition-transform"></i>
                                Registrar
                            </a>
                        @endif
                    @endauth
                @endif
            </div>
            
            <!-- Informação adicional -->
            
            
            <!-- Rodapé -->
            <div class="mt-12 text-gray-800 text-sm font-semibold">
                <div class="flex items-center justify-center space-x-2">
                    <i class="fas fa-copyright"></i>
                    <span>2025 SENAI - Impala's King</span>
                </div>
            </div>
        </div>

        <!-- Efeitos decorativos -->
        <div class="absolute top-10 left-10 w-20 h-20 bg-blue-200 rounded-full blur-xl opacity-30 animate-pulse"></div>
        <div class="absolute bottom-10 right-10 w-32 h-32 bg-purple-200 rounded-full blur-xl opacity-30 animate-pulse delay-1000"></div>
        <div class="absolute top-1/3 right-20 w-16 h-16 bg-indigo-200 rounded-full blur-xl opacity-40 animate-pulse delay-500"></div>
    </body>
</html>