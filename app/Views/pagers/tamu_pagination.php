<div class="flex justify-center mt-5">
  <?php $pager->setSurroundCount(2) ?>

  <nav aria-label="Page navigation">
    <ul class="pagination flex gap-5">
      <?php if ($pager->hasPrevious()) : ?>
        <li>
          <a class="page-link text-xl py-3 px-6 relative block border-0 bg-transparent outline-none transition-all duration-300 rounded-md text-gray-800 hover:text-gray-800 hover:bg-gray-200 focus:shadow-none" href="<?= $pager->getFirst() ?>" aria-label="<?= lang('Pager.first') ?>">
            <span aria-hidden="true"><?= lang('Pager.first') ?></span>
          </a>
        </li>
        <li>
          <a class="page-link text-xl py-3 px-6 relative block border-0 bg-transparent outline-none transition-all duration-300 rounded-md text-gray-800 hover:text-gray-800 hover:bg-gray-200 focus:shadow-none" href="<?= $pager->getPrevious() ?>" aria-label="<?= lang('Pager.previous') ?>">
            <span aria-hidden="true"><?= lang('Pager.previous') ?></span>
          </a>
        </li>
      <?php endif ?>

      <?php foreach ($pager->links() as $link) : ?>
        <li <?= $link['active'] ? 'class="active"' : '' ?>>
          <?php if ($link['active']) :  ?>
            <a class="page-link text-xl py-3 px-6 relative block border-0 bg-transparent outline-none transition-all duration-300 rounded-md text-gray-800 hover:text-gray-800 bg-gray-200 hover:bg-gray-300 focus:shadow-none" href="<?= $link['uri'] ?>">
              <?= $link['title'] ?>
            </a>
          <?php else :  ?>
            <a class="page-link text-xl py-3 px-6 relative block border-0 bg-transparent outline-none transition-all duration-300 rounded-md text-gray-800 hover:text-gray-800 hover:bg-gray-300 focus:shadow-none" href="<?= $link['uri'] ?>">
              <?= $link['title'] ?>
            </a>
          <?php endif;  ?>
        </li>
      <?php endforeach ?>

      <?php if ($pager->hasNext()) : ?>
        <li>
          <a class="page-link text-xl py-3 px-6 relative block border-0 bg-transparent outline-none transition-all duration-300 rounded-md text-gray-800 hover:text-gray-800 hover:bg-gray-200 focus:shadow-none" href="<?= $pager->getNext() ?>" aria-label="<?= lang('Pager.next') ?>">
            <span aria-hidden="true"><?= lang('Pager.next') ?></span>
          </a>
        </li>
        <li>
          <a class="page-link text-xl py-3 px-6 relative block border-0 bg-transparent outline-none transition-all duration-300 rounded-md text-gray-800 hover:text-gray-800 hover:bg-gray-200 focus:shadow-none" href="<?= $pager->getLast() ?>" aria-label="<?= lang('Pager.last') ?>">
            <span aria-hidden="true"><?= lang('Pager.last') ?></span>
          </a>
        </li>
      <?php endif ?>
    </ul>
       
  </nav>
</div>