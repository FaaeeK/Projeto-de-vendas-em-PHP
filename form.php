<?php
include('connect.php');
@$email=$_POST['email'];
@$senha=$_POST['senha'];
@$endereco=$_POST['endereco'];
@$cidade=$_POST['cidade'];
@$curso=$_POST['curso'];
@$boleto=$_POST['boleto'];
@$pix=$_POST['pix'];







$adc ="INSERT INTO cadastro(email,senha,endereco,cidade,curso,boleto,pix) VALUES('".$email."','".$senha."','".$endereco."','".$cidade."','".$curso."','".$boleto."','".$pix."')";
$ins= mysqli_query($conectdb,$adc);
if($ins){
echo "Produto adicionado"; 
}
else{
  echo "ERRO";
}
?>