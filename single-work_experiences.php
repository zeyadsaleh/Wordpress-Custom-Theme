<?php get_header(); ?>
<div class="container">

    <?php
    if (have_posts()) {
        the_post();

    ?>
        <div class="post-item">

            <div class="row">
                <div class="col-mid-6">
                    <center>
                        <h2><?php the_title(); ?></h2>
                    </center>
                    <div class="row">
                        <div class="col-6">
                            <p id="date"><strong><?php echo get_field("start_date"); ?> - <?php echo get_field("end_time"); ?></strong></p>
                        </div>
                        <div class="col-6 ml-auto ">
                            <p id="company"> <strong><?php echo get_field("company_name"); ?></strong></p>
                            <p id="role"><strong><?php echo get_field("role"); ?></strong></p>
                            <p> <?php echo get_field("descreption"); ?></p>
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