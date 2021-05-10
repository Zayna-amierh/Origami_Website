<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location:registration.php');
} else {
    $str = $_SESSION["username"];
    $all = '<script>
    document.addEventListener("DOMContentLoaded", function() {
        var el = document.querySelector("#sig");
        var newEl = document.createElement("div");
        newEl.innerHTML ="Welcome <br>" + "Click here to <a href=logout.php>Logout.";
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
    <title>HowToOrigami | About Us</title>
    <link rel="shortcut icon" href="images\logo4.png" />
    <!--CSS Stylesheet-->
    <link rel="stylesheet" type="text/css" href="CSS\style-min.css">
    <!--Media Query Stylesheet-->
    <link rel="stylesheet" type=text/css href="CSS\mediaquery-min.css">
    <!--JavaScript Sheet-->
    <script type="text/javascript" src="JavaScript\script.js"></script>
    <!--Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bubblegum+Sans&display=swap" rel="stylesheet">
    <!--Icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--Meta Tag-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script>
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

    <!--About Section Start-->
    <section class="card">
        <article id="aboutPage">
            <h1>About HowToOrigami</h1>
            <p>
                HowToOrigami focuses on giving the most simple and convenient instructions to creating a vast
                variety of
                Origami whether it is an animal or flower you want to make or if you want to make a suprise to an
                occassion that is coming up close.
            </p>
            <p>
                HowToOrigami is intended to using the equipment and supplies any household may have such as paper,
                newspapers, colours, scissors, glue or any other supplies you may have.
            </p>
            <p>
                Regardless of your age, whether 3 or 80 +, this is suitable for all ages. Just by using some
                creativity
                and imagination, you will be able to release your hidden talent of creating something great and out
                of
                this world.
            </p>
        </article>
    </section>
    <!--About Section End-->
</body>
<!--Body End-->
<!-- FOOTER START -->
<?php include 'footer.php'; ?>
<!-- END OF FOOTER -->

</html>