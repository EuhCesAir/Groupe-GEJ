<?php
require('config.php');
              session_start();
               $result=false;
 
        if(isset($_POST['submit'])){
        $mdpUtilisateur=$_POST['tb_mdpUtilisateur'];
        $nmdp=$_POST['tb_newMdp'];
        $vmdp=$_POST['tb_confirmMdp'];
        $NomAdherent=$_SESSION['username'];

	$password = stripslashes($_REQUEST['tb_mdpUtilisateur']);
	$password = mysqli_real_escape_string($conn, $password);
    $query = "SELECT pseudo , mdp FROM Utilisateurs WHERE pseudo='$NomAdherent' and mdp='".hash('sha256', $password)."';";
	$result = mysqli_query($conn,$query) ;
	$rows = mysqli_num_rows($result);
	if($rows==1){
	    $_SESSION['pass'] = $password;
	}else{
		$message = "Le mot de passe est incorrect.";
	}


            if (($mdpUtilisateur!='')&&($nmdp!='')&&($vmdp!='')) {
                if ($mdpUtilisateur==$_SESSION['pass']){
                    if($nmdp==$vmdp){
                    $sql="UPDATE Utilisateurs SET mdp='".hash('sha256', $nmdp)."' WHERE pseudo='$NomAdherent';";
                    $result=mysqli_query($conn,$sql);
                    echo 'Modification du mot de passe effectuee avec succes';
                    $_SESSION['pass']=$nmdp;
                    } else {
                        echo 'Erreur entre le nouveau mot de passe entr&eacute; et la verification';
                    }
                } else {
                    echo 'Le mot de passe actuel n\'est pas valide';
                    }
            } else {
                echo 'Veuillez remplir tous les champs';
            }
        }    

    ?>
    <form method="post" action="">
        <label>Mot de passe actuel : <input type="password" name="tb_mdpUtilisateur" ></label><br>
        <label>Nouveau mot de passe : <input type="password" name="tb_newMdp" ></label><br>
        <label>Verification mot de passe : <input type="password" name="tb_confirmMdp" ></label><br>
        <input type="submit" name="submit" value=" Envoyer ">
    </br>
        <a href="index.php">acceuil</a>
</form>