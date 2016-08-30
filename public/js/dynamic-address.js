$('#user-zipCode').change(function () {
    var cep = $(this).val();
    
    $.get("http://viacep.com.br/ws/" + cep + "/json/", null, function (data) {
        $('#user-zipCode').val(data.cep);
        $('#user-state').val(data.uf);
        $('#user-city').val(data.localidade);
        $('#user-neighborhood').val(data.bairro);
        $('#user-additionalData').val(data.complemento);
        $('#user-street').val(data.logradouro);
    });
});