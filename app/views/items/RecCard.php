
<?php foreach($datas as $data): ?>
<?php if (count($data) > 0): ?>
<div class="item1">
    <div class="photo">
        <img src="<?= $data['image_url'] ?>"
            alt="">
    </div>
    <div class="detail">
        <h3><?= $data['name'] ?></h3>
        <p><?= $data['description'] ?></p>
        <span>฿ <?= $data['price'] ?></span>
    </div>
    <div class="add-to-Cart" onclick="addToCart()">
        <button>Add to Cart</button>
    </div>
</div>
<?php endif ?>
<?php endforeach ?>