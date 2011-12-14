$(document).ready(function(){

    // Seach form
    $('input:text').hint();

    // Overlays
    $('#respond').addClass('overlay').before('<p><a class="overlay-trigger" rel="#respond">Leave a reply</a></p>');
    $(".overlay-trigger[rel]").overlay({

	    // some mask tweaks suitable for modal dialogs
	    mask: {
		    color: '#f0f0d0',
		    loadSpeed: 200,
		    opacity: 0.7
	    },

	    closeOnClick: false
    });
    $('.comment-reply-link').remove()

    // Add splatter to links to give a dirty look
    var alphabet = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 
                    'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 
                    'Y', 'Z', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 
                    'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 
                    'w', 'x', 'y', 'z']
    $('a:not(.close)').addClass('splatterwrapper').each( function(i) {
        $(this).append(
'<span class="splatter">'+alphabet[Math.floor(Math.random()*(alphabet.length))]+'</span>');
    });    
    
    $('.wrapper').append('<span class="leftround"><span /></span>' +
                         '<span class="rightround"><span /></span>');
    $('#head').append('<span class="splatter" style="position:absolute;' +
                        'left:' + Math.floor(Math.random()*(99)) + '%;' +
                        'top:' + Math.floor(Math.random()*(99)) +'%;">' +
                        alphabet[Math.floor(Math.random()*(alphabet.length))] + 
                      '</span>' +
                      '<span class="splatter" style="position:absolute;' +
                        'left:' + Math.floor(Math.random()*(99)) + '%;' +
                        'top:' + Math.floor(Math.random()*(99)) +'%;">' +
                        alphabet[Math.floor(Math.random()*(alphabet.length))] + 
                      '</span>' +
                      '<span class="splatter" style="position:absolute;' +
                        'left:' + Math.floor(Math.random()*(99)) + '%;' +
                        'top:' + Math.floor(Math.random()*(99)) +'%;">' +
                        alphabet[Math.floor(Math.random()*(alphabet.length))] + 
                      '</span>' +
                      '<span class="splatter " style="position:absolute;' +
                        'left:' + Math.floor(Math.random()*(99)) + '%;' +
                        'top:' + Math.floor(Math.random()*(99)) +'%;">' +
                        alphabet[Math.floor(Math.random()*(alphabet.length))] + 
                      '</span>' +
                      '<span class="splatter" style="position:absolute;' +
                        'left:' + Math.floor(Math.random()*(99)) + '%;' +
                        'top:' + Math.floor(Math.random()*(99)) +'%;">' +
                        alphabet[Math.floor(Math.random()*(alphabet.length))] + 
                      '</span>');

});

