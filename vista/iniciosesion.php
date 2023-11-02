

<?php

class inisiosesion{
    public function showLoginForm() {
        // Código para mostrar el formulario de inicio de sesión
        echo '
            <html>
            <head>

                <title>Iniciar Sesión</title>
                <link rel="icon" href="/img/logo3.ico" type="image/x-icon">
                <link rel="stylesheet" href="css/estilosiniciosesion.css" type="text/css">
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            </head>
            <body>
                <div class="container ">
                    
                    <div class="row" >

                    <div class="col-4 "> </div>
                    <div class=" col-4 card" style="margin-top: 60px;">
                        <div class=" card-header">
                            <h1>MY PETS`S APP</h1>
                            <br>
                            <h3>Iniciar Sesión</h3>

                        </div>    
                        <div class="card-body">
                                <form method="POST" action="index.php?action=login">
                                    <div class="form-group">
                                        <label for="username">Usuario:</label>
                                        <input type="text" class="form-control" id="username" name="username" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Contraseña:</label>
                                        <input type="password" name="password" id="password" class="form-control" required>
                                    </div>
                                        <br>
                                        <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
                                        <br>
                                        <p>¿No tienes una cuenta?<br><a href="index.php?action=register">Regístrate</a></p>
                                    
                                       
                                </form>
                            </div> 
                        </div>
                    </div>
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
                <div class = "container">
                    <div class = "row">
                        <div class="col-4 ""></div>
                            <div class=" text-center col-4 card""style="background-color: white; ">
                                <h4>' . $message . '</h4>
                            </div>
                        
                        
                    </div>
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
    
