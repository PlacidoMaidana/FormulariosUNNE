<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>

<body>
    
<?php
 /*if (!empty($_GET)) {
    echo "Error". var_dump($_GET);
 }*/
if (!empty($_GET["error"]) && $_GET["error"]==1 ) {
   
    echo  '<div class="alert alert-primary" role="alert">
    Corrija su nombre debe tener al menos tres caracteres....
     </div>';
    }

    if (!empty($_GET["error"]) && $_GET["error"]==2 ) {
   
        echo  '<div class="alert alert-danger" role="alert">
        El detalle no debe superar los diez caracteres...
         </div>';
        }
    




?>


<form action="procesar_formulario.php" method="GET">
<div class="container text-center">
  <div class="row">
    <div class="col">
    Nombre:</br>
<input type="text" name="nombre" id="nombre">
</br>Email:</br>
<input type="email" name="email" id="email" >
</br>Contraseña:</br>
<input type="password" name="password" id="password" required minlength="6">
</br>

</br><select name="Verdura">
    <option value="1">PAPA</option>
    <option value="2">cebolla</option>
    <option value="3">acelga</option>
</select></br>
<br> Seleccione los generos de pelicula que le gusta:
<br><input type="checkbox" name="Generos[]" value="acciòn" id=""> accion <br>
<input type="checkbox" name="Generos[]" value="romantica">romantica <br>
<input type="checkbox" name="Generos[]" value="comica"> comica <br>
<input type="checkbox" name="Generos[]" value="terror">terror <br>

    </div>
    <div class="col">
    Puede elejir un color a para su web: <br>
<input type="radio" name="color" value="rojo">rojo<br>
<input type="radio" name="color" value="verde">verde<br>
<input type="radio" name="color" value="amarillo">amarillo<br>
Escriba una breve descripcion:<br>
<textarea name="detalle" id="" cols="20" rows="10"></textarea>




<input type="submit" value="Enviar">

    </div>
 </div>
</div>






</form>

<a href="http://localhost/UNNE_Programacion_III/formulario_unne/procesar_formulario.php?nombre=d&email=LorenzoLamas%40hotmail.com&password=52&Verdura=1">Entrada mala</a>






</body>
</html>