<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>
        <?php
        $pageTitle = 'Detail';
        $ifLogin = TRUE;
        $status = 'mentor';
        echo 'MM | '. $pageTitle;
        ?>
    </title>
    <style>
        .bg-1 {
             background-color: rgba(26, 147, 111, 0.8); /* Green */
             color: #ffffff;
         }
        .bg-2 {
            background-color: rgba(36, 95, 138, 0.8); /* Green */
            color: #ffffff;
        }
    </style>
</head>
<body>
<?php include('template/navbar.php'); ?>
    <div class="container text-center">
        <body>
        <div class="container-fluid bg-1 text-center">
            <h3>Surendra Floro</h3>
            <img src="https://thumbs.imagekind.com/4472005_650/Meercat-_art.jpg?v=1492695725" alt="Bird">
            <h4>Mentor and Mentee</h4>
        </div>
        <div class="container-fluid bg-2 text-center">
            <h4>Studies at X University</h4>
            <h4>1 mentees</h4>
            <h4>2 mentors</h4>
        </div>
        <div class="container-fluid bg-2 text-center">
            <br>
            <img style="width: 50%; padding-bottom: 40px" src="https://images.all-free-download.com/images/graphiclarge/simple_world_maps_vector_578783.jpg" alt="Bird">
            <br>
        </div>
        </body>
    </div>
</body>
</html>