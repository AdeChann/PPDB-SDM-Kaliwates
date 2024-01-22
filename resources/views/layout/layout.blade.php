<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    @vite('resources/css/home.css')
    <title>PPDB SDM Kaliwates</title>
</head>
<body>

    {{-- navbar --}}
@include('layout.navbar')

    {{-- content --}}
    @yield('content')

<!-- Footer -->
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
          <a href="#" class="hover:text-brightRed">Beranda</a>
          <a href="#" class="hover:text-brightRed">Pendaftaran</a>
          <a href="#" class="hover:text-brightRed">Informasi</a>
          <a href="#" class="hover:text-brightRed">Kontak</a>
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
