> atributos e métodos estáticos podem ser acessados sem a instancia de um objeto com base numa classe

    atributos e métodos estáticos são criados utilizando a palavra reservada static após o operador de visibilidade

# Operador de resolução de escopo    ::

   > A partir do nome da classe utilizando o operador :: acessar diretamente os atributos e métodos estáticos. Entretanto, se tentar acessar atributos/métodos não-estáticos desta maneira, será disparado um erro.

   > Na aula, o professor conseguiu acessar um método não estático com essa sintaxe citada acimal 
   > (Classe::metodo()). Entretanto, aqui não consegui. Ele disse que não é aconselhável fazer isso.

   > se o atributo for estático, **não podemos atráves de uma instancia usar o operador -> para acessá-lo**. Mas se for um método pode.

   -> em relação a métodos estáticos, **não podemos usar o operador $this** que ajusta o contexto das variaveis internas dos métodos para trabalhar com os atributos dos objetos. Isso porque métodos estáticos podem ser chamados sem a instancia do objeto. Entao se eu tiver usando o this la dentro sem uma instancia, isso nao vai fazer sentido, porque nem instancia de um objeto temos.