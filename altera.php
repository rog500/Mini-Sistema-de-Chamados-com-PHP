<?php
session_start();
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
{
	unset($_SESSION['login']);
	unset($_SESSION['senha']);
	header('location:index.php');
	}
$logado = $_SESSION['login'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="chamados.css" />
<title>Alteração</title>
    </head>
	<?php echo"<h3><div align='right'>Bem vindo $logado</h3></div>";?>
<a href="index.php?act=logout"><div align="right"><input type="button" value="Encerrar Sessão"/></div>
</a>
	<body>
    <?php
	  $cod =$_POST["numero"];
	  $con = mysql_connect("mysql.hostinger.com.br","u117397259_ellev","123@Gerar");
	  if (!$con) {
	     echo('Impossivel conectar: ' . mysql_error());
	  } else {
	     mysql_select_db("u117397259_supor", $con);	    
                     $resultado = mysql_query("SELECT * FROM SuporteE where 
                                                                 Requisicao= $cod");
                      $linha = mysql_fetch_array($resultado);
					  echo " <form method=post action=alterados.php>
					  <table border='3'>
<tr><td bgcolor='#000000'><a>Data</a></td><td><input type='text' name='Dia' readonly='readonly' value='$linha[Dia]' size='20' /></td></tr><tr><td bgcolor='#000000'><a>Hora</a></td><td><input type='text' name='Hora' value='$linha[hora]' size='20'/></td></tr><tr><td bgcolor='#000000'><a>Gol/Smiles</a></td><td><input type='text' name='GS' value='$linha[GS]' size='5'/></td></tr><tr><td bgcolor='#000000'><a>Voz/Chat</a></td><td><input type='text' name='VT' value='$linha[CV]' size='5'/></td></tr><tr><td bgcolor='#000000'><a>Requisição</a></td><td><input type='text' name='Requi' value='$linha[Requisicao]' size='20' /></td></tr><tr><td bgcolor='#000000'><a>Nome</a></td><td><input type='text' name='Nome' value='$linha[NC]' size='46' /></td></tr><tr><td bgcolor='#000000'><a>Supervisor</a></td><td><input type name='SU' value='$linha[NS]' size='46'></td></tr><tr><td bgcolor='#000000'><a>Motivo</a></td><td><input type='text' name='Motivo' value='$linha[Motivo]' size='46' /></td></tr><tr><td bgcolor='#000000'><a>Servidor inicial</a></td><td><input type='text' name='SQE' value='$linha[Servidor]' size='20' /></td></tr><tr><td bgcolor='#000000'><a>Servidor final</a></td><td><input type='text' name='SQ' value='$linha[Servidor_QF]' size='20' /></td></tr><tr><td bgcolor='#000000'><a>Solucionado</a></td><td><input type='text' name='Solu' value='$linha[Solucao]' size='10'/></td></tr><tr><td bgcolor='#000000'><a>Responsavel</a></td><td><input type='text' name='Respon' value='$linha[Responsavel]' size='10'/></td></tr><tr><td bgcolor='#000000'><a>Causa</a></td><td><input type='text' name='Causa' value='$linha[Causa]' size='20' /></td></tr><tr><td bgcolor='#000000'><a>Observação</a></td><td><textarea name='OB' rows='10' cols='50' maxlength='500'>". $linha['Obs'] ."</textarea></td></tr></table>
<br/>
<table>
<tr><td colspan='2'><input type='submit' value='Salvar' /></td></tr>
</table> 
</form>
        ";
   mysql_close($con);
   }           
	?>
	<br /><br />
	<a href="altera.html"><input type="image" name="voltar" src="imagens/voltar.png"/> </a>
    </body>
</html>