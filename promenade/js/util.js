$(document).ready(function() { // inicio jquery

	
	$('[texto-exemplo]').focus(function() {
        var input = $(this);
        if (input.val() == input.attr('texto-exemplo')) {
            input.val('');
            input.removeClass('placeholder');
        }
    }).blur(function() {
        var input = $(this);
        if (input.val() == '' || input.val() == input.attr('texto-exemplo')) {
            input.addClass('placeholder');
            input.val(input.attr('texto-exemplo'));
        }
    });
	$('[texto-exemplo]').blur();
    $('[texto-exemplo]').parents('form').submit(function() {
        $(this).find('[texto-exemplo]').each(function() {
            var input = $(this);
            if (input.val() == input.attr('texto-exemplo')) {
                input.val('');
            }
        })
    });	
}); // fim jquery