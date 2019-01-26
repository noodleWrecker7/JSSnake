<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../css/general.css">
    <!--<link rel="stylesheet" href="../css/index.css">-->
    <link rel="stylesheet" href="../../css/pages.css">
    <link rel="stylesheet" href="../../css/fontawesome.css">
    <link rel="shortcut icon" type="image/x-icon" href="../../favicon.ico"/>
    <!--Used from https://fontawesome.com under license https://fontawesome.com/license-->
    <title>Games - Snake</title>
</head>

<header class="title-box">
    <div class="nav-bar">
        <div class="links-bar">
            <a href="../../" class="nav-home nav-button">Home</a>
            <a href="../" class="nav-link nav-button">Projects</a>
            <a href="https://paypal.me/noodlewrecker" class="nav-link nav-button">Donate</a>
        </div>
        <?php
        $socialBarResponse = file_get_contents("../../../hidden/social-bar.html");
        echo $socialBarResponse;
        ?>
    </div>

    <h1 class="title">
        Snake
    </h1>
    <h2 class="sub-heading">
        v1.0.2
    </h2>
</header>

<body>
<div class="page-chunk scoresDef" style="background-color: whitesmoke">
    <p class="score" id="currentScore"></p>
    <p class="high-score" id="topScore"></p>
</div>
<div class="page-chunk canvasContainer">
    <canvas id="snakeCanvas" width="560" height="560">Loading...</canvas>
    <script src="snake.js"></script>
</div>
</body>
</html>
