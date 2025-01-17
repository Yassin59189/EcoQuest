
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="Main.css">
    <style>
    
        .parallax {
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            
        }
        .Quests{
          font-family:Quests;
        }
  
  /* Animation for text to come from the top */
  @keyframes fade-down {
    from {
      opacity: 0;
      transform: translateY(-20px);
    }
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }
  @font-face {
  font-family: Quests;
  src: url('fonts/guardener.ttf');
}

  .animate-fade-down {
    animation: fade-down 1s ease-out;
  }
</style>

</head>

<body class="bg-gray-100 pt-16">
          <!-- Header -->
 <?php
 include "conn.php";
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
                class="block py-2 px-3 text-white bg-[#FF9100] rounded transition duration-300 md:bg-transparent md:text-[#FF9100] md:p-0 md:dark:text-[#FF9100]"
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
                class="block py-2 px-3 text-gray-900 rounded transition duration-300 hover:bg-gray-100 md:hover:bg-transparent md:hover:text-[#FF9100] md:p-0 md:dark:hover:text-[#FF9100] dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"
                aria-current="page"
                >Donation</a
              >
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
<div class="relative bg-gray-200 p-6 flex items-center justify-start text-left mx-auto py-32  mb-6 " 
     style="background-image: ;
             background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('../uploads/<?php echo($banner); ?>');
  height: 50%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;">
            

  <!-- Overlay for dimming effect -->
  <div class="absolute inset-0 bg-black opacity-50"></div>

  <!-- Content -->
  <div class="relative animate-fade-down max-w-4xl md:pl-20 sm:pl-0 text-start ">
    <h1 class="md:text-5xl mb-6 font-extrabold text-white leading-leading tracking-wide sm:text-3xl">
      AGIR<br>
CONNECTER<br>
TRANSFORMER
      
    </h1>
    
    <p class="mb-8 text-white  text-lg leading-relaxed ">
      Rejoignez EcoQuest et participez à un mouvement mondial visant à transformer notre planète.
Ensemble, nous pouvons avoir un impact durable pour les générations futures.
    </p>
    
    <a href="Event.php" class=" text-white bg-[#FF9100] hover:bg-green-800 duration-300 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-6 py-4 text-center dark:bg-[#FF9100] dark:hover:bg-[#FFCE00] dark:focus:ring-[#1d3b24]">
      Voir les campagnes
    </a>
  </div>
</div>




<!-- About Us Section -->
<div class="max-w-6xl mx-auto p-6 grid grid-cols-1 md:grid-cols-2 gap-14 items-center">
  <!-- Image Section -->
  <div class="w-full h-96 bg-cover bg-center rounded-lg shadow-lg order-2 md:order-1" 
       style="
         background-image: url('../uploads/<?php echo $aboutimg; ?>');
         background-position: center;
         background-repeat: no-repeat;
         background-size: cover;">
  </div>

  <!-- Text Section -->
  <div class="w-full order-1 md:order-2">
    <h2 class="text-4xl font-bold mb-4 text-[#044952]">About Us</h2>
    <p class="mb-2 font-regular sm:text-sm md:text-lg text-justify">
      <?php echo($about); ?>  </p>
  </div>
