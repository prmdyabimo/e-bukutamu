<?= $this->extend('templates/t_dashboard'); ?>

<?= $this->section('content'); ?>

<!-- alert -->
<?php if (session()->getFlashdata('success')) : ?>
  <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
    <span class="block sm:inline"><?= session()->getFlashdata('success'); ?></span>
  </div>
<?php endif; ?>

<div class="flex flex-wrap -mx-3">
  <!-- card1 -->
  <div data-aos="flip-left" data-aos-duration="1000" class="w-full max-w-full h-[80vh] px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
    <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
      <div class="flex-auto p-4">
        <div class="flex flex-row -mx-3">
          <div class="flex-none w-2/3 max-w-full px-3">
            <div>
              <p class="mb-0 font-sans font-semibold leading-normal text-sm">Total Tamu</p>
              <h5 class="mb-0 font-bold">
                <?php foreach ($tamu as $value) : ?>
                <?php endforeach; ?>
                <?= $value['id_tamu']; ?>
              </h5>
            </div>
          </div>
          <div class="px-3 text-right basis-1/3">
            <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-purple-700 to-pink-500">
              <i class="ni leading-none ni-money-coins text-lg relative top-3.5 text-white"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- card2 -->
  <div data-aos="flip-left" data-aos-duration="1000" class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
    <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
      <div class="flex-auto p-4">
        <div class="flex flex-row -mx-3">
          <div class="flex-none w-2/3 max-w-full px-3">
            <div>
              <p class="mb-0 font-sans font-semibold leading-normal text-sm">Total Admin</p>
              <h5 class="mb-0 font-bold">
                <?php foreach ($admin as $value) : ?>
                <?php endforeach; ?>
                <?= $value['id_admin']; ?>
              </h5>
            </div>
          </div>
          <div class="px-3 text-right basis-1/3">
            <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-purple-700 to-pink-500">
              <i class="ni leading-none ni-world text-lg relative top-3.5 text-white"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- card3 -->
  <div data-aos="flip-left" data-aos-duration="1000" class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
    <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
      <div class="flex-auto p-4">
        <div class="flex flex-row -mx-3">
          <div class="flex-none w-2/3 max-w-full px-3">
            <div>
              <p class="mb-0 font-sans font-semibold leading-normal text-sm">Tamu Checkout</p>
              <h5 class="mb-0 font-bold">
                <?php
                echo $status_out;
                ?>
              </h5>
            </div>
          </div>
          <div class="px-3 text-right basis-1/3">
            <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-purple-700 to-pink-500">
              <i class="ni leading-none ni-paper-diploma text-lg relative top-3.5 text-white"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- card4 -->
  <div data-aos="flip-left" data-aos-duration="1000" class="w-full max-w-full px-3 sm:w-1/2 sm:flex-none xl:w-1/4">
    <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
      <div class="flex-auto p-4">
        <div class="flex flex-row -mx-3">
          <div class="flex-none w-2/3 max-w-full px-3">
            <div>
              <p class="mb-0 font-sans font-semibold leading-normal text-sm">Tamu Checkin</p>
              <h5 class="mb-0 font-bold">
                <?php
                echo $status_in;
                ?>
              </h5>
            </div>
          </div>
          <div class="px-3 text-right basis-1/3">
            <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-purple-700 to-pink-500">
              <i class="ni leading-none ni-cart text-lg relative top-3.5 text-white"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection(); ?>