<?php
global $conexao;

error_reporting(0);

$pesquisar = $_GET['q'];
$sql = "SELECT * FROM agendamento WHERE nome LIKE '%$pesquisar%'";

$result = $conexao->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
            echo "<td>".$row['nome']."</td>";
            echo "<td>".$row['email']."</td>";
            echo "<td>".$row['telefone']."</td>";
            echo "<td>".$row['cpf']."</td>";
            echo "<td>".$row['dataagend']."</td>";
            echo "<td>".$row['especializacao']."</td>";
            echo "<td>".$row['medico']."</td>";
        echo "</tr>";
    }
}
?>