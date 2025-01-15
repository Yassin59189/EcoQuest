
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carousel Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 pt-20">
    <nav
        class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600 mb-10">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">

            <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Logo">
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">LOGO</span>
            </a>

            <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <button type="button"
                    class="text-white bg-[#328E4E] hover:bg-green-900 duration-300 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-[#328E4E] dark:hover:bg-[#328E4E] dark:focus:ring-[#1d3b24]">
                    Donate
                </button>
                <?php
                include "conn.php";
                session_start();
                if(isset($_SESSION["id"])){
                  echo('<a href="logout.php" class="text-white">Sign out</a>');
                } else {
                  echo('<a href="login.php" class="text-white">Login</a>');
                }
                ?>
                
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
                    class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="home.php"
                            class="block py-2 px-3 text-white bg-[#328E4E] rounded md:bg-transparent md:text-[#328E4E] md:p-0 md:dark:text-[#328E4E]"
                            aria-current="page">Home</a>
                    </li>

                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-gray-900 duration-300 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-[#328E4E] md:p-0 md:dark:hover:text-[#328E4E] dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">The
                            SDGs</a>
                    </li>
                    <li>
                        <a href="becomePartner.php"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-[#328E4E] md:p-0 md:dark:hover:text-[#328E4E] dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Partnership
                            Request</a>
                    </li>
                    <li>
                        <a href="Event.php"
                            class="block py-2 px-3 text-white bg-[#328E4E] rounded md:bg-transparent md:p-0">Campaigns</a>
                    </li>
                    <li>
                        <a href="Contact.html"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-[#328E4E] md:p-0 md:dark:hover:text-[#328E4E] dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
                    </li>
                    <li>
                        <a href="Donation.html"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-[#328E4E] md:p-0 md:dark:hover:text-[#328E4E] dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"
                            aria-current="page">Donation</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <?php
        
        $home="select * from home";
        $homeRes = mysqli_query($conn, $home);
        if($row=mysqli_fetch_assoc($homeRes)){
            $banner=$row['banner'];
            $aboutimg=$row['aboutimg'];
            $about=$row['about'];
        }
        ?>

    <!-- Header Section -->
    <div class="bg-gray-200 p-6" style="background-image: url('https://via.placeholder.com/1920x1080');">
  <h1 class="text-xl font-bold mb-2">Campaigns</h1>
  <p>Discover our initiatives and participate in events for a better world.</p>
</div>

<!-- About Us Section -->
<div class="max-w-6xl mx-auto p-6 grid grid-cols-2 gap-4 items-center">
  <?php
  echo('<img src="../uploads/'.$aboutimg.'" alt="About us" class="rounded-lg shadow-lg" />');
  ?>
  
  <div>
    <h2 class="text-2xl font-bold mb-2">About Us</h2>
    <p class="mb-2"><?php echo($about); ?></p>
    <p>Join us to make our planet cleaner and healthier.</p>
  </div>
</div>
  <!-- Qui Sommes-Nous Section -->

  <!-- Stats Section -->
   <?php
    
    $reqTotalEvent = "SELECT COUNT(IDevent) AS total_events FROM evenements WHERE Status != 'upcomming'";
    $resTotalEvent =(mysqli_query($conn, $reqTotalEvent));
    if(!$resTotalEvent){
        echo("error ".mysqli_error($conn));
    }
    while($rowtotalevent=mysqli_fetch_assoc($resTotalEvent)){
        $totalEvents=$rowtotalevent['total_events'];} 
    
   
    $reqTotalParticipant = "SELECT COUNT(*) AS total_participants FROM participants";
    $resTotalParticipant =mysqli_query($conn, $reqTotalParticipant);
    if(!$resTotalParticipant){
        echo("error ".mysqli_error($conn));
    }
    while($rowtotalparticipant=mysqli_fetch_assoc($resTotalParticipant)){
        $totalParticipants=$rowtotalparticipant['total_participants'];} 

    
    
    $reqTotalTrash = "SELECT SUM(trash) AS total_trash FROM evenements WHERE Status != 'upcomming'";
    $resTotalTrash = mysqli_query($conn, $reqTotalTrash);
    if(!$resTotalTrash){
        echo("error ".mysqli_error($conn));
    }
    while($rowtotalparticipant=mysqli_fetch_assoc($resTotalTrash)){
        $totalTrash=round($rowtotalparticipant['total_trash'],2);}
  

    echo("<div class='bg-white py-8'>
    <h2 class='text-center text-2xl font-bold mb-6'>Our Results in Numbers</h2>
    <div class='flex justify-center gap-8'>
      <div class='text-center'>
        <span class='text-4xl font-bold text-green-500 counter' data-target=${totalParticipants}>0</span>
        <p>Participants</p>
      </div>
      <div class='text-center'>
        <span class='text-4xl font-bold text-green-500 counter' data-target='99'>0</span>
        <p>Satisfaction</p>
      </div>
      <div class='text-center'>
        <span class='text-4xl font-bold text-green-500 counter' data-target=${totalEvents}>0</span>
        <p>Total campaigns</p>
      </div>
      <div class='text-center'>
        <span class='text-4xl font-bold text-green-500 counter' data-target=${totalTrash}>0</span>
        <p>KG of trash collected</p>
      </div>
    </div>
  </div>")


   ?>
  

  <!-- Upcoming Campaigns -->
  <div class="max-w-6xl mx-auto p-6">
    <h2 class="text-2xl font-bold mb-4">Campagnes à venir</h2>
    <div class="flex gap-4 items-start">
      <?php
      $recentEventReq="select IDevent, eventImage, DATE_FORMAT(Date, '%M %D') as formatedDate, Description from evenements where Date = (select max(Date) from evenements)";
      $recentEvent=mysqli_query($conn, $recentEventReq);
      if($row=mysqli_fetch_assoc($recentEvent)){
        echo('<img src="../uploads/'.$row['eventImage'].'" alt="Upcoming campaign" class="rounded-lg shadow-lg w-[25%]" />
        <h3 class="font-bold text-lg">Campagne du '.$row['formatedDate'].'</h3>
        <p class="mb-2">'.$row['Description'].'</p>
        <a href="eventDetail.php?eventID=.'.$row['IDevent'].'" class="text-blue-500 underline">Voir les détails de l\'événement</a>
        ');
      }
      ?>
      
      <div>
        
        
        
      </div>
    </div>
  </div>


<!-- products -->
    <div class="bg-white">
        <div class="container mx-auto  my-20 px-4 md:flex md:items-center" >
            
            <div class="text-left mb-6  md:w-1/3 sm:w-full mr-6 sm:pt-10 md:pt-0">
                <h2 class="text-2xl font-bold text-gray-800">Our Eco-Friendly Products</h2>
                <p class="text-gray-600 mt-2">
                Discover the items obtained through our partners in exchange for materials collected during our campaigns.
                </p>
                <?php
                if(isset($_SESSION["id"])) {
                  if($_SESSION["role"]==="citoyen"){
                    echo('<a href="becomePartner.php"><button
                        class=" mt-2 w-1/3 bg-[#328E4E] text-white py-2 px-4 rounded-md hover:bg-green-800 duration-300 transition">
                        Contribute

                    </button></a>');
                  } else if($_SESSION["role"]==="partner" || $_SESSION["role"]==="admin"){
                    echo('<a href="PartnerContrbuite.php"><button
                        class=" mt-2 w-1/3 bg-[#328E4E] text-white py-2 px-4 rounded-md hover:bg-green-800 duration-300 transition">
                        Contribute

                    </button></a>');
                } 
              } else {
                echo('<a href="login.php"><button
                      class=" mt-2 w-1/3 bg-[#328E4E] text-white py-2 px-4 rounded-md hover:bg-green-800 duration-300 transition">
                      Contribute

                  </button></a>');
              }
                ?>
            </div>

            <!-- Carousel -->
            <div class="overflow-x-auto flex gap-6 py-4">

              
                <?php
                $reqProduit="SELECT * FROM recompance";
                $resProduit=mysqli_query($conn, $reqProduit);
                while($rowProduit=mysqli_fetch_assoc($resProduit)){
                    echo('  <div class="min-w-[200px] w-[12rem ] bg-gray-100 rounded-lg shadow-md p-4 pr-2 flex-shrink-0">
                    <img class="h-40 w-[10.6rem] object-cover rounded-md shadow-md" src="../uploads/'.$rowProduit["recoPicture"].'" alt="ops :("/>
                    <h3 class="text-center mt-4 text-lg font-semibold text-gray-800">'.$rowProduit["reco_title"].'</h3>
                    <p class="text-gray-600  w-[10.6rem] text-center text-sm mt-2 truncate ... ">'.$rowProduit["reco_Discription"].'</p>
                    <p class="font-semibold text-center text-gray-600 text-sm mt-2">'.$rowProduit["partenaireName"].'</p>
                </div>') ;
            };
        
                if($resProduit){
            
                }
                else{
                    echo ("ERROR".mysqli_error($conn));
                };
            
                ?>
            

            </div>
        </div>
    </div>
    </div>
     <!-- Sponsors Section -->
  <div class="max-w-6xl mx-auto p-6">
    <h2 class="text-2xl font-bold mb-6">Nos sponsors et partenaires</h2>
    <div class="grid grid-cols-3 gap-4">
      <?php
      $sponsorReq="select * from sponsors";
      $sponsorRes=mysqli_query($conn, $sponsorReq);
      while($row=mysqli_fetch_assoc($sponsorRes)){
        echo('<img src="../uploads/'.$row['imgsponsor'].'" alt="Sponsor 1" class="rounded-lg shadow-md" />');
      }
      ?>
    </div>
  </div>
  <!-- Newsletter Section -->
  <div class="bg-white py-8">
    <div class="max-w-6xl mx-auto p-6 flex items-center gap-8">
      <img src="https://via.placeholder.com/300" alt="Newsletter image" class="rounded-lg shadow-md" />
      <div>
        <h2 class="text-2xl font-bold mb-4">Abonnez-vous à notre newsletter</h2>
        <p class="mb-4">Recevez les dernières nouvelles et mises à jour directement dans votre boîte mail.</p>
        <form action="#" class="flex gap-4">
          <input type="email" placeholder="Adresse Email" class="p-2 border rounded-lg w-full" />
          <button type="submit" class="bg-black text-white px-4 py-2 rounded-lg">S'abonner</button>
        </form>
      </div>
    </div>
  </div>
    <footer class="bg-gray-800 text-white py-6">
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
                        class="bg-[#328E4E] text-white px-4 py-2 rounded-r-md hover:bg-green-800 duration-300 transition">
                        Subscribe
                    </button>
                </div>
            </div>
        </div>
    </footer>
    <script>const menuToggle = document.getElementById('menu-toggle');
        const navbarSticky = document.getElementById('navbar-sticky');

        menuToggle.addEventListener('click', () => {
            navbarSticky.classList.toggle('hidden');
        });
    // Counter Animation
    document.addEventListener("DOMContentLoaded", () => {
      const counters = document.querySelectorAll(".counter");
      counters.forEach(counter => {
        const updateCount = () => {
          const target = +counter.getAttribute("data-target");
          const count = +counter.innerText;
          const increment = target / 100;

          if (count < target) {
            counter.innerText = Math.ceil(count + increment);
            setTimeout(updateCount, 10);
          } else {
            counter.innerText = target;
          }
        };
        updateCount();
      });
    });
  </script>
</body>

</html>