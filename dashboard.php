<?php
/**
 * Created by PhpStorm.
 * User: jennifer
 * Date: 1/12/19
 * Time: 4:26 PM
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>
        <?php
        $pageTitle = 'Dashboard';
        $ifLogin = TRUE;
        $position = 'both';
        echo 'MM | '. $pageTitle;
        ?>
    </title>
</head>
<body>
    <?php include('template/navbar.php'); ?>
    <div class="container-fluid text-center">
        <div class="row content">
            <div class="col-sm-2 sidenav"></div>
            <div class="col-sm-8 text-left">
                <div class="container-fluid text-center bg-grey">
                    <h2>Volunteer Hours</h2>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="70"
                             aria-valuemin="0" aria-valuemax="100" style="width:70%">
                            23 hr
                        </div>
                    </div>
                </div>
                <hr>
                <div class="container-fluid text-center bg-grey">
                    <h2>Mentor</h2>
                    <div class="row text-center">
                        <div class="col-sm-4">
                            <div class="thumbnail">
                                <img src="https://thumbs.imagekind.com/4472005_650/Meercat-_art.jpg?v=1492695725" alt="Paris">
                                <p><strong>Surendra Floro</strong></p>
                                <div>
                                    <button type="button" class="btn btn-default" aria-label="Left Align">
                                        <span class="glyphicon glyphicon-comment"></span>
                                    </button>
                                    <button type="button" class="btn btn-default" aria-label="Left Right">
                                        <a href="detail.php"><span class="glyphicon glyphicon-info-sign"></span></a>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="thumbnail">
                                <img src="http://4.bp.blogspot.com/-XgK3yGJxxhg/TixFlXQuTJI/AAAAAAAABW4/LZs_AVMk6PA/s1600/DSC_0336.JPG" alt="New York">
                                <p><strong>Nicostratus Hanan</strong></p>
                                <div>
                                    <button type="button" class="btn btn-default" aria-label="Left Align">
                                        <span class="glyphicon glyphicon-comment"></span>
                                    </button>
                                    <button type="button" class="btn btn-default" aria-label="Left Right">
                                        <a href="url"><span class="glyphicon glyphicon-info-sign"></span></a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                <hr>
                    <div class="container-fluid text-center bg-grey">
                        <h2>Mentee</h2>
                        <div class="row text-center">
                            <div class="col-sm-4">
                                <div class="thumbnail">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXGLaNHGPQtprMAD4SHbcBDEkjRrAkFY-R5O_fDHgRFOWAPB4N" alt="Paris">
                                    <p><strong>Manlio Xochipilli</strong></p>
                                    <div>
                                        <button type="button" class="btn btn-default" aria-label="Left Align">
                                            <span class="glyphicon glyphicon-comment"></span>
                                        </button>
                                        <button type="button" class="btn btn-default" aria-label="Left Right">
                                            <a href="url"><span class="glyphicon glyphicon-info-sign"></span></a>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="thumbnail">
                                    <img src="http://4.bp.blogspot.com/-iifu3rlHrhI/UuH6KGtXgnI/AAAAAAAAA7I/is5RL3qAykw/s1600/OMG-Trivia-11-15-11.jpg" alt="New York">
                                    <p><strong>Libbie Elenora<</strong></p>
                                    <div>
                                        <button type="button" class="btn btn-default" aria-label="Left Align">
                                            <span class="glyphicon glyphicon-comment"></span>
                                        </button>
                                        <button type="button" class="btn btn-default" aria-label="Left Right">
                                            <a href="url"><span class="glyphicon glyphicon-info-sign"></span></a>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="thumbnail">
                                    <img src="http://profilepicturesdp.com/wp-content/uploads/2018/07/funny-animal-profile-pictures-14.jpg" alt="San Francisco">
                                    <p><strong>Amore Feivel</strong></p>
                                    <div>
                                        <button type="button" class="btn btn-default" aria-label="Left Align">
                                            <span class="glyphicon glyphicon-comment"></span>
                                        </button>
                                        <button type="button" class="btn btn-default" aria-label="Left Right">
                                            <a href="url"><span class="glyphicon glyphicon-info-sign"></span></a>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
            </div>
            <div class="col-sm-2 sidenav"></div>
        </div>
    </div>
</body>