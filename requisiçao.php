<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<title>Requisição</title>
</head>

<body>
<?php
$numero=$_POST["numero"];
$conexao=mysql_connect("mysql.hostinger.com.br","u117397259_ellev","123@Gerar");
if (!$conexao) {
	     echo('Impossível conectar: ' . mysql_error());
		   } else {
	     mysql_select_db("u117397259_supor",$conexao);    
                     $resultado = mysql_query("SELECT * FROM SuporteE where 
                                                         requisicao = $numero");
														  $registros = mysql_num_rows($resultado);
                     if($registros==0){
                      echo "Registro não cadastrado<br><a href='teste.html'> Voltar ao menu </a>";
                     } else {
					 echo "<h1>Chamado N°$numero</h1>";
					 while($linha = mysql_fetch_array($resultado))  {
                     echo "<table border='3' width='30%'>
<tr><td>Data</td><td>" . $linha['Dia'] . "</td></tr><tr><td>Hora</td><td>"  . $linha['hora'] . "</td></tr><tr><td>Gol/Smiles</td><td>"  . $linha['GS'] . "</td></tr><tr><td>Voz/Chat</td><td>"  . $linha['CV'] . "</td></tr><tr><td>Requisicao</td><td>" . $linha['Requisicao'] ."</td></tr><tr><td>Nome</td><td>"  . $linha['NC'] . "</td></tr><tr><td>Supervisor</td><td>"  . $linha['NS'] . "</td></tr><tr><td>Motivo</td><td>"  . $linha['Motivo'] ."</td></tr><tr><td>Servidor que esta</td><td>"  . $linha['Servidor'] . "</td></tr><tr><td>Servidor que ficou</td><td>"  . $linha['Servidor_QF'] ."</td></tr><tr><td>Solucionado</td><td>" . $linha['Solucao'] ."</td></tr><tr><td>Responsavel</td><td>" . $linha['Responsavel'] ."</td></tr><tr><td>Causa</td><td>" . $linha['Causa'] ."</td></tr><tr><td>Obs</td><td >" . $linha['Obs'] ."</td></tr><tr><td>Analista</td><td>" . $linha['Nome'] ."</td></tr>";
 	      }  
	      echo "</table><br>";
                     }

      mysql_close($conexao);
                  }
?>
<a href='Chamados.php'> Voltar ao menu </a>
</body>
</html>
