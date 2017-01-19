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
<title>Escolha Chamados</title>
</head>
<body>
<?php echo"<h3><div align='right'>Bem vindo $logado</h3></div>";?>
<a href="index.php?act=logout"><div align="right"><input type="button" value="Encerrar Sessão"/></div></a>
<img src="imagens/imagem.png" alt="imagem" width="246" height="217"><br/><hr/>
<a href="Chamados_m.php"><input type="button" value="Inserir Chamado"/></a>                 <a href="altera.html"><input type="button" value="Atualizar Chamado"/></a>     <a href="Busca.html"> <input type="button" value="Buscar Chamado"/></a>           <a href="Lista.php"><input type="button" value="Lista de Chamados"/></a><hr/>
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
 <footer><address>
 <center>Todos os direitos reservados. Projeto HTML em Progresso 2016</center>
</address></footer>
</body>
</html>
</body>
</html>