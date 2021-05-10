<?php

session_start();
if (count($_POST) > 0) {
    $con = mysqli_connect('localhost', 'root', '', 'howtoorigami') or die('Unable To connect');
    $result = mysqli_query($con, "SELECT * FROM user WHERE username='" . $_POST["user"] . "' and password = '" . $_POST["pass"] . "'");
    $row  = mysqli_fetch_array($result);
    if (is_array($row)) {
        $_SESSION["id"] = $row['id'];
        $_SESSION["username"] = $row['username'];
    } else {
    }
}

if (isset($_SESSION["id"])) {
    header("Location:index.php");
} else {
}
?>

<!DOCTYPE html>
<html>
<!--Head Start-->

<head>
    <title>HowToOrigami | Sign</title>
    <link rel="shortcut icon" href="images\logo4.png" />
    <!--CSS Stylesheet-->
    <link rel="stylesheet" type="text/css" href="CSS\style-min.css">
    <!--CSS Registration Stylesheet-->
    <link rel="stylesheet" type="text/css" href="CSS\registrationstyle-min.css">
    <!--Media Query Stylesheet-->
    <link rel="stylesheet" type=text/css href="CSS\mediaquery-min.css">
    <!--JavaScript Sheet-->
    <script type="text/javascript" src="JavaScript\script.js"></script>
    <!--Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bubblegum+Sans&display=swap" rel="stylesheet">
    <!--Icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--Meta Tags-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script>
        document.addEventListener('DOMContentLoaded', function() {

            document.querySelector('#si').onclick = function() {
                var request = new XMLHttpRequest();
                var username = document.querySelector('#username').value;
                var password = document.querySelector('#password').value;
                var email = document.querySelector('#email').value;
                var string = "?username=" + username + "&password=" + password + "&email=" + email;
                request.open("POST", "signup.php" + string);
                request.onreadystatechange = function() {
                    if (this.readyState === 4 && this.status === 200) {
                        alert("Signin Success, Please Sign In")
                    }
                };
                request.send();
            }
        });
        document.addEventListener("DOMContentLoaded", function() {
            var d = new Date();
            var curr_date = d.getDate();
            var curr_month = d.getMonth() + 1; //months are zero based
            var curr_year = d.getFullYear();
            document.querySelector('.date').innerHTML = curr_date + "-" + curr_month + "-" + curr_year;
        });
    </script>
</head>
<!--Head End-->
<!--Body Start-->

<body>
    <!--Header Start-->
    <?php require 'headerNav.php' ?>
    <!--Header End-->
    <!--Signin/Signup Start-->
    <section class="transparent">

        <div class="login-wrap">

            <div class="login-html">
                <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign
                    In</label>
                <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign
                    Up</label>
                <div class="login-form">
                    <form action="registration.php" method="POST">
                        <div class="sign-in-htm">
                            <div class="group">
                                <label for="user" class="label">Username</label>
                                <input id="user" name="user" type="text" class="input">
                            </div>
                            <div class="group">
                                <label for="pass" class="label">Password</label>
                                <input autocomplete="off" id="pass" name="pass" type="pass" class="input" data-type="password">
                            </div>
                            <div class="group">
                                <button class="button" id="sq" value="Sign In">Sign In</button>
                            </div>
                        </div>
                    </form>
                    <div class="sign-up-htm">
                        <div class="group">
                            <label for="username" class="label">Username</label>
                            <input id="username" name="username" type="text" class="input">
                        </div>
                        <div class="group">
                            <label for="password" class="label">Password</label>
                            <input id="password" type="password" name="password" class="input" data-type="password">
                        </div>
                        <div class="group">
                            <label for="email" class="label">Email Address</label>
                            <input id="email" name="email" type="text" class="input">
                        </div>
                        <div class="group">
                            <button class="button" id="si" value="Sign Up">Signup</button>

                        </div>
                        <div class="foot-lnk">
                            <label for="tab-1">Already Member?</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>


    </section>
    <!--Signin/Signup Section End-->
</body>
<!--Body End-->

<!-- FOOTER START -->
<?php include 'footer.php'; ?>
<!-- END OF FOOTER -->


</html>