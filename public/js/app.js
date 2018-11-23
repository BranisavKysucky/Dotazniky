$(document).ready(function () {
// toto sluzi na to, aby checkbox (choiceType) bol vybraty iba raz, nemozem zaskrtnut nieco viackrat.
    // V twigu pootm pridal som iba data-otazka="a cislo otazky"


    $("input:checkbox").on("click",function(){
       var box=$(this);
       var otazka=box.data("otazka");
       if(box.is(":checked")) {
           var group=$(`input:checkbox[data-otazka="${otazka}"]`);
           group.prop("checked", false);
           box.prop("checked", true);

       } else {
           box.prop("checked", false);
       }
    });


// zobrazenie dat

    // $.ajax({
    //     method: "POST",
    //     url: "/mesacny_getData",
    //     data: {data: mojeData}
    // })
    //     .done(function( data ) {
    //         $('#mesacny-form').data('zaznam-id', data.zaznamId);
    //
    //         // vypise do konsoly aktualnu hodnotu datoveho parametra formulara horna-tab-form, tj data-zaznam-id
    //         console.log($('#mesacny-form').data('zaznam-id'));
    //
    //       //  $('#nadcas').val(data.zaznamData.nadcas);
    //         $('input[name="meno"]').val(data.zaznamData.meno);
    //
    //
    //     });





// Ukladanie udajov do databazy
    // pridany AJAX
    // id formularu je mesacny-form ktory ked je zakliknuty vykona nasledovnu funkciu
    // var formData je premena kde sa ukladaju datu, url odkazuje na konkretny kontroler

    $('#mesacny-form').submit(function (e) {
        e.preventDefault();

       // var zaznamId = $(e.currentTarget).data('zaznam-id');
       var formData = new FormData(e.currentTarget);

      //  console.log(zaznamId);
        console.log('/mesacny_form/');

        $.ajax({
            url: ('/mesacny_form'),
            data: formData,
            processData: false,
            contentType: false,
            type: 'POST'
            // vrati ak je vsetko OK
        }).done(function (data) {
            alert(data.msg);
            // vrati ak je chyba - je to definovane aj v kontroleri
        }).fail(function (data) {
            alert(data.msg);
        });
    });




    $('#tyzdenny-form').submit(function (e) {
        e.preventDefault();

        var formData = new FormData(e.currentTarget);

        $.ajax({
            url: ('/tyzdenny_form'),
            data: formData,
            processData: false,
            contentType: false,
            type: 'POST'
        }).done(function (data) {
            alert(data.msg);
        }).fail(function (data) {
            alert(data.msg);
        });
    });














});