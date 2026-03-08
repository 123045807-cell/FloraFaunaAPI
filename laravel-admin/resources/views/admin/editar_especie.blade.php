<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Editar Especie</title>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=Playfair+Display:wght@600&display=swap" rel="stylesheet">

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
  position: relative;
}

.logo {
  display: flex;
  align-items: center;
  font-weight: bold;
  font-size: 1.5rem;
  font-family: 'Playfair Display', serif;
  color: #8C5E2A;
  line-height: 1;
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

.links a:hover {
  color: #db9646;
}

.contenido {
  flex: 1;
  padding: 3rem 2rem;
  display: flex;
  flex-direction: column;
  align-items: center;
}

.contenido h1 {
  font-family: 'Playfair Display', serif;
  font-size: 2.5rem;
  margin-bottom: 2rem;
  color: #333;
  text-align: center;
}

.formulario {
  width: 100%;
  max-width: 1000px;
}

.formulario form {
  width: 100%;
  padding: 2rem 2.5rem;
  background-color: #fff;
  border-radius: 8px;
  box-shadow: 0 2px 10px rgba(0,0,0,0.1);
  display: flex;
  flex-direction: column;
  gap: 1.2rem;
}

.formulario label {
  font-weight: bold;
  color: #8C5E2A;
  font-size: 1rem;
}

.formulario input,
.formulario select {
  padding: 0.6rem;
  font-size: 1rem;
  border: 1px solid #ccc;
  border-radius: 5px;
  font-family: 'Inter', sans-serif;
}

.formulario input:focus,
.formulario select:focus {
  outline: none;
  border-color: #8C5E2A;
  box-shadow: 0 0 5px rgba(140, 94, 42, 0.3);
}

.botones {
  display: flex;
  justify-content: space-between;
  margin-top: 1.5rem;
}

.boton {
  background-color: #4CAF50;
  color: #fff;
  padding: 0.8rem 1.2rem;
  font-size: 0.95rem;
  text-decoration: none;
  border: none;
  border-radius: 5px;
  font-weight: bold;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.boton:hover {
  background-color: #db9646;
}

.cancelar {
  background-color: #ccc;
  color: #333;
}

.cancelar:hover {
  background-color: #999;
}

.footer {
  background-color: #8C5E2A;
  color: #fff;
  padding: 0.5rem 1rem;
  text-align: center;
  font-size: 0.85rem;
}
</style>
</head>

<body>

<nav class="navbar">
<div class="logo">
<img src="/img/logo.png" alt="Logo">
<span>Panel Administradora</span>
</div>

<div class="links">
<a href="#">Cerrar sesión</a>
</div>
</nav>

<main class="contenido">

<h1>Editar Especie</h1>

<section class="formulario">

<form>

<label for="nombre_comun">Nombre común:</label>
<input type="text" id="nombre_comun" name="nombre_comun" value="Ejemplo nombre"
minlength="2" maxlength="30"
pattern="^[A-Za-zÁÉÍÓÚáéíóúÑñ\s]{2,30}$">

<label for="nombre_cientifico">Nombre científico:</label>
<input type="text" id="nombre_cientifico" name="nombre_cientifico" value="Ejemplo científico"
minlength="2" maxlength="30"
pattern="^[A-Za-zÁÉÍÓÚáéíóúÑñ\s]{2,30}$">

<label for="id_familia">Familia:</label>
<select id="id_familia">
<option>Familia 1</option>
<option>Familia 2</option>
<option>Familia 3</option>
</select>

<label for="id_estado_conservacion">Estado de Conservación:</label>
<select id="id_estado_conservacion">
<option>En peligro</option>
<option>Vulnerable</option>
<option>Estable</option>
</select>

<label for="zona">Zona:</label>
<select id="zona">
<option>Zona 1</option>
<option>Zona 2</option>
<option>Zona 3</option>
</select>

<div class="botones">
<button type="submit" class="boton">Actualizar especie</button>
<a href="#" class="boton cancelar">Cancelar</a>
</div>

</form>

</section>

</main>

<footer class="footer">
<p>© 2025 Administración de Especies</p>
</footer>

</body>
</html>