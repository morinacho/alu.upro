<?php require_once APP_ROUTE . '/main/view/components/top.php';?> 

	<!-- Title -->
	<div class="col-12 row mt-3 justify-content-around">
		<div class="col-12">
			<h4>Alumnos</h4>
		</div>
	</div>
    <!-- Enroll Form -->
    <ul class="nav nav-tabs mt-3" id="enroll-tab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="personal-tab" data-bs-toggle="tab" data-bs-target="#personal" type="button" role="tab">Datos Personales</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="academic-tab" data-bs-toggle="tab" data-bs-target="#academic" type="button" role="tab">Datos Académico</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="relatives-tab" data-bs-toggle="tab" data-bs-target="#relatives" type="button" role="tab">Datos de Familiares</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="health-tab" data-bs-toggle="tab" data-bs-target="#health" type="button" role="tab">Datos de Salud</button>
        </li>
    </ul>
    <div class="tab-content" id="enrollTabContent">
        <div class="tab-pane fade show active" id="personal" role="tabpanel">Personales</div>
        <div class="tab-pane fade" id="academic" role="tabpanel">Academico</div>
        <div class="tab-pane fade" id="relatives" role="tabpanel">Familiares</div>
        <div class="tab-pane fade" id="health" role="tabpanel">Salud</div>
    </div>

	<!-- Tables -->
	<div class="col-12 mt-4">
		<div class="card boxShadow">
			<div class="card-header">
				Alumnos inscriptos
			</div>
			<div class="card-body">
				<table class="table table-striped">
					<thead>
						<tr>
						<th scope="col">#</th>
						<th scope="col">First</th>
						<th scope="col">Last</th>
						<th scope="col">Handle</th>
						</tr>
					</thead>
					<tbody>
						<tr>
						<th scope="row">1</th>
						<td>Mark</td>
						<td>Otto</td>
						<td>@mdo</td>
						</tr>
						<tr>
						<th scope="row">2</th>
						<td>Jacob</td>
						<td>Thornton</td>
						<td>@fat</td>
						</tr>
						<tr>
						<th scope="row">3</th>
						<td colspan="2">Larry the Bird</td>
						<td>@twitter</td>
						</tr>
					</tbody>
				</table> 
			</div>
		</div>
	</div>
<?php require_once APP_ROUTE . '/main/view/components/bottom.php'?>
