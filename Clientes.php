<?php
session_start();
$senha=$_SESSION['senha'];
$valida="123@Mudar";
if($valida==$senha)
{
header('location:Atualiza');
}
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
{
	unset($_SESSION['login']);
	unset($_SESSION['senha']);
	header('location:index');
	}
$logado = $_SESSION['login']; 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<link rel="stylesheet" type="text/css" href="imagem.css" />
<title>Clientes</title>
</head>
<body>
<?php echo"<h3><div align='right'>Bem vindo $logado</h3></div>"?>;
<a href="index.php?act=logout"><div align="right"><input type="button" value="Encerrar Sessão"/></div></a>
<img src="imagens/imagem.png" alt="imagem" width="246" height="217"><br/>
		<!--<p>Rigth</p>-->
		<table>
		  <tr>
                    <td>
					<div class="hoverzoom">
					<img src="imagens/imagem_1.jpg ">  
	                <center><div class="retina"><center/>
					<a href="Chamados"><center>Click aqui</center></a>
		            </div>
                    </div>
                    </td>
                    <td>
					<div class="hoverzoom">
                    <img src="imagens/imagem_2.jpg" alt="imagem_1" width="299" height="200">
					<center><div class="retina"><center/>
					<a href="Chamados_l"><center>Click aqui</center></a>
		            </div>
                    </div>
                    </td>
					</tr>
                    
</table>
</body>
</html>
