<?php
if($_GET["act"]=="logout"){
session_destroy();
header("location: index.php");
exit;
}
?>
<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" type="text/css" href="estilo.css" />
<title>Suporte Elleven</title>
</head>
<script language="javascript" type="text/javascript">
function validar() {
var txtLogin = form.txtLogin.value;
var txtSenha = form.txtSenha.value;
if (txtLogin == "") {
alert('Introduza seu Login');
form.txtLogin.focus();
return false;
}
if (txtSenha == "") {
alert('Introduza sua Senha');
form.txtSenha.focus();
return false;
}
}
</script>
<body>
<img src="imagens/imagem.png" alt="imagem" width="246" height="217"><br/>
<?php
//date_default_timezone_set('America/Sao_Paulo');
//$date = date('d/m/Y H:i');
//$date = date('d/m/Y');
//echo $date;
?>
<form name="form" action="Planilhas.php" method="post">
     <table>
                 <tr>
                    <td>
                        <input type="text" name="txtLogin" size="20" placeholder="Login" autofocus/>
                    </td>
					<tr>
                    <td>
                        <input type="password" name="txtSenha" size="20" placeholder="Senha" autofocus/>
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

