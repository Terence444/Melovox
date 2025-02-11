<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <title>MÉLOVOX</title>
    <link rel="stylesheet" href="form_style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rock+Salt&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=search" />
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <div id="logo_title">
            <a href="index.php"><img id="logo" src="visuel\logo\logo.png" alt=""></a>
            <h1>Mélovox</h1>
        </div>
        <div id="search_connex">
            <div id="burger">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <a href="search.php"><span class="material-symbols-outlined">search</span></a>
            <a href="connexion.php"><button>Connexion</button></a>
            <span id="vertical_line"></span>
            <a href="form.php"><button>Inscription</button></a>
        </div>
    </header>
    <h3>À votre tour de faire entendre votre voix ! 🎤</h3>
    <section>

        <div id="image_area">
            <img id="image" src="visuel\image\your_turn.jpg" alt="">
        </div>
        <span class="vertical_line"></span>

        <div id="contact_form">


            <div id="instructions">
                <h3>Créer votre compte</h3>
                <p>Veuillez renseigner les champs pour procéder à la création de votre espace personnel</p>
            </div>

            <form action="form.php">
                <div id="name_area">
                    <label for="name">Nom</label>
                    <input type="text" id="name">
                </div>

                <div id="first_name_area">
                    <label for="first_name">Prénom</label>
                    <input type="text" id="first_name">
                </div>

                <div id="birthday_area">
                    <label for="birthday">Date de naissance</label>
                    <input type="date" name="birthday" id="birthday">
                </div>

                <div id="email_area">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email">
                </div>

                <div id="gender_area">
                    <legend class="question">Sexe</legend>

                    <div class="answers">
                        <div>
                            <input type="radio" name="gender" id="male">
                            <label for="male">Homme</label>
                        </div>

                        <div>
                            <input type="radio" name="gender" id="female">
                            <label for="female">Femme</label>
                        </div>
                        <div>
                            <input type="radio" name="gender" id="no_answer">
                            <label for="no_answer">Je préfère ne pas répondre</label>
                        </div>

                    </div>

                </div>

                <div id="user_type_area">
                    <legend class="question">Êtes vous artiste?</legend>
                    <div class="answers">
                        <div>
                            <input type="radio" name="artist" id="yes">
                            <label for="yes">Oui</label>
                        </div>
                        <div>
                            <input type="radio" name="artist" id="no">
                            <label for="no">Non</label>
                        </div>
                    </div>
                </div>

                <div id="share_area">
                    <legend class="question">Souhaitez vous partagez vos créations?</legend>

                    <div class="answers">
                        <div>
                            <input type="radio" name="sharing" id="yes">
                            <label for="yes">Oui</label>
                        </div>
                        <div>
                            <input type="radio" name="sharing" id="no">
                            <label for="no">Non</label>
                        </div>
                    </div>
                </div>
                <div id="country_area">
                    <label for="country">Pays</label>
                    <input type="text" name="country" id="country">
                </div>

                <div id="nickname_area">
                    <label for="nickname">Nom d'utilisateur</label>
                    <input type="text" name="nickname" id="nickname">
                </div>

                <div id="password_area">
                    <label for="password">Mot de passe</label>
                    <input type="password" id="password" minlength="8" required>
                </div>

                <div id="password_confirm_area">
                    <label for="password_confirm">Confirmation de mot de passe</label>
                    <input type="password" id="password_confirm" minlength="8" required>
                </div>

                <input id="sign_in" type="submit" value="S'inscrire">

            </form>
        </div>
    </section>
    <footer>
        <ul>
            <li><a href="">Lorem Ipsum</a></li>
            <li><a href="">Lorem Ipsum</a></li>
            <li><a href="">Lorem Ipsum</a></li>
            <li><a href="">Lorem Ipsum</a></li>
        </ul>

        <ul>
            <li><a href="">Lorem Ipsum</a></li>
            <li><a href="">Lorem Ipsum</a></li>
            <li><a href="">Lorem Ipsum</a></li>
            <li><a href="">Lorem Ipsum</a></li>
        </ul>

        <ul>
            <li><a href="">Lorem Ipsum</a></li>
            <li><a href="">Lorem Ipsum</a></li>
            <li><a href="">Lorem Ipsum</a></li>
            <li><a href="">Lorem Ipsum</a></li>
        </ul>

        <ul>
            <li><a href="">Lorem Ipsum</a></li>
            <li><a href="">Lorem Ipsum</a></li>
            <li><a href="">Lorem Ipsum</a></li>
            <li><a href="">Lorem Ipsum</a></li>
        </ul>
    </footer>
</body>

</html>