<html>
<head>
  <title> Hamming </title>
  <?php
    $a = $_POST['thing'];
    $b = $_POST['thing2'];
   ?>
</head>
<body>
  <form method="post" action="">
    <label for="thing">Cual es su primer cadena?</label>
    <input type="text" name="thing" id="thing" /><br>
    <label for="thing2">Cual es su segunda cadena?</label>
    <input type="text" name="thing2" id="thing2" /><br>
    <input type="submit" id="calcular" value= "Calcular">
  </form>
  <hr />

</body>
<?php
/**
 * Escribir una funcion que calcule la distancia de Hamming entre 2 cadenas.
 *
 * La distancia de Hamming es el numero de diferencias que existen entre 2
 * cadenas.  Por ejemplo:
 *
 * Cadena 1:  ABEDFKL
 * Cadena 2:  ACEDFML
 *             ^   ^
 * La distancia de Hamming es 2, porque existen dos diferencias.
 *
 * Para calcular la distancia de Hamming se requiere que las dos cadenas
 * tengan la misma longitud, si no es asi, la funcion debe regresar -1.
 */

    function distance($a, $b) {
        if(strlen($a)==strlen($b)){
          $contador=0;
          for($i=0;$i<strlen($a);$i++)
            if($a[$i]!=$b[$i])
              $contador++;
          return $contador;
        }else{
          echo 'No iguales<br>';
        }
    }
    echo distance($a,$b).'<br>';
?>
