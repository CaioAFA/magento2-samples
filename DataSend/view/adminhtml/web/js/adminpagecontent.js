define([
    'uiComponent',
    'jquery'
], function(Component, $){
    return Component.extend({
        defaults: {
            template: 'Caio_DataSend/adminpagecontent'
        },

        sendRequest: function(){
            // Valor definido em view/adminhtml/templates/adminblock.phtml
            const postUrl = window.adminSamplePostUrl + '?isAjax=true';

            // Precisamos disso para o POST no AdminHTML. No Frontend talvez não seja necessário.
            const formKey = window.FORM_KEY;

            // Texto a ser enviado ao Controller
            const payload = $('#data-send-input').val();

            $.ajax({
                url: postUrl,
                data: {formKey, payload},
                type: 'POST',
                dataType: 'json',
                showLoader: true // Mostra o carregamento
            }).done(function(response){ 
                alert(response)
            }).error(function(xhr){
                alert('Erro! Verifique o console.')
                console.log(xhr);
            })
        }
    });
});