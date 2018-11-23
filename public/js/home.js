$(document).ready(function () {

    $.ajax({
        method: "POST",
        url: "/mesacny_getData",
        data: {data: mojeData}
    })
        .done(function( data ) {
            $('#horna-tab-form').data('zaznam-id', data.zaznamId);

            // vypise do konsoly aktualnu hodnotu datoveho parametra formulara horna-tab-form, tj data-zaznam-id
            console.log($('#horna-tab-form').data('zaznam-id'));

            $('#nadcas').val(data.zaznamData.nadcas);
            $('input[name="meno"]').val(data.zaznamData.meno);


        });







});