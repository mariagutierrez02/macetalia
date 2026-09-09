@extends('layouts.app')

@section('title', 'Inicio | Macetas')

@section('content')

<!-- HERO -->
<section class="bg-green-50">

    <div class="max-w-7xl mx-auto px-6 py-20">

        <div class="grid md:grid-cols-2 items-center gap-12">

            <!-- TEXTO -->
            <div>

                <p class="text-green-700 font-semibold mb-3">
                    🌿 NATURAL • MODERNO • ÚNICO
                </p>

                <h1 class="text-5xl font-bold text-green-900 leading-tight">
                    Dale vida a tus espacios
                </h1>

                <p class="text-gray-600 text-lg mt-6">
                    Encuentra macetas y productos ideales para decorar
                    tu hogar, jardín u oficina.
                </p>

                <div class="mt-8">

                    <a href="{{ route('tienda.productos') }}"
                       class="bg-green-700 text-white px-7 py-3 rounded-lg
                              hover:bg-green-800 inline-block">

                        Comprar ahora

                    </a>

                </div>

            </div>


            <!-- IMAGEN -->
            <div>

                <img
                    src="https://images.unsplash.com/photo-1485955900006-10f4d324d411?auto=format&fit=crop&w=900&q=80"
                    alt="Macetas">

            </div>

        </div>

    </div>

</section>


