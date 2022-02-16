<!DOCTYPE html>
<html>

<head>
    <title>Agenda</title>
</head>

<body>

    <?php
    class agenda{
        private $agenda;

        public function __construct($array = null){
            if ($array == null) {
                $this->agenda = array();
            } else {
                $this->agenda = (array)json_decode($_POST['array'], true);
            }
        }

        // Añadir un contacto nuevo a la agenda o editar el contacto
        public function addContact($nombre, $email){
            $Exit = $this->Exist($nombre);
            $checkEmail = $this->Emailcheck($email);
            if ($Exit == null && $checkEmail) {
                $this->agenda[$nombre] = $email;
                return '<h4 style=color:green;>Added perfectly.</h4>';
            } else if ($Exit != null && $checkEmail) {
                $this->agenda[$Exit] = $email;
                return '<h4 style=color:green;>The email has been updated.</h4>';
            } else if (!$checkEmail) {
                return '<h4 style=color:red;>The email format is incorrect.</h4>';
            } else {
                return '<h4 style=color:red;>Wrong.</h4>';
            }
        }

        // comprueba si un nombre existe
        private function Exist($nombre){
                $keys = array_keys($this->agenda);
            foreach ($keys as $key) {
                if (strtolower($key) == strtolower($nombre)) {
                    return $key;
                }
            }
            return null;
        }

        private function Emailcheck($email){
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                return true;
            }
            return false;
        }

        // Elimina de la agenda el contacto que le introducimos
        public function deleteContact($name){
            if ($this->Exist($name)) {
                unset($this->agenda[$name]);
                return '<h4 style=color:green;>Contact deleted.</h4>';
            }
            return '<h4 style=color:red;>The contact doesnt exists.</h4>';
        }

        // Pasamos el array a string para despues poder postearlo en el input 
        public function setAgenda(){
            $string = json_encode($this->agenda);
            return $string;
        }
        // metodo para ver el array
        public function Array(){
            $string = '<table><tr><td style=font-weight:bold;>Name</td><td style=font-weight:bold;>Correo</td></tr>';
            foreach ($this->agenda as $key => $value) {
                $string .= '<tr><td>' . $key . '</td><td>' . $value . '</td></tr>';
            }
            $string .= '</table>';
            echo $string;
        }
    }
    ?>

    <?php
    $result = '';
    if (!isset($_POST['array'])) {
        $obj = new agenda();
    } else {
        $obj = new agenda($_POST['array']);
        if (empty($_POST['name'])) {
            $result = '<h4 style=color:red;>El name esta vacio</h4>';
        } else {
            $name = htmlentities($_POST['name']);
            if (isset($_POST['email']) && !empty($_POST['email'])) {
                $email = htmlentities($_POST['email']);
                $result = $obj->addContact($name, $email);
            } else {
                $result = $obj->deleteContact($name);
            }
        }
    }
    ?>
    <?php
    $user = "";
    if (isset($_POST['username'])) {
        $user = htmlentities($_POST['username']);
    } else {
        $user = $_POST['user'];
    }
    ?>
    <h1>This is the agenda of <?php echo $user; ?></h1>
    <div id="userform">
        <form method="POST">
            <label>Name:</label>
            <br>
            <input type="text" name="name" placeholder=<?php echo isset($_POST['name']) ? $_POST['name'] : ''; ?>>
            <br>
            <label>Email:</label>
            <br>
            <input type="email" name="email" placeholder=<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>>
            <br><br>
            <input type="submit" name="submit" />
            <input type="hidden" name="array" value=<?php echo $obj->setAgenda(); ?> />
            <input type="hidden" name="user" value=<?php echo $user; ?> />
        </form>
    </div>
    <?php
    if (isset($_POST['submit'])) {
        echo $result;
    }
    $obj->Array();
    ?>
</body>

</html>