/* Exemplo de arquivo JS com funções a serem importadas por outro arquivo. */
define([
    'uiComponent'
], function(Component){
    return Component.extend({
        externalFunction: function(){
            alert('Função em arquivo Javascript importado!')
        }
    });
});