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
                        Crear Cuenta 
                    </h2>

                    <p class="text-slate-500 mt-2">
                       Registrarte para poder comenzar.
                    </p>
                </div>

                <!-- Formulario --> <form action="/register" method="POST" class="space-y-4"> @csrf <!-- Nombre --> <div> <label class="block text-sm font-medium text-gray-700 mb-1"> Nombre completo </label> <input type="text" name="name" required placeholder="Escribe tu nombre" class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-green-500" > </div> <!-- Correo --> <div> <label class="block text-sm font-medium text-gray-700 mb-1"> Correo electrónico </label> <input type="email" name="email" required placeholder="correo@ejemplo.com" class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-green-500" > </div> <!-- Contraseña --> <div> <label class="block text-sm font-medium text-gray-700 mb-1"> Contraseña </label> <input type="password" name="password" required placeholder="Crea una contraseña" class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-green-500" > </div> <!-- Confirmar contraseña --> <div> <label class="block text-sm font-medium text-gray-700 mb-1"> Confirmar contraseña </label> <input type="password" name="password_confirmation" required placeholder="Repite tu contraseña" class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-green-500" > </div> <!-- Botón --> <button type="submit" class="w-full bg-green-700 text-white py-3 rounded-lg font-semibold hover:bg-green-800 transition" > Crear cuenta </button> </form> <!-- Ya tiene cuenta --> <p class="text-center text-gray-600 mt-6"> ¿Ya tienes una cuenta? <a href="/login" class="text-green-700 font-semibold hover:underline"> Iniciar sesión </a> </p>

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