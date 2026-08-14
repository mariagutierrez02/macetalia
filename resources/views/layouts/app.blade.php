<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Macetas')</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        body {
            font-family: Arial, sans-serif;
        }
    </style>
</head>

<body class="bg-gray-50 text-gray-800">

    <!-- NAVBAR -->
    <nav class="bg-white shadow-sm">
        <div class="max-w-7xl mx-auto px-6 py-4">

            <div class="flex items-center justify-between">

                <!-- LOGO -->
                <a href="{{ route('tienda.inicio') }}"
                   class="text-2xl font-bold text-green-800">
                    🌿 Macetalia
                </a>

                <!-- MENU -->
                <div class="hidden md:flex items-center gap-8">

                    <a href="{{ route('tienda.inicio') }}"
                       class="text-gray-700 hover:text-green-700">
                        Inicio
                    </a>

                    <a href="{{ route('tienda.productos') }}"
                       class="text-gray-700 hover:text-green-700">
                        Productos
                    </a>

                    <a href="#categorias"
                       class="text-gray-700 hover:text-green-700">
                        Categorías
                    </a>

                    <a href="#contacto"
                       class="text-gray-700 hover:text-green-700">
                        Contacto
                    </a>

                </div>

                <!-- ACCIONES -->
                <div class="flex items-center gap-4">

                    <button class="text-xl">
                        🔍
                    </button>

                    <a href="{{ route('tienda.carrito') }}"
                       class="text-xl">
                        🛒
                    </a>

                   <a href="/login"
                     class="bg-green-700 text-white px-5 py-2 rounded-lg hover:bg-green-800">
                       Iniciar sesión
                    </a>

                </div>

            </div>

        </div>
    </nav>


    <!-- CONTENIDO -->
    <main>
        @yield('content')
    </main>


    <!-- FOOTER -->
    <footer class="bg-green-900 text-white mt-20">

        <div class="max-w-7xl mx-auto px-6 py-10">

            <div class="grid md:grid-cols-3 gap-8">

                <div>
                    <h3 class="text-xl font-bold mb-3">
                        🌿 Macetas
                    </h3>

                    <p class="text-green-100">
                        Encuentra productos para darle vida y estilo
                        a tus espacios.
                    </p>
                </div>

                <div>
                    <h3 class="font-bold mb-3">
                        Enlaces
                    </h3>

                    <p>Inicio</p>
                    <p>Productos</p>
                    <p>Contacto</p>
                </div>

                <div id="contacto">
                    <h3 class="font-bold mb-3">
                        Contáctanos
                    </h3>

                    <p>📞 000 000 0000</p>
                    <p>📧 contacto@macetas.com</p>
                </div>

            </div>

            <div class="border-t border-green-700 mt-8 pt-6 text-center">
                <p class="text-green-100">
                    © {{ date('Y') }} Macetas. Todos los derechos reservados.
                </p>
            </div>

        </div>

    </footer>

</body>
</html>