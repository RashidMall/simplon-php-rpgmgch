<?php 
// Autoload classes
function uploadClass($class){
    require '../models/' . $class . '.php';
  }
  spl_autoload_register('uploadClass');

  $legume1 = new Vegetable('potato', 5, 'Simon Roger', '2018-10-10');
  $legume2 = new Vegetable('tomato', 3, 'Simon Darmandieu', '2017-09-01');
  $cloth1 = new Cloth('shirt', 15, 'Nike');
  $cloth2 = new Cloth('pants', 50, 'Adidas');
  $cloth3 = new Cloth('shoes', 1000, 'Apple');

  return [$legume1, $legume2, $cloth1, $cloth2, $cloth3];
?>