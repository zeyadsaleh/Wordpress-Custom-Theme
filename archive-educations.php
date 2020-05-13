<?php get_header(); ?>

<div class="container">

    <?php
    $args = array(
        "post_type" => "educations",
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
                        <h2><strong><?php the_title(); ?></strong></h2>
                        <p><strong><?php echo get_field("faculty"); ?>, University Of <?php echo get_field("univeristy_"); ?></strong></p>
                        <a  href="<?php echo get_the_permalink(); ?>" class="btn btn-secondary btn-sm active" role="button" aria-pressed="true">See More</a>

                    </div>
                </div>
            </div>
    <?php
        }
    }
    ?>
</div>

<?php get_footer(); ?>