<?php
loadModel('login');
$exception = null;

if (count($_POST) > 0) {
    $login = new Login($_POST);
    try {
        $user = $login ->checkLogin();
        echo "Usuário {$user->name} Logado";
        $login->checkLogin();
    } catch (AppException $e) {
       $exception = $e;
    }
}

loadView('login', $_POST + ['exception' => $exception]);
