<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="Main.css">
    <title>Event Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script>

        function toggleFAQ(faqId) {
            const faqContent = document.getElementById(faqId);
            faqContent.classList.toggle('hidden');
        }
    </script>
    <Style>
         .scrollbar-hide::-webkit-scrollbar {
        display: none;
    }
    .scrollbar-hide {
        -ms-overflow-style: none;
        scrollbar-width: none;
    }
      
    </Style>
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
                class="block py-2 px-3 text-white bg-[#FF9100] rounded transition duration-300 md:bg-transparent md:text-[#FF9100] md:p-0 md:dark:text-[#FF9100]"
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
                class="block py-2 px-3 text-gray-900 rounded transition duration-300 hover:bg-gray-100 md:hover:bg-transparent md:hover:text-[#FF9100] md:p-0 md:dark:hover:text-[#FF9100] dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"
                aria-current="page"
                >Donation</a
              >
            </li>
            
           
          </ul>
        </div>
      </div>
    </nav>

  

<!-- Hero Section -->
<section class="relative h-[80vh] mt-10 flex items-center justify-center mb-16" 
    style="background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.8)), url('../uploads/bg22.png'); 
           background-size: cover;
           background-position: center;
           background-repeat: no-repeat;">
    
    <!-- Overlay Title -->
  

    <!-- Search Form Container -->
    <div class="relative mx-auto px-4 top-[45%]">
        <div class="bg-white shadow-lg rounded-md max-w-6xl  mx-auto p-5">
            <form action="event.php" method="get" enctype="multipart/form-data">
                <div class="grid grid-cols-2 md:grid-cols-4 items-center gap-4">
                    <!-- Campaign Input -->
                    <div>
                        <p class="font-bold text-[#328E4E]">Campagnes</p>
                        <input id="searchQuery" name="name" type="text" placeholder="Looking for"
                        class="py-4  text-slate-800 rounded-md  focus:outline-none">
                    </div>  
                    <!-- Location Input -->
                    <div>
                    <p class="uppercase font-bold text-[#328E4E]">à</p> 
                    <input id="searchLocation" type="text" placeholder="In" name="location"
                    class="py-4 text-slate-800 rounded-md focus:outline-none">
                    </div>
                    <!-- Date Input -->
                    <div>
                    <p class="font-bold text-[#328E4E]">Campagnes</p> 
                    <input id="searchDate" name="date" type="date" 
                        class="py-4  text-slate-800 rounded-md  focus:outline-none ">
                    </div>
                    <!-- Submit Button -->
                    
                    
                    <button type="submit" name="search" 
                        class="bg-[#328E4E] text-white font-semibold py-6 px-8 rounded-md hover:bg-[#2a7841] transition">
                        Recherche
                    </button>
    
                    
                    
                </div>

                <?php
                    $eventName = isset($_GET['name']) ? $_GET['name'] : '';
                    $eventLocation = isset($_GET['location']) ? $_GET['location'] : '';
                    $eventDate = isset($_GET['date']) ? $_GET['date'] : '';
                ?>
            </form>
        </div>
    </div>
