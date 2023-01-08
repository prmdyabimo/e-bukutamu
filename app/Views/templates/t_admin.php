<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="icon" type="image/png" href="<?= base_url(); ?>/images/logo.png" />

  <script src="https://cdn.tailwindcss.com"></script>

  <title><?= $title; ?></title>
</head>

<body>

  <?= $this->renderSection('content'); ?>

</body>

</html>