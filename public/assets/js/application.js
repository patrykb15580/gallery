$('#content .images .image img').on('click', function() {
    var src = $(this).attr('src');
    var image = $('<img src="' + src + '" alt="" />');
    var modal = $('<div class="image-preview"></div>');

    modal.append(image).hide().appendTo('#content').fadeIn(200);
});

$(document).mouseup(function(e) {
    var image = $('#content .image-preview img');

    if (!image.is(e.target) && image.has(e.target).length === 0) {
        $('#content .image-preview').fadeOut(200, function() {
            $(this).remove();
        });
    }
});
