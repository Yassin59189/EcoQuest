<?php
  session_start();
  include "conn.php";
  $ID=$_SESSION['id'];
  $req="select * from utilisateur where ID='$ID'";
  $res=mysqli_query($conn, $req);
  if($row=mysqli_fetch_assoc($res)){
    $name=$row['Nom'];
    $email=$row['Email'];
    $tel=$row['tel'];
    $adresse=$row['adresse'];
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="Main.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">


    <style>
      
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

  .animate-fade-down {
    animation: fade-down 1s ease-out;
  }
</style>

</head>
  <body>
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
                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-[#FF9100] md:p-0 md:dark:hover:text-[#FF9100] dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"
                >Acceuil</a
              >
            </li>
            <li>
              <a
                href="SDG.php"
                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-[#FF9100] md:p-0 md:dark:hover:text-[#FF9100] dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"
                >Les ODD</a
              >
            </li>
            <li>
              <a
                href="becomePartner.php"
                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-[#FF9100] md:p-0 md:dark:hover:text-[#FF9100] dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"
                >Demande de partenariat</a
              >
            </li>
            <li>
              <a
                href="Event.php"
                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-[#FF9100] md:p-0 md:dark:hover:text-[#FF9100] dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"
                >Les Compagnes</a
              >
            </li>
            <li>
              <a
                href="contact.php"
                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-[#FF9100] md:p-0 md:dark:hover:text-[#FF9100] dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"
                >Contact</a
              >
            </li>
            <li>
              <a
                href="contact.php"
                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-[#FF9100] md:p-0 md:dark:hover:text-[#FF9100] dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"
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

<div class="max-w-6xl mx-auto font-sans">
    <!-- Banner -->
    <div class="h-96 bg-green-50 relative rounded-t-lg overflow-hidden"style="background-image: ;
             background-image:url('../uploads/1733873068.png');
              background-position: center;
              background-repeat: no-repeat;
              background-size: cover;
              position: relative;"></div>

    <!-- Profile Section -->
   <div class="bg-white p-6 rounded-b-lg shadow-sm">
    <!-- Profile Header -->
    <div class="relative  -mt-6 bg-green-50">
      
            <!-- Banner Upload Button -->
            <label for="banner-upload" class="absolute right-4 bottom-4 bg-white px-3 py-2 rounded-md shadow-sm cursor-pointer flex items-center gap-2 hover:bg-gray-50">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
                <span class="text-sm text-gray-700">Modifier la bannière</span>
            </label>
            <input type="file" id="banner-upload" class="hidden" accept="image/*">
        </div>
    </div>

    <div class="flex items-center gap-6 mb-8">
        <!-- Profile Picture Container -->
        <div class="relative">
            <div class="w-28 h-28 rounded-full bg-gray-100 border-4 border-white -mt-20 relative bg-cover bg-center bg-no-repeat" 
                 style="background-image: url('../uploads/1733764460.jpg');">
                <!-- Profile Picture Upload Button -->
                <label for="profile-upload" class="absolute bottom-0 right-0 bg-white p-2 rounded-full shadow-md cursor-pointer hover:bg-gray-50">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                </label>
                <input type="file" id="profile-upload" class="hidden" accept="image/*">
            </div>
        </div>

        <div class="-mt-10">
            
            <h1 class="text-2xl font-bold text-[#044952] m-0 mt-4"><?php echo($name) ?></h1>
        </div>
    </div>

    <!-- Navigation -->
    <nav class="border-b border-gray-200 mb-8 sm:flex min-[320px]:hidden">
        <ul class="flex gap-8 list-none p-0 m-0">
            <li class="py-3 px-1 text-green-700 border-b-2 border-green-700 cursor-pointer">Aperçu du Profil</li>
            <li class="py-3 px-1 text-gray-600 hover:text-gray-800 cursor-pointer">Événements Participés</li>
            
        </ul>
    </nav>
    


        

           <!-- Profile Content -->
            <div class="space-y-8 mb-20">
                <!-- Summary Section -->
                <div>
                    <div class="flex justify-between items-center">
                        <h2 class="text-xl font-semibold text-[#044952]">Résumé</h2>
                        <button onclick="openModal('summary-modal')" class="text-green-700 hover:text-green-800">Modifier</button>
                    </div>
                    <p id="summary-text" class="text-gray-600 mt-2">Coordination des initiatives environnementales et supervision des projets de développement durable dans la région.</p>
                </div>

                <!-- Info Section -->
                <div >
                    <div class="flex justify-between items-center ">
                        <h2 class="text-xl font-semibold text-[#044952]">Information de Contact</h2>
                    </div>
                <ul id="contact-info" class="space-y-4 mt-2 text-gray-600">
                  <li class="flex items-center space-x-2">
                   <i class="fas fa-regular fa-envelope text-green-700"></i>
                      
                      <span><b>Email:</b> <?php echo($email); ?></span>
                  </li>
                  <li class="flex items-center space-x-2">
                      <i class="fas fa-phone-alt fa-regular text-green-700"></i>
                      <span><b>Phone:</b> <?php echo($tel); ?></span>
                  </li>
                  <li class="flex items-center space-x-2">
                    <i class="fas fa-map-marker-alt  fa-regular text-green-700"></i>
                    <span><b>Adress:</b>  <?php echo($adresse); ?></span>
                  </li>
                </ul>
                <div class="flex gap-4 mt-4">
                  <a href="logout.php">
                    <button type="button" class="text-[#FF9100]  border-2 border-[#FF9100] hover:bg-[#FF9100] duration-300 transition hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-md text-sm px-4 py-3 text-center ">
                        Sign Out
                    </button>
                  </a>
                <?php if($_SESSION["role"]=="admin"){
       echo('
        
        <a href="../daskboard/index.php">dashboard<a/>');
    }?>
    
                  <a href="<!-- delete_account.php -->">
                      <button type="button" class="text-white  bg-red-600 hover:bg-red-700 focus:ring-4 duration-300 transition  focus:outline-none focus:ring-blue-300 font-medium rounded-md text-sm px-4 py-3 text-center">
                          Delete Account
                      </button>
                  </a>
                </div>
              </div>
            </div>
        </div>
    </div>
</div>
    <!-- Modal for Summary -->
    <div id="summary-modal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center">
        <div class="bg-white rounded-lg p-6 w-full max-w-md">
            <h3 class="text-xl font-bold mb-4">Modifier le résumé</h3>
            <textarea id="summary-input" class="w-full h-32 p-2 border rounded mb-4" rows="4"></textarea>
            <div class="flex justify-end gap-3">
                <button onclick="closeModal('summary-modal')" class="px-4 py-2 text-gray-600 hover:text-gray-800">Annuler</button>
                <button class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700">Enregistrer</button>
            </div>
        </div>
    </div>

   

</div>
     <!-- Footer -->
     <footer class="bg-[#044952] text-white py-6">
      <div
        class="container mx-auto px-4 space-y-4 md:space-y-0 md:flex md:justify-between sm:items-center sm:justify-center"
      >
        <div>
          <a href="#" class="flex items-center space-x-1 rtl:space-x-reverse">
            <img src="logo equoquest imen-06.png" class="h-12" alt="Logo" />
          </a>

          <p>Contact</p>
          <p>Email: ecoquest@gmail.com</p>
          <p>Phone: +216 56 650 772</p>
        </div>
        <nav class="space-y-2">
          <a href="#" class="block text-gray-400 hover:text-white">Home</a>
          <a href="#" class="block text-gray-400 hover:text-white">The SDGs</a>
          <a href="#" class="block text-gray-400 hover:text-white"
            >Partnership Request</a
          >
          <a href="#" class="block text-gray-400 hover:text-white">Campaigns</a>
          <a href="#" class="block text-gray-400 hover:text-white">Contact</a>
        </nav>
        <div>
          <label
            for="newsletter"
            class="block text-sm font-medium text-gray-400"
            >Email Address</label
          >
          <div class="flex mt-1">
            <input
              type="email"
              id="newsletter"
              class="p-2 border border-gray-600 rounded-l-md focus:ring-blue-500 focus:border-blue-500"
              placeholder="Enter your email"
            />
            <button
              class="bg-[#FF9100] text-white px-4 py-2 rounded-r-md hover:bg-green-800 duration-300 transition"
            >
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

    function openModal(modalId) {
            const modal = document.getElementById(modalId);
            modal.classList.remove('hidden');
            
            if (modalId === 'summary-modal') {
                const summaryText = document.getElementById('summary-text').innerText;
                document.getElementById('summary-input').value = summaryText;
            } else if (modalId === 'expertise-modal') {
                const expertiseItems = Array.from(document.getElementById('expertise-list').children)
                    .map(li => li.innerText)
                    .join('\n');
                document.getElementById('expertise-input').value = expertiseItems;
            }
        }

        function closeModal(modalId) {
            document.getElementById(modalId).classList.add('hidden');
        }

  </script>
  </body>
</html>
