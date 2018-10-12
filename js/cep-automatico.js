$('input[name="cep"]').on('change', function(){
    var cep = $(this).val().replace(/\D/g, '')
    if (cep !== "") {
        var validacep = /^[0-9]{8}$/
        if (validacep.test(cep)) {
            $('input[name="uf"]').val("...")
            $('input[name="cidade"]').val("...")
            $('input[name="bairro"]').val("...")
            $('input[name="logradouro"]').val("...")
            $.getJSON("//viacep.com.br/ws/" + cep + "/json/?callback=?", function (dados) {
                if (!("erro" in dados)) {
                    $('input[name="logradouro"]').val(dados.logradouro);
                    $('input[name="bairro"]').val(dados.bairro);
                    $('input[name="cidade"]').val(dados.localidade);
                    $('input[name="uf"]').val(dados.uf);
                    $('input[name="logradouro_numero"]').html('').focus();
                }else {
                    alert("CEP não encontrado no Brasil, porém, você pode prosseguir colocando os dados manualmente");
                }
            })
        } else {
            alert("Formato de CEP inválido.");
        }
    }
});
