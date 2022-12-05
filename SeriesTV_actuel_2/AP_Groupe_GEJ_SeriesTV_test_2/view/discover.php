<!-- View -->
<?php include('head.php'); ?>
<?php include('header.php'); ?>

<section class="mieux-notees">

    <!-- Affichage des séries avec l'API -->
    <?php
        include_once "assets/conf/info.php";
        include_once "assets/api/api_tv.php";
    ?>
    
    <div class="series">
        <?php
            foreach($airing_today->results as $tt)
            {
                $de = date('d F Y', strtotime($tt->first_air_date));
                echo '<li><a href="?action=serie&id=' . $tt->id . '"><img src="'.$imgurl_2.''. $tt->poster_path . '">';
            }
        ?>
    </div>

</section>

<!-- Script pour maintenir le bouton appuyé -->
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>

<script type="text/javascript">
$(document).on("click", "ul li", function() {
    $(this).addClass("active").siblings().removeClass("active");
});
</script>

<?php include_once 'footer.php'; ?>