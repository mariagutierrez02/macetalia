<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});


Route::get('/', function () {

    $productos = [

        [
            'id' => 1,
            'nombre' => 'Maceta de barro',
            'categoria' => 'Macetas',
            'precio' => 250,
            'descripcion' => 'Maceta de barro ideal para decorar interiores y exteriores.',
            'imagen' => 'https://images.unsplash.com/photo-1485955900006-10f4d324d411?auto=format&fit=crop&w=900&q=80'
        ],

        [
            'id' => 2,
            'nombre' => 'Maceta moderna',
            'categoria' => 'Macetas',
            'precio' => 350,
            'descripcion' => 'Diseño moderno para darle un toque elegante a tus espacios.',
            'imagen' => 'https://images.unsplash.com/photo-1497250681960-ef046c08a56e?auto=format&fit=crop&w=900&q=80'
        ],

        [
            'id' => 3,
            'nombre' => 'Maceta decorativa',
            'categoria' => 'Decoración',
            'precio' => 280,
            'descripcion' => 'Una opción decorativa para complementar tu hogar.',
            'imagen' => 'https://images.unsplash.com/photo-1459411621453-7b03977f4bfc?auto=format&fit=crop&w=900&q=80'
        ],

        [
            'id' => 4,
            'nombre' => 'Maceta para interior',
            'categoria' => 'Macetas',
            'precio' => 420,
            'descripcion' => 'Maceta ideal para plantas de interior.',
            'imagen' => 'https://images.unsplash.com/photo-1485955900006-10f4d324d411?auto=format&fit=crop&w=900&q=80'
        ],

    ];

    return view('tienda.inicio', compact('productos'));

})->name('tienda.inicio');


Route::get('/productos', function () {

    $productos = [

        [
            'id' => 1,
            'nombre' => 'Maceta de barro',
            'categoria' => 'Macetas',
            'precio' => 250,
            'descripcion' => 'Maceta de barro ideal para decorar interiores y exteriores.',
            'imagen' => 'https://images.unsplash.com/photo-1485955900006-10f4d324d411?auto=format&fit=crop&w=900&q=80'
        ],

        [
            'id' => 2,
            'nombre' => 'Maceta moderna',
            'categoria' => 'Macetas',
            'precio' => 350,
            'descripcion' => 'Diseño moderno para darle un toque elegante a tus espacios.',
            'imagen' => 'https://images.unsplash.com/photo-1497250681960-ef046c08a56e?auto=format&fit=crop&w=900&q=80'
        ],

        [
            'id' => 3,
            'nombre' => 'Maceta decorativa',
            'categoria' => 'Decoración',
            'precio' => 280,
            'descripcion' => 'Una opción decorativa para complementar tu hogar.',
            'imagen' => 'https://images.unsplash.com/photo-1459411621453-7b03977f4bfc?auto=format&fit=crop&w=900&q=80'
        ],

        [
            'id' => 4,
            'nombre' => 'Maceta para interior',
            'categoria' => 'Macetas',
            'precio' => 420,
            'descripcion' => 'Maceta ideal para plantas de interior.',
            'imagen' => 'https://images.unsplash.com/photo-1485955900006-10f4d324d411?auto=format&fit=crop&w=900&q=80'
        ],

    ];

    return view('tienda.productos', compact('productos'));

})->name('tienda.productos');


Route::get('/producto/{id}', function ($id) {

    $productos = [

        1 => [
            'id' => 1,
            'nombre' => 'Maceta de barro',
            'categoria' => 'Macetas',
            'precio' => 250,
            'descripcion' => 'Maceta de barro ideal para decorar interiores y exteriores.',
            'imagen' => 'https://images.unsplash.com/photo-1485955900006-10f4d324d411?auto=format&fit=crop&w=900&q=80'
        ],

        2 => [
            'id' => 2,
            'nombre' => 'Maceta moderna',
            'categoria' => 'Macetas',
            'precio' => 350,
            'descripcion' => 'Diseño moderno para darle un toque elegante a tus espacios.',
            'imagen' => 'https://images.unsplash.com/photo-1497250681960-ef046c08a56e?auto=format&fit=crop&w=900&q=80'
        ],

        3 => [
            'id' => 3,
            'nombre' => 'Maceta decorativa',
            'categoria' => 'Decoración',
            'precio' => 280,
            'descripcion' => 'Una opción decorativa para complementar tu hogar.',
            'imagen' => 'https://images.unsplash.com/photo-1459411621453-7b03977f4bfc?auto=format&fit=crop&w=900&q=80'
        ],

        4 => [
            'id' => 4,
            'nombre' => 'Maceta para interior',
            'categoria' => 'Macetas',
            'precio' => 420,
            'descripcion' => 'Maceta ideal para plantas de interior.',
            'imagen' => 'https://images.unsplash.com/photo-1485955900006-10f4d324d411?auto=format&fit=crop&w=900&q=80'
        ],

    ];

    abort_unless(isset($productos[$id]), 404);

    return view('tienda.detalle', [
        'producto' => $productos[$id]
    ]);

})->name('tienda.detalle');


Route::get('/carrito', function () {

    return view('tienda.carrito');

})->name('tienda.carrito');