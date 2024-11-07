<?php
session_start();
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$mysqli = new mysqli("localhost","root", "", "autenticador");
mysqli_set_charset ($mysqli,"UTF8");
if ($result = $mysqli-> query("SELECT * FROM Pessoa WHERE nome = '$usuario' AND senha = '$senha'")){
			$row_cnt = $result -> num_rows;
			
			$result -> close();
			
			if ($row_cnt > 0){
				$_SESSION['usuario'] = $usuario;
				$_SESSION['senha'] = $senha;
				header("Location: restrito.php");
			}
			else{
				unset($_SESSION['usuario']);
				unset($_SESSION['senha']);
				header("Location: index.php");
			}
	
	
}
	$mysqli -> close();
	
