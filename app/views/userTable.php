<table class="table">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">email</th>
            <th scope="col">created at</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $clients = (require_once __DIR__ . '/../data/users.php');
            foreach($clients as $row){
                echo "<tr>";
                echo "<td>".$row->getId()."</td>";
                echo "<td>".$row->getEmail()."</td>";
                echo "<td>".$row->getCeatedAt()."</td>";
                echo "</tr>";
            }
        ?>
    </tbody>
</table>