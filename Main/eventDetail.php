<?php
session_start();
if(isset($_SESSION['id'])){


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="Main.css">
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
      <style>
        /* Style pour la section tableau */
        .team-table {
          display: flex;
          justify-content: center;
          gap: 20px;
          margin: 20px auto;
        }
      
        .team-column {
          border: 1px solid #ddd;
          border-radius: 10px;
          width: 200px;
          background-color: #f9f9f9;
          overflow: hidden;
        }
      
        .team-header {
          background-color: #f4f4f4;
          font-weight: bold;
          text-align: center;
          padding: 10px;
          border-bottom: 1px solid #ddd;
        }
      
        .team-row {
          text-align: center;
          padding: 10px;
          border-bottom: 1px solid #ddd;
        }
      
        .team-row:last-child {
          border-bottom: none;
        }
      </style>
</head>

<body class="bg-white">

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
    } 
    
    else {
        
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
                include "conn.php";
                
                $eventID=$_GET['eventID'];
                $req="select Nom, Description,Googlemaps, Status, Location, DATE_FORMAT(Date, '%b') as month, DATE_FORMAT(Date, '%d') as day, DAYNAME(Date) as dayName, DATE_FORMAT(startTime, '%h:%i %p') as startTime, DATE_FORMAT(endTime, '%h:%i %p') as endTime,eventImage  from evenements where IDevent=$eventID";
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
                    $status=$row['Status'];
                    $image=$row['eventImage'];
                    $googlemaps=mysqli_real_escape_string($conn, $row['Googlemaps']);
                }
                ?>
    <!-- Milieu -->
    <main class="max-w-7xl  container mx-auto w-100 px-4 mt-8 py-20" 
            style="background-image:linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.8)), url('../uploads/<?php echo $image; ?>'); 
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;">
        <div class="flex flex-col md:flex-row items-center justify-between space-y-8 md:space-y-0">
            <div class="w-full md:w-1/2 space-y-4">
                
                <h1 class="text-4xl font-bold text-white uppercase">
                <?php echo($nom); ?></h1>
                 <p class="text-lg font-regular text-white ">
                    <?php echo($Location); ?>
                 </p>
                
            </div>
            <div class="w-full md:w-1/2 flex justify-center">
                <div class="bg-gray-100 p-6 rounded-lg shadow-md w-full md:w-3/4">
                    <h2 class="text-lg font-semibold text-gray-800 text-center mb-4">Date & Temp</h2>
                    <p class="text-gray-700 text-center mb-4"><?php echo($dayName.", ".$day." ".$month." à ".$startTime); ?></p>
                    <form action="" method="POST">
                    <input type="submit" value="Postuler maintenant" name="apply" class="cursor-pointer bg-[#328E4E] text-white font-medium py-2 px-4 rounded-lg w-full hover:bg-green-800 transition duration-300">
                    </form>
                    
                    <?php
                    if(isset($_POST['apply'])){
                        $team="select DISTINCT sum(Nom) as participants from utilisateur u, participants p where u.ID=p.idutilsateur";
                        $participantsSum=mysqli_query($conn, $team);
                        if($row=mysqli_fetch_assoc($participantsSum)){
                            $sum=$row['participants'];
                        }
                        $userID=$_SESSION["id"];
                        $check = "select * from participants where idutilsateur ='$userID' and idevent='$eventID'";
                        $checkres=mysqli_query($conn, $check);
                        if(mysqli_num_rows($checkres)>0){
                            echo("Already applied");
                        } else {
                            if($sum%2 == 0){
                                $joinTeam='B';
                            }else{
                                $joinTeam='A';
                            }
                            $req1="insert into participants (idevent, idutilsateur, team) values ('$eventID', '$userID', '$joinTeam')";
                            $res1=mysqli_query($conn, $req1);
                        }

                    }
                    ?>
                </div>
            </div>
        </div>
    </main>
<!-- Section Description et Lieu de la Campagne -->
 
<section class="max-w-7xl mx-auto bg-white py-10">
    <div class="container mx-auto px-4 grid grid-cols-1 md:grid-cols-2 gap-8">
        <!-- Colonne gauche -->
        <div class="space-y-8">
            <div>
                <h2 class="text-2xl font-semibold  text-[#044952] mb-4">Description</h2>
                <p class="text-gray-600 text-md">
                    <?php echo($Description); ?>
                </p>
            </div>
            
            <div class="time-section bg-[#dce3c7] p-4 rounded-lg border border-gray-200">
    <h2 class="text-xl font-semibold text-[#044952] uppercase mb-4">Heure</h2>
    <div class="space-y-3 text-gray-700">
        <div class="flex justify-between items-center">
            <p class="font-medium ">Heure de départ:</p>
            <p class="text-slate-600 font-bold"><?php echo($startTime); ?></p>
        </div>
        <div class="flex justify-between items-center">
            <p class="font-medium">Heure de fin:</p>
            <p class="text-slate-600 font-bold"><?php echo($endTime); ?></p>
        </div>
    </div>
