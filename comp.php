<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compatibilidad</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div id="cabeza">
        <br>
        <h1>Prueba de la compatibilidad!</h1>
    </div>
    
    <form id="cuerpo" action="comp.php" method="POST">
        <br>
        <br>
        <input type="text" id="nom1" name="nom1" placeholder="Nombre 1" require>
        <input type="text" id="nom2" name="nom2" placeholder="Nombre 2 " require>
        <br>
        <br>
        <input type="submit" value="PRUEBA" class="boton" require>
        
        <p class="porcentaje"  >
    <?php 
    $n1=$_POST['nom1'];
    $n2=$_POST['nom2'];
    $cn1=strlen($n1);
    $cn2=strlen($n2);
    $can=($cn1+$cn2);
    $letra="a";
    $le=0;
    $resul=0;
    if (str_contains($n1, $letra) && str_contains($n2, $letra)) {
        $le=15;
        $sub1 = substr($n1, 0, 2);
        $sub2 = substr($n2, 0, 2);
    } else {
        $le=0;
        $sub1 = substr($n1, 0, 2);
        $sub2 = substr($n2, 0, 2);
    }  
    $r=random_int(0,30);
    $resul=(($can+$le)+$r);
    $sub3=$sub1.$sub2;
    echo $resul."%"; ?> 
    </p> 
    <p class="nombre" >
    <?php
    echo $sub3;
    
    ?>  </p><p class="nombre" >
    <?php
    
    echo $n1." y ".$n2;
  
    ?>  </p>
    </form>
    

</body>
</html>



