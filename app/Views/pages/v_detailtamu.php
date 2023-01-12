<?= $this->extend('templates/t_dashboard'); ?>

<?= $this->section('content'); ?>

<div class="flex flex-wrap mx-3 w-[100%]">
  <div class="w-[100%] h-full px-2 mb-6 xl:mb-0">
    <div class="w-[100%]">

      <!-- alert -->
      <?php if (session()->getFlashdata('success')) : ?>
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
          <span class="block sm:inline"><?= session()->getFlashdata('success'); ?></span>
        </div>
      <?php endif; ?>

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
                      Nama Admin
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
                      Status
                    </th>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                      Aksi
                    </th>
                  </tr>
                </thead class="border-b">
                <tbody>
                  <?php $nomor = 1 + (5 * ($currentPage - 1));  ?>
                  <?php foreach ($tamu as $key => $value) : ?>
                    <tr class="bg-white border-b">
                      <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900"><?= $nomor++; ?></td>
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
                      <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        <?= $value['status']; ?>
                      </td>
                      <td class="text-sm text-blue-800 font-light px-6 py-4 whitespace-nowrap">
                        <a class="inline-block px-6 py-2.5 bg-red-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out" href="<?= base_url(); ?>/admin/hapustamu/delete/<?= $value['id_tamu']; ?>" onclick="return confirm('apakah anda yakin')">Hapus</a>
                        <?php if($value['status'] === 'CHECK-IN') : ?>
                        <a class="inline-block px-6 py-2.5 bg-red-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out" href="<?= base_url(); ?>/admin/checkout/update/<?= $value['id_tamu']; ?>/<?= $value['status']; ?>" onclick="return confirm('apakah anda yakin')">Checkout</a>
                        <?php endif; ?>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>

              <?= $pager->links('tamu', 'tamu_pagination');  ?>

              <a class="m-4 inline-block px-6 py-2.5 bg-green-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-green-700 hover:shadow-lg focus:bg-green-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-800 active:shadow-lg transition duration-150 ease-in-out" href="<?= base_url(); ?>/admin/cetak">Export to Excel</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection(); ?>