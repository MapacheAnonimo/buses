<html lang="en">
   <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Travel LAG</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">




    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="css/carrusel.css" rel="stylesheet">
  </head>
<!-- NAVBAR
================================================== -->
  <body>
     <?php
       include_once("./header.php");

    ?>
	<body style="background-color:#7DECB6;">
    <!--COMIENZA CONSULTA-->
         <form method='POST' action='Consulta_planilla_choferes.php'>
         <center><input type="submit" value="Consultar Choferes" class="btn btn-info" name="btn2">
         		<input type="submit" value="Consultar Buses" class="btn btn-success" name="btn3">		
         <input type="submit" value="Consultar Mecanicos" class="btn btn-primary" name="btn4"></center><br>
         <center><input href="Consulta_planilla_choferes.php" type="submit" value="Resetear Pantalla" class="btn btn-primary" name="btn5"></center>

      
			   
		</form>
	<?php

		if (isset($_POST['btn3']))
		 {
			include("abrir_conexion.php");


              $Cons_bus = "SELECT * FROM buses";
              $resultados = mysqli_query($conexion,$Cons_bus);
            echo 
              "
          <table width=\"100%\" border=\"2\">
            <tr>
              <td><b><center>Patente</center></b></td>
              <td><b><center>Modelo</center></b></td>
              <td><b><center>Año</center></b></td>
              <td><b><center>Capacidad</center></b></td>
            </tr>
            </table>
            ";

    while($Cons_bus = mysqli_fetch_array($resultados))
    {
      echo "
          <table class= \"table table-striped\" width=\"100%\" border=\"2\">
            <tr>
              <td>".$Cons_bus['Patente']."</td>
              <td>".$Cons_bus['Modelo']."</td>
              <td>".$Cons_bus['Año']."</td>
              <td>".$Cons_bus['Capacidad']."</td>
            </tr>
          </table>
        ";
    }
  }

    if (isset($_POST['btn2']))
     {
          include("abrir_conexion.php");


              $Cons_choferes = "SELECT * FROM choferes";
              $resultados = mysqli_query($conexion,$Cons_choferes);
            echo 
              "
          <table width=\"100%\" border=\"2\">
            <tr>
              <td><b><center>Rut_Chofer</center></b></td>
              <td><b><center>Primer Nombre</center></b></td>
              <td><b><center>Segundo Nombre</center></b></td>
              <td><b><center>Apellido Paterno</center></b></td>
              <td><b><center>Apellido Materno</center></b></td>
            </tr>
            </table>
            ";

    while($Cons_choferes = mysqli_fetch_array($resultados))
    {
      echo "
          <table class= \"table table-striped\" width=\"100%\" border=\"2\">
            <tr>
              <td>".$Cons_choferes['Rut_Chofer']."</td>
              <td>".$Cons_choferes['Nombre1']."</td>
              <td>".$Cons_choferes['Nombre2']."</td>
              <td>".$Cons_choferes['Apellido1']."</td>
              <td>".$Cons_choferes['Apellido2']."</td>
            </tr>
          </table>
        ";
    }
  }

     if (isset($_POST['btn4']))
     {
          include("abrir_conexion.php");


              $Cons_Mecanicos = "SELECT * FROM mecanicos";
              $resultados = mysqli_query($conexion,$Cons_Mecanicos);
            echo 
              "
          <table width=\"100%\" border=\"2\">
            <tr>
              <td><b><center>Rut Mecanicos</center></b></td>
              <td><b><center>Primer Nombre</center></b></td>
              <td><b><center>Segundo Nombre</center></b></td>
              <td><b><center>Apellido Paterno</center></b></td>
              <td><b><center>Apellido Materno</center></b></td>
            </tr>
            </table>
            ";

    while($Cons_Mecanicos = mysqli_fetch_array($resultados))
    {
      echo "
          <table class= \"table table-striped\" width=\"100%\" border=\"2\">
            <tr>
              <td>".$Cons_Mecanicos['Rut_Mecanico']."</td>
              <td>".$Cons_Mecanicos['Nombre1']."</td>
              <td>".$Cons_Mecanicos['Nombre2']."</td>
              <td>".$Cons_Mecanicos['Apellido1']."</td>
              <td>".$Cons_Mecanicos['Apellido2']."</td>
            </tr>
          </table>
        ";
    }
  }

		?>
	</div>
	<div class="col-md-4"></div>
</div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
        <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
