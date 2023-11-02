<?php include("../templete/encabezado.php")?>
<?php 
$txnombremascota=(isset($_POST['txnombremascota']))?$_POST['txnombremascota']:"";
$txtedadmascota=(isset($_POST['txtedadmascota']))?$_POST['txtedadmascota']:"";
$listamascota=(isset($_POST['listamascota']))?$_POST['listamascota']:"";
$txtcolorpelo=(isset($_POST['txtcolorpelo']))?$_POST['txtcolorpelo']:"";
$txtalimento=(isset($_POST['txtalimento']))?$_POST['txtalimento']:"";
$txtrecomen=(isset($_POST['txtrecomen']))?$_POST['txtrecomen']:"";
$txtarchivo=(isset($_FILES['txtarchivo']['name']))?$_FILES['txtarchivo']['name']:"";
$accion=(isset($_POST['accion']))?$_POST['accion']:"";

echo$txnombremascota. "<br/>";
echo$txtedadmascota. "<br/>";
echo$txtcolorpelo. "<br/>";
echo$txtalimento. "<br/>";
echo$txtrecomen. "<br/>";
echo$txtarchivo. "<br/>";
echo$accion. "<br/>";



?>
<div class="row" >
  <div class="col-md-3" >
    <div class="card">
        <div class="card-header">
            <h4>Datos mascotas</h4>
        </div>
        <div class="card-body">
            <form method="POST" enctype="multipart/form-data">
                <div class = "form-group ">
                    <label for="txnombremascota">Nombre de la mascota:</label>
                    <input type="text" class="form-control form-control-sm" id="txnombremascota" name="txnombremascota">
                </div>
                <div class = "form-group mb-2"> 
                    <label for="txtedadmascota">Edad de la mascota:</label>
                    <input type="text" class="form-control form-control-sm" name="txtedadmascota"id="txtedadmascota">
                </div>
                <div class="mb-2" >
                <label for="listamascota" class="form-label">Tipo de mascota:</label>
                    <input class="form-control form-control-sm" list="listamascota"name="listamascota"  >
                    <datalist id="listamascota">
                    <option value="Perro">
                    <option value="Gato">
                    <option value="Caballo">
                    <option value="Vaca">
                    <option value="Burro">
                    </datalist>
                </div>
                <div class = "form-group mb-2">
                    <label for="txtcolorpelo">Color del pelo:</label>
                    <input type="text" class="form-control form-control-sm" name="txtcolorpelo" id="txtcolorpelo">
                </div>
                <div class = "form-group mb-2">
                    <label for="txtalimento">Alimento:</label>
                    <input type="text" class="form-control form-control-sm"  name="txtalimento" id="txtalimento">
                </div>
                <div class = "form-group mb-2">
                    <label for="txtalimento">Recomendaciones:</label>
                    <input type="text" class="form-control form-control-sm"  name="txtrecomen" id="txtrecomen">
                </div>
                <div class="form-group">
                      <label for="archivo" class="form-label mb-2">foto:</label>
                      <input class="form-control form-control-sm" type="file" name="txtarchivo" id="txtarchivo">
                </div>
                <br>

                <div class="btn-group mb-2" role="group" aria-label="Basic mixed styles example">
                        <button type="submit "name="accion" value="Registrar" class="btn btn-success btn-sm">Registrar</button>
                        <button type="submit" name="accion" value="modificar" class="btn btn-warning btn-sm">modificar</button>
                        <button type="submit" name="accion" value="Cancelar"  class="btn btn-info btn-sm">Cancelar</button>
                </div>
            </form>
          </div>
      </div>    
  </div>

  <div  class="col-md-9">
      <table class="table">
          <thead>
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Nombre</th>
              <th scope="col">Edad</th>
              <th scope="col">Tipo</th>
              <th scope="col">Color</th>
              <th scope="col">Alimento</th>
              <th scope="col">Recomendadciones</th>
              <th scope="col">Foto</th>
              <th scope="col">Acciones</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
              <td>@mdo</td>
              <td>@mdo</td>
              <td>@mdo</td>
              <td>@mdo</td>
              <td>@mdo</td>
            </tr>
            <tr>
            
          </tbody>
    </table>
  </div>
</div>


<?php include("../templete/footer.php")?>