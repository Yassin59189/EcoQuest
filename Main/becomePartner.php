<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Become partner</h1>
    <form action="becomePartner.php" method="post">
        <label for="firstName">First name</label>
        <input type="text" name="firstName" id=""><br>

        <label for="lastName">Last name</label>
        <input type="text" name="lastName" id=""><br>

        <label for="businessEmail">Business email</label>
        <input type="email" name="businessEmail" id=""><br>

        <label for="tel">Phone number</label>
        <input type="tel" name="tel" id=""><br>

        <label for="address">Business address</label>
        <input type="text" name="address" id=""><br>

        <label for="businessName">Business name</label>
        <input type="text" name="businessName" id=""><br>

        <label for="vertical">Partner vertical</label>
        <select name="vertical" id="">
            <option value="Sustainable Fashion">Sustainable Fashion</option>
            <option value="Home & Living">Home & Living</option>
            <option value="Health & Wellness">Health & Wellness</option>
            <option value="Food & Beverage">Food & Beverage</option>
            <option value="Personal Care">Personal Care</option>
            <option value="Green Technology">Green Technology</option>
            <option value="Artisanal & Handmade Goods">Artisanal & Handmade Goods</option>
        </select><br>

        <label for="message">Message</label>
        <textarea name="message" id=""></textarea><br>

        <input type="submit" name="submit" value="Become a partner">
    </form>


    <?php
    include "conn.php";
    if(isset($_POST["submit"])){
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $businessEmail = $_POST['businessEmail'];
        $address = $_POST['address'];
        $businessName = $_POST['businessName'];
        $tel = $_POST['tel'];
        $vertical = $_POST['vertical'];
        $message = $_POST['message'];

        $errors = array();

        if(empty($firstName) OR empty($lastName) OR empty($businessEmail) OR empty($businessName) OR empty($address) OR empty($tel) OR empty($vertical)){
            array_push($errors, "All fields are required");
        }

        if(count($errors)>0) {
            foreach($errors as $error) {
                echo("<p>$error</p>");
            }
        }

        else {
            $req = "insert into partenaires (firstname, lastname, role, email, vertical, businessName, location, tel, message)
            values ('$firstName', '$lastName', 'partner', '$businessEmail', '$vertical', '$businessName', '$address', '$tel', '$message')";
            $res = mysqli_query($conn, $req);

            if($res) {
                echo("form submitted");
            }
        }
    }

    ?>
</body>
</html>