<?php
    if(isset($_POST['send'])){
        if(isset($_POST['username'])&&
            isset($_POST['email'])&&
            $_POST['username'] !=""&&
            $_POST['username'] !=""
        )
    {
    include_once "connect_ddb.php";
    extract($_POST);

    $sql = "INSERT INTO users (username, email) VALUES ('$username', '$email')";
    if (mysqli_query($conn, $sql)){
        header("location:showUser.php");
    }else{
        header("location:addUser.php?message=AddFail");
    }
}else{
    header ("location:addUser.php?message=EmptyFields");
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class= "form">
    <a href="showUser.php" class="btnajouter"> <img src="btnretour.jpeg"></a>  
    <h2>Ajouter l'utilisateur</h2>
        <p class="erreur_message">
            Veillez remplir tous les champs !!
        </p>

        <form action="" method="POST">
        <input type="text" name="username" placeholder="Username">
        <input type="email" name="email" placeholder="Email">
        <input type="submit" value="Ajouter" name = "send">
        
    </form>
    </div>
    
</body>

</html>
