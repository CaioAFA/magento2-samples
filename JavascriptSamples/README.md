# Caio_JavascriptSamples
Esse módulo exemplifica como utilizar alguns data-binds do Knockout e vincular suas páginas
com seus arquivos JS.
- afterRender: como executar códigos apenas depois que algum componente for renderizado.
- blockLoader: efeito de loading muito simples de ser implementado.
- click: como atrelar eventos de clique.

# Principais arquivos
- view/frontend/web/js/samples.js (arquivo onde estão os códigos de exemplo)
- view/frontend/web/template/content.html (arquivo HTML que é renderizado pelo arquivo JS e utiliza suas funções)

# Instalação
Dentro de seu diretório Magento 2, execute os seguintes comandos:
- bin/magento module:enable Caio_JavascriptSamples
- bin/magento setup:upgrade
- bin/magento cache:clean

# Como testar?
Acesse a seguinte página: URL_MAGENTO/javascriptsamples/jssamples/index ou URL_MAGENTO/javascriptsamples/jssamples.