<!-- CATEGORÍAS -->
{{-- =========================
     CATEGORÍAS
========================= --}}
<section id="categorias" class="bg-[#f6f8f3] py-20">

    <div class="max-w-7xl mx-auto px-6">

        {{-- TÍTULO --}}
        <div class="text-center mb-12">

            <p class="text-green-700 font-semibold uppercase tracking-widest text-sm mb-3">
                Descubre Macetalia
            </p>

            <h2 class="text-3xl md:text-4xl font-bold text-green-900">
                Explora nuestras categorías
            </h2>

            <p class="text-gray-500 mt-3 max-w-2xl mx-auto">
                Encuentra todo lo que necesitas para crear espacios
                naturales, acogedores y llenos de vida.
            </p>

        </div>


        {{-- TARJETAS --}}
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-7">


            {{-- MACETAS --}}
            <a href="{{ route('tienda.productos') }}"
               class="group bg-white rounded-2xl overflow-hidden shadow-sm
                      hover:shadow-xl transition duration-300">

                <div class="relative h-56 overflow-hidden">

                    <img
                        src="https://images.unsplash.com/photo-1485955900006-10f4d324d411?auto=format&fit=crop&w=900&q=80"
                        alt="Macetas"
                        class="w-full h-full object-cover
                               group-hover:scale-105 transition duration-500"
                    >

                    <div class="absolute inset-0 bg-black/10
                                group-hover:bg-black/20 transition">
                    </div>

                    <div class="absolute top-4 right-4
                                bg-white/90 w-11 h-11 rounded-full
                                flex items-center justify-center text-xl shadow">
                        🪴
                    </div>

                </div>

                <div class="p-6">

                    <h3 class="text-xl font-bold text-gray-800
                               group-hover:text-green-700 transition">
                        Macetas
                    </h3>

                    <p class="text-gray-500 mt-2">
                        Diseños para todos tus espacios.
                    </p>

                    <div class="flex justify-between items-center mt-5">

                        <span class="text-green-700 font-semibold">
                            Ver productos
                        </span>

                        <span class="text-green-700 text-xl
                                     group-hover:translate-x-1 transition">
                            →
                        </span>

                    </div>

                </div>

            </a>


            {{-- PLANTAS --}}
            <a href="{{ route('tienda.productos') }}"
               class="group bg-white rounded-2xl overflow-hidden shadow-sm
                      hover:shadow-xl transition duration-300">

                <div class="relative h-56 overflow-hidden">

                    <img
                        src="https://images.unsplash.com/photo-1497250681960-ef046c08a56e?auto=format&fit=crop&w=900&q=80"
                        alt="Plantas"
                        class="w-full h-full object-cover
                               group-hover:scale-105 transition duration-500"
                    >

                    <div class="absolute inset-0 bg-black/10
                                group-hover:bg-black/20 transition">
                    </div>

                    <div class="absolute top-4 right-4
                                bg-white/90 w-11 h-11 rounded-full
                                flex items-center justify-center text-xl shadow">
                        🌱
                    </div>

                </div>

                <div class="p-6">

                    <h3 class="text-xl font-bold text-gray-800
                               group-hover:text-green-700 transition">
                        Plantas
                    </h3>

                    <p class="text-gray-500 mt-2">
                        Naturaleza para darle vida a tu hogar.
                    </p>

                    <div class="flex justify-between items-center mt-5">

                        <span class="text-green-700 font-semibold">
                            Ver productos
                        </span>

                        <span class="text-green-700 text-xl
                                     group-hover:translate-x-1 transition">
                            →
                        </span>

                    </div>

                </div>

            </a>


            {{-- MUEBLES --}}
            <a href="{{ route('tienda.productos') }}"
               class="group bg-white rounded-2xl overflow-hidden shadow-sm
                      hover:shadow-xl transition duration-300">

                <div class="relative h-56 overflow-hidden">

                    <img
                        src="https://images.unsplash.com/photo-1555041469-a586c61ea9bc?auto=format&fit=crop&w=900&q=80"
                        alt="Muebles"
                        class="w-full h-full object-cover
                               group-hover:scale-105 transition duration-500"
                    >

                    <div class="absolute inset-0 bg-black/10
                                group-hover:bg-black/20 transition">
                    </div>

                    <div class="absolute top-4 right-4
                                bg-white/90 w-11 h-11 rounded-full
                                flex items-center justify-center text-xl shadow">
                        🪑
                    </div>

                </div>

                <div class="p-6">

                    <h3 class="text-xl font-bold text-gray-800
                               group-hover:text-green-700 transition">
                        Muebles
                    </h3>

                    <p class="text-gray-500 mt-2">
                        Complementa tus espacios con estilo.
                    </p>

                    <div class="flex justify-between items-center mt-5">

                        <span class="text-green-700 font-semibold">
                            Ver productos
                        </span>

                        <span class="text-green-700 text-xl
                                     group-hover:translate-x-1 transition">
                            →
                        </span>

                    </div>

                </div>

            </a>


            {{-- DECORACIÓN --}}
            <a href="{{ route('tienda.productos') }}"
               class="group bg-white rounded-2xl overflow-hidden shadow-sm
                      hover:shadow-xl transition duration-300">

                <div class="relative h-56 overflow-hidden">

                    <img
                        src="https://images.unsplash.com/photo-1459411621453-7b03977f4bfc?auto=format&fit=crop&w=900&q=80"
                        alt="Decoración"
                        class="w-full h-full object-cover
                               group-hover:scale-105 transition duration-500"
                    >

                    <div class="absolute inset-0 bg-black/10
                                group-hover:bg-black/20 transition">
                    </div>

                    <div class="absolute top-4 right-4
                                bg-white/90 w-11 h-11 rounded-full
                                flex items-center justify-center text-xl shadow">
                        🏡
                    </div>

                </div>

                <div class="p-6">

                    <h3 class="text-xl font-bold text-gray-800
                               group-hover:text-green-700 transition">
                        Decoración
                    </h3>

                    <p class="text-gray-500 mt-2">
                        Detalles que transforman tu hogar.
                    </p>

                    <div class="flex justify-between items-center mt-5">

                        <span class="text-green-700 font-semibold">
                            Ver productos
                        </span>

                        <span class="text-green-700 text-xl
                                     group-hover:translate-x-1 transition">
                            →
                        </span>

                    </div>

                </div>

            </a>


            {{-- JARDINERÍA --}}
            <a href="{{ route('tienda.productos') }}"
               class="group bg-white rounded-2xl overflow-hidden shadow-sm
                      hover:shadow-xl transition duration-300">

                <div class="relative h-56 overflow-hidden">

                    <img
                        src="https://images.unsplash.com/photo-1416879595882-3373a0480b5b?auto=format&fit=crop&w=900&q=80"
                        alt="Jardinería"
                        class="w-full h-full object-cover
                               group-hover:scale-105 transition duration-500"
                    >

                    <div class="absolute inset-0 bg-black/10
                                group-hover:bg-black/20 transition">
                    </div>

                    <div class="absolute top-4 right-4
                                bg-white/90 w-11 h-11 rounded-full
                                flex items-center justify-center text-xl shadow">
                        🌵
                    </div>

                </div>

                <div class="p-6">

                    <h3 class="text-xl font-bold text-gray-800
                               group-hover:text-green-700 transition">
                        Jardinería
                    </h3>

                    <p class="text-gray-500 mt-2">
                        Todo para cuidar y disfrutar tus plantas.
                    </p>

                    <div class="flex justify-between items-center mt-5">

                        <span class="text-green-700 font-semibold">
                            Ver productos
                        </span>

                        <span class="text-green-700 text-xl
                                     group-hover:translate-x-1 transition">
                            →
                        </span>

                    </div>

                </div>

            </a>


            {{-- NOVEDADES --}}
            <a href="{{ route('tienda.productos') }}"
               class="group bg-white rounded-2xl overflow-hidden shadow-sm
                      hover:shadow-xl transition duration-300">

                <div class="relative h-56 overflow-hidden">

                    <img
                        src="https://images.unsplash.com/photo-1494438639946-1ebd1d20bf85?auto=format&fit=crop&w=900&q=80"
                        alt="Novedades"
                        class="w-full h-full object-cover
                               group-hover:scale-105 transition duration-500"
                    >

                    <div class="absolute inset-0 bg-black/10
                                group-hover:bg-black/20 transition">
                    </div>

                    <div class="absolute top-4 right-4
                                bg-white/90 w-11 h-11 rounded-full
                                flex items-center justify-center text-xl shadow">
                        ✨
                    </div>

                </div>

                <div class="p-6">

                    <h3 class="text-xl font-bold text-gray-800
                               group-hover:text-green-700 transition">
                        Novedades
                    </h3>

                    <p class="text-gray-500 mt-2">
                        Descubre nuestros productos más recientes.
                    </p>

                    <div class="flex justify-between items-center mt-5">

                        <span class="text-green-700 font-semibold">
                            Ver productos
                        </span>

                        <span class="text-green-700 text-xl
                                     group-hover:translate-x-1 transition">
                            →
                        </span>

                    </div>

                </div>

            </a>

        </div>

    </div>

