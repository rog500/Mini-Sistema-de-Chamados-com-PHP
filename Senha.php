<?php
session_start();
$logado=$_SESSION['login'];
$asenha=$_POST["asenha"];
$conexao=mysql_connect("mysql.hostinger.com.br","u117397259_ellev","123@Gerar");
 if (!$conexao) {
	     echo('Impossivel conectar: ' . mysql_error());
	  } else {
	     mysql_select_db("u117397259_supor", $conexao);	    
                      $sql = "UPDATE Login_Senha SET Senha='$asenha' 
					           where Nome='$logado'";
								  if (!mysql_query($sql,$conexao))  {
	       echo('Erro na alteração: ' . mysql_error());
	     } else {
	       echo mysql_affected_rows() . "Senha atualizada com sucesso!!!!!";
	     }
		   mysql_close($conexao);
	  }
header('location:index.php');
 ?>
