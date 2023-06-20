<?php
require_once "C:\\xampp\htdocs\sistemaEscolarPHP\Classes\gateway\BolsaPesquisaGateway.php";
require_once "C:\\xampp\htdocs\sistemaEscolarPHP\Classes\BolsaPesquisa.php";

$username = "root";
$password = "";

try {
    $conn = new PDO('mysql:host=localhost; dbname=dbescolar', $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    BolsaPesquisa::setConnection($conn);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $areaPesquisa = $_POST['areaPesquisa'];
        $nomeBolsa = $_POST['nome'];
        $descricaoBolsa = $_POST['descricao'];
        $valorBolsa = $_POST['valorBolsa'];

        $bolsaPesquisa = new BolsaPesquisa();
        $bolsaPesquisa->areaPesquisa = $areaPesquisa;
        $bolsaPesquisa->nomeBolsa = $nomeBolsa;
        $bolsaPesquisa->descricaoBolsa = $descricaoBolsa;
        $bolsaPesquisa->valorBolsa = $valorBolsa;

        $bolsaPesquisa->save();
    }

    $bolsas = BolsaPesquisa::all();


    // Exibir as bolsas de pesquisa
    // foreach ($bolsas as $bolsa) {
    //     echo "<p>{$bolsa->areaPesquisa} - {$bolsa->nomeBolsa} - {$bolsa->descricaoBolsa} - {$bolsa->valorBolsa}</p>";
    // }
} catch (Exception $e) {
    echo $e->getMessage();
}
?>