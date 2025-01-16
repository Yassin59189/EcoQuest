<!DOCTYPE html>
<html lang="en">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="Main.css">
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
<?php
 include "conn.php";
 session_start();?>
</head>

<body class="bg-gray-100 pt-16">
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
               
               if(isset($_SESSION["id"])){
                 echo('<a href="logout.php" class="text-white"><button
            type="button"
            class="text-white bg-[#FF9100] hover:bg-green-800 duration-300 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-[#FF9100] dark:hover:bg-[#FFCE00] dark:focus:ring-[#1d3b24]"
          >Sign out</button></a>');
               } else {
                 echo('<a href="logout.php" class="text-white"><button
            type="button"
            class="text-white bg-[#FF9100] hover:bg-green-800 duration-300 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-[#FF9100] dark:hover:bg-[#FFCE00] dark:focus:ring-[#1d3b24]"
          >Login</button></a>');
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
                >Home</a
              >
            </li>
          <li>
              <a
                href="SDG.php"
                class="block py-2 px-3 text-white bg-[#FF9100] rounded md:bg-transparent md:text-[#FF9100] md:p-0 md:dark:text-[#FF9100]"
                >SDG</a
              >
            </li>
      
            <li>
              <a
                href="becomePartner.php"
                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-[#FF9100] md:p-0 md:dark:hover:text-[#FF9100] dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"
                >Partnership Request</a
              >
            </li>
            <li>
              <a
                href="Event.php"
                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-[#FF9100] md:p-0 md:dark:hover:text-[#FF9100] dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"
                >Campaigns</a
              >
            </li>
            <li>
              <a
                href="Contact.html"
                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-[#FF9100] md:p-0 md:dark:hover:text-[#FF9100] dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"
                >Contact</a
              >
            </li>
            <li>
              <a
                href="Donation.html"
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
<!-- ODD Section -->
<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 overflow-x-hidden">
  <h1 class="text-3xl font-bold text-green-800 uppercase text-center mb-20">nous nous concentrons sur 4 des 17 ODD</h1>

  <div class="space-y-32">
    <!-- ODD 12 -->
    <div class="flex flex-col md:grid md:grid-cols-2 gap-8 md:gap-12 items-center" data-scroll>
      <div class="order-2 md:order-1 w-full md:w-2/3 opacity-0 -translate-x-full transition-all duration-1000 mx-auto" data-scroll-image="left">
        <img 
          src="../uploads/odd12.svg" 
          alt="ODD 12" 
          class="w-full aspect-square object-cover bg-gray-200 rounded-lg"
        />
      </div>
      <div class="order-1 md:order-2 space-y-4 text-center md:text-left">
        <h2 class="text-xl font-bold text-[#044952]">ODD 12 : Consommation et production responsables</h2>
        <div class="space-y-2">
          <p>Promouvoir des modes de consommation et de production durables est essentiel pour préserver nos ressources naturelles. Nous nous engageons à sensibiliser les individus et les organisations à adopter des pratiques écoresponsables.</p>
        </div>
      </div>
    </div>

    <!-- ODD 13 -->
    <div class="flex flex-col md:grid md:grid-cols-2 gap-8 md:gap-12 items-center" data-scroll>
      <div class="order-1 space-y-4 text-center md:text-left">
        <h2 class="text-xl font-bold text-[#044952]">ODD 13 : Mesures relatives à la lutte contre les changements climatiques</h2>
        <div class="space-y-2">
          <p>Face à l'urgence climatique, nous agissons pour sensibiliser et encourager les actions concrètes contre le réchauffement global.</p>
        </div>
      </div>
      <div class="order-2 w-full md:w-2/3 opacity-0 translate-x-full transition-all duration-1000 mx-auto" data-scroll-image="right">
        <img 
          src="../uploads/odd13.svg"
          alt="ODD 13" 
          class="w-full aspect-square object-cover bg-gray-200 rounded-lg"
        />
      </div>
    </div>

    <!-- ODD 14 -->
    <div class="flex flex-col md:grid md:grid-cols-2 gap-8 md:gap-12 items-center" data-scroll>
      <div class="order-2 md:order-1 w-full md:w-2/3 opacity-0 -translate-x-full transition-all duration-1000 mx-auto" data-scroll-image="left">
        <img 
          src="../uploads/odd14.svg" 
          alt="ODD 14" 
          class="w-full aspect-square object-cover bg-gray-200 rounded-lg"
        />
      </div>
      <div class="order-1 md:order-2 space-y-4 text-center md:text-left">
        <h2 class="text-xl font-bold text-[#044952]">ODD 14 : Vie aquatique</h2>
        <div class="space-y-2">
          <p>Protéger les écosystèmes marins est une priorité pour nous. Nos initiatives visent à sensibiliser aux enjeux de la pollution marine.</p>
        </div>
      </div>
    </div>

    <!-- ODD 15 -->
    <div class="flex flex-col md:grid md:grid-cols-2 gap-8 md:gap-12 items-center" data-scroll>
      <div class="order-1 space-y-4 text-center md:text-left">
        <h2 class="text-xl font-bold text-[#044952]">ODD 15 : Vie terrestre</h2>
        <div class="space-y-2">
          <p>La protection des écosystèmes terrestres est au cœur de notre mission. Nous encourageons des actions locales telles que le nettoyage des forêts.</p>
        </div>
      </div>
      <div class="order-2 w-full sm:w-3/4 md:w-2/3 opacity-0 translate-x-full transition-all duration-1000 mx-auto" data-scroll-image="right">
        <img 
          src="../uploads/odd15.svg" 
          alt="ODD 15" 
          class="sm:scale-75 md:w-full aspect-square object-cover bg-gray-200 rounded-lg"
        />
      </div>
    </div>
  </div>
</section>
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
  </script>
<script>
const observerOptions = {
  root: null,
  rootMargin: '0px',
  threshold: 0.1
};

const observer = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      const image = entry.target.querySelector('[data-scroll-image]');
      if (image) {
        image.style.opacity = '1';
        image.style.transform = 'translateX(0)';
      }
      observer.unobserve(entry.target);
    }
  });
}, observerOptions);

document.querySelectorAll('[data-scroll]').forEach((element) => {
  observer.observe(element);
});
</script>
</body>
</html>