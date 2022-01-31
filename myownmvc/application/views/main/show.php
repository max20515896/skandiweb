<form action="/delete" method="post" id="productlist_form">
    <div class="product-list">
        <?php 

            foreach($data as $product){
                extract($product);
        ?>
        <div class="product-list__item">
            <div>
                <input type="checkbox" name="item[]" value="<?= $id ?>">
            </div>
            <p><?= $sku ?></p>
            <p><?= $name ?></p>
            <p><?= $price ?>.00 $</p>
            <p><?= ucfirst($property)?>: <?= $value?></p>
        </div>
        <?php
        };
        ?>
    </div>
</form>

