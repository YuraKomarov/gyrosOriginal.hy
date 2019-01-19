<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<?php if (empty($arResult['ALL_ITEMS'])) die; ?>



        <nav class="nav topmenu">
            <div class="row">
                <?php foreach ($arResult['ALL_ITEMS'] as $arItem): ?>
                    <?php if ($arItem['SELECTED']): ?>
                        <a class="nav-link active" href="<?=$arItem['LINK']?>"><?= $arItem['TEXT'] ?></a>
                    <?php else: ?>
                        <a class="nav-link" href="<?=$arItem['LINK']?>"><?= $arItem['TEXT'] ?></a>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </nav>
