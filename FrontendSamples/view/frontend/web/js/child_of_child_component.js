/*
    Podemos importar outros arquivos JS nossos ou do próprio Magento.

    Para importar dependências, podemos fazer da seguinte forma:
    Nome_Modulo/js/algum_diretorio/arquivo.js referencia o arquivo:
    Criador/NomeModulo/view/frontend/web/js/algum_diretorio/arquivo.js

    Caso queira, é possível dar um apelido aos arquivos JS através de configurações
    no arquivo view/frontend/requirejs-config.js.
*/
define([
    'uiComponent'
], function(Component){
    return Component.extend({
        defaults: {
            template: 'Caio_FrontendSamples/child_of_child_component'
        }
    });
});