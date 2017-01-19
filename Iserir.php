<?php
header("Content-Type: text/html; charset=ISO-8859-1",true);
$Dia=$_POST["Dia"];
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
$Analista=$_POST["Analista"];
$a=iconv('UTF-8','ASCII//TRANSLIT',$OB);
$a=preg_replace('/[~\'`^]/',null,$OB);
if($_POST["Dia"]=="" || $_POST["Hora"]=="" || $_POST["GS"]=="" || $_POST["VT"]=="" || $_POST["Requi"]==""
|| $_POST["Nome"]=="" || $_POST["SU"]=="" || $_POST["Motivo"]=="" || $_POST["SQE"]=="" || $_POST["SQ"]=="" ||
$_POST["Solu"]=="" || $_POST["Respon"]=="" || $_POST["Causa"]=="" || $_POST["OB"]=="" || $_POST["Analista"]=="")
{
echo "Por Favor preencha todos os campos<br><a href='teste.html'> Voltar ao menu </a>";
}
else{
error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
$con=mysql_connect("mysql.hostinger.com.br","u117397259_ellev","123@Gerar");
if(!$con){
echo("Impossivel conectar".mysql_error());
}else{
echo("Conectado <br>");
mysql_select_db("u117397259_supor",$con);
$sql="Insert into SuporteE(Dia,hora,GS,CV,Requisicao,NC,NS,Motivo,Servidor,Servidor_QF,Solucao,Responsavel,Causa,Obs,Nome)                   values('$Dia','$Hora','$GS','$VT','$Requi','$Nome','$SU','$Motivo','$SQE','$SQ','$Solu','$Respon','$Causa','$a','$Analista')";
				   if (mysql_query($sql,$con))  {
	       echo mysql_affected_rows() . " registro adicionado com sucesso<br><a href='http://suportes.16mb.com/teste.html'> Voltar ao menu </a>";
	     } else {
	       echo('Erro no cadastro: ' . mysql_error());
	     }
	     mysql_close($con);
		 }
		 }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Inseridos com Sucesso</title>
</head>
<body>
</body>
</html>