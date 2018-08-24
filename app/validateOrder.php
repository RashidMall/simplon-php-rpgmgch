<?php 
include "./includes/header.php";
include "./includes/navigation.php";
?>

<?php 
if(isset($_POST['submit']) && isset($_POST['client'])){
    $clients = include './data/users.php';
    $products = include './data/products.php';

    $clientId = $_POST['client'];
    $client = $clients[$clientId];

    $productsId = array();
    $count = 1;
    while(isset($_POST['product' . $count])){
        if(isset($_POST['product' . $count])){
            $productId = $_POST['product' . $count];
            array_push($productsId, $productId);
        }
        $count++;
    }
?>
    <?php echo "<h1>Récapitulatif d'achat: Client ". $client->getEmail() ."</h1>"; ?>
    <table class="table">
    <thead>
        <tr>
            <th scope="col">Product</th>
            <th scope="col">Price</th>
        </tr>
    </thead>
    <tbody>
        <?php
            for($i = 0; $i < sizeof($productsId); $i++){
                $id = $productsId[$i];
                $client->buy($products[$id]);

                echo "<tr>";
                echo "<td>".$products[$id]->getName()."</td>";
                echo "<td>".$products[$id]->getPrice()."€</td>";
                echo "</tr>";
            }
        ?>
    </tbody>
</table>
<?php echo "<h2>Total Price: ". $client->getBillAmount() ."€</h2>" ?>
    
<?php
}
?>