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
        <h1 style="text-align: center; font-size: 100px;">Contact</h1>
    </header>

    <div class="contact_form_container">
        <form action="#">
            <ul>
                <li>
                    <label>First Name</label>
                    <br>
                    <input type="text" name="" class="input_type_text" required>
                </li>
                <li>
                    <label>Last Name</label>
                    <br>
                    <input type="text" name="" class="input_type_text" required>
                </li>
                <li>
                    <label>Email or phone</label>
                    <br>
                    <input type="text" name="" class="input_type_text" required>
                </li>
                <li>
                    <label>Message</label>
                    <br>
                    <textarea name="" id="" cols="30" rows="10" required></textarea>
                </li>
                <li>
                    <button type="submit">Send</button>
                    <button type="reset">Reset</button>
                </li>
            </ul>
        </form>
        <a href="https://www.linkedin.com/in/jordy-s-018522222/" target="_blank"><img src="./resources/linkedinLogo.png" id="linkedin_logo"></a>
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