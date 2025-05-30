<?php

$mysqli = new mysqli('localhost', 'root', '', 'dbconeccta');
if ($mysqli->connect_error) {
    http_response_code(500);
    echo "Erro na conexão com o banco.";
    exit;
}

$uid = $_POST['uid'];
$telefone = $_POST['telefone'];
$descricao = $_POST['descricao'];
$setor = $_POST['setor'];
$formacao = $_POST['formacao_academica'];
$exp = $_POST['experiencia_profissional'];
$cert = $_POST['certificados'];

$stmt = $mysqli->prepare("
    UPDATE usuarios SET 
        telefone = ?, descricao = ?, setor = ?, 
        formacao_academica = ?, experiencia_profissional = ?, certificados = ?
    WHERE firebase_uid = ?
");
$stmt->bind_param('sssssss', $telefone, $descricao, $setor, $formacao, $exp, $cert, $uid);

if ($stmt->execute()) {
    echo "Atualizado com sucesso.";
} else {
    http_response_code(400);
    echo "Erro ao atualizar.";
}
?>
