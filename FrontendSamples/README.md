# Caio_FrontendSamples
Esse módulo exemplifica:
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

./view/frontend/web: pasta com arquivos css, JS e .html (esses últimos sendo carregados por Knockout e podendo utilizar o mesmo).

# Instalação
Execute o seguinte comando dentro da raíz do Magento 2:
```bash
bin/magento module:enable Caio_FrontendSamples
bin/magento setup:upgrade
```

# Testando o módulo
Acesse a página URL_MAGENTO/frontendsamples/content/newcontent