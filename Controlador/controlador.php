<?php

require_once 'modelo/modelo.php';
require_once 'vista/iniciosesion.php';
require_once 'vista/registro.php';

class Controller {
    private $model;
    private $isesion;
    private $registro;

    public function __construct() {
        $this->model = new Model();
        $this->isesion = new inisiosesion();
        $this->registro = new registrarse();
    }

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];

            if ($this->model->verifyLogin($username, $password)) {
                $this->isesion->redirect('vista/inicio.php');
            } else {
                $this->isesion->showLoginForm();
                $this->isesion->showMessage('usuario o contraseña no valida');
            }
        } else {
            $this->isesion->showLoginForm();
        }
    }

    public function register() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $nombres= $_POST['nombres'];
            $apellidos = $_POST['apellidos'];
            $cedula = $_POST['cedula'];
            $telefono = $_POST['telefono'];
            $correo = $_POST['correo'];
            $direccion = $_POST['direccion'];

   
         
            if ($this->model->registerUser($username, $password,$nombres,$apellidos,$cedula, $telefono, $correo,$direccion)) {
                $this->registro->showMessage('Registro exitoso');
                $this->isesion->showLoginForm();
            } else {
                $this->registro->showMessage('Error en el registro');
                $this->registro->showRegisterForm();
            }
        } else {
            $this->registro->showRegisterForm();
        }
    }

    
}

?>
