<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location:registration.php');
} else {
    $all = '<script>
    document.addEventListener("DOMContentLoaded", function() {
        var el = document.querySelector("#sig");
        var newEl = document.createElement("div");
        newEl.innerHTML ="Welcome<br>" + "Click here to <a href=logout.php>Logout.";
        el.parentNode.replaceChild(newEl, el);
    });
</script>';
    echo $all;
}
?>
<!DOCTYPE html>
<html>
<!--Head Start-->

<head>
    <title>HowToOrigami | Contact Us</title>
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

    <style>
        #sub {
            margin-right: 0;
            border: 0;
            padding: 10px 30px;
            border-radius: 25px;
            background-color: #0d0a3a;
            margin-left: 18em;
            margin-top: 1em;
            color: white
        }

        #sub:hover {
            background-color: #0d0a3a86;
            cursor: pointer
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function() {

            document.querySelector('#sub').onclick = function() {
                var request = new XMLHttpRequest();

                var full_name = document.querySelector('#full_name').value;
                var email = document.querySelector('#email').value;
                var city = document.querySelector('#city').value;
                var subject = document.querySelector('#subject').value;
                var message = document.querySelector('#message').value;
                var string = "?full_name=" + full_name + "&email=" + email + "&city=" + city + "&subject=" + subject + "&message=" + message;
                request.open("GET", "contacting.php" + string);
                request.onreadystatechange = function() {
                    if (this.readyState === 4 && this.status === 200) {
                        alert("You've Contacted Us Successfully! Thank you")
                        document.querySelector('#c').innerHTML = this.responseText;
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

    <!--Contact Section Start-->
    <section class="contact">
        <article>
            <h1>Contact HowToOrigami</h1>
            <p>If you have any feedback, comments, problems, ideas, and even suggestions, you can contact us in many
                ways. Below are our contact information along with a contact form to make the communication easier
                and faster.</p>
        </article>
        <!--Contact Information Start-->
        <h2>Contact information</h2>
        <ul>
            <li><i class="fa fa-phone"></i>Mobile Phone Number: 0790065654</li>
            <li id="li-2"><i class="fa fa-envelope-square"></i>Email Address: zayna.amierh2000@gmail.com</li>
        </ul>
        <!--Contact Information End-->
    </section>
    <!--Contact Section End-->
    <!--Contact Form Start-->
    <section class="transparent" id="contacting">
        <h2>Contact Form</h2>
        <p>Send Us a message:</p>
        <div class="contactmain">
            <div class="contact-form">
                <div class="row">
                    <div class="col-25">
                        <label for="full_name">Full Name</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="full_name" name="full_name" required placeholder="Your full name..">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="email">Email</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="email" name="email" required placeholder="Your email..">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="city">City</label>
                    </div>
                    <div class="col-75">
                        <select id="city" name="city">
                            <?php
                            $conn = mysqli_connect("localhost", "root", "", "howtoorigami");
                            if ($conn) {
                                $sql = "select * from city";
                                $result = mysqli_query($conn, $sql);
                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $city = $row["city"];
                                        $id = $row["id"];
                                        $all = "<option value='$city'>$city</option>";
                                        echo $all;
                                    }
                                } else {
                                    echo "error";
                                }
                                mysqli_close($conn);
                            }
                            ?>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="col-25">
                        <label for="subject">Subject</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="subject" required name="subject" placeholder="Subject..">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="message">Message</label>
                    </div>
                    <div class="col-75">
                        <textarea id="message" required name="message" placeholder="Write something.." style="height:200px"></textarea>
                    </div>
                </div>
                <div class="row">
                    <button id="sub">Submit</button>
                </div>
                <div id="c"></div>
            </div>
        </div>
    </section>
    <!--Contact Form End-->
    <!--Body End-->
    <!-- FOOTER START -->
    <?php include 'footer.php'; ?>
    <!-- END OF FOOTER -->

</html>