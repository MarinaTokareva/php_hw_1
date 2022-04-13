<?php
    
    session_start();
    // $_SESSION['test'] = 'lalalalalalal';
    // var_dump($_SESSION);

    $admin = [
        'login' => 'artemius',
        'password' => '1111199999',
    ];

    if(isset($_POST['user_auth'])){
        //авторизация
        $user = [];
        $user['login'] = ($_POST['user_login']);
        $user['password'] = ($_POST['user_password']);
        var_dump($user);
        if(($user['login'] == $admin['login']) && ($user['password'] == $admin['password'])){
            $_SESSION['user'] = $user; 
        }
    }
    if($_SESSION['user']){ 
        //авторизовались
        echo "Hello, " . $_SESSION['user']['login'];
    }else{
        //форма авторизации
        ?>
            <form action="#" method="post">
                <input type="text" name="user_login" required>
                <input type="password" name="user_password" required>
                <input type="submit" value="Auth" name="user_auth">
            </form>
        <?php
    }
    var_dump($_SESSION);
    var_dump($_POST);

?>













