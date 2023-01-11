<?= $this->extend('templates/t_admin'); ?>

<?= $this->section('content'); ?>

<section class="bg-gray-50 dark:bg-gray-900">
  <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
    <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
      <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
        <h1 class="text-xl text-center font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
          Login
        </h1>
        <form class="space-y-4 md:space-y-6" action="<?= base_url(); ?>/admin/login/auth" enctype="multipart/form-data">
          <?= csrf_field(); ?>
          <?php if (session()->getFlashdata('failed')) : ?>
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
              <span class="block sm:inline"><?= session()->getFlashdata('failed'); ?></span>
            </div>
          <?php endif; ?>

          <div>
            <label for="email_admin" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
            <input type="email" name="email_admin" id="email_admin" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="email" required>
          </div>
          <div>
            <label for="password_admin" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
            <input type="password" name="password_admin" id="password_admin" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
          </div>
          <button type="submit" class="w-full text-white border bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Login</button>
          <p class="text-sm font-light text-gray-500 dark:text-gray-400">
            Don't have an account? <a href="<?= base_url(); ?>/admin/register" class="font-medium text-primary-600 hover:underline dark:text-primary-500">Register</a>
          </p>
        </form>
      </div>
    </div>
  </div>
</section>

<?= $this->endSection(); ?>