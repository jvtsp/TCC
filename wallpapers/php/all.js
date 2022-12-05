$(function(){
    // Executa assim que o botão de salvar for clicado
    $('#but_salvar').click(function(e){
        
        // Cancela o envio do formulário
        e.preventDefault();

        // Pega os valores dos inputs e coloca nas variáveis
        var nome = $('#nome').val();
        var password = $('#password').val();

        // Método post do Jquery
        $.post('salvar.php', {
            nome:nome,
            password:password
        }, function(resposta){
            // Valida a resposta
            if(resposta == 1){
                // Limpa os inputs
                $('input, textarea').val('');
		location.replace('https://osbdo.ddns.net/register/success.html')
            }else {
                alert(resposta);
            }
        });
        
    });
});
