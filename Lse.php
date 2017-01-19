<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" type="text/css" href="estilo.css" />
<title>Erro ao se Logar</title>
</head>
<script language="javascript" type="text/javascript">
function validar() {
var txtLogin = form.txtLogin.value;
var txtSenha = form.txtSenha.value;
if (txtLogin == "") {
alert('introduza seu Login');
form.txtLogin.focus();
return false;
}
if (txtSenha == "") {
alert('introduza sua Senha');
form.txtSenha.focus();
return false;
}
}
</script>
<body>
<img src="imagens/imagem.png" alt="imagem" width="246" height="217"><br/>
<link rel="stylesheet" type="text/css" href="estilo.css" />
<h2>Login ou senha inválidos</h2>
<form nome="form" action="Planilhas.php" method="post"  onSubmit="return enviardados();">
     <table>
         <tr>
             <td>
                 <input type="text" name="txtLogin" size="20" placeholder="Login" />
             </td>
         <tr>
             <td>
                 <input type="password" name="txtSenha" size="20" placeholder="Senha"/>
             </td>
         </tr>
         <tr>
             <td colspan="2">
                 <input type="submit" value="Salvar" onclick="return validar()"/>
             </td>
         </tr>
		</table>
 </form>
<footer>
    <div class="footer">
        <p><center>Sistema Web em progresso 2016</p>
        <small>&copy;Todos direitos reservados</small></center></div>
</footer>
</body> 
</html>
</body>
</html>