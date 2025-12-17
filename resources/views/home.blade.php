<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mi App Laravel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            background: black;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: Arial, sans-serif;
        }

        /* Contenedor principal */
        .led-box {
            position: relative;
            width: 380px;
            padding: 40px;
            background: #0b0b0b;
            border-radius: 15px;
            box-shadow: 0 0 25px rgba(0, 255, 255, 0.4);
            text-align: center;
            color: white;
            overflow: hidden;
        }

        /* Texto */
        h1 {
            margin-bottom: 10px;
            color: #00ffff;
        }

        p {
            color: #bbb;
        }

        button {
            margin-top: 25px;
            padding: 12px 25px;
            background: transparent;
            border: 2px solid #00ffff;
            color: #00ffff;
            border-radius: 30px;
            cursor: pointer;
            font-size: 16px;
            transition: 0.3s;
        }

        button:hover {
            background: #00ffff;
            color: black;
            box-shadow: 0 0 15px #00ffff;
        }

        /* Marco LED */
        .led-box::before {
            content: "";
            position: absolute;
            inset: -3px;
            border-radius: 18px;
            background: linear-gradient(
                90deg,
                transparent,
                #00ffff,
                #ff00ff,
                #00ffff,
                transparent
            );
            animation: led 4s linear infinite;
            z-index: -1;
        }

        .led-box::after {
            content: "";
            position: absolute;
            inset: 0;
            background: #0b0b0b;
            border-radius: 15px;
            z-index: -1;
        }

        /* Animación LED */
        @keyframes led {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        }
    </style>
</head>
<body>

    <div class="led-box">
        <h1>Bienvenido a mi App Laravel 🚀</h1>
        <p>Esta es la página de inicio</p>
        <button>Comenzar</button>
    </div>

</body>
</html>