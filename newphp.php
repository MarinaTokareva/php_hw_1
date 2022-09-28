
        <?php
            include 'header.php';
            session_start();
 
                
        
        ?>
    <body>
        <hr>
        <div class="card-group">
            <div class="card" style="width: 18rem;">
                <form class="card-body" id='formfithlot1' action="#" method="post">
                    <img src="./images/3b734f7fb1034f57929299cad0ac1909.jpg" class="card-img-top">
                    <h5 class="card-title">Вишиванка женская <input type="hidden" name="lot1" value="Вишиванка женская"></h5>
                    <span class="mr-1">33 <input type="hidden"  name="price1" value="33"></span> <br><br>
                    <input type="number" class="count" name="qty1" value="1">
                                        <br><br>
                    <input type="submit" class="btn btn-primary" value="Добавить в корзину" name="add_to_basket1">
                </form>
            </div>
            <div class="card" style="width: 18rem;">
                <form class="card-body" id='formfithlot2' action="#" method="post">
               
                    <img src="./images/images.jpeg" class="card-img-top">
                    <h5 class="card-title" >Вишиванка чоловіча<input type="hidden" name="lot2" value="Вишиванка чоловіча"></h5>
                    <span class="mr-1" >44<input type="hidden"  name="price2" value="44"></span> <br><br>
                    <input type="number" class="count" name="qty2" value="1">
                                        <br><br>
                    <input type="submit" class="btn btn-primary" value="Добавить в корзину" name="add_to_basket2">
               
                </form>
            </div>
            <div class="card" style="width: 18rem;">
                <form class="card-body" id='formfithlot3' action="#" method="post">
                
                    <img src="./images/zhinocha-vishivanka-ruchnoi-roboti-frantsuzki-kviti-fioletovi3622-51850168353458.jpg" class="card-img-top" alt="...">
                    <h5 class="card-title">Модна вишиванка жіноча новинка<input type="hidden" name="lot3" value="Модна вишиванка жіноча новинка"></h5>
                    <span class="mr-1">55<input type="hidden"  name="price3" value="55"></span> <br><br>
                    <input type="number" class="count" name="qty3" value="1">
                                        <br><br>
                    <input type="submit" class="btn btn-primary" value="Добавить в корзину" name="add_to_basket3">
                </form>
            </div>
            <div class="card" style="width: 18rem;">
                <form class="card-body" id='formfithlot4' action="#" method="post">

                    <img src="./images/b11773.jpg" class="card-img-top" alt="...">
                    <h5 class="card-title">Повсякденна вишиванка чоловіча<input type="hidden" name="lot4" value="Повсякденна вишиванка чоловіча"></h5>
                    <span class="mr-1" name="price">77<input type="hidden"  name="price4" value="77"></span> <br><br>
                    <input type="number" class="count" name="qty4" value="1">
                                        <br><br>
                    <input type="submit" class="btn btn-primary" value="Добавить в корзину" name="add_to_basket4">

                </form>
            </div>
        </div>
<?php

            
    //$_SESSION['basket'] = $_POST;
    $_SESSION['lots'] = $lots;
    $lots = [];
    $basket = ($_SESSION['lots']);
    // while($_POST['lots']){
    //     $basket[] = $_POST['lots'];
    // }
    // var_dump($basket);

    //$_SESSION['lot1'] = $lot1;
    $lot1 = [];
    $_SESSION['lot1'] = $_POST['lot1'];
    $_SESSION['qty1'] = $_POST['qty1'];
    $_SESSION['price1'] = $_POST['price1'];

    //$_SESSION['lot2'] = $lot2;
    $lot2 = [];
    $_SESSION['lot2'] = $_POST['lot2'];
    $_SESSION['qty2'] = $_POST['qty2'];
    $_SESSION['price2'] = $_POST['price2'];
    //$_SESSION['lot3'] = $lot3;
    $lot3 = [];
    $_SESSION['lot3'] = $_POST['lot3'];
    $_SESSION['qty3'] = $_POST['qty3'];
    $_SESSION['price3'] = $_POST['price3'];
    //$_SESSION['lot4'] = $lot4;
    $lot4 = [];
    $_SESSION['lot4'] = $_POST['lot4'];
    $_SESSION['qty4'] = $_POST['qty4'];
    $_SESSION['price4'] = $_POST['price4'];
    
    var_dump($lot1);
    var_dump($lot2);
    var_dump($lot3);
    var_dump($lot4);
    var_dump($_POST['lot1']);

    echo "В массиве " . count($lots) . " элементa/ов<br>";
    foreach($lots as $lot) echo "$lot<br>";
    foreach($basket as $lots) var_dump ("$lots<br>");
        
        echo '<br>тут переменная сессия ';var_dump($_SESSION);
        echo '  <br>тут переменная пост c товаром: ';var_dump($_POST);

   

?>
        <hr>
    </body>
<?php
include 'footer.php';
?>

