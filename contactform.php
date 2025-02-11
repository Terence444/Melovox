<?php require "content_dynamique/header.php"; ?>

<h3>♫ Laissez un nous message ! ♫</h3>
<section>

    <div id="image_area">
        <img id="image" src="visuel\image\Crowd_concert.jpg" alt="">
    </div>
    <span class="vertical_line"></span>

    <div id="contact_form">


        <div id="instructions">
            <h3>Contactez-nous!</h3>
            <p>Veuillez renseigner les champs suivants pour nous adresser votre message.</p>
        </div>

        <form onsubmit="return validateForm()" method="post" action="/submit">
            <div id="name_area">
                <input type="text" id="name" name="name" placeholder="Votre nom" required>
            </div>

            <div id="first_name_area">
                <input type="text" id="first_name" name="first_name" placeholder="Votre prénom" required>
            </div>

            <div id="email_area">
                <input type="email" id="email" name="email" placeholder="Votre email" required>
            </div>

            <div id="user_type_area">
                <legend id="question2">Êtes vous artiste?</legend>
                <div id="answers2">
                    <div>
                        <input type="radio" name="artist" id="yes">
                        <label for="yes">Oui</label>
                        <input type="radio" name="artist" id="no">
                        <label for="no">Non</label>
                    </div>
                </div>
            </div>

            <div id="share_area">
                <legend id="question3">Avez vous des créations à partager?</legend>

                <div id="answers3">
                    <div>
                        <input type="radio" name="sharing" id="yes">
                        <label for="yes">Oui</label>


                        <input type="radio" name="sharing" id="no">
                        <label for="no">Non</label>
                    </div>
                </div>
            </div>

            <textarea id="message" name="message" placeholder="Votre message" required></textarea>

            <button type="submit">Envoyer</button>


        </form>


        <script>
        function validateForm() {
            var name = document.getElementById('name').value;
            var email = document.getElementById('email').value;
            var message = document.getElementById('message').value;

            if (name === "" || email === "" || message === "") {
                alert("Tous les champs doivent être remplis!");
                return false;
            }

            return true;
        }
        </script>
    </div>
</section>

<?php require "content_dynamique/footer.php"; ?>