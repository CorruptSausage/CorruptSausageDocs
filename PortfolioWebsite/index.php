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
                                <li><a class="gn-icon">Contact</a></li>
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

    <div class="image_header">
        <img src="./resources/portfolio3.png" alt="Portfolio Image" id="header_image">
    </div>

    <div class="information_text">
        <div class="left_container">
            <div class="linear-gradient-border">
                <div class="left_container_tabs">
                    <h2>Developer</h2>
                    <p>Frontend & Backend web developer</p>
                </div>
            </div>
            <div class="left_container_tabs">
                <h2>Design</h2>
                <p>Web designer</p>
            </div>
        </div>
        <div class="right_container">
            <div class="right_title_text">
                <h1>My Awesome</h1>
                <h2>Services</h2>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, nihil ullam aperiam optio sequi
                necessitatibus repellendus molestiae voluptate quod reprehenderit! Minus nisi dolor facilis amet alias
                asperiores magni soluta voluptate.
            </p>
            <button type="button">Download CV</button>
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