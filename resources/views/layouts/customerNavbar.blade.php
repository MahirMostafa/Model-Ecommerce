<nav class="bg-zinc-50 py-2 shadow-dark-mild dark:bg-neutral-700">
  <div class="container mx-auto flex items-center justify-between px-4">
      <a class="flex items-center text-neutral-900 dark:text-neutral-200" href="#">
          <img src="https://tecdn.b-cdn.net/img/logo/te-transparent-noshadows.webp" class="h-8" alt="TE Logo" loading="lazy" />
          <span class="ml-2 text-xl">Customer Panel</span>
      </a>
      <button
          class="block lg:hidden px-2 text-black/50 hover:text-black dark:text-neutral-200"
          type="button"
          id="navbarToggle"
          aria-expanded="false"
          aria-label="Toggle navigation">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-7 h-7">
              <path fill-rule="evenodd" d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z" clip-rule="evenodd" />
          </svg>
      </button>
  </div>

  <div class="hidden lg:flex lg:items-center lg:justify-between lg:px-4" id="navbarSupportedContent">
      <ul class="flex space-x-4">
          <li><a class="text-black/60 hover:text-black dark:text-white/60 dark:hover:text-white" href="/">Products</a></li>
          <li>
              <a href="/cart" class="relative flex items-center text-black hover:text-gray-300 dark:text-white dark:hover:text-gray-300">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                  </svg>
                  <!-- Badge to show cart count -->
                  <span class="absolute -top-1 -right-1 inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-100 bg-red-600 rounded-full">
                      {{ session('cart') ? count(session('cart')) : 0 }}
                  </span>
              </a>
          </li>
          <li><a class="text-black/60 hover:text-black dark:text-white/60 dark:hover:text-white" href="/orders">View Orders</a></li>
      </ul>

      <div class="relative flex items-center ml-auto">
          <div class="relative" data-twe-dropdown-ref data-twe-dropdown-alignment="end">
              <a
                  class="flex items-center transition duration-150 ease-in-out"
                  href="#"
                  id="dropdownMenuButton"
                  role="button"
                  data-twe-dropdown-toggle-ref
                  aria-expanded="false">
                  <span class="mr-2 text-neutral-600 dark:text-white">{{ Auth::user()->name }}</span>
                  <img src="https://tecdn.b-cdn.net/img/new/avatars/2.jpg" class="rounded-full" style="height: 30px; width: 30px" alt="User Avatar" loading="lazy" />
              </a>
              <ul
                  class="absolute z-[1000] hidden min-w-max list-none rounded-lg border-none bg-white shadow-lg dark:bg-surface-dark"
                  aria-labelledby="dropdownMenuButton"
                  data-twe-dropdown-menu-ref>
                  <li>
                      <a class="block py-2 px-4 text-neutral-700 hover:bg-neutral-100 dark:text-neutral-200 dark:hover:bg-neutral-600" href="#">My Profile</a>
                  </li>
                  <li>
                      <a class="block py-2 px-4 text-neutral-700 hover:bg-neutral-100 dark:text-neutral-200 dark:hover:bg-neutral-600" href="#">Settings</a>
                  </li>
                  <li>
                      <hr class="my-2 h-0 border border-t-0 border-neutral-700 opacity-25 dark:border-neutral-200" />
                  </li>
              </ul>
          </div>
          <a class="text-red-600 hover:text-red-800 dark:text-red-400 dark:hover:text-red-500 ml-4" href="/logout">Logout</a>
      </div>
  </div>

  <!-- Mobile Menu -->
  <div class="lg:hidden" id="mobileMenu">
      <ul class="flex flex-col space-y-2 p-4" id="mobileNav">
          <li><a class="text-black/60 hover:text-black dark:text-white/60 dark:hover:text-white" href="/">Products</a></li>
          <li>
              <a href="/cart" class="relative flex items-center text-black hover:text-gray-300 dark:text-white dark:hover:text-gray-300">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                  </svg>
                  <!-- Badge to show cart count -->
                  <span class="absolute -top-1 -right-1 inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-100 bg-red-600 rounded-full">
                      {{ session('cart') ? count(session('cart')) : 0 }}
                  </span>
              </a>
          </li>
          <li><a class="text-black/60 hover:text-black dark:text-white/60 dark:hover:text-white" href="/orders">View Orders</a></li>
          <li><a class="text-red-600 hover:text-red-800 dark:text-red-400 dark:hover:text-red-500" href="/logout">Logout</a></li>
      </ul>
  </div>
</nav>

<!-- Add this CSS to style the navbar for responsiveness -->
<style>
  @media (max-width: 768px) {
      #navbarSupportedContent {
          display: none;
      }

      #mobileMenu {
          display: block;
      }

      #navbarToggle[aria-expanded="true"] ~ #mobileMenu {
          display: block;
      }
  }
</style>

<script>
  document.getElementById('navbarToggle').addEventListener('click', function() {
      const mobileNav = document.getElementById('mobileMenu');
      const isExpanded = this.getAttribute('aria-expanded') === 'true';
      this.setAttribute('aria-expanded', !isExpanded);
      mobileNav.style.display = isExpanded ? 'none' : 'block';
  });
</script>
