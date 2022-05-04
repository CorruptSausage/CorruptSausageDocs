<?php
include("./inc/functions.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Jordy Slaats">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <script src="./js/modernizr.custom.js"></script>
    <link rel="stylesheet" href="./css/navbar.css" type="text/css">
    <link rel="stylesheet" href="./css/style.css" type="text/css">
    <title>Jordy Slaats</title>
</head>

<body>
    <ul id="gn-menu" class="gn-menu-main">
        <li class="gn-trigger">
            <a class="gn-icon gn-icon-menu" style="padding: 0 30px;"><span>Menu</span></a>
            <nav class="gn-menu-wrapper">
                <div class="gn-scroller">
                    <ul class="gn-menu">
                        <li>
                            <a class="bi" href="index.php">Home</a>
                            <ul class="gn-submenu">
                                <li><a class="gn-icon" href="about-me.html">About me</a></li>
                                <li><a class="gn-icon" href="study.php">Study</a></li>
                                <li><a class="gn-icon" href="projects.php">Projects</a></li>
                                <li><a class="gn-icon" href="contact.php">Contact</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- /gn-scroller -->
            </nav>
        </li>
        <li>
            <a href="index.php">Jordy Slaats</a>
        </li>
    </ul>

    <header>
        <h1 style="text-align: center; font-size: 100px;">Projects</h1>
    </header>

    <div class="projects_information">
        <h2>Here are some of my projects, click on the button to see more!</h2>
        <div class="projects_information_tabs">
            <div class="projects_information_left_container">
                <a href="http://localhost/CorruptSausageDocs/PortfolioWebsite/projects.php?project=1"><button>Radio Ga Ga</button></a>
                <br>
                <a href="http://localhost/CorruptSausageDocs/PortfolioWebsite/projects.php?project=2"><button>Marvel Shop</button></a>
                <br>
                <a href="http://localhost/CorruptSausageDocs/PortfolioWebsite/projects.php?project=3"><button>Iphone 12</button></a>
            </div>
            <div class="projects_information_middle_container">
                <a href="http://localhost/CorruptSausageDocs/PortfolioWebsite/projects.php?project=4"><button>TuneStore</button></a>
                <br>
                <a href="http://localhost/CorruptSausageDocs/PortfolioWebsite/projects.php?project=5"><button>MovieMaster</button></a>
                <br>
                <a href="http://localhost/CorruptSausageDocs/PortfolioWebsite/projects.php?project=6"><button>Dragrace</button></a>
            </div>
            <div class="projects_information_right_container">
                <a href="http://localhost/CorruptSausageDocs/PortfolioWebsite/projects.php?project=7"><button>Bike Lights</button></a>
                <br>
                <a href="http://localhost/CorruptSausageDocs/PortfolioWebsite/projects.php?project=8"><button>Lightbar</button></a>
                <br>
                <a href="http://localhost/CorruptSausageDocs/PortfolioWebsite/projects.php?project=9"><button>Led Light</button></a>
            </div>
        </div>
    </div>

    <div class="projects_display">
        <div class="projects_display_left">
            <img src="<?php changeImage(); ?>" alt="">
        </div>
        <div class="projects_display_right">
            <h1><?php changeTitle(); ?></h1>
            <p>
                <?php changeDescription(); ?>
            </p>
            <h2><?php changeCategory(); ?></h2>
        </div>
    </div>

    <footer>
        <h3>Copyright &copy; Jordy Slaats</h3>
    </footer>

    <script src="./js/classie.js"></script>
    <script src="./js/gnmenu.js"></script>
    <script>
        new gnMenu(document.getElementById('gn-menu'));
    </script>

</body>

</html>