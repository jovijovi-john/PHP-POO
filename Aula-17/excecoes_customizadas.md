em algumas situações, inclusive em algumas libs, é comum lançar exceções customizadas. Essas exceções podem ser criadas com base na extensão da classe exception. Nós podemos criar objetos customizados de erro. Para fazer isso, basta em algum lugar do nosso codigo criar uma classe:

    ex: class MinhaExceptionCustomizada extends Exception {}