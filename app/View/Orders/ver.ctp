<style type="text/css" media="screen">
	.header-tar{
	background-color: #f1f1f1;
	}
</style>

<h3 style="margin-left: 100px">ORDEN DE TRABAJO</h3>
 <div class="container mt-3">
      <form>
      	<?php foreach ($ordenes as $order): ?>

      <div class="row shadow p-2">
          <div class="col-9">
            <div class="header-tar text-center">
              Descripción
            </div>
            <textarea rows="33" value="" style="width: 100%;" disabled>
			* <?php echo($order['Order']['description']); ?>
            </textarea>
            <div class="row">
              <div class="col-3">
                <div class="m-2 border rounded text-center">
			         <label>STATUS</label>
					 <input class="text-center" style="width: 100%;" disabled value="<?php echo($order['Status']['name']); ?>">
                </div>
              </div>
            </div>
          </div>
          <div class="col-3">
            <div class="header-tar text-center mb-4">
             Numero de orden
             <input value="<?php echo($order['Order']['id']); ?>" class="text-center" style="width: 100%;" disabled>
            </div>
            <div class="header-tar text-center mb-4">
              Horas
              <input value="<?php echo($order['Order']['hours']); ?>" class="text-center" style="width: 100%;" disabled>
            </div>

            <div class="header-tar text-center">
             Fecha de recepción
             <input value="<?php echo($order['Order']['created']); ?>" style="width: 100%;" disabled>
            </div>

            <div class="header-tar my-3">
              <div class="m-2">
              <span>Empresa</span>
              <input type="text" class="mb-2 text-center" value="<?php echo($order['Proyect']['company']); ?>" style="width: 100%;" disabled>
              <span>Persona (Contacto)</span>
              <input type="text" class="mb-2 text-center" value="<?php echo($order['Proyect']['contact']); ?>" style="width: 100%;" disabled>
              <span>Teléfono fijo</span>
              <input type="text" class="mb-2 text-center" value="<?php echo($order['Proyect']['phone']); ?>" style="width: 100%;" disabled>
              <span>Móvil</span>
              <input type="text" class="mb-2 text-center" value="<?php echo($order['Proyect']['mobile']); ?>" style="width: 100%;" disabled>
              <span>Mail</span>
              <input type="text" class="mb-2 text-center" value="<?php echo($order['Proyect']['email']); ?>" style="width: 100%;" disabled>
              </div>
            </div>

            <div class="header-tar my-3">
              <div class="header-tar text-center" style="border-bottom: 1px solid #919191;">
               Diseño
              </div>
              <div class="m-2">
              <span>Gerente de Producción</span>
              <input type="text" class="mb-2 text-center" value="<?php echo($order['Proyect']['manager']); ?>" style="width: 100%;" disabled>
              <span>Líder de proyecto</span>
              <input type="text" class="mb-2 text-center" value="<?php echo($order['Proyect']['leader']); ?>" style="width: 100%;" disabled>
              <span>Diseñador responsable</span>
              <input type="text" class="mb-2 text-center" value="<?php echo($order['Proyect']['responsible']); ?>" style="width: 100%;" disabled>
              <span>HORAS Tentativas</span>
              <input type="text" class="mb-2 text-center" value="<?php echo($order['Proyect']['hrs_attempt']); ?>" style="width: 100%;" disabled>
              <span>HORAS reales</span>
              <input type="text" class="mb-2 text-center" value="<?php echo($order['Proyect']['hrs_real']); ?>" style="width: 100%;" disabled>
              </div>
            </div>

            <div class="header-tar my-3">
              <div class="header-tar text-center">
               <label>Fecha de entrega final</label>
               <input class="text-center"; value="<?php echo($order['Proyect']['date_delivery']); ?>" style="width: 100%;" disabled>
              </div>
            </div>

          </div>
      </div>
      <?php endforeach; ?>
      </form>
    </div>
