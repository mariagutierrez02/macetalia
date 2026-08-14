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
<section id="categorias" class="max-w-7xl mx-auto px-6 py-16">

    <div class="text-center mb-10">

        <h2 class="text-3xl font-bold text-green-900">
            Explora nuestras categorías
        </h2>

        <p class="text-gray-500 mt-2">
            Encuentra lo que necesitas para tus espacios.
        </p>

    </div>


    <div class="grid md:grid-cols-3 gap-6">

        <div class="bg-white rounded-xl shadow-sm p-8 text-center">

            <div class="text-5xl mb-4">
                🪴
            </div>

            <h3 class="text-xl font-bold">
                Macetas
            </h3>

            <p class="text-gray-500 mt-2">
                Diseños para todos tus espacios.
            </p>

        </div>


        <div class="bg-white rounded-xl shadow-sm p-8 text-center">

            <div class="text-5xl mb-4">
                🪑
            </div>

            <h3 class="text-xl font-bold">
                Muebles
            </h3>

            <p class="text-gray-500 mt-2">
                Complementa tu espacio.
            </p>

        </div>


        <div class="bg-white rounded-xl shadow-sm p-8 text-center">

            <div class="text-5xl mb-4">
                🌱
            </div>

            <h3 class="text-xl font-bold">
                Decoración
            </h3>

            <p class="text-gray-500 mt-2">
                Dale personalidad a tu hogar.
            </p>

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