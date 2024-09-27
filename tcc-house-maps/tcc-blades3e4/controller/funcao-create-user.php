
<?php include("../model/connect.php");

if(!isset($_SESSION)){
    session_start();
 }

 if (isset($_SESSION['nomeUsuario'], $_SESSION['RG'], $_SESSION['CPF'], $_SESSION['genero'], 
            $_SESSION["CEP"], $_SESSION["rua"], $_SESSION["bairro"], $_SESSION["cidade"], 
            $_SESSION["numero"], $_SESSION["tipoRes"], $_SESSION["tempoRes"], 
            $_SESSION["valorRes"], $_SESSION["referencia"], $_SESSION['deficiencia'], 
            $_SESSION['estadoCivil'], $_SESSION['especifique'])) {

    // Cria um array com os dados que você quer exibir
    $dados = [
        $_SESSION['nomeUsuario'],
        $_SESSION['RG'],
        $_SESSION['CPF'],
        $_SESSION['genero'],
        $_SESSION["CEP"],
        $_SESSION["rua"],
        $_SESSION["bairro"],
        $_SESSION["cidade"],
        $_SESSION["numero"],
        $_SESSION["tipoRes"],
        $_SESSION["tempoRes"],
        $_SESSION["valorRes"],
        $_SESSION["referencia"],
        $_SESSION['deficiencia'],
        $_SESSION['estadoCivil'],
        $_SESSION['especifique']
    ];

    // Faz um echo para cada valor no array
    foreach ($dados as $dado) {
        echo "'" . htmlspecialchars($dado, ENT_QUOTES) . "', ";
    }
} else {
    echo "Algumas variáveis de sessão não estão definidas.";
}

mysqli_fetch_array(mysqli_query($connect, "INSERT INTO usuario (nome,RG,CPF,sexo,CEP,rua,bairro,cidade,numero,tipo_de_residencia,tempo_de_residencia,valor_de_residencia,referencia, deficiencia,estado_civil, especifique, data_nascimento) VALUES ('". $_SESSION['nomeUsuario'] ."','". $_SESSION['RG'] ."','". $_SESSION['CPF'] ."','". $_SESSION['genero']. "','". $_SESSION["CEP"]."','". $_SESSION["rua"]. "','". $_SESSION["bairro"]. "','". $_SESSION["cidade"]. "','". $_SESSION["numero"]. "','". $_SESSION["tipoRes"]. "','". $_SESSION["tempoRes"]. "','". $_SESSION["valorRes"]. "','". $_SESSION["referencia"] ."','". $_SESSION['deficiencia'] ."','". $_SESSION['estadoCivil'] ."','". $_SESSION['especifique']. "','". $_SESSION["dataNasc"] ."')"))
?>



