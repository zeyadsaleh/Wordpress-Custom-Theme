<?php get_header(); ?>
<div class="container">

    <?php
    if (have_posts()) {
        the_post();

    ?>
        <div class="post-item">
                <div class="row">
                    <div class="col">
                        <h2><strong><?php the_title(); ?></strong></h2>
                        <p><strong><?php echo get_field("faculty"); ?>, University Of <?php echo get_field("univeristy_"); ?></strong></p>
                        <div class="row">
                            <div class="col-6">
                                <p> <strong> Degree: <?php echo get_field("degree"); ?></strong></p>
                                <p> <strong> Major: <?php echo get_field("major"); ?></strong></p>

                            </div>
                            <div class="col-6 ">
                                <p> <strong> Year Of Graduation: <?php echo get_field("year_of_graduation"); ?></strong></p>
                                <p> <strong> General Grade: <?php echo get_field("general_grade"); ?></strong></p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
    <?php
    }
    ?>
</div>

<?php get_footer(); ?>