</div>

        </div>

        <!-- Colonne droite -->
        <div>
           
            <h2 class="text-2xl font-semibold mb-4 text-[#044952]">Lieu de la compagne</h2>
            <div class="bg-gray-100 h-96 w-full mb-4">
                <div id="map" class="aspect-square w-full h-full">
                
             <iframe src=<?php echo($googlemaps); ?>  class="w-full " height="386" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">

             </iframe>
                </div>
            </div>
            
        </div>
    </div>
</section>

    

  
      <!-- Tableau corrigé -->
       <?php
        if($status=='Upcoming'){
            
        
       ?>
      <section class="py-10 ">
        <div class="container mx-auto px-4 ">
          <h2 class="text-2xl font-bold mb-6 text-center">Tableau des équipes</h2>
          <div class="team-table">
            <!-- Colonne Équipe A -->
            <div class="team-column">
              <div class="team-header">Équipe A</div>
              <?php
                $req2="select DISTINCT Nom from utilisateur u, participants p where u.ID=p.idutilsateur and idevent = '$eventID' and team='A'";
                $participants=mysqli_query($conn,$req2);
                while($row=mysqli_fetch_assoc($participants)){
                    echo('<div class="team-row">'.$row['Nom'].'</div>');
                }
              ?>
            </div>
            <!-- Colonne Équipe B -->
            <div class="team-column">
              <div class="team-header">Équipe B</div>
              <?php
                $req3="select DISTINCT Nom from utilisateur u, participants p where u.ID=p.idutilsateur and idevent = '$eventID' and team='B'";
                $participants1=mysqli_query($conn,$req3);
                while($row3=mysqli_fetch_assoc($participants1)){
                    echo('<div class="team-row">'.$row3['Nom'].'</div>');
                }
              ?>
            </div>
          </div>
        </div>
      </section>
      <?php
        }else{

        
      ?>
      <!-- COLLECTED MATERIALS -->
      <section class="py-10 max-w-7xl mx-auto">
      <table class="min-w-full  leading-normal">
                            <thead>
                                <tr>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Material
                                    </th>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Quantity
                                    </th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $getMatReq="select * from eventmaterials where idevent='$eventID'";
                                $getMatRes=mysqli_query($conn, $getMatReq);

        while($mats=mysqli_fetch_assoc($getMatRes)) {
            echo('<tr>
            <td style="background-color: #dce3c7; width: 50%;" class="px-5 py-5 border border-[#044952] text-sm">
                <div class="flex items-center">
                    <div class="">
                        <p class="text-gray-900  font-medium whitespace-no-wrap">'
                            .$mats["nommat"].'
                        </p>
                    </div>
                </div>
            </td>
            <td style="background-color: #dce3c7; width: 50%;" class="px-5 py-5 border border-[#044952] text-sm">
                <p class="text-gray-900 font-medium  whitespace-no-wrap">'
                            .$mats["qty"].'</p>
            </td>
            </tr>');
        }
        ?>
    </tbody>
</table>
      </section>
     <section class="py-10 max-w-7xl  mx-auto px-4 py-8">
    <h1 class="text-2xl font-bold mb-6">PHOTOS DE L'ÉVÉNEMENT</h1>
    
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 auto-rows-auto">
        <?php 
        $galleryReq = "select gallery from evenements where IDevent='$eventID'";
        $gallerRes = mysqli_query($conn, $galleryReq);
        while($gallery = mysqli_fetch_assoc($gallerRes)) {
            $photos = explode(",", $gallery['gallery']);
            foreach($photos as $index => $photo) {
                // Different column spans based on index to create masonry effect
                $classes = match($index % 7) {
                    0 => "col-span-1 row-span-1 md:col-span-1",
                    1 => "col-span-1 row-span-2 md:col-span-1",
                    2 => "col-span-1 row-span-1 md:col-span-1",
                    3 => "col-span-1 row-span-1 md:col-span-1",
                    4 => "col-span-1 row-span-1 md:col-span-1",
                    5 => "col-span-1 row-span-1 md:col-span-1",
                    6 => "col-span-1 row-span-1 md:col-span-1",
                    default => "col-span-1"
                };
                echo '<div class="' . $classes . ' overflow-hidden rounded-lg">';
                echo '<img 
                    src="../uploads/' . $photo . '" 
                    alt="Event photo" 
                    class="w-full h-full object-cover"
                    loading="lazy"
                >';
                echo '</div>';
            }
        }
        ?>
    </div>
</section>
    <?php
        }
    ?>
   <!-- Section Partenaires et Sponsors -->
    <section class="bg-white py-10">
        <div class="container mx-auto px-4 py-10 max-w-7xl mx-auto">
            <h2 class="text-3xl font-bold text-center mb-8">Partenaires et Sponsors</h2>
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
        const menuToggle = document.getElementById('menu-toggle');
        const navbarSticky = document.getElementById('navbar-sticky');

        menuToggle.addEventListener('click', () => {
            navbarSticky.classList.toggle('hidden');
        });
    </script>



</body>

</html>
<?php
} else {
    header("location: login.php");
}


?>
