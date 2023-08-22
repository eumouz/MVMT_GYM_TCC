<?php
// Simule um banco de dados de agendamentos (você pode substituir por um banco de dados real)
$agendamentos = array(
    array("2023-08-22", "09:00"),
    array("2023-08-23", "15:30"),
    array("2023-08-25", "14:00")
);

foreach ($agendamentos as $agendamento) {
    $modalidade = $agendamento[0];
    $data = $agendamento[1];
    $hora = $agendamento[2];

    echo "<tr>";
    echo "<td>$modalidade</td>";
    echo "<td>$data</td>";
    echo "<td>$hora</td>";
    echo "</tr>";
}
?>