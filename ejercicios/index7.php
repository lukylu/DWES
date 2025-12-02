<?php

$frutas = array("manzana", "pera", "naranja");

if (in_array("pera",$frutas)) {
    echo "¡La pera está en el array!";
} else {
    echo "La pera no está en el array.";
}
print("<br>");

$products = [
    ['name' => 'Laptop', 'price' => 1000],
    ['name' => 'T-shirt', 'price' => 20],
    ['name' => 'Smartphone', 'price' => 800],
];

$expensiveProducts = array_filter($products, function($product) {
    return $product['price'] > 500;
}, $expensiveProducts);

print_r($products);
print("<br>");
print_r($expensiveProducts);
print("<br>");
print_r($discountedProducts);

?>