<?php
include_once("../model/conexao.php");
include_once("../model/usuariomodel.php");

extract($_REQUEST,EXTR_OVERWRITE);

if(inserirUsuario($conn,$nomeusu,$emailusu,$foneusu,$cpfusu,$tipousu,$cepusu,$numusu,$compleusu)){
echo("Usuário cadastrado com sucesso!");
}else{
echo("Usuário não cadastrado. Revise seus dados e tente novamente.");
}


?>