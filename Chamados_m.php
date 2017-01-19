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
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br" xml:lang="pt-br">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<link rel="stylesheet" type="text/css" href="chamados.css" />
<title>Inserção de chamados</title>
</head>
<script language="javascript" type="text/javascript">
function validar0() {
var Hora = form0.Hora.value;
var Requi = form0.Requi.value;
var Nome = form0.Nome.value;
var Motivo = form0.Motivo.value;
var SQE = form0.SQE.value;
var Causa= form0.Causa.value;
var OB= form0.OB.value;
if (Hora == "") {
alert('identifique a Hora');
form0.Hora.focus();
return false;
}
if (Requi== "") {
alert('Identifique o número do chamado');
form0.Requi.focus();
return false;
}
if (Nome== "") {
alert('identifique o nome do(a)colaborador(a)');
form0.Nome.focus();
return false;
}
if (Motivo == "") {
alert('identifique o motivo do chamado');
form0.Motivo.focus();
return false;
}
if (SQE == "") {
alert('Identifique o servidor Inicial');
form0.SQE.focus();
return false;
}
if (Causa == "") {
alert('identifique a causa');
form0.Causa.focus();
return false;
}
if (OB == "") {
alert('insira a abservação do chamado');
form0.OB.focus();
return false;
}
}
</script>
<?php echo"<h3><div align='right'>Bem vindo $logado</h3></div>";?>
<a href="index.php?act=logout"><div align="right"><input type="button" value="Encerrar Sessão"/></div></a>
<img src="imagens/imagem.png" alt="imagem" width="246" height="217"><br/>
<form name="form0" action="Inseri_m.php" method="post"> 
<table border="3" >
<tr><td bgcolor="#000000"><a>Data</a></td><td><?php date_default_timezone_set('America/Sao_Paulo');$date = date('d/m/Y');echo "<b>$date</b>";?></td></tr><tr><td bgcolor="#000000"><a>Hora</a></td><td><input type="text"name="Hora" size="20" /></td></tr>
<tr><td bgcolor="#000000"><a>Requisição</a></td><td><input type="text" name="Requi" size="20" /></td></tr><tr><td bgcolor="#000000"><a>Nome</a></td><td><input type="text" name="Nome" size="46" /></td></tr><tr><td bgcolor="#000000"><a>Supervisor</a></td><td><input type="text" name="SU" size="46"></select></td></tr><tr><td bgcolor="#000000"><a>Motivo</a></td><td><input type="text" name="Motivo" size="46" /></td></tr><tr>
  <td bgcolor="#000000"><a>Servidor</a></td>
  <td><input type="text" name="SQE" size="20" /></td></tr>
  <tr><td bgcolor="#000000"><a>Solucionado</a></td><td><select  name="Solu"><option value="Sim">Sim   </option><option value="Não">Não</option></select></td></tr><tr><td bgcolor="#000000"><a>Responsavel</a></td><td><select  name="Respon"><option value="ELLEVEN">ELLEVEN</option><option value="USUÁRIO">USUÁRIO</option><option value="CLIENTE">CLIENTE</option></select></td></tr><tr><td bgcolor="#000000"><a>Causa</a></td><td><input type="text" name="Causa" size="20" /></td></tr><tr><td bgcolor="#000000"><a>Observação</a></td><td><textarea name="OB" rows="10" cols="50" maxlength="500"></textarea></td></tr></table>
<br/>
<table>
<tr><td colspan="2"><input type="submit" value="Salvar" onclick="return validar0()" /></td></tr>
</table> 
</form>
</body>
</html>
