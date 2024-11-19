<?php
include "conn.php";
$req = "select * from evenements";
$res = mysqli_query($conn, $req);


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tailwind Admin Template</title>
    <meta name="author" content="David Grzyb">
    <meta name="description" content="">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Tailwind -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');

        .font-family-karla {
            font-family: karla;
        }

        .bg-sidebar {
            background: #3d68ff;
        }

        .cta-btn {
            color: #3d68ff;
        }

        .upgrade-btn {
            background: #1947ee;
        }

        .upgrade-btn:hover {
            background: #0038fd;
        }

        .active-nav-link {
            background: #1947ee;
        }

        .nav-item:hover {
            background: #1947ee;
        }

        .account-link:hover {
            background: #3d68ff;
        }
    </style>
</head>

<body class="bg-gray-100 font-family-karla flex">

    <aside class="relative bg-sidebar h-screen w-64 hidden sm:block shadow-xl">
        <div class="p-6">
            <a href="index.php" class="text-white text-3xl font-semibold uppercase hover:text-gray-300">Admin</a>
            <button
                class="w-full bg-white cta-btn font-semibold py-2 mt-5 rounded-br-lg rounded-bl-lg rounded-tr-lg shadow-lg hover:shadow-xl hover:bg-gray-300 flex items-center justify-center">
                <i class="fas fa-plus mr-3"></i> New Report
            </button>
        </div>
        <nav class="text-white text-base font-semibold pt-3">
            <a href="index.php" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                <i class="fas fa-tachometer-alt mr-3"></i>
                Dashboard
            </a>
            <a href="events.php" class="flex items-center active-nav-link text-white py-4 pl-6 nav-item">
                <i class="fas fa-sticky-note mr-3"></i>
                Manage Events
            </a>
            <a href="partners.php"
                class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                <i class="fas fa-table mr-3"></i>
                Manage Partners
            </a>
            <a href="forms.html" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                <i class="fas fa-align-left mr-3"></i>
                Forms
            </a>
            <a href="tabs.html" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                <i class="fas fa-tablet-alt mr-3"></i>
                Manage Products
            </a>
            <a href="calendar.php"
                class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                <i class="fas fa-calendar mr-3"></i>
                Calendar
            </a>
        </nav>

    </aside>

    <div class="relative w-full flex flex-col h-screen overflow-y-hidden">
        <!-- Desktop Header -->
        <header class="w-full items-center bg-white py-2 px-6 hidden sm:flex">
            <div class="w-1/2"></div>
            <div x-data="{ isOpen: false }" class="relative w-1/2 flex justify-end">
                <button @click="isOpen = !isOpen"
                    class="realtive z-10 w-12 h-12 rounded-full overflow-hidden border-4 border-gray-400 hover:border-gray-300 focus:border-gray-300 focus:outline-none">
                    <img src="https://source.unsplash.com/uJ8LNVCBjFQ/400x400">
                </button>
                <button x-show="isOpen" @click="isOpen = false"
                    class="h-full w-full fixed inset-0 cursor-default"></button>
                <div x-show="isOpen" class="absolute w-32 bg-white rounded-lg shadow-lg py-2 mt-16">
                    <a href="#" class="block px-4 py-2 account-link hover:text-white">Account</a>
                    <a href="#" class="block px-4 py-2 account-link hover:text-white">Support</a>
                    <a href="#" class="block px-4 py-2 account-link hover:text-white">Sign Out</a>
                </div>
            </div>
        </header>

        <!-- Mobile Header & Nav -->
        <header x-data="{ isOpen: false }" class="w-full bg-sidebar py-5 px-6 sm:hidden">
            <div class="flex items-center justify-between">
                <a href="index.php" class="text-white text-3xl font-semibold uppercase hover:text-gray-300">Admin</a>
                <button @click="isOpen = !isOpen" class="text-white text-3xl focus:outline-none">
                    <i x-show="!isOpen" class="fas fa-bars"></i>
                    <i x-show="isOpen" class="fas fa-times"></i>
                </button>
            </div>

            <!-- Dropdown Nav -->
            <nav :class="isOpen ? 'flex': 'hidden'" class="flex flex-col pt-4">
                <a href="index.php"
                    class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                    <i class="fas fa-tachometer-alt mr-3"></i>
                    Dashboard
                </a>
                <a href="events.php" class="flex items-center active-nav-link text-white py-2 pl-4 nav-item">
                    <i class="fas fa-sticky-note mr-3"></i>
                    Manage Events
                </a>
                <a href="partners.php"
                    class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                    <i class="fas fa-table mr-3"></i>
                    Manage Partners
                </a>
                <a href="forms.html"
                    class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                    <i class="fas fa-align-left mr-3"></i>
                    Forms
                </a>
                <a href="tabs.html"
                    class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                    <i class="fas fa-tablet-alt mr-3"></i>
                    Manage Products
                </a>
                <a href="calendar.php"
                    class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                    <i class="fas fa-calendar mr-3"></i>
                    Calendar
                </a>
                <a href="#" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                    <i class="fas fa-cogs mr-3"></i>
                    Support
                </a>
                <a href="#" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                    <i class="fas fa-user mr-3"></i>
                    My Account
                </a>
                <a href="#" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                    <i class="fas fa-sign-out-alt mr-3"></i>
                    Sign Out
                </a>

            </nav>

        </header>

        <div class="w-full h-screen overflow-x-hidden border-t flex flex-col">
            <main class="w-full flex-grow p-6">
                <h1 class="text-3xl text-black pb-6">Manage participations</h1>
                <button id="openModalButton"
                    class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none">
                    Add Event
                </button>

                <div id="modalBackdrop"
                    class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center">
                    <!-- Modal -->
                    <div class="bg-white rounded-lg shadow-lg w-1/3 p-6">
                        <h2 class="text-lg font-semibold mb-4">Add New Event</h2>
                        <form id="eventForm" action="addEvent.php" method="post">
                            <!-- Event Name -->
                            <div class="mb-4">
                                <label for="eventName" class="block text-sm font-medium text-gray-700">Event
                                    Name</label>
                                <input type="text" id="eventName" name="eventName"
                                    class="mt-1 p-2 block w-full border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500"
                                    required>
                            </div>

                            <!-- Event Date -->
                            <div class="mb-4">
                                <label for="eventDate" class="block text-sm font-medium text-gray-700">Event
                                    Date</label>
                                <input type="date" id="eventDate" name="eventDate"
                                    class="mt-1 p-2 block w-full border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500"
                                    required>
                            </div>
                            <!-- Start and End Time -->
                            <div class="mb-4">
                                <label class="block text-sm font-medium text-gray-700">Event Time</label>
                                <div class="flex gap-4 mt-2">
                                    <div class="w-1/2">
                                        <label for="startTime" class="sr-only">Starting Time</label>
                                        <input type="time" id="startTime" name="startTime"
                                            class="p-2 border border-gray-300 rounded-md w-full focus:ring-blue-500 focus:border-blue-500"
                                            required>
                                    </div>
                                    <div class="w-1/2">
                                        <label for="endTime" class="sr-only">Ending Time</label>
                                        <input type="time" id="endTime" name="endTime"
                                            class="p-2 border border-gray-300 rounded-md w-full focus:ring-blue-500 focus:border-blue-500"
                                            required>
                                    </div>
                                </div>
                            </div>
                            <!-- Event Description -->
                            <div class="mb-4">
                                <label for="eventDescription" class="block text-sm font-medium text-gray-700">Event
                                    Description</label>
                                <textarea id="eventDescription" name="eventDescription" rows="4"
                                    class="mt-1 p-2 block w-full border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500"
                                    required></textarea>
                            </div>

                            <!-- Event Place -->
                            <div class="mb-4">
                                <label for="eventPlace" class="block text-sm font-medium text-gray-700">Event
                                    Location</label>
                                <input type="text" id="eventPlace" name="eventPlace"
                                    class="mt-1 p-2 block w-full border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500"
                                    required>
                            </div>
                            <!-- Event Type -->
                            <div class="mb-4 flex justify-between">
                                <label for="eventPlace" class="block text-sm font-medium text-gray-700">Event
                                    Type</label>
                                <label class="text-sm font-medium text-gray-700"><input type="radio" class="mr-2"
                                        name="eventType" id="type" value="Teams">By teams</label>
                                <label class=" text-sm font-medium text-gray-700" for=""><input type="radio"
                                        class="mr-2" name="eventType" id="type" value="Solo">Individuel</label>
                            </div>

                            <!-- Event Image Upload -->
                            <div class="mb-4">
                                <label for="eventImage" class="block text-sm font-medium text-gray-700">Upload Event
                                    Cover</label>
                                <input type="file" id="eventImage" name="eventImage" accept="image/*"
                                    class="mt-1 block w-full text-sm text-gray-600 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500">
                            </div>

                            <!-- Modal Buttons -->
                            <div class="flex justify-end">
                                <button type="button" id="closeModalButton"
                                    class="px-4 py-2 mr-2 bg-gray-300 rounded-md hover:bg-gray-400 focus:outline-none">
                                    Cancel
                                </button>
                                <button type="submit"
                                    class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none">
                                    Save
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                
                <!-- Content goes here! 😁 -->
                <div class="w-full mt-12">
                    <p class="text-xl pb-3 flex items-center">
                        <i class="fas fa-list mr-3"></i> partners
                    </p>
                    <div class="bg-white overflow-auto">
                        <table class="text-left w-full border-collapse">
                            <!--Border collapse doesn't work on this site yet but it's available in newer tailwind versions -->
                            <thead>
                                <tr class="bg-gray-800 text-white">
                                    <th
                                        class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                                        Event Name</th>
                                    <th
                                        class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                                        Event Date</th>
                                    <th
                                        class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                                        Event Type</th>
                                    <th
                                        class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                                        Event Location</th>
                                    <th
                                        class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                                        Event Status</th>
                                    <th
                                        class="text-center py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                                        Actions</th>
                                </tr>
                            </thead>
                            <tbody>

                                
                                <tr class="hover:bg-grey-lighter">
                                    <?php
                                    if(mysqli_num_rows($res)) {
                                        while($row = mysqli_fetch_assoc($res)) {
                                            echo "<td name='hiddenEventID' class='py-4 px-6 border-b border-grey-light hidden'>" .$row['IDevent'] ."</td>";
                                            echo "<td class='py-4 px-6 border-b border-grey-light'>" .$row['Nom'] ."</td>";
                                            echo "<td class='py-4 px-6 border-b border-grey-light'>" .$row['Date'] ."</td>";
                                            echo "<td class='py-4 px-6 border-b border-grey-light'>" .$row['eventType'] ."</td>";
                                            echo "<td class='py-4 px-6 border-b border-grey-light'>" .$row['Location'] ."</td>";
                                            echo "<td class='py-4 px-6 border-b border-grey-light'>" .$row['Status'] ."</td>";
                                            echo "<td class='py-4 px-6 border-b border-grey-light flex items-center justify-evenly'>
                                            <a href='editEvent.php?eventID=".$row['IDevent']."'>
                                            <i class='fas fa-pen-square text-2xl'
                                                style='color: rgb(255, 136, 0);'></i></a>
                                        <a href='deteleEvent.php?eventID=".$row['IDevent']."'>
                                            <i class='fas fa-trash-alt text-xl text-red-600' aria-hidden='true'></i></a>
                                        <a href='participants.html'>
                                            <i class='fas fa-list-alt text-2xl text-blue-500' aria-hidden='true'></i>
                                        </a>

                                    </td>
                                </tr>";
                                        }
                                    }
                                    ?>
                            </tbody>
                        </table>
                    </div>
            </main>


        </div>

    </div>

    <script>

        const openModalButton = document.getElementById('openModalButton');
        const closeModalButton = document.getElementById('closeModalButton');
        const modalBackdrop = document.getElementById('modalBackdrop');
        const editModalBackdrop = document.getElementById('editModalBackdrop');

        
        openModalButton.addEventListener('click', () => {
            modalBackdrop.classList.remove('hidden');
        });

        closeModalButton.addEventListener('click', () => {
            modalBackdrop.classList.add('hidden');
        });

        closeEditModalButton.addEventListener('click', () => {
            editModalBackdrop.classList.add('hidden');
        });


        modalBackdrop.addEventListener('click', (e) => {
            if (e.target === modalBackdrop) {
                modalBackdrop.classList.add('hidden');
            }
        });


    </script>
    <script src="../jquery/jquery.js"></script>
    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"
        integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
</body>

</html>