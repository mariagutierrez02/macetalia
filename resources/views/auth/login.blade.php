@extends('layouts.app')

@section('title', 'Iniciar sesión | Macetas & Muebles')

@section('content')

<div class="min-h-screen bg-slate-50 flex items-center justify-center p-6">

    <div class="w-full max-w-5xl bg-white rounded-3xl shadow-xl overflow-hidden grid md:grid-cols-2">

        {{-- Panel visual --}}
        <div class="hidden md:flex relative bg-green-900 p-12 text-white flex-col justify-between">

            <div>
                <div class="flex items-center gap-3">
                    <div class="w-12 h-12 rounded-2xl bg-white/15 flex items-center justify-center text-2xl">
                        🌿
                    </div>

                    <div>
                        <h1 class="text-xl font-bold">Macetas & Muebles</h1>
                        <p class="text-green-200 text-sm">
                            Sistema de gestión
                        </p>
                    </div>
                </div>
            </div>

            <div>
                <p class="text-green-300 font-medium mb-3">
                    Bienvenido
                </p>

                <h2 class="text-4xl font-bold leading-tight mb-5">
                    Administra tu negocio
                    <span class="text-green-300">de forma sencilla.</span>
                </h2>

                <p class="text-green-100 leading-relaxed">
                    Controla tus productos, inventario, ventas y proveedores
                    desde un solo lugar.
                </p>
            </div>

            <div class="flex gap-3 text-sm text-green-200">
                <span>🌱 Inventario</span>
                <span>•</span>
                <span>📦 Productos</span>
                <span>•</span>
                <span>🛒 Ventas</span>
            </div>

        </div>

        {{-- Formulario --}}
        <div class="p-8 sm:p-12 lg:p-16 flex items-center">

            <div class="w-full max-w-md mx-auto">

                {{-- Logo móvil --}}
                <div class="md:hidden flex items-center gap-3 mb-10">
                    <div class="w-12 h-12 rounded-2xl bg-green-100 flex items-center justify-center text-2xl">
                        🌿
                    </div>

                    <div>
                        <h1 class="text-xl font-bold text-slate-800">
                            Macetas & Muebles
                        </h1>

                        <p class="text-sm text-slate-500">
                            Sistema de gestión
                        </p>
                    </div>
                </div>

                <div class="mb-8">
                    <p class="text-green-600 font-semibold text-sm mb-2">
                        
                    </p>

                    <h2 class="text-3xl font-bold text-slate-900">
                        Iniciar sesión
                    </h2>

                    <p class="text-slate-500 mt-2">
                        Ingresa tus datos para acceder.
                    </p>
                </div>

                <form class="space-y-5">

                    {{-- Correo --}}
                    <div>
                        <label
                            for="email"
                            class="block text-sm font-medium text-slate-700 mb-2">
                            Correo electrónico
                        </label>

                        <input
                            type="email"
                            id="email"
                            name="email"
                            placeholder="correo@ejemplo.com"
                            class="w-full px-4 py-3 rounded-xl border border-slate-200
                                   bg-slate-50 outline-none transition
                                   focus:border-green-500 focus:ring-4 focus:ring-green-100"
                        >
                    </div>

                    {{-- Contraseña --}}
                    <div>
                        <div class="flex justify-between items-center mb-2">

                            <label
                                for="password"
                                class="text-sm font-medium text-slate-700">
                                Contraseña
                            </label>

                            <button
                                type="button"
                                class="text-sm font-medium text-green-600 hover:text-green-700">
                                ¿Olvidaste tu contraseña?
                            </button>

                        </div>

                        <div class="relative">

                            <input
                                type="password"
                                id="password"
                                name="password"
                                placeholder="••••••••"
                                class="w-full px-4 py-3 pr-12 rounded-xl border border-slate-200
                                       bg-slate-50 outline-none transition
                                       focus:border-green-500 focus:ring-4 focus:ring-green-100"
                            >

                            <button
                                type="button"
                                onclick="togglePassword()"
                                class="absolute right-4 top-1/2 -translate-y-1/2
                                       text-slate-400 hover:text-green-600">

                                👁️

                            </button>

                        </div>
                    </div>

                    {{-- Recordarme --}}
                    <div class="flex items-center gap-2">

                        <input
                            type="checkbox"
                            id="remember"
                            class="w-4 h-4 rounded border-slate-300
                                   text-green-600 focus:ring-green-500">

                        <label
                            for="remember"
                            class="text-sm text-slate-600">
                            Recordarme
                        </label>

                        <p class="text-center text-gray-600 mt-6">
                         ¿No tienes una cuenta?
                          <a href="/register"
                            class="text-green-700 font-semibold hover:underline">
                            Crear una cuenta
                          </a>
                        </p>

                    </div>

                    {{-- Botón --}}
                    <button
                        type="button"
                        class="w-full bg-green-700 hover:bg-green-800
                               text-white font-semibold py-3.5 rounded-xl
                               transition duration-200
                               shadow-lg shadow-green-700/20">

                        Iniciar sesión

                    </button>

                </form>

                <div class="mt-8 text-center">
                    <p class="text-xs text-slate-400">
                        © {{ date('Y') }} Macetas & Muebles
                    </p>
                </div>

            </div>

        </div>

    </div>

</div>

@endsection

@push('scripts')

<script>
    function togglePassword() {

        const password = document.getElementById('password');

        password.type =
            password.type === 'password'
                ? 'text'
                : 'password';
    }
</script>

@endpush