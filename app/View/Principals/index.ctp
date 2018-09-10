<style media="screen">
.Alta{
  background-color: #dc3545;
}
.Media{
  background-color: #fdc103;
}
.Baja{
  background-color: #28a745;

}
pre{
  font-family: sans-serif;
}
</style>


<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <a class="navbar-brand">
    <?php echo $this->Html->image('tropaicon.png', array('width'=>'100px', 'heith'=>'100px;')); ?>
   </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">

      <a href="calendario.html" class="btn btn-dark my-2 my-sm-0 mx-3">Calendario</a>


    </ul>
   <?php echo $this->Html->link(__('Notas Personales'), array('action' => 'indexn'),array('class' => 'btn btn-outline-light my-2 my-sm-0 mx-3')); ?>
    <form class="form-inline my-2 my-lg-0">

      <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Cerrar Sesión</button>
    </form>

  </div>
</nav>
<section class="container">
  <h1 align="center" class="mt-4 text-dark">Registrar horas</h1>


<div class="row mt-5">
<?php
foreach ($tasks as $task):

?>

    <div class="col-6 col-md-3 mt-2">
      <div class="card shadow <?php echo $task['Task']['prioridad']; ?>">

        <div class="card-header text-center">
          <div class="text-right" style="margin:-5px -10px 0 0;">
            <?php echo $this->Form->postLink(__('X'), array('action' => 'delete', $task['Task']['id']),array('confirm'=> __('Seguro que desea eliminar# %s?', $task['Task']['title'])));?>

          </div>
					<strong>
		<?php


		//echo $task['Task']['title'];
	echo strtoupper($task['Task']['title']);


		?>  </strong>
        </div>
        <div class="card-body">
					<?php
					echo $task['Task']['description'];

					?>

        </div>
        <div class="card-body text-center">
          <?php
          echo $this->Html->link("Registrar horas",array("action"=>"addo",$task['Task']['proyect_id'],$task['Task']['user_id'],$task['Task']['id']),array("class"=>"btn btn-outline-light  btn-block"));
    			?>

        </div>
      </div>
    </div>
<?php
endforeach;
?>
</div>

</section>
