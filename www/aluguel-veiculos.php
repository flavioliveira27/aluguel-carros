<?php 
include 'assets/header.php'; 
include 'database/banco.php';


$query = "SELECT * FROM carros";
$result = mysqli_query($conexao, $query);

if (mysqli_num_rows($result) > 0) {
    echo '<h2>Carros Disponíveis para Aluguel</h2>';
    echo '<ul>';
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<li>' . $row['marca'] . ' ' . $row['modelo'] . ' - Ano ' . $row['ano'] . ' | Disponíveis: ' . $row['disponivel'] . '</li>';
    }
    echo '</ul>';
} else {
    echo '<p>Nenhum carro disponível no momento.</p>';
}

include 'assets/footer.php'; 
?>
