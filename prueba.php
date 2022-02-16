<?php
  session_start();
  if(isset($_GET["logout"])){
      session_destroy();
  }
  if(isset($_SESSION["usuario"])){
      header("Location:prueba2.php");
  }
?>
<html>
<meta charset="uft-8">

<head>
  <title>Prueba</title>
</head>

<body>
  <h1>Prueba Cookies</h1>
  <div>
    <form action="prueba.php" method="POST">
      <input type="text" name="Name" placeholder="Name">
      <br><br>
      <button type="submit" id="buton">Submit</button>
    </form>
    <?php
    $nombre;
        if(isset($_POST["Name"]) && !empty($_POST["Name"])){
            $nombre = $_POST["Name"];
            $_SESSION["usuario"] = $nombre;

            if(isset($_COOKIE[$nombre])){
              setcookie($nombre,  $_COOKIE[$nombre] + 1, time() + 3600);
          }
          else{
            setcookie($nombre, 1, time() + 3600);
          }
          header("Location:prueba2.php");
        }
    ?>
  </div>
</body>

</html>