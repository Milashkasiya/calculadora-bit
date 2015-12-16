/**
 * Created by Karen Araya Milashka on 16/12/2015.
 */


$(document).ready( function( ) {
    $("#cantidad, #unidades, #notacion").change( function( ) {
        var data = $("form").serializeArray( );

        $.post( "calc.php", data, function(data) {
            $(".content").html( data );
        })

    })
});

