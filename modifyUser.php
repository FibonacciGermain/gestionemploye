<?php
    $user_id = $_GET['id'];
        if(isset($_POST['send'])){
            if(isset($_POST['username'])&&
               isset($_POST['email']) &&
               $_POST['username'] !=""&&
               $_POST['username'] !=""
            )
            {
        include_once "connect_ddb.php";
        extract($_POST);

        $sql = "UPDATE users SET username = '$username', email = '$email' WHERE user_id = $user_id";

        if (mysqli_query($conn, $sql)){
            header("location:showUser.php");
        }else{
            header("location:showUser.php?message=ModifyFail");
        }
    }else{
        header("location:showUser.php?message=EmptyFields");
    }
    }
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
        include_once "connect_ddb.php";

        //liste des informations de l'utilisateur
        $sql = "SELECT * FROM users where user_id = $user_id";
        $result = mysqli_query($conn, $sql);
        // outpout data of each row
        while($row = mysqli_fetch_assoc($result)){
    ?>
    <div class= "form">
    <a href="showUser.php" class="btnajouter"> <img src="btnretour.jpeg"></a>  
    <h2>Modifier l'utilisateur</h2>
        
        <form action="" method="POST">
        <input type="text" name="username" value="<?=$row['username']?>" placeholder="Username">
        <input type="email" name="email" value="<?=$row['email']?>" placeholder="Email">
        <input type="submit" value="Modifier" name = "send">
        
    </form>
    </div>
    
    <?php
        }
    ?>
</body>

</html>