<?php require "content_dynamique/header.php"; ?>

<section>
    <h2>Ma biographie</h2>  
    
    <div id="bio">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut </p>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut porro reprehenderit odio cumque. Tempore id eum
            modi, cupiditate aliquid quod officiis culpa ad nam, saepe nisi fugiat aperiam recusandae et!
            Eius doloremque quidem cumque ipsa iure, sapiente autem illo itaque recusandae. Doloremque tempora quibusdam
            ea assumenda maxime molestias atque autem consequatur dolores, quia ex voluptatum animi eveniet unde
            accusantium est.</p>
        <p>Accusantium excepturi odit ea, aperiam alias, deserunt laborum modi nam ratione placeat id impedit a
            necessitatibus libero dolores veritatis distinctio fuga suscipit cum ipsa nulla quae unde corrupti.
            Delectus, minus.
            Quis rem aut expedita nostrum illo beatae explicabo ipsa. Commodi perspiciatis ratione voluptatum. Corrupti,
            officia unde ullam numquam laborum aliquid quod laudantium veniam odio, sequi animi eos voluptatum
            accusantium maxime!</p>
    </div>
</section>

<section>
    <h2>Mes titres</h2>
</section>



<section id="import_musique">
    <h2>Déposer de nouveau titres</h2>
    <form action="fichiers_config/traitement_import_musique.php" method="post" enctype="multipart/form-data">
            <div>
                <label for="titre">Titre</label>
                <input type="text" id="titre" name="titre" required>
            </div>
            <div>
                <label for="artiste">Artiste</label>
                <input type="text" id="artiste" name="artiste" required>
            </div>
            <div>
                <label for="album">Album</label>
                <input type="text" id="album" name="album">
            </div>
            <div>
                <label for="genre">Genre</label>
                <input type="text" id="genre" name="genre">
            </div>
            <div>
                <label for="fichier_musique">Fichier Musique</label>
                <input type="file" id="fichier_musique" name="fichier_musique" accept="audio/*" required>
            </div>
            <div>
                <input type="submit" value="Importer">
            </div>
    </form>
</section>

<?php require "content_dynamique/footer.php"; ?>