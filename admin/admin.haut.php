<!DOCTYPE php>
<php lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/admin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">

    <title>Medimancie</title>
</head>
<body>
    <div id="global">
    <header>
    <!--HEADER-->
        
       <nav id="fleche">
            <a href="apropos.php"><img src="img/LOGO.jpg" alt="Logo Medimancie"></i></a>
        

            <div class="menu">
                <ul>
                    <li><a href="index.php">Accueil</a></li>
                    <!-- <li><a href="meditation.php">Meditation</a></li>
                    <li><a href="mancie.php">Mancie</a></li>
                    <li><a href="apropos.php">A propos</a></li>
                    <li><a href="seances.php">Séances</a></li> -->
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="liste_contact.php">Admin</a></li>
                </ul>
            </div>
            
    
            <hr size="0.6" width="100%" color="CC9966">
    
            <!--header responsive avec ex tuto coder.com-->
            <div id="mySidenav" class="sidenav">
                <a id="closeBtn" href="#" class="close">&times;</a>
                <ul>
            <li><a href="index.php">Accueil</a></li>
            <!-- <li><a href="meditation.php">Meditation</a></li>
            <li><a href="mancie.php">Mancie</a></li>
            <li><a href="apropos.php">A propos</a></li>
            <li><a href="seances.php">Séances</a></li> -->
            <li><a href="contact.php">Contact</a></li>
            <li><a href="liste_contact.php">Liste-contact</a></li>
                </ul>
            </div>
             <a href="#" id="openBtn">
                <span class="burger-icon">
                    <span></span>
                    <span></span>
                    <span></span>
    
                </span>
             </a>
            </nav>
        </header>
        <div id="menu_deroulant" class="profil_utilisateur">
                <div>
                    <h4>Cathy</h4>
                    <small>Administrateur</small>
                </div>
                <img src="img/avatar admin.jpg" 
                 class="logo_admin"alt="Logo Admin">
                <div class="contenu_deroulant">
                    <p>Profil</p>
                    <p>Deconnexion</p>
                </div>
            </div>    