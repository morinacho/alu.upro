<?php require_once APP_ROUTE . '/main/view/components/top.php'?>
<div class="col-12 mt-4 row ms-0"> 
	<div class="col-12 mb-3">
        <?php 
            echo "
                <h4 class='mb-2'>". $param['user']->user_name ." " . $param['user']->user_lastname ." - <small>". $param['user']->user_type_desc."</small></h4> 
                <span class='material-icons'>phone</span>".$param['user']->user_phone ."
                <span class='material-icons'> email</span> ".$param['user']->user_email."
                <span class='material-icons'>place</span>".$param['user']->user_address."
            "; 
        ?>
	</div>
              
    <div class="card col-12 boxShadow ms-0 mt-2">
        <div class="card-body"> 
            <h5 class="card-title"></h5>
            <ul class="nav nav-tabs" id="myTab" role="tablist"> 
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="history-tab" data-bs-toggle="tab" data-bs-target="#history" type="button" role="tab">Ordenes de trabajo</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="notices-tab" data-bs-toggle="tab" data-bs-target="#notices" type="button" role="tab">Avisos</button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <?php   
                        require_once APP_ROUTE . '/customers/view/profile-history.php';
                        require_once APP_ROUTE . '/customers/view/profile-notices.php';
                ?> 
            </div> 
        </div> 
    </div>  
</div> 

<?php require_once APP_ROUTE . '/main/view/components/bottom.php'?>