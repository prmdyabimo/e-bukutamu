v_profile.php

<?= $this->extend('templates/t_dashboard'); ?>

<?= $this->section('content'); ?>

<div class="flex flex-wrap flex-col h-[100vh] gap-4">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">

  <?php foreach ($admin as $key => $value) : ?>
    <div class="w-64 bg-[#20354b] rounded-2xl px-8 py-6 shadow-lg">
      <div class="flex items-center justify-between">
        <!-- <span class="text-gray-400 text-sm">2d ago</span> -->

        <span class="text-emerald-400">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
          </svg>
        </span>
      </div>

      <div class="mt-8 ">
        <h2 class="text-white font-bold text-2xl tracking-wide"><?= $value['nama_admin'] ?></h2>
      </div>

      <?php if ($nama_admin == $value['nama_admin']) : ?>
        <p class="text-emerald-400 font-semibold mt-2.5">
          Active
        </p>
      <?php endif;  ?>


    </div>
  <?php endforeach; ?>
</div>
  <?= $this->endSection(); ?>