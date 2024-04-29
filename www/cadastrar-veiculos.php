<link rel="stylesheet" type="text/css" href="assets/style.css">

<?php 
include 'assets/header.php'; 
include 'database/banco.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $ano = $_POST['ano'];
    $disponivel = $_POST['disponivel'];

    
    $query = "INSERT INTO carros (marca, modelo, ano, disponivel) VALUES ('$marca', '$modelo', '$ano', '$disponivel')";
    $result = mysqli_query($conexao, $query);

    if ($result) {
        echo '<p>Carro cadastrado com sucesso!</p>';
    } else {
        echo '<p>Ocorreu um erro ao cadastrar o carro.</p>';
        echo '<p>Erro MySQL: ' . mysqli_error($conexao) . '</p>';
    }
}
?>

<h2 class="title-cadastro" >Cadastrar Novo Carro</h2>
<form class="form-cadastro" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="marca">Marca:</label>
    <input type="text" name="marca" required><br><br>
    <label for="modelo">Modelo:</label>
    <input type="text" name="modelo" required><br><br>
    <label for="ano">Ano:</label>
    <input type="number" name="ano" required><br><br>
    <label for="disponivel">Disponíveis</label>
    <input type="number" name="disponivel" required><br><br>
    <input type="submit" value="Cadastrar">
</form>

<?php include 'assets/footer.php'; ?>
