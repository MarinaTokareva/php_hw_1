
        <?php
            include 'header.php';
            session_start();
        ?>
    <body>
        <hr>
        <div class="card-group">
            <div class="card" style="width: 18rem;">
                <form class="card-body" action="#" method="post">
                    <img src="./images/3b734f7fb1034f57929299cad0ac1909.jpg" class="card-img-top">
                    <h5 class="card-title">Вишиванка женская <input type="hidden" name="lot" value="Вишиванка женская"></h5>
                    <span class="mr-1">33 <input type="hidden"  name="price" value="33"></span> <br><br>
                    <input type="number" class="count" name="qty" value="1">
                                        <br><br>
                    <input type="submit" class="btn btn-primary" value="Добавить в корзину" name="add_to_basket">
                </form>
            </div>
            <div class="card" style="width: 18rem;">
                <form class="card-body" action="#" method="post">
               
                    <img src="./images/images.jpeg" class="card-img-top">
                    <h5 class="card-title" >Вишиванка чоловіча<input type="hidden" name="lot" value="Вишиванка чоловіча"></h5>
                    <span class="mr-1" >44<input type="hidden"  name="price" value="44"></span> <br><br>
                    <input type="number" class="count" name="qty" value="1">
                                        <br><br>
                    <input type="submit" class="btn btn-primary" value="Добавить в корзину" name="add_to_basket">
               
                </form>
            </div>
            <div class="card" style="width: 18rem;">
                <form class="card-body" action="#" method="post">
                
                    <img src="./images/zhinocha-vishivanka-ruchnoi-roboti-frantsuzki-kviti-fioletovi3622-51850168353458.jpg" class="card-img-top" alt="...">
                    <h5 class="card-title">Модна вишиванка жіноча новинка<input type="hidden" name="lot" value="Модна вишиванка жіноча новинка"></h5>
                    <span class="mr-1" name="price">55<input type="hidden"  name="price" value="55"></span> <br><br>
                    <input type="number" class="count" name="qty" value="1">
                                        <br><br>
                    <input type="submit" class="btn btn-primary" value="Добавить в корзину" name="add_to_basket">
                </form>
            </div>
            <div class="card" style="width: 18rem;">
                <form class="card-body" action="#" method="post">

                    <img src="./images/b11773.jpg" class="card-img-top" alt="...">
                    <h5 class="card-title">Повсякденна вишиванка чоловіча<input type="hidden" name="lot" value="Повсякденна вишиванка чоловіча"></h5>
                    <span class="mr-1" name="price">77<input type="hidden"  name="price" value="77"></span> <br><br>
                    <input type="number" class="count" name="qty" value="1">
                                        <br><br>
                    <input type="submit" class="btn btn-primary" value="Добавить в корзину" name="add_to_basket">

                </form>
            </div>
        </div>
<?php

    // var_dump($_POST);
     //var_dump($_SESSION);
     //echo 'Привет '.$_SESSION['user']['login'].'!';
    //  $lot = "не определено";
    //  $price = "не определено";
    // if(isset($_POST["lot1"])){
    //     $lot = $_POST["lot1"];
    //     echo $lot;
    // }
    // if(isset($_POST["price1"])){
    //     $price = $_POST["price1"];
    // }
        $basket = [];
    //  $_POST['lots'] = $lots;
     $_SESSION['lots'] = $lots;
     $lots = [];
     $lots['lot'] = ($_POST['lot']);
     $lots['price'] = ($_POST['price']);
     $lots['qty'] = ($_POST['qty']);

   echo "В массиве " . count($lots) . " элементa/ов<br>";
        // foreach($basket as $lots)
    foreach($lots as $lot) echo "$lot<br>";


    //  echo '                       
    //  тут переменная lots ';
    //  var_dump($lots);
     echo '<br>                      
     тут переменная сессия ';
     var_dump($_SESSION);
     echo '  <br>                     
     тут переменная пост c товаром: ';
     var_dump($_POST);

?>
        <hr>
    </body>
<?php
include 'footer.php';
?>

