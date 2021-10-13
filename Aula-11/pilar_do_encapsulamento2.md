**encapsulamento** no processo de **herança**

   > a classe filha herda todos os atributos e métodos da classe pai que estejam setados como public ou protected
   > no processo de herança, atributos e métodos private não são herdados

   supondo que na classe pai exista um atributo 'nome' privado. Se eu tentar acessá-lo diretamente na classe filha dará erro pois atributos privados não são herdados. Mas se eu tentar fazer um 'set nome', isso vai funcionar. O set vai criar um novo atributo dinamicamente na classe filha, que será nome. Entretanto, esse 'nome' não é o da classe pai, ele foi criado no momento em que tentamos atribuir valor a um atributo que nem existe. Aliás, esse atributo criado é public

   > para exibir os métodos do objeto usamos a função get_class_methods()

   se na classe pai tiver um __get ou __set, mesmo que tenha atributos privados, as classes filhas conseguirão acessar esses atributos diretamente. Isso porque o php meio que faz uma chamada a essas funcoes por debaixo dos panos. Entretanto, esse __get e __set só acessarão os atributos do objeto pai caso eles estejam dentro da classe pai. Caso estejam no objeto filho eles não terão acesso a esses atributos

   por exemplo, se na classe pai eu tiver um método protected ou private e fazer uma classe filha herdar esses métodos, se eu der um print_r na lista de métodos com get_class_methods(), esses métodos nao irao aparecer. Isso porque no processo de herança os operadores de visibilidade também são herdados. Por ser um método protected, a aplicação, que é a responsável pela consulta desses métodos no objeto, não tem acesso a listar essa informação pra gente.

   se na classe pai tiver um metodo publico que acesse um metodo privado, quando houver a herança e executar esse metodo publico, ainda assim vai funcionar. Isso porque o php tem a inteligencia de entender que aqueles metodos são do contexto da classe pai, e nao da filha.

   supondo que o metodo publico da classe pai seja executarAcao. O metodo privado é executar mania. Se na classe filha eu criar um novo metodo executar mania, o metodo executar acao ainda vai continuar executando o executar mania da classe pai, e nao da classe filha.
   Isso ocorre porque executarAcao preserva o contexto de executarMania, pois este é private. Entretanto, o mesmo nao ocorre  para o metodo responder() que é protected. Ele pode ser sobreescrito, e então executarAcao vai utilizar o responder() da classe filha, e não da pai.

   #principio do  encapsulamento no contexto de herança