</div>



  
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
  

    echo("<div class='bg-white py-20'>
    <h2 class='text-center text-2xl text-[#044952]   font-extrabold uppercase mb-6'>Nos Résultats en Chiffres</h2>
    <div class='flex justify-center gap-8'>
      <div class='text-center'>
        <span class='text-4xl font-bold text-green-800  counter' data-target=${totalParticipants}>0</span>
        <p class='text-green-800 '>Participants</p>
      </div>
      <div class='text-center'>
        <span class='text-4xl font-bold text-green-800  counter' data-target='99'>0</span>
        <p class='text-green-800 '>Satisfaction</p>
      </div>
      <div class='text-center'>
        <span class='text-4xl font-bold text-green-800 counter' data-target=${totalEvents}>0</span>
        <p class='text-green-800 '>Total des campagnes</p>
      </div>
      <div class='text-center'>
        <span class='text-4xl font-bold text-green-800  counter' data-target=${totalTrash}>0</span>
        <p class='text-green-800 '>KG de déchets collectés</p>
      </div>
    </div>
  </div>")


   ?>
  

  <div class="max-w-6xl mx-auto p-6 mt-20">
  <h2 class="text-2xl font-bold mb-8 text-center uppercase text-[#044952]">Campagne à venir</h2>
  
  <div class="flex flex-col space-y-6">
    <?php
    $recentEventReq="select IDevent, eventImage, DATE_FORMAT(Date, '%M %D') as formatedDate, Description from evenements where Date = (select max(Date) from evenements)";
    $recentEvent=mysqli_query($conn, $recentEventReq);
   
    if($row=mysqli_fetch_assoc($recentEvent)){
    
      echo('
      <div class="flex flex-col lg:flex-row items-center lg:items-start border-b pb-6">
        <!-- Date -->
        <div class="flex-shrink-0 text-center text-gray-600 pr-0 lg:pr-12 mb-4 lg:mb-0">
          <p class="text-lg font-bold">'.date("M", strtotime($row['formatedDate'])).'</p>
          <div class="w-10 h-0.5 bg-slate-600 mx-auto"></div>
          <p class="text-3xl font-bold">'.date("d", strtotime($row['formatedDate'])).'</p>
        </div>
        
        <!-- Image -->
        <div class="flex-shrink-0 sm:w-1/2 lg:w-1/3 mb-4 lg:mb-0">
          <img src="../uploads/'.$row['eventImage'].'" alt="Upcoming campaign" class="rounded-lg shadow-lg w-full h-auto"/>
        </div>
        
        <!-- Text -->
        <div class="lg:pl-12 flex flex-col w-full lg:w-2/3 py-4 lg:py-0 self-center ">
          <h3 class="font-bold text-xl uppercase mb-4 text-gray-800 text-center lg:text-start">Campagne du Hammamet</h3>
          <p class="mb-4 text-gray-700 text-justify text-sm ">
            '.$row['Description'].'   </p>
          
          <!-- Button -->
          <div class="flex justify-center lg:justify-start mt-4">
            <a href="eventDetail.php?eventID='.$row['IDevent'].'" 
               class="inline-block bg-green-800 text-white py-2 px-4 rounded-md hover:bg-green-600 transition duration-300 text-sm md:text-base lg:text-md w-full sm:w-auto text-center">
              Voir les détails de l\'événement
            </a>
          </div>
        </div>
      </div>
      ');
    }
    ?>
  </div>
</div>






<!-- products -->
    <div class="bg-[#dce3c7]">
        <div class="container mx-auto py-20 my-20 px-4 md:flex md:items-center" >
            
            <div class="text-left mb-6  md:w-1/3 sm:w-full mr-6 sm:pt-10 md:pt-0">
                <h2 class="text-2xl font-bold text-gray-800">Nos produits écologiques</h2>
                <p class="text-gray-600 mt-2 mb-2">
                Découvrez les récompenses obtenues grâce à nos partenaires en échange de matériaux collectés lors de nos campagnes.                </p>
                <?php
                if(isset($_SESSION["id"])) {
                  if($_SESSION["role"]==="citoyen"){
                    echo('<a href="becomePartner.php"><button
                        class=" mt-2 w-1/2 bg-[#328E4E] text-white py-2 px-4 rounded-md hover:bg-green-800 duration-300 transition">
                        Contribuer

                    </button></a>');
                  } else if($_SESSION["role"]==="partner" || $_SESSION["role"]==="admin"){
                    echo('<a href="PartnerContrbuite.php"><button
                        class=" mt-2 w-1/2 bg-[#328E4E] text-white py-2 px-4 rounded-md hover:bg-green-800 duration-300 transition">
                        Contribuer

                    </button></a>');
                } 
              } else {
                echo('<a href="login.php"><button
                      class=" mt-2 w-1/2 bg-[#328E4E] text-white py-2 px-4 rounded-md hover:bg-green-800 duration-300 transition">
                      Contribuer

                  </button></a>');
              }
                ?>
            </div>

            <!-- Carousel -->
            <div class="overflow-x-auto max-w-6xl mx-auto p-6 flex gap-6 py-4">

              
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
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <h2 class="text-center text-3xl uppercase font-bold text-[#044952] mb-8">nos sponsors et partenaires</h2>
    
    <div class="grid grid-cols-2 md:grid-cols-4 gap-6 lg:gap-8">
        <?php
        $sponsorReq = "select * from sponsors";
        $sponsorRes = mysqli_query($conn, $sponsorReq);
        
        while($row = mysqli_fetch_assoc($sponsorRes)) {
            echo '
            <div class="aspect-[4/3] bg-gray-100 rounded-lg overflow-hidden w-full">
                <img 
                    src="../uploads/'.$row['imgsponsor'].'" 
                    alt="Sponsor logo" 
                    class="w-full h-full object-contain p-4"
                />
            </div>
            ';
        }
        
      
        $count = mysqli_num_rows($sponsorRes);
        for($i = $count; $i < 8; $i++) {
            echo '
            <div class="aspect-[4/3] bg-gray-100 rounded-lg">
                <!-- Empty placeholder -->
            </div>
            ';
        }
      
        ?>
    </div>
</div>
 
<!-- Quests -->

   
    <section class="parallax h-[500px] relative" style="background-image: url('../uploads/bgQuests.jpg');">
        <div class="absolute inset-0 bg-black/50"> <!-- Overlay for better text readability -->
            <div class="container mx-auto px-4 h-full flex flex-col justify-center items-center text-white">
                <h2 class="text-7xl font-bold mb-6 Quests">Quests</h2>
                <p class="text-xl max-w-2xl text-center">Plongez dans une aventure amusante et engageante,
tout en contribuant à une noble cause !</p>
                <a href="eco/index.php"><button class="mt-8 px-8 py-3 bg-[#FF9100] hover:bg-orange-600 text-white rounded-md hover:bg-gray-100 transition-colors duration-300">
                   Jouez maintenant !
                </button></a>
            </div>
        </div>
    </section>

  

  <!-- Newsletter Section -->

  <div class="bg-white py-12">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid md:grid-cols-2 gap-8 items-center">
      <!-- Left side - Image -->
      <div class="aspect-[4/3] bg-gray-100 rounded-lg shadow-lg overflow-hidden">
        <img 
          src="../uploads/1733764363.png ?>" 
          alt="Newsletter image" 
          class="w-full h-full object-cover"
        />
      </div>
      
      <!-- Right side - Newsletter Form -->
      <div>
        <h2 class="text-2xl text-[#044952] font-bold mb-4 uppercase">Abonnez-vous à notre newsletter</h2>
        <p class="mb-4">Recevez les dernières nouvelles et mises à jour directement dans votre boîte mail.</p>
        <form action="#" class="flex gap-4">
          <input type="email" placeholder="Adresse Email" class="p-2 border rounded-lg w-full" />
          <button type="submit" class="bg-black text-white px-4 py-2 rounded-lg">S'abonner</button>
        </form>
      </div>
    </div>
  </div>
</div>
    
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