 > Construct e Destruct também são métodos mágicos, logo iniciam com __
 > Eles fazem parte do que chamamos de ciclo de vida de um objeto

 >    __construct()

        ->  Quando criamos uma instancia de um objeto, automaticamente o método __construct() é executado, de modo que uma ação possa ser tomada no processo de inicialização do objeto.

        Utilizamos o __construct() quando precisamos configurar informações iniciais, no processo de instância, sem necessariamente chamar um método do objeto.

        sintaxe:

            function __construct($parametros){
            }

 >   __destruct()

        ->  Já o método __destruct() é executado automaticamente quando a instância do objeto é removido da memória, ou seja, quando dentro da aplicação o objeto deixa de existir

        unset serve para remover objetos da memória

        unset(), tem como parâmetro qual é a variável que contém a referência para o objeto instanciado.
        Ou seja, quando usarmos um unset() e o objeto tiver o destruct configurado, ele executará automaticamente

        o __destruct() pode ser executado assim que houver a finalização da interpretação do script. Isso porque o php desaloca os valores de memória do lado do back-end,  assim fazendo com que o destruct seja executado automaticamente