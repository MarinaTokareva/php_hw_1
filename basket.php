        <?php
            require_once 'header.php';
            //require_once 'header.php';
            session_start();
            if(isset($_POST['user_logout'])){
                unset($_SESSION['user']);
                session_destroy();
                require_once 'auth.php';
            }

        ?>
<div class="card">
    <div class="row">
        <div class="col-md-8 cart">
            <div class="title">
                <div class="row">
                    <div class="col">
                        <h4><b>Shopping Cart</b></h4>
                    </div>
                    <div class="col align-self-center text-right text-muted">3 items</div>
                </div>
            </div>
            <div class="row border-top border-bottom">
                <div class="row main align-items-center">
                    <div class="col-2"><img class="img-fluid" src="https://i.imgur.com/1GrakTl.jpg"></div>
                    <div class="col">
                        <div class="row text-muted">Shirt</div>
                        <div class="row"><?php echo $_SESSION["lot1"];?></div>
                    </div>
                    <div class="col"> <?php echo $_SESSION["qty1"] ?> </div>
                    <div class="col">&euro; <?php echo $_SESSION["price1"]?> <span class="close"></span></div>
                </div>
            </div>
            <div class="row">
                <div class="row main align-items-center">
                    <div class="col-2"><img class="img-fluid" src="https://i.imgur.com/ba3tvGm.jpg"></div>
                    <div class="col">
                        <div class="row text-muted">Shirt</div>
                        <div class="row"><?php echo $_SESSION["lot2"];?></div>
                    </div>
                    <div class="col"> <?php echo $_SESSION["qty2"];?></div>
                    <div class="col">&euro; <?php echo $_SESSION["price2"];?><span class="close"></span></div>
                </div>
            </div>
            <div class="row border-top border-bottom">
                <div class="row main align-items-center">
                    <div class="col-2"><img class="img-fluid" src="https://i.imgur.com/pHQ3xT3.jpg"></div>
                    <div class="col">
                        <div class="row text-muted">Shirt</div>
                        <div class="row"><?php echo $_SESSION["lot3"];?></div>
                    </div>
                    <div class="col"> <?php echo $_SESSION["qty3"];?></div>
                    <div class="col">&euro; <?php echo $_SESSION["price2"];?><span class="close"></span></div>
                </div>
            </div>
            <div class="back-to-shop"><a href="auth.php">Back to shop</a></div>
        </div>
        <div class="col-md-4 summary">
            <div>
                <h5><b>Summary</b></h5>
            </div>
            <hr>
            <div class="row">
                <div class="col" style="padding-left:0;">ITEMS <?php echo (($_SESSION["qty1"])+($_SESSION["qty2"])+($_SESSION["qty3"])) ?></div>
                <!-- <div class="col text-right">&euro;</div> -->
            </div>

            <div class="row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0;">
                <div class="col">TOTAL PRICE</div>
                <div class="col text-right">&euro; <?php echo ((($_SESSION["price1"])*($_SESSION["qty1"]))+(($_SESSION["price2"])*($_SESSION["qty2"]))+(($_SESSION["price3"])*($_SESSION["qty3"])))?></div>
            </div> 
        </div>
    </div>
</div>
        <?php
        require_once 'footer.php';
        ?>
