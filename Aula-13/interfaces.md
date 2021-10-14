As classes definem os modelos para os nossos objetos, já as interfaces definem os métodos cujas classes obrigatoriamente devem implementar. Elas funcionam como especie de contrato, fazendo com que as classes que implementem essas respectivas interfaces respeitem os métodos estabelecidos nesses contratos, fazendo com que nossa aplicação tenha uma homogeneidade

   > interfaces dizem respeito apenas à métodos, e não a atributos.
   > as interfaces funcionam como um contrato. Elas definem quais são os métodos que devem ser obrigatoriamente construidos dentro das classes que implementam aquela respectiva interface
   > para criar uma interface, usamos a palavra reservada interface
   > as interfaces não implementam os métodos, elas so fazem a assinatura
   > todos os métodos na interface tem de ser públicos

   > para implementar mais de uma interface numa classe, basta separá-las com virgula

   > Também há a possibilidade de fazer interfaces herdarem regras estabelecidas em outras interfaces. Quando instanciar for criar uma classe que implemente a interface filha, será necessário implementar os métodos tanto da interface filha quanto da interface pai