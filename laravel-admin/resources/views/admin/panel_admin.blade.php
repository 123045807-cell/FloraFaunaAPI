Panel admin.blade · PHP
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Panel de Administradora</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=Playfair+Display:wght@600&display=swap" rel="stylesheet" />
  <style>
    html, body {
      height: 100%;
      margin: 0;
      font-family: 'Inter', sans-serif;
      background-color: #ebd7af;
      display: flex;
      flex-direction: column;
    }

    .navbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 0 2rem;
      background-color: #fff;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
      height: 60px;
    }

    .logo {
      display: flex;
      align-items: center;
      font-weight: bold;
      font-size: 1.8rem;
      font-family: 'Playfair Display', serif;
      color: #8C5E2A;
    }

    .logo img {
      height: 60px;
      margin-right: 15px;
      margin-top: -10px;
    }

    .links a {
      margin-left: 1.2rem;
      text-decoration: none;
      color: #8C5E2A;
      font-weight: 600;
      font-size: 0.95rem;
      transition: color 0.3s ease;
    }

    .links a:hover { color: #db9646; }

    .panel-contenido {
      flex: 1;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      padding: 2rem;
      text-align: center;
    }

    .acciones h1 {
      font-family: 'Playfair Display', serif;
      font-size: 3rem;
      margin-bottom: 0.5rem;
      color: #333;
      max-width: 800px;
    }

    .acciones p {
      font-size: 1.2rem;
      margin-bottom: 2rem;
      color: #444;
    }

    .botones-horizontales {
      display: flex;
      gap: 2rem;
      justify-content: center;
      margin-bottom: 2rem;
      flex-wrap: wrap;
    }

    .boton {
      background-color: #4caf50;
      color: #fff;
      padding: 0.9rem 1.5rem;
      font-size: 1rem;
      text-decoration: none;
      border-radius: 5px;
      font-weight: bold;
      transition: background-color 0.3s ease;
    }

    .boton:hover { background-color: #215e23; }

    .imagen-centro {
      display: flex;
      justify-content: center;
      align-items: center;
      width: 100%;
    }

    .imagen-centro img {
      max-width: 400px;
      width: 100%;
      height: auto;
      object-fit: contain;
      transition: transform 0.3s ease;
    }

    .footer {
      background-color: #8C5E2A;
      color: #fff;
      padding: 0.5rem 1rem;
      text-align: center;
    }

    .footer-content p {
      margin: 0.2rem 0;
      font-size: 0.85rem;
    }
  </style>
</head>
<body>

  <nav class="navbar">
    <div class="logo">
      <img src="{{ asset('img/logo.png') }}" alt="Logotipo">
      <span>Panel Administradora</span>
    </div>
    <div class="links">
      <a href="#">Cerrar sesión</a>
    </div>
  </nav>

  <main class="panel-contenido">
    <section class="acciones">
      <h1>Bienvenida, administradora</h1>
      <p>Este es tu panel de administración.</p>

      <div class="botones-horizontales">
        <a href="#" class="boton">Gestionar Usuarios</a>
        <a href="#" class="boton">Gestionar Especies</a>
        <a href="#" class="boton">Gestionar Comentarios</a>
        <a href="#" class="boton">Gestionar Consejos</a>
      </div>
    </section>

    <div class="imagen-centro">
      <img src="{{ asset('img/administrador.png') }}" alt="Administradora">
    </div>
  </main>

  <footer class="footer">
    <div class="footer-content">
      <p>&copy; 2025 Panel Administradora. Todos los derechos reservados.</p>
    </div>
  </footer>

</body>
</html