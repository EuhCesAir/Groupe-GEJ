<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion</title>
</head>
<body>
    <h1>Bienvenu dans la gestion de commentaire </h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>pseudo</th>
                <th>email</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>rang</th>
            </tr>
        </thead>
        <tbody>
    <?php
    
        
        require('config.php');

        $query = "SELECT * FROM Utilisateurs;";
        $result = mysqli_query($conn,$query) ; 
        $rows =  mysqli_fetch_all($result);
 
        foreach ($rows as $key => $row)
        {
            $id = $row[0];
            echo "
                <td>'".$row[0]."'</td> 
                <td>'".$row[1]."'</td>
                <td>'".$row[2]."'</td>
                <td>'".$row[3]."'</td>
                <td>'".$row[4]."'</td>
                <td>'".$row[6]."'</td>
                <td><a title='Supprimer' href='deletecompte.php'>&#128465;</a></td>
                </tr>
               
            ";
         
        }
      
       
       echo $id;
    ?>
    
</body>
</html>