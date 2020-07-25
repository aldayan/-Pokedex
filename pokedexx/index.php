<?php 
require_once 'layout/layout.php';
require_once 'ayuda/utilidad.php';
require_once 'Estudiantes/estu.php';
require_once 'service/ServiceBase.php';
require_once 'Estudiantes/EstudianteCookie.php';
require_once 'ayuda/Handler/FileHandler.php';
require_once 'ayuda/Handler/JsonFileHandler.php';
require_once 'Estudiantes/EstudianteServiceFile.php';

$layout = new Layout(false);
$utilies =  new utilities();
$service = new EstudianteCookie();


$listadoEstudiantes = $service->GetList(); 




?>

<?php $layout->printHeader();?>

<main role="main">

  <section class="jumbotron text-center">
    <div class="container">
      <h1><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Pokemones</font></font></h1>
      <p class="lead text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Crea tu pokemon o elige uno.</font></font></p>
      <p>
        <a href="Estudiantes/add.php" class="btn btn-primary my-2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Crear Nuevo pokemon </font></font></a>
 
      </p>
    </div>
  </section>


  <div class="album py-5 bg-light">
    <div class="container">





    <div class="row">
      <div class = "col-md-4"></div>
    <div class = "col-md-6">

    


    

    




      <?php if(empty($listadoEstudiantes)): ?>


       <h2> No hay pokemones registrados, registralo aqui: <a href="Estudiantes/add.php" class="btn btn-primary"> Nuevo pokemon</a></h2>

      <?php  else:?>


     

      <?php   foreach($listadoEstudiantes as $estudiante):  ?>

        
        

        <div class="card" >
       
        <?php if($estudiante->profilePhoto == "" || $hola->estudiante == null): ?>

 <img svg class="bd-placeholder-img card-img-top" src="<?php echo "assets/imagen/defaul.png" ?>" width="100%" height="225" 
           aria-label="Placeholder: Thumbnail">
         

      <?else: ?>

      <?php endif; ?>

         
        
           <div class="card-body">
            <h5 class="card-title"><?php echo $estudiante->nombre; ?></h5>
            
          
            <h6 class="card-subtitle mb-2 text-muted"><?php echo $estudiante->getEstatusName(); ?></h6>
            
            <h6 class="card-subtitle mb-2 text-muted"><?php echo  $estudiante->getCarreraName(); ?></h6>

           
            <a href="Estudiantes/edit.php?id=<?php echo $estudiante->id; ?>" class="card-link">Editar</a>

            <a href="Estudiantes/borrar.php?id=<?php echo $estudiante->id; ?>" class="card-link">Borrar</a>
         
          </div>
        </div>


      <?php endforeach; ?>
        
        

      <?php   endif;?>
 

        </div>
      </div>
    </div>
  </div>

</main>

<?php $layout->printFooter();?>