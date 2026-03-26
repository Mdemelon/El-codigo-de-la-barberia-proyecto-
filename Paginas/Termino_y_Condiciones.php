<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href = "/Assets/css/Estilo_de_terminos.css">
    <title>Sitio web </title>
</head>
<body class="min-h-screen flex flex-col font-sans">

    <div class="flex-grow flex flex-col md:flex-row items-center justify-center p-6 gap-12 max-w-7xl mx-auto">
        
        <div class="w-full md:w-2/5 space-y-6 text-center md:text-left">
            <div class="flex justify-center md:justify-start">
                <img src="../Assets/img/Imagen_logo.png" alt="Logo Fashion Hair" class="h-32">
            </div>
            
            <h1 class="text-4xl md:text-5xl font-bold leading-tight text-gray-800">
                Tu estilo, <span class="text-custom-red">nuestro compromiso.</span>
            </h1>
            
            <p class="text-gray-600 text-lg">
                Antes de comenzar tu transformación en Fashion Hair, revisa y acepta nuestros lineamientos.
            </p>
        </div>

        <div class="w-full md:w-3/5 bg-white rounded-2xl shadow-xl overflow-hidden border border-gray-100">
            
            <div class="bg-red-50 p-6 text-center border-b border-red-100">
                <h2 class="text-2xl font-bold text-gray-800">Términos y Condiciones</h2>
                <p class="text-sm text-gray-500">Última actualización: 24 de Marzo, 2026</p>
            </div>

            <div class="p-8 max-h-[500px] overflow-y-auto">
                <p class="text-gray-600 text-sm">
                    Aquí van tus términos y condiciones...
                </p>
            </div>

            <form action="procesar.php" method="POST" class="p-8 bg-gray-50 border-t border-gray-100">
                <div class="flex items-start gap-3 mb-6">
                    <input type="checkbox" id="terms" name="acepto" required class="mt-1 w-4 h-4 accent-red-600 cursor-pointer">
                    <label for="terms" class="text-sm text-gray-700 cursor-pointer">
                        <span class="font-bold text-gray-900">He leído y acepto los términos.</span>
                    </label>
                </div>
                
                <button type="submit" id="submitBtn" disabled class="w-full py-4 bg-gray-300 text-gray-500 font-bold rounded-xl cursor-not-allowed">
                    Aceptar y continuar
                </button>
            </form>
        </div>
    </div>

    <div class="h-3 bg-custom-red w-full"></div>

    <script>
        const checkbox = document.getElementById('terms');
        const submitBtn = document.getElementById('submitBtn');

        checkbox.addEventListener('change', function() {
            if (this.checked) {
                submitBtn.disabled = false;
                submitBtn.classList.remove('bg-gray-300', 'text-gray-500', 'cursor-not-allowed');
                submitBtn.classList.add('bg-custom-red', 'text-white');
            } else {
                submitBtn.disabled = true;
                submitBtn.classList.add('bg-gray-300', 'text-gray-500', 'cursor-not-allowed');
                submitBtn.classList.remove('bg-custom-red', 'text-white');
            }
        });
    </script>
</body>
</html>