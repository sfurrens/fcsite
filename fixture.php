<?php

$fixtures = get_fixtures(0, 8);
    
?>

<div class="sidebarbox">
    <div class="sidebarbox-title">
        <h3>Mängud</h3>
    </div>
    <!-- TABLE -->
    <div class="fixture-row">
        <?php
        
        foreach ($fixtures as &$fixture) {
            print('
               <a href="result.html">
                    <div class="fixture-row-left">'.$fixture['leftName'].'
                        <div>'.$fixture['leftScore'].'</div>
                    </div>
                    <div class="fixture-row-right">
                        <div>'.$fixture['rightScore'].'</div>'.$fixture['rightName'].'</div>
                </a>
            ');
        }
        
        ?>
    </div>
</div>