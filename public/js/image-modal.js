$('.img-modal, .video-modal').click(function () {
    var modal = $('#insert-link'),
        modalUrl = $('#modal-url'),
        oldUrl = $(this).attr("src");
        
    modal.attr("item-id", '#' + $(this).attr("id"));
    //modalUrl.val(oldUrl);
    
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

// $('#create-resource').submit(function (e) {
//     var image = [];
//     $('.img-modal').each(function () {
//         image.push($(this).attr('src'));  
//     });
    
//     var video = [];
//     $('.video-modal').each(function () {
//         video.push($(this).attr('src'));  
//     });
    
//     var items = {
//         'image': image, 
//         'video': video
//     };
    
//     $('#uri-resources').val(JSON.stringify(items));
    
//     // e.preventDefault();
// });