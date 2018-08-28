jQuery(function ($) {        
    $(".maskTelefone").inputmask({
        mask: ["(99) 9999-9999", "(99) 99999-9999"],
        keepStatic: true,
        //removeMaskOnSubmit: true
    });
    $('.maskMoney').inputmask("numeric", {
        radixPoint: ",",
        groupSeparator: ".",
        digits: 2,
        removeMaskOnSubmit: true,
        autoGroup: true,
        prefix: 'R$ ', //Space after $, this will not truncate the first character.
        rightAlign: false,
        oncleared: function () { self.Value(''); }
    });
    $(".maskCpf").inputmask({
        mask: ['999.999.999-99']
    });
    $(".maskCnpj").inputmask({
        mask: ['99.999.999/9999-99']
    });
});