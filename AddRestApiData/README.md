# Caio_AddRestApiData
Esse módulo exemplifica como adicionar dados na API Rest do Magento 2 (dentro de extension_attributes).

É possível inserir isso dentro de qualquer Model sendo retornado pela API, como por exemplo:
- Magento\Sales\Api\Data\OrderItemInterface
- Magento\Sales\Api\Data\OrderInterface
- etc.

<img src="https://github.com/CaioAFA/magento2-samples/blob/master/AddRestApiData/images/preview.png?raw=true" width="800" height="500" />

# Instalação
Execute o seguinte comando dentro da raíz do Magento 2:
```bash
bin/magento module:enable Caio_AddRestApiData
bin/magento setup:upgrade
```

# Dica
Ao trabalhar com esse tipo de funcionalidade no Magento, se algo não estiver funcionando, limpe os caches com o comando **cache:flush**, mesmo que você possua a extensão de limpeza automática de caches da MageTv!

### Funcionamento do Módulo
Neste módulo de exemplo, adicionamos alguns dados às rotas de consulta de pedidos (tanto para um pedido quanto para vários de uma só vez).

No caso, inserimos informações dentro de "extension_attributes" dos itens dos pedidos (Model Magento\Sales\Api\Data\OrderItemInterface).

### Requisitos
Para adicionar dados na API do Magento 2, temos os seguintes arquivos:

- registration.php e etc/module.xml

Arquivos necessários para o módulo ser reconhecido.

- etc/extension_attributes

Nesse arquivo, devemos informar o nome de algum atributo que irá aparecer na API dentro de algum Model. Além disso, devemos informar o tipo, que pode ser primitivo (string, int, bool, float), uma estrutura de Dados ou um array de qualquer um dos tipos. No caso de uma estrutura, é necessário criar uma interface e um Model!

- etc/di.xml

Criamos um Plugin para ser executado após a função de recuperar as informações de pedidos na Api. Dessa forma, conseguimos inserir nossos dados personalizados no retorno da Api! Para achar em qual função criaremos um Plugin, basta abrir o arquivo etc/webapi.xml do módulo que cria determinada rota da Api e procurar qual rota você deseja sobrescrever: você encontrará o nome do arquivo e o nome do método.

Além disso, caso você vá criar uma estrutura de dados no retorno da Api, é necessário declarar nesse arquivo que a interface criada pertence ao model criado.

- Plugin/OrderRepositoryPlugin.php

É nesse arquivo que implementamos como vamos inserir nossos dados no retorno da Api. Nesse caso, o método "afterGet" é executado após a função para recuperar informações de apenas um pedido; o "afterGetList" após a função que traz informações de um ou mais.


**ATENÇÃO:** Os arquivos abaixo só foram necessários pois exemplificam como criar uma estrutura de dados dentro de "extension_attributes". Caso precise adicionar somente um valor primitivo (string, bool, float ou int), não é necessário criar esses arquivos!

- Api/Data/MyCustomAttributeInterface.php

Aqui, criamos a interface do nosso Model para adicionar estruturas de dados.

- Model/MyCustomAttribute.php

Model responsável pela estrutura de dados personalizada no retorno da Api.

**Obs1:** Nos dois arquivos acima, faça a documentação da função com PHP Doc: sem isso, o módulo não funciona!

**Obs2:** Nos dois arquivos acima, preste **muita** atenção aos parâmetros do PHP Doc e das suas funções: ao invés de referenciar o caminho da sua interface, você deve referenciar todo o caminho **inserindo a palavra Extension antes da palavra Interface**. Exemplo:
- Ao invés de \Caio\AddRestApiData\Api\Data\MyCustomAttributeInterface
- Referenciamos \Caio\AddRestApiData\Api\Data\MyCustomAttributeExtensionInterface

### Testando o Módulo
Abra o Postman e faça as seguintes requisições:

1 - POST: <URL_MAGENTO>/rest/all/V1/integration/admin/token?username=<NOME_USUARIO>&password=<SUA_SENHA>

Substitua <NOME_USUARIO> pelo seu usuário no Painel Administrativo e <SUA_SENHA> por sua senha.

Essa rota serve para recuperarmos o Bearer Token de acesso à Api.

2 - GET: <URL_MAGENTO>/rest/V1/orders?searchCriteria[filter_groups][0][filters][0][field]=entity_id& searchCriteria[filter_groups][0][filters][0][value]=<ID_PEDIDO>& searchCriteria[filter_groups][0][filters][0][condition_type]=eq

Substitua <ID_PEDIDO> pelo Id de algum pedido. Não se confunda com o increment_id (que é o valor que aparece no painel). Você consegue esse valor através da tabela sales_order do banco de dados ou através da URL da página do pedido no painel administrativo.

Essa rota pode recuperar informações de vários pedidos de uma só vez através dos parâmetros searchCriteria. Nesse caso, recuperamos apenas de um pedido.

3 - GET: <URL_MAGENTO>/rest/V1/orders/<ID_PEDIDO>

Substitua <ID_PEDIDO> pelo Id de algum pedido. Essa rota traz informações de um pedido apenas.
