<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Web Animada</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @keyframes gradient {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        .animate-gradient {
            background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
            background-size: 400% 400%;
            animation: gradient 15s ease infinite;
        }
    </style>
</head>
<body class="animate-gradient flex items-center justify-center h-screen m-0">

    <div class="text-center bg-white/80 backdrop-blur-md p-12 rounded-2xl shadow-2xl border border-white/20 transform hover:scale-105 transition-transform duration-300">
        <marquee><h1 class="text-6xl font-black text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-blue-500 mb-4">
            ¡BUENAAAAAAS!
        </h1></marquee>
        
        <p class="text-gray-700 text-xl font-medium mb-8">
            Esta es mi página de Laravel con fondo animado.
        </p>

        <div class="flex flex-col gap-4 items-center">
            <a href="https://github.com/kJhovany" target="_blank" rel="noopener noreferrer"
               class="px-8 py-3 bg-gradient-to-r from-blue-600 to-purple-600 text-white font-bold rounded-full shadow-lg hover:shadow-purple-500/50 transition-all duration-300 hover:-translate-y-1">
               Ver el git hub de kevin Jhovany
            </a>
            
            <span class="text-sm text-gray-500 italic">Desplegado con éxito en Railway 🚀</span>
        </div>
    </div>

</body>
</html>