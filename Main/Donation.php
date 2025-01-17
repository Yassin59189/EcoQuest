<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="Main.css">
    <title>Donation Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 ">
   <!-- Header -->
 <?php
  session_start();
  $ID=$_SESSION['id'];?>
     <nav
      class="bg-[#044952] dark:bg-[#044952] fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600"
    >
      <div
        class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4"
      >
        <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
          <img src="logo equoquest imen-06.png" class="h-12" alt="Logo" />
        </a>

        <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
          
        <?php 
    if(isset($_SESSION["id"])) {
        
        echo('
        <a href="profile.php">
            <div class="w-10 h-10 rounded-full bg-cover bg-center" style="background-image: url('."../uploads/1733764460.jpg".'); cursor: pointer;"></div>
        </a>');
    } else {
        
        echo('<a href="logout.php" class="text-white"><button type="button" class="text-white bg-[#FF9100] hover:bg-green-800 duration-300 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-[#FF9100] dark:hover:bg-[#FFCE00] dark:focus:ring-[#1d3b24]" >Login</button></a>');
    }
?>

          </button>
          <button
            id="menu-toggle"
            class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
          >
            <span class="sr-only">Open main menu</span>
            <svg
              class="w-5 h-5"
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 17 14"
            >
              <path
                stroke="currentColor"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M1 1h15M1 7h15M1 13h15"
              />
            </svg>
          </button>
        </div>

        <div
          id="navbar-sticky"
          class="hidden items-center justify-between w-full md:flex md:w-auto md:order-1"
        >
          <ul
            class="flex flex-col p-4 md:p-0 mt-4 text-white font-medium border rounded-lg bg-[#044952] md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0  dark:bg-gray-800 md:dark:bg-[#044952] dark:border-gray-700"
          >
          <li>
              <a
                href="home.php"
                class="block py-2 px-3 text-gray-900 rounded transition duration-300 hover:bg-gray-100 md:hover:bg-transparent md:hover:text-[#FF9100] md:p-0 md:dark:hover:text-[#FF9100] dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"
                >Acceuil</a
              >
            </li>
            <li>
              <a
                href="SDG.php"
                class="block py-2 px-3 text-gray-900 rounded transition duration-300 hover:bg-gray-100 md:hover:bg-transparent md:hover:text-[#FF9100] md:p-0 md:dark:hover:text-[#FF9100] dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"
                >Les ODD</a
              >
            </li>
            <li>
              <a
                href="becomePartner.php"
                class="block py-2 px-3 text-gray-900 rounded transition duration-300 hover:bg-gray-100 md:hover:bg-transparent md:hover:text-[#FF9100] md:p-0 md:dark:hover:text-[#FF9100] dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"
                >Demande de partenariat</a
              >
            </li>
            <li>
              <a
                href="Event.php"
                class="block py-2 px-3 text-gray-900 rounded transition duration-300 hover:bg-gray-100 md:hover:bg-transparent md:hover:text-[#FF9100] md:p-0 md:dark:hover:text-[#FF9100] dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"
                >Les Compagnes</a
              >
            </li>
            <li>
              <a
                href="contact.php"
                class="block py-2 px-3 text-gray-900 rounded transition duration-300 hover:bg-gray-100 md:hover:bg-transparent md:hover:text-[#FF9100] md:p-0 md:dark:hover:text-[#FF9100] dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"
                >Contact</a
              >
            </li>
            <li>
              <a
                href="donation.php"
                class="block py-2 px-3 text-white bg-[#FF9100] rounded transition duration-300 md:bg-transparent md:text-[#FF9100] md:p-0 md:dark:text-[#FF9100]"
                aria-current="page"
                >Donation</a
              >
            </li>
          
           
          </ul>
        </div>
      </div>
    </nav>

    


    <!-- Main Content -->
    <main class="container mx-auto px-4 py-10 mt-20 ">
        <form action="Actions/donationSend.php" method="post" onsubmit="return validateForm()"
            class="bg-white shadow-md rounded-lg p-6 md:p-8 max-w-lg mx-auto">
            <h1 class="text-3xl font-bold mb-6 text-[#044952] text-center ">Faites un don, Faites la Différence</h1>

            <div class="mb-4 flex">
                <!-- First Name -->
                <div class="mr-5 w-1/2">
                    
                    <input type="text" id="first-name" name="name"
                        class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500"
                        placeholder="Nom">
                    <span id="error-name" class="text-red-500 text-sm"></span>
                </div>
                <!-- Last Name -->
                <div class="w-1/2">
                    <input type="text" id="last-name" name="lastName"
                        class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500"
                        placeholder="Prénom">
                    <span id="error-lastName" class="text-red-500 text-sm"></span>
                </div>
            </div>
            <!-- Email -->
            <div class="mb-4">
                <input type="text" id="email" name="email"
                    class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500"
                    placeholder="Adresse Email">
                <span id="error-email" class="text-red-500 text-sm"></span>
            </div>
            <!-- Donation Amount -->
            <div class="mb-4">
                <input type="text" id="donation-amount" name="amount"
                    class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500"
                    placeholder="Combien souhaitez-vous donner ?">
                <span id="error-amount" class="text-red-500 text-sm"></span>
            </div>

            <!-- Credit Card Information -->
            <div class="mb-4">
                <div class="flex flex-wrap gap-2 mt-1">
                    <input type="text" id="credit-card"
                        class="flex-grow p-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500"
                        placeholder="Numéro de carte">
                    <input type="text" id="expiry-date"
                        class="w-full md:w-24 p-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500"
                        placeholder="MM/YY">
                    <input type="text" id="cvv"
                        class="w-full md:w-16 p-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500"
                        placeholder="CVV">
                </div>
            </div>

            <!-- Billing Address -->
            <div class="mb-4">
                <input type="text" id="billing-address"
                    class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500"
                    placeholder="Adresse de Facturation">
            </div>

            <!-- Donate Button -->
            <button type="submit"
                class="w-full bg-[#328E4E] text-white py-2 px-4 rounded-md hover:bg-green-800 duration-300 transition">
                Envoyer
            </button>
        </form>
    </main>

    <!-- Footer -->
    <footer class="bg-[#044952] text-white py-6 " >
        <div
            class=" mx-auto px-4 space-y-4 md:space-y-0 md:flex md:justify-between sm:items-center sm:justify-center max-w-7xl  mx-auto">
            <div>
            <a href="home.php" class="flex items-center  rtl:space-x-reverse -ml-2">
                <img src="logo equoquest imen-06.png" class="h-12" alt="Logo">
            </a>

                <p>Contact</p>
                <p>Email: ecoquest@gmail.com</p>
                <p>Phone: +216 56 650 772</p>
            </div>
            <nav class="space-y-2">
                <a href="home.php" class="block text-gray-400 hover:text-white">Acceuil</a>
                <a href="SDG.php" class="block text-gray-400 hover:text-white">Les ODD</a>
                <a href="becomePartner.php" class="block text-gray-400 hover:text-white">Demande de partenariat</a>
                <a href="Event.php" class="block text-gray-400 hover:text-white">Les Compagnes</a>
                <a href="Contact.html" class="block text-gray-400 hover:text-white">Contact</a>
            </nav>
            <div>
                <label for="newsletter" class="block text-sm font-medium text-gray-400">ABONNEZ-VOUS À NOTRE NEWSLETTER</label>
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
    <script src="donation.js"></script>
    <script>
        const menuToggle = document.getElementById('menu-toggle');
        const navbarSticky = document.getElementById('navbar-sticky');

        menuToggle.addEventListener('click', () => {
            navbarSticky.classList.toggle('hidden');
        });
    </script>
</body>

</html>