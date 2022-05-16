<div class="row mt-1">
    <div class="col-12">
        <p id="logo-title"><img src="<?php echo URL_ROUTE ?>media/system/icons/logo.png" /><br>Plataforma Web</p>
        <hr>
    </div>
    <div class="col-12"> 
        <div class="accordion accordion-flush" id="menu-accordion">
            <?php 
                foreach ($_SESSION['options'] as $option) { 
                    $dataBS = "data-bs-toggle='collapse' data-bs-target='#actions-". $option['options']->options_id ."'";
                    echo "
                        <div class='accordion-item'>
                            <h2 class='accordion-header' id='".$option['options']->options_id."'>
                                <button class='accordion-button collapsed' type='button' ".$dataBS.">
                                    <span class='material-icons'>".$option['options']->options_icon."</span>".$option['options']->options_desc."
                                </button>
                            </h2>"; 
                        foreach($option['actions'] as $action){  
                            echo "
                                <div id='actions-".$option['options']->options_id."' class='accordion-collapse collapse' aria-labelledby='flush-headingOne' data-bs-parent='#menu-accordion'>
                                    <div class='accordion-body'>
                                    $action->actions_desc
                                    </div>
                                </div>";
                        }
                    echo"            
                        </div> 
                    ";
                }
            ?>
        </div>
    </div>
    <div class="col-12">
        <hr>
        <a href="<?php echo URL_ROUTE ?>auth/logout">
            <div class="d-grid ap-2   mx-auto">
                <button type="button" class="btn btn-secondary btn-sm">
                    <span class="material-icons">exit_to_app</span>
                    <span>Logout</span>
                </button>
            </div>
        </a> 
    </div>
    
</div>