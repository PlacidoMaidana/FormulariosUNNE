<?php


if (!empty($_GET)) {
    # code...

    //var_dump($_REQUEST);die;
    echo "Su gusto es exelente marco:";
    foreach ($_REQUEST["Generos"] as $key => $value) {
        # code...
        if ($value=="romantica") {
            # code...
            echo "<br> Que dulce es usted señor";
        }
        echo $value."<br>"; 
    }

    if ($_REQUEST["color"]=="verde") {
        # code...
        echo "<br>Eligio un color ecologico<br>";
    }


    if ($_REQUEST["Verdura"]==1) {
        # code...
        echo "<br> Cuidado con eso, eso engorda <br>";
    }

    $nombre=$_GET["nombre"];
   
    if (StrLen($nombre)<3) {
      
        header('Location: http://localhost/UNNE_Programacion_III/formulario_unne/?error=1');
        exit;
   }
  
   if (strlen($_REQUEST["detalle"])>10) {
    header('Location: http://localhost/UNNE_Programacion_III/formulario_unne/?error=2');
        exit;
   }
  
  
  
  
   var_dump($_GET);

   
    
}





?>