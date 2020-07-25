<?php 
require_once '../layout/layout.php';
require_once '../ayuda/utilidad.php';
require_once 'estu.php';
require_once '../service/ServiceBase.php';
require_once 'EstudianteCookie.php';

$layout = new Layout(true);
$service = new EstudianteCookie();
$utilities = new utilities();






if(isset($_POST['nombre'])  && isset($_POST['estatus']) && isset($_POST['carrera']) && isset($_FILES['profilePhotop'])){
 
  

  $newEstudiante = new Estu();

  $newEstudiante-> InicializeData(0,$_POST['nombre'],$_POST['estatus'],$_POST['carrera']);
   

  $service -> Add($newEstudiante);
  


 header("Location:../index.php");
 exit();
}

?>

<?php $layout->printHeader();?>

<main role="main">
    <div style="margin-top: 2%;">

<div class="card">
  <div class="card-header bg-dark text-light" >
 <a href="../index.php" class="btn btn-warning"> Volver Atras</a> Creando pokemon
  </div> 
  <div class="card-body">

  <form enctype="multipart/form-data" action="add.php" method="POST">
  <div class="form-group">
    <label for="nombre">Nombre del pokemon:</label>
    <input type="text" class="form-control" id="nombre" name="nombre">
  </div>
  
  
  <div class="form-group">
    <label for="estatus">Tipo de pokemon:</label>
    <select class="form-control" id="estatus" name="estatus">

   <?php   foreach($utilities->estatus as $id => $text):?>

   <option value="<?php  echo $id; ?>">  <?php echo $text; ?></option>

    <?php endforeach;?>
    </select>
    </div>

  <div class="form-group">
    <label for="carrera">Region a la que pertenece :</label>
    <select class="form-control" id="carrera" name="carrera">

    <?php   foreach($utilities->carrera as $id => $text):?>

<option value="<?php  echo $id; ?>">  <?php echo $text; ?></option>

 <?php endforeach;?>
    
    </select>
    </div>

    

  <div class="form-group">
    <label for="foto">Foto de perfil:</label>
    <input type="file" class="form-control" id="foto" name="profilePhotop">
  </div>

    <button type="submit" class=" btn btn-success">Guardar</button>

</form>
  </div>
</div>


  
</main>

<?php $layout->printFooter();?>
