<!DOCTYPE html>
<html>

<head>
    <title>Ejercicio8</title>
</head>

<body>
    <?php

    class Ejercicio8{

        private $fichero;

        public function __construct($fichero){
            $this->fichero = $fichero;
        }

        public function find(){
            $path = dirname(__FILE__) . "\\" . $this->fichero;
            if (file_exists($path)) {
                echo "El fichero existe" . nl2br("\n");
            } else {
                throw new Exception("El fichero no existe");
            }
        }
    }

    try{
        $c1 = new Ejercicio8("Ejercicio6.php");
        echo $c1->find();
    }catch(Exception $e){
        echo $e;
    }

    try{
        $c2 = new Ejercicio8("Ejercicio56.php");
        echo $c2->find();
    }catch(Exception $e){
        echo $e;
    }
    ?>
</body>

</html>