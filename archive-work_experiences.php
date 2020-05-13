<?php get_header(); ?>
<div class="container">

    <?php
    $args = array(
        "post_type" => "work_experiences",
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
                        <center>
                            <h2><strong><?php the_title(); ?></strong></h2>
                        </center>
                        <div class="row">
                            <div class="col-6">
                                <p id="date"><strong><?php echo get_field("start_date"); ?> - <?php echo get_field("end_time"); ?></strong></p>
                            </div>
                            <div class="col-6 ml-auto ">
                                <p id="company"> <strong><?php echo get_field("company_name"); ?></strong></p>
                                <p id="role"><strong><?php echo get_field("role"); ?></strong></p>
                                <p><?php echo substr(get_field("descreption"), 0, 200); ?> ... </p>
                                <a  href="<?php echo get_the_permalink(); ?>" class="btn btn-secondary btn-sm active" role="button" aria-pressed="true">See More</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
    <?php
        }
    }
    ?>
</div>

<?php get_footer(); ?>