</section>


    



    <!-- Upcoming Campaigns -->
     <?php 
     if($eventName ==="" && $eventLocation ==="" && $eventDate ===""){
      ?>
    <section class="container mx-auto py-12 px-6">
    <h2 class="text-3xl font-semibold mb-6 text-[#044952] uppercase">Upcoming Campaigns</h2>
    
    <!-- Carousel Container -->
    <div class="relative">
        <!-- Carousel Wrapper -->
        <div id="carousel" class="flex py-10 gap-12 px-12 overflow-x-scroll scrollbar-hide scroll-smooth">
            <?php
            include "conn.php";
            $req = "SELECT IDevent, DATE_FORMAT(Date, '%b') as month, DATE_FORMAT(Date, '%d') as day, Nom, eventType,Location ,eventImage FROM evenements WHERE date > CURDATE()";
            $res = mysqli_query($conn, $req);
            while ($row = mysqli_fetch_assoc($res)) {
                echo('
            <a href="eventDetail.php?eventID=' . $row['IDevent'] . '">
        <div class="bg-white p-3 rounded-lg overflow-hidden shadow-lg  hover:shadow-xl  transition-transform hover:scale-105 w-[18rem] max-w-lg">
            <!-- Event Image -->
            <div class="relative h-32">
                <img src="../uploads/' . $row['eventImage'] . '" alt="' . $row['Nom'] . '" class="w-[18rem] h-full rounded-lg object-cover">
                <div class="absolute top-4 right-4">
                    <span class="bg-white text-[#044952] font-bold text-xs px-4 py-1 rounded-full">
                        ' . $row['eventType'] . '
                    </span>
                </div>
            </div>    
            
                <div class=" flex items-center justify-between p-4 ">
                <!-- Event Details -->
                <div class=" ">
                    <!-- Event Title -->
                    <h3 class="text-lg font-bold text-[#044952] capitalize">
                        ' . $row['Nom'] . '
                    </h3>

                    <!-- Location -->
                    <div class="flex items-center space-x-1 text-[#044952]">
                       <i class="fas fa-map-marker-alt text-[#FF7646]"></i>

                        <span class="text-sm font-medium">' . $row['Location'] . '</span>
                    </div>
                </div>

                    <!-- Date -->
                <div class="flex flex-col items-baseline space-x-1 ">
                        <p class="text-[#044952] font-semibold">' . $row['month'] . '</p>
                        <hr class="w-8 border border-[#FF9100] ">
                        <p class="text-2xl font-bold text-[#044952]">' . $row['day'] . '</p>
                </div>
                
            </div>
        </div>
    </a>
');
         
            }
            ?>
        </div>
        
        <!-- Carousel Navigation Buttons -->
        <button id="prev" class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-[#044952] text-white p-2 rounded-full shadow hover:bg-[#328E4E] transition w-10">
            <i class="fas fa-chevron-left"></i>
        </button>
        <button id="next" class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-[#044952] text-white p-2 rounded-full shadow hover:bg-[#328E4E] transition w-10">
            <i class="fas fa-chevron-right"></i>
        </button>
    </div>
</section>




    <!-- Past Campaigns -->
    <section class="container mx-auto py-12 px-6">
    <h2 class="text-3xl font-semibold mb-6 text-[#044952] uppercase">Campagnes passées</h2>
    
    <!-- Carousel Container -->
    <div class="relative">
        <!-- Carousel Wrapper -->
        <div id="carousel-past" class="flex py-10 gap-12 px-12 overflow-x-scroll scrollbar-hide scroll-smooth">
            <?php
            $req1 = "SELECT IDevent, DATE_FORMAT(Date, '%b') as month,Location, DATE_FORMAT(Date, '%d') as day, Nom, eventType, eventImage FROM evenements WHERE date < CURDATE() AND Status = 'Done'";
            $res1 = mysqli_query($conn, $req1);
            while ($row1 = mysqli_fetch_assoc($res1)) {
                echo('
            <a href="eventDetail.php?eventID=' . $row1['IDevent'] . '">
        <div class="bg-white p-3 rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-transform hover:scale-105 w-[18rem] max-w-lg">
            <!-- Event Image -->
            <div class="relative h-32">
                <img src="../uploads/' . $row1['eventImage'] . '" alt="' . $row1['Nom'] . '" class="w-[18rem] h-full rounded-lg object-cover">
                <div class="absolute top-4 right-4">
                    <span class="bg-white text-[#044952] font-bold text-xs px-4 py-1 rounded-full">
                        ' . $row1['eventType'] . '
                    </span>
                </div>
            </div>    
            
            <div class="flex items-center justify-between p-4">
                <!-- Event Details -->
                <div>
                    <!-- Event Title -->
                    <h3 class="text-lg font-bold text-[#044952] capitalize">
                        ' . $row1['Nom'] . '
                    </h3>

                    <!-- Placeholder Location -->
                    <div class="flex items-center space-x-1 text-[#044952]">
                        <i class="fas fa-map-marker-alt text-[#FF7646]"></i>
                        <span class="text-sm font-medium">'. $row1['Location'] .' </span>
                    </div>
                </div>

                <!-- Date -->
                <div class="flex flex-col items-baseline space-x-1">
                    <p class="text-[#044952] font-semibold">' . $row1['month'] . '</p>
                    <hr class="w-8 border border-[#FF9100]">
                    <p class="text-2xl font-bold text-[#044952]">' . $row1['day'] . '</p>
                </div>
            </div>
        </div>
    </a>
                ');
            }
            ?>
        </div>
        
        <!-- Carousel Navigation Buttons -->
        <button id="prev-past" class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-[#044952] text-white p-2 rounded-full shadow hover:bg-[#328E4E] transition w-10">
            <i class="fas fa-chevron-left"></i>
        </button>
        <button id="next-past" class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-[#044952] text-white p-2 rounded-full shadow hover:bg-[#328E4E] transition w-10">
            <i class="fas fa-chevron-right"></i>
        </button>
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
            <?php
            $faqReq="select * from FAQ";
            $faqRes=mysqli_query($conn, $faqReq);
            $i=0;
            while($FAQ=mysqli_fetch_assoc($faqRes)){
                $i++;
                echo('<div class="bg-gray-200 rounded p-4">
                <div class="flex justify-between items-center">
                    <p>'.$FAQ['question'].'</p>
                    <button onclick="toggleFAQ(\'faq'.$i.'\')" class="text-xl font-bold">+</button>
                </div>
                <div id="faq'.$i.'" class="mt-2 hidden">
                    <p class="text-sm text-gray-700">'.$FAQ['answer'].'</p>
                </div>
            </div>');
            }
            ?>
        </div>
    </section>
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
                <a href="contact.php" class="block text-gray-400 hover:text-white">Contact</a>
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
    <script>
         const carousel = document.getElementById('carousel');
    const prev = document.getElementById('prev');
    const next = document.getElementById('next');

    next.addEventListener('click', () => {
        carousel.scrollBy({ left: 300, behavior: 'smooth' });
    });

    prev.addEventListener('click', () => {
        carousel.scrollBy({ left: -300, behavior: 'smooth' });
    });
        const menuToggle = document.getElementById('menu-toggle');
        const navbarSticky = document.getElementById('navbar-sticky');

        menuToggle.addEventListener('click', () => {
            navbarSticky.classList.toggle('hidden');
        });
    </script>
</body>

</html>
