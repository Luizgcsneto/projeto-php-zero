<?php 
include_once '../config/db.php';

$response = [];

// $erro = '';

// $erro .= empty($_POST['email']) ? 'informe o e-mail': '';
// $erro .= empty($_POST['password']) ? 'informe a senha': '';

$erro = [];

try {

    if (empty($_POST['email'])){
        throw new Exception('Informe o E-mail');
    }

    if (empty($_POST['password'])){
        throw new Exception('Informe a Senha');
    }

} catch (Exception $ex) {
    $response = [
        'status'=> false,
        'message' => $ex->getMessage(),
    ];
}


echo json_encode($response);





