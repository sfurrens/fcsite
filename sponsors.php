<?php

$sponsors = get_sponsors();

?>

<div class="logos-title">Sponsors</div>
<!-- SPONSORS SLIDER -->
<section class="transparent-bg">
    <div id="logos">
        <?php
        
        foreach ($sponsors as &$sponsor) {
            print('
                <div class="slide">
                    <a href="'.$sponsor['link'].'">
                        <img src="'.$sponsor['imagePath'].'" alt="'.$sponsor['name'].'" />
                    </a>
                </div>
            ');
        }
        ?>
    </div>
</section>