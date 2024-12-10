<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Login</h1>
    <form action="login.php" method="post">
    <label for="email">Email</label>
        <input type="email" name="email" id=""><br>
        <label for="password">Password</label>
        <input type="password" name="password" id=""><br>
        <input type="submit" name="submit" value="Login">
        <?php
        include "conn.php";
        session_start();
        if(isset($_POST['submit'])) {
            $email = trim($_POST['email']);
            $password = trim($_POST['password']);
            $req = "select * from utilisateur where email = '$email'";
            $res = mysqli_query($conn, $req);
            $user = mysqli_fetch_array($res, MYSQLI_ASSOC);
            if($user){
                if(password_verify($password, $user['password'])){
                    $_SESSION["name"] = $user['Nom'];
                    $_SESSION["email"] = $user['Email'];
                    $_SESSION["id"] = $user['ID'];
                    $_SESSION["role"] = $user['role'];
                    if($user['role']==='citoyen'){
                        header("Location: user/home.php");
                    } else if($user['role']==='citoyen') {
                        header("Location: partner/home.php");
                    }
                    
                } else {
                    echo("<p>password does not match</p><br>");
                    echo($user['Email']."= $email"." and ".$user['password']."= $password");
                }
            } else {
                echo("<p>Email does not match");
            }
        }
        ?>
    </form>

    <p>Don't have an account ? <a href="signup.php">Create one</a></p>
</body>
</html>