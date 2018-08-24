<table class="table">
    <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">price</th>
            <th scope="col">Productor</th>
            <th scope="col">Brand</th>
            <th scope="col">Freshness</th>
            <th scope="col">Expires at</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $products = (require_once __DIR__ . '/../data/products.php');
            foreach($products as $row){
                echo "<tr>";
                echo "<td>".$row->getName()."</td>";
                echo "<td>".$row->getPrice()."€</td>";
                echo "<td>".(method_exists($row, 'getProductorName') ? $row->getProductorName():'x')."</td>";
                echo "<td>".(method_exists($row, 'getBrand') ? $row->getBrand() : 'x')."</td>";
                echo "<td>".(method_exists($row, 'isFresh') ? ($row->isFresh()?'Fresh':'Not Fresh') : 'x')."</td>";
                echo "<td>".(method_exists($row, 'getExpiresAt') ? $row->getExpiresAt() : 'x')."</td>";
                echo "</tr>";
            }
        ?>
    </tbody>
</table>