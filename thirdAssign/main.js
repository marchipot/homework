$(document).ready(function () {
    var data = {
        '': '',
        'january': 'winter',
        'february': 'winter',
        'march': 'spring',
        'april': 'spring',
        'may': 'spring',
        'june': 'summer',
        'july': 'summer',
        'august': 'summer',
        'september': 'fall',
        'october': 'fall',
        'november': 'winter',
        'december': 'winter',
    }


    $.each(data, function (key, value) {
        $('#mySelect')
            .append($("<option></option>")
                .attr("id", key)
                .attr("value",  value)
                .text(key));
    });

    $( "select" )
    .change(function () {
      var str = "please select a mouth";
      $( "select option:selected" ).each(function() {
       
        var id = $("#mySelect option:selected").attr("id")
        if(id !== "" && $( this ).val() !=="" )  
        str =  id + " is belong to " +  $( this ).val() + " season ";
      });
    
      $( ".output" ).text( str );
    })
    .change();
    
});



