<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
</head>
<body>
    <h1>Sign up</h1>
    <form action="signup.php" method="post">

      // Form fields//
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

         //Submit button //
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
</html> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <style>
        /* Style général */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
        }

        /* Header */
        header {
            background-color: #044952; /* Bleu */
            color: #fff;
            padding: 20px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            justify-content: center;
        }

        header .logo {
            font-size: 24px;
            font-weight: bold;
        }

        header nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
            font-size: 16px;
        }

        header nav a:hover {
            text-decoration: underline;
        }

        /* Footer */
        footer {
            background-color: #044952; /* Bleu */
            color: #fff;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        /* Formulaire */
        .signup-container {
            max-width: 400px;
            margin: 80px auto 0;
            padding: 40px;
            background: #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        .signup-container h1 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
        }

        .signup-container label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #555;
        }

        .signup-container input[type="text"],
        .signup-container input[type="email"],
        .signup-container input[type="password"],
        .signup-container input[type="tel"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .signup-container input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50; /* Couleur du bouton */
            border: none;
            color: #fff;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        .signup-container input[type="submit"]:hover {
            background-color: #45a049;
        }

        .signup-container p {
            text-align: center;
            margin-top: 15px;
            color: #555;
        }

        .signup-container p a {
            color: #4CAF50;
            text-decoration: none;
        }

        .signup-container p a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="text text-3xl font-semibold mb-6"><b>Welcome to EcoQuest</b></div>
    </header>

    <!-- Formulaire d'inscription -->
    <div class="signup-container">
        <h1  class="text-3xl font-semibold mb-6 text-[#044952] text-center" >Sign Up</h1>
        <form action="signup.php" method="post">
            <label for="name">Full Name</label>
            <input type="text" name="name" id="name" placeholder="Enter your full name" required>

            <label for="username">Username</label>
            <input type="text" name="username" id="username" placeholder="Enter your username" required>

            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Enter your email" required>

            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Enter your password" required>

            <label for="repeatpassword">Repeat Password</label>
            <input type="password" name="repeatpassword" id="repeatpassword" placeholder="Repeat your password" required>

            <label for="adresse">Address</label>
            <input type="text" name="adresse" id="adresse" placeholder="Enter your address" required>

            <label for="tel">Phone Number</label>
            <input type="tel" name="tel" id="tel" placeholder="Enter your phone number" required>

            <input type="submit" name="submit" value="Sign Up">

            <?php
            include "conn.php";

            if (isset($_POST["submit"])) {
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
                if (mysqli_num_rows($check_res) > 0) {
                    array_push($errors, "User already exists");
                }

                if (empty($fullname) || empty($username) || empty($email) || empty($password) || empty($adresse) || empty($tel)) {
                    array_push($errors, "All fields are required");
                }
                if (strlen($password) < 8) {
                    array_push($errors, "Password must be at least 8 characters long");
                }
                if ($password !== $repeatpassword) {
                    array_push($errors, "Passwords do not match");
                }

                if (count($errors) > 0) {
                    foreach ($errors as $error) {
                        echo "<p style='color: red;'>$error</p>";
                    }
                } else {
                    $req = "insert into utilisateur (role, Nom, username, Email, password, adresse, tel) values ('citoyen', '$fullname', '$username', '$email', '$hashed_password', '$adresse', '$tel')";
                    $res = mysqli_query($conn, $req);
                    if ($res) {
                        echo "<p style='color: green;'>Registered successfully</p>";
                    }
                }
            }
            ?>
        </form>
        <p>Already registered? <a href="login.php">Log in</a></p>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Your Website. All rights reserved.</p>
    </footer>
</body>
</html>
