<?PHP include('menu.php'); ?>
<?PHP
# Receber os dados vindos do formulário
# incluir arquivo de conexao
include('config.php');

$nome_usu = $_POST['nome_usu']; 
$email_usu = $_POST['email_usu'];
$senha_usu = $_POST['senha_usu'];

$in = mysqli_query($conexao,"insert into tb_usuarios (nome_usu,email_usu,senha_usu) values ('$nome_usu','$email_usu','$senha_usu')") or die("Erro");
echo "Cadastro realizado com Sucesso!!!";
?>
