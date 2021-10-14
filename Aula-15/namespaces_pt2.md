Importando e apelidando namespaces (Use e aliasing)

vamos aprender como importar namespaces de arquivos externos e no processo de importação, como importar esses namespaces

https://packagist.org esse site é o que está por tras do composer (gerenciador de pacotes do php)

phpmailer -> envio / recebimento de emails, trabalha com protocolo SMTP quanto com POP3 e Inep
dompdf -> biblioteca para criação de pdfs

frameworks: Slim e Laravel

ORM: doctrine

oauth -> autenticação com serviços (google, facebook, paypal). É o protocolo de autorização para acessos à apis.
         Atraves desse client, podemos acessar recursos protegidos de determinada aplicação em nome de outro usuário

char -> construção de gráficos

biblioteca de thumbnails

> a importação é válida apenas para classes e interfaces. Funções e constantes não se aplicam
> para utilizar algum recurso de um namespace, usa o termo use nomeDoNamespace\nomeDaClasse()

O uso de aliasing é para apelidar uma classe.

sintaxe: 
        
        use nomeDoNamespace\NomeDaClasse as Apelido;
        $variavel =  new Apelido()