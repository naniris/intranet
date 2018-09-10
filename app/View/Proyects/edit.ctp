
<div class="card col-md-8 card-body shadow p-3 mb-5 bg-white rounded container proyects form">
        <div class="box-header with-border">
              <h3 class="box-title" style="margin-left:30%">Editar Proyecto</h3>
        </div>
	<?php echo $this->Form->create('Proyect'); ?>
      <br>  
      <div class="row">
        <div class="col">
            <div class="form-groug">
               <?php
               		echo $this->Form->input('id');
					echo $this->Form->input('title', array('class'=>'form-control', 'label'=>'Titulo'));
					echo $this->Form->input('company' , array('class'=>'form-control', 'label'=>'Empresa'));
					echo $this->Form->input('contact' , array('class'=>'form-control', 'label'=>'Persona contacto'));
					echo $this->Form->input('phone' , array('class'=>'form-control', 'label'=>'Teléfono fijo'));
					echo $this->Form->input('mobile' , array('class'=>'form-control', 'label'=>'Móvil'));
					echo $this->Form->input('email' , array('class'=>'form-control', 'label'=>'Mail'));
				?>
            </div>
            <br>
       </div>
        <div class="col">
            <div class="form-group">
            	<?php
            		echo $this->Form->input('manager' , array('class'=>'form-control', 'label'=>'Gerente de producción'));
					echo $this->Form->input('leader' , array('class'=>'form-control', 'label'=>'Lider de proyecto'));
					echo $this->Form->input('responsible' , array('class'=>'form-control', 'label'=>'Diseñador responsable'));
					echo $this->Form->input('hrs_attempt', array('class'=>'form-control', 'label'=>'Horas tentativas'));
            	?>
            	<label>Fecha de entrega</label>	
				<?php	
					echo $this->Form->date('date_delivery', array('class'=>'form-control'));
				?>
            </div>
        </div>
    </div>
	<button type="submit" class="btn btn-success">Actualizar</button>
    <?php echo $this->Form->end(); ?>
</div>
</div>

<br>
<br>
