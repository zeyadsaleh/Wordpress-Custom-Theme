<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio</title>
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <div class="container-fluid  bg-dark mb-5">
            <nav class="navbar navbar-expand-lg navbar-dark bg-transparent">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto mr-auto">

                    </ul>

                </div>


                <?php
                wp_nav_menu(
                    array(
                        "theme_location" => "top-nav",
                        "menu_class" => "navbar-nav ",
                        "container_class" => "collapse navbar-collapse",
                        "container_id" => "navbarSupportedContent",
                    )
                );
                ?>
            </nav>
        </div>


    </header>