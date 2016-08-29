$('#search-form').submit(function (e) {
    var query = $('#search-query').val();
    if (query) {
        window.location.href = "/recurso/procurar/todos/" + query + "/1"; 
    }
    e.preventDefault();
});