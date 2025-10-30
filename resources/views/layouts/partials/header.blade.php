 <header id="header" class="header fixed-top">
     <div class="d-flex flex-wrap align-items-center justify-content-between px-3 position-relative">
         <nav id="navmenu" class="navmenu">
             <ul class="mb-2 mb-md-0 mb-md-0 text-uppercase">
                 <li><a href="/home" class=" px-2">Home</a></li>
                 <li class="dropdown"><a href="#" class=" px-2"><span>Katalog</span> <i
                             class="bi bi-chevron-down toggle-dropdown"></i></a>
                     <ul>
                         <li><a href="/undangan-digital">Undangan Digital</a></li>
                         <li><a href="#">Undangan Cetak</a></li>
                     </ul>
                 </li>
                 <li><a href="#about" class=" px-2">About Us</a></li>
                 <li><a href="#contact" class=" px-2">kontak</a></li>
             </ul>
             <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
         </nav>
         <div class="navbar-brand position-absolute top-50 start-50 translate-middle text-center d-none d-md-block">
             <a href="/" class="logo d-flex align-items-center me-auto flex-column flex-md-column">
                 <img src="images/logo.png" alt="">
                 <h6>Karta Invitation</h6>
             </a>
         </div>
         <div class="d-md-none">
             <a href="/" class="logo d-flex align-items-center me-auto flex-column flex-md-column">
                 <img src="images/logo.png" alt="">
                 <h6>Karta Invitation</h6>
             </a>
         </div>
         <div class="text-md-end">
             <button type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                 aria-controls="offcanvasRight" class="btn btn-login fw-bold">
                 <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                     class="bi bi-person-fill" viewBox="0 0 16 16">
                     <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"></path>
                 </svg>
                 Sign In
             </button>
             @include('auth.login')
         </div>
     </div>
 </header>
