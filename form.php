<?php require "content_dynamique/header.php"; ?>
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

<?php require "content_dynamique/footer.php"; ?>