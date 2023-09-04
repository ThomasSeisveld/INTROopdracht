<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="CSS/Dev.css">
    <link rel="stylesheet" href="CSS/header.css">
    <link rel="stylesheet" href="CSS/footer.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>


<nav class="navbar"></nav>



<table class="table text-center">
    <tr>
        <th>id</th>
        <th>image</th>
        <th>button</th>

    </tr>

    <?php
   $i = 1;
   $row = mysqli_query($conn, "SELECT * FROM tb_upload ORDER BY id DESK");
   ?>





    <tr>
        <td><?php echo $i++; ?>1</td>
        <td width=100px alt=""><?php echo $row["name"]; ?>2</td>
        <td><img src="img/<?php echo $row['image']; ?>" width="200">3</td>
    </tr>

</table>


<div class="container">
    <div class="main-info">
        <h2><b>Projects</b></h2>
        <br>
        <p>Made between (2021 - 2023)
            <br><br>

        </p>
    </div>
    <div class="flexbox">
        <div1>
            <a href="gamedownload.php?id=game1"><img src="img/game1.jpg" alt="huis" class="huis-img"></a>
            <h4 class="huis" style="color: #2AA2D6;">Dragon warriors</h4>
            <p class="huis">2023</p>
            <p class="huis"><b>Free - Gratis</b></p>
        </div1>
        <div1 style="background-color: lightgrey">
            <a href="gamedownload.php?id=game2"><img src="img/comingsoon.jpg" alt="huis" class="huis-img"></a>
            <h4 class="huis" style="color: #2AA2D6;">Æro Assault</h4>
            <p class="huis">2023</p>
            <p class="huis"><b>Coming soon</b></p>
        </div1>
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