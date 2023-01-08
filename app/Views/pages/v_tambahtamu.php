<?= $this->extend('templates/t_dashboard'); ?>

<?= $this->section('content'); ?>

<div class="flex flex-wrap mx-3 w-[100%]">
  <div class="w-[100%] h-full px-2 mb-6 xl:mb-0">
    <div class="w-[100%]">
      <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" action="<?= base_url(); ?>/admin/tambahtamu/savetamu" method="POST" enctype="multipart/form-data">
        <?= csrf_field(); ?>
        <div class="mb-4">
          <p class="text-red-600">
            <?= $validation->getError('nama_tamu'); ?>
          </p>
          <label class="block text-gray-700 text-sm font-bold mb-2" for="nama_tamu">
            Nama Tamu
          </label>
          <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nama_tamu" name="nama_tamu" type="text" placeholder="Masukkan nama tamu">
        </div>
        <div class="mb-4">
          <p class="text-red-600">
            <?= $validation->getError('nama_penemu'); ?>
          </p>
          <label class="block text-gray-700 text-sm font-bold mb-2" for="nama_penemu">
            Nama Penemu
          </label>
          <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nama_penemu" name="nama_penemu" type="text" placeholder="Masukkan nama penemu">
        </div>
        <div class="mb-4">
          <p class="text-red-600">
            <?= $validation->getError('nomor_identitas_tamu'); ?>
          </p>
          <label class="block text-gray-700 text-sm font-bold mb-2" for="nomor_identitas_tamu">
            Nomor Identitas Tamu
          </label>
          <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nomor_identitas_tamu" name="nomor_identitas_tamu" type="text" placeholder="Masukkan nomor identitas tamu">
        </div>
        <div class="mb-4">
          <p class="text-red-600">
            <?= $validation->getError('keperluan_tamu'); ?>
          </p>
          <label class="block text-gray-700 text-sm font-bold mb-2" for="keperluan_tamu">
            Keperluan Tamu
          </label>
          <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="keperluan_tamu" name="keperluan_tamu" type="text" placeholder="Masukkan keperluan tamu">
        </div>
        <div class="mb-4">
          <p class="text-red-600">
            <?= $validation->getError('alamat_tamu'); ?>
          </p>
          <label class="block text-gray-700 text-sm font-bold mb-2" for="alamat_tamu">
            Alamat Tamu
          </label>
          <textarea id="alamat_tamu" name="alamat_tamu" rows="4" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Masukkan alamat tamu"></textarea>
        </div>
        <div class="mb-4">
          <p class="text-red-600">
            <?= $validation->getError('tanggal_kunjungan_tamu'); ?>
          </p>
          <label class="block text-gray-700 text-sm font-bold mb-2" for="tanggal_kunjungan_tamu">
            Tanggal Kunjungan Tamu
          </label>
          <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="tanggal_kunjungan_tamu" name="tanggal_kunjungan_tamu" type="date" placeholder="Masukkan tanggal kunjungan tamu">
        </div>
        <div class="mb-4">
          <p class="text-red-600">
            <?= $validation->getError('foto'); ?>
          </p>
          <label class="block text-gray-700 text-sm font-bold mb-2" for="foto">
            Foto
          </label>
          <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="foto" name="foto" type="file" placeholder="Masukkan foto tamu">
        </div>
        <div class="flex items-center justify-between">
          <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
            Tambah Tamu
          </button>
        </div>
      </form>
    </div>
  </div>
</div>

<?= $this->endSection(); ?>