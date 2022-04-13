<?php require_once APP_ROUTE . '/main/view/components/top.php';?>
<!-- principal content-->
<div class="col-12 mt-4 row ms-0"> 
	<div class="col-12 mb-3">
		<h4>Registrar Cliente</h4>
	</div>
    <form class="col-12 row justify-content-between" method="POST" action="<?php echo URL_ROUTE?>customers/store">
        <div class="card col-6 boxShadow"> 
            <div class="card-body">  
                <h5 class="card-title">Datos Personales</h5>
                <div class="mb-3 mt-3">
                    <label for="customer-name" class="form-label">Nombre/s</label>
                    <input type="text" class="form-control form-control-sm" id="customer-name" name="customer-name" placeholder="Ingresar nombres">
                </div>
                <div class="mb-3 mt-3">
                    <label for="customer-lastname" class="form-label">Apellido/s</label>
                    <input type="text" class="form-control form-control-sm" id="customer-lastname" name="customer-lastname" placeholder="Ingresar apellidos">
                </div>
                <div class="mb-3 mt-3">
                    <label for="customer-document" class="form-label">Dni</label>
                    <input type="text" class="form-control form-control-sm" id="customer-document" name="customer-document" placeholder="Ingresar número de documento">
                </div>
                <div class="mb-3 mt-3">
                    <label for="customer-cuil" class="form-label">Cuil/Cuit</label>
                    <input type="text" class="form-control form-control-sm" id="customer-cuil" name="customer-cuil" placeholder="Ingresar cuil/cuit">
                </div>
                <div class="mb-3 mt-3">
                    <label for="customer-email" class="form-label">Email</label>
                    <input type="mail" class="form-control form-control-sm" id="customer-email" name="customer-email" placeholder="ejemplo@mail.com">
                </div>
                <div class="mb-3 mt-3">
                    <label for="customer-phone" class="form-label">Teléfono</label>
                    <input type="text" class="form-control form-control-sm" id="customer-phone" name="customer-phone" placeholder="Ingresar número de teléfono">
                </div>
            </div>  
        </div> 
        <div class="card col-5 boxShadow"> 
            <div class="card-body">  
                <h5 class="card-title">Datos Fiscales</h5>
                <div class="mb-3 mt-3">
                    <select class="form-select" name="customer-type">
                        <option selected disabled>Seleccionar denominación</option>
                        <?php
                            foreach ($param['customertypes'] as $type) {
                                echo "
                                <option value='$type->customer_type_id'>$type->customer_type_desc</option>
                                "; 
                            }
                        ?> 
                    </select>
                </div>
                <div class="mb-3 mt-3">
                    <label for="customer-fiscal-code" class="form-label">Codigo fiscal</label>
                    <input type="text" class="form-control form-control-sm" id="customer-fiscal-code" name="customer-fiscal-code" placeholder="Ingresar codigo fiscal">
                </div>
                <div class="mb-3 mt-3">
                    <select class="form-select" name="customer-type">
                        <option selected disabled>Tipo de codigo fiscal</option>
                        <option value="1">Ingresos brutos</option>
                        <option value="2">Afip</option> 
                    </select>
                </div>
                <div class="mb-3 mt-3 d-grid gap-2">
                <button type="button" class="btn btn-outline-secondary btn-sm">Agregar codigo fiscal</button>
                </div>
            </div>  
        </div> 
        <div class="mb-3 mt-3 d-grid gap-2">
            <button type="submit" class="btn btn-outline-primary btn-sm" name="register-customer" >Registrar cliente</button>
        </div>
    </form>
</div> 
<?php require_once APP_ROUTE . '/main/view/components/bottom.php'?>