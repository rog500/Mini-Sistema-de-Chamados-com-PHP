<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<?php
$a=$_POST["a"];
$con=mysql_connect("mysql.hostinger.com.br","u117397259_ellev","123@Gerar");
if(!$con){
error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
echo("Impossivel conectar".mysql_error());
}else{
echo("Conectado <br>");
mysql_select_db("u117397259_supor",$con);
$sql="Insert into teste(valido) values('$a')";
				   if (mysql_query($sql,$con))  {
	       echo mysql_affected_rows() . " registro adicionado com sucesso<br><br><a href='te.html'> Voltar ao menu </a><br>";
		   echo "$a";
	     } else {
	       echo('Erro no cadastro: ' . mysql_error());
	     }
	     mysql_close($con);
		 }
?>
</body>
</html>
