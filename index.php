
<!-- mlhash lazma :D -->

<?php get_header(); ?>
<section class="posts m-3">
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
                        <p><?php echo substr(get_the_content(), 0, 200); ?> ... </p>
                        <button type="button" class="btn btn-secondary btn-sm"><a href="<?php echo get_the_permalink(); ?>">See More</a></button>

                    </div>
                </div>
        <?php

            }
        }
        ?>
    </div>
</section>

<hr style=" border: 1px solid">

<section class="posts m-3">
    <h1>Skills</h1>
    <hr>
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
                            <a href="<?php echo get_the_permalink(); ?>">
                                <h3><?php the_title(); ?></h3>
                            </a>
                            <progress value="<?php echo get_field("level"); ?>" max="100"> </progress>
                        </div>
                    </div>
                </div>
        <?php
            }
        }
        ?>
    </div>
</section>

<hr style=" border: 1px solid">


<section class="posts m-3">
    <h1>Education</h1>
    <hr>
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
                            <a href="<?php echo get_the_permalink(); ?>" class="btn btn-secondary btn-sm active" role="button" aria-pressed="true">See More</a>

                        </div>
                    </div>
                </div>
        <?php
            }
        }
        ?>
    </div>
</section>


<hr style=" border: 1px solid">

<section class="work-experience m-3">
    <h1>Work Experiences</h1>
    <hr>
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
                                    <a href="<?php echo get_the_permalink(); ?>" class="btn btn-secondary btn-sm active" role="button" aria-pressed="true">See More</a>
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

</section>

<?php get_footer(); ?>

