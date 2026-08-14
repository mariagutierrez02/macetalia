@extends('layouts.app')

@section('title', $producto['nombre'] . ' | Macetas')

@section('content')

<section class="max-w-7xl mx-auto px-6 py-16">

    <div class="grid md:grid-cols-2 gap-12 items-center">

        <!-- IMAGEN -->

        <div>

            <img
                src="{{ $producto['imagen'] }}"
                alt="{{ $producto['nombre'] }}"
                class="w-full rounded-2xl shadow-sm">

        </div>


        <!-- INFORMACIÓN -->

        <div>

            <p class="text-green-700 font-semibold">
                {{ $producto['categoria'] }}
            </p>

            <h1 class="text-4xl font-bold text-green-900 mt-2">
                {{ $producto['nombre'] }}
            </h1>

            <p class="text-3xl font-bold text-green-700 mt-6">
                ${{ number_format($producto['precio'], 2) }}
            </p>

            <p class="text-gray-600 mt-6 leading-relaxed">
                {{ $producto['descripcion'] }}
            </p>


            <!-- CANTIDAD -->

            <div class="mt-8">

                <label class="font-semibold">
                    Cantidad
                </label>

                <input
                    type="number"
                    value="1"
                    min="1"
                    class="border rounded-lg px-4 py-3 w-24 block mt-2">

            </div>


            <!-- BOTÓN -->

            <button
                class="mt-6 bg-green-700 text-white
                       px-8 py-3 rounded-lg
                       hover:bg-green-800">

                🛒 Agregar al carrito

            </button>

        </div>

    </div>

</section>

@endsection