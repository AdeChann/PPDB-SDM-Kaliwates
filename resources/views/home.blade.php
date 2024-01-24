
@extends('layout.layout')

@section('content')
 <!-- Hero Section -->
 <section id="hero">
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
    <!-- Flex Container -->
    <div
      class="container flex flex-col-reverse items-center px-6 mx-auto mt-10 space-y-0 md:space-y-0 md:flex-row"
    >
      <!-- Left item -->
      <div class="flex flex-col mb-32 space-y-12 md:w-1/2">
        <h1
          class="max-w-md text-4xl font-bold text-center md:text-5xl md:text-left"
        >
        Sekolah Dasar Muhammadiyah Kaliwates Jember
        </h1>
        <p class="max-w-sm text-center text-darkGrayishBlue md:text-left">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos tempora quod id, obcaecati unde debitis dolores natus tenetur ex voluptatum.
        </p>
        <div class="flex justify-center md:justify-start">
          <a
            href="/daftar/ppdb"
            class="p-3 px-6 pt-2 text-white bg-brightRed rounded-full baseline hover:bg-brightRedLight"
            >Daftar Sekarang</a
          >
        </div>
      </div>
      <!-- Image -->
      <div class="md:w-1/2">
        <img src="../assets/img/logos/ilustrator.jpg"/>
      </div>
    </div>
  </section>

  <!-- Features Section -->
  <section id="features">
    <!-- Flex container -->
    <div
      class="container flex flex-col px-4 mx-auto mt-10 space-y-12 md:space-y-0 md:flex-row"
    >
      <!-- What's Different -->
      <div class="flex flex-col space-y-12 md:w-1/2">
        <h2 class="max-w-md text-4xl font-bold text-center md:text-left font-Poppins">
         Alur Pendaftaran
        </h2>
        <p class="max-w-sm text-center text-darkGrayishBlue md:text-left">
          Manage provides all the functionality your team needs, without the
          complexity. Our software is tailor-made for modern digital product
          teams.
        </p>
      </div>

      <!-- Numbered List -->
      <div class="flex flex-col space-y-8 md:w-1/2">
        <!-- List Item 1 -->
        <div
          class="flex flex-col space-y-3 md:space-y-0 md:space-x-6 md:flex-row"
        >
          <!-- Heading -->
          <div class="rounded-l-full bg-brightRedSupLight md:bg-transparent">
            <div class="flex items-center space-x-2">
              <div
                class="px-4 py-2 text-white rounded-full md:py-1 bg-brightRed"
              >
                01
              </div>
              <h3 class="text-base font-bold md:mb-4 md:hidden">
                Buat Akun Email              </h3>
            </div>
          </div>

          <div>
            <h3 class="hidden mb-4 text-lg font-bold md:block">
                Buat Akun Email
            </h3>
            <p class="text-darkGrayishBlue">
                Calon peserta didik atau orang tua membuat akun pendaftaran dengan mengisi formulir registrasi online.
            </p>
          </div>
        </div>

        {{-- list item 2 --}}
        <div
        class="flex flex-col space-y-3 md:space-y-0 md:space-x-6 md:flex-row"
      >
        <!-- Heading -->
        <div class="rounded-l-full bg-brightRedSupLight md:bg-transparent">
          <div class="flex items-center space-x-2">
            <div
              class="px-4 py-2 text-white rounded-full md:py-1 bg-brightRed"
            >
              02
            </div>
            <h3 class="text-base font-bold md:mb-4 md:hidden">
                Login Akun Email
            </h3>
          </div>
        </div>

        <div>
          <h3 class="hidden mb-4 text-lg font-bold md:block">
              Login Akun Email
          </h3>
          <p class="text-darkGrayishBlue">
            Setelah verifikasi berhasil, calon peserta didik atau orang tua login ke akun yang telah dibuat.          </p>
        </div>
      </div>

      {{-- list item 3 --}}
      <div
      class="flex flex-col space-y-3 md:space-y-0 md:space-x-6 md:flex-row"
    >
      <!-- Heading -->
      <div class="rounded-l-full bg-brightRedSupLight md:bg-transparent">
        <div class="flex items-center space-x-2">
          <div
            class="px-4 py-2 text-white rounded-full md:py-1 bg-brightRed"
          >
            03
          </div>
          <h3 class="text-base font-bold md:mb-4 md:hidden">
            Mengisi Formulir Pendaftaran          </h3>
        </div>
      </div>
      <div>
        <h3 class="hidden mb-4 text-lg font-bold md:block">
            Mengisi Formulir Pendaftaran        </h3>
        <p class="text-darkGrayishBlue">
            Di dalam akun, pengguna mengisi formulir pendaftaran online dengan informasi seperti data calon peserta didik, alamat, riwayat pendidikan, dan lainnya.<br>
            Pastikan formulir mencakup semua informasi yang diperlukan sesuai persyaratan PPDB.
        </p>
      </div>
    </div>


      {{-- list item 4 --}}
    <div
    class="flex flex-col space-y-3 md:space-y-0 md:space-x-6 md:flex-row"
  >
    <!-- Heading -->
    <div class="rounded-l-full bg-brightRedSupLight md:bg-transparent">
      <div class="flex items-center space-x-2">
        <div
          class="px-4 py-2 text-white rounded-full md:py-1 bg-brightRed"
        >
          04
        </div>
        <h3 class="text-base font-bold md:mb-4 md:hidden">
            Pembayaran atau Konfirmasi
        </h3>
      </div>
    </div>

    <div>
      <h3 class="hidden mb-4 text-lg font-bold md:block">
        Pembayaran atau Konfirmasi
      </h3>
      <p class="text-darkGrayishBlue">
        biaya pendaftaran, calon peserta didik atau orang tua dapat melakukan pembayaran melalui sistem pembayaran offline      </p>
    </div>
  </div>

  {{-- list item 5 --}}
        <div
          class="flex flex-col space-y-3 md:space-y-0 md:space-x-6 md:flex-row"
        >
          <!-- Heading -->
          <div class="rounded-l-full bg-brightRedSupLight md:bg-transparent">
            <div class="flex items-center space-x-2">
              <div
                class="px-4 py-2 text-white rounded-full md:py-1 bg-brightRed"
              >
                05
              </div>
              <h3 class="text-base font-bold md:mb-4 md:hidden">
                Cetak Bukti Pendaftaran
              </h3>
            </div>
          </div>

          <div>
            <h3 class="hidden mb-4 text-lg font-bold md:block">
                Cetak Bukti Pendaftaran
             </h3>
            <p class="text-darkGrayishBlue">
                Setelah proses pendaftaran selesai, pengguna dapat mencetak bukti pendaftaran sebagai tanda bahwa pendaftaran telah berhasil.
            </p>
          </div>
        </div>

        </div>
      </div>
    </div>
  </section>

  <!-- Testimonials -->
  <section id="testimonials">
    <!-- Container to heading and testm blocks -->
    <div class="max-w-6xl px-5 mx-auto mt-32 text-center">
      <!-- Heading -->
      <h2 class="text-4xl font-bold text-center">
        Kenapa Harus SDM Kaliwates?
      </h2>
      <!-- Testimonials Container -->
      <div class="flex flex-col mt-24 md:flex-row md:space-x-6">
        <!-- Testimonial 1 -->
        <div
          class="flex flex-col items-center p-6 space-y-6 rounded-lg bg-veryLightGray md:w-1/3"
        >
          <img src="../assets/img/assetsVector/avatar-anisha.png" class="w-16 -mt-14" alt="" />
          <h5 class="text-lg font-bold">kamto</h5>
          <p class="text-sm text-darkGrayishBlue">
            “Manage has supercharged our team’s workflow. The ability to
            maintain visibility on larger milestones at all times keeps
            everyone motivated.”
          </p>
        </div>

        <!-- Testimonial 2 -->
        <div
          class="hidden flex-col items-center p-6 space-y-6 rounded-lg bg-veryLightGray md:flex md:w-1/3"
        >
          <img src="..assets/img/assetsVector/avatar-ali.png" class="w-16 -mt-14" alt="" />
          <h5 class="text-lg font-bold">Sutar</h5>
          <p class="text-sm text-darkGrayishBlue">
            “We have been able to cancel so many other subscriptions since
            using Manage. There is no more cross-channel confusion and
            everyone is much more focused.”
          </p>
        </div>

        <!-- Testimonial 3 -->
        <div
          class="hidden flex-col items-center p-6 space-y-6 rounded-lg bg-veryLightGray md:flex md:w-1/3"
        >
          <img src="../assets/img/assetsVector/imgavatar-richard.png" class="w-16 -mt-14" alt="" />
          <h5 class="text-lg font-bold">Kamto</h5>
          <p class="text-sm text-darkGrayishBlue">
            “Manage has supercharged our team’s workflow. The ability to
            maintain visibility on larger milestones at all times keeps
            everyone motivated.”
          </p>
        </div>
      </div>
      <!-- Button -->
      <div class="my-16">
        <a
          href="#"
          class="p-3 px-6 pt-2 text-white bg-brightRed rounded-full baseline hover:bg-brightRedLight"
          >Get Started</a
        >
      </div>
    </div>
  </section>

  <!-- CTA Section -->
  <section id="cta" class="bg-brightRed">
    <!-- Flex Container -->
    <div
      class="container flex flex-col items-center justify-between px-6 py-24 mx-auto space-y-12 md:py-12 md:flex-row md:space-y-0"
    >
      <!-- Heading -->
      <h2
        class="text-5xl font-bold text-center text-white md:text-4xl md:max-w-xl md:text-left"
      >
        Daftarkan Dirimu Sekarang Juga
      </h2>
      <!-- Button -->
      <div>
        <a
          href="#"
          class="p-3 px-6 pt-2 text-brightRed bg-white rounded-full shadow-2xl baseline hover:bg-gray-900"
          >Get Started</a
        >
      </div>
    </div>
  </section>




@endsection
