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
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<link rel="stylesheet" type="text/css" href="estilo.css" />
<title>Lista de Chamados</title>
</head>
<body>
<?php echo"<h3><div align='right'>Bem vindo $logado</h3></div>";?>
<a href="index.php?act=logout"><div align="right"><input type="button" value="Encerrar Sessão"/></div></a>
<img src="imagens/imagem.png" alt="imagem" width="246" height="217"><br/>
<?php
$conexao=mysql_connect("mysql.hostinger.com.br","u117397259_ellev","123@Gerar");
if (!$conexao) {
	     echo('Imposs�vel conectar: ' . mysql_error());
		   } else {
	     mysql_select_db("u117397259_supor",$conexao);    
                     $resultado = mysql_query("SELECT * FROM SuporteE");
														  $registros = mysql_num_rows($resultado);
														  echo"<h3><div align='right'>Quantidade de Chamados:$registros</h3></div>";
                     if($registros==0){
                      echo "Não há registros cadastrados";
                     } else { echo "<table border='3'><tr><td bgcolor='#000000'><b>Data</b></td><td bgcolor='#000000'><b>Hora</b></td>
<td bgcolor='#000000'><b>Gol/Smiles</b></td><td bgcolor='#000000'><b>Voz/Chat</b></td><td bgcolor='#000000'><b>Requisição</b></td><td bgcolor='#000000'><b>Nome</b></td><td bgcolor='#000000'><b>Supervisor</b></td><td bgcolor='#000000'><b>Motivo</b></td><td bgcolor='#000000'><b>Servidor que estava logado</b></td><td bgcolor='#000000'><b>Servidor que ficou logado</b></td><td bgcolor='#000000'><b>Solucionado</b></td><td bgcolor='#000000'><b>Responsavel</b></td><td bgcolor='#000000'><b>Causa</b></td><td width='160' bgcolor='#000000'><b>Obs</b></td><td bgcolor='#000000'><b>Analista</b></td>";
   while($linha = mysql_fetch_array($resultado))
  	     {
  		echo "<tr>";
  		echo "<td>" . $linha['Dia'] . "</td>";
  		echo "<td>" . $linha['hora'] . "</td>";
  		echo "<td>" . $linha['GS'] . "</td>";
		echo "<td>" . $linha['CV'] . "</td>";
		echo "<td>" . $linha['Requisicao'] . "</td>";
  		echo "<td>" . $linha['NC'] . "</td>";
  		echo "<td>" . $linha['NS'] . "</td>";
		echo "<td>" . $linha['Motivo'] . "</td>";
		echo "<td>" . $linha['Servidor'] . "</td>";
  		echo "<td>" . $linha['Servidor_QF'] . "</td>";
  		echo "<td>" . $linha['Solucao'] . "</td>";
		echo "<td>" . $linha['Responsavel'] . "</td>";
		echo "<td>" . $linha['Causa'] . "</td>";
  		echo "<td>" . $linha['Obs'] . "</td>";
  		echo "<td>" . $linha['Nome'] . "</td>";
  		echo "</tr>";
 	      }  
      echo "</table>";
                     }
	      mysql_close($conexao);
                  }
				  
?>
	<br />
	<br />
	<a href="Escolha.php"> Voltar ao menu </a>
</body>
</html>
