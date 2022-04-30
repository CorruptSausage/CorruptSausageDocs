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
                                <li><a class="gn-icon" href="about-me.php">About me</a></li>
                                <li><a class="gn-icon" href="study.php">Study</a></li>
                                <li><a class="gn-icon" href="projects.php">Projects</a></li>
                                <li><a class="gn-icon" href="projects.php">Contact</a></li>
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
        <h1 id="study_welcome_title">Study</h1>
        <button class="about_me_button">See more down below!</button>
    </header>

    <div class="study_information">
        <div class="study_information_left_container">
            <h1>School Information</h1>
            <div class="linear-gradient-border">
                <div class="study_information_left_container_tabs" style="margin-top: 0px;">
                    <h2>ROC Ter AA</h2>
                </div>
            </div>
            <div class="study_information_left_container_tabs">
                <h2>Keizerin Marialaan 2, 5702 NR Helmond</h2>
            </div>
            <div class="study_information_left_container_tabs">
                <a href="https://roc-teraa.nl/" target="_blank"><h2>roc-teraa.nl</h2></a>
            </div>
        </div>
        <div class="study_information_right_container">
            <h1>Study Information</h1>
            <h2>Software Development (bilingual)</h2>
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