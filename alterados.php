<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Alteracão</title>
</head>
<body>
<?php
$cod=$_POST["Requi"];
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
error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
$con=mysql_connect("mysql.hostinger.com.br","u117397259_ellev","123@Gerar");
	    if (!$con) {
	     echo('Imposs�vel conectar: ' . mysql_error());
	  } else {
	     mysql_select_db("u117397259_supor",$con);
	     $sql = "UPDATE SuporteE SET hora='$Hora',GS='$GS',CV='$VT',Requisicao='$Requi',NC='$Nome',NS='$SU',Motivo='$Motivo',Servidor='$SQE',Servidor_QF='$SQ',Solucao='$Solu',Responsavel='$Respon',Causa='$Causa',Obs='$OB'
                                     where Requisicao='$cod'";
								  if (!mysql_query($sql,$con))  {
	       echo('Erro na alteração: ' . mysql_error());
	     } else {
	       echo "Parabéns seu chamdo foi alterado  com sucesso.Quantidade de registros alterados=".mysql_affected_rows() ;
	     }
	     mysql_close($con);
	  }
	?>
<br />
	<br />
	<a href="altera.html"><input type="image" name="voltar" src="imagens/voltar.png"/> </a>
</body>
</html>