<?php 
// Autoload classes
function uploadClass($class){
  require $class . '.php';
}
spl_autoload_register('uploadClass');

$client1 = new Client('client@mail.com');
$client2 = new Client('machin@mail.com');
$client3 = new Client('mon@mail.com');

return [$client1, $client2, $client3];
?>