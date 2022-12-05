<?php include('head.php'); ?>
<?php include('header.php'); ?>

<?php
  $id_tv = $_GET['id'];
  include "assets/conf/info.php";
  include_once "assets/api/api_tv_id.php";
  include_once "assets/api/api_tv_video_id.php";

  if (isset($_GET['id'])) {
    $id_tv = $_GET['id'];
    $rel = date('d F Y', strtotime($tv_id->last_air_date));
?>

<h1><?php echo $tv_id->original_name ?></h1>

<hr>
<img src="http://image.tmdb.org/t/p/w300<?php echo $tv_id->poster_path ?>" />
<p>Titre : <?php echo $tv_id->original_name ?></p>
<p>Status : <?php echo $tv_id->status ?></p>
<p>Genres :

  <?php
    foreach ($tv_id->genres as $g) {
      echo '<span>' . $g->name . '</span> ';
    }
  ?>

</p>
<p>Résumée : <?php echo $tv_id->overview ?></p>
<p>Créer par :

  <?php
    foreach ($tv_id->created_by as $pco) {
      echo $pco->name . "&nbsp;&nbsp;";
    }
  ?>
</p>
<hr>

<?php
} else {
  echo "</h5>";
}
?>

<div id="google_translate_element">
  <script type="text/javascript">
    function googleTranslateElementInit() {
      new google.translate.TranslateElement({
          pageLanguage: 'fr-FR'
        },
        'google_translate_element');
    }
  </script>

  <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementIni
  t"></script>
</div>

<button><a href="../Notation">Notation</a></button>