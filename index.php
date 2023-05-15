<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="procesar_formulario.php" method="GET">

Nombre:</br>
<input type="text" name="nombre" id="nombre" minlength="3">
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

<input type="submit" value="Enviar">

</form>

<a href="http://localhost/UNNE_Programacion_III/formulario_unne/procesar_formulario.php?nombre=d&email=LorenzoLamas%40hotmail.com&password=52&Verdura=1">Entrada mala</a>






</body>
</html>