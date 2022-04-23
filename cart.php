<?php
require 'inc/head.php';
require 'inc/data/products.php';
require 'Connected.php';



 ?>

<section class="cookies container-fluid">
    <div class="row">
    <ul>
        <?php
        foreach ($_SESSION['cart'] as $key => $quantity) {
            if (isset($catalog[$key])) {
                ?>
        <li><?= $catalog[$key]['name']; ?> : <?= $quantity ?></li>
        <?php
            }
       }
       ?>
    </ul>
    </div>
</section>
<?php require 'inc/foot.php'; ?>