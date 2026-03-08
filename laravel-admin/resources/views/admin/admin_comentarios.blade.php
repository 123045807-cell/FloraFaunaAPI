min comentarios.blade · PHP

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Administrar Comentarios</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=Playfair+Display:wght@600&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: 'Inter', sans-serif;
      background-color: #ebd7af;
      color: #333;
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
      font-size: 1.5rem;
      font-family: 'Playfair Display', serif;
      color: #8C5E2A;
    }

    .logo img {
      height: 50px;
      margin-right: 15px;
    }

    .links a {
      margin-left: 1rem;
      text-decoration: none;
      color: #8C5E2A;
      font-weight: 600;
    }

    .links a:hover { color: #4CAF50; }

    main { padding: 2rem; }

    .seccion.comentarios {
      max-width: 1000px;
      margin: 0 auto;
      background-color: #fff;
      padding: 2rem;
      border-radius: 10px;
      box-shadow: 0 2px 6px rgba(0,0,0,0.08);
    }

    .seccion h2 {
      font-family: 'Playfair Display', serif;
      color: #8C5E2A;
      margin-bottom: 1.5rem;
      font-size: 1.8rem;
      display: flex;
      align-items: center;
      gap: 0.5rem;
    }

    .filtro-zona {
      margin-bottom: 1.5rem;
      display: flex;
      align-items: center;
      gap: 0.5rem;
      font-size: 0.95rem;
    }

    .filtro-zona select {
      padding: 0.3rem 0.6rem;
      border-radius: 5px;
      border: 1px solid #4CAF50;
      font-family: 'Inter', sans-serif;
    }

    .comentario {
      background-color: #e6f4ea;
      padding: 1rem;
      border-radius: 8px;
      margin-bottom: 1rem;
    }

    .comentario-header {
      display: flex;
      flex-wrap: wrap;
      gap: 0.5rem;
      margin-bottom: 0.5rem;
    }

    .comentario strong { font-size: 1rem; color: #2e7d32; }

    .zona {
      background-color: #c8e6c9;
      color: #256029;
      padding: 0.2rem 0.6rem;
      border-radius: 20px;
      font-size: 0.85rem;
    }

    .comentario em {
      font-style: normal;
      color: #388e3c;
      background-color: #dcedc8;
      padding: 0.2rem 0.5rem;
      border-radius: 5px;
      font-size: 0.85rem;
    }

    .boton-form { margin-top: 0.5rem; }

    .boton-secundario {
      background-color: #4CAF50;
      color: #fff;
      border: none;
      padding: 0.4rem 0.8rem;
      border-radius: 5px;
      cursor: pointer;
      font-size: 0.85rem;
      display: inline-flex;
      align-items: center;
      gap: 0.3rem;
    }

    .boton-secundario:hover { background-color: #388e3c; }

    .footer {
      background-color: #8C5E2A;
      color: #fff;
      text-align: center;
      padding: 1rem 2rem;
      font-size: 0.9rem;
      margin-top: 3rem;
    }

    .footer-content p {
      margin: 0.3rem 0;
      font-family: 'Inter', sans-serif;
    }
  </style>
</head>
<body>

  <nav class="navbar">
    <div class="logo">
      <img src="{{ asset('img/logo.png') }}" alt="Logo">
      <span>Panel de Administración</span>
    </div>
    <div class="links">
      <a href="#">Panel</a>
      <a href="#">Cerrar sesión</a>
    </div>
  </nav>

  <main class="contenido-pagina">
    <section class="seccion comentarios">
      <h2><i class="fas fa-tools"></i> Gestión de Comentarios</h2>

      <form method="GET" action="#" class="filtro-zona">
        <label for="zona">Filtrar por zona:</label>
        <select name="zona" id="zona">
          <option value="">Todas las zonas</option>
        </select>
      </form>

      <p>No hay comentarios registrados.</p>

    </section>
  </main>

  <footer class="footer">
    <div class="footer-content">
      <p>&copy; 2025 Panel Administradora. Todos los derechos reservados.</p>
    </div>
  </footer>

</body>
</html>