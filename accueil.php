<!DOCTYPE html>
<html lang="fr-FR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
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

        <section class="mieux_notees">
            <div class="description">
                <h4>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus, 
                    voluptates dolores maiores reprehenderit autem saepe. 
                    Maxime illo ipsum nisi eaque accusantium libero dolore eos numquam enim. 
                    Error, hic! Blanditiis corrupti cum dolorum enim laboriosam et in incidunt impedit! 
                    Exercitationem corporis a hic nisi ab? In eos illo aperiam? Distinctio, exercitationem.
                </h4>
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
