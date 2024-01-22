<!-- resources/views/pendaftaran.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran Anak</title>
    @vite("resources/css/app.css")
    @vite("resources/css/home.css")
</head>
<body>

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
        <a href="#" class="hover:text-darkGrayishBlue text-lg">Beranda</a>
        <a href="#" class="hover:text-darkGrayishBlue text-lg">Pendaftaran</a>
        <a href="#" class="hover:text-darkGrayishBlue text-lg">Tentang</a>
        <a href="#" class="hover:text-darkGrayishBlue text-lg ">Kontak</a>
      </div>
      <!-- Button -->

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
        <a href="#">Tentang</a>
        <a href="#">Kontak</a>
      </div>
    </div>
    </nav>

    <section class=" container mx-auto py-1 px-3 bg-blueGray-50 font-Poppins">
        <div class="area">
            <ul class="circles">
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div>
        <div class="w-full lg:w-8/12 px-4 mx-auto mt-6">
          <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 border-0">
            <div class="rounded-t bg-brightRed mb-0 px-6 py-6">
              <div class="text-center flex justify-between">
                <h6 class="text-white text-xl font-bold">
                  Formulir Pendaftaran
                </h6>
              </div>
            </div>
            
            @include('layout.formAnak')

        
            @include('layout.formOrtu')    
                    {{-- identitas wali --}}

            @include('layout.formWali')
                      



              </form>
            </div>
          </div>

          <footer class="relative  pt-8 pb-6 mt-2">
          <div class="container mx-auto px-4">
            <div class="flex flex-wrap items-center md:justify-between justify-center">
                <button type="button" class=" bg-black w-full md:w-6/12 px-4 mx-auto text-center focus:outline-none text-black bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Green</button>

          
          </div>
        </footer>
        </div>
        </section>
        <footer class="bg-veryDarkBlue">
          <!-- Flex Container -->
          <div
            class="container flex flex-col-reverse justify-between px-6 py-10 mx-auto space-y-8 md:flex-row md:space-y-0"
          >
            <!-- Logo and social links container -->
            <div
              class="flex flex-col-reverse items-center justify-between space-y-12 md:flex-col md:space-y-0 md:items-start"
            >
              <div class="mx-auto my-6 text-center text-white md:hidden">
                  Copyright &copy; 2024, Teknik Informatika <br>Universitas Muhammadiyah Jember
              </div>
              <!-- Logo -->
              <div>
                <img src="../assets/img/logos/logo.png" class="h-16" alt="" />
              </div>
              <!-- Social Links Container -->
              <div class="flex justify-center space-x-4">
                <!-- Link 1 -->
                <a href="#">
                  <img src="../assets/img/assetsVector/icon-facebook.svg" alt="" class="h-8" />
                </a>
                <!-- Link 2 -->
                <a href="#">
                  <img src="../assets/img/assetsVector/icon-youtube.svg" alt="" class="h-8" />
                </a>
                <!-- Link 3 -->
                <a href="#">
                  <img src="../assets/img/assetsVector/icon-twitter.svg" alt="" class="h-8" />
                </a>
                <!-- Link 4 -->
                <a href="#">
                  <img src="../assets/img/assetsVector/icon-pinterest.svg" alt="" class="h-8" />
                </a>
                <!-- Link 5 -->
                <a href="#">
                  <img src="../assets/img/assetsVector/icon-instagram.svg" alt="" class="h-8" />
                </a>
              </div>
            </div>
            <!-- List Container -->
            <div class="flex justify-around space-x-32">
              <div class="flex flex-col space-y-3 text-white">
                <a href="#" class="hover:text-brightRed">Home</a>
                <a href="#" class="hover:text-brightRed">Pricing</a>
                <a href="#" class="hover:text-brightRed">Products</a>
                <a href="#" class="hover:text-brightRed">About</a>
              </div>
              <div class="flex flex-col space-y-3 text-white">
                <a href="#" class="hover:text-brightRed">Careers</a>
                <a href="#" class="hover:text-brightRed">Community</a>
                <a href="#" class="hover:text-brightRed">Privacy Policy</a>
              </div>
            </div>
      
            <!-- Input Container -->
            <div class="flex flex-col justify-between">
              <form>
                <div class="flex space-x-3">
                  <input
                    type="text"
                    class="flex-1 px-4 rounded-full focus:outline-none"
                    placeholder="Updated in your inbox"
                  />
                  <button
                    class="px-6 py-2 text-white rounded-full bg-brightRed hover:bg-brightRedLight focus:outline-none"
                  >
                    Go
                  </button>
                </div>
              </form>
              <div class="hidden text-white md:block">
                Copyright &copy; 2024, Teknik Informatika Universitas Muhammadiyah Jember
              </div>
            </div>
          </div>
        </footer>
</body>
</html>
