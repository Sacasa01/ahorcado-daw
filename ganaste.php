<?php
session_start();

// Guardar la palabra antes de destruir la sesión
$palabra = isset($_SESSION['palabra']) ? $_SESSION['palabra'] : 'desconocida';

session_destroy();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¡Victoria! - Ahorcado</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #11998e 0%, #38ef7d 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .container {
            background: white;
            padding: 50px 40px;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.3);
            text-align: center;
            max-width: 500px;
            width: 100%;
            animation: aparecer 0.5s ease-out;
        }

        @keyframes aparecer {
            from {
                opacity: 0;
                transform: scale(0.8);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        .emoji {
            font-size: 80px;
            margin-bottom: 20px;
            animation: celebrar 1s infinite alternate;
        }

        @keyframes celebrar {
            from { transform: rotate(-10deg); }
            to { transform: rotate(10deg); }
        }

        h1 {
            color: #11998e;
            font-size: 36px;
            margin-bottom: 20px;
        }

        .mensaje {
            color: #555;
            font-size: 18px;
            margin-bottom: 15px;
        }

        .palabra {
            font-size: 28px;
            color: #11998e;
            font-weight: bold;
            margin: 20px 0;
            letter-spacing: 3px;
            text-transform: uppercase;
        }

        .boton {
            display: inline-block;
            padding: 15px 40px;
            background: linear-gradient(135deg, #11998e 0%, #38ef7d 100%);
            color: white;
            text-decoration: none;
            border-radius: 30px;
            font-size: 18px;
            font-weight: bold;
            margin-top: 30px;
            transition: transform 0.3s, box-shadow 0.3s;
            box-shadow: 0 5px 15px rgba(17, 153, 142, 0.4);
        }

        .boton:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(17, 153, 142, 0.6);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="emoji">🎉</div>
        <h1>¡Enhorabuena!</h1>
        <p class="mensaje">¡Has ganado la partida!</p>
        <p class="mensaje">La palabra era:</p>
        <div class="palabra"><?php echo htmlspecialchars($palabra); ?></div>
        <a href="index.php" class="boton">🎮 Jugar de nuevo</a>
    </div>
</body>
</html>