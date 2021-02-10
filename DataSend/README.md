# Caio_DataSend
Esse módulo exemplifica:
- Como fazer requisições HTTP com jQuery (AJAX) no Adminhtml
- Como transferir dados do Backend para o Javascript de uma página (ver arquivo app/code/Caio/DataSend/view/adminhtml/templates/adminblock.phtml), onde atribuímos um valor à variável window.adminSamplePostUrl.

# Dica
**Jamais** crie pastas dentro de Controller/Adminhtml que **começem com "Adminhtml"**, pois isso não funciona!

Se a rota não estiver dando certo de modo nenhum, **LIMPE O CACHE!**

# Instalação
Execute o seguinte comando dentro da raíz do Magento 2:
```bash
bin/magento module:enable Caio_DataSend
bin/magento setup:upgrade
```

# Testando o módulo
Acesse o Painel Administrativo e entre no menu CaioDataSend -> Acessar Página De Exemplo - AJAX
