
<?php include("../model/connect.php");

if(!isset($_SESSION)){
    session_start();
 }

 if (isset($_SESSION['nomeUsuario'], $_SESSION['RG'], $_SESSION['CPF'], $_SESSION['genero'], 
            $_SESSION["CEP"], $_SESSION["rua"], $_SESSION["bairro"], $_SESSION["cidade"], 
            $_SESSION["numero"], $_SESSION["tipoRes"], $_SESSION["tempoRes"], 
            $_SESSION["valorRes"], $_SESSION["referencia"], $_SESSION['deficiencia'], 
            $_SESSION['estadoCivil'], $_SESSION['especifique'], $_SESSION['telefone'], $_SESSION['Recado'],$_SESSION['CAD'], $_SESSION['email'],$_SESSION['bene'], $_SESSION['senha'], $_SESSION['dataNasc'])) {

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
        $_SESSION['especifique'],
        $_SESSION['telefone'],
        $_SESSION['Recado'],
        $_SESSION['CAD'],
        $_SESSION['email'],
        $_SESSION['bene'],
        $_SESSION['senha'],
        $_SESSION['dataNasc']        
    ];

    // Faz um echo para cada valor no array
    foreach ($dados as $dado) {
        echo "'" . htmlspecialchars($dado, ENT_QUOTES) . "', ";
    }
} else {
    echo "Algumas variáveis de sessão não estão definidas.";
}

mysqli_query($connect, "INSERT INTO usuario (email,senha,nome,RG,CPF,telefone_contato,sexo,CEP,rua,bairro,cidade,numero,tipo_de_residencia,tempo_de_residencia,valor_de_residencia,CAD,referencia, deficiencia,estado_civil, especifique, data_nascimento, telefone_recado, beneficios) VALUES ('". $_SESSION["email"]."','". $_SESSION["senha"]  ."','". $_SESSION["nomeUsuario"] ."','". $_SESSION["RG"] ."','". $_SESSION["CPF"] ."','". $_SESSION["telefone"] ."','".$_SESSION["genero"]. "','". $_SESSION["CEP"]."','". $_SESSION["rua"]. "','". $_SESSION["bairro"]. "','". $_SESSION["cidade"]. "','". $_SESSION["numero"]. "','". $_SESSION["tipoRes"]. "','". $_SESSION["tempoRes"]. "','". $_SESSION["valorRes"]. "','". $_SESSION["CAD"] ."','". $_SESSION["referencia"] ."','". $_SESSION["deficiencia"] ."','". $_SESSION["estadoCivil"] ."','". $_SESSION['especifique']. "','". $_SESSION["dataNasc"] . "','" . $_SESSION["Recado"] . "','". $_SESSION["bene"]."')");

header("Location: ../view/login.php");

?>



