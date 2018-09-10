<nav class="navbar navbar-expand-lg navbar-light bg-danger">
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




      <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Cerrar Sesión</button>


  </div>
</nav>
<div class="notes form">
<?php echo $this->Form->create('Note'); ?>

	<!--****************AQuí va el código del formulario******************-->
	<div class="row mt-5 justify-content-center">


	<div class="col-12 col-md-5 mt-2 text-center">
		<div class="card shadow bg-success">
			<div class="card-header">
	<?php echo $this->Form->input('title',array('label'=>'','placeholder'=>'Título','style'=>'width:100%')); ?>
			</div>
			<div class="card-body">
				<?php
				echo $this->Form->input('content',array('label'=>'','style'=>'width:100%; border:none; background-color:#20ad3f','placeholder'=>'Ingrese el texto aquí'));
				echo $this->Form->input('user_id',array('label'=>'','class'=>'btn-block bg-success'));
				?>

					<button type="submit" class="btn btn-dark my-2   btn-block" name="button">Guardar Nota</button>


			</div>
		</div>

	</div>

	<!--****************AQuí va el código del formulario******************-->
<?php echo $this->Form->end(); ?>
</div>
