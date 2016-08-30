$('.img-modal, .video-modal').click(function () {
    var modal = $('#insert-link'),
        modalUrl = $('#modal-url');
        // oldUrl = $(this).attr("src"),
        // imagePlaceholder = $('#image-placeholder').val(),
        // videoPlaceholder = $('#video-placeholder').val();
        
    modal.attr("item-id", '#' + $(this).attr("id"));
    
    modal.modal('show');
});

$('#modal-btn').click(function () {
    var modal = $('#insert-link'),
        modalUrl = $('#modal-url'),
        image = $(modal.attr('item-id')),
        newUrl = modalUrl.val();
    
    if (newUrl) {
        image.attr('src', newUrl);
    }
    
    modal.modal('hide');
});

$('#create-resource').submit(function (e) {
    var imagePlaceholder = $('#image-placeholder').val(),
        videoPlaceholder = $('#video-placeholder').val();
    
    var images = [], image;
    $('.img-modal').each(function () {
        image = $(this).attr('src');
        if (image != imagePlaceholder) {
            images.push(image);
        }
    });
    
    var videos = [], video;
    $('.video-modal').each(function () {
        video = $(this).attr('src');
        if (image != videoPlaceholder) {
            videos.push(video);
        }
    });
    
    var items = {
        'images': images, 
        'videos': videos
    };
    
    $('#uri-resources').val(JSON.stringify(items));
    
    // e.preventDefault();
});