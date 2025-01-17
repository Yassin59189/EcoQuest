<?php
include "conn.php";
$req = "select * from partenaires ";
$res = mysqli_query($conn, $req);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EcoQuest Dashboard</title>
    <meta name="author" content="David Grzyb">
    <meta name="description" content="">

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
             
        </div>
        <nav class="text-white text-base font-semibold pt-3">
            <a href="index.php" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                <i class="fas fa-tachometer-alt mr-3"></i>
                Dashboard
            </a>
            <a href="events.php" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                <i class="fas fa-sticky-note mr-3"></i>
                Manage Events
            </a>
            <a href="partners.php" class="flex items-center active-nav-link text-white py-4 pl-6 nav-item">
                <i class="fas fa-table mr-3"></i>
                Manage Partners
            </a>
            <a href="forms.html" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                <i class="fas fa-align-left mr-3"></i>
                Forms
            </a>
            <a href="tabs.php" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                <i class="fas fa-tablet-alt mr-3"></i>
                Manage Content
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
                     <a href="../Main/home.php" class="block px-4 py-2 account-link hover:text-white">EcoQuest</a>
                    <a href="logout.php" class="block px-4 py-2 account-link hover:text-white">Sign Out</a>
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
                <a href="events.php"
                    class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                    <i class="fas fa-sticky-note mr-3"></i>
                    Manage Events
                </a>
                <a href="partners.php" class="flex items-center active-nav-link text-white py-2 pl-4 nav-item">
                    <i class="fas fa-table mr-3"></i>
                    Manage Partners
                </a>
                <a href="forms.html"
                    class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                    <i class="fas fa-align-left mr-3"></i>
                    Forms
                </a>
                <a href="tabs.php"
                    class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                    <i class="fas fa-tablet-alt mr-3"></i>
                    Manage Content
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
                <h1 class="text-3xl text-black pb-6">Partners Log</h1>
             <a href="partners.php">   
                <button type="button"
                    class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none">
                    Go back 
                </button>
            </a>

                <div class="w-full mt-6">
                    <p class="text-xl pb-3 flex items-center">
                        <i class="fas fa-list mr-3"></i> Table Example
                    </p>
                    <div class="bg-white overflow-auto">
                        <table class="min-w-full bg-white">
                            <thead class="bg-gray-800 text-white">
                                <tr>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Name</th>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Phone</th>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Email</th>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Type</th>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Location</th>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Application date</th>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Status</th>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-700">
                            <tr>
                            <?php
                                    if(mysqli_num_rows($res)) {
                                        while($row = mysqli_fetch_assoc($res)) {
                                            echo "<td name='hiddenEventID' class='py-4 px-4 border-b border-grey-light hidden'>" .$row['IDpartenaire'] ."</td>";
                                            echo "<td class='py-4 px-4 border-b border-grey-light'>" .$row['username'] ."</td>";
                                            echo "<td class='py-4 px-4 border-b border-grey-light'>" .$row['tel'] ."</td>";
                                            echo "<td class='py-4 px-4 border-b border-grey-light'>" .$row['email'] ."</td>";
                                            echo "<td class='py-4 px-4 border-b border-grey-light'>" .$row['typepartenaire'] ."</td>";
                                            echo "<td class='py-4 px-4 border-b border-grey-light'>" .$row['location'] ."</td>";
                                            echo "<td class='py-4 px-4 border-b border-grey-light'>" .$row['dateapplication'] ."</td>";
                                            if($row['statue'] =="P") {
                                                echo "<td class='py-4 px-4 border-b border-grey-light text-yellow-500'>Pending</td>";
                                            }
                                            if($row['statue'] =="A") {
                                                echo "<td class='py-4 px-4 border-b border-grey-light text-green-600'>Accepted</td>";
                                            }
                                           if($row['statue'] =="D") {
                                                echo "<td class='py-4 px-4 border-b border-grey-light text-red-600'>Declined</td>";
                                            } 
                                            echo "<td class='py-4 px-4 border-b border-grey-light flex items-center '>
                                      <a href='partnersAccept.php?IDpartenaire=".$row['IDpartenaire']."'>
                                            <i class='fas fa-check-square text-2xl'
                                                style='color: rgb(4, 160, 25);'></i></a>
                                        <a href='partnersReject.php?IDpartenaire=".$row['IDpartenaire']."'>
                                            <i class='fas fa-trash-alt text-xl text-red-600 ml-2'
                                                aria-hidden='true'></i></a>
                                                 <a href='partnersPending.php?IDpartenaire=".$row['IDpartenaire']."'>
                                            <i class='fas fa-pen-square text-2xl ml-2'
                                                style='color: rgb(255, 136, 0);'></i></a>

                                    </td>
                                </tr>";
                                        }
                                    }
                                    ?>
                            </tbody>
                        </table>
                    </div>

                </div>


            </main>


        </div>

    </div>

    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"
        integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
</body>

</html>