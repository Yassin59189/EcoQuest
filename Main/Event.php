<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Page</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <script>

        function toggleFAQ(faqId) {
            const faqContent = document.getElementById(faqId);
            faqContent.classList.toggle('hidden');
        }
    </script>
</head>

<body class="bg-gray-100 ">

    <!-- Header -->
    <nav
        class="bg-[#044952] dark:bg-[#044952] fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">

            <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Logo">
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">LOGO</span>
            </a>

            <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <button type="button"
                    class="text-white bg-[#FF9100] hover:bg-green-800 duration-300 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-[#FF9100] dark:hover:bg-[#FFCE00] dark:focus:ring-[#1d3b24]">
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
                <ul
                    class="flex flex-col p-4 md:p-0 mt-4 font-medium border  rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-[#044952] dark:border-gray-700">
                    <li>
                        <a href="home.php"
                            class="block py-2 px-3 text-gray-900  rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-[#FF9100] md:p-0 md:dark:hover:text-[#FF9100] dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Home</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-[#FF9100] md:p-0 md:dark:hover:text-[#FF9100] dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">The
                            SDGs</a>
                    </li>
                    <li>
                        <a href="becomePartner.php"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-[#FF9100] md:p-0 md:dark:hover:text-[#FF9100] dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Partnership
                            Request</a>
                    </li>
                    <li>
                        <a href="Event.php"
                            class="block py-2 px-3 text-white bg-[#FF9100] rounded md:bg-transparent md:text-[#FF9100] md:p-0 md:dark:text-[#FF9100]">Campaigns</a>
                    </li>
                    <li>
                        <a href="Contact.html"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-[#FF9100] md:p-0 md:dark:hover:text-[#FF9100] dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
                    </li>
                    <li>
                        <a href="Donation.html"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-[#FF9100] md:p-0 md:dark:hover:text-[#FF9100] dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"
                            aria-current="page">Donation</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="relative bg-gray-200 h-60 flex items-center justify-center ">
        <div class="absolute inset-0"></div>
        <div class="absolute bottom-12 left-0 right-0 bg-[#032529] text-white p-4  border rounded-lg mx-5">

                <form action="event.php"  method="get" enctype="multipart/form-data" >
                <div class="container mx-auto grid grid-cols-1 md:grid-cols-4 gap-4">
                <input id="searchQuery" name="name" type="text" placeholder="Looking for"
                    class="p-2 rounded bg-gray-800 text-white">
                <input id="searchLocation" type="text" placeholder="In" name="location" class="p-2 rounded bg-gray-800 text-white">
                <input id="searchDate" name="date" type="date" class="p-2 rounded bg-gray-800 text-white">
                <button type="submit" name="search" class="bg-[#328E4E] p-2 rounded">Search</button>
                </div>
                <?php
                    $eventName= isset($_GET['name']) ? $_GET['name'] : '';
                    $eventLocation= isset($_GET['location']) ? $_GET['location'] : '';
                    $eventDate= isset($_GET['date']) ? $_GET['date'] : '';
                
                ?>
                </form>
          
        </div>
    </section>
    



    <!-- Upcoming Campaigns -->
     <?php 
     if($eventName ==="" && $eventLocation ==="" && $eventDate ===""){
      ?>
    <section class="container mx-auto py-12 px-6">
    <h2 class="text-3xl font-semibold mb-6 text-[#044952]">Campagnes à venir</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
            <!-- Campaign Card -->
             
             <?php
                include "conn.php";
                $req="select IDevent, DATE_FORMAT(Date, '%b') as month, DATE_FORMAT(Date, '%d') as day, Nom, eventType,eventImage from evenements where date > CURDATE()";
                $res=mysqli_query($conn, $req);
                while($row=mysqli_fetch_assoc($res)){
           
                    echo(' <a href="eventDetail.php?eventID='.$row['IDevent'].'">           <div
                class="bg-gray-200 shadow rounded p-4 hover:shadow-lg transform hover:scale-105 transition duration-300">
                <img src="../uploads/'.$row['eventImage'].'" class="w-full h-32  rounded"/>
                <div class="mt-4 text-sm font-bold">'.$row['eventType'].'</div>
                <div class="flex items-center space-x-2 mt-2">
                    <div class="text-xl font-bold">'.$row['month'].'</div>
                    <div class="text-lg font-bold">'.$row['day'].'</div>
                </div>
                <p class="text-sm mt-2">'.$row['Nom'].'</p>
                </div></a>');
                }
             ?>
    </section>

    <!-- Past Campaigns -->
    <section class="container mx-auto py-12 px-6">
        <h2 class="text-3xl font-semibold mb-6 text-[#044952]">Campagnes passées</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            <!-- Campaign Card -->
            <?php
                $req1="select IDevent, DATE_FORMAT(Date, '%b') as month, DATE_FORMAT(Date, '%d') as day, Nom, eventType,eventImage from evenements where date < CURDATE()";
                $res1=mysqli_query($conn, $req1);
                while($row1=mysqli_fetch_assoc($res1)){
                    echo(' <a href="eventDetail.php?eventID='.$row1['IDevent'].'">           <div
                class="bg-gray-200 shadow rounded p-4 hover:shadow-lg transform hover:scale-105 transition duration-300">
                <img src="../uploads/'.$row1['eventImage'].'" class="w-full h-32  rounded"/>
                <div class="mt-4 text-sm font-bold">'.$row1['eventType'].'</div>
                <div class="flex items-center space-x-2 mt-2">
                    <div class="text-xl font-bold">'.$row1['month'].'</div>
                    <div class="text-lg font-bold">'.$row1['day'].'</div>
                </div>
                <p class="text-sm mt-2">'.$row1['Nom'].'</p>
            </div></a>');
                }
             ?>
            
        </div>
    </section>
    <?php 
     }else{
        include "conn.php";
        if($eventName !=="" && $eventLocation !=="" && $eventDate !==""){
            $searchReq="select IDevent, DATE_FORMAT(Date, '%b') as month, DATE_FORMAT(Date, '%d') as day, Nom,eventImage, eventType from evenements
            where Nom='$eventName' and Location='$eventLocation' and Date='$eventDate'";
        } else {
            $searchReq="select IDevent, DATE_FORMAT(Date, '%b') as month, DATE_FORMAT(Date, '%d') as day, Nom,eventImage, eventType from evenements
            where Nom='$eventName' or Location='$eventLocation' or Date='$eventDate'";
        }
        $searchRes = mysqli_query($conn, $searchReq);
        while($row2=mysqli_fetch_assoc($searchRes)){
            echo(' <a href="eventDetail.php?eventID='.$row2['IDevent'].'">           <div
        class="bg-gray-200 w-[25%] mt-5 shadow rounded p-4 hover:shadow-lg transform hover:scale-105 transition duration-300">
         <img src="../uploads/'.$row2['eventImage'].'" class="w-full h-32  rounded"/>
        <div class="mt-4 text-sm font-bold">'.$row2['eventType'].'</div>
        <div class="flex items-center space-x-2 mt-2">
            <div class="text-xl font-bold">'.$row2['month'].'</div>
            <div class="text-lg font-bold">'.$row2['day'].'</div>
        </div>
        <p class="text-sm mt-2">'.$row2['Nom'].'</p>
        </div></a>');
        }
     }
      ?>
    <!-- FAQ Section -->
    <section class="container mx-auto py-12 px-6">
        <h2 class="text-3xl font-semibold mb-6 text-[#044952]">Questions fréquemment posées (FAQ)</h2>
        <div class="space-y-4">
            <!-- FAQ Item -->
            <div class="bg-gray-200 rounded p-4">
                <div class="flex justify-between items-center">
                    <p>What is EcoQuest?</p>
                    <button onclick="toggleFAQ('faq1')" class="text-xl font-bold">+</button>
                </div>
                <div id="faq1" class="mt-2 hidden">
                    <p class="text-sm text-gray-700">Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum.</p>
                </div>
            </div>
            <!-- FAQ Item -->
            <div class="bg-gray-200 rounded p-4">
                <div class="flex justify-between items-center">
                    <p>How can I contribute?</p>
                    <button onclick="toggleFAQ('faq2')" class="text-xl font-bold">+</button>
                </div>
                <div id="faq2" class="mt-2 hidden">
                    <p class="text-sm text-gray-700">Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum.</p>
                </div>
            </div>
            <!-- FAQ Item -->
            <div class="bg-gray-200 rounded p-4">
                <div class="flex justify-between items-center">
                    <p>Where do the donations go?</p>
                    <button onclick="toggleFAQ('faq3')" class="text-xl font-bold">+</button>
                </div>
                <div id="faq3" class="mt-2 hidden">
                    <p class="text-sm text-gray-700">Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum.</p>
                </div>
            </div>
        </div>
    </section>




    <!-- Footer -->
    <footer class="bg-[#044952] text-white py-6">
        <div
            class="container mx-auto px-4 space-y-4 md:space-y-0 md:flex md:justify-between sm:items-center sm:justify-center">
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
    <script>
        const menuToggle = document.getElementById('menu-toggle');
        const navbarSticky = document.getElementById('navbar-sticky');

        menuToggle.addEventListener('click', () => {
            navbarSticky.classList.toggle('hidden');
        });
    </script>
</body>

</html>
