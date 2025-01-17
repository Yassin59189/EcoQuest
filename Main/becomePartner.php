<?php
include "conn.php";
session_start();
if(isset($_SESSION['id'])){
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="Main.css">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    
</body>
</html>



<?php
    if(isset($_POST["submit"])){
        $userid=$_SESSION['id'];
        $userInfoReq="select * from utilisateur where id='$userid'";
        $userInfoRes=mysqli_query($conn, $userInfoReq);
        if($userInfo=mysqli_fetch_assoc($userInfoRes)){
            $Name=$userInfo['Nom'];
            $tel=$userInfo['tel'];
        }
        $businessEmail = $_POST['businessEmail'];
        $businessAdresse =  isset($_POST['businessAdresse']) ? $_POST['businessAdresse'] : '' ;
        $businessName = $_POST['businessName'];
        $message = isset($_POST['partnershipDetails']) ? $_POST['partnershipDetails'] : '' ;

        $errors = array();

        if(empty($businessEmail) OR empty($businessName) OR empty($businessAdresse) OR empty($message)){
            array_push($errors, "All fields are required");
        }

        if(count($errors)>0) {
            foreach($errors as $error) {
                echo("<p>$error</p>");
            }
        }

        else {
            $req = "insert into partenaires (iduser, nom,  email, businessName, location, tel, message)
            values ('$userid', '$Name', '$businessEmail', '$businessName', '$businessAdresse', '$tel', '$message')";
            $res = mysqli_query($conn, $req);

            if($res) {
                echo("form submitted");
            }
        }
    }

    ?>

    <nav class="bg-[#044952] dark:bg-[#044952] fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="logo equoquest imen-06.png" class="h-12" alt="Logo">
            </a>


            <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <button type="button"
                    class="text-white bg-[#FF9100] hover:bg-green-800 duration-300 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-[#FF9100] dark:hover:bg-[#FFCE00]   dark:focus:ring-[#1d3b24]">
                    Donate
                </button>
                <button id="menu-toggle"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>

            <div id="navbar-sticky" class="hidden items-center justify-between w-full md:flex md:w-auto md:order-1">
                <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-[#044952] dark:border-gray-700">
                    <li>
                        <a href="home.php" class="block py-2 px-3 text-gray-900  rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-[#FF9100] md:p-0 md:dark:hover:text-[#FF9100] dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Home</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-[#FF9100] md:p-0 md:dark:hover:text-[#FF9100] dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">The SDGs</a>
                    </li>
                    <li>
                        <a href="becomePartner" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-[#FF9100] md:p-0 md:dark:hover:text-[#FF9100] dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 md:text-[#FF9100] md:dark:text-[#FF9100]">Partnership Request</a>
                    </li>
                    <li>
                        <a href="Event.php" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-[#FF9100] md:p-0 md:dark:hover:text-[#FF9100] dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Campaigns</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-[#FF9100] md:p-0 md:dark:hover:text-[#FF9100] dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 px-3 text-white bg-[#FF9100] rounded md:bg-transparent  md:p-0 " aria-current="page">Donation</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container mx-auto px-4 py-10 mt-20 ">
        <form action="becomePartner.php" method="post" class="bg-white shadow-md rounded-lg p-6 md:p-8 max-w-lg mx-auto">
            <h1 class="text-3xl font-semibold mb-6 text-[#044952] text-center">Become Our Partner</h1>

            

            <div class="mb-4">
                <label for="business-email" class="block text-sm font-medium text-gray-700">Business Email *</label>
                <input type="email" id="business-email" name="businessEmail"
                    class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500"
                    placeholder="example@business.com">
            </div>
            <div class="mb-4">
                <label for="business-name" class="block text-sm font-medium text-gray-700">Business Name *</label>
                <input type="text" id="business-name" name="businessName"
                    class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500"
                    placeholder="Your Business Name">
            </div>
            <div class="mb-4">
                <label for="business-name" class="block text-sm font-medium text-gray-700">Business Adresse *</label>
                <input type="text" id="business-name" name="businessAdresse"
                    class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500"
                    placeholder="Your Business Adresse">
            </div>
            <div class="mb-4">
                <label for="partnership-details" class="block text-sm font-medium text-gray-700">Why would you like to partner with us?</label>
                <textarea id="partnership-details" name="partnershipDetails"
                    class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500"
                    placeholder="Enter details about your partnership"></textarea>
            </div>

            <input class="w-full bg-[#328E4E] text-white py-2 px-4 rounded-md hover:bg-green-800 duration-300 transition" type="submit" name="submit" value="Submit Partnership Request">
        </form>
    </main>

    <!-- Footer -->
    <footer class="bg-[#044952] text-white py-12">
        <div class="container mx-auto  px-4 space-y-4 md:space-y-0 md:flex md:justify-between sm:items-center sm:justify-center">
            <div>
                <p class="text-lg font-bold">LOGO</p>
                <p>Contact</p>
                <p>Email: ecoquest@gmail.com</p>
                <p>Phone: +216 56 650 772</p>
            </div>
            <nav class="space-y-2">
                <a href="#" class="block text-gray-400 hover:text-white">Home</a>
                <a href="#" class="block text-gray-400 hover:text-white">The SDGs</a>
                <a href="#" class="block text-gray-400 hover:text-white">Partnership Request</a>
                <a href="#" class="block text-gray-400 hover:text-white">Campaigns</a>
                <a href="#" class="block text-gray-400 hover:text-white">Contact</a>
            </nav>
            <div>
                <label for="newsletter" class="block text-sm font-medium text-gray-400">Email Address</label>
                <div class="flex mt-1">
                    <input type="email" id="newsletter"
                        class="p-2 border border-gray-600 rounded-l-md focus:ring-blue-500 focus:border-blue-500"
                        placeholder="Enter your email">
                    <button
                        class="bg-[#FF9100] text-white px-4 py-2 rounded-r-md hover:bg-[#FFCE00] duration-300 transition">
                        Subscribe
                    </button>
                </div>
            </div>
        </div>
    </footer>
               
    </body>

</html>
<?php
} else {
    header("location: login.php");
}
?>