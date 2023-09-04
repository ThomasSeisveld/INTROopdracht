<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="CSS/house.css">
    <link rel="stylesheet" href="CSS/header.css">
    <link rel="stylesheet" href="CSS/footer.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar"></nav>
<?php
    if (isset($_GET['id'])) {
        $house_id = $_GET['id'];

        $game = "";
        $price = "";
        $genre = "";
        $duration = "";
        $moeilijk = "";
        $picture = "";
        $spelers = "";
        $datum = "";
        $button = "<button>Download</button>";

        if ($house_id == "game1") {
            $game = "Dragon Warriors";
            $price = "Free - Gratis";
            $genre = "Aventure";
            $duration = "100+ hours";
            $moeilijk = "7 - 10";
            $picture = "img/game1.jpg";
            $spelers = "1 - Singleplayer";
            $datum = "23 Jun - 2023";
            $button = "<button>Download - Free</button>";

        } elseif ($house_id == "game2") {
            $genre = "Aventure";
            $duration = "100+ hours";
            $moeilijk = "€ 1.365.000";
            $picture = "img/game1.jpg";
            $spelers = "1 - Singleplayer";
            $datum = "23 Jun - 2023";

        } else {
            echo "House not found.";
        }
    } else {
        echo "Invalid request.";
    } 
?>

<div class="datalist">
<div class="main">
    <img src='<?php echo $picture ?>' alt='House' class='huis-img' style='width: 600px;'>
    <h1> <?php echo $game ?></h1>
    <p><?php echo $price ?></p>
</div>
<br>
<div class="info">
    <h2>Information</h2>
    <table>
        <tr>
            <td>Genre:</td>
            <td> <?php echo $genre ?></td>
        </tr>
        <tr>
            <td>Duration:</td>
            <td><?php echo $duration ?></td>
        </tr>
        <tr>
            <td>difficulty rate:</td>
            <td><?php echo $moeilijk ?></td>
        </tr>
        <tr>
            <td>player amount:</td>
            <td><?php echo $spelers ?></td>
        </tr>
        <tr>
            <td>release date:</td>
            <td><?php echo $datum ?></td>
        </tr>
    </table>
    <br>
    <div class="download">
        <a><?php echo $button ?></a>
        <a href="Projects.php"><button>Tutorials</button></a>
    </div>
</div>
</div>




<div class="footer">
        <hr class="hr-top">
        <img src="img/logo.png" id="logo-footer" alt="logo">
            <div class="footer-text">
                <a href="privacy.php?id=conditions">Conditions</a>               
                <a href="privacy.php?id=cookies">Cookies</a>
                <a href="privacy.php?id=privacy">Privacy</a>
                <a href="contact.html">Contact</a>
            </div>

        <hr class="hr-bottom">
    </div>

<script src="JS/Dev.js"></script>
</body>
</html>