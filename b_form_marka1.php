<?php
require 'b_samochod.php';



$nazwa = $_POST['marka']; 
$rok = $_POST['rok']; 
$kraj = $_POST['kraj']; 

$samochod1 = new samochod();

$samochod1->zapisz_marka($nazwa,$rok,$kraj);



?>