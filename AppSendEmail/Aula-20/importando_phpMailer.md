nessa aula vamos importar o phpMailer usando o packagist.org (Repositorio por trás do composer)
pesquise PHPMailer

no lado direito, terá a opção de ver no github(https://github.com/PHPMailer/PHPMailer)
no github, clique em  branchs e depois em tags. No nosso caso, vamos usar a versão 6.4.1
baixe.

mova a pasta src para dentro de bibliotecas em app_send_email e a renomeie com PHPMailer
depois importe os arquivos em processa envio e depois importe os namespaces

POP3-> responsavel por receber
SMTP-> responsavel por enviar

a instrução die() mata o processamento do script no ponto em que a instrução é lida