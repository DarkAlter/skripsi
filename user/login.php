<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="INSPIRO" />
    <meta name="description" content="Themeforest Template Polo">
    <!-- Document title -->
    <title>Login Dak Dak Distributor System</title>
    <!-- Stylesheets & Fonts -->
    <link href="css/plugins.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Body Inner -->
    <div class="body-inner">
        <!-- Section -->
        <section class="fullscreen" data-bg-parallax="images/bg1.jpg">
            <div class="container">
                <div>
                    <div class="text-center m-b-30">
                        <a href="index.php" class="logo">
                          
                            
                        </a>
                    </div>
                    <div class="row">  
                        <div class="col-lg-5 center p-50 background-white b-r-6">
                         <center>  <img src="images/logo.jpeg" style="width:40%" alt="Polo Logo"> </center>  
                         <?php
                        if (empty($_GET['alert'])) {
                            echo "";
                        } 

                        elseif ($_GET['alert'] == 1) {
                            echo "<div class='alert alert-danger alert-dismissable'>
                                    <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                                    <h4>  <i class='icon fa fa-times-circle'></i> Login Failed!</h4>
                                    Username atau Password salah, cek kembali Username dan Password Anda.
                                </div>";
                        }
                        elseif ($_GET['alert'] == 2) {
                            echo "<div class='alert alert-success alert-dismissable'>
                                    <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                                    <h4>  <i class='icon fa fa-check-circle'></i> Success!</h4>
                                    Anda telah berhasil logout.
                                </div>";
                        }
                    ?>
                            <h3>Login to your Account</h3>
                            <form action="proses/prosesLogin.php" method="POST">
                                <div class="form-group">
                                    <label class="sr-only">Username or Email</label>
                                    <input type="text" name="email" class="form-control" placeholder="Username or Email">
                                </div>
                                <div class="form-group m-b-5">
                                    <label class="sr-only">Password</label>
                                    <input type="password" name="pass" class="form-control" placeholder="Password">
                                </div>
                                <div class="form-group form-inline text-left">
                                    <div class="form-check">
                                        <label>
                                            <input type="checkbox"><small class="m-l-10"> Remember me</small>
                                        </label>
                                    </div>
                                </div>
                                <div class="text-left form-group">
                                    <input type="submit" value="Login" class="btn"></button>
                                </div>
                            </form>
                            <p class="small">Don't have an account yet? <a href="register.php">Register New Account</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end: Section -->
    </div>
    <!-- end: Body Inner -->
    <!-- Scroll top -->
    <a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>
    <!--Plugins-->
    <script src="js/jquery.js"></script>
    <script src="js/plugins.js"></script>
    <!--Template functions-->
    <script src="js/functions.js"></script>
</body>

</html>