

<?php 
include "index.php";
// step 1 read html-create new variable-reading flavour from select box from html
$readFlavour = $_POST["flavour"];

//step2 crate new object class cupcake from index.php so we can fetch price
 //from class cupcake()on php page
$newObj== new cupCake(); 
echo $readFlavour;
$price=$newObj->getPrice($readFlavour);
echo $price;


?>


