
<html>
<head>
  <title> Hello </title>
  <?php
    $username = $_POST['thing'];
   ?>
</head>
<body>
  <h1><?php echo $title; ?></h1>
  <form method="post" action="">
    <label for="thing">Cual es su nombre?</label>
    <input type="text" name="thing" id="thing" />
    <input type="submit" value="Agregar" />
  </form>
  <hr />
</body>
<?php
/**
 * Escribe una function llamada helloWorld que reciba el parametro <nombre>, y regrese un
 * saludo "Hola, <nombre>!". Si no se le pasa un nombre, que regrese
 * "Hola, Mundo!".
 *
 * Por ejemplo:
 *
 * helloWorld('Alice')   ->  "Hola, Alice!"
 *
 * helloWorld() -> 'Hola, Mundo!'
 */
 function helloWorld($name){
   if(empty($name))
    return "Hola, mundo";
  return "Hola, ".$name;
 }
 echo helloWorld($username);
?>
