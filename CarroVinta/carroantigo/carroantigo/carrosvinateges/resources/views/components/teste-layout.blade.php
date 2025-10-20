<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel App</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>

    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
        }

        .dark-mode {
            background-color: #1f2937;
            color: #f9fafb;
        }

        .light-mode {
            background-color: #f3f4f6;
            color: #111827;
        }

        .card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
        }

        .nav-link {
            position: relative;
            transition: color 0.3s ease;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -5px;
            left: 0;
            background-color: #3b82f6;
            transition: width 0.3s ease;
        }

        .nav-link:hover::after {
            width: 100%;
        }

        .mobile-menu {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.5s ease;
        }

        .mobile-menu.open {
            max-height: 300px;
        }
    </style>
</head>
<main>
    <div id="carouselExampleRide" class="carousel slide" data-bs-ride="true">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="logo.png" class="d-block w-50" alt="...">
            </div>
            <div class="carousel-item">
                <img src="logo.png" class="d-block w-50" alt="...">
            </div>
            <div class="carousel-item">
                <img src="logo.png" class="d-block w-50" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>


    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <div class="px-4 py-6 sm:px-0">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Card 1 -->
                <div class="card bg-blue dark:bg-blue-700 overflow-hidden shadow rounded-lg">
                    <div class="p-5">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <div class="w-8 h-8 bg-indigo-500 rounded-md flex items-center justify-center">
                                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-5 w-0 flex-1">
                                <dl>
                                    <dt class="text-sm font-medium text-gray-500 dark:text-gray-300 truncate">Total
                                        Revenue</dt>
                                    <dd class="text-lg font-medium text-gray-900 dark:text-white">$24,500.00</dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                    <div class="bg-blue-50 dark:bg-blue-50 px-5 py-3">
                        <div class="text-sm">
                            <a href="#"
                                class="font-medium text-indigo-600 dark:text-indigo-400 hover:text-indigo-500">View
                                all</a>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="card bg-blue dark:bg-blue-700 overflow-hidden shadow rounded-lg">
                    <div class="p-5">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <div class="w-8 h-8 bg-green-500 rounded-md flex items-center justify-center">
                                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-5 w-0 flex-1">
                                <dl>
                                    <dt class="text-sm font-medium text-blue-600 dark:text-gray-300 truncate">New Users
                                    </dt>
                                    <dd class="text-lg font-medium text-black-900 dark:text-white">245</dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                    <div class="bg-blue-50 dark:bg-blue-50 px-5 py-3">
                        <div class="text-sm">
                            <a href="#"
                                class="font-medium text-indigo-600 dark:text-indigo-400 hover:text-indigo-500">View
                                all</a>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="card bg-blue dark:bg-blue-700 overflow-hidden shadow rounded-lg">
                    <div class="p-5">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <div class="w-8 h-8 bg-yellow-500 rounded-md flex items-center justify-center">
                                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-5 w-0 flex-1">
                                <dl>
                                    <dt class="text-sm font-medium text-gray-500 dark:text-gray-300 truncate">Tasks
                                        Completed</dt>
                                    <dd class="text-lg font-medium text-gray-900 dark:text-white">1,245</dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                    <div class="bg-blue-50 dark:bg-blue-50 px-5 py-3">
                        <div class="text-sm">
                            <a href="#"
                                class="font-medium text-indigo-600 dark:text-indigo-400 hover:text-indigo-500">View
                                all</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Recent Activity -->
            <div class="mt-8">
                <div class="bg-blue dark:bg-blue-500 shadow rounded-lg overflow-hidden">
                    <div class="px-6 py-4 border-b border-gray-200 dark:border-gray-700">
                        <h2 class="text-lg font-medium text-gray-900 dark:text-white">Ultimas Vendas</h2>
                    </div>
                    <ul class="divide-y divide-gray-200 dark:divide-gray-700">
                        <li class="px-6 py-4">
                            <div class="flex items-center space-x-3">
                                <div class="flex-shrink-0">
                                    <img class="h-8 w-8 rounded-full"
                                        src="https://images.unsplash.com/photo-1494790108755-2616b612b786?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                        alt="">
                                </div>
                                <div class="min-w-0 flex-1">
                                    <p class="text-sm font-medium text-gray-900 dark:text-white">John Wick</p>
                                    <p class="text-sm text-gray-300 dark:text-black-300">Recentemente Adquiriu um
                                        Fusca-Cor Preta-Ano 1969</p>
                                </div>
                                <div class="flex-shrink-0">
                                    <p class="text-sm text-gray-300 dark:text-gray-300">2h ago</p>
                                </div>
                            </div>
                        </li>
                        <li class="px-6 py-4">
                            <div class="flex items-center space-x-3">
                                <div class="flex-shrink-0">
                                    <img class="h-8 w-8 rounded-full"
                                        src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                        alt="">
                                </div>
                                <div class="min-w-0 flex-1">
                                    <p class="text-sm font-medium text-gray-900 dark:text-white">Michael Smith</p>
                                    <p class="text-sm text-gray-500 dark:text-gray-300">Uploaded new documents</p>
                                </div>
                                <div class="flex-shrink-0">
                                    <p class="text-sm text-gray-500 dark:text-gray-300">4h ago</p>
                                </div>
                            </div>
                        </li>
                        <li class="px-6 py-4">
                            <div class="flex items-center space-x-3">
                                <div class="flex-shrink-0">
                                    <img class="h-8 w-8 rounded-full"
                                        src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                        alt="">
                                </div>
                                <div class="min-w-0 flex-1">
                                    <p class="text-sm font-medium text-gray-900 dark:text-white">Alex Johnson</p>
                                    <p class="text-sm text-gray-500 dark:text-gray-300">Commented on the project</p>
                                </div>
                                <div class="flex-shrink-0">
                                    <p class="text-sm text-gray-500 dark:text-gray-300">6h ago</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</main>
</div>
@include('components.footer')

<script>
    // Toggle mobile menu
    document.getElementById('mobile-menu-button').addEventListener('click', function () {
        const menu = document.getElementById('mobile-menu');
        menu.classList.toggle('open');
    });

    // Toggle dark mode
    document.getElementById('theme-toggle').addEventListener('click', function () {
        const body = document.body;
        const lightIcon = document.getElementById('theme-icon-light');
        const darkIcon = document.getElementById('theme-icon-dark');

        if (body.classList.contains('light-mode')) {
            body.classList.remove('light-mode');
            body.classList.add('dark-mode');
            lightIcon.classList.add('hidden');
            darkIcon.classList.remove('hidden');
        } else {
            body.classList.remove('dark-mode');
            body.classList.add('light-mode');
            darkIcon.classList.add('hidden');
            lightIcon.classList.remove('hidden');
        }
    });

    // Simulate Laravel functionality
    document.addEventListener('DOMContentLoaded', function () {
        console.log('Laravel app loaded successfully!');
    });
</script>
</body>

</html>