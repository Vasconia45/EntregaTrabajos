<!DOCTYPE html>
<html>

<head>
    <title>Ejercicio9</title>
</head>

<body>
    <?php
    class Ejercicio9{

        private $lado;

        public function __construct($lado){
            $this->lado = $lado;
        }

        public function cuadrado(){
            if ($this->lado < 0) {
                throw new Exception("El numero" . $this->lado . "es negativo");
            }
            return "Ell area del cuadrado es:" . pow($this->lado, 2) . "<br>";
        }
    }

    try {
        $c1 = new Ejercicio9(10);
        echo $c1->cuadrado() . nl2br("\n");
    } catch (Exception $e) {
        echo $e . "<br>";
    }

    try{
        $c3 = new Ejercicio9(-2);
        echo $c3->cuadrado() . nl2br("\n");
    }catch(Exception $e){
        echo $e . "<br>";
    }

    try{
        $c2 = new Ejercicio9(4);
        echo $c2->cuadrado() . nl2br("\n");
    }catch(Exception $e){
        echo $e . "<br>";
    }

    ?>
</body>

</html>