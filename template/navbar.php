<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php
    $pageTitle;
    $ifLogin;
    $position;
    include('config/css.php');
    include('config/js.php');
    ?>
</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="home.php">MentorMe</a>
            </div>
            <ul class="nav navbar-nav">
                <li
                    <?php if($pageTitle=='Home'){echo 'class="active"';} ?>
                ><a href="home.php">About</a></li>
                <?php if($ifLogin){ ?>
                <li
                    <?php if($pageTitle=='Dashboard'){echo 'class="active"';} ?>
                ><a href="dashboard.php">Dashboard</a></li>
                <li
                    <?php if($pageTitle=='Explore'){echo 'class="active"';} ?>
                ><a href="explore.php">Explore</a></li>
                <?php } ?>
            </ul>

            <ul class="nav navbar-nav navbar-right" style="height: auto">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Language<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">English</a></li>
                        <li><a href="#">Spanish</a></li>
                        <li><a href="#">Chinese</a></li>
                        <li><a href="#">Russian</a></li>
                        <li><a href="#">...</a></li>
                    </ul>
                </li>
            <?php
            if(!$ifLogin){
                ?>
                <li <?php if($pageTitle=='Sign Up'){echo 'class="active"';} ?>>
                    <a href="colorlib/index.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a>
                    <ul id="login" class="dropdown-menu">
                        <li>
                            <div class="row">
                                <div class="col-md-12">
                                    <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
                                        <div class="form-group">
                                            <label class="sr-only" for="exampleInputEmail">Email address</label>
                                            <input type="email" class="form-control" id="exampleInputEmail" placeholder="Email address" required>
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="exampleInputPassword">Password</label>
                                            <input type="password" class="form-control" id="exampleInputPassword" placeholder="Password" required>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                                        </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
            <?php
            }
            else{ ?>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXGLaNHGPQtprMAD4SHbcBDEkjRrAkFY-R5O_fDHgRFOWAPB4N" class="img-circle" style="height: 20px;padding: 0px; margin: 0px">
                    </a>
                    <ul id="login" class="dropdown-menu">
                        <li>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <a href="profile.php"><button type="button" class="btn btn-primary btn-block">Edit Profile</button></a>
                                        <br>
                                        <button type="button" class="btn btn-primary btn-block">Log Out</button>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
            <?php
            } ?>
        </div>
    </nav>
</body>
