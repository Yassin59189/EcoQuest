<!DOCTYPE html>
<html lang="en">
<?php
include "conn.php";
?>
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
            <a href="events.php" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                <i class="fas fa-sticky-note mr-3"></i>
                Manage Events
            </a>
            <a href="partners.php" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                <i class="fas fa-table mr-3"></i>
                Manage Partners
            </a>
            <a href="forms.html" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                <i class="fas fa-align-left mr-3"></i>
                Forms
            </a>
            <a href="tabs.php" class="flex items-center active-nav-link text-white py-4 pl-6 nav-item">
                <i class="fas fa-tablet-alt mr-3"></i>
                Manage Content
            </a>
            <a href="calendar.php" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
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
                <a href="tabs.php" class="flex items-center active-nav-link text-white py-2 pl-4 nav-item">
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
            <!-- <button class="w-full bg-white cta-btn font-semibold py-2 mt-5 rounded-br-lg rounded-bl-lg rounded-tr-lg shadow-lg hover:shadow-xl hover:bg-gray-300 flex items-center justify-center">
                <i class="fas fa-plus mr-3"></i> New Report
            </button> -->
        </header>

        <div class="w-full h-screen overflow-x-hidden border-t flex flex-col">
            <main class="w-full flex-grow p-6">
                
                <h1 class="text-3xl text-black pb-6">Manage Content</h1>

                <div class="w-full mt-6" x-data="{ openTab: 1 }">
                    <div>
                        <ul class="flex border-b">
                            <li class="-mb-px mr-1" @click="openTab = 1">
                                <a :class="openTab === 1 ? 'border-l border-t border-r rounded-t text-blue-700 font-semibold' : 'text-blue-500 hover:text-blue-800'"
                                    class="bg-white inline-block py-2 px-4 font-semibold" href="#">Banners</a>
                            </li>
                            <li class="mr-1" @click="openTab = 2">
                                <a :class="openTab === 2 ? 'border-l border-t border-r rounded-t text-blue-700 font-semibold' : 'text-blue-500 hover:text-blue-800'"
                                    class="bg-white inline-block py-2 px-4 font-semibold" href="#">Posts</a>
                            </li>
                            <li class="mr-1" @click="openTab = 3">
                                <a :class="openTab === 3 ? 'border-l border-t border-r rounded-t text-blue-700 font-semibold' : 'text-blue-500 hover:text-blue-800'"
                                    class="bg-white inline-block py-2 px-4 font-semibold" href="#">Sponsors</a>
                            </li>
                            <li class="mr-1" @click="openTab = 4">
                                <a :class="openTab === 4 ? 'border-l border-t border-r rounded-t text-blue-700 font-semibold' : 'text-blue-500 hover:text-blue-800'"
                                    class="bg-white inline-block py-2 px-4 font-semibold" href="#">Milestones</a>
                            </li>
                            <li class="mr-1" @click="openTab = 5">
                                <a :class="openTab === 5 ? 'border-l border-t border-r rounded-t text-blue-700 font-semibold' : 'text-blue-500 hover:text-blue-800'"
                                    class="bg-white inline-block py-2 px-4 font-semibold" href="#">Recompances</a>
                            </li>
                            <li class="mr-1" @click="openTab = 6">
                                <a :class="openTab === 6? 'border-l border-t border-r rounded-t text-blue-700 font-semibold' : 'text-blue-500 hover:text-blue-800'"
                                    class="bg-white inline-block py-2 px-4 font-semibold" href="#">Tab 4</a>
                            </li>
                            <li class="mr-1" @click="openTab = 7">
                                <a :class="openTab === 7 ? 'border-l border-t border-r rounded-t text-blue-700 font-semibold' : 'text-blue-500 hover:text-blue-800'"
                                    class="bg-white inline-block py-2 px-4 font-semibold" href="#">Tab 7</a>
                            </li>
                        </ul>
                    </div>
                    <div class="bg-white p-6">
                        <!-- banner -->
                        <div id="" class="" x-show="openTab === 1">
                            <div class="max-w-xl mx-auto p-4 bg-white shadow-md rounded-md">
                                <h2 class="text-lg font-bold mb-4">Add New Banner</h2>
                                <a href="">   
                                    <button type="button"
                                        class="px-4 mb-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none">
                                        check Banners 
                                    </button>
                                </a>
                                <form>
                                    <div class="mb-4">
                                        <label class="block text-gray-700 mb-2" for="banner-title">
                                            <i class="fas fa-heading mr-2"></i>Banner Title
                                        </label>
                                        <input type="text" id="banner-title"
                                            class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:ring-green-300"
                                            placeholder="Enter banner title">
                                    </div>
                                    <div class="mb-4">
                                        <label class="block text-gray-700 mb-2" for="banner-description">
                                            <i class="fas fa-align-left mr-2"></i>Description
                                        </label>
                                        <textarea id="banner-description" rows="4"
                                            class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:ring-green-300"
                                            placeholder="Enter banner description"></textarea>
                                    </div>
                                    <div class="mb-4">
                                        <label class="block text-gray-700 mb-2" for="cta-link">
                                            <i class="fas fa-link mr-2"></i>Call-to-Action Link
                                        </label>
                                        <input type="url" id="cta-link" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:ring-green-300" placeholder="Enter URL for call-to-action (e.g., registration link)">
                                    </div>
                                    <div class="mb-4">
                                        <label class="block text-gray-700 mb-2" for="banner-image">
                                            <i class="fas fa-upload mr-2"></i>Upload Banner Image
                                        </label>
                                        <input type="file" id="banner-image"
                                            class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:ring-green-300">
                                    </div>
                                    <button type="submit"
                                        class="w-full bg-green-500 text-white py-2 rounded-md hover:bg-green-600">
                                        <i class="fas fa-save mr-2"></i>Save Banner
                                    </button>
                                </form>
                            </div>
                           <!--  new post  -->
                        </div>
                        <div id="" class="" x-show="openTab === 2">
                            <div class="max-w-xl mx-auto p-4 bg-white shadow-md rounded-md">
                                <h2 class="text-lg font-bold mb-4">Create New Post</h2>
                                <a href="">   
                                    <button type="button"
                                        class="px-4 py-2 mb-4 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none">
                                        check Sponsors 
                                    </button>
                                </a>
                                <form>
                                    <div class="mb-4">
                                        <label class="block text-gray-700 mb-2" for="post-title">
                                            <i class="fas fa-heading mr-2"></i>Post Title
                                        </label>
                                        <input type="text" id="post-title"
                                            class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:ring-blue-300"
                                            placeholder="Enter post title">
                                    </div>
                                    <div class="mb-4">
                                        <label class="block text-gray-700 mb-2" for="content">
                                            <i class="fas fa-align-justify mr-2"></i>Content
                                        </label>
                                        <textarea id="content" rows="6"
                                            class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:ring-blue-300"
                                            placeholder="Write your post"></textarea>
                                    </div>
                                    <div class="mb-4">
                                        <label class="block text-gray-700 mb-2" for="category">
                                            <i class="fas fa-tags mr-2"></i>Category
                                        </label>
                                        <input type="text" id="category"
                                            class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:ring-blue-300"
                                            placeholder="Enter category">
                                    </div>
                                    
                                    <div class="mb-4">
                                        <label class="block text-gray-700 mb-2" for="post-image">
                                            <i class="fas fa-upload mr-2"></i>Upload Post Image
                                        </label>
                                        <input type="file" id="post-image"
                                            class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:ring-blue-300">
                                    </div>
                                    <button type="submit"
                                        class="w-full bg-blue-500 text-white py-2 rounded-md hover:bg-blue-600">
                                        <i class="fas fa-upload mr-2"></i>Publish Post
                                    </button>
                                </form>
                            </div>
                        </div>
                        <!-- add sponsor -->
                        <div id="" class="" x-show="openTab === 3">
                            <div class="max-w-xl mx-auto p-4 bg-white shadow-md rounded-md">
                                <h2 class="text-lg font-bold mb-4">Add Sponsor</h2>
                                <a href="">   
                                    <button type="button"
                                        class="px-4 py-2 mb-4 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none">
                                        check Sponsors 
                                    </button>
                                </a>
                                <form>
                                    <div class="mb-4">
                                        <label class="block text-gray-700 mb-2" for="sponsor-name">
                                            <i class="fas fa-handshake mr-2"></i>Sponsor Name
                                        </label>
                                        <input type="text" id="sponsor-name"
                                            class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:ring-yellow-300"
                                            placeholder="Enter sponsor name">
                                    </div>
                                    <div class="mb-4">
                                        <label class="block text-gray-700 mb-2" for="sponsor-logo">
                                            <i class="fas fa-upload mr-2"></i>Upload Sponsor Logo
                                        </label>
                                        <input type="file" id="sponsor-logo"
                                            class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:ring-yellow-300">
                                    </div>
                                    <button type="submit"
                                        class="w-full bg-yellow-500 text-white py-2 rounded-md hover:bg-yellow-600">
                                        <i class="fas fa-plus mr-2"></i>Add Sponsor
                                    </button>
                                </form>
                            </div>
                        </div>
                       <!--  Milestones  -->
                        <div id="" class="" x-show="openTab === 4">
                            <div class="max-w-xl mx-auto p-4 bg-white shadow-md rounded-md">
                                <h2 class="text-lg font-bold mb-4">Publish Milestone</h2>
                                <a href="">   
                                    <button type="button"
                                        class="px-4 mb-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none">
                                        check Milestones 
                                    </button>
                                </a>
                                <form>
                                    <div class="mb-4">
                                        <label class="block text-gray-700 mb-2" for="event-name">
                                            <i class="fas fa-calendar-alt mr-2"></i>Event Name
                                        </label>
                                        <input type="text" id="event-name"
                                            class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:ring-blue-300"
                                            placeholder="Enter the event name">
                                    </div>
                                    <div class="mb-4">
                                        <label class="block text-gray-700 mb-2" for="participants">
                                            <i class="fas fa-users mr-2"></i>Total Participants
                                        </label>
                                        <input type="number" id="participants"
                                            class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:ring-blue-300"
                                            placeholder="Enter total participants">
                                    </div>
                                    <div class="mb-4">
                                        <label class="block text-gray-700 mb-2" for="waste-collected">
                                            <i class="fas fa-recycle mr-2"></i>Waste Collected (kg)
                                        </label>
                                        <input type="number" id="waste-collected"
                                            class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:ring-blue-300"
                                            placeholder="Enter total waste collected">
                                    </div>
                                    <div class="mb-4">
                                        <label class="block text-gray-700 mb-2" for="trees-planted">
                                            <i class="fas fa-tree mr-2"></i>Trees Planted
                                        </label>
                                        <input type="number" id="trees-planted"
                                            class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:ring-blue-300"
                                            placeholder="Enter total trees planted">
                                    </div>
                                    <div class="mb-4">
                                        <label class="block text-gray-700 mb-2" for="banner-upload">
                                            <i class="fas fa-upload mr-2"></i>Upload Supporting Image
                                        </label>
                                        <input type="file" id="banner-upload"
                                            class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:ring-blue-300">
                                    </div>
                                    <button type="submit"
                                        class="w-full bg-blue-500 text-white py-2 rounded-md hover:bg-blue-600">
                                        <i class="fas fa-chart-line mr-2"></i>Publish Milestone
                                    </button>
                                </form>
                            </div>
                        </div>
                       <!--  reco  -->
                        <div id="" class="" x-show="openTab === 5">
                            <div class="bg-white overflow-auto">
                                <table class="text-left w-full border-collapse">
                                    
                                    <thead>
                                        <tr class="bg-gray-800 text-white">
                                            <th
                                                class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                                                prodcut title</th>
                                            <th
                                                class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                                                product Description</th>
                                            
                                            <th
                                                class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                                                product picture</th>
                                            <th
                                                class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                                                product quantity</th>
                                            <th
                                                class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                                                Nom Partner</th>
                                            <th
                                                class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                                                status</th>
                                            <th
                                                class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                                                Actions</th>
                                        
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                   
                                    $req = "SELECT r.idReqReco,r.IDpartner,r.status,r.title, r.quantity,r.description, r.picture, u.nom AS partner_name 
                                            FROM requestrecompance r
                                            LEFT JOIN utilisateur u ON r.IDpartner = u.ID
                                            where r.status='pending'
                                            ";

                                    $res = mysqli_query($conn, $req);
                                    
                                    if ($res) {
                                        while ($row = mysqli_fetch_assoc($res)) {
                                            
                                            $title = htmlspecialchars($row['title'], ENT_QUOTES, 'UTF-8');
                                            $description = htmlspecialchars($row['description'], ENT_QUOTES, 'UTF-8');
                                            $picture = htmlspecialchars($row['picture'], ENT_QUOTES, 'UTF-8');
                                            $partnerName = htmlspecialchars($row['partner_name'], ENT_QUOTES, 'UTF-8');
                                            $partnerID=htmlspecialchars($row['IDpartner'], ENT_QUOTES, 'UTF-8');
                                            $quantity = htmlspecialchars($row['quantity'], ENT_QUOTES, 'UTF-8');
                                            $status = htmlspecialchars($row['status'], ENT_QUOTES, 'UTF-8');
                                            $idReqReco=htmlspecialchars($row['idReqReco'], ENT_QUOTES, 'UTF-8');
                                            

                                           
                                                echo ('<tr class="hover:bg-grey-lighter" id="test">
                                                <td class="py-4 px-6 border-b border-grey-light">'.$title.'</td>
                                                <td class="py-4 px-6 border-b border-grey-light">'.$description.'</td>
                                                <td class="py-4 px-6 border-b border-grey-light text-blue-800"><a target="_blank" href="../uploads/'.$picture.'">'.$picture.'</a></td>
                                                <td class="py-4 px-6 border-b border-grey-light">'.$quantity.'</td>
                                                <td class="py-4 px-6 border-b border-grey-light">'.$partnerName.'</td>');
                                        
                                            echo '<td class="py-4 px-6 border-b text-yellow-600 border-grey-light">'.$status.'</td>';
                                        
                                        
                                        echo ("<td class='py-4 px-6 border-b border-grey-light flex items-center'>
                                               <a href='AcceptRecompance.php?idReqReco=$idReqReco&title=$title&partnerID=$partnerID&quantity=$quantity&description=$description&partnerName=$partnerName&picture=$picture'>
                                        <i class='fas fa-check-square text-2xl'
                                            style='color: rgb(4, 160, 25);'></i></a>
                                                <a href='AcceptRecompance.php?idReqReco=$idReqReco'>
                                                    <i class='fas fa-trash-alt text-xl ml-2 text-red-600' aria-hidden=".true."></i>
                                                </a>
                                            </td>
                                            </tr>");
                                            
                                          
                                            

                                        }
                                    } 
                                    else {
                                        echo "Error: " . $req . "<br>" . mysqli_error($conn);
                                    }
                                    ?>
                                        


                                    </tbody>
                                </table>
                            </div>
                        </div>
        
                        
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