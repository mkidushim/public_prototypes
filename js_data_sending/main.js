$(document).ready(function() {
    $('button').click(function() {
        console.log('click initiated');
        var name_in = $('.name').val();
        var age_in = $('.age').val();
        var color_in = $('.fav_color').val();
        $.ajax({

            dataType: 'html',
            data: {
                name: name_in,
                age: age_in,
                color: color_in
            },
            method: 'POST',
            cache: false,
            crossDomain: true,
            url: 'http://s-apis.learningfuze.com/sgt/reflect/',
            success: function(response) {
                console.log('response', response)
                data = response
                $('#data_display').html(data)
            }
        });
    });
});
