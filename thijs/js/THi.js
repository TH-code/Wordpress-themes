$(document).ready(function(){
	var $rows = $('.row');
	var paddingSize = 6;
	var leftSpace = ($rows.length * paddingSize);
	$('#grid'
	    ).addClass('grid'
	    ).prepend('<div class="wrapper" />'
    );
	$rows.each(function(i) {
	    if ($('.wrapper > *').length > 0) {
            $('.wrapper').append($('.wrapper > .wrap'
                ).wrap('<div class="wrap" />').parent(
                ).append($(this)
	            ).append('<div class="row clear"><div class="cell width-8 position-0"><!-- --></div><div class="cell width-4 position-8"><!-- --></div><div class="cell width-4 position-12"><!-- --></div><div class="closer"><!-- --></div></div>')
            );
		} else {
    		$('.wrapper').append($(this
	            ).wrap('<div class="wrap" />').parent(
	            ).append('<div class="row clear"><div class="cell width-8 position-0"><!-- --></div><div class="cell width-4 position-8"><!-- --></div><div class="cell width-4 position-12"><!-- --></div><div class="closer"><!-- --></div></div>')
		    );
		};
	});
});

