<?php
include("./inc/functions.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/4f973744cb.js" crossorigin="anonymous"></script>
    <link rel="icon" href="./resources/icon.png" type="image/png" sizes="16x16">
    <link rel="stylesheet" href="./css/style.css">
    <title>Marvel heroes</title>
</head>

<body>
    <header>
        <img src="./resources/Marvel_Logo.png" alt="Marvel logo" srcset="" id="header_logo">
    </header>
    <div class="container">
        <div class="left_container">
            <div class="left_banner">
                <img src="./resources/left_banner.jpg" alt="Left_Banner" id="left_banner">
            </div>
            <div class="left_information">
                <h1 class="left_title">Welcome to my Marvel page</h1>
                <p id="left_info">On this page you will find some heroes that i think are pretty awesome.
                    You can find extra information about them on this website with some extra images.
                    All these images are copied from the internet and their owners have full ownership.
                </p>
                <h1 class="left_title">Sources</h1>
                <p style="padding-left: 20px;">
                    <a href="https://en.wikipedia.org/wiki/Main_Page" target="_blank">Heroes Information (wikipedia)</a>
                    <br>
                    <a href="https://www.marvel.com/" target="_blank">Heroes Images (Marvel website)</a>
                </p>

            </div>
        </div>
        <div class="middle_container">
            <div class="items">
                <img src="./resources/thor.jpg" alt="Thor" class="extra_images">
                <div class="item_info">
                    <h3>Thor</h3>
                    <p class="description">Thor (Old Norse: Þórr) is the god of thunder and lightning in Norse
                        mythology.</p>
                    <a class="more_info" href="http://localhost/CorruptSausageDocs/MarvelHeroesWebsite/index.php?superhero=thor">
                        More Info
                    </a>
                </div>
            </div>
            <div class="items">
                <img src="./resources/captain_america.jpg" alt="Captain America" class="extra_images">
                <div class="item_info">
                    <h3>Captain America</h3>
                    <p class="description">Captain America is the alter ego of Steve Rogers, a artist enhanced to the
                        peak of
                        human perfection.</p>
                    <a class="more_info" href="http://localhost/CorruptSausageDocs/MarvelHeroesWebsite/index.php?superhero=captain_america">
                        More Info
                    </a>
                </div>
            </div>
            <div class="items">
                <img src="./resources/iron_man.jpg" alt="Iron Man" class="extra_images">
                <div class="item_info">
                    <h3>Iron Man</h3>
                    <p>Tony Stark is the wealthy son of industrialist and weapons manufacturer Howard Stark and his
                        wife, Maria.</p>
                    <a class="more_info" href="http://localhost/CorruptSausageDocs/MarvelHeroesWebsite/index.php?superhero=iron_man">
                        More Info
                    </a>
                </div>
            </div>
            <div class="items">
                <img src="./resources/spiderman.jpg" alt="Spider Man" class="extra_images">
                <div class="item_info">
                    <h3>Spiderman</h3>
                    <p class="description">American teenager Peter Parker, a poor sickly orphan, is bitten by a
                        radioactive spider.</p>
                    <a class="more_info" href="http://localhost/CorruptSausageDocs/MarvelHeroesWebsite/index.php?superhero=spiderman">
                        More Info
                    </a>
                </div>
            </div>
            <div class="items">
                <img src="./resources/captain_marvel.jpg" alt="Captain Marvel" class="extra_images">
                <div class="item_info">
                    <h3>Captain Marvel</h3>
                    <p class="description">Former Air Force pilot and intelligence agent Carol Danvers pursued her dream
                        of space
                        exploration.</p>
                    <a class="more_info" href="http://localhost/CorruptSausageDocs/MarvelHeroesWebsite/index.php?superhero=captain_marvel">
                        More Info
                    </a>
                </div>
            </div>
            <div class="items">
                <img src="./resources/ant_man.jpg" alt="Ant Man" class="extra_images">
                <div class="item_info">
                    <h3>Ant Man</h3>
                    <p class="description">Ant-Man's Powers and Abilities: Uses a special suit infused with Pym
                        Particles to shrink to
                        roughly the size of an ant.</p>
                    <a class="more_info" href="http://localhost/CorruptSausageDocs/MarvelHeroesWebsite/index.php?superhero=ant_man">
                        More Info
                    </a>
                </div>
            </div>
            <div class="items">
                <img src="./resources/Hawkeye.jpg" alt="Hawkeye" class="extra_images">
                <div class="item_info">
                    <h3>Hawkeye</h3>
                    <p class="description">Known for his use of the bow and arrow as his primary weapon and an extremely
                        keen eyesight and
                        accuracy.</p>
                    <a class="more_info" href="http://localhost/CorruptSausageDocs/MarvelHeroesWebsite/index.php?superhero=hawkeye">
                        More Info
                    </a>
                </div>
            </div>
        </div>
        <div class="right_container">
            <img src="<?php changeBanner(); ?>" class="right_banner_banner">
            <h1 class="right_container_hero"><?php changeTitle(); ?></h1>
            <div class="right_superhero_information">
                <p><?php changeDescription(); ?></p>
                <?php changeRating(); ?>
                <?php changeStrengths(); ?>
                <?php changeWeakness(); ?>
            </div>
        </div>
    </div>
</body>

</html>