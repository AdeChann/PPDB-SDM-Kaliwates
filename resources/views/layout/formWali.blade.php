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
