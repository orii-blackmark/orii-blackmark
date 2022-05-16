<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Animated login page</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet" />
</head>

<body>
    <div id="container" class="container">
        <!--FORM SECTION-->
        <div class="row">
            <!--SIGN UP-->

            <div class="col align-items-centre flex-col sign-up">
                <div class="form-wrapper align-items-centre">
                    <div class="form sign-up">
                        <form name="main" action="signup.php" method="post" onsubmit="return validate()">
                            <div class="input-group">
                                <i class="bx bxs-user"></i>
                                <input type="text" name="username" id="" placeholder="Username" />
                            </div>
                            <div class="input-group">
                                <i class="bx bx-mail-send"></i>
                                <input type="email" name="email" id="" placeholder="Email" />
                            </div>
                            <div class="input-group">
                                <i class="bx bxs-lock-alt"></i>
                                <input type="password" name="password" id="" placeholder="Password" />
                            </div>
                            <div class="input-group">
                                <i class="bx bxs-lock-alt"></i>
                                <input type="password" name="cpassword" placeholder="Confirm Password" />
                            </div>
                            <button type="submit">Sign up</button>
                            <p>
                                <span> Already have an account? </span>
                                <b onclick="toggle()" class="pointer"> sign in here </b>
                            </p>
                        </form>
                    </div>
                </div>
                <div class="form-wrapper">
                    <div class="social-list align-items-centre">
                        <div class="align-items-centre facebook-bg">
                            <i class="bx bxl-facebook"></i>
                        </div>
                        <div class="align-items-centre google-bg">
                            <i class="bx bxl-google"></i>
                        </div>
                        <div class="align-items-centre twitter-bg">
                            <i class="bx bxl-twitter"></i>
                        </div>
                        <div class="align-items-centre insta-bg">
                            <i class="bx bxl-instagram-alt"></i>
                        </div>
                    </div>
                </div>
            </div>
            <!--END SIGN UP-->
            <!--SIGN IN-->
            <?php
include 'login.php';
?>
            <div class="col align-items-centre flex-col sign-in">
                <div class="form-wrapper align-items-centre">
                    <div class="form sign-in">
                        <form action="" method="post">
                            <div class="input-group">
                                <i class="bx bxs-user"></i>
                                <input type="text" name="" id="" placeholder="Username" required />
                            </div>
                            <div class="input-group">
                                <i class="bx bxs-lock-alt"></i>
                                <input type="password" name="" id="" placeholder="Password" required />
                            </div>
                            <button type="submit">Sign in</button>
                            <p>
                                <b> Forgot password? </b>
                            </p>
                            <p>
                                <span> Don't have an account? </span>
                                <b onclick="toggle()" class="pointer"> sign up here </b>
                            </p>
                        </form>
                    </div>
                </div>
                <div class="form-wrapper">
                    <div class="social-list align-items-centre">
                        <div class="align-items-centre facebook-bg">
                            <i class="bx bxl-facebook"></i>
                        </div>
                        <div class="align-items-centre google-bg">
                            <i class="bx bxl-google"></i>
                        </div>
                        <div class="align-items-centre twitter-bg">
                            <i class="bx bxl-twitter"></i>
                        </div>
                        <div class="align-items-centre insta-bg">
                            <i class="bx bxl-instagram-alt"></i>
                        </div>
                    </div>
                </div>
            </div>
            <!--END SIGN IN-->
        </div>
        <!--END FORM SECTION-->
        <!--CONTENT SECTION-->
        <div class="row content-row">
            <!--SIGN IN CONTENT-->
            <div class="col align-items-centre flex-col">
                <div class="text sign-in">
                    <h2>Welcome back</h2>
                    <p>
                        Blackmark tech industries is an IT based company that provides
                        solutions to problems of modern world.We are pleased that you join
                        us in making world a better place.
                    </p>
                    <div class="img sign-in">
                        <img src="undraw_login_re_4vu2.svg" alt="welcome" />
                    </div>
                </div>
            </div>
            <!--END SIGN IN CONTENT-->
            <!--SIGN UP CONTENT-->
            <div class="col align-items-centre flex-col">
                <div class="img sign-up">
                    <img src="undraw_login_re_4vu2.svg" alt="welcome" />
                </div>
                <div class="text sign-up">
                    <h2>join with us</h2>
                    <p>
                        Blackmark tech industries is an IT based company that provides
                        solutions to problems of modern world.We are pleased that you join
                        us in making world a better place.
                    </p>
                </div>
            </div>
            <!--END SIGN UP CONTENT-->
        </div>
        <!--END CONTENT SECTION-->
    </div>
    <script src="index.js"></script>
</body>

</html>