
<!-- Navbar -->
<nav class="relative container mx-auto p-6">
<!-- Flex container -->
<div class="flex items-center justify-between">
  <!-- Logo -->
  <div class="pt-2 ">
    <img src="../assets/img/logos/logo2.png" alt="SD Muhammadiyah Kaliwates">
  </div>
  <!-- Menu Items -->
  <div class="hidden space-x-6 md:flex mr-9 font-Poppins">
    <a href="/beranda" class="hover:text-darkGrayishBlue text-lg">Beranda</a>
    <a href="/" class="hover:text-darkGrayishBlue text-lg">Pendaftaran</a>
    <a href="#" class="hover:text-darkGrayishBlue text-lg">Informasi</a>
    <a href="#" class="hover:text-darkGrayishBlue text-lg ">Kontak</a>
  </div>
  <!-- Button -->
  <a
    href="#"
    class="hidden p-3 px-6 pt-2 text-white bg-brightRed rounded-full baseline hover:bg-brightRedLight md:block"
    >Login</a
  >

  <!-- Hamburger Icon -->
  <button
    id="menu-btn"
    class="block hamburger md:hidden focus:outline-none"
  >
    <span class="hamburger-top"></span>
    <span class="hamburger-middle"></span>
    <span class="hamburger-bottom"></span>
  </button>
</div>

<!-- Mobile Menu -->
<div class="md:hidden">
  <div
    id="menu"
    class="absolute flex-col items-center hidden self-end py-8 mt-10 space-y-6 font-bold bg-white sm:w-auto sm:self-center left-6 right-6 drop-shadow-md"
  >
    <a href="#">Beranda</a>
    <a href="#">Formulir</a>
    <a href="#">Informasi</a>
    <a href="#">Kontak</a>
  </div>
</div>
</nav>
