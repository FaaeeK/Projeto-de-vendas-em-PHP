<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
<?php
include('connect.php');
@$php=$_POST['php'];
@$hacking_etico=$_POST['hacking_etico'];
@$java=$_POST['java'];
@$phyton=$_POST['phyton'];
@$html=$_POST['html'];
@$power_bi=$_POST['power_bi'];

echo "php<br>".$php."hacking_etico<br>".$hacking_etico."</br>java:".$java."phyton<br>".$phyton."html<br>".$html."power_bi<br>".$power_bi.;
$adc ="INSERT INTO vendas(php,hacking_etico,java,phyton,html,power_bi) VALUES('".$php."','".$hacking_etico."','".$java."','".$phyton."','".$html."','".$power_bi."')";
$ins= mysqli_query($conectdb,$adc);
if($ins){
    echo"Curso cadastrado com sucesso!
    </br><a href='#'Voltar</a>";
}
else {
    echo "ERRO </br><a href='#'>voltar</a>";
}
?>
    
</body>
</html>