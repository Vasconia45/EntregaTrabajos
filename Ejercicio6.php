<!DOCTYPE html>
<html>

<head>
    <title>Ejercicio6</title>
    <link rel="stylesheet" type="text/css" href="css/css.css">
</head>

<body>
    <form method="POST">
        <p>Introduce a name:<input type="text" name="name"/></p>
        <p>Introduce a month:<input type="text" name="month" /></p>
        <input type="submit" value="Enviar" name="submit" />
    </form>
    <?php
    if (!isset($_COOKIE['months'])) {
        $months = array(
            "enero"      => array(),
            "febrero"    => array(),
            "marzo"      => array(),
            "abril"      => array(),
            "mayo"       => array(),
            "junio"      => array(),
            "julio"      => array(),
            "agosto"     => array(),
            "septiembre" => array(),
            "octubre"    => array(),
            "noviembre"  => array(),
            "diciembre"  => array(),
        );
        setcookie('months', json_encode($months), 0);
    } else {
        $months = json_decode($_COOKIE['months'], true);
    }

    function anadirNombre($name, $month) {
        global $months;
        array_push($months[$month], $name);
        setcookie('months', json_encode($months), 0);
        $cant_personas = 0;
        foreach($months as $month => $names){
            $cant_personas += count($names);
        }
        return $cant_personas;
    }

    function mostrar() {
        global $months;
        echo '<div id="contenedor1">';
        foreach($months as $month => $names){
            echo '<h4>'.$month.'</h4>';
        }
        echo '</div>';
        echo '<div id="contenedor2">';
        foreach($months as $month => $names){
            $texto="";
            foreach($names as $name) {
                $texto.=$name.'<br>';
            }
            echo '<p id="names">'.$texto.'</p>';
        }
        echo '</div>';
    }

    if(isset($_POST["name"]) && isset($_POST["month"])) {
            $month = strtolower($_POST["month"]);
            if(array_key_exists($month, $months)) {
                $name = htmlentities($_POST["name"]);
                $contador = anadirNombre($name, $month);
                mostrar();
                echo 'Numero de personas:'.$contador;
            } else {
                echo '<p style="color: red">ESE MES NO EXISTE!</p>';
            }
    }else{
        echo '<p style="color: red">No has introducido nada</p>';
    } 
    
    
    ?>

</body>

</html>