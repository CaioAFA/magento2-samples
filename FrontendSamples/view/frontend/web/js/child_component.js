/*
    Podemos importar outros arquivos JS nossos ou do próprio Magento.

    Para importar dependências, podemos fazer da seguinte forma:
    Nome_Modulo/js/algum_diretorio/arquivo.js referencia o arquivo:
    Criador/NomeModulo/view/frontend/web/js/algum_diretorio/arquivo.js

    Caso queira, é possível dar um apelido aos arquivos JS através de configurações
    no arquivo view/frontend/requirejs-config.js.
*/
define([
    'uiComponent',
    'Caio_FrontendSamples/js/external_javascript'
], function(Component, externalJs){
    return Component.extend({
        defaults: {
            // Aqui definimos o arquivo de template a ser carregado.
            // O arquivo Nome_Modulo/component está em:
            // - view/frontend/web/template/child_component.html
            template: 'Caio_FrontendSamples/child_component'
        },

        executeFunction: function(){
            alert('Essa função foi definida no próprio arquivo JS do componente!')
        },

        // Funções de exemplo
        sampleClickFunction: function(){
            this.executeFunction();
        },

        importedFunction: function(){
            // Perceba que, para usar recursos de outro arquivo, devemos "executar" sua variável.
            // Observe abaixo o "externalJs()" ao invés de "externalJs":
            externalJs().externalFunction();
        }
    });
});