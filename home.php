<?php //include('config/setup.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>
        <?php
        $pageTitle = 'Home';
        $ifLogin = FALSE;
        echo 'MM | '. $pageTitle;
        ?>
    </title>
</head>
<body>
    <?php include('template/navbar.php'); ?>
    <div class="container text-center">
        <h1>MentorMe</h1>
        <h4>We believe that creating a supportive social and academic environment is the first step towards achieving equality in education and the workplace. Mentor Me empowers users from diverse backgrounds to connect with mentors and build meaningful relationships that will inspire and motivate.</h4>
        <br>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">

                <div class="item active">
                    <img class src="https://images.unsplash.com/photo-1525078459500-9e1a0dd292ab?ixlib=rb-1.2.1&ixid=eyJh" alt="arrival">

                </div>

                <div class="item">
                    <img src="https://images.unsplash.com/photo-1492538368677-f6e0afe31dcc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2250&q=80" alt="cat">

                </div>

                <div class="item">
                    <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-1.2.1&auto=format&fit=crop&w=2250&q=80" alt="pattern">

                </div>

                <div class="item">
                    <img src="https://images.unsplash.com/photo-1522881193457-37ae97c905bf?ixlib=rb-1.2.1&auto=format&fit=crop&w=1650&q=80 " alt="tree">

                </div>

            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/jquery-ui/jquery-ui.min.js"></script>
    <script src="vendor/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="vendor/jquery-validation/dist/additional-methods.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>