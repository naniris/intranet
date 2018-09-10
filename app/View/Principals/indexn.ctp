<style media="screen">

pre{
  font-family: sans-serif;
}
</style><nav class="navbar navbar-expand-lg navbar-light bg-danger">
  <?php
  echo $this->Html->Image('tropaicon.png',array('width'=>'100px'));
  ?>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <?php echo $this->Html->link(__('Tareas'), array('action' => 'index'),array('class' => 'btn btn-dark my-2 my-sm-0 mx-3')); ?>
      <a href="calendario.html" class="btn btn-dark my-2 my-sm-0 mx-3">Calendario</a>

    </ul>


    <form class="form-inline my-2 my-lg-0">

      <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Cerrar Sesión</button>
    </form>

  </div>
</nav>
<section class="container">
  <h1 align="center" class="mt-4 text-danger">Mis Notas</h1>

   <div class="row mt-4">
    <div class="col-12 text-center">
      <!--<a href="#open-modal" class="btn btn-outline-dark my-2 my-sm-0">Nueva Nota</a>-->
			<?php
      echo $this->Html->link("nueva nota",array("action"=>"addn"),array("class"=>"btn btn-outline-dark my-2 my-sm-0"));
			?>


    </div>
   </div>

	   <div class="row mt-5">
<?php
foreach ($notes as $note):

?>

    <div class="col-6 col-md-5 mt-2">
      <div class="card shadow bg-warning">
        <div class="card-header text-center">
          <div class="text-right" style="margin:-5px -10px 0 0;">
            <?php echo $this->Form->postLink(__('X'), array('action' => 'deleten', $note['Note']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $note['Note']['id'])));?>

          </div>
		<?php

		echo $note['Note']['title'];


		?>
        </div>
        <div class="card-body">
					<?php
					echo $note['Note']['content'];

					?>

        </div>
      </div>
    </div>




<?php
endforeach;
?>
 </div>
  </div>


</section>
