<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="back.css">
    
  
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  
  
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  
</head>
<body>
       

<?php
include('connect.php');
$email=$_POST['email'];
$senha=$_POST['senha'];
$sql=mysqli_query($conectdb,"select * from login where email = '$email' and senha = '$senha'");
    
    if(mysqli_num_rows($sql) > 0){
      header('location:frontdosite.html');
      echo"Senha e email corretos";
      exit();
    }
      else{
        echo"Email ou senha invalidos";
        echo "<br> $email e $senha";
      }
    
?>
    

</body>
</html>