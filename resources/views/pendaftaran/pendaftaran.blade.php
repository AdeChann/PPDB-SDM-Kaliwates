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
        <a href="/">Beranda</a>
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
        <div class="flex-auto px-4 lg:px-10 py-10 pt-0">

            <form action="{{route('user.store')}}"method="POST">
                @csrf
              <h6 class="text-blueGray-400 text-lg bg-brightRed mt-3 mb-6 font-bold uppercase">
                Identitas Anak
              </h6>
              <div class="flex flex-wrap">
                <div class="w-full lg:w-6/12 px-4">
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                      Nama Lengkap
                    </label>
                    <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                    name="nama_lengkap">
                  </div>
                </div>
                <div class="w-full lg:w-6/12 px-4">
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                      Nama Panggilan
                    </label>
                    <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                    name="nama_panggilan">
                </div>
                </div>
                <div class="w-full lg:w-6/12 px-4">
                        <div class="relative w-full mb-3">
                            <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                            NIK
                            </label>
                            <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                            name="nik" >
                        </div>

                </div>
                <div class="w-full lg:w-6/12 px-4">
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                      No. Kartu Keluarga
                    </label>
                    <input type="number" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                    name="no_kartu_keluarga" >
                  </div>
                </div>
              </div>

              <div class="w-full lg:w-6/12 px-4">
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                      No. Akta Lahir
                    </label>
                    <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                    name="no_akta_lahir" >
                  </div>
                </div>

                <div class="w-full lg:w-6/12 px-4">
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                      Tempat Lahir
                    </label>
                    <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                    name="tempat" >
                  </div>
                </div>

                <div class="w-full lg:w-6/12 px-4">
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                      Tanggal Lahir
                    </label>
                    <input type="date" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                    name="tanggal_lahir">
                  </div>
                </div>

                <div class="w-full lg:w-6/12 px-4">
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                      Kewarganegaraan
                    </label>
                    <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                    name="kewarganegaraan">
                  </div>
                </div>

                <div class="w-full lg:w-6/12 px-4">
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                      Berkebutuhan Khusus
                    </label>
                    <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                    name="berkebutuhan_khusus" >
                  </div>
                </div>

                <div class="w-full lg:w-6/12 px-4">
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                      Jenis Kelamin
                    </label>
                    <select name="jenis_kelamin" required>
                      <option value="laki-laki">Laki-laki</option>
                      <option value="perempuan">Perempuan</option>
                  </select>
              </div>
                </div>

                <div class="w-full lg:w-6/12 px-4">
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                      Usia
                    </label>
                    <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                    name="usia">
                  </div>
                </div>

                <div class="w-full lg:w-6/12 px-4">
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                      Alamat Tempat Tinggal
                    </label>
                    <textarea type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                    name="alamat_tempat_tinggal">
                    </textarea>
                  </div>
                </div>

                <div class="w-full lg:w-6/12 px-4">
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                      RT
                    </label>
                    <input type="number" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                    name="rt" >
                  </div>
                </div>

                <div class="w-full lg:w-6/12 px-4">
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                      RW
                    </label>
                    <input type="number" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                    name="rw" >
                  </div>
                </div>

                <div class="w-full lg:w-6/12 px-4">
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                      Desa/ Kelurahan
                    </label>
                    <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                    name="desa" >
                  </div>
                </div>

                <div class="w-full lg:w-6/12 px-4">
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                      Kecamatan
                    </label>
                    <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                    name="kecamatan" >
                  </div>
                </div>

                <div class="w-full lg:w-6/12 px-4">
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                      Lintang
                    </label>
                    <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                    name="lintang">
                  </div>
                </div>

                <div class="w-full lg:w-6/12 px-4">
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                      Bujur
                    </label>
                    <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                    name="bujur">
                  </div>
                </div>

                <div class="w-full lg:w-6/12 px-4">
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                      Kode Pos
                    </label>
                    <input type="number" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                    name="kode_pos">
                  </div>
                </div>

                <div class="w-full lg:w-6/12 px-4">
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                      Tinggal Bersama
                    </label>
                    <select name="tinggal_bersama" required>
                      <option value="Orang Tua">Orang Tua</option>
                      <option value="Wali">Wali</option>
                      <option value="Kos">Kos</option>
                      <option value="Asrama">Asrama</option>
                      <option value="Panti Asuhan">Panti Asuhan</option>
                  </select>
               </div>
                </div>

                <div class="w-full lg:w-6/12 px-4">
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                      Alat Transportasi
                    </label>
                    <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                    name="alat_transportasi">
                  </div>
                </div>

                <div class="w-full lg:w-6/12 px-4">
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                      Nomor Telepon
                    </label>
                    <input type="number" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                    name="no_hp">
                  </div>
                </div>

                <div class="w-full lg:w-6/12 px-4">
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                      Email Anak
                    </label>
                    <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                    name="email_anak">
                  </div>
                </div>

                <div class="w-full lg:w-6/12 px-4">
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                      Agama
                    </label>
                    <select name="agama" required>
                      <option value="Islam">Islam</option>
                      <option value="Hindu">Hindu</option>
                      <option value="Kristen">Kristen</option>
                      <option value="Katolik">Katolik</option>
                      <option value="Buddha">Buddha</option>
                      <option value="Khonghucu">Khonghucu</option>
                  </select>
               </div>
                </div>

                <div class="w-full lg:w-6/12 px-4">
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                      Hobi
                    </label>
                    <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                    name="hobi">
                  </div>
                </div>

                <div class="w-full lg:w-6/12 px-4">
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                      Cita-cita
                    </label>
                    <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                    name="cita_cita">
                  </div>
                </div>

                <div class="w-full lg:w-6/12 px-4">
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                      Anak ke  (sesuai kk)
                    </label>
                    <input type="number" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                    name="anak_ke">
                  </div>
                </div>

                <div class="w-full lg:w-6/12 px-4">
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                      Jumlah Saudara Kandung
                    </label>
                    <input type="number" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                    name="jumlah_saudara_kandung">
                  </div>
                </div>

                <div class="w-full lg:w-6/12 px-4">
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                      Bahasa Sehari-hari
                    </label>
                    <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                    name="bahasa_sehari_hari">
                  </div>
                </div>

                <div class="w-full lg:w-6/12 px-4">
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                      Tinggi Badan (cm)
                    </label>
                    <input type="number" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                    name="tinggi_badan">
                  </div>
                </div>

                <div class="w-full lg:w-6/12 px-4">
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                      Berat Badan (kg)
                    </label>
                    <input type="number" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                    name="berat_badan">
                  </div>
                </div>

                <div class="w-full lg:w-6/12 px-4">
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                      Asal TK/RA, SD/MI
                    </label>
                    <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                    name="asal_tk_ra_sd_mi">
                  </div>
                </div>

                <div class="w-full lg:w-6/12 px-4">
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                      NPSN TK/RA, SD/MI
                    </label>
                    <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                    name="npsn_tk_ra_sd_mi">
                  </div>
                </div>

                <div class="w-full lg:w-6/12 px-4">
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                      Penerima KPS/KPH
                    </label>
                    <select name="penerima_kps_kph" required>
                      <option value="Ya">Ya</option>
                      <option value="Tidak">Tidak</option>
                  </select>
              </div>
                </div>

                <div class="w-full lg:w-6/12 px-4">
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                      Apakah Memiliki KIP
                    </label>
                    <select name="kip" required>
                      <option value="Ya">Ya</option>
                      <option value="Tidak">Tidak</option>
                  </select>
               </div>
                </div>

                <div class="w-full lg:w-6/12 px-4">
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                      Bersedia Menerima PIP
                    </label>
                    <select name="pip" required>
                      <option value="Ya">Ya</option>
                      <option value="Tidak">Tidak</option>
                  </select>
              </div>
                </div>

                <div class="w-full lg:w-6/12 px-4">
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                      Kode Pos
                    </label>
                    <input type="number" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                    name="kode_pos">
                  </div>
                </div>

                <div class="w-full lg:w-6/12 px-4">
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                      Tanggal Mendaftar
                    </label>
                    <input type="date" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                    name="tanggal_mendaftar">
                  </div>
                </div>

                {{-- form ortu --}}
                <hr class="mt-6 border-b-1 border-blueGray-300">

                <h6 class="text-blueGray-400 text-lg mt-3 mb-6 font-bold uppercase">
                Identitas Orang Tua/ Wali
                </h6>

                {{-- identitas Ayah  --}}
                <div class="flex flex-wrap">
                <div class="w-full lg:w-12/12 px-4">
                    <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                        Nama Ayah Kandung
                    </label>
                    <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                    name="nama_ayah_kandung">
                    </div>
                </div>

                <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                        Tempat Lahir
                    </label>
                    <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                    name="tempat">
                    </div>
                </div>

                <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                        Tanggal Lahir
                    </label>
                    <input type="date" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                    name="tanggal_lahir">
                    </div>
                </div>

                <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                        Pendidikan Terakhir
                    </label>
                    <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                    name="pendidikan_terakhir">
                    </div>
                </div>

                <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                        Pekerjaan
                    </label>
                    <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                    name="pekerjaan">
                    </div>
                </div>

                <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                        Penghasilan Per bulan
                    </label>
                    <select name="penghasilan_per_bulan" required>
                        <option value="< Rp. 500.000"> < Rp. 500.000</option>
                        <option value="Rp. 500.000,- s/d Rp. 999.999,-">Rp. 500.000,- s/d Rp. 999.999,-</option>
                        <option value="Rp. 1.000.000,- s/d Rp. 1.999.999,-">Rp. 1.000.000,- s/d Rp. 1.999.999,-</option>
                        <option value="Rp. 2.000.000,- s/d Rp. 4.999.999,-">Rp. 2.000.000,- s/d Rp. 4.999.999,-</option>
                        <option value="Rp. 5.000.000,- s/d Rp. 20.000.000,-">Rp. 5.000.000,- s/d Rp. 20.000.000,-</option>
                        <option value="Rp. 20.000.000,-">> Rp. 20.000.000,-</option>
                        <option value="Tidak Berpenghasilan">Tidak Berpenghasilan</option>
                    </select>
                </div>
                </div>

                <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                        Berkebutuhan khusus
                    </label>
                    <select name="berkebutuhan_khusus" required>
                        <option value="Ya">Ya</option>
                        <option value="Tidak">Tidak</option>
                    </select>
                </div>
                </div>

                <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                        Alamat(kosongi jika sama)
                    </label>
                    <textarea type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                    name="alamat_ayah"></textarea>
                    </div>
                </div>

                <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                        Nomor Telepon
                    </label>
                    <input type="number" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                    name="no_hp_ayah">
                    </div>
                </div>

                {{-- Identitas Ibu --}}

                <div class="flex flex-wrap">
                    <div class="w-full lg:w-12/12 px-4">
                    <div class="relative w-full mb-3">
                        <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                        Nama Ibu Kandung
                        </label>
                        <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                        name="nama_ibu_kandung">
                    </div>
                    </div>

                    <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-full mb-3">
                        <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                        Tempat Lahir
                        </label>
                        <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                        name="tempat_ibu">
                    </div>
                    </div>

                    <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-full mb-3">
                        <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                        Tanggal Lahir
                        </label>
                        <input type="date" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                        name="tanggal_ibu">
                    </div>
                    </div>

                    <div class="w-full lg:w-4/12 px-4">
                        <div class="relative w-full mb-3">
                        <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                            Pendidikan Terakhir
                        </label>
                        <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                        name="pendidikan_terakhir_ibu">
                        </div>
                    </div>

                    <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-full mb-3">
                        <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                        Pekerjaan
                        </label>
                        <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                        name="pekerjaan_ibu">
                    </div>
                    </div>

                    <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-full mb-3">
                        <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                        Penghasilan Per bulan
                        </label>
                        <select name="penghasilan_per_bulan_ibu" required>
                        <option value="< Rp. 500.000"> < Rp. 500.000</option>
                        <option value="Rp. 500.000,- s/d Rp. 999.999,-">Rp. 500.000,- s/d Rp. 999.999,-</option>
                        <option value="Rp. 1.000.000,- s/d Rp. 1.999.999,-">Rp. 1.000.000,- s/d Rp. 1.999.999,-</option>
                        <option value="Rp. 2.000.000,- s/d Rp. 4.999.999,-">Rp. 2.000.000,- s/d Rp. 4.999.999,-</option>
                        <option value="Rp. 5.000.000,- s/d Rp. 20.000.000,-">Rp. 5.000.000,- s/d Rp. 20.000.000,-</option>
                        <option value="Rp. 20.000.000,-">> Rp. 20.000.000,-</option>
                        <option value="Tidak Berpenghasilan">Tidak Berpenghasilan</option>
                    </select>
                    </div>
                    </div>

                    <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-full mb-3">
                        <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                        Berkebutuhan Khusus
                        </label>
                        <select name="berkebutuhan_khusus_ibu" required>
                        <option value="Ya">Ya</option>
                        <option value="Tidak">Tidak</option>
                    </select>
                    </div>
                    </div>

                    <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-full mb-3">
                        <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                        Alamat(kosongi jika sama)
                        </label>
                        <textarea type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                        name="alamat_ibu"
                        ></textarea>
                    </div>
                    </div>

                    <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-full mb-3">
                        <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                        Nomor Telepon
                        </label>
                        <input type="number" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                        name="no_hp_ibu">
                    </div>
                    </div>


               {{-- wali --}}

                <hr class="mt-6 border-b-1 border-blueGray-300">

            <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
            Identitas Wali (jika Ada)
            </h6>

            {{-- identitas wali  --}}
            <div class="flex flex-wrap">
            <div class="w-full lg:w-12/12 px-4">
                <div class="relative w-full mb-3">
                <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                    Nama Wali
                </label>
                <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                name="name_wali" >
                </div>
            </div>

            <div class="w-full lg:w-4/12 px-4">
                <div class="relative w-full mb-3">
                <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                    Nik Wali
                </label>
                <input type="number" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                name="nik_wali">
                </div>
            </div>

            <div class="w-full lg:w-4/12 px-4">
                <div class="relative w-full mb-3">
                <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                    Tempat Lahir
                </label>
                <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                name="tempat">
                </div>
            </div>

            <div class="w-full lg:w-4/12 px-4">
                <div class="relative w-full mb-3">
                <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                    Tanggal Lahir
                </label>
                <input type="date" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                name="tanggal_lahir">
                </div>
            </div>

            <div class="w-full lg:w-4/12 px-4">
                <div class="relative w-full mb-3">
                <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                    Pendidikan Terakhir
                </label>
                <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                name="pendidikan_terakhir">
                </div>
            </div>

            <div class="w-full lg:w-4/12 px-4">
                <div class="relative w-full mb-3">
                <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                    Pekerjaan
                </label>
                <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                name="pekerjaan">
                </div>
            </div>

            <div class="w-full lg:w-4/12 px-4">
                <div class="relative w-full mb-3">
                <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                    Penghasilan Per bulan
                </label>
                <select name="penghasilan_per_bulan" required>
                    <option value="< Rp. 500.000"> < Rp. 500.000</option>
                    <option value="Rp. 500.000,- s/d Rp. 999.999,-">Rp. 500.000,- s/d Rp. 999.999,-</option>
                    <option value="Rp. 1.000.000,- s/d Rp. 1.999.999,-">Rp. 1.000.000,- s/d Rp. 1.999.999,-</option>
                    <option value="Rp. 2.000.000,- s/d Rp. 4.999.999,-">Rp. 2.000.000,- s/d Rp. 4.999.999,-</option>
                    <option value="Rp. 5.000.000,- s/d Rp. 20.000.000,-">Rp. 5.000.000,- s/d Rp. 20.000.000,-</option>
                    <option value="Rp. 20.000.000,-">> Rp. 20.000.000,-</option>
                    <option value="Tidak Berpenghasilan">Tidak Berpenghasilan</option>
                </select>
            </div>
            </div>


            </div>

            <div class="w-full lg:w-4/12 px-4">
                <div class="relative w-full mb-3">
                <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                    Alamat(kosongi jika sama)
                </label>
                <textarea type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                name="alamat"></textarea>
                </div>
            </div>

            <div class="w-full lg:w-4/12 px-4">
                <div class="relative w-full mb-3">
                <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                    Nomor Telepon
                </label>
                <input type="number" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                name="no_hp">
                </div>
            </div>
            <div class="relative">
                <div class="absolute -inset-5">
                    <div
                        class="w-full h-full max-w-sm mx-auto lg:mx-0 opacity-30 blur-lg bg-gradient-to-r from-yellow-400 via-pink-500 to-green-600">
                    </div>
                </div>
                <input type="submit" name="submit"
                    class="relative z-10 inline-flex items-center justify-center w-full px-8 py-3 text-lg font-bold text-white transition-all duration-200 bg-gray-900 border-2 border-transparent sm:w-auto rounded-xl font-pj hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900"
                    value="submit">
            </div>
    </form>






          <footer class="relative  pt-8 pb-6 mt-2">
          <div class="container mx-auto px-4">
            <div class="flex flex-wrap items-center md:justify-between justify-center">
                {{-- <form action="{{route('tampilkan-data')}}"method="post">
                </form> --}}


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
