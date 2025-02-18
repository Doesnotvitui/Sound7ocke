<?php
// /api/func1/index.php

require_once '../db.php'; // Inclua o arquivo de conexão com o banco de dados

$conn = getDbConnection(); // Cria a conexão com o banco de dados

// Verifica qual endpoint está sendo chamado
if (isset($_GET['type']) && $_GET['type'] === 'artistas') {
    // Consulta para buscar artistas
    $sql = "SELECT * FROM Artistas";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->get_result();

    $rows = [];
    while ($row = $result->fetch_assoc()) {
        $rows[] = $row; // Adiciona cada linha retornada ao array
    }

    // Define o código de resposta HTTP e o tipo de conteúdo
    http_response_code(200);
    header('Content-Type: application/json');

    // Retorna os dados em formato JSON
    echo json_encode($rows);
} else {
    // Consulta para buscar músicas (padrão)
    $sql = "SELECT * FROM Musicas";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->get_result();

    $rows = [];
    while ($row = $result->fetch_assoc()) {
        $rows[] = $row; // Adiciona cada linha retornada ao array
    }

    // Define o código de resposta HTTP e o tipo de conteúdo
    http_response_code(200);
    header('Content-Type: application/json');

    // Retorna os dados em formato JSON
    echo json_encode($rows);
}

$conn->close(); // Fecha a conexão com o banco de dados
?>
