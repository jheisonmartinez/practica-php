<?php

class registrarse{
  
    
        public function showRegisterForm() {
            // Código para mostrar el formulario de registro
            echo '
                <html>
                <head>
                    <title>Registrarse</title>
                    
                    <link rel="stylesheet" href="css/estilos.css" type="text/css">
                    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
               
                    </head>
                <body>
                    <div class="container">
                        
                        <div class="row mt-5" >
                            <div class ="col-2">
                                                       
                            </div>

                            <div class=" col-8 card ">

                                <div class ="card-header ">
                                    <h1 style="text-align:center;">MY PETS`S APP</h1>
                                     <br>
                                    <h3>Datos de regístro</h3>           
                                </div>
                                <div class ="card-body">
                                <form class="row g-3 method="POST" action="index.php?action=register">
                                <div class="col-md-6" >
                                    <label for="username">Usuario:</label>
                                    <input type="text" class="form-control" id="username" name="username" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="password">Contraseña:</label>
                                    <input type="password" class="form-control" id="password" name="password" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="nombres">Nombres:</label>
                                    <input type="text" class="form-control" id="nombres" name="nombres" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="apellidos">Apellido:</label>
                                    <input type="text" class="form-control" id="apellidos" name="apellidos" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="cedula">Cedula:</label>
                                    <input type="text" class="form-control" id="cedula" name="cedula" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="telefono">Telèfono:</label>
                                    <input type="text" class="form-control" id="telefono" name="telefono" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="correo">Correo:</label>
                                    <input type="mail" class="form-control" id="correo" name="correo" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="direccion">Direcciòn:</label>
                                    <input type="text" class="form-control" id="direccion" name="direccion" required>
                                </div>
                                <div class="">
                                    <label for="imagen" class="form-label ">Adjuntar imagen</label>
                                    <input type="file" class="form-control"  id="imagen" name="imagen">
                                </div>
                            
                                <button type="submit" class="btn btn-primary mt-2">Registrarse</button>
                                <br>
                                <p> <a href="index.php?action=login">Volver</a></p>
                            </form>                 
                                </div>

                                                
                            <div>
                           
                        <div>
                    </div>
                    
                </body>
                </html>
            ';
        }
    
        public function showMessage($message) {
            // Código para mostrar un mensaje en la página
            echo '
                <html>
                <head>
                    <title>Mensaje</title>
                    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/5.0.2/css/bootstrap.min.css">
                </head>
                <body>
                    <div class="container mt-5">
                        <p>' . $message . '</p>
                    </div>
                </body>
                </html>
            ';
        }
    
        public function redirect($location) {
            header('Location: ' . $location);
            exit;
        }
    }
    ?>
    
