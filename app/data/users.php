<?php
require __DIR__ . '/../models/User.php';
require __DIR__ . '/../models/Client.php';

$client1 = new Client('client@mail.com');
$client2 = new Client('machin@mail.com');
$client3 = new Client('mon@mail.com');

return [$client1, $client2, $client3];
?>