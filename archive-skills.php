<?php get_header(); ?>
<div class="container">

    <?php
    $args = array(
        "post_type" => "skills",
        "posts_per_page" =>  3

    );
    $query = new WP_Query($args);
    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();

    ?>
            <div class="post-item">

                <div class="row">
                    <div class="col-mid-6">
                    <a href="<?php echo get_the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
                        <progress value="<?php echo get_field("level"); ?>" max="100"> </progress>
                    </div>
                </div>
            </div>
    <?php
        }
    }
    ?>
</div>

<?php get_footer(); ?>