<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>авторизация</title>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
<?php
    
    session_start();
    // $_SESSION['test'] = 'lalalalalalal';
    // var_dump($_SESSION);

    $admin = [
        'login' => 'artemius',
        'password' => 'bc1ac01fad5ae286099320d5e1318e0d',
    ];

    if(isset($_POST['user_auth'])){
        //авторизация
        $user = [];
        $user['login'] = ($_POST['user_login']);
        $user['password'] = ($_POST['user_password']);
        $user['password'] = md5($user['password']);
        //var_dump($user);
        if(($user['login'] == $admin['login']) && ($user['password'] == $admin['password'])){
            $_SESSION['user'] = $user; 
        }
    }else if($_POST['user_logout']){
        unset($_SESSION['user']);
        session_destroy();
    }
    if($_SESSION['user']){ 
        //авторизовались
        require_once 'newphp.php';
        //echo "Hello, " . $_SESSION['user']['login'];

    }else{
        //форма авторизации
        ?>
            <form action="#" method="post">
                <div class="form-outline mb-4">
                    <input class="form-control" type="text" name="user_login" required>
                    <input class="form-control" type="password" name="user_password" required>
                    <input class="btn btn-primary" type="submit" value="Auth" name="user_auth">
                </div>    
            </form>
        <?php
    }
    // var_dump($_SESSION);
    // var_dump($_POST);

?>













