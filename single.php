<?php get_header(); ?>
<div class="container">

    <h1>Profile At Glance</h1>
    <hr>
    <div class="container">
        <?php
        $args = array(
            "post_type" => "post"
        );
        $query = new WP_Query($args);
        if ($query->have_posts()) {
            while ($query->have_posts()) {
                $query->the_post();
        ?>
                    <div class="row">
                        <div class="col-mid-6">
                            <p><?php the_content(); ?></p>
                        </div>
                    </div>

        <?php

            }
        }
        ?>
    </div>
</div>

<?php get_footer(); ?>