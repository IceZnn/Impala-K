<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

        <style>
            body {
                background: linear-gradient(rgba(217, 228, 245, 0.8), rgba(65, 75, 109, 0.8)), url('wall1.png');
                background-size: cover;
                background-position: center;
                background-attachment: fixed;
            }
            .login-card {
                background: rgba(230, 243, 252, 0.9);
                backdrop-filter: blur(10px);
                border-radius: 1rem;
                box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
                border: 1px solid rgba(255, 255, 255, 0.18);
            }
        </style>
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-vh-100 d-flex flex-column justify-content-center align-items-center p-3">
            <div class="mb-4">
                <img src="{{ asset('logo tranp.png') }}" alt="Logo" class="rounded" width="200" height="150">
            </div>

            <div class="login-card w-100" style="max-width: 400px;">
                <div class="card-body p-4">
                    {{ $slot }}
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>