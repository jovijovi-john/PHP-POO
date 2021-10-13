## Encapsulamento está relacionado à segurança
   
   > é uma forma de controlar a visibilidade dos atributos e métodos de acordo com as necessidades de negócios
   

   operadores de visibilidade:
    
        -> public: todos tem acesso
        -> protected: classe pai e filhas tem acesso
        -> private: somente a própria classe tem acesso

        atributos / metodos protected e private não estão disponíveis para a a aplicação, entretanto, eles se comportam diferentemente no processo de herança

    
    na verdade não é que esses atributos não possam ser acessados e modificados pela aplicação, ocorre que para fazer essa modificação de atributos privados ou protegidos nós precisamos incorporar um novo conceito, uma nova forma de pensar que é o conceito de interfaces. Criaremos métodos públicos que acessarão atributos privados ou protegidos

    Quando usamos os métodos mágicos (__get e __set), podemos acessar os atributos de maneira normal (tipo $classe->atributo_privado_ou_protected) que não dará erro nenhum. Isso porque o interpretador está usando um __get ou __set por debaixo dos panos    

    quando nós utilizamos a sintaxe de acesso ao atributo diretamente e o atributo é privado ou protegido, o php tem a inteligência de utilizar o __get ou __set de maneira automática