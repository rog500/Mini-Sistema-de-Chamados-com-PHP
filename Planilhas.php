<?php
session_start();
$login=$_POST["txtLogin"];
$senha=$_POST["txtSenha"];
$con=mysql_connect("mysql.hostinger.com.br","u117397259_ellev","123@Gerar") or die("Sem conexão");
$select=mysql_select_db("u117397259_supor",$con);
$result=mysql_query("select * from Login_Senha
                      where Nome='$login'
					  and   Senha='$senha'
					  ");
					  if(mysql_num_rows ($result) > 0 )
{
$_SESSION['login'] = $login;
$_SESSION['senha'] = $senha;
header('location:Clientes');
}
else{
	unset ($_SESSION['login']);
	unset ($_SESSION['senha']);
	header('location:Lse');
	}
//if($login==$l&&$senha==$s)
//{
//header ("Location:Chamados.php");
//}
//else
//echo("login ou senha invalidos<br>");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<head>
        <title>Login</title>
    </head>
    <body>
<a href="http://suportes.16mb.com/"> Voltar ao menu </a>
</body>
</html>