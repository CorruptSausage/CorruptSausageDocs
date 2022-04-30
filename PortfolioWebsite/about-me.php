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
        <div class="about_me_left_container">
            <h1>Hi! I am<br>Jordy Slaats</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia culpa fuga officia nostrum optio error.
                Totam accusantium eius nesciunt! Laudantium consequuntur eaque voluptatibus quos architecto voluptas
                facere quisquam laborum suscipit!
            </p>
        </div>
        <button class="about_me_button">Scroll down to read more</button>
    </header>

    <div class="about_me_container">
        <h2>Clients always get exceptionel works from me</h2>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis expedita numquam omnis eius ullam?
            Provident autem, suscipit, quis commodi vero quam assumenda, culpa quisquam nobis quaerat excepturi! Velit,
            dignissimos sint.
        </p>
    </div>

    <div class="about_me_personal_information">
        <div class="about_me_personal_information_left_container">
            <div class="linear-gradient-border">
                <div class="left_container_tabs">
                    <h2>1. Quality works</h2>
                </div>
            </div>
            <div class="linear-gradient-border">
                <div class="left_container_tabs">
                    <h2>2. Commitments</h2>
                </div>
            </div>
            <div class="linear-gradient-border">
                <div class="left_container_tabs">
                    <h2>3. 24 hours active</h2>
                </div>
            </div>
        </div>
        <div class="about_me_personal_information_right_container">
            <div class="linear-gradient-border">
                <div class="left_container_tabs">
                    <h2>4. Helpful</h2>
                </div>
            </div>
            <div class="linear-gradient-border">
                <div class="left_container_tabs">
                    <h2>5. Respectful</h2>
                </div>
            </div>
            <div class="linear-gradient-border">
                <div class="left_container_tabs">
                    <h2>6. Motivated</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="about_me_experiences">
        <h2>Experiences</h2>
    </div>
    <div class="about_me_experiences_information">
        <div class="about_me_experience_experiences">
            <h2>Programming Languages</h2>
            <p>HTML, CSS, PHP, C#, C++</p>
        </div>
        <div class="about_me_experience_experiences">
            <h2>Work Experiences</h2>
            <p>- Albert Heijn 2018 -> future</p>
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