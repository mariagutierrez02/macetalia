@extends('layouts.app')

@section('title', 'Carrito | Macetas')

@section('content')

<section class="max-w-5xl mx-auto px-6 py-12">

    <h1 class="text-4xl font-bold text-green-900 mb-10">
        🛒 Mi carrito
    </h1>


    <div class="bg-white rounded-xl shadow-sm p-6">

        <div class="flex items-center justify-between
                    border-b pb-6">

            <div class="flex items-center gap-5">

                <div class="w-24 h-24 bg-gray-100 rounded-lg
                            flex items-center justify-center text-4xl">
                    🪴
                </div>

                <div>

                    <h2 class="font-bold text-lg">
                        Maceta de ejemplo
                    </h2>

                    <p class="text-gray-500">
                        Maceta
                    </p>

                </div>

            </div>


            <div class="text-right">

                <p class="font-bold text-xl text-green-700">
                    $250.00
                </p>

                <input
                    type="number"
                    value="1"
                    min="1"
                    class="border rounded-lg w-20 px-3 py-2 mt-2">

            </div>

        </div>


        <!-- TOTAL -->

        <div class="flex justify-between items-center mt-8">

            <span class="text-xl font-semibold">
                Total
            </span>

            <span class="text-3xl font-bold text-green-800">
                $250.00
            </span>

        </div>


        <button
            class="w-full mt-6 bg-green-700 text-white
                   py-3 rounded-lg
                   hover:bg-green-800">

            Continuar con la compra

        </button>

    </div>

</section>

@endsection