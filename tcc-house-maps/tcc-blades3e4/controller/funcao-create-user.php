<?php 
    include("../model/connect.php");
    $sql1 = mysqli_query($connect, "INSERT INTO usuario(Nome, data_nascimento, RG, CPF, estado_civil, deficiencia, especifique, sexo) VALUES ('".$_POST["nome"]."','".$_POST["data"]."','". $_POST["RG"]. "','" . $_POST['CPF'] . "','" . $_POST['Estado_civil'] . "','" . $_POST['deficiencia'] . "','" . $_POST['espec'] . "','" . $_POST['sex'] . "')" );
    header("location:../view/cadastro2.php");

    $sql2 = mysqli_query($connect, "INSERT INTO usuario(cidade, rua, bairro, numero, CEP, ponto_referencia, tempo_de_residencia, valor_de_residencia, tipo_de_residencia)VALUES('".$_POST["CID"]."','".$_POST["RUA"]."','".$_POST["BAI"]."','".$_POST["NUM"]."','".$_POST["CEP"]."','".$_POST["REF"]."','".$_POST["TEM"]."','".$_POST["VLR"]."','" .$_POST["TPR"]."')");
    header("location:../view/cadastro3.php");



?>  