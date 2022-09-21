<!DOCTYPE html>
<html lang="fr-FR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styless.css">
        <title>SériesTV | Acceuil</title>
    </head>
    <body>

        <header>
            <h1 class="logo"><a href="#">JugezTV</a></h1>
            <nav>
                <ul>
                    <li><a href="#">Nouveautés</a></li>
                    <li><a href="#">Populaires</a></li>
                    <li><a href="#">Découvrir</a></li>
                </ul>
            </nav>
            <button><a href="#">Mon compte</a></button>
            <!-- Faire une barre de navigation -->
        </header>

        <section class="mieux-notees">
            <div class="description">
                <h4>
                    Bienvenue sur <strong>JugezTV</strong>, votre nouveau site préféré de notation de séries !
                    Vous pourrez y retrouver les séries du moment ou encore les séries de votre enfance.
                </h4>
            </div>

            <div class="series">
                <img src="assets/big_bang_theory.jpg" alt="Big Bang Theory">
                <img src="assets/the_flash.jpg" alt="Friends">
                <img src="assets/dexter.jpg" alt="Dexter">
                <img src="assets/peaky_blinders.jpg" alt="Peaky Blinders">
                <img src="assets/resident_evil.jpg" alt="Resident Evil">
                <img src="assets/squid_game.jpg" alt="Squid Game">
                <img src="assets/teen_wolf.jpg" alt="Teen Wolf">
                <img src="assets/the_100.jpg" alt="The 100">
            </div>
        </section>

        <footer>

        </footer>

        <!-- Script pour maintenir le bouton appuyé -->
        <script
          src="https://code.jquery.com/jquery-3.6.0.js"
          integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
          crossorigin="anonymous"
        ></script>

        <script type="text/javascript">
          $(document).on("click", "ul li", function () {
            $(this).addClass("active").siblings().removeClass("active");
          });
        </script>

    </body>
</html>
