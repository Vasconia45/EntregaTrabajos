<html>

    <head>
        <title>Ejercicio10</title>
    </head>

    <body>
    <?php  
    class Persona{
        private $dni;
        private $nombre;
        private $apellido;

            public function __construct($dni, $nombre, $apellido){
                $this->dni = $dni;
                $this->nombre = $nombre;
                $this->apellido = $apellido;
            }

            public function unirPalabra(){
                $letra = " ";
                $letra = "Persona: " . $this->nombre . "\n" .$this->apellido . nl2br("\n");
                return $letra;
            }


            public function setDni($dni){
                $this->dni = $dni;
            }

            public function getDni(){
                return $this->dni;
            }

            public function setNombre($nombre){
                $this->nombre = $nombre;
            }

            public function getNombre(){
                return $this->nombre;
            }

            public function setApellido($apellido){
                $this->apellido = $apellido;
            }

            public function getApellido(){
                return $this->apellido;
            }

}
    
    class User extends Persona{
        private $puntos;

        public function __construct($dni, $nombre, $apellido, $puntos){
            parent::__construct($dni, $nombre, $apellido);
            $this->puntos = $puntos;
        }

            public function setPuntos($puntos){
                $this->puntos = $puntos;
            }

            public function getPuntos(){
                return $this->puntos;
            }

            public function unirPalabra(){
                $letra = " ";
                $letra = "User: " . $this->getNombre() . "\n" . $this->getApellido() . ", DNI: " . $this->getDni() . nl2br("\n");
                return $letra;
            }

            public function visualizarPuntos(){
                if($this->puntos < 100){
                    return "Tienes menos de 100 puntos: " . $this->puntos . " puntos." . nl2br("\n");
                }
            }
    }
    $c1 = new User("73037255L", "Pablo", "Igaitea", 200);
    echo $c1->unirPalabra();
    echo $c1->visualizarPuntos();

    echo "<br>";

    $c2 = new User("73037255T", "Sergio", "Haüsler", 80);
    echo $c2->unirPalabra();
    echo $c2->visualizarPuntos();

    echo "<br>";

    $c3 = new User("73037255F", "Pepe", "Viyuela", 99);
    echo $c3->unirPalabra();
    echo $c3->visualizarPuntos();
    ?>
</body>
</html>