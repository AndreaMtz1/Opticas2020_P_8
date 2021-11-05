<?php include ('header.php');?>

	<section class="main">
		<div class="wrapp">
			<div class="mensaje">
				<h1>Cliente</h1>
			</div>

			<div class="articulo">
				<article>
					<h2>Atención al cliente</h2>
					<br/>
					<p>Tel. 55 5262 4117 Lunes a viernes 8:00 am. a 8:00 pm.</p>
                    <p>email. atencionaclientes@opticas2020.com.mx</p>
					<br/>
					
					<ul>
                <li><a href="#">ESTATUS DE TU COMPRA</a></li>
                <li><a href="#">AGENDA TU CITA</a></li>
                <li><a href="#">PROMOCIONES EN TIENDA</a></li>
                <li><a href="#">PREGUNTAS FRECUENTES</a></li>
                <li><a href="#">FACTURACIÓN</a></li>
                <li><a href="#">SUCURSALES</a></li>
            </ul>
			<br>
 
			<h3>Registrate en Opticas 2020 para realizar tus compras en la página</h3><br>
			<h4>*Si ya tienes una cuenta en Opticas 2020, dirigite hacia la pestaña 'Articulos' para iniciar sesion* </h4><br>

			<form action="/action_page.php" method="get">
			<label for="fname">Ingresa tu nombre(s)</label>
			<input type="text" id="fname" name="fname"><br><br>
			<label for="lname">Ingresa tu apellido(s):</label>
			<input type="text" id="lname" name="lname"><br><br>
			<label for="lcorreo">Ingresa tu correo electronico:</label>
			<input type="text" id="lcorreo" name="lcorreo"><br><br>
			<label for="ltel">Ingresa tu número telefónico:</label>
			<input type="text" id="ltel" name="ltel"><br><br>
			<label for="ldirec">Ingresa tu dirección:</label>
			<input type="text" id="ldirec" name="ldirec"><br><br>
			<label for="lpasword">Crea una contraseña:</label>
			<input type="text" id="lpasword" name="lpasword"><br><br>
			<input type="submit" value="Crear Cuenta">
			</form>

				</article>
			</div>
            <?php include ('sidebar.php');?>
			
		</div>
	</section>
    <?php include ('footer.php');?>
</body>
</html>