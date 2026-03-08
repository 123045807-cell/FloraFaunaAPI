<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Administrar Consejos</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;600&family=Playfair+Display:wght@600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>
body {
    margin: 0;
    font-family: 'Inter', sans-serif;
    background-color: #ebd7af;
    color: #333;
    display: flex;
    flex-direction: column;
    min-height: 100vh;
}

main.contenido {
    flex: 1;
    padding: 2rem;
    max-width: 1000px;
    margin: 0 auto;
}

h1 {
    font-family: 'Playfair Display', serif;
    font-size: 2rem;
    margin-bottom: 2rem;
    text-align: center;
    color: #333;
}

.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0 2rem;
    background-color: #fff;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    height: 90px;
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
}

.formulario {
    background-color: #fff;
    border-radius: 12px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
    padding: 1.5rem;
    margin-bottom: 2rem;
    display: flex;
    flex-direction: column;
    gap: 1rem;
}

.formulario input,
.formulario textarea,
.formulario select {
    padding: 0.8rem;
    border: 1px solid #ccc;
    border-radius: 8px;
    font-size: 0.95rem;
    font-family: 'Inter', sans-serif;
    resize: vertical;
}

.formulario textarea {
    min-height: 100px;
}

.formulario button {
    background-color: #66bb6a;
    color: white;
    border: none;
    padding: 0.8rem;
    border-radius: 8px;
    font-weight: bold;
    font-size: 0.95rem;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.formulario button:hover {
    background-color: #4caf50;
}

.eliminar {
    background-color: #e57373;
}

.eliminar:hover {
    background-color: #d32f2f;
}

.lista-consejos {
    display: flex;
    flex-direction: row;
    gap: 1.5rem;
    overflow-x: auto;
    padding-bottom: 1rem;
}

.formulario-catalogo {
    min-width: 320px;
    max-width: 350px;
    flex-shrink: 0;
}

.footer {
    background-color: #8C5E2A;
    color: #fff;
    padding: 0.10rem 1rem;
}

.footer-content {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.footer p {
    margin: 0.2rem 0;
    font-size: 0.85rem;
}

.siguenos-redes {
    display: flex;
    align-items: center;
    gap: 2rem;
    margin-top: 0.5rem;
}

.instagram-icon {
    height: 30px;
}
</style>
</head>

<body>

<nav class="navbar">
    <div class="logo">
        <img src="/img/logo.png" alt="Logotipo">
        <span>Fauna y Flora Local Qro</span>
    </div>

    <div class="links">
        <a href="#">Panel</a>
        <a href="#">Cerrar sesión</a>
    </div>
</nav>

<main class="contenido">

<h1>Administrar Consejos</h1>

<form class="formulario">
    <input type="text" placeholder="Título">
    <textarea placeholder="Consejo"></textarea>
    <input type="date">
    <input type="time">
    <select>
        <option>Zona 1</option>
        <option>Zona 2</option>
        <option>Zona 3</option>
    </select>
    <button type="submit">
        <i class="fas fa-plus-circle"></i> Crear Consejo
    </button>
</form>

<div class="lista-consejos">

<div class="formulario formulario-catalogo">

<form>
<input type="text" value="Ejemplo de título">
<textarea>Ejemplo de consejo sobre fauna y flora.</textarea>
<input type="date">
<input type="time">
<select>
<option>Zona 1</option>
<option>Zona 2</option>
</select>

<button type="submit">
<i class="fas fa-save"></i> Actualizar
</button>

</form>

<form>
<button class="eliminar">
<i class="fas fa-trash-alt"></i> Eliminar
</button>
</form>

</div>

</div>

</main>

<footer class="footer">

<div class="footer-content">

<p>
© 2025 Flora y Fauna de Querétaro. Todos los derechos reservados.
</p>

<div class="siguenos-redes">

<p class="siguenos">
Síguenos en nuestras redes sociales:
</p>

<a href="https://www.instagram.com/" target="_blank">
<img src="/img/instagram.png" class="instagram-icon">
</a>

</div>

</div>

</footer>

</body>
</html>