@extends('layouts.app')

@section('title', 'Productos | Macetas')

@section('content')

<section class="max-w-7xl mx-auto px-6 py-12">

    <!-- ENCABEZADO -->

    <div class="text-center mb-12">

        <h1 class="text-4xl font-bold text-green-900">
            Nuestros productos
        </h1>

        <p class="text-gray-500 mt-3">
            Encuentra el producto perfecto para tu espacio.
        </p>

    </div>


    <!-- FILTROS -->

    <div class="bg-white rounded-xl shadow-sm p-5 mb-10">

        <div class="flex flex-col md:flex-row gap-4">

            <input
                type="text"
                placeholder="Buscar producto..."
                class="border rounded-lg px-4 py-3 flex-1">

            <select class="border rounded-lg px-4 py-3">

                <option>Todas las categorías</option>
                <option>Macetas</option>
                <option>Muebles</option>
                <option>Decoración</option>

            </select>

            <select class="border rounded-lg px-4 py-3">

                <option>Ordenar por</option>
                <option>Precio menor</option>
                <option>Precio mayor</option>
                <option>Más recientes</option>

            </select>

        </div>

    </div>


    <!-- PRODUCTOS -->

    <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">

        @foreach($productos as $producto)

            <div class="bg-white rounded-xl overflow-hidden shadow-sm
                        hover:shadow-lg transition">

                <img
                    src="{{ $producto['imagen'] }}"
                    alt="{{ $producto['nombre'] }}"
                    class="w-full h-60 object-cover">

                <div class="p-5">

                    <p class="text-sm text-green-700">
                        {{ $producto['categoria'] }}
                    </p>

                    <h2 class="text-lg font-bold mt-1">
                        {{ $producto['nombre'] }}
                    </h2>

                    <p class="text-green-800 text-xl font-bold mt-3">
                        ${{ number_format($producto['precio'], 2) }}
                    </p>

                    <a
                        href="{{ route('tienda.detalle', $producto['id']) }}"
                        class="block text-center mt-4
                               bg-green-700 text-white py-2 rounded-lg
                               hover:bg-green-800">

                        Ver producto

                    </a>

                </div>

            </div>

        @endforeach

    </div>

</section>

@endsection