<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="icon" type="image/png" href="<?= base_url(); ?>/images/logo.png" />

  <title><?= $title; ?></title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/@popperjs/core@2"></script>
  <!-- Main Styling -->
  <link href="<?= base_url(); ?>/css/style.css" rel="stylesheet" />
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- aos -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

</head>

<body class="m-0 font-sans antialiased font-normal text-base leading-default bg-gray-50 text-slate-500">

  <?= $this->include('components/c_sidebar'); ?>

  <main class="ease-soft-in-out xl:ml-68.5 relative h-full max-h-screen rounded-xl transition-all duration-200">
    <?= $this->include('components/c_navbar'); ?>

    <div class="w-full px-6 py-6 mx-auto">

      <!-- section -->
      <?= $this->renderSection('content'); ?>
      <!-- end section -->

      <!-- footer -->
      <?= $this->include('components/c_footer'); ?>
      <!-- footer -->

    </div>
  </main>

  <!-- main script file  -->
  <script src="<?= base_url(); ?>/js/dashboard.js" async></script>
  <script src="<?= base_url(); ?>/js/dropdown.js"></script>
  <script src="<?= base_url(); ?>/js/navbar-collapse.js"></script>
  <script src="<?= base_url(); ?>/js/navbar-sticky.js"></script>
  <script src="<?= base_url(); ?>/js/sidebar-burger.js"></script>
  <script src="<?= base_url(); ?>/js/perfect-scrollbar.js"></script>
  <script src="<?= base_url(); ?>/js/script.js"></script>

  <!-- aos scripts -->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

</body>

</html>