<?php 
include "./includes/header.php";
include "./includes/navigation.php";
?>

<div class="conttainer">
    <div class="form-group col-md-3 mb-3">
        <form action="./validateOrder.php" method="post">
            <label for="client">Client</label>
            <select name="client" class="custom-select" required>
                <?php 
                $clients = (include './data/users.php'); 
                foreach($clients as $client){
                    echo "<option value='{$client->getId()}'>{$client->getId()}</option>";
                }
                ?>
            </select>
            <?php 
            $products = (include './data/products.php');
            for($i = 1; $i<=3; $i++){
                echo "<label for='product{$i}'>Product {$i}</label>";
                echo "<select name='product{$i}' class='custom-select' required>";

                foreach($products as $product){
                    echo "<option value='{$product->getId()}'>{$product->getName()}</option>";
                }

                echo "</select>";
            }
            ?>
            <input name="submit" type="submit" value="Submit" class="btn btn-primary">
        </form>
    </div>
</div>

<?php include './includes/footer.php'; ?>