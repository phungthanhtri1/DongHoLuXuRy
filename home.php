 
<?php
$array = [
    "components\home\carousel.php",
    "components\home\searvices.php",
    "components\home\product_offer.php",
    "components\home\our_product.php",
    "components\home\product_paner.php",
    "components\home\product_list.php",
    "components\home\best_sell.php",
];

foreach ($array as $component) {
    require_once($component);
}