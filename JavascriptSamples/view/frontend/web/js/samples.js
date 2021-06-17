define([
    'uiComponent',
    'ko',
    'jquery',
    'Magento_Ui/js/modal/modal'
], function(Component, ko, $, modal){
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
        },

        initModal: function(){
            var options = {
                type: 'popup', // Tente "slide" também
                responsive: false, // Se ativado, no mobile, o modal ficará na direita da tela
                innerScroll: true,
                title: 'Meu Modal',
                clickableOverlay: false, // Se falso, não fecha o modal ao clicar fora dele
                buttons: [{
                    text: $.mage.__('Continue'),
                    class: 'my-modal-button',
                    click: function () {
                        this.closeModal();
                    }
                }],
                keyEventHandlers: {
                    escapeKey: function () { return; }, // Desabilita a tecla "Esc" de fechar o modal
                }
            };

            var popup = modal(options, $('#my-modal'));
        },

        openModal: function(){
            $("#my-modal").modal("openModal");
        }
    });
});