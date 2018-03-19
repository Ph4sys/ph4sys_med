(function ($) {
    // Telefone Sao Paulo
    var maskBehavior = function (val) {
            return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
        },
        options = {
            onKeyPress: function (val, e, field, options) {
                field.mask(maskBehavior.apply({}, arguments), options);
            }
        };

    $(function(){
     $("#money").maskMoney({symbol:'R$ ', 
        showSymbol:true, thousands:'.', decimal:'.', symbolStay: true});
    })

    
    $('#telefone').mask(maskBehavior, options);
    $('#tel_contato').mask(maskBehavior, options);
    $('#celular').mask(maskBehavior, options);
    $('#celular2').mask(maskBehavior, options);
    $('#cpf').mask('000.000.000-00', {reverse: true});
    $('#rg').mask('00.000.000-0', {reverse: true});
    $('#iest').mask('000.000.000.000', {reverse: true});
    $('#cnpj').mask('00.000.000/0000-00', {reverse: true});
    $('#cep').mask('00000-000');
    $('#data-nascimento').mask('00/00/0000');
})(jQuery);