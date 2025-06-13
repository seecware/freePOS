<header class="bg-white shadow-md sticky top-0 z-50">
  <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-3 flex justify-between items-center">
    <a href="https://github.com/seecware" target="_blank" rel="noopener noreferrer" class="flex items-center space-x-2">
      <img src="/assets/logo.png" alt="Logo microPOS" class="rounded-full h-9 w-9"> <span class="text-xl font-semibold text-text-800">microPOS</span>
    </a>

    <nav class="hidden md:flex space-x-4 lg:space-x-6 items-center">
      <a href="/contact" class="text-slate-600 hover:text-sky-600 px-3 py-2 rounded-md text-sm font-medium transition-colors duration-150">Contacto</a>
      <a href="/" class="text-slate-600 hover:text-sky-600 px-3 py-2 rounded-md text-sm font-medium transition-colors duration-150">Home</a>
      <a href="/login" class="bg-primary-600 text-white px-5 py-2.5 rounded-lg text-sm font-semibold hover:bg-sky-700 transition-colors duration-150 shadow-sm hover:shadow-md">
        Iniciar Sesión
      </a>
    </nav>

    <button id="menu-btn" class="md:hidden text-slate-600 hover:text-sky-600 focus:outline-none focus:ring-2 focus:ring-sky-500 rounded" aria-label="Abrir menú">
      <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="2"
           viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round"
              d="M4 6h16M4 12h16M4 18h16"></path>
      </svg>
    </button>
  </div>

  <div id="mobile-menu" class="md:hidden hidden bg-white shadow-lg border-t border-slate-200">
    <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
      <a href="/login" class="block px-3 py-2 rounded-md text-base font-medium text-slate-700 hover:text-sky-600 hover:bg-sky-50 transition-colors duration-150">
        Iniciar Sesión
      </a>
      <a href="/contact" class="block px-3 py-2 rounded-md text-base font-medium text-slate-700 hover:text-sky-600 hover:bg-sky-50 transition-colors duration-150">
        Contacto
      </a>
    </div>
  </div>
</header>

<script>
  const menuBtn = document.getElementById('menu-btn');
  const mobileMenu = document.getElementById('mobile-menu');
  const mainContent = document.querySelector('main'); // Asumiendo que tu contenido principal está en una etiqueta <main>

  menuBtn.addEventListener('click', (event) => {
    event.stopPropagation(); // Evita que el clic se propague al documento
    mobileMenu.classList.toggle('hidden');
    // Opcional: Añadir/quitar una clase para cambiar el ícono de hamburguesa a X
    // menuBtn.classList.toggle('is-active');
  });

  // Opcional: Cerrar el menú si se hace clic fuera de él en móvil
  document.addEventListener('click', (event) => {
    const isClickInsideMenu = mobileMenu.contains(event.target);
    const isClickOnMenuButton = menuBtn.contains(event.target);

    if (!mobileMenu.classList.contains('hidden') && !isClickInsideMenu && !isClickOnMenuButton) {
      mobileMenu.classList.add('hidden');
      // menuBtn.classList.remove('is-active'); // Si usas el cambio de ícono
    }
  });

  // Opcional: Cerrar el menú si se hace scroll en la página
  // window.addEventListener('scroll', () => {
  //   if (!mobileMenu.classList.contains('hidden')) {
  //     mobileMenu.classList.add('hidden');
  //     // menuBtn.classList.remove('is-active'); // Si usas el cambio de ícono
  //   }
  // });
</script>