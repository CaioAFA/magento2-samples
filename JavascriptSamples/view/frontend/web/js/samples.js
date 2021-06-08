define([
    'uiComponent',
    'ko'
], function(Component, ko){
    return Component.extend({
        defaults: {
            template: 'Caio_JavascriptSamples/content.html'
        },

        initialize: function(){
            this._super(); // Não se esqueça de chamar essa função!

            console.log('%c        FUNÇÃO INITIALIZE', 'color: red; font-size: 20px')
            console.log('Executada toda vez que esse arquivo JS for iniciado ou executado em outro arquivo JS!')
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