</section>


<!-- PRODUCTOS DESTACADOS -->

<section class="bg-white py-16">

    <div class="max-w-7xl mx-auto px-6">

        <div class="flex justify-between items-center mb-10">

            <div>

                <h2 class="text-3xl font-bold text-green-900">
                    Productos destacados
                </h2>

                <p class="text-gray-500 mt-2">
                    Conoce algunos de nuestros productos.
                </p>

            </div>

            <a href="{{ route('tienda.productos') }}"
               class="text-green-700 font-semibold">

                Ver todos →

            </a>

        </div>


        <div class="grid sm:grid-cols-2 md:grid-cols-4 gap-6">

            @foreach($productos as $producto)

                <div class="bg-gray-50 rounded-xl overflow-hidden
                            hover:shadow-lg transition">

                    <img
                        src="{{ $producto['imagen'] }}"
                        alt="{{ $producto['nombre'] }}"
                        class="w-full h-56 object-cover">

                    <div class="p-5">

                        <p class="text-sm text-green-700">
                            {{ $producto['categoria'] }}
                        </p>

                        <h3 class="font-bold text-lg mt-1">
                            {{ $producto['nombre'] }}
                        </h3>

                        <p class="text-green-800 font-bold text-xl mt-3">
                            ${{ number_format($producto['precio'], 2) }}
                        </p>

                        <a href="{{ route('tienda.detalle', $producto['id']) }}"
                           class="block text-center mt-4
                                  border border-green-700
                                  text-green-700 py-2 rounded-lg
                                  hover:bg-green-700 hover:text-white">

                            Ver producto

                        </a>

                    </div>

                </div>

            @endforeach

        </div>

    </div>

</section>

@endsection