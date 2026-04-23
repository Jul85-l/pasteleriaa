<!DOCTYPE html>
<?php 
include("conexion.php");
$nombre="";
$pastel="";
$telefono="";
$comentario="";

if(isset($_POST['enviar'])){
$nombre=($_POST['nombre']);
$pastel=($_POST['pastel']);
$telefono=($_POST['telefono']);
$comentario=($_POST['comentario']);

$sql="INSERT INTO productos (nombre, pastel, telefono, comentario) VALUES('$nombre' , '$pastel' , '$telefono' , '$comentario')";
$query = mysqli_query( $con, $sql);

if ($query) {
	echo "Usuario insertado correctamente";
	// code...
}else{
	echo "Usuario no agregado";
}


}


 ?>
<html lang="es">
<head>
<title>Pasteleria Cottier</title>
<style>
body{
font-family: Arial;
margin:0;
background:#fff5f8;
}

header{
background:#ff4da6;
color:white;
padding:15px;
text-align:center;
}

nav{
background:#333;
padding:10px;
text-align:center;
}

nav a{
color:white;
margin:10px;
text-decoration:none;
font-weight:bold;
}

nav a:hover{
color:#ff4da6;
}

section{
padding:20px;
}

.productos{
display:flex;
justify-content:center;
flex-wrap:wrap;
gap:20px;
}

.card{
background:white;
padding:15px;
border-radius:10px;
width:180px;
text-align:center;
box-shadow:0 0 10px rgba(0,0,0,0.1);
}

.card img{
width:100%;
border-radius:10px;
height:120px;
object-fit:cover;
}

table{
border-collapse: collapse;
width:70%;
margin:auto;
background:white;
}

th, td{
border:1px solid #ccc;
padding:10px;
text-align:center;
}

.historia{
background:white;
border-radius:10px;
padding:15px;
width:70%;
margin:auto;
box-shadow:0 0 10px rgba(0,0,0,0.1);
}

form{
width:300px;
margin:auto;
background:white;
padding:15px;
border-radius:10px;
box-shadow:0 0 10px rgba(0,0,0,0.1);
}

input, textarea{
width:100%;
padding:8px;
margin-top:5px;
}

footer{
background:#222;
color:white;
padding:20px;
margin-top:30px;
}

.footer-contenido{
display:flex;
justify-content:space-around;
flex-wrap:wrap;
}

.footer-contenido div{
margin:10px;
}
</style>
</head>

<body>

<header>
<h1>Pasteleria Cottier</h1>
<p>Endulzando tus momentos</p>
</header>


<section>
<h2 style="text-align:center;">Nuestros Pasteles</h2>

<div class="productos">
<div class="card">
<img src="imagess.jpg">
<h3>Chocolate</h3>
<p>$200</p>
</div>

<div class="card">
<img src="ss.jpg">
<h3>Fresa</h3>
<p>$180</p>
</div>

<div class="card">
<img src="https://images.unsplash.com/photo-1563729784474-d77dbb933a9e">
<h3>Vainilla</h3>
<p>$150</p>
</div>

<div class="card">
<img src="https://images.unsplash.com/photo-1587241321921-91a834d6d191">
<h3>Tres Leches</h3>
<p>$220</p>
</div>
</div>
</section>

<section>
<h2 style="text-align:center;">Menu Completo</h2>
<table>
<tr>
<th>Pastel</th>
<th>Descripcion</th>
<th>Precio</th>
</tr>
<tr>
<td>Chocolate</td>
<td>Pastel con chocolate cremoso</td>
<td>$200</td>
</tr>
<tr>
<td>Fresa</td>
<td>Pastel con fresas naturales</td>
<td>$180</td>
</tr>
<tr>
<td>Vainilla</td>
<td>Pastel clasico suave</td>
<td>$150</td>
</tr>
<tr>
<td>Tres Leches</td>
<td>Pastel bañado en tres leches</td>
<td>$220</td>
</tr>
</table>
</section>

<section>
<h2 style="text-align:center;">Historia</h2>
<div class="historia">
<p>La Pasteleria Dulce comenzo como un pequeño negocio familiar con el sueño de crear los mejores pasteles de la ciudad. Con el paso del tiempo fuimos creciendo gracias a nuestros clientes y a la calidad de nuestros productos. Hoy seguimos trabajando con la misma pasion y dedicacion.</p>
</div>
</section>

<section>
<h2 style="text-align:center;">Tabla de Descuentos</h2>
<table id="descuentos">
<tr>
<th>Compra</th>
<th>Descuento</th>
</tr>
</table>
</section>

<script>
let tabla = document.getElementById("descuentos")

for(let i=1;i<=6;i++){
let fila = tabla.insertRow()
let c1 = fila.insertCell(0)
let c2 = fila.insertCell(1)

c1.innerHTML = "$" + (i*100)
c2.innerHTML = (i*4) + "%"
}
</script>

<section>
<h2 style="text-align:center;">Pedidos</h2>
<form action="pasteless.php" method="POST">
<label>Nombre</label>
<input type="text" name="nombre">

<label>Pastel</label>
<input type="text" name="pastel">

<label>telefono</label>
<input type="text" name="telefono">

<label>Comentario</label>
<textarea rows="4" name="comentario"></textarea >

<br><br>
<button type="submit" value="Hacer Pedido" name="enviar">Hacer pedido</button>
</form>
</section>

<footer>
<div class="footer-contenido">

<div>
<h3>Pasteleria Dulce</h3>
<p>Calidad y sabor desde el primer dia</p>
</div>

<div>
<h3>Contacto</h3>
<p>Telefono: 123456789</p>
<p>Email: dulce@correo.com</p>
</div>

<div>
<h3>Direccion</h3>
<p>Centro de la ciudad</p>
<p>Mexico</p>
</div>

<div>
<h3>Redes</h3>
<p>Facebook</p>
<p>Instagram</p>
</div>

</div>

<p style="text-align:center;margin-top:10px;"> 2026 Pasteleria Dulce</p>
</footer>

</body>
</html>