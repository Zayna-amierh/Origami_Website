<?php
session_start();
if(!isset($_SESSION['username'])){
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

    <title>HowToOrigami | Categories</title>
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
    <!--Meta Tags-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
      h1, a {
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
}
);
  </script>
    
</head>
<!--Head End-->

<!--Body Start-->

<body>
    <!--Header Start-->
    <?php require 'headerNav.php'?>
    <!--Header End-->
    <aside class="sidenav">
        <ul>
            <li><a href="#Animals">Animals</a>
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
            <li><a href="#Flowers">Flowers</a>
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
            <li><a href="#Occasion">Ocassions & Packaging</a>
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
            <li><a href="#Toys">Toys & Games</a>
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
                        mysqli_close($conn);
                    }
                    ?>
                    
                </ul>
            </li>
        </ul>
    </aside>

    <!--Animal Origami Selection Start-->
    <?php
    $conn = mysqli_connect("localhost", "root", "", "howtoorigami");
    ?>
    <section id="Animals" class="items">
        <div class="main">

            <?php
            if ($conn) {
                $select = "select * from category where id=1";
                $result = mysqli_query($conn, $select);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $category = $row["category"];
                        $info = $row["info"];
                        $all = "<h1 id='$category'>$category</h1>
                        <p>$info</p>";
                        echo $all;
                    }
                }
            } else {
                echo "problem";
            }

            ?>
            <ul class="cards">
                <?php
                if ($conn) {
                    $sql = "select * from item WHERE categoryID = 1;";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $id = $row["id"];
                            $image = $row["image"];
                            $description = $row["description"];
                            $alt = $row["alt"];
                            $all = "<li class='cards_item'>
                        <div class='card'>
                            <div class='card_image'><img src='$image' alt='$alt'></div>
                            <div class='card_content'>
                                <h2 class='card_title'>$alt</h2>
                                <p class='card_text'>$description
                                </p>
                                <a href='itemDetails.php?id=$id'><button class='btn card_btn'>Click to
                                        Learn</button></a>
                            </div>
                        </div>
                    </li>";
                            echo $all;
                        }
                    } else {
                        echo "Fail";
                    }
                }
                ?>
            </ul>

        </div>
    </section>
    <!--Animal Origami Selection End-->

    <!--Flower Origami Selection Start-->
    <section id="Flowers" class="items">
        <div class="main">
            <?php
            if ($conn) {
                $select = "select * from category where id=2";
                $result = mysqli_query($conn, $select);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $category = $row["category"];
                        $info = $row["info"];
                        $all = "<h1 id='$category'>$category</h1>
                        <p>$info</p>";
                        echo $all;
                    }
                }
            } else {
                echo "problem";
            }

            ?>
            <ul class="cards">
                <?php
                if ($conn) {
                    $sql = "select * from item WHERE categoryID = 2;";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $id = $row["id"];
                            $image = $row["image"];
                            $description = $row["description"];
                            $alt = $row["alt"];
                            $all = "<li class='cards_item'>
                        <div class='card'>
                            <div class='card_image'><img src='$image' alt='$alt'></div>
                            <div class='card_content'>
                                <h2 class='card_title'>$alt</h2>
                                <p class='card_text'>$description
                                </p>
                                <a href='itemDetails.php?id=$id'><button class='btn card_btn'>Click to
                                        Learn</button></a>
                            </div>
                        </div>
                    </li>";
                            echo $all;
                        }
                    } else {
                        echo "Fail";
                    }
                }
                ?>

            </ul>
        </div>
    </section>
    <!--Flower Origami Selection End-->

    <!--Occassions Origami Selection Start-->
    <section id="Occasion" class="items">
        <div class="main">
            <?php
            if ($conn) {
                $select = "select * from category where id=3";
                $result = mysqli_query($conn, $select);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $category = $row["category"];
                        $info = $row["info"];
                        $all = "<h1 id='$category'>$category</h1>
                        <p>$info</p>";
                        echo $all;
                    }
                }
            } else {
                echo "problem";
            }

            ?>
            <ul class="cards">
                <?php
                if ($conn) {
                    $sql = "select * from item WHERE categoryID = 3;";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $id = $row["id"];
                            $image = $row["image"];
                            $description = $row["description"];
                            $alt = $row["alt"];
                            $all = "<li class='cards_item'>
                        <div class='card'>
                            <div class='card_image'><img src='$image' alt='$alt'></div>
                            <div class='card_content'>
                                <h2 class='card_title'>$alt</h2>
                                <p class='card_text'>$description
                                </p>
                                <a href='itemDetails.php?id=$id'><button class='btn card_btn'>Click to
                                        Learn</button></a>
                            </div>
                        </div>
                    </li>";
                            echo $all;
                        }
                    } else {
                        echo "Fail";
                    }
                }
                ?>

            </ul>
        </div>
    </section>
    <section id="Toys" class="items">
        <div class="main">
            <?php
            if ($conn) {
                $select = "select * from category where id=4";
                $result = mysqli_query($conn, $select);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $category = $row["category"];
                        $info = $row["info"];
                        $all = "<h1 id='category'>$category</h1>
                        <p>$info</p>";
                        echo $all;
                    }
                }
            } else {
                echo "problem";
            }

            ?>
            <ul class="cards">
                <?php
                if ($conn) {
                    $sql = "select * from item WHERE categoryID = 4;";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $id = $row["id"];
                            $image = $row["image"];
                            $description = $row["description"];
                            $alt = $row["alt"];
                            $all = "<li class='cards_item'>
                        <div class='card'>
                            <div class='card_image'><img src='$image' alt='$alt'></div>
                            <div class='card_content'>
                                <h2 class='card_title'>$alt</h2>
                                <p class='card_text'>$description
                                </p>
                                <a href='itemDetails.php?id=$id'><button class='btn card_btn'>Click to
                                        Learn</button></a>
                            </div>
                        </div>
                    </li>";
                            echo $all;
                        }
                    } else {
                        echo "Fail";
                    }
                    mysqli_close($conn);
                }
                ?>

            </ul>
        </div>
    </section>
    <!--Animal Origami Selection End-->
    <!--Tips Start-->
    <section class="items">
        <article id="tips">
            <h1>Helpful Tips and Tricks</h1>
            <p>Origami really allows you to be creative. You can always expand or adapt
                them, or follow your impulse and create your own designs from scratch. Here are some simple tips to
                help you get the most out of origami:
                <ul id="ltips">
                    <li>
                        Always fold with clean hands.
                    </li>
                    <li>If the origami requires the paper to be sqaure, make sure its square.</li>
                    <li>Be precise and accurate to prevent any errors.</li>
                    <li>Take time while doing the origami</li>
                    <li>Always fold the paper away from you, not towards you.</li>
                    <li>Folding an edge to an edge is easier than folding to a crease.</li>
                    <li>Always look ahead to the next drawing to see where you’re going.</li>
                    <li>Save your mistakes, because they may lead to new, creative ideas.</li>
                    <li>Don't be afraid to experiment.</li>
                </ul>
            </p>
        </article>
    </section>
    <!--Tips End-->
</body>
<!--Body End-->
<!-- FOOTER START -->
<?php include 'footer.php';?>
<!-- END OF FOOTER -->


</html>