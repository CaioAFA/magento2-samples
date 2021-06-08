# Caio_FrontendSamples
Esse módulo é uma introdução a edições de Frontend. Ele exemplifica:
- Como criar blocos e inserí-los dentro de outros blocos
- Como criar componentes
- Como criar arquivos JS e importá-los em outros arquivos
- Como renderizar blocos em arquivos .phtml
- Como renderizar componentes em arquivos .phtml e .html
- Como carregar seus próprios arquivos CSS nas páginas

# Estrutura de Diretórios
./Block: arquivos com funções a serem utilizados pelos arquios .phtml.

./view/frontend/layout: pasta com arquivos XML para configuração de Blocos e componentes da página.

./view/frontend/templates: pasta com os arquivos .phtml.

./view/frontend/web: pasta com arquivos css, JS e .html (esses último sendo carregado por Knockout e podendo utilizar o mesmo).

# O que é necessário para carregar um template por Knockout?
- Criar um block no arquivo XML de layout referente à página (localizado em view/frontend/layout). O nome do arquivo será NOME_ROTA/NOME_PASTA_CONTROLLER/NOME_ARQUIVO_CONTROLLER.

- Criar o Block com as funções necessárias (Block)

- Criar o arquivo .js e .html do template. Se necessário, criar também o de CSS (dentro de view/frontend/web/css)

- Adicionar o componente a ser carregado por Knockout como filho do Bloco ou como filho de outro componente.

- Criar o arquivo .phtml de template com os códigos necessários (view/frontend/templates)

# Instalação
Execute o seguinte comando dentro da raíz do Magento 2:
```bash
bin/magento module:enable Caio_FrontendSamples
bin/magento setup:upgrade
```

# Testando o módulo
Acesse a página URL_MAGENTO/frontendsamples/content/newcontent
