<!-- <!DOCTYPE html>
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
</html> -->






















<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Become Our Partner</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

    <!-- Header -->
    <nav class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Logo">
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">LOGO</span>
            </a>

            <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <button type="button"
                    class="text-white bg-[#328E4E] hover:bg-green-800 duration-300 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-[#328E4E] dark:hover:bg-[#328E4E] dark:focus:ring-[#1d3b24]">
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
                <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="#" class="block py-2 px-3 text-gray-900  rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-[#328E4E] md:p-0 md:dark:hover:text-[#328E4E] dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Home</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-[#328E4E] md:p-0 md:dark:hover:text-[#328E4E] dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">The SDGs</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-[#328E4E] md:p-0 md:dark:hover:text-[#328E4E] dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Partnership Request</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-[#328E4E] md:p-0 md:dark:hover:text-[#328E4E] dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Campaigns</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-[#328E4E] md:p-0 md:dark:hover:text-[#328E4E] dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 px-3 text-white bg-[#328E4E] rounded md:bg-transparent md:text-[#328E4E] md:p-0 md:dark:text-[#328E4E]" aria-current="page">Become a Partner</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-10 mt-20 ">
        <form action="becomePartner.php" method="post" class="bg-white shadow-md rounded-lg p-6 md:p-8 max-w-lg mx-auto">
            <h1 class="text-2xl font-semibold mb-6 text-center">Become Our Partner</h1>

            <div class="mb-4 flex">
                <!-- First Name -->
                <div class="mr-5 w-1/2">
                    <label for="first-name" class="block text-sm font-medium text-gray-700">
                        First Name
                    </label>
                    <input type="text" id="first-name" name="firstName"
                        class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500"
                        placeholder="First Name">
                </div>
                <!-- Last Name -->
                <div class="w-1/2">
                    <label for="last-name" class="block text-sm font-medium text-gray-700">Last Name</label>
                    <input type="text" id="last-name" name="lastName"
                        class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500"
                        placeholder="Last Name">
                </div>
            </div>

            <!-- Business Email -->
            <div class="mb-4">
                <label for="business-email" class="block text-sm font-medium text-gray-700">Business Email</label>
                <input type="email" id="business-email" name="businessEmail"
                    class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500"
                    placeholder="example@business.com">
            </div>

            <!-- Business Name -->
            <div class="mb-4">
                <label for="business-name" class="block text-sm font-medium text-gray-700">Business Name</label>
                <input type="text" id="business-name" name="businessName"
                    class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500"
                    placeholder="Your Business Name">
            </div>

            <!-- Partnership Details -->
            <div class="mb-4">
                <label for="partnership-details" class="block text-sm font-medium text-gray-700">Why would you like to partner with us?</label>
                <textarea id="partnership-details" name="partnershipDetails"
                    class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500"
                    placeholder="Enter details about your partnership"></textarea>
            </div>

            <!-- Submit Button -->
            <button type="submit"
                class="w-full bg-[#328E4E] text-white py-2 px-4 rounded-md hover:bg-green-800 duration-300 transition">
                Submit Partnership Request
            </button>
        </form>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-6">
        <div class="container mx-auto px-4 space-y-4 md:space-y-0 md:flex md:justify-between sm:items-center sm:justify-center">
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
                        class="bg-[#328E4E] text-white px-4 py-2 rounded-r-md hover:bg-green-800 duration-300 transition">
                        Subscribe
                    </button>
                </div>
            </div>
        </div>
    </footer>
               
    </body>

</html>