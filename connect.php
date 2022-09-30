

<?php
@$conectdb=new mysqli('localhost','root','','vendas');

if(!$conectdb){
    die("Não foi possível conectar:" .mysqli_error()."<br>");

}
?>

