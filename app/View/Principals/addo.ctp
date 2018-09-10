<?php
//print_r($proyectinfoadd['Proyect']['id']);
//print_r($userinfoadd['User']['id']);
//print_r($taskinfoadd);

?>

<div class="orders form">
<?php echo $this->Form->create('Order'); ?>

	<nav class="navbar navbar-expand-lg navbar-light bg-dark">
			<a class="navbar-brand" href="#">
				<?php
				echo $this->Html->Image('tropaicon.png',array('width'=>'100px'));
				?>
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
				<?php echo $this->Html->link(__('Tareas'), array('action' => 'index'),array('class' => 'btn btn-dark my-2 my-sm-0 mx-3')); ?>

				<?php echo $this->Html->link(__('Notas'), array('action' => 'indexn'),array('class' => 'btn btn-dark my-2 my-sm-0 mx-3')); ?>
					<a href="calendario.html" class="btn btn-dark my-2 my-sm-0 mx-3">Calendario</a>

				</ul>

					<button class="btn btn-outline-light my-2 my-sm-0" type="submit">Cerrar Sesión</button>


			</div>
		</nav>


	<div class="container mt-3">

		<div class="row shadow p-2">
			<div class="col-9">
			<div class="header-tar text-center">
				Descripcion
			</div>
			<?php
			echo $this->Form->input('description',array('label'=>'','rows'=>'15','style'=>'width:100%'));
			//,array('controller'=>'Tasks','action' =>'delete',$task['Task']['user_id'])
			?>
			<div class="row">
				<div class="col-6">
				<div class="m-2 text-center btn-block">
				<strong>Status:</strong>
				</div>
				</div>
				<div class="col-6">
				<div class="m-2 border rounded text-center">
       <?php
       echo $this->Form->input('status_id',array('label'=>'','style'=>'width:100%'));
			 ?>
			 <?php

			 echo $this->Form->input('user_id',array('value'=>$userinfoadd['User']['id'],'type' => 'hidden'));


			echo $this->Form->input('proyect_id',array('value'=>$proyectinfoadd['Proyect']['id'],'type'=>'hidden'));
			//array('action' => 'delete', $task['Task']['id'])

			?>
<!--**********************************-->
<!--**********************************-->
<!--**********************************-->
				</div>
				</div>

				<div class="col-11">
				<button type="submit" class="btn btn-dark my-3 my-sm-0 mx-3 btn-block" name="button">Registrar horas</button>
				
					
				</div>
			</div>
			</div>
			<div class="col-3">
			<div class="header-tar text-justify mb-4">
			<strong>Horas</strong>
 			<?php echo $this->Form->input('hours', array('label'=>'')); ?>	
			</div>
			
			<?php echo $this->Form->end(); ?>
			
			<div class="header-tar text-justify">
				<strong><span>Proyecto</span></strong>
				<p><?php  echo $proyectinfoadd['Proyect']['title']; ?></p>
			 <strong>Fecha de recepción</strong>
			<p><?php echo $proyectinfoadd['Proyect']['created']; ?></p>
			</div>

			<div class="header-tar my-3 text-justify">
				<div class="m-2">

				<strong><span>Empresa</span></strong>
				<p><?php  echo $proyectinfoadd['Proyect']['company']; ?></p>
			 <strong> <span>Persona (Contacto)</span></strong>
				<p><?php  echo $proyectinfoadd['Proyect']['contact']; ?></p>
				<strong><span>Teléfono fijo</span></strong>
				<p><?php  echo $proyectinfoadd['Proyect']['phone']; ?></p>
				<strong><span>Móvil</span></strong>
				<p><?php  echo $proyectinfoadd['Proyect']['mobile']; ?></p>
				<strong><span>Mail</span></strong>
				<p><?php  echo $proyectinfoadd['Proyect']['email']; ?></p>
				</div>
			</div>

			<div class="header-tar my-3">
				<strong>
					<div class="header-tar text-center" style="border-bottom: 1px solid #919191;">
					 Diseño
					</div>
				</strong>
				<div class="m-2">
				<strong><span>Gerente de Producción</span></strong>
				<p><?php  echo $proyectinfoadd['Proyect']['manager']; ?></p>
				<strong><span>Líder de proyecto</span></strong>
			 <p><?php  echo $proyectinfoadd['Proyect']['leader']; ?></p>
				<strong><span>Diseñador responsable</span></strong>
				<p><?php  echo $proyectinfoadd['Proyect']['responsible']; ?></p>
				<strong><span>HORAS Tentativas</span></strong>
				<p><?php  echo $proyectinfoadd['Proyect']['hrs_attempt']; ?></p>
				<strong><span>HORAS reales</span></strong>
				<p><?php  echo $proyectinfoadd['Proyect']['hrs_real']; ?></p>
				</div>

			</div>

			<div class="header-tar my-3">
				<div class="header-tar text-justify">
				 <strong>Fecha de entrega final</strong>
				 <p><?php  echo $proyectinfoadd['Proyect']['date_delivery']; ?></p>

				</div>




			</div>



			</div>
		</div>

	</div>


</div>
