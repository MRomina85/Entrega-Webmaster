
<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Digitek Printer Market</title>
		<meta charset="utf-8" />
		<link rel= "stylesheet" href="css/normalize.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="digitekestilos.css">
        <link rel="shortcut icon" href="img/favicon.ico"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
 
<  <header class="container-fluid header1">
		<div class="botones">
		<!-- <div id="carrito"> 	
					<img src="img/shopping-cart-01.svg" alt="">
					</div>-->
		<a href="#registrar" class="btn btn-primary btn-sm active" role="button" aria-pressed="true">Registrarse</a>
		<!--<form class="dropdown-menu p-4">
			<div class="form-group">
			  <label for="exampleDropdownFormEmail2">Email address</label>
			  <input type="email" class="form-control" id="exampleDropdownFormEmail2" placeholder="email@example.com">
			</div>
			<div class="form-group">
			  <label for="exampleDropdownFormPassword2">Password</label>
			  <input type="password" class="form-control" id="exampleDropdownFormPassword2" placeholder="Password">
			</div>
			<div class="form-check">
			  <input type="checkbox" class="form-check-input" id="dropdownCheck2">
			  <label class="form-check-label" for="dropdownCheck2">
				Remember me
			  </label>
			</div>
			<button type="submit" class="btn btn-primary">Sign in</button>
		  </form>-->
		
		<a href="#" class="btn btn-primary btn-sm active" role="button" aria-pressed="true">Ingresar</a>
	    </div>
	  </header>
      <div class="container-fluid cabecera">
		<nav class="navbar navbar-expand-xl navbar-dark" style="background-color: #424546f6;">
			<div class="navbar-brand"> 
				<a href="index.html">
				<img src= "img/Digitek Logo-01-01.png" class="logo" alt="home">
			</a>
			  </div>
			
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			  <span class="navbar-toggler-icon"></span>
			</button>
		  
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
			  <ul class="navbar-nav mr-auto">
				
				<li class="nav-item dropdown">
				  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Productos
				  </a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
				
					<a class="dropdown-item" href="impresoras y registradoras fiscales.html">Impresoras y Registradoras fiscales</a>
					<a class="dropdown-item" href="#">Comanderas</a>
					<a class="dropdown-item" href="#">Lectores de Código de Barra</a>
					<a class="dropdown-item" href="#">Impresoras de Etiquetas</a>
					<a class="dropdown-item" href="#">Balanzas Electrónicas</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="#">Insumos</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="#">Software de Gestión</a>
					<a class="dropdown-item" href="#">Computadoras</a>
					<a class="dropdown-item" href="#">Cámaras de Seguridad</a>
					<a class="dropdown-item" href="#">Contadoras de Billetes</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="#">Termómetros Infrarrojos</a>
					<a class="dropdown-item" href="#">Oximétros</a>
					<a class="dropdown-item" href="#">Tapa Bocas</a>

				  </div>
				</li>
				<li class="nav-item ">
					<a class="nav-link" href="#secc-1">Servicio Técnico <span class="sr-only">(current)</span></a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="#secc-2">Oportunidades</a>
				  </li>
				<li class="nav-item">
				  <a class="nav-link" href="#secc-3">Como Comprar</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#secc-4">Contacto</a>
				  </li>
	            
			  </ul>
			  <form class="form-inline my-2 my-lg-0">
				<input class="form-control mr-sm-2" type="Buscar" placeholder="Buscar" aria-label="Buscar" >
				<button class="btn btn-primary my-2 my-sm-0" type="submit">Buscar</button>
			  </form>
			
		  </nav> 
	  </div>
    <div class="alert alert-success" role="alert">
  
 
<?php



  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $email = $_POST['email'];
  $mensaje = $_POST['mensaje'];
  $fechaEnvio = date("d/m/Y");
 
  //Confirgurar la funcion mail()
  //mail("destinatario","asunto","cuerpo del mensaje","adicionales")

  $destinatario = "mrominapereyra@outlook.com";
  $asunto = "Nuevo mensaje desde el sitio";
  //$cuerpoMensaje = $_POST['nombre'].$_POST['apellido'].$_POST['email'].$mensaje = $_POST['mensaje'];
  $cuerpoMensaje = "Nombre: ".$nombre."<br>Apellido: ".$apellido."<br>Email: ".$email."<br>Mensaje: ".$mensaje."<br> Enviado el ".$fechaEnvio;
  //Para enviar un correo en formato HTML ( por default lo envia en texto plano), debe establecerse la cabecera Content-type
  
  $cabeceras = 'MIME-Version: 1.0'. "\r\n";
  $cabeceras = 'Content-type: text/html; charset=iso-8859-1'."\r\n";

  //echo $cuerpoMensaje;

  //Envio
  //Tip:para ocultar errores la linea debe comenzar con @
  $envio = mail($destinatario,$asunto,$cuerpoMensaje,$cabeceras);//devuelve true o false
  
  //Evaluar si el correo fue enviado
  //= asignacion
  //== comparacion
  //=== comparacion por valor y tipo de dato

  if($envio == true){
      echo "<h4>Tu formulario ha sido enviado con exito. <br>
       <hr> Gracias ".$nombre." por contactarnos!</h4>";
    }
   else {
       echo "Hubo un error en el envio.";
       echo "Escribinos a ".$destinatario;
   }

   //Aprovechamos los datos que llegan por POST,para cargarlos a  una base de datos MySQL
  //Puede ser exit() o tambien die()

   @$conexion = mysqli_connect("localhost","id14000326_romina","Webmaster-2020","id14000326_digitek")or die("Error de conexion");
   
  
   //Consulta MySQL
   //generamos una consulta de prueba
   
   
   $query1 = "INSERT INTO datosform VALUES (0,'Pepe','Castro','roko_85@hotmail.com','Ya esta subido')";

   
   //consulta con las variables del formulario
   $query2 = "INSERT INTO datosform VALUES (0,'$nombre','$apellido','$email','$mensaje')";

  $consulta = mysqli_query($conexion,$query1);


   //Verificar que los datos fueron subidos
    
   if($consulta == true){
     echo "Tambien lo guardamos en la base de datos";
   }
   //SELECT
   
?>
</div>
</body>
</html>
