<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<?php
session_start();
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
{
	unset($_SESSION['login']);
	unset($_SESSION['senha']);
	header('location:index.php');
	}
date_default_timezone_set('America/Sao_Paulo');
$date = date('d/m/Y');
$logado = $_SESSION['login'];
$Dia=$date;
$Hora=$_POST["Hora"];
$GS=$_POST["GS"];
$VT=$_POST["VT"];
$Requi=$_POST["Requi"];
$Nome=$_POST["Nome"];
$SU=$_POST["SU"];
$Motivo=$_POST["Motivo"];
$SQE=$_POST["SQE"];
$SQ=$_POST["SQ"];
$Solu=$_POST["Solu"];
$Respon=$_POST["Respon"];
$Causa=$_POST["Causa"];
$OB=$_POST["OB"];
$Analista=$logado;
//if($_POST["Hora"]=="" || $_POST["GS"]=="" || $_POST["VT"]=="" || $_POST["Requi"]==""
//|| $_POST["Nome"]=="" || $_POST["SU"]=="" || $_POST["Motivo"]=="" || $_POST["SQE"]=="" || $_POST["SQ"]=="" ||
//$_POST["Solu"]=="" || $_POST["Respon"]=="" || $_POST["Causa"]=="" || $_POST["OB"]=="");
error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
$con=mysql_connect("mysql.hostinger.com.br","u117397259_ellev","123@Gerar");
if(!$con){
echo("Impossivel conectar".mysql_error());
}else{
echo("Parabens!!!! <br><br>");
mysql_select_db("u117397259_supor",$con);
$sql="Insert into SuporteE(Dia,hora,GS,CV,Requisicao,NC,NS,Motivo,Servidor,Servidor_QF,Solucao,Responsavel,Causa,Obs,Nome)                   values('$Dia','$Hora','$GS','$VT','$Requi','$Nome','$SU','$Motivo','$SQE','$SQ','$Solu','$Respon','$Causa','$OB','$Analista')";
				   if (mysql_query($sql,$con))  {
	       echo " Seu Chamado foi adicionado com sucesso<br><br><a href='Clientes.php'><input type='image' name='voltar' src='imagens/voltar.png'/> </a>";
	     } else {
	       echo('Erro no cadastro: ' . mysql_error());
	     }
	     mysql_close($con); 
		 }
?>
</body>
</html>