<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>liste des utilisateurs</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <div class="link_container">
            

            <table class="tab">
            
                <h2>LISTE DES UTILISATEURS</h2>
                <a href="addUser.php" class="btnajouter"> <img src="btnajouter.png"></a>
            <thead>
                <?php
                    include_once "connect_ddb.php";
                    //liste des utilisateurs
                    $sql = "SELECT * FROM users";
                    $result = mysqli_query($conn,$sql);
                    if (mysqli_num_rows($result) > 0){
                    // afficher les utilisateurs
                ?>
                
                <tr>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Modifier</th>
                    <th>Supprimer</th>
                </tr>
            </thead>
            <tbody>
            <?php
                while ($row = mysqli_fetch_assoc($result)){
            ?>
            <tr>
                <td><?=$row['username']?></td>
                <td><?=$row['email']?></td>
                <td class="image"><a href="modifyUser.php?id=<?=$row['user_id']?>"><img src="btnmodifier.jpeg" alt=""></a></td>
                <td class="image"><a href="deleteUser.php?id=<?=$row['user_id']?>"><img src="btnsupprimer.jpeg" alt=""></a></td>
            </tr>
            <?php
              }
            }
            else{
                echo "<p class='message'>0 utilisateur présent !</p>";
            }
                ?>
            </tbody>
        </table>
        </div>

        
    </main>
</body>
</html>