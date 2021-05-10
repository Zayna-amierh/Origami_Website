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

    <title>HowToOrigami | Details</title>
    <link rel="shortcut icon" href="images\logo4.png" />
    <!--CSS Stylesheet-->
    <link rel="stylesheet" type="text/css" href="CSS\style-min.css">
    <!--Media Query Stylesheet-->
    <link rel="stylesheet" type=text/css href="CSS\mediaquery-min.css">
    <!--JavaScript Sheet-->
    <script type="text/javascript" src="JavaScript\script.js"></script>
    <!--Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Bubblegum+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@500&display=swap" rel="stylesheet">
    <!--Icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--Meta Tag-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        h1,
        a {
            text-transform: capitalize;
        }
    </style>
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
    <!--Side Navigation Start-->
    <aside class="sidenav">
        <ul>
            <li><a href="items.php#Animals">Animals</a>
                <ul>
                    <?php
                    $conn = mysqli_connect("localhost", "root", "", "howtoorigami");
                    if ($conn) {
                        $select = "select * from item where categoryID=1";
                        $result = mysqli_query($conn, $select);
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                $id = $row["id"];
                                $alt = $row["alt"];
                                $description = $row["description"];
                                $categoryID = $row["categoryID"];
                                $li = "<li><a href='itemDetails.php?id=$id'>$alt Origami</a></li>";
                                echo $li;
                            }
                        }
                    } else {
                        echo "problem";
                    }
                    ?>
                </ul>
            </li>
            <li><a href="items.php#Flowers">Flowers</a>
                <ul>
                    <?php
                    if ($conn) {
                        $select = "select * from item where categoryID=2";
                        $result = mysqli_query($conn, $select);
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                $id = $row["id"];
                                $alt = $row["alt"];
                                $description = $row["description"];
                                $categoryID = $row["categoryID"];
                                $li = "<li><a href='itemDetails.php?id=$id'>$alt Origami</a></li>";
                                echo $li;
                            }
                        }
                    } else {
                        echo "problem";
                    }
                    ?>
                </ul>
            </li>
            <li><a href="items.php#Occasion">Ocassions & Packaging</a>
                <ul>
                    <?php
                    if ($conn) {
                        $select = "select * from item where categoryID=3";
                        $result = mysqli_query($conn, $select);
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                $id = $row["id"];
                                $alt = $row["alt"];
                                $description = $row["description"];
                                $categoryID = $row["categoryID"];
                                $li = "<li><a href='itemDetails.php?id=$id'>$alt Origami</a></li>";
                                echo $li;
                            }
                        }
                    } else {
                        echo "problem";
                    }
                    ?>
                </ul>
            </li>
            <li><a href="items.php#Toys">Toys & Games</a>
                <ul>
                    <?php
                    if ($conn) {
                        $select = "select * from item where categoryID=4";
                        $result = mysqli_query($conn, $select);
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                $id = $row["id"];
                                $alt = $row["alt"];
                                $description = $row["description"];
                                $categoryID = $row["categoryID"];
                                $li = "<li><a href='itemDetails.php?id=$id'>$alt Origami</a></li>";
                                echo $li;
                            }
                        }
                    } else {
                        echo "problem";
                    }
                    ?>

                </ul>
            </li>
        </ul>
    </aside>
    <!--Side navigation End-->
    <!--Origami Instruction Section Start-->

    <section class="items">
        <?php
        if ($conn) {
            if (isset($_GET['id'])) {
                $id = mysqli_real_escape_string($conn, $_GET['id']);
                $select = "select * from item where id='$id'";
                $result = mysqli_query($conn, $select);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $alt = $row["alt"];
                        $description = $row["description"];
                        $all = "<h1>$alt Origami Instructions</h1>
                <p>$description</p>";
                        echo $all;
                    }
                } else {
                    echo "IDK problem";
                }
            }
        } else {
            echo "PROBLEM";
        }

        ?>
        <div class=" main">
            <ul class="cards">
                <?php
                if ($conn) {
                    if (isset($_GET['id'])) {
                        $id = mysqli_real_escape_string($conn, $_GET['id']);
                        $sql = "select * from item_detail WHERE item_id='$id';";
                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                $image = $row["image"];
                                $step_num = $row["step_num"];
                                $step_info = $row["step_info"];
                                $all = "<li class='cards_item'>
                            <div class='card'>
                                <div class='card_image'><img src='$image' alt='$step_num'></div>
                                <div class='card_content'>
                                    <h2 class='card_title'><b>Step $step_num</b></h2>
                                    <p class='card_text'> $step_info
                                    </p>
                                </div>
                            </div>
                        </li>";

                                echo $all;
                            }
                        } else {
                            echo "Fail";
                        }
                    }
                }
                ?>
            </ul>
        </div>
    </section>
    <!--Origami Instruction Section End-->
    <!--Note Start-->
    <section class="items">
        <p>
            We are always looking for something new, special and unique. Send us a message if you have any new ideas
            and we will be sure to share it.
        </p>
    </section>
    <!--Note End-->
</body>
<!--Body End-->
<!-- FOOTER START -->
<?php include 'footer.php'; ?>
<!-- END OF FOOTER -->

</html>