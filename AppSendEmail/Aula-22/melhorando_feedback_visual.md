primeira coisa que devemos fazer é impedir o acesso ao script processa_envio.php diretamente.

vamos fazer um location para index.php caso haja algum erro no processamento dos dados. Isso porque, se acessarmos diretamente esse script, a superglobal _POST estara vazia, pois nada foi enviado. Logo, quando tentássemos acessar os campos "para", "assunto" e "mensagem" para envio do email, daria um fatal error. Por isso, devemos redirecionar o usuário

