<?php
include 'conn.php';

$sql = "SELECT * FROM usuarios";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "Banco está funcionando!<br><br>";
    while($row = $result->fetch_assoc()) {
        echo "RM: " . $row["rm"] . " - Nome: " . $row["nome"] . "<br>";
    }
} else {
    echo "Banco está funcionando, mas não há registros.";
}

$conn->close();
?>
