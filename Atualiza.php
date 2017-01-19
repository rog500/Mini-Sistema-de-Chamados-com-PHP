<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<title>Atualiza Senha</title>
</head>
<script language="javascript" type="text/javascript">
alert('Parabéns por seu pirmeiro acesso ao sistema suporte elleven');
alert('Por ser seu primeiro acesso eu preciso que você atualize sua senha com no minímo de 6 caracteres');
function alterar() {
var a = fo.asenha.value;
var senha="123@Mudar";
if (a == "") {
alert('Campo nova senha Não pode estar VAZIO');
fo.asenha.focus();
return false;
}
if(a.length<6){
alert('Sua senha precisa ter 6 ou mais caracteres');
fo.asenha.focus();
return false;
}
if(a==senha){
alert('Você não pode colocar a mesma senha,introduza outra senha');
fo.asenha.focus();
return false;
}
}
</script>
<body>
<img src="imagens/imagem.png" alt="imagem" width="246" height="217"><br/>
<form name="fo" action="Senha.php" method="post">
<table>
<tr>
<td>
Digite a nova senha:
</td>
<td>
<input type="password" size="20" name="asenha"/>
</td>
<tr>
<td colspan="2">
<input type="submit" value="Salvar" onclick=" return alterar()"/>
</td>
</tr>
</table>
</form>
</body>
</html>
