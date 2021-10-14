o try é responsável por encapsular todo o conteúdo sucetível a algum erro, onde nós podemos identificar e controlar uma exceção. O bloco try pode ter dois destinos: o catch (pegar) que captura um eventual erro que ocorra no bloco try; ou o finally, que é a instrução final do tratamento de erros.

a sintaxe do try catch é:

    try {

    } catch (Erro $e){

    } finally {

    }


só passa no catch caso haja o erro. O finally é opcional.

> Throw é para forçadamente lançar uma exceção:

    throw new Exception("Mensagem de exceção"); ou
    throw new Error("Mensagem de erro");


Pode ter mais de um catch no mesmo try. Preste atenção se o catch esta pegando um erro ou uma exception, se for um erro, a exception do throw vai dar problema.

É melhor usar exception que error. Deixa o error pro php