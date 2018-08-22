<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Table</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <div class="container">
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
                    $table = (include '../data/products.php');
                    foreach($table as $row){
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
    </div>
</body>
</html>