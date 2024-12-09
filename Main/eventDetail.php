<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Page</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        function handleSearch() {
            const query = document.getElementById('searchQuery').value.toLowerCase();
            const location = document.getElementById('searchLocation').value.toLowerCase();
            const date = document.getElementById('searchDate').value;

            alert(`Searching for: "${query}" in "${location}" on "${date}"`);
        }

        function toggleFAQ(faqId) {
            const faqContent = document.getElementById(faqId);
            faqContent.classList.toggle('hidden');
        }
    </script>
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
                <button type="button" class="text-white bg-[#328E4E] hover:bg-green-800 duration-300 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-[#328E4E] dark:hover:bg-[#328E4E] dark:focus:ring-[#1d3b24]">
                    Donate
                </button>
            </div>
        </div>
    </nav>

    <!-- Milieu -->
    <main class="container mx-auto mt-20 px-4 py-10 bg-white shadow-md rounded-lg">
        <div class="flex flex-col md:flex-row items-center justify-between space-y-8 md:space-y-0">
            <div class="w-full md:w-1/2 space-y-4">
                <?php
                include "conn.php";
                $eventID=$_GET['eventID'];
                $req="select Nom, Description, Location, DATE_FORMAT(Date, '%b') as month, DATE_FORMAT(Date, '%d') as day, DAYNAME(Date) as dayName, DATE_FORMAT(startTime, '%h:%i %p') as startTime, DATE_FORMAT(endTime, '%h:%i %p') as endTime from evenements where IDevent=$eventID";
                $res=mysqli_query($conn, $req);
                while($row=mysqli_fetch_assoc($res)) {
                    $nom=$row["Nom"];
                    $Description=$row["Description"];
                    $Location=$row['Location'];
                    $month=$row['month'];
                    $day=$row['day'];
                    $dayName=$row['dayName'];
                    $startTime=$row['startTime'];
                    $endTime=$row['endTime'];
                }
                ?>
                <h1 class="text-3xl font-bold text-gray-800"><?php echo($nom); ?></h1>
                <p class="text-gray-600 text-justify">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vehicula dapibus erat, a viverra erat efficitur ac. Ut bibendum velit vel vehicula fermentum.
                </p>
            </div>
            <div class="w-full md:w-1/2 flex justify-center">
                <div class="bg-gray-100 p-6 rounded-lg shadow-md w-full md:w-3/4">
                    <h2 class="text-lg font-semibold text-gray-800 text-center mb-4">Date & Temp</h2>
                    <p class="text-gray-700 text-center mb-4"><?php echo($dayName.", ".$day." ".$month." à ".$startTime); ?></p>
                    <button class="bg-[#328E4E] text-white font-medium py-2 px-4 rounded-lg w-full hover:bg-green-800 transition duration-300">
                        Postuler maintenant
                    </button>
                </div>
            </div>
        </div>
    </main>

    <!-- Section Description et Lieu de la Campagne -->
<section class="bg-gray-100 py-10">
    <div class="container mx-auto px-4 flex flex-col md:flex-row justify-between items-start space-y-6 md:space-y-0">
        <!-- Partie gauche -->
        <div class="md:w-1/2 space-y-6">
            <div>
                <h2 class="text-2xl font-bold mb-2">Description</h2>
                <div class="flex items-start justify-between">
                    <p class="text-gray-700 text-justify flex-1">
                    <?php echo($Description); ?>
                    </p>
                    
                </div>
            </div>
            <div class="mt-4">
                <h2 class="text-2xl font-bold mb-2">Heure</h2>
                <p class="text-gray-700 mb-2">Heure de départ: <?php echo($startTime); ?></p>
                <p class="text-gray-700">Heure de fin: <?php echo($endTime); ?></p>
            </div>
        </div>

        <!-- Partie droite -->
        <div class="md:w-1/2 text-right">
            <h2 class="text-2xl font-bold mb-2">Lieu de la campagne</h2>
            <div class="bg-black h-28 w-full mb-4"></div>
            <h3 class="text-lg font-bold mb-2">Lorem Ipsum</h3>
            <p class="text-gray-700">
            <?php echo($Location); ?>
            </p>
        </div>
    </div>
</section>


    <!-- Section Partenaires et Sponsors -->
    <section class="bg-white py-10">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-8">Partenaires et Sponsors</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <div class="bg-gray-300 h-28 flex items-center justify-center">
                    <p class="text-gray-600 font-bold">Logo 1</p>
                </div>
                <div class="bg-gray-300 h-28 flex items-center justify-center">
                    <p class="text-gray-600 font-bold">Logo 2</p>
                </div>
                <div class="bg-gray-300 h-28 flex items-center justify-center">
                    <p class="text-gray-600 font-bold">Logo 3</p>
                </div>
                <div class="bg-gray-300 h-28 flex items-center justify-center">
                    <p class="text-gray-600 font-bold">Logo 4</p>
                </div>
                <div class="bg-gray-300 h-28 flex items-center justify-center">
                    <p class="text-gray-600 font-bold">Logo 5</p>
                </div>
                <div class="bg-gray-300 h-28 flex items-center justify-center">
                    <p class="text-gray-600 font-bold">Logo 6</p>
                </div>
                <div class="bg-gray-300 h-28 flex items-center justify-center">
                    <p class="text-gray-600 font-bold">Logo 7</p>
                </div>
                <div class="bg-gray-300 h-28 flex items-center justify-center">
                    <p class="text-gray-600 font-bold">Logo 8</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-6">
        <div class="container mx-auto px-4 space-y-4 md:space-y-0 md:flex md:justify-between">
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
        </div>
    </footer>
</body>

</html>
