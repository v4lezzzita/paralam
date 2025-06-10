<?php
// Para que los acentos y caracteres especiales se muestren bien
header('Content-Type: text/html; charset=UTF-8');
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <title>¡Gracias por tu pedido!</title>
  <style>
    body {
      background-color: #333;
      color: #ffda77;
      font-family: 'Rock Salt', cursive;
      text-align: center;
      padding: 50px;
    }
    h1 {
      font-size: 50px;
      text-shadow: 2px 2px #ff69b4;
    }
    p {
      font-size: 20px;
      margin-bottom: 20px;
    }
    a {
      color: #ff69b4;
      font-size: 18px;
      text-decoration: none;
    }
    a:hover {
      color: #ffda77;
    }
  </style>
</head>
<body>
  <h1>¡Formulario recibido!</h1>

  <p><strong>Nombre:</strong> <?php echo htmlspecialchars($_POST['nombre'] ?? 'No especificado'); ?></p>
  <p><strong>Correo:</strong> <?php echo htmlspecialchars($_POST['correo'] ?? 'No especificado'); ?></p>
  <p><strong>Producto(s):</strong> <?php echo htmlspecialchars($_POST['producto'] ?? 'No especificado'); ?></p>
  
  <br>
  <a href="index.html">← Volver al inicio</a>
</body>
</html>
