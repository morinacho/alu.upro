<?php require_once APP_ROUTE . '/main/view/components/top.php'?>
    <!-- Form -->
<div class="col-12 mt-4 row ms-0"> 
	<div class="col-12 mb-3">
		<h4>Registrar Recurso</h4>
	</div>
    <form class="col-12 row justify-content-between" method="post" action="<?php echo URL_ROUTE?>users/store">
        <div class="card col-5 boxShadow"> 
            <div class="card-body">  
                <h5 class="card-title">Datos Personales</h5>
                <div class="mb-3 mt-3">
                    <label for="resource-name" class="form-label">Nombres</label>
                    <input type="text" class="form-control form-control-sm" id="resource-name" name="resource-name" placeholder="Ingresar nombres" required>
                </div>
                <div class="mb-3 mt-3">
                    <label for="resource-lastname" class="form-label">Apellido</label>
                    <input type="text" class="form-control form-control-sm" id="resource-lastname" name="resource-lastname" placeholder="Ingresar apellidos" required>
                </div>
                <div class="mb-3 mt-3">
                    <label for="resource-document" class="form-label">DNI</label>
                    <input type="text" class="form-control form-control-sm" id="resource-document" name="resource-document" placeholder="Ingresar dni sin puntos" required>
                </div>
                <div class="mb-3">
                    <label for="resource-email" class="form-label">Email</label>
                    <input type="email" class="form-control form-control-sm" id="resource-email" name="resource-email" placeholder="ejemplo@mail.com" required>
                </div>
                <div class="mb-3">
                    <label for="resource-address" class="form-label">Dirección</label>
                    <input type="text" class="form-control form-control-sm" id="resource-address" name="resource-address" placeholder="Ingresar dirección" required>
                </div>
                <div class="mb-3">
                    <label for="resource-phone" class="form-label">Teléfono</label>
                    <input type="text" class="form-control form-control-sm" id="resource-phone" name="resource-phone" placeholder="Ingresar número de teléfono" required>
                </div>
            </div>  
        </div> 
        <div class="card col-6 boxShadow"> 
            <div class="card-body">  
                <h5 class="card-title">Control de acceso</h5>                      
                <h6 class="card-subtitle mb-2 mt-3 text-muted">Inico</h6>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="check-dashboard" name="check-dashboard">
                    <label class="form-check-label" for="check-dashboard">Dashboard</label>
                </div> 
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="check-cash-register" name="check-cash-register">
                    <label class="form-check-label" for="check-cash-register">Caja</label>
                </div>  
                <h6 class="card-subtitle mb-2 mt-3 text-muted">Orden de trabajo</h6>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="check-workorders" name="check-workorders">
                    <label class="form-check-label" for="check-workorders">Ver Ordenes de trabajo</label>
                </div> 
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="check-workorder-add" name="check-workorder-add">
                    <label class="form-check-label" for="check-workorder-add">Agregar orden de trabajo</label>
                </div> 
                <h6 class="card-subtitle mb-2 mt-3 text-muted">Avisos</h6>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="check-notices" name="check-notices">
                    <label class="form-check-label" for="check-notices">Ver avisos</label>
                </div> 
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="check-notices-create" name="check-notices-create">
                    <label class="form-check-label" for="check-notices-create">Agregar avisos</label>
                </div> 
                <h6 class="card-subtitle mb-2 mt-3 text-muted">Clientes</h6>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="check-customer" name="check-customer">
                    <label class="form-check-label" for="check-customer">Ver clientes</label>
                </div> 
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="check-customer-create" name="check-customer-create">
                    <label class="form-check-label" for="check-customer-create">Registrar cliente</label>
                </div> 


                <h6 class="card-subtitle mb-2 mt-3 text-muted">Permiso de Administrador <span class="material-icons" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Habilitar todas las funcionalidades del sistema" style="cursor:help;">help</span></h6>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="check-admin" name="check-admin">
                    <label class="form-check-label" for="check-admin">Hacer administrador</label>
                </div> 
            </div>  
        </div> 
        <div class="mb-3 mt-3 d-grid gap-2">
            <input type="submit" class="btn btn-outline-primary btn-sm" name="register-customer" value="Registrar recurso">
        </div>
    </form>
</div> 
        
<?php require_once APP_ROUTE . '/main/view/components/bottom.php'?>