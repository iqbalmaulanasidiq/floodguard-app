




<nav id="navbar" class="fixed w-full z-10 bg-white border-gray-200 dark:bg-gray-900 navbar-hidden">
    <div class="max-w-screen-xl flex justify-center mx-auto p-4">
        <div class="flex space-x-8">
            <a href="/" class="nav-link text-gray-900 dark:text-white hover:text-gray-500 dark:hover:text-blue-500 font-medium">Beranda</a>
            <a href="/alat" class="nav-link text-gray-900 dark:text-white hover:text-gray-500 dark:hover:text-blue-500 font-medium">Peralatan IoT</a>
            <a href="/info" class="nav-link text-gray-900 dark:text-white hover:text-gray-500 dark:hover:text-blue-500 font-medium">Tentang Kami</a>
        </div>
    </div>
</nav>
  





<script>
    // JavaScript to add 'active' class to the current link
    document.addEventListener('DOMContentLoaded', function () {
        const links = document.querySelectorAll('.nav-link');
        const currentPath = window.location.pathname;
        
        links.forEach(link => {
            if (link.getAttribute('href') === currentPath) {
                link.classList.add('active');
            }
        });
    });
</script>