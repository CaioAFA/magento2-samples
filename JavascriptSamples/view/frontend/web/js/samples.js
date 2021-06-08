define([
    'uiComponent',
    'ko'
], function(Component, ko){
    return Component.extend({
        defaults: {
            template: 'Caio_JavascriptSamples/content.html'
        },

        myClickFunction: function(){
            alert('Heeey! Eu fui clicado!')
        },

        myAfterRenderFunction: function(){
            alert('Heeey!! Eu executei um JS depois de um componente renderizar!')
        },

        myDivIsLoading: ko.observable(false),

        loadMyDiv: function(){
            // Para iniciar / parar o loading, basta alterar seu valor da seguinte forma:
            this.myDivIsLoading(true)

            setTimeout(() => {
                this.myDivIsLoading(false)
            }, 3000)
        }
    });
});