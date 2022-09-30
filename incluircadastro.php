<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="back.css">
    
  
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>


 




<?php
include('connect.php');
@$email=$_POST['email'];
@$senha=$_POST['senha'];
@$endereco=$_POST['endereco'];
@$cidade=$_POST['cidade'];
@$curso=$_POST['curso'];
@$pagamento=$_POST['pagamento'];

echo "$curso";







$adc ="INSERT INTO cadastro(email,senha,endereco,cidade,curso,pagamento) VALUES('".$email."','".$senha."','".$endereco."','".$cidade."','".$curso."','".$pagamento."')";
$ins= mysqli_query($conectdb,$adc);
if($ins){
  header('location:agradecimento .html');
echo "Voce foi cadastrado com sucesso" ; 

}
else{
  echo "ERRO";
}
?>

    
</body>
</html>