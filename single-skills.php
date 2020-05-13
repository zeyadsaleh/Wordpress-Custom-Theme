<?php get_header(); ?>
<div class="container">

    <?php
    if (have_posts()) {
        the_post();

    ?>
        <div class="post-item">

            <div class="row">
                <?php the_post_thumbnail("medium"); ?>
                <div class="col-mid-6">
                    <h3><?php the_title(); ?></h3>
                    <progress value="<?php echo get_field("level"); ?>" max="100"> </progress>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
</div>

<?php get_footer(); ?>