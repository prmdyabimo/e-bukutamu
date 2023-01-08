<?= $this->extend('templates/t_dashboard'); ?>

<?= $this->section('content'); ?>

<div class="flex flex-wrap mx-3 w-[100%]">
  <div class="w-[100%] h-full px-2 mb-6 xl:mb-0">
    <div class="w-[100%]">

      <div class="flex flex-col">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
          <div class="py-4 inline-block min-w-full sm:px-6 lg:px-8">
            <div class="overflow-hidden rounded shadow-md ">
              <table class="min-w-full text-center">
                <thead class="border-b bg-gray-800">
                  <tr>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                      #
                    </th>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                      Nama
                    </th>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                      Nama Penemu
                    </th>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                      Nomor Identitas
                    </th>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                      Alamat 
                    </th>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                      Keperluan 
                    </th>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                      Tanggal Kunjungan
                    </th>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                      Foto
                    </th>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                      Aksi
                    </th>
                  </tr>
                </thead class="border-b">
                <tbody>
                  <?php $no = 1 ?>
                  <?php foreach ($tamu as $key => $value) : ?>
                    <tr class="bg-white border-b">
                      <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900"><?= $no++; ?></td>
                      <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        <?= $value['nama_tamu']; ?>
                      </td>
                      <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        <?= $value['nama_penemu']; ?>
                      </td>
                      <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        <?= $value['nomor_identitas_tamu']; ?>
                      </td>
                      <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        <?= $value['alamat_tamu']; ?>
                      </td>
                      <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        <?= $value['keperluan_tamu']; ?>
                      </td>
                      <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        <?= $value['tanggal_kunjungan_tamu']; ?>
                      </td>
                      <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        <img class="w-[100px]" src="<?= base_url('/upload/' . $value['foto'] . ''); ?>" alt="<?= $value['foto']; ?>">
                      </td>
                      <td class="text-sm text-blue-800 font-light px-6 py-4 whitespace-nowrap">
                        <a href="<?= base_url(); ?>/admin/edittamu/<?= $value['id_tamu']; ?>">Edit</a>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

<?= $this->endSection(); ?>