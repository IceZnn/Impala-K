<nav x-data="{ open: false }" class="bg-light border-bottom">
    <!-- Primary Navigation Menu -->
    <div class="container-fluid px-4">
        <div class="d-flex justify-content-between align-items-center" style="height: 64px;">
            <div class="d-flex align-items-center">
                <!-- Logo -->
                <a href="{{ route('dashboard') }}" class="me-3">
                    <img src="{{ asset('logo tranp.png') }}" alt="Minha Foto" width="69" height="69" class="rounded">
                </a>

                <!-- Navigation Links -->
                <div class="d-none d-sm-flex gap-4">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Home') }}
                    </x-nav-link>

                    <a href="{{ route('exemplo') }}"
                       class="nav-link {{ request()->routeIs('exemplo') ? 'fw-bold text-primary border-bottom border-primary' : 'text-secondary' }}">
                        Anunciar Veículo
                    </a>

                    <a href="{{ route('ver_produtos') }}"
                       class="nav-link {{ request()->routeIs('ver_produtos') ? 'fw-bold text-primary border-bottom border-primary' : 'text-secondary' }}">
                        Catálogo
                    </a>
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="d-none d-sm-flex align-items-center ms-3">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="btn btn-outline-primary d-flex align-items-center">
                            <span>{{ Auth::user()->name }}</span>
                            <svg class="ms-2" width="16" height="16" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Perfil') }}
                        </x-dropdown-link>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault(); this.closest('form').submit();">
                                {{ __('Deslogar') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="d-sm-none">
                <button @click="open = !open" class="btn btn-primary btn-sm rounded p-2 border-0">
                    <svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path :class="{'d-none': open, 'd-inline': !open}" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'d-none': !open, 'd-inline': open}" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'d-block': open, 'd-none': !open}" class="d-none d-sm-none">
        <div class="py-2">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <div class="border-top pt-3">
            <div class="px-3">
                <div class="fw-bold">{{ Auth::user()->name }}</div>
                <div class="text-muted">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 px-3">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Perfil') }}
                </x-responsive-nav-link>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-responsive-nav-link :href="route('logout')"
                        onclick="event.preventDefault(); this.closest('form').submit();">
                        {{ __('Deslogar') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
