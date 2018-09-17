<?php /** @var \app\models\Product[] $items */ ?>
<style>
    .product_preview {
        width: 60px;
        height: 60px;
        float: left;
        margin: 6px;
    }

    a.product_card {
        border: 1px solid lightgray;
    }

    a.product_card:hover {
        border: 1px solid #8bd8ff;
    }


</style>
<h1>Каталог товаров</h1>
<div class="product_container">
    <?php foreach ($items as $item): ?>
        <div class="product_preview">
            <a class="product_card" href="<?php $item->getUrl() ?>">
                <div class="product_title">
                    <?= $item->name ?>
                </div>
                <div class="product_panel">
                    <div class="short_description">
                        <?= $item->getShortDescription() ?>
                    </div>
                </div>
            </a>
        </div>
    <?php endforeach; ?>
    <div class="clearfix"></div>
</div>