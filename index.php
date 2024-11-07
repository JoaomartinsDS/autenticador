<html>
	<head>
	<meta charset="UTF-8"/>
	<style>
    /* Centraliza o body com flexbox */
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh; /* 100% da altura da janela */
      margin: 0; /* Remove margens padrão */
      font-family: Arial, sans-serif; /* Melhorar a fonte */
    }

    /* Estilo do formulário */
    form {
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column; /* Organiza os elementos do formulário verticalmente */
      padding: 20px;
      border: 1px solid #ccc; /* Borda do formulário */
      border-radius: 8px; /* Bordas arredondadas */
      background-color: #f9f9f9; /* Cor de fundo suave */
    }

    /* Estilo do fieldset */
    fieldset {
      border: none; /* Remove a borda padrão do fieldset */
      padding: 0;
      width: 300px; /* Define uma largura fixa */
    }

    /* Estilo dos inputs e labels */
    label {
      display: block;
      margin-bottom: 5px;
    }

    input[type="text"],
    input[type="password"] {
      width: 100%; /* Faz o input ocupar toda a largura do fieldset */
      padding: 8px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    input[type="submit"] {
      background-color: #4CAF50;
      color: white;
      border: none;
      padding: 10px 20px;
      border-radius: 4px;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #45a049;
    }
  </style>
	</head>
	
	<body>
	<form method="post" action="logica.php" id="formulario" name=formulario">
		<fieldset> 
		
			<label>Usuario: </label>
			<input type="text" name="usuario" id="usuario"/> <br/>
			
			<label>Senha: </label>
			<input type="password" name="senha" id="senha"/> <br/>
			<input type="submit" value="entrar"/>
		
		</fieldset>
	</form>
	</body>
</html>