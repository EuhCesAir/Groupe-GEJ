<header>
    <h1 class="logo"><a href="?action=home">JugezTV</a></h1>
    <nav>
        <ul>
            <li><a href="?action=latest">Nouveautés</a></li>
            <li><a href="?action=popular">Populaires</a></li>
            <li><a href="?action=discover">Découvrir</a></li>
        </ul>
    </nav>

    <?php
        session_start();
        if (isset($_SESSION['username'])) {
            echo "<div class='compte'>";
            echo "<button><a href='../Connexion/logout.php'>Déconexion</a></button>";
            echo "<button><a href='../Connexion/'>Mon compte</a></button>";
            echo "</div>";
        } else {
            echo "<button><a href='../Connexion/'>Connexion</a></button>";
        }
    ?>

    <!-- Faire une barre de navigation -->
</header>