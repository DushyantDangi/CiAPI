$(document).ready(function () {

    $('.rating input:radio').attr('checked', false);

    $('.rating input').click(function () {
        $(".rating").removeClass('checked');
        $(this).parent().addClass('checked');
    });

    $('input:radio').change(
            function () {
                var userRating = this.value;
//                    alert(userRating);
                $('#feedBack_rate_driver').val(userRating);
            });
});


$(document).ready(function () {
    $('#call_status').on('change', function () {
        var recieve = $(this).val();
        if (recieve == 'recieved') {
            $('#quick_feedBack_div').show();
        } else {
            $('#quick_feedBack_div').hide();
            $('#quick_rating_div').hide();
        }

    });

    $('#quick_feedBacks').on('change', function () {

        var provide = $(this).val();

        if (provide == 'provided') {
            $('#quick_rating_div').show();
            $('#reason').hide();
            $('#following').hide();
        } else if (provide == 'not_provided') {
            $('#quick_rating_div').hide();
            $('#reason').show();
            $('#following').show();
        } else {
            $('#quick_rating_div').hide();
        }
    });


});