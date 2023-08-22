<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["modalidade"];
    $data = $_POST["data"];
    $hora = $_POST["hora"];

    // Salvar o novo agendamento no banco de dados (você pode substituir por um banco de dados real)

    // Redirecionar de volta para a página principal
    header("Location: index.html");
}
?>