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

                                    <?php
                                    $home="select * from home";
                                    $homeRes = mysqli_query($conn, $home);
                                    if($row=mysqli_fetch_assoc($homeRes)){
                                        $banner=$row['banner'];
                                        $aboutimg=$row['aboutimg'];
                                        $about=$row['about'];
                                    }
                                    ?>

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
                                    class="bg-white inline-block py-2 px-4 font-semibold" href="#">Home</a>
                            </li>
                           
                            <li class="mr-1" @click="openTab = 3">
                                <a :class="openTab === 3 ? 'border-l border-t border-r rounded-t text-blue-700 font-semibold' : 'text-blue-500 hover:text-blue-800'"
                                    class="bg-white inline-block py-2 px-4 font-semibold" href="#">Sponsors</a>
                            </li>
                            <li class="mr-1" @click="openTab = 4">
                                <a :class="openTab === 4 ? 'border-l border-t border-r rounded-t text-blue-700 font-semibold' : 'text-blue-500 hover:text-blue-800'"
                                    class="bg-white inline-block py-2 px-4 font-semibold" href="#">Manage materials</a>
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
                                <h2 class="text-lg font-bold mb-4">Edit home content</h2>
                                
                                <form method="post" enctype="multipart/form-data">

                                    <img src="<?php $row["banner"] ?>" alt="">
                                    <button>Upload banner</button><br>
                                    <div class="mb-4 mt-5">
                                        <label class="block text-gray-700 mb-2">
                                            About us description
                                        </label>

                                            <textarea rows="7" cols="50" name="aboutContent" id="" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:ring-yellow-300">
                                        <?php echo(trim($row['about'])) ?>
                                        </textarea>
                                    </div>
                                    
                                    <h2>about image</h2>
                                    <img src="../uploads/<?php echo($row["aboutimg"]) ?>" alt="" class="w-[5%]">
                                    <input type="file" name="aboutImage" id="aboutImage"><br>
                                    <input type="submit" value="Edit" name="submit" class="my-5 w-full bg-yellow-500 text-white py-2 rounded-md hover:bg-yellow-600">
                                </form>
                                <?php
                                            $aboutContent = isset($_POST['aboutContent']) ? $_POST['aboutContent'] : '';
                                            if(isset($_POST['submit'])){
                                            if (isset($_FILES['aboutImage']) && !empty($_FILES['aboutImage']['name'])){
                                                $eventImage = $_FILES['aboutImage']['name'];
                                                $tmp_name = $_FILES['aboutImage']['tmp_name'];
                                                $timestamp = time();
                                                $extension = pathinfo($eventImage, PATHINFO_EXTENSION);
                                                $newFileName = $timestamp . '.' . $extension;
    
                                                $location = "../uploads/" . $newFileName;
                                                
                                                if (move_uploaded_file($tmp_name, $location)) {
      
                                                } else {
                                                    echo "File not uploaded";
                                                }
                                            $homeEdit="update home set about='$aboutContent', aboutimg='$newFileName'";
                                            $homeEditRes=mysqli_query($conn, $homeEdit);
                                            if($homeEditRes){
                                                echo("edited");
                                                header("Location: tabs.php");
                                            }
                                            }



                                            
                                            }
                                            
                                            
                                        
                                ?>
                            </div>
                           <!--  new post  -->
                        </div>
                        
                        <!-- add sponsor -->
                        <div id="" class="" x-show="openTab === 3">
                            <div class="max-w-xl mx-auto p-4 bg-white shadow-md rounded-md">
                                <h2 class="text-lg font-bold mb-4">Add Sponsor</h2>
                                
                                <form method="post" enctype="multipart/form-data">
                                    <div class="mb-4">
                                        <label class="block text-gray-700 mb-2" for="sponsor-name">
                                            <i class="fas fa-handshake mr-2"></i>Sponsor Name
                                        </label>
                                        <input type="text" id="sponsor-name"
                                            name="sponsorName"
                                            class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:ring-yellow-300"
                                            placeholder="Enter sponsor name">
                                    </div>
                                    <div class="mb-4">
                                        <label class="block text-gray-700 mb-2" for="sponsor-logo">
                                            <i class="fas fa-upload mr-2"></i>Upload Sponsor Logo
                                        </label>
                                        <input type="file" id="sponsorLogo"
                                            name="sponsorLogo"
                                            class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:ring-yellow-300">
                                    </div>
                                    
                                    <input type="submit" name="addSponsor" value="Add sponsor" class="w-full bg-yellow-500 text-white py-2 rounded-md hover:bg-yellow-600">
                                </form>
                                <?php
                                if(isset($_POST['addSponsor'])){
                                    $sponsorName=$_POST['sponsorName'];
                                    if (isset($_FILES['sponsorLogo']) && !empty($_FILES['sponsorLogo']['name'])){
                                        $sponsorLogo=$_FILES['sponsorLogo']['name'];
                                        $tmp_name = $_FILES['sponsorLogo']['tmp_name'];
                                                    $timestamp = time();
                                                    $extension = pathinfo($sponsorLogo, PATHINFO_EXTENSION);
                                                    $newFileName = $timestamp . '.' . $extension;
        
                                                    $location = "../uploads/" . $newFileName;
                                                    
                                                    if (move_uploaded_file($tmp_name, $location)) {
          
                                                    } else {
                                                        echo "File not uploaded";
                                                    }
                                        $addSponsorReq="insert into sponsors(nomsponsor, imgsponsor) values ('$sponsorName', '$newFileName')";
                                        $addSponsorRes=mysqli_query($conn, $addSponsorReq);
                                        if($addSponsorRes){
                                            echo("inserting sponsor successfully<br>");
                                        }
                                    } else{
                                        echo($_FILES['sponsorLogo']);
                                    }

                                }
                                
                                ?>
                                <table class="min-w-full bg-white mt-5">
                                <thead class="bg-gray-800 text-white">
                                <tr>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Name</th>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Actions</th>
                                </tr>
                                </thead>
                            <tbody class="text-gray-700">
                            <tr>
                                
                                <!-- SHOW CURRENT SPONSORS -->
                                 <?php
                                 $showSponsorReq="select * from sponsors";
                                 $showSponsorRes=mysqli_query($conn, $showSponsorReq);
                                 while($showSponsor=mysqli_fetch_assoc($showSponsorRes)){
                                    echo "<td name='hiddenEventID' class='py-4 px-4 border-b border-grey-light hidden'>" .$showSponsor['idsponsor']."</td>";
                                    echo "<td class='py-4 px-4 border-b border-grey-light'>" .$showSponsor['nomsponsor']."</td>";
                                    echo "<td class='py-4 px-4 border-b border-grey-light flex'>
                                        <a href='deleteSponsor.php?idsponsor=".$showSponsor['idsponsor']."'>
                                            <i class='fas fa-trash-alt text-xl text-red-600 ml-2'
                                                aria-hidden='true'></i></a>
                                        </td>
                                    </tr>";
                                 }
                                 ?>
                                 </tbody>
                                 </table>
                            </div>
                        </div>
                       <!--  Materials  -->
                        <div id="" class="" x-show="openTab === 4">
                        <div class="max-w-xl mx-auto p-4 bg-white shadow-md rounded-md">
                                <h2 class="text-lg font-bold mb-4">Manage materials</h2>
                                
                                <form method="post">
                                    <div class="mb-4">
                                        <label class="block text-gray-700 mb-2" for="sponsor-name">
                                            Material Name
                                        </label>
                                        <input type="text"
                                            name="materialName"
                                            class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:ring-yellow-300"
                                            placeholder="Enter material name">
                                    </div>
                                    
                                    <input type="submit" name="addMaterial" value="Add material" class="w-full bg-yellow-500 text-white py-2 rounded-md hover:bg-yellow-600">
                                </form>
                                <?php
                                if(isset($_POST['addMaterial'])){
                                    $mat=$_POST['materialName'];
                                    $addMatReq="insert into materials(nommat) values('$mat')";
                                    $addMatRes=mysqli_query($conn, $addMatReq);
                                    if($addMatRes){
                                        echo("material added");
                                    }
                                }
                                ?>
                                <table class="min-w-full bg-white mt-5">
                                <thead class="bg-gray-800 text-white">
                                <tr>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Name</th>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Quantity</th>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Actions</th>
                                </tr>
                                </thead>
                            <tbody class="text-gray-700">
                            <tr>
                                
                                <!-- SHOW CURRENT SPONSORS -->
                                 <?php
                                 $showMatsReq="select * from materials";
                                 $showMatsRes=mysqli_query($conn, $showMatsReq);
                                 while($showMats=mysqli_fetch_assoc($showMatsRes)){
                                    echo "<td class='py-4 px-4 border-b border-grey-light'>" .$showMats['nommat']."</td>";
                                    echo "<td class='py-4 px-4 border-b border-grey-light'>" .$showMats['qty']."</td>";
                                    echo "<td class='py-4 px-4 border-b border-grey-light flex'>
                                        <a href='deleteMat.php?idmat=".$showMats['idmat']."'>
                                            <i class='fas fa-trash-alt text-xl text-red-600 ml-2'
                                                aria-hidden='true'></i></a>
                                        </td>
                                    </tr>";
                                 }
                                 ?>
                                 </tbody>
                                 </table>
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