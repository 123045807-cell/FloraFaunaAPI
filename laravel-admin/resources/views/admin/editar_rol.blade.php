<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Editar Rol</title>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=Playfair+Display:wght@600&display=swap" rel="stylesheet">

<style>
html, body {
  margin: 0;
  padding: 0;
  font-family: 'Inter', sans-serif;
  background-color: #ebd7af;
  display: flex;
  flex-direction: column;
  min-height: 100vh;
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

.links {
  display: flex;
  gap: 1.5rem;
}

.links a {
  text-decoration: none;
  color: #8C5E2A;
  font-weight: 600;
  font-size: 0.95rem;
  transition: color 0.3s ease;
}

.links a:hover {
  color: #db9646;
}

.editar-contenido {
  flex: 1;
  padding: 2rem;
  max-width: 600px;
  margin: 0 auto;
  text-align: center;
}

.editar-contenido h1 {
  font-family: 'Playfair Display', serif;
  font-size: 2.5rem;
  margin-bottom: 1.5rem;
  color: #333;
}

form {
  background-color: #fff;
  padding: 2rem;
  border-radius: 8px;
  box-shadow: 0 2px 5px rgba(0,0,0,0.1);
}

form p {
  font-size: 1rem;
  margin-bottom: 1rem;
  color: #444;
}

label {
  display: block;
  margin-bottom: 0.5rem;
  font-weight: bold;
  color: #8C5E2A;
}

select {
  width: 100%;
  padding: 0.5rem;
  font-size: 1rem;
  margin-bottom: 2rem;
  border: 1px solid #ccc;
  border-radius: 5px;
}

.botones-formulario {
  display: flex;
  justify-content: center;
  gap: 1.5rem;
}

.boton {
  background-color: #4CAF50;
  color: #fff;
  padding: 0.8rem 1.2rem;
  font-size: 1rem;
  text-decoration: none;
  border: none;
  border-radius: 5px;
  font-weight: bold;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.boton:hover {
  background-color: #91e593;
}

.cancelar {
  background-color: #b30000;
}

.cancelar:hover {
  background-color: #ff4d4d;
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
<img src="/img/logo.png" alt="Logotipo">
<span>Panel Administradora</span>
</div>

<div class="links">
<a href="#">Volver a Gestión de Usuarios</a>
<a href="#">Cerrar sesión</a>
</div>
</nav>

<main class="editar-contenido">

<h1>Editar rol de Usuario</h1>

<form>

<p><strong>Correo:</strong> usuario@correo.com</p>

<label for="rol">Rol:</label>

<select name="rol" id="rol">
<option value="usuario">usuario</option>
<option value="admin">admin</option>
</select>

<div class="botones-formulario">
<button type="submit" class="boton">Guardar cambios</button>
<a href="#" class="boton cancelar">Cancelar</a>
</div>

</form>

</main>

<footer class="footer">
<div class="footer-content">
<p>© 2025 Panel Administradora. Todos los derechos reservados.</p>
</div>
</footer>

</body>
</html>