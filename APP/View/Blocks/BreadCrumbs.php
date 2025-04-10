<?php
/** @var array $bread_crumbs */
?>

<?php
if (_isUrl(\APP\Action\Index::getUrl()))
{
    return;
}

// fixme "обертку" container и тп нужно сохранять в том файле который использует этот шаблон, здесь должен быть
//  "чистый" блок, исправь это во всех шаблонах блоков ok
?>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <?php foreach ($bread_crumbs as $bread_crumb):?>
            <?php if (empty($bread_crumb['url'])): ?>

                <li class="breadcrumb-item active" aria-current="page">
                    <?= $bread_crumb['name']; ?>
                </li>
            <?php else: ?>

                <li class="breadcrumb-item">
                    <a href="<?= $bread_crumb['url'] ?>">
                        <?= $bread_crumb['name']; ?>
                    </a>
                </li>
            <?php endif; ?>
        <?php endforeach ?>
    </ol>
</nav>

