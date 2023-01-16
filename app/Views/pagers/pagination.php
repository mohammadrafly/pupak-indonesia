<?php $pager->setSurroundCount(2) ?>
<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <?php if ($pager->hasPrevious()) : ?>
        <li class="page-item disabled">
            <a class="page-link" href="<?= $pager->getFirst() ?>" tabindex="-1" aria-label="<?= lang('Pager.first') ?>">
                <i class="fa fa-angle-left"></i>
                <span class="sr-only"><?= lang('Pager.first') ?></span>
            </a>
        </li>
        <li class="page-item disabled">
            <a class="page-link" href="<?= $pager->getPrevious() ?>" tabindex="-1" aria-label="<?= lang('Pager.previous') ?>">
                <i class="fa fa-angle-left"></i>
                <span class="sr-only"><?= lang('Pager.previous') ?></span>
            </a>
        </li>
    <?php endif ?>
    <?php foreach ($pager->links() as $link) : ?>
        <li class="page-item <?= $link['active'] ? 'active"' : '' ?>">
            <a class="page-link" href="<?= $link['uri'] ?>"><?= $link['title'] ?>
            </a>
        </li>
    <?php endforeach ?>
    <?php if ($pager->hasNext()) : ?>
    <li class="page-item">
      <a class="page-link" href="<?= $pager->getNext() ?>" aria-label="<?= lang('Pager.next') ?>">
        <i class="fa fa-angle-right"></i>
        <span class="sr-only"><?= lang('Pager.next') ?></span>
      </a>
    </li>
    <li class="page-item">
      <a class="page-link" href="<?= $pager->getLast() ?>" aria-label="<?= lang('Pager.last') ?>">
        <i class="fa fa-angle-right"></i>
        <span class="sr-only"><?= lang('Pager.last') ?></span>
      </a>
    </li>
    <?php endif ?>
  </ul>
</nav>