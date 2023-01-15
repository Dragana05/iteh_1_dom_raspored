$("#dodajbutton").click(function () {

    $.ajax({
        url: '../skripte/dodajdb.php',
        type: 'get',
        data: {
            ispit_id: $('#ispit_id').val(),
            datum: $('#datum').val(),
            pocetak: $('#pocetak').val(),
            kraj: $('#kraj').val()
        },

    }).done(function () {
        alert("Uspešno dodato u raspored učenja!");
    }).fail(function (jqXHR, ajaxOptions, thrownError) {
        alert(jqXHR.responseText);
    })


});