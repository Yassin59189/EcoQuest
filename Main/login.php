
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
/*                     if($user['role']==='citoyen'){
                           
                    } else if($user['role']==='partenaire') {
                        header("Location:partner/home.php");
                    } */
                    header("Location:home.php"); 
                    
                } else {
                    echo("<p>password does not match</p><br>");
                }
            } else {
                echo("<p>Email does not match");
            }
        }
        ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
            background-color: #111827 ; /* Bleu */
            color: #fff;
            padding: 20px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            justify-content: center ;
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
            background-color:#111827 ; /* Bleu */
            color: #fff;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        /* Formulaire */
        .login-container {
            max-width: 400px;
            margin: 80px auto 0;
            padding: 30px;
            background: #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        .login-container h1 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
        }

        .login-container label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #555;
        }

        .login-container input[type="email"],
        .login-container input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .login-container input[type="submit"] {
            width: 420px ;
            padding: 10px;
            background-color: #4CAF50; /* Couleur du bouton */
            border: none;
            color: #fff;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        .login-container input[type="submit"]:hover {
            background-color: #45a049;
        }

        .login-container p {
            text-align: center;
            margin-top: 15px;
            color: #555;
        }

        .login-container p a {
            color: #4CAF50;
            text-decoration: none;
        }

        .login-container p a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="text"><b>Welcome to EcoQuest</b></div>
    </header>

    <!-- Formulaire de connexion -->
    <div class="login-container">
        <h1>Log In</h1>
        <form action="login.php" method="post">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Enter your email" required>

            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Enter your password" required>

            <input type="submit" name="submit" value="Login">
        </form>
        <p>Don't have an account? <a href="signup.php">Create one</a></p>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Your Website. All rights reserved.</p>
    </footer>
</body>
</html>
