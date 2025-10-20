
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="/css/global.css">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Playfair+Display:wght@500;700&display=swap" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <style>
            body {
                font-family: 'Inter', sans-serif;
            }

            h1, h2, h3, .card-header h3 {
                font-family: 'Playfair Display', serif;
            }
        </style>

    </head>
    
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-white-700 dark:bg-white-800">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header style="background-color: #003149; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
                    <div style="max-width: 1280px; margin: 0 auto; padding: 1.5rem 1rem;">
                        {{ $header }}
                    </div>
                </header>

            @endisset

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    
    

    
