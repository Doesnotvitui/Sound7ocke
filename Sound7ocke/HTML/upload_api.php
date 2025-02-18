<?php
// Dados de conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = "Vz-qEact9r";
$dbname = "sound7ocke";

// Criar a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Verificar se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome_artista = $_POST['nome_artista'];
    $estilo = $_POST['estilo'];
    $nome_musica = $_POST['nome_musica'];
    $arquivo = $_FILES['arquivo'];  // Obter o arquivo enviado

    // Verificar se houve um erro no upload do arquivo
    if ($arquivo['error'] == UPLOAD_ERR_OK) {
        // Definir o caminho da pasta de destino
        $pastaDestino = 'MP3/';
        $caminhoArquivo = $pastaDestino . basename($arquivo['name']);

        // Mover o arquivo para a pasta de destino
        if (move_uploaded_file($arquivo['tmp_name'], $caminhoArquivo)) {
            // Verificar se o artista já existe na tabela "Artistas"
            $sql_artista_check = "SELECT pk_id_artista FROM Artistas WHERE nome = '$nome_artista'";
            $result_artista = $conn->query($sql_artista_check);

            if ($result_artista->num_rows > 0) {
                $row_artista = $result_artista->fetch_assoc();
                $id_artista = $row_artista['pk_id_artista'];
            } else {
                // Inserir o artista na tabela "Artistas"
                $sql_artista = "INSERT INTO Artistas (nome, quantidade_musicas) VALUES ('$nome_artista', 1)";
                if ($conn->query($sql_artista) === TRUE) {
                    $id_artista = $conn->insert_id;
                } else {
                    die("Erro ao adicionar artista: " . $conn->error);
                }
            }

            // Verificar se o estilo já existe na tabela "Estilo"
            $sql_estilo_check = "SELECT pk_id_estilo FROM Estilo WHERE estilo = '$estilo'";
            $result_estilo = $conn->query($sql_estilo_check);

            if ($result_estilo->num_rows > 0) {
                $row_estilo = $result_estilo->fetch_assoc();
                $id_estilo = $row_estilo['pk_id_estilo'];
            } else {
                $sql_estilo = "INSERT INTO Estilo (estilo) VALUES ('$estilo')";
                if ($conn->query($sql_estilo) === TRUE) {
                    $id_estilo = $conn->insert_id;
                } else {
                    die("Erro ao adicionar estilo: " . $conn->error);
                }
            }

            // Verificar se a música já existe para o mesmo artista
            $sql_musica_check = "SELECT pk_id_musica FROM Musicas WHERE nome_musica = '$nome_musica' AND fk_id_artista = '$id_artista'";
            $result_musica = $conn->query($sql_musica_check);

            if ($result_musica->num_rows > 0) {
                echo 'Essa música já está cadastrada para o artista informado.';
            } else {
                // Inserir os dados na tabela "Musicas" com o caminho do arquivo
                $sql_musica = "INSERT INTO Musicas (nome_musica, genero, mp3, fk_id_artista, fk_id_estilo) 
                               VALUES ('$nome_musica', '$estilo', '$caminhoArquivo', '$id_artista', '$id_estilo')";

                if ($conn->query($sql_musica) === TRUE) {
                    echo 'Música cadastrada com sucesso!!';
                } else {
                    echo 'Erro ao adicionar música: ' . $conn->error;
                }
            }
        } else {
            echo "Erro ao mover o arquivo para a pasta de destino.";
        }
    } else {
        echo "Erro no upload do arquivo.";
    }
}

$conn->close();
?>
