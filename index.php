<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de Bienvenida</title>
    <link rel="stylesheet" href="../sis-asistencia/estilos/estilos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,400;1,300&display=swap" rel="stylesheet">

<!--<style>
        h1 {
            text-align: center;
        }
        .logo {
            display: flex;
            justify-content: center; 
            width: auto;
            height: auto;
            max-width: 100%;
            max-height: 100%;
        }
        </style>
-->
</head>

<body>
    <h1>BIENVENIDOS, REGISTRA TU ASISTENCIA</h1>
    <h2 id="fecha"></h2>
    <!--<div class="logo">
        <img src="../sis-asistencia/imagenes/logo.png" alt=""></div>
    -->
    <div class="container">
    <a class="acceso" href="">Ingresar al sistema</a>
    <p class="cedula">Ingrese su Cedula</p>
    <form action="">
        <input type="text" placeholder="Cedula del empleado" name="txtcc">
            <div class="botones">
            <a class="entrada" href="">ENTRADA</a>
            <a class="salida" href="">SALIDA</a>
            </div>
    </form>
</div>

    <script>
       setInterval(() => {
              let fecha = new Date();
              let fechaHora = fecha.toLocaleString();
              document.getElementById("fecha").textContent = fechaHora;
         }, 1000);
    </script>

</body>
</html>


