<?php

while (have_posts()) {
    the_post();
    ?>
    <div>
        <h3>
            <?php the_title() ?>
        </h3>
        <div class="content">
            <?php the_content() ?>
        </div>
    </div>
    <?php
}