<div class="row mt-1">
    <div class="col-12">
        <p id="logo-title"><img src="<?php echo URL_ROUTE ?>media/system/icons/logo.png" /><br>Plataforma Web</p>
  <hr>
    </div>
    <div class="col-12">
----



<div class="accordion accordion-flush" id="menu-accodion">
    <?php
        foreach ($_SESSION['options'] as $option) {
            $dataBS = "data-bs-toggle='collapse' data-bs-target='#actions-". $option[0]->options_id ."'";
            echo "
                <div class='accordion-item'>
                    <h2 class='accordion-header' id='flush-headingOne'>
                        <button class='accordion-button collapsed' type='button'".$dataBS.">
                            <span class='material-icons'>".$option[0]->options_icon."</span>".$option[0]->options_desc."
                        </button>
                    </h2>
                    <div id='flush-collapseOne' class='accordion-collapse collapse' aria-labelledby='flush-headingOne' data-bs-parent='#accordionFlushExample'>
                        <div class='accordion-body'>Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                    </div>
                </div> 
            ";
        }
    ?>
</div>


----
        <ul class="accordion accordion-flush" id="menu-accodion">
            <?php
                foreach ($_SESSION['options'] as $option) {
                    $optionURL = "";
                    $dataBS = "data-bs-toggle='collapse' data-bs-target='#actions-". $option[0]->options_id ."'";
                    
                    if($option[0]->options_url != NULL){
                        $optionURL = URL_ROUTE . $option[0]->options_url;
                        $dataBS = "";
                    } 
                    echo"
                        <li class='accordion-item'>
                            <button   class='accordion-button collapsed' $dataBS>
                                <span class='material-icons'>".$option[0]->options_icon."</span>". $option[0]->options_desc ."
                            </button>
                    ";
                    if(!empty($option[1])){
                        echo "
                            <ul id='actions-". $option[0]->options_id ."' class='accordion-collapse collapse' data-bs-parent='#menu-accodion'>
                        ";
                        foreach($option[1] as $action){ 
                            echo "
                                <li><a href='". URL_ROUTE . $action->actions_url ."'>". $action->actions_desc ."</a></li>
                            "; 
                        }
                        echo "</ul>";
                    }
                    echo "</li>";
                } 
            ?>            
        </ul>
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