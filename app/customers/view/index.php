<?php require_once APP_ROUTE . '/main/view/components/top.php'?>
<!-- principal content-->
<div class="col-12 mt-4 row ms-0"> 
	<div class="col-7 mb-3">
		<h4>Clientes</h4>
	</div>
	<form action="" class="col-5">
		<div class="input-group">
			<input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Buscar cliente">
			<div class="input-group-text material-icons">search</div>
		</div>
	</form>
	
	<div class="card col-12 boxShadow">
		<div class="card-body "> 
			<h5 class="card-title"></h5>
			<table class="table table-striped">
				<thead>
					<tr>
					<th scope="col">DNI</th>
					<th scope="col">Nombre y Apellido</th>
					<th scope="col">Teléfono</th>
					<th scope="col">Mail</th>
					<th scope="col">Editar</th>
					</tr>
				</thead>
				<tbody>
					<?php  
						foreach ($param["customers"] as $customer){ 
							echo "
								<tr>
									<th scope='row'>$customer->client_document</th>
									<td><a href=' ".URL_ROUTE."customers/show/$customer->client_document'>$customer->client_name $customer->client_lastname</a></td>
									<td>$customer->client_phone</td>
									<td>$customer->client_email</td>
									<td><a href=' ".URL_ROUTE."customers/edit/$customer->client_document' class='material-icons'>editar</a></td>
								</tr>
							"; 
						}
				    ?>
				</tbody>
			</table>
		</div> 
	</div> 
</div> 
<?php require_once APP_ROUTE . '/main/view/components/bottom.php'?>