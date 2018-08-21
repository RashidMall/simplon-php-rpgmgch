<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <table>
            <thead>
                <tr>
                    <th>id</th>
                    <th>email</th>
                    <th>created at</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $table = (include 'users.php');
                    foreach($table as $row){
                        echo "<tr>";
                        echo "<td>".$row->getId()."</td>";
                        echo "<td>".$row->getEmail()."</td>";
                        echo "<td>".$row->getCeatedAt()."</td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>