<?php require_once APP_ROUTE . '/main/view/components/top.php';?>
<!-- principal content-->
<div class="col-12 mt-4 row ms-0"> 
	<div class="col-7 mb-3">
		<h4>Recursos</h4>
	</div>
	<form action="" class="col-5">
		<div class="input-group">
			<input type="text" class="form-control" id="search-users" name="search-users" placeholder="Buscar recurso">
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
						foreach ($param["users"] as $user){ 
							echo "
								<tr>
									<th scope='row'>$user->user_document</th>
									<td><a href='".URL_ROUTE."users/show/$user->user_document'>$user->user_name $user->user_lastname</a></td>
									<td>$user->user_phone</td>
									<td>$user->user_email</td>
									<td><a href='".URL_ROUTE."users/edit/$user->user_document' class='material-icons'>edit</a></td>
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