<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Administración de Especies</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=Playfair+Display:wght@600&display=swap" rel="stylesheet">
  <style>
    html, body {
      margin: 0;
      padding: 0;
      font-family: 'Inter', sans-serif;
      background-color: #ebd7af;
      color: #333;
      min-height: 100vh;
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
      font-size: 1.5rem;
      font-family: 'Playfair Display', serif;
      color: #8C5E2A;
    }

    .logo img { height: 50px; margin-right: 15px; }

    .links a {
      margin-left: 1.2rem;
      text-decoration: none;
      color: #8C5E2A;
      font-weight: 600;
      font-size: 0.95rem;
      transition: color 0.3s ease;
    }

    .links a:hover { color: #db9646; }

    .contenido {
      flex: 1;
      padding: 2rem;
      max-width: 1100px;
      margin: 0 auto;
      width: 100%;
    }

    h1 {
      font-family: 'Playfair Display', serif;
      font-size: 2rem;
      margin-bottom: 1.5rem;
      text-align: center;
      color: #333;
    }

    h2 {
      font-family: 'Playfair Display', serif;
      font-size: 1.3rem;
      color: #8C5E2A;
      margin-bottom: 1rem;
    }

    .formulario {
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 2px 6px rgba(0,0,0,0.08);
      padding: 1.5rem;
      margin-bottom: 2rem;
      display: flex;
      flex-direction: column;
      gap: 0.75rem;
    }

    .formulario label {
      font-weight: 600;
      font-size: 0.9rem;
      color: #555;
    }

    .formulario input,
    .formulario select,
    .formulario textarea {
      padding: 0.6rem 0.8rem;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-family: 'Inter', sans-serif;
      font-size: 0.9rem;
      width: 100%;
      box-sizing: border-box;
    }

    .formulario input:focus,
    .formulario select:focus {
      outline: none;
      border-color: #4CAF50;
    }

    .boton {
      background-color: #4CAF50;
      color: #fff;
      border: none;
      padding: 0.7rem 1.2rem;
      border-radius: 6px;
      font-weight: bold;
      font-size: 0.95rem;
      cursor: pointer;
      transition: background-color 0.3s ease;
      align-self: flex-start;
    }

    .boton:hover { background-color: #388e3c; }

    /* Tabla */
    .tabla-especies {
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 2px 6px rgba(0,0,0,0.08);
      padding: 1.5rem;
      overflow-x: auto;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      font-size: 0.9rem;
    }

    thead tr {
      background-color: #8C5E2A;
      color: #fff;
    }

    thead th {
      padding: 0.75rem 1rem;
      text-align: left;
      font-weight: 600;
    }

    tbody tr:nth-child(even) { background-color: #f5ede0; }
    tbody tr:hover { background-color: #ede0cb; }

    tbody td {
      padding: 0.7rem 1rem;
      border-bottom: 1px solid #e0d0b8;
    }

    .accion {
      text-decoration: none;
      font-weight: 600;
      font-size: 0.85rem;
      margin-right: 0.5rem;
      color: #4CAF50;
    }

    .accion:hover { color: #388e3c; }

    .accion.eliminar { color: #e53935; }
    .accion.eliminar:hover { color: #b71c1c; }

    .footer {
      background-color: #8C5E2A;
      color: #fff;
      text-align: center;
      padding: 0.8rem 1rem;
      font-size: 0.85rem;
      margin-top: auto;
    }
  </style>
</head>
<body>

  <nav class="navbar">
    <div class="logo">
      <img src="{{ asset('img/logo.png') }}" alt="Logo">
      <span>Panel Administradora</span>
    </div>
    <div class="links">
      <a href="#">Panel</a>
      <a href="#">Cerrar sesión</a>
    </div>
  </nav>

  <main class="contenido">
    <h1>Administración de Especies</h1>

    <!-- Filtro por zona -->
    <div class="formulario">
      <label for="zona">Filtrar por zona:</label>
      <select name="zona" id="zona">
        <option value="">Selecciona una zona</option>
      </select>
    </div>

    <!-- Formulario nueva especie -->
    <section class="formulario">
      <h2>Agregar nueva especie</h2>
      <label for="nombre_comun">Nombre común:</label>
      <input type="text" id="nombre_comun" placeholder="Ej. Águila real">

      <label for="nombre_cientifico">Nombre científico:</label>
      <input type="text" id="nombre_cientifico" placeholder="Ej. Aquila chrysaetos">

      <label for="id_familia">Familia:</label>
      <select id="id_familia">
        <option value="">Selecciona una familia</option>
      </select>

      <label for="id_estado_conservacion">Estado de Conservación:</label>
      <select id="id_estado_conservacion">
        <option value="">Selecciona un estado</option>
      </select>

      <label for="zona_nueva">Zona:</label>
      <select id="zona_nueva">
        <option value="">Selecciona una zona</option>
      </select>

      <button type="button" class="boton">Agregar especie</button>
    </section>

    <!-- Tabla de especies -->
    <section class="tabla-especies">
      <h2>Especies en zona seleccionada</h2>
      <table>
        <thead>
          <tr>
            <th>Nombre común</th>
            <th>Nombre científico</th>
            <th>Familia</th>
            <th>Estado de conservación</th>
            <th>Zona</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td colspan="6" style="text-align:center; color:#999;">No hay especies registradas.</td>
          </tr>
        </tbody>
      </table>
    </section>
  </main>

  <footer class="footer">
    <p>&copy; 2025 Administración de Especies</p>
  </footer>

</body>
</html>
