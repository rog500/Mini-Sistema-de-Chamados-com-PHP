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
var SQ = form0.SQ.value;
var Causa= form0.Causa.value;
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
if (SQ == "") {
alert('identifique o servidor Final');
form0.SQ.focus();
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
<a href="index.php?act=logout"><div align="right"><input type="button" value="Encerrar Sessão"/></div>
</a>
<img src="imagens/imagem.png" alt="imagem" width="246" height="217"><br/>
<form name="form0" action="Inseri.php" method="post"> 
<table border="3" >
<tr><td bgcolor="#000000"><a>Data</a></td><td><?php date_default_timezone_set('America/Sao_Paulo');$date = date('d/m/Y');echo "<b>$date</b>";?></td></tr><tr><td bgcolor="#000000"><a>Hora</a></td><td><input type="text"name="Hora" size="20" /></td></tr>
<tr><td bgcolor="#000000"><a>Gol/Smiles</a></td><td><select name="GS"><option value="Gol">Gol</option><option value="Smiles">Smiles</option><option value="N/A" selected="selected">N/A</option></select></td></tr><tr><td bgcolor="#000000"><a>Voz/Chat</a></td><td><select name="VT"><option value="Voz">Voz</option><option value="Chat">Chat</option><option value="N/A" selected="selected">N/A</option></select></td></tr><tr><td bgcolor="#000000"><a>Requisição</a></td><td><input type="text" name="Requi" size="20" /></td></tr><tr><td bgcolor="#000000"><a>Nome</a></td><td><input type="text" name="Nome" size="46" /></td></tr><tr><td bgcolor="#000000"><a>Supervisor</a></td><td><select name="SU"><option value="ADRIANA CORDEIRO DOS SANTOS">ADRIANA CORDEIRO DOS SANTOS</option><option value="ANDRE TADEU NUNES DA SILVA">ANDRE TADEU NUNES DA SILVA</option><option value="CAMILA CARVALHO PAULELI">CAMILA CARVALHO PAULELI</option><option value="CINTIA CRISTIANE SILVA">CINTIA CRISTIANE SILVA</option><option value="DARIO RAMOS DA CRUZ">DARIO RAMOS DA CRUZ</option><option value="GABRIEL DE OLIVEIRA DANTAS">GABRIEL DE OLIVEIRA DANTAS</option><option value="GLEIDI VANIA GOMES DA SILVA">GLEIDI VANIA GOMES DA SILVA</option><option value="JOSEMEIRE AZEVEDO DE CARVALHO FREITAS">JOSEMEIRE AZEVEDO DE CARVALHO FREITAS</option><option value="VALERIA OLIVEIRA MANEO">VALERIA OLIVEIRA MANEO</option><option value="EDELWEISS BARBOSA MAGELA">EDELWEISS BARBOSA MAGELA</option><option value="JOYCE ELIS DA SILVA CANTANO">JOYCE ELIS DA SILVA CANTANO</option><option value="BRUNO OLIVEIRA NUNES">BRUNO OLIVEIRA NUNES</option><option value="ANA PAULA ALVES MAIA">ANA PAULA ALVES MAIA</option><option value="CLEIDE BELARMINO DOS SANTOS CARVALHO">CLEIDE BELARMINO DOS SANTOS CARVALHO</option><option value="KATIA LISBOA SILVA">KATIA LISBOA SILVA</option><option value="LEONARDO PEREIRA VALE">LEONARDO PEREIRA VALE</option><option value="LUCIA APARECIDA NORONHA COELHO">LUCIA APARECIDA NORONHA COELHO</option><option value="ROSEMEIRE CERQUEIRA DE SOUSA">ROSEMEIRE CERQUEIRA DE SOUSA</option><option value="CAROLINA MARLENE DIAZ LAGOS">CAROLINA MARLENE DIAZ LAGOS</option><option value="LIVIA FREITAS PICCINE LIRIO">LIVIA FREITAS PICCINE LIRIO</option><option value="MARCIA DE CAMPOS BARRETO">MARCIA DE CAMPOS BARRETO</option><option value="PRISCILA FERREIRA DAS NEVES">PRISCILA FERREIRA DAS NEVES</option><option value="TELMA SOUZA MUNIZ DA SILVA">TELMA SOUZA MUNIZ DA SILVA</option><option value="ALEXANDRE CONEGUNDES DOS SANTOS">ALEXANDRE CONEGUNDES DOS SANTOS</option><option value="ELIDA CALAZANS DE SOUZA">ELIDA CALAZANS DE SOUZA</option><option value="IVANEIA MARIA DA SILVA">IVANEIA MARIA DA SILVA</option><option value="JESSICA APARECIDA BARBOSA LESTE">JESSICA APARECIDA BARBOSA LESTE</option><option value="JULIANA FERREIRA DE JESUS">JULIANA FERREIRA DE JESUS</option><option value="PATRICIA KROKOVEC REIS">PATRICIA KROKOVEC REIS</option><option value="ROSANA LACORT DA SILVA">ROSANA LACORT DA SILVA</option><option value="TADEU GUSTAVO ROCHA DA SILVA">TADEU GUSTAVO ROCHA DA SILVA</option><option value="DANIELA RIBAS GARCIA">DANIELA RIBAS GARCIA</option><option value="ELAINE SOARES COELHO RAMOS">ELAINE SOARES COELHO RAMOS</option><option value="EMANUELLE OLIVEIRA DE AQUINO">EMANUELLE OLIVEIRA DE AQUINO</option><option value="EMERSON DE VASCONCELOS">EMERSON DE VASCONCELOS</option><option value="JAQUELINE DE PAULA PEREIRA MARTINS">JAQUELINE DE PAULA PEREIRA MARTINS</option><option value="LUIZ CARLOS FERNANDES DE AZEVEDO">LUIZ CARLOS FERNANDES DE AZEVEDO</option><option value="MIRNA LUCIA DE FARIAS XAVIER">MIRNA LUCIA DE FARIAS XAVIER</option><option value="TALITA MATA DOS SANTOS SEVERO">TALITA MATA DOS SANTOS SEVERO</option><option value="TALYTA LIDIANE AGUIAR SANTOS">TALYTA LIDIANE AGUIAR SANTOS</option><option value="CLAUDIA PAIXAO RUFO">CLAUDIA PAIXAO RUFO</option><option value="SARA PEDRO DA SILVA">SARA PEDRO DA SILVA</option><option value="VIVIANE DA COSTA MOLINA">VIVIANE DA COSTA MOLINA</option><option value="LEILA PAULA PEREIRA BALEEIRO">LEILA PAULA PEREIRA BALEEIRO</option><option value="FERNANDO BENICCHIO SOARES">FERNANDO BENICCHIO SOARES</option><option value="MARIA DA CONCEICAO FRANCISCA DA SILVA">MARIA DA CONCEICAO FRANCISCA DA SILVA</option><option value="ANITIELLI RIBEIRO SURITA">ANITIELLI RIBEIRO SURITA</option><option value="VANESSA CRISTINA RAMOS MEIRA DE MENESES">VANESSA CRISTINA RAMOS MEIRA DE MENESES</option><option value="SILVIO ROBERTO MEDEIROS">SILVIO ROBERTO MEDEIROS</option><option value="Não informado">Não informado</option></select></td></tr><tr><td bgcolor="#000000"><a>Motivo</a></td><td><input type="text" name="Motivo" size="46" /></td></tr><tr>
  <td bgcolor="#000000"><a>Servidor inicial</a></td>
  <td><input type="text" name="SQE" size="20" /></td></tr><tr>
    <td bgcolor="#000000"><a>Servidor final </a></td>
    <td><input type="text" name="SQ" size="20" /></td></tr><tr><td bgcolor="#000000"><a>Solucionado</a></td><td><select  name="Solu"><option value="Sim">Sim   </option><option value="Não">Não</option></select></td></tr><tr><td bgcolor="#000000"><a>Responsavel</a></td><td><select  name="Respon"><option value="ELLEVEN">ELLEVEN</option><option value="USUÁRIO">USUÁRIO</option><option value="CLIENTE">CLIENTE</option></select></td></tr><tr><td bgcolor="#000000"><a>Causa</a></td><td><input type="text" name="Causa" size="20" height="200" width="200" /></td></tr><tr><td bgcolor="#000000"><a>Observação</a></td><td><textarea name="OB" rows="10" cols="50" maxlength="500"></textarea></td></tr></table>
<br/>
<table>
<tr><td colspan="2"><input type="submit" value="Salvar" onclick="return validar0()" /></td></tr>
</table> 
</form>
</body>
<center><a href="Escolha.php"><input type="image" name="voltar" src="imagens/voltar.png"/> </a></center>
</html>
