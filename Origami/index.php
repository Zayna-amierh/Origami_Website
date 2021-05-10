<?php
session_start();
if (isset($_SESSION['username'])) {
    $sig = '<script>
        document.addEventListener("DOMContentLoaded", function() {
            var el = document.querySelector("#sig");
            var newEl = document.createElement("div");
            newEl.innerHTML ="Welcome <br>" + "Click here to <a href=logout.php>Logout.</a>";
            el.parentNode.replaceChild(newEl, el);
        });
    </script>';
    echo $sig;
} else {
}
?>
<!DOCTYPE html>
<html>
<!--Head Start-->

<head>
    <title>HowToOrigami | Home</title>
    <link rel="shortcut icon" href="images\logo4.png" />
    <!--CSS Stylesheet-->
    <link rel="stylesheet" type="text/css" href="CSS\style-min.css">
    <!--Media Query Stylesheet-->
    <link rel="stylesheet" type=text/css href="CSS\mediaquery-min.css">
    <!--JavaScript Sheet-->
    <script type="text/javascript" src="JavaScript\script.js"></script>
    <!--Fonts used in website-->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bubblegum+Sans&display=swap" rel="stylesheet">
    <!--Icons used in website-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--Meta Tag-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        #more {
            display: none;
        }

        #con {
            display: none;
        }
    </style>
    <script>
        function buttonRead() {
            var dots = document.getElementById("dots");
            var moreText = document.getElementById("more");
            var btnText = document.getElementById("myBtn");

            if (dots.style.display === "none") {
                dots.style.display = "inline";
                btnText.innerHTML = "Read more";
                moreText.style.display = "none";
            } else {
                dots.style.display = "none";
                btnText.innerHTML = "Read less";
                moreText.style.display = "inline";
            }
        }

        function buttonReading() {
            var dot = document.getElementById("dot");
            var moreHText = document.getElementById("con");
            var btnHText = document.getElementById("Hbtn");

            if (dot.style.display === "none") {
                dot.style.display = "inline";
                btnHText.innerHTML = "Read more";
                moreHText.style.display = "none";
            } else {
                dot.style.display = "none";
                btnHText.innerHTML = "Read less";
                moreHText.style.display = "inline";
            }
        }
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
    <?php
    require 'headerNav.php';
    ?>
    <!--Header End-->
    <!--Curve Section Start-->
    <div id="curve">
        <div id="overlay" style="height: fit-content;">
            <h1>Welcome to the New World of Origami</h1>
            <p>The place we never knew we thought we needed. The place that will help us break out of our shell into
                a world full of creativity, imagination, and love.</p>
            <br>
        </div>
    </div>
    <!--Curve Section End-->
    <!--About Section Start-->
    <section id="about">
        <article>
            <h1>
                <a href="about.php"> About HowToOrigami</a>
            </h1>
            <p>
                This website is designed to nourish and brighten our horizons.We can show our hidden talent and
                love in
                creating origami.
                Origami can be made in a vast variety of different ways and only one tool is needed and that is
                our
                imagination and paper of course. Whether
                you are 3 or 90, origami will always have a place in our hearts.
            </p>
            <p>Thinking about everything we can do in this world just by using our imagination and a few
                supplies,
                we can do wonders if we put our mind to it</p>
            <a href="about.php"><button class="btn2">Read More</button></a>
        </article>
    </section>
    <!--About Section End-->
    <!--Tools Section Start-->
    <section id="tools">
        <aside>
            <article>
                <h1>
                    Origami Essential Tools
                </h1>
                <p>
                    In origami, there are many tools that can be used to make your master piece.
                    It is essential to know what you could use to make the origami so the result comes out
                    perfectly. <br>
                    The main tools include:
                    <ul style="list-style: square inside; text-align: left; margin-left: 3em;">
                        <li>Paper</li>
                        <li>Pencil Colours</li>
                        <li>Scissors</li>
                        <li>Glue</li>
                        <li>Pens</li>
                        <li>Tape</li>
                        <li>Space</li>
                    </ul>
                </p>
            </article>
        </aside>
    </section>
    <!--Tools Section End-->

    <!--Origami Category Start-->
    <section class="clearfix">
        <div class="main">
            <h1>Choose Origami According to Category</h1>

            <ul class="cards">
                <li class="cards_item">
                    <div class="card">
                        <div class="card_image"><img src="images\image.jpg" alt="animals"></div>
                        <div class="card_content">
                            <h2 class="card_title">Animals</h2>
                            <p class="card_text"> Learn to make different animals in such a wonderful way
                            </p>
                            <a href="items.php#Animals"><button class="btn2">Read More</button></a>
                        </div>
                    </div>
                </li>
                <li class="cards_item">
                    <div class="card">
                        <div class="card_image"><img src="images\flowers.jpg" alt="flowers"></div>
                        <div class="card_content">
                            <h2 class="card_title">Flowers</h2>
                            <p class="card_text"> Learn to use your hands to create amazing flower shapes!
                            </p>
                            <a href="items.php#Flowers"><button class="btn2">Read More</button></a>
                        </div>
                    </div>
                </li>
                <li class="cards_item">
                    <div class="card">
                        <div class="card_image"><img src="images\card.jpg" alt="ocassions"></div>
                        <div class="card_content">
                            <h2 class="card_title">Ocassions & Packaging</h2>
                            <p class="card_text"> Make a special Origami card and use packaging.
                            </p>
                            <a href="items.php#Occasion"><button class="btn2">Read More</button></a>
                        </div>
                    </div>
                </li>

                <li class="cards_item">
                    <div class="card">
                        <div class="card_image"><img src="images\game.jpg" alt="game"></div>
                        <div class="card_content">
                            <h2 class="card_title">Toys & Games</h2>
                            <p class="card_text"> Feeling bored? Make a game or toy for you or your kid!
                            </p>
                            <a href="items.php#Toys"><button class="btn2">Read More</button></a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!--Origami Category End-->

    <!--History Section Start-->
    <section class="history">
        <article>
            <h1>Origami History</h1>
            <h3>The life of origami..</h3>
            <p>For the initial 1500 years or so of its existence, origami was actually known as orikata, a
                Japanese word that translates to “Folded Paper”. It was in 1880 that the name of the art
                form was changed to origami, derived from two Japanese words; oru, meaning to fold, and
                kami, meaning paper. The reason for the change in this term has been attributed to the
                easiness of writing the characters for this word, which made it more viable to teach to
                school children.<span id="dots">...</span></p>
            <p><span id="more">
                    Paper was originally created sometime around 100 A.D. While paper is considered a common and cheap
                    commodity now, at the time of its conception, the resources required to create paper were not as
                    easily available. Paper was an expensive and rare commodity, so those engaging in the art of
                    traditional paper folding was usually an art left for the elite rungs of society. Conversely, it was
                    also used by Buddhist Monks for religious purposes. It only later became a practice open to the
                    public</span></p>
        </article>
        <button onclick="buttonRead()" id="myBtn" class="btn">Read more</button>
    </section>

    <!--History Section End-->

    <!--Best Items Start-->
    <section id="bestInst">
        <h1>BEST ORIGAMI INSTRUCTIONS</h1>
        <?php
        $conn = mysqli_connect("localhost", "root", "", "howtoorigami");
        if ($conn) {
            $sql = "SELECT * FROM best_instructions";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row["item_id"];
                    $image = $row["image"];
                    $description = $row["description"];
                    $alt = $row["alt"];
                    $all = "<div class='best'>
                        <img src='$image' alt='$alt'>
                        <p>$description </p>
                        <a href='itemDetails.php?id=$id'><button class='btn2'>Learn Now</button></a>
                    </div>";
                    echo $all;
                }
            } else {
                echo "problem";
            }
            mysqli_close($conn);
        }
        ?>
        <section>
            <p>Don't Agree? Message us to tell us what's best in your opinion.</p>
            <a href="contact.php"><button class="btn2">Contact Us</button></a>
        </section>
    </section>
    <!--Best Items end-->
    <!--History#2 section Start-->
    <section class="history">
        <article>
            <h1>Modern Origami</h1>
            <h3>How is Origami now?</h3>
            <p>Traditional origami is characterized by open-access folding patterns and sequences passed down orally
                or anonymously from generation to generation. Modern origami often features models created by
                designers. Many of these models are considered copyrightable material or intellectual property.
                Modern origami often prioritizes a puzzle aspect to the folding, and the challenge of folding a
                single square of paper without using cuts or glue.<span id="dot">...</span></p>
            <p><span id="con">“Five Intersecting Tetrahedra” by Tom Hull
                    Akira Yoshizawa, who died in 2005 at age 94, is considered one of the progenitors of modern origami.
                    In the 1930s, he developed a system of folding patterns employing a set of symbols, arrows and
                    diagrams. By the 1950s, these patterns were published and widely available, contributing to
                    origami’s global reach and standardization. Yoshizawa and other origami masters formed local and
                    international organizations publicizing the art</span></p>
        </article>
        <button onclick="buttonReading()" id="Hbtn" class="btn">Read more</button>
    </section>
    <!--History#2 section Start-->
</body>
<!--Body End-->

<!-- FOOTER START -->
<?php include 'footer.php'; ?>
<!-- END OF FOOTER -->


</html>