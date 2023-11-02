<?php
class Model {
    private $db;

    public function __construct() {
        $this->db = new mysqli('localhost', 'root', '', 'mypetsapp');
    }

    public function verifyLogin($username, $password){
        $username = $this->db->real_escape_string($username);
        $password = $this->db->real_escape_string($password);

        $query = "SELECT * FROM usuarios WHERE usuario = '$username' AND contraseña = '$password'";
        $result = $this->db->query($query);

        if ($result->num_rows == 1) {
            return true;
        } else {
            return false;
        }
    }

    public function registerUser($username, $password,$nombres,$apellidos,$cedula,$telefono,$correo,$direccion) {
        $username = $this->db->real_escape_string($username);
        $password = $this->db->real_escape_string($password);
        $nombres =$this->db->real_escape_string($nombres);
        $apellidos =$this->db->real_escape_string($apellidos);
        $cedula =$this->db->real_escape_string($cedula);
        $telefono =$this->db->real_escape_string($telefono);
        $correo =$this->db->real_escape_string($correo);
        $direccion =$this->db->real_escape_string($direccion);
        $query = "INSERT INTO `usuarios`(`usuario`,`contraseña`,`nombres`,`apellidos`,`cedula`,`telefono`,`correo`,`direccion`)VALUES ('$username','$password','$nombres','$apellidos','$cedula','$telefono','$correo','$direccion')";
        $result = $this->db->query($query);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }
        


}
?>
