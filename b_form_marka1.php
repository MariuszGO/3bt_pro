<!DOCTYPE html>
<html lang="PL-pl">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dane samochodow</title>
</head>
<body>


<header>
    <div class="gora">
<p>ddd</p>

    </div>
</header>

<div class="zawartosc">
    <div class="lewa">
        
    <div class="menu">
        <ul>
        <?php require "menu.php"?>    
    </ul>
        </div> <!--end menu --></a>



    </div>
    <div class="srodek"><p>
    
    <?php
require 'b_samochod.php';


// Pobieranie danych z formularza 
$nazwa = $_POST['marka']; 
$rok = $_POST['rok']; 
$kraj = $_POST['kraj']; 

$samochod1 = new samochod();

$samochod1->zapisz_marka($nazwa,$rok,$kraj);



?>


    </p> </div>
    
    <div class="prawa"><p>ddd</p></div>
    

</div>

    
</body>
</html>



