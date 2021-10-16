para enviar esses emails, precisamos de um servidor smtp. 

Um servidor smtp tem um funcionamento muito parecido pelos correios: nós despachamos uma determinada correspondencia e ele é responsável por receber essa correspondência e organizar a sua entrega

gmail smtp server

pesquisar por:  smtp google gmail server (https://support.google.com/a/answer/176600?hl=pt);
importante para configurar o servidor

smtp-relay.gmail.com  // smtp.gmail.com -> DNS do gmail na internet

CONFIGURAÇÕES DE SEGURANÇA E PORTA

    CRIPTOGRAFIA USADA: tls
    PORTA: 587

servidores smtp geralmente sao fechados para aplicações externas, sendo necessário autorizar previamente que apps externos ao domínio tenham acesso a realizar autenticação com aqueles usuários

ativar acesso a apps menos seguros na conta do gmail