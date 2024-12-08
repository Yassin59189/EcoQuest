<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
</head>
<body>
    <h1>Sign up</h1>
    <form action="signup.php" method="post">

        <!-- Form fields -->
        <label for="name">Full name</label>
        <input type="text" name="name" id=""><br>
        <label for="usernam">Username</label>
        <input type="text" name="username" id=""><br>
        <label for="email">Email</label>
        <input type="email" name="email" id=""><br>
        <label for="password">Password</label>
        <input type="password" name="password" id=""><br>
        <label for="password">Repeat Password</label>
        <input type="password" name="repeatpassword" id=""><br>
        <label for="adresse">Adresse</label>
        <input type="text" name="adresse" id=""><br>
        <label for="tel">Tel</label>
        <input type="tel" name="tel" id=""><br>

        <!-- Submit button -->
         <input type="submit" name="submit" value="Sign up">

         <?php
include "conn.php";

if(isset($_POST["submit"])) {
    $fullname = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $repeatpassword = $_POST['repeatpassword'];
    $adresse = $_POST['adresse'];
    $tel = $_POST['tel'];

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $errors = array();

    $check_req = "select * from utilisateur where Email='$email'";
    $check_res = mysqli_query($conn, $check_req);
    if(mysqli_num_rows($check_res)>0){
        array_push($errors, "User already exist");
    }


    if(empty($fullname) OR empty($username) OR empty($email) OR empty($password) OR empty($adresse) OR empty($tel)) {
        array_push($errors, "All fields are required");
    }
    if(strlen($password)<8) {
        array_push($errors, "Password must be at least 8 characters long");
    }
    if($password!==$repeatpassword) {
        array_push($errors, "Password does not match");
    }
    
    if(count($errors)>0) {
        foreach($errors as $error) {
            echo("<p>$error</p>");
        }
    }
    else {
        $req="insert into utilisateur (role, Nom, username, Email, password, adresse, tel) values ('citoyen', '$fullname', '$username', '$email', '$hashed_password', '$adresse', '$tel')";
        $res = mysqli_query($conn, $req);
        if($res) {
            echo("<p>Registered successfully");
        }
    }
}


?>
    </form>

    <p>Already registered? <a href="login.php">Login in</a></p>
</body>
</html>