<?php require_once APP_ROUTE . '/main/view/components/top.php';?> 

<!-- Title -->
<div class="col-12 row mt-3 justify-content-around">
    <div class="col-12">
        <h4>Cuentas de usuarios</h4>
    </div>
</div>  

<div class="col-12 row mt-3 justify-content-between">
    <div class="col-5 input-group mb-3">
        <div class="btn-group" id="account-users-button">
            <a href="#" class="btn material-icons" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Agregar nuevo usuario">person_add</a>
            <a href="#"  class="btn material-icons" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Reordenar">sort_by_alpha</a>
            <a href="#"  class="btn material-icons" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Filtrar">filter_list</a>
        </div>
    </div>
    <!-- Search bar-->
    <div class="col-5 input-group mb-3">
        <input type="text" class="form-control" placeholder="Buscar usuario" aria-label="Recipient's username" aria-describedby="button-addon2">
        <button class="btn btn-outline-secondary material-icons" type="button" id="button-addon2">search</button>
    </div>
</div>

<div class="col-12 mt-4">
    <div class="card boxShadow">
        <div class="card-header">
            Usuarios registrados
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
