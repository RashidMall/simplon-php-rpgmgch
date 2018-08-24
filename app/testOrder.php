<?php 
include "./includes/header.php";
include "./includes/navigation.php";
?>

<div class="container">

<?php
$clients = (include './data/users.php');
$products = (include './data/products.php');

$clients[0]->buy($products[0]);
$cart1 = $clients[0]->getCart();
echo "Client " . $clients[0]->getId() . " a acheté " . $cart1[0]->getName() . " pour " . $clients[0]->getBillAmount() . "€</br>";

$clients[1]->buy($products[1]);
$clients[1]->buy($products[3]);
$cart2 = $clients[1]->getCart();
echo "Client " . $clients[1]->getId() . " a acheté " . $cart2[0]->getName() . " et " . $cart2[1]->getName() . " pour " . $clients[1]->getBillAmount() . "€</br>";
?>

</div>

<?php include './includes/footer.php';?>