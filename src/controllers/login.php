<?php

loadModel('Login');

if(count($_POST) > 0) {
    $login = new Login($_POST);

    try {
        $user = $login->checkLogin();
        echo "Tudo certo";
    } catch(Exception $e) {
        echo "Falha no login";
    }
}


loadView('login', $_POST);