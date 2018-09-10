<nav class="navbar navbar-expand-lg navbar-light bg-danger">

	
	<a class="navbar-brand" href=""> 
		<!-- <img src="../img/tropaicon.png" width="100px" alt="">  -->
		<?php echo $this->Html->image('tropaicon.png', array('width'=>'100px', 'heith'=>'100px;')); ?>
	</a>
	
	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item dropdown">
	          <a>
	          <?php echo $this->Html->link(__('Usuarios'), array('controller'=>'users','action' => 'admin'), array('class'=>'nav-link', 'style'=>'text-align: center;')); ?>	
	          </a>
	      </li>
	      <li class="nav-item">
        	<a>
        		<?php echo $this->Html->link(__('Tareas'), array('controller' => 'tasks', 'action' => 'index'), array('class'=>'nav-link', 'style'=>'text-align: center;'));?>
        	</a>
	      </li>
	      <li class="nav-item">
        	<a>
        		<?php echo $this->Html->link(__('Status'), array('controller' => 'statuses', 'action' => 'index'), array('class'=>'nav-link', 'style'=>'text-align: center;'));?>
        	</a>
	      </li>
	       <li class="nav-item">
        	<a>
        		<?php echo $this->Html->link(__('Proyectos'), array('controller' => 'proyects', 'action' => 'index'), array('class'=>'nav-link', 'style'=>'text-align: center;'));?>
        	</a>
        	<li class="nav-item">
        		<?php echo $this->Html->link(__('Reportes'), array('controller'=> 'orders', 'action'=>'index'), array('class'=>'nav-link', 'style'=>'text-align: center;')); ?>

        	</li>
	      </li> 
	    </ul>
	    <form class="form-inline my-2 my-lg-0">
	      <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Cerrar Sesión</button>
	    </form>
	  </div>
	</nav>

<br>
<br>
