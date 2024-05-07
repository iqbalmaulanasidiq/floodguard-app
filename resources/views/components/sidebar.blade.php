<aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-5 transition-transform -translate-x-full  bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700" aria-label="Sidebar">
    <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
        
        <ul class="space-y-2 font-medium">
            <li class="mt-5 mb-5 ms-3">
                <!-- Logo Branding -->
                <div class="flex items-center justify-start">
                    <img src="{{ asset('storage/logo.png') }}" alt="Logo" style="width: 30%" />
                    <span class="font-bold text-lg text-gray-900 dark:text-white">FLOODGUARD</span>
                </div>
            </li>

            <li class="mt-5">
                <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                <svg class="w-5 h-5  text-gray-500 dark:text-white transition duration-75  group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6.143 1H1.857A.857.857 0 0 0 1 1.857v4.286c0 .473.384.857.857.857h4.286A.857.857 0 0 0 7 6.143V1.857A.857.857 0 0 0 6.143 1Zm10 0h-4.286a.857.857 0 0 0-.857.857v4.286c0 .473.384.857.857.857h4.286A.857.857 0 0 0 17 6.143V1.857A.857.857 0 0 0 16.143 1Zm-10 10H1.857a.857.857 0 0 0-.857.857v4.286c0 .473.384.857.857.857h4.286A.857.857 0 0 0 7 16.143v-4.286A.857.857 0 0 0 6.143 11Zm10 0h-4.286a.857.857 0 0 0-.857.857v4.286c0 .473.384.857.857.857h4.286a.857.857 0 0 0 .857-.857v-4.286a.857.857 0 0 0-.857-.857Z"/>
                </svg>               
                <span class="ms-3">Dashboard</span>
                </a>
            </li>
            
            <li>
                <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                <svg class="w-5 h-5 text-gray-500 dark:text-white transition duration-75 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 18">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 3a3 3 0 1 1-1.614 5.53M15 12a4 4 0 0 1 4 4v1h-3.348M10 4.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0ZM5 11h3a4 4 0 0 1 4 4v2H1v-2a4 4 0 0 1 4-4Z"/>
                </svg> 
                <span class="flex-1 ms-3 whitespace-nowrap">Kelola User</span>
                </a>
            </li>

            <li>
               <form action="#">
                   <a href="#" id="logout-button" onclick="confirmLogout(event)" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                       <svg class="w-5 h-5 text-gray-500 dark:text-white transition duration-75 group-hover:text-gray-900 dark:group-hover:text-white" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg">
                           <path d="M868 732h-70.3c-4.8 0-9.3 2.1-12.3 5.8-7 8.5-14.5 16.7-22.4 24.5a353.84 353.84 0 0 1-112.7 75.9A352.8 352.8 0 0 1 512.4 866c-47.9 0-94.3-9.4-137.9-27.8a353.84 353.84 0 0 1-112.7-75.9 353.28 353.28 0 0 1-76-112.5C167.3 606.2 158 559.9 158 512s9.4-94.2 27.8-137.8c17.8-42.1 43.4-80 76-112.5s70.5-58.1 112.7-75.9c43.6-18.4 90-27.8 137.9-27.8 47.9 0 94.3 9.3 137.9 27.8 42.2 17.8 80.1 43.4 112.7 75.9 7.9 7.9 15.3 16.1 22.4 24.5 3 3.7 7.6 5.8 12.3 5.8H868c6.3 0 10.2-7 6.7-12.3C798 160.5 663.8 81.6 511.3 82 271.7 82.6 79.6 277.1 82 516.4 84.4 751.9 276.2 942 512.4 942c152.1 0 285.7-78.8 362.3-197.7 3.4-5.3-.4-12.3-6.7-12.3zm88.9-226.3L815 393.7c-5.3-4.2-13-.4-13 6.3v76H488c-4.4 0-8 3.6-8 8v56c0 4.4 3.6 8 8 8h314v76c0 6.7 7.8 10.5 13 6.3l141.9-112a8 8 0 0 0 0-12.6z"/>
                       </svg>
                       <span class="flex-1 ms-3 whitespace-nowrap">Keluar</span>
                   </a>
               </form>
           </li>
           
           <script type="module">
            import { getAuth, signOut } from "https://www.gstatic.com/firebasejs/10.11.1/firebase-auth.js";
            import { initializeApp } from "https://www.gstatic.com/firebasejs/10.11.1/firebase-app.js";
      
            const firebaseConfig = {
              apiKey: "AIzaSyBUTHsxJwwS5k1wG8POzvPU-IFAoD5gWGg",
        authDomain: "floodguard-indobot.firebaseapp.com",
        databaseURL: "https://floodguard-indobot-default-rtdb.firebaseio.com",
        projectId: "floodguard-indobot",
        storageBucket: "floodguard-indobot.appspot.com",
        messagingSenderId: "949006118133",
        appId: "1:949006118133:web:3268ae8033baf150abe9bc",
        measurementId: "G-68Y36P9WCX"
            };
      
            // Initialize Firebase
            const app = initializeApp(firebaseConfig);
            let logoutButton = document.getElementById("logout-button");
            console.log(logoutButton);
      
            logoutButton.addEventListener("click", (e) => {
              const auth = getAuth(app);
              signOut(auth)
                .then(() => {
                  alert("sukses logout");
                  location.href = "/";
                })
                .catch((error) => {});
            });
          </script>
           
           
        </ul>
    </div>
</aside>
