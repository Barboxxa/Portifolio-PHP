<?php
include ('config.php');
function anti_sql_injection($string)
	{
		include('config.php');
		$string = stripslashes($string);
		$string = strip_tags($string);
		$string = mysqli_real_escape_string($conexao,$string);
		return $string;
	}

$sql = mysqli_query($conexao,"select * from tb_usuarios where email_usu='".anti_sql_injection($_POST['email_usu'])."' and senha_usu='".anti_sql_injection($_POST['senha_usu'])."' limit 1") or die("Erro");
$linhas= mysqli_num_rows($sql);
if ($linhas === '')
{
    echo "Usuário ou senha errados";
}
else 
{
    while($dados=mysqli_fetch_assoc($sql))
{
    session_start ();
    $_SESSION ['nome_usu_sessao'] = $dados['nome_usu'];
    header("location:conteudo.php");
}
}
?>