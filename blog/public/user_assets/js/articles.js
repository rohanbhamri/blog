$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});


function getArticle(id) {
    // alert(id);
    $j = jQuery.noConflict();
    $.get('/getArticlefull', { "id": id }, function(success) {
        // alert(success.title);
        document.getElementById('title').innerHTML = success.title;
        document.getElementById('short_desc').innerHTML = success.short_desc;
        document.getElementById('breif').innerHTML = success.breif;
        $j('img').addClass('img-responsive');
    });
}