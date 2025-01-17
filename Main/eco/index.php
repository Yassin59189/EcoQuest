<!DOCTYPE html>
<html lang="en-us">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Unity WebGL Player | PFA(Project)</title>
    <link rel="shortcut icon" href="TemplateData/favicon.ico">
    <link rel="stylesheet" href="TemplateData/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body>
 <!-- Header -->
 <?php
  session_start();
  $ID=$_SESSION['id'];?>
     <nav
      class="bg-[#044952] dark:bg-[#044952] fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600 mb-20"
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
            <div class="w-10 h-10 rounded-full bg-cover bg-center" style="background-image: url('."../../uploads/1733764460.jpg".'); cursor: pointer;"></div>
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
                href="../home.php"
                class="block py-2 px-3 text-gray-900 rounded transition duration-300 hover:bg-gray-100 md:hover:bg-transparent md:hover:text-[#FF9100] md:p-0 md:dark:hover:text-[#FF9100] dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"
                >Acceuil</a
              >
            </li>
            <li>
              <a
                href="../SDG.php"
                class="block py-2 px-3 text-gray-900 rounded transition duration-300 hover:bg-gray-100 md:hover:bg-transparent md:hover:text-[#FF9100] md:p-0 md:dark:hover:text-[#FF9100] dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"
                >Les ODD</a
              >
            </li>
            <li>
              <a
                href="../becomePartner.php"
                class="block py-2 px-3 text-gray-900 rounded transition duration-300 hover:bg-gray-100 md:hover:bg-transparent md:hover:text-[#FF9100] md:p-0 md:dark:hover:text-[#FF9100] dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"
                >Demande de partenariat</a
              >
            </li>
            <li>
              <a
                href="../Event.php"
                class="block py-2 px-3 text-white bg-[#FF9100] rounded transition duration-300 md:bg-transparent md:text-[#FF9100] md:p-0 md:dark:text-[#FF9100]"
                >Les Compagnes</a
              >
            </li>
            <li>
              <a
                href="../contact.php"
                class="block py-2 px-3 text-gray-900 rounded transition duration-300 hover:bg-gray-100 md:hover:bg-transparent md:hover:text-[#FF9100] md:p-0 md:dark:hover:text-[#FF9100] dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"
                >Contact</a
              >
            </li>
            <li>
              <a
                href="../donation.php"
                class="block py-2 px-3 text-gray-900 rounded transition duration-300 hover:bg-gray-100 md:hover:bg-transparent md:hover:text-[#FF9100] md:p-0 md:dark:hover:text-[#FF9100] dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"
                aria-current="page"
                >Donation</a
              >
            </li>
            
           
          </ul>
        </div>
      </div>
    </nav>


    <div id="unity-container" class="unity-desktop">
      <canvas id="unity-canvas" width=960 height=600></canvas>
      <div id="unity-loading-bar">
        <div id="unity-logo"></div>
        <div id="unity-progress-bar-empty">
          <div id="unity-progress-bar-full"></div>
        </div>
      </div>
      <div id="unity-warning"> </div>
      <div id="unity-footer">
        
        <div id="unity-fullscreen-button"></div>
       
      </div>
    </div>
    <script>
      var container = document.querySelector("#unity-container");
      var canvas = document.querySelector("#unity-canvas");
      var loadingBar = document.querySelector("#unity-loading-bar");
      var progressBarFull = document.querySelector("#unity-progress-bar-full");
      var fullscreenButton = document.querySelector("#unity-fullscreen-button");
      var warningBanner = document.querySelector("#unity-warning");

      // Shows a temporary message banner/ribbon for a few seconds, or
      // a permanent error message on top of the canvas if type=='error'.
      // If type=='warning', a yellow highlight color is used.
      // Modify or remove this function to customize the visually presented
      // way that non-critical warnings and error messages are presented to the
      // user.
      function unityShowBanner(msg, type) {
        function updateBannerVisibility() {
          warningBanner.style.display = warningBanner.children.length ? 'block' : 'none';
        }
        var div = document.createElement('div');
        div.innerHTML = msg;
        warningBanner.appendChild(div);
        if (type == 'error') div.style = 'background: red; padding: 10px;';
        else {
          if (type == 'warning') div.style = 'background: yellow; padding: 10px;';
          setTimeout(function() {
            warningBanner.removeChild(div);
            updateBannerVisibility();
          }, 5000);
        }
        updateBannerVisibility();
      }

      var buildUrl = "Build";
      var loaderUrl = buildUrl + "/test2.loader.js";
      var config = {
        dataUrl: buildUrl + "/test2.data",
        frameworkUrl: buildUrl + "/test2.framework.js",
        codeUrl: buildUrl + "/test2.wasm",
        streamingAssetsUrl: "StreamingAssets",
        companyName: "DefaultCompany",
        productName: "PFA(Project)",
        productVersion: "0.1",
        showBanner: unityShowBanner,
      };

      // By default, Unity keeps WebGL canvas render target size matched with
      // the DOM size of the canvas element (scaled by window.devicePixelRatio)
      // Set this to false if you want to decouple this synchronization from
      // happening inside the engine, and you would instead like to size up
      // the canvas DOM size and WebGL render target sizes yourself.
      // config.matchWebGLToCanvasSize = false;

      // If you would like all file writes inside Unity Application.persistentDataPath
      // directory to automatically persist so that the contents are remembered when
      // the user revisits the site the next time, uncomment the following line:
      // config.autoSyncPersistentDataPath = true;
      // This autosyncing is currently not the default behavior to avoid regressing
      // existing user projects that might rely on the earlier manual
      // JS_FileSystem_Sync() behavior, but in future Unity version, this will be
      // expected to change.

      if (/iPhone|iPad|iPod|Android/i.test(navigator.userAgent)) {
        // Mobile device style: fill the whole browser client area with the game canvas:

        var meta = document.createElement('meta');
        meta.name = 'viewport';
        meta.content = 'width=device-width, height=device-height, initial-scale=1.0, user-scalable=no, shrink-to-fit=yes';
        document.getElementsByTagName('head')[0].appendChild(meta);
        container.className = "unity-mobile";
        canvas.className = "unity-mobile";

        // To lower canvas resolution on mobile devices to gain some
        // performance, uncomment the following line:
        // config.devicePixelRatio = 1;

        unityShowBanner('WebGL builds are not supported on mobile devices.');
      } else {
        // Desktop style: Render the game canvas in a window that can be maximized to fullscreen:

        canvas.style.width = "960px";
        canvas.style.height = "600px";
      }

      loadingBar.style.display = "block";

      var script = document.createElement("script");
      script.src = loaderUrl;
      script.onload = () => {
        createUnityInstance(canvas, config, (progress) => {
          progressBarFull.style.width = 100 * progress + "%";
        }).then((unityInstance) => {
          loadingBar.style.display = "none";
          fullscreenButton.onclick = () => {
            unityInstance.SetFullscreen(1);
          };
        }).catch((message) => {
          alert(message);
        });
      };
      document.body.appendChild(script);
    </script>
    <!-- Footer -->
    <footer class="bg-[#044952] text-white py-6 mt-[100vh]